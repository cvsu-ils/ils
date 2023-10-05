<?php

namespace IntegratedLibrarySystem\App\Controllers;

use InfinityBrackets\Core\Application;
use InfinityBrackets\Core\Controller;
use InfinityBrackets\Core\Pagination;
use InfinityBrackets\Core\Request;
use InfinityBrackets\Exception\NotFoundException;
use IntegratedLibrarySystem\App\Models\Ebook;
use IntegratedLibrarySystem\App\Models\Category;
use IntegratedLibrarySystem\Core\Controllers\GuestController;
use IntegratedLibrarySystem\Core\Controllers\AccessLogController;
use IntegratedLibrarySystem\Core\Models\AccessLog;

class EbookController extends Controller {

    public function __construct() {
        $this->BindModel([Ebook::class, Category::class]);
    }

    public function Index(Request $request) {
        if(!GuestController::HasAuthUserOrGuest()) {
            GuestController::RedirectUserOrGuest('ebooks');
        }
        $this->SetLayout('ebooks');
        Application::$app->view->title = "E-books &sdot; CvSU ILS &sdot; Official Home Page";

        $dataRows = 20;
        $page = $request->GetValue('page') ?? 1;
        $searchString = $request->GetValue('q') ?? NULL;
        $category = $request->GetValue('category') ?? NULL;
        $order = $request->GetValue('order') ?? 'newest';
        $queryString = "?view=ebooks";

        $dbResults = $this->models['Ebook']->GetEbooks($searchString, $category, $order);
        $count = $dbResults->count;

        $data = $this->models['Ebook']->Limit(
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

        return $this->Render('ebooks/landing', [
            'count' => number_format($count),
            'ebooks' => $data,
            'pages' => $this->models['Ebook']->Paginate($count, $dataRows, ['querystring' => $queryString, 'page' => $page]),
            'categories' => $this->models['Category']->All()->Order('name')->ToObject(),
            'search' => $searchString,
            'selectedCategory' => $categoryData ?? NULL,
            'selectedOrder' => $order
        ]);
    }

    public function Read(Request $request) {
        $id = (int)$request->GetValue('id');
        if(!GuestController::HasAuthUserOrGuest()) {
            GuestController::RedirectUserOrGuest('ebook&id=' . $id);
            return;
        }
        $this->SetLayout('ebooks');

        if(!$this->models['Ebook']->Exists($id)) {
            throw new NotFoundException;
        }

        // Log access
        $accessLogController = new AccessLogController();
        $accessLogController->Add($id, 'EOA');

        $ebook = Application::$app->ToObject($this->models['Ebook']->GetEbook($id));
        $googleBooks = json_decode(file_get_contents("https://www.googleapis.com/books/v1/volumes?q=isbn:" . $ebook->ISBN), TRUE);

        Application::$app->view->title = $ebook->TITLE . " &sdot; CvSU ILS &sdot; Official Home Page";
    
        $accessLogModel = new AccessLog();

        return $this->Render('ebooks/view',[
            'ebook' => $ebook,
            'googleBooks' => Application::$app->ToObject($googleBooks),
            'views' => Application::$app->ToObject([
                'unique' => $accessLogModel->GetUniqueViews($id, 'EOA'),
                'today' => $accessLogModel->GetTodayViews($id, 'EOA')
            ])
        ]);
    }
}