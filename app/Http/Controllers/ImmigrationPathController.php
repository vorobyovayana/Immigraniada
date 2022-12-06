<?php

namespace App\Http\Controllers;

class ImmigrationPathController extends Controller
{
    public function showForm(){
        $viewData = array();
        $viewData["page_title"]="Find your immigration path";
        $viewData["content"] = "";

        return view("immigrationQ")->with("viewData", $viewData);
    }
}
