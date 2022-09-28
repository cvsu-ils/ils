<?php

namespace IntegratedLibrarySystem\App\Controllers;

use InfinityBrackets\Core\Application;
use InfinityBrackets\Core\Controller;
use InfinityBrackets\Core\Database;
use InfinityBrackets\Core\Request;
use InfinityBrackets\Core\Response;
use InfinityBrackets\Middlewares\AuthMiddleware;
use IntegratedLibrarySystem\App\Middlewares\ProfileMiddleware;

class ProfileController extends Controller {

    public function __construct() {
        $this->RegisterMiddleware(new AuthMiddleware(['Index', 'Create']));
        $this->RegisterMiddleware(new ProfileMiddleware(['Index']));
    }

    public function Index() {
        $this->layout = "admin";
        Application::$app->view->title = Application::$app->user['google_userinfo']['gu_name'] . " &sdot; CvSU ILS";
        return $this->Render('profile/index', ['user' => Application::$app->user]);
    }

    public function Create(Request $request, Response $response) {
        if($this->HasProfile()) {
            $response->Redirect('/profile');
        }
        if($request->getMethod() === 'get') {
            $this->layout = "admin";
            // Fetch campuses
            $db = new Database(Application::$app->config->env->APP_ENV == 'local' ? 'ils-local' : 'ils-live');
            $campuses = $db->Select("SELECT * FROM `master_campuses` ORDER BY `id`")->Get();
            $colleges = $db->Select("SELECT * FROM `master_colleges` ORDER BY `abbr`")->Get();
            $offices = $db->Select("SELECT * FROM `master_offices` ORDER BY `id`")->Get();
            $tempInfo = $db->SelectOne("SELECT * FROM `master_students` WHERE `email` = :in_email ORDER BY `id`", ['in_email' => Application::$app->user['user']['email']])->Get();

            Application::$app->view->title = "Create Profile &sdot; CvSU ILS";
            return $this->Render('profile/create', [
                'user' => Application::$app->user,
                'campuses' => $campuses,
                'colleges' => $colleges,
                'offices' => $offices,
                'tempInfo' => $tempInfo
            ]);
        }
        if($request->getMethod() === 'post') {
            $data = $request->GetBody();
            switch($data['userType']) {
                case "Student":
                    $userType = 1;
                    break;
                case "Faculty":
                    $userType = 2;
                    break;
                case "Staff":
                    $userType = 3;
                    break;
            }

            $db = new Database(Application::$app->config->env->APP_ENV == 'local' ? 'ils-local' : 'ils-live');
            $id = $db->InsertOne("profiles", ['first_name', 'middle_name', 'last_name', 'campus_id', 'user_type_id', 'employee_id', 'position', 'office_id', 'student_number', 'college_id', 'course_id', 'sex', 'address', 'mobile_number'], [
                ':in_first_name' => $data['firstName'],
                ':in_middle_name' => $data['middleName'] ?? NULL,
                ':in_last_name' => $data['lastName'],
                ':in_campus_id' => $data['campus'],
                ':in_user_type_id' => $userType,
                ':in_employee_id' => $data['employeeId'] ?? NULL,
                ':in_position' => $data['position'] ?? NULL,
                ':in_office_id' => $data['office'] ?? NULL,
                ':in_student_number' => $data['studentNumber'] ?? NULL,
                ':in_college_id' => $data['college'] ?? NULL,
                ':in_course_id' => $data['course'] ?? NULL,
                ':in_sex' => $data['sex'],
                ':in_address' => $data['address'],
                ':in_mobile_number' => $data['mobileNumber']
            ]);
            $db->Update("users", ['profile_id' => ':in_id'], "WHERE `email` = :in_email", ['in_email' => Application::$app->user['user']['email'], 'in_id' => $id]);

            Application::$app->ToJSON(array('data' => $data, 'status' => "success"));
        }
    }

    public function HasProfile() {
        return !empty(Application::$app->user['user']['profile_id']) ? TRUE : FALSE;
    }

    public function GetCourses(Request $request) {
        $id = (int)$request->GetBody()['id'];
        $db = new Database(Application::$app->config->env->APP_ENV == 'local' ? 'ils-local' : 'ils-live');
        $courses = $db->Select("SELECT * FROM `master_courses` WHERE `college_id` = :in_college_id ORDER BY `id`", ['in_college_id' => $id])->Get();

        $data = '<option value="" selected disabled>Choose course...</option>';
        if($courses) {
            foreach($courses as $course) {
                $data .= '<option value="' . $course['id'] . '">' . $course['abbr'] . '</option>';
            }
        }

        Application::$app->ToJSON($data);
    }
}