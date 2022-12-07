<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {
    
    public function showIMM5707Form(){
        $viewData = array();
        $viewData["page_title"]="IMM5707 - Family Information";

        return view("forms.imm5707")->with("viewData", $viewData);
    }

    public function showIMM5709Form(){
        $viewData = array();
        $viewData["page_title"]="IMM5709 - Student Permit Form";

        return view("forms.imm5709")->with("viewData", $viewData);
    }

    public function showIMM5710Form(){
        $viewData = array();
        $viewData["page_title"]="IMM5710 - Work Permit Form";

        return view("forms.imm5710")->with("viewData", $viewData);
    }

    public function showIMM5257Form(){
        $viewData = array();
        $viewData["page_title"]="IMM5257 - Visitor Visa Form";

        return view("forms.imm5257")->with("viewData", $viewData);
    }
}