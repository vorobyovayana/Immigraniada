<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;

use App\Models\Spouse;

class SpouseController extends Controller
{
    public function addSpouse(){
        $viewData = array();


        return view("spouseAdd")->with("viewData", $viewData);
    }
   
    public function createSpouse(Request $postData){

        //var_dump($postData);
        $ns = new Spouse();
        $ns->fName = $postData->input('fName');
        $ns->lName = $postData->input('lName');
        $ns->dob = $postData->input('dob');
        $ns->countryOfBirth = $postData->input('countryOfBirth');
        $ns->residentialAddress = $postData('residentialAddress');
        $ns->occupation = $postData('occupation');
        $ns->willAccompany = $postData('willAccompany');
        $ns->save();
        return back();

    }

    public function editSpouse($id){

        $spouse = Spouse::findorFail($id);

        //Initialize View data
        $viewData = array();
        $viewData['title'] = 'Edit '.$spouse->fName.' '.$spouse->lName;
        $viewData['spouse'] = $spouse;

        return view('spouseEdit')
            ->with('viewData',$viewData);
    }


    public function updateSpouse(Request $postData, $id)    {

        $ns = Spouse::findorFail($id);
   
        $ns->fName = $postData->input('fName');
        $ns->lName = $postData->input('lName');
        $ns->dob = $postData->input('dob');
        $ns->email = $postData->input('email');
        $ns->phone = $postData->input('phone');
        $ns->residentialAddress = $postData->input('residentialAddress');
    
        $ns->save();
        return redirect()->route('spouse.list');

    }

    public function deleteApplicant($id)    {

        Spouse::destroy($id);
        return back();

    }

    public function showSpouses(){
        $viewData = array();
        $viewData['spouses'] = Spouse::all();
    
        return view('spousesList')
            ->with("viewData",$viewData);
    }
}