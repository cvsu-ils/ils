<?php

namespace IntegratedLibrarySystem\App\Controllers;

use InfinityBrackets\Core\Application;
use InfinityBrackets\Core\Controller;
use InfinityBrackets\Core\Pagination;
use InfinityBrackets\Core\Request;
use IntegratedLibrarySystem\App\Models\Ejournal;
use IntegratedLibrarySystem\App\Models\Category;
use IntegratedLibrarySystem\Core\Controllers\GuestController;
use IntegratedLibrarySystem\Core\Controllers\AccessLogController;
use IntegratedLibrarySystem\Core\Models\AccessLog;

class EjournalController extends Controller {

    public function __construct() {
        $this->BindModel([Ejournal::class, Category::class]);
    }

    public function Index(Request $request) {
        if(!GuestController::HasAuthUserOrGuest()) {
            GuestController::RedirectUserOrGuest('ejournals');
        }
        $this->SetLayout('ebooks');
        Application::$app->view->title = "E-journals &sdot; CvSU ILS &sdot; Official Home Page";

        $dataRows = 20;
        $page = $request->GetValue('page') ?? 1;
        $searchString = $request->GetValue('q') ?? NULL;
        $category = $request->GetValue('category') ?? NULL;
        $order = $request->GetValue('order') ?? 'newest';
        $queryString = "?view=ejournals";

        $dbResults = $this->models['Ejournal']->GetEjournals($searchString, $category, $order);
        $count = $dbResults->count;

        $data = $this->models['Ejournal']->Limit(
            $dataRows,
            ((int)$page - 1) * $dataRows,
            $dbResults->data
        )->ToObject();

        if($searchString) {
            $queryString = $queryString . "&q=" . $searchString;
        }
        if($category) {
            $queryString = $queryString . "&category=" . $category;
            $categoryData = Application::$app->ToObject(['id' => $category, 'name' => Category::ToName($category)]);
        }
        if($order) {
            $queryString = $queryString . "&order=" . $order;
        }

        return $this->Render('ejournals/landing', [
            'count' => number_format($count),
            'ejournals' => $data,
            'pages' => $this->models['Ejournal']->Paginate($count, $dataRows, ['querystring' => $queryString, 'page' => $page]),
            'categories' => $this->models['Category']->All()->Order('name')->ToObject(),
            'search' => $searchString,
            'selectedCategory' => $categoryData ?? NULL,
            'selectedOrder' => $order
        ]);
    }

    public function Read(Request $request) {
        $id = (int)$request->GetValue('id');
        $this->SetLayout('ebooks');

        if(!$this->models['Ejournal']->Exists($id)) {
            throw new NotFoundException;
        }

        // Log access
        $accessLogController = new AccessLogController();
        $accessLogController->Add($id, 'EJOA');

        $ejournal = Application::$app->ToObject($this->models['Ejournal']->GetEjournal($id));

        Application::$app->view->title = $ejournal->TITLE . " &sdot; CvSU ILS &sdot; Official Home Page";
    
        $accessLogModel = new AccessLog();

        return $this->Render('ejournals/view', [
            'ejournal' => $ejournal,
            'views' => Application::$app->ToObject([
                'unique' => $accessLogModel->GetUniqueViews($id, 'EJOA'),
                'today' => $accessLogModel->GetTodayViews($id, 'EJOA')
            ])
        ]);
    }
}