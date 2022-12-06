<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function showPage(){
        $viewData = array();
        $viewData["page_title"]="About us";
        $viewData["content"] = "The app name is inspired by this song by Gogol Bordello :)";

        return view("about")->with("viewData", $viewData);
    }
}
