<?php

namespace App\Http\Controllers;

class ApplicantController extends Controller
{
    public function showPersonalQuestions(){
        $viewData = array();
        $viewData["page_title"]="Find your immigration path";
  

//        =[, "WP", "WP Ex"];

        return view("personalInfo")->with("viewData", $viewData);
    }
}