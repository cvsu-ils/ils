<?php

namespace IntegratedLibrarySystem\App\Controllers;

use InfinityBrackets\Core\Application;
use InfinityBrackets\Core\Controller;
use InfinityBrackets\Core\Request;
use InfinityBrackets\Core\Response;
use InfinityBrackets\Exception\BadRequestException;
use IntegratedLibrarySystem\App\Controllers\ProfileController;

class LandingController extends Controller {

    public function __construct() {
        
    }

    public function Index() {
        $this->layout = "admin";
        Application::$app->view->title = "CvSU ILS &sdot; Official Home Page";
        return $this->Render('landing/welcome', ['profileController' => new ProfileController()]);
    }

    public function About() {
        Application::$app->view->title = "About &sdot; CvSU ILS";
        return $this->Render('landing/about');
    }

    public function Campus(Request $request) {
        // Check if code exists
        $value = $request->GetValue('code');

        if(!$value)  {
            throw new BadRequestException;
        }

        Application::$app->view->title = ucfirst($value) . " Campus Library &sdot; CvSU ILS";
        return $this->Render('landing/campus', ['code' => strtoupper($value)]);
    }

    public function Personnel() {
        Application::$app->view->title = "Personnel &sdot; CvSU ILS";
        return $this->Render('landing/personnel');
    }

    public function OnlineServices() {
        Application::$app->view->title = "Online Library Services &sdot; CvSU ILS";
        return $this->Render('services/online');
    }

    public function PhysicalServices() {
        Application::$app->view->title = "Physical Library Services &sdot; CvSU ILS";
        return $this->Render('services/physical');
    }

    public function Download(Request $request, Response $response) {
        // Check if code exists
        $value = $request->GetValue('form');
        
        if(!$value)  {
            throw new BadRequestException;
        }
    
        $ip = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        
        $db = Application::$app->database;
        $results = $db->Select("SELECT * FROM `downloadable_forms` WHERE `slug` = :in_slug", ['in_slug' => $value]);
        if($results->Count() <= 0) {
            if(!$value)  {
                throw new BadRequestException;
            }
        }
    
        $storagePath = 'assets/files/forms/';
        $id = $results->Get()[0]['id'];
        $filename = $results->Get()[0]['filename'];
        $filetype = $results->Get()[0]['filetype'];
        $file = $storagePath . $filename . '.' . $filetype;
    
        // Record logs
        $log = $db->InsertOne("form_logs", ['form_id', 'ip', 'user_agent'], [':in_form_id' => $id, ':in_ip' => $ip, ':in_user_agent' => $userAgent]);
    
        if($log) {
            $reponse->DownloadFile($file);
        }
    }
}