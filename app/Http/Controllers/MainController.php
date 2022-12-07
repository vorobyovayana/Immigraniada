<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function showAboutPage(){
        $viewData = array();
        $viewData["page_title"]="About us";
        $viewData["content"] = "The app name is inspired by this song by Gogol Bordello :)";

        return view("about")->with("viewData", $viewData);
    }

    public function showHomePage(){
        $viewData = array();
        $viewData["page_title"]="Home page";


        return view("home")->with("viewData", $viewData);
    }
    public function showImmigrationPathForm(){
        $viewData = array();
        $viewData["page_title"]="Find your immigration path";
        $viewData["imm_options"] = ["Student who wants to keep studying",
        "Worker who wants to keep working",
        "Visitor"];
        $viewData["path1"]="SP E";

//        =[, "WP", "WP Ex"];

        return view("immigrationQ")->with("viewData", $viewData);
    }

    public function showWPEForm(){
        $viewData = array();
        $viewData["page_title"]="Work Permit Extension Details";


        return view("WPE")->with("viewData", $viewData);
    }
}
