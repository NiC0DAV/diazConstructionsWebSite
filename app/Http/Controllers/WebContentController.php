<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

use App\Models\galleryImage;
use App\Models\WebContent;
use App\Models\User;

class WebContentController extends Controller
{

    public function dashBoardView($id){

        $webData = WebContent::find($id);
        
        return view('adm-panel.admPanel')->with('webContent', $webData);

    }

    public function webContentInsert(Request $request){

        $webContentData = new WebContent();

        $webContentData->aboutUsText = $request->get('aboutUsText');
        $webContentData->mission = $request->get('mission');
        $webContentData->vission = $request->get('vission');
        $webContentData->pfSv1 = $request->get('pfSv1');
        $webContentData->pfSv2 = $request->get('pfSv2');
        $webContentData->address = $request->get('address');
        $webContentData->telText = $request->get('telText');
        $webContentData->emailText = $request->get('emailText');

        $webContentData->save();

        return Redirect::back();  

    }

    public function updateWebContent(Request $request, $id){
        
        $validate = \Validator::make($request->all(), [
            'aboutUsText' => ['required','alpha'],
            'mission' => ['required', 'alpha'],
            'vission' => ['required', 'alpha'],
            'pfSv1' => ['required', 'alpha'],
            'pfSv2' => ['required', 'alpha'],
            'address' => ['required', 'alpha'],
            'telText' => ['required', 'alpha'],
            'emailText' => ['required', 'alpha']
            
        ]);
        

        $webContentData = WebContent::find($id);

        $webContentData->aboutUsText = $request->get('aboutUsText');
        $webContentData->mission = $request->get('mission');
        $webContentData->vission = $request->get('vission');
        $webContentData->pfSv1 = $request->get('pfSv1');
        $webContentData->pfSv2 = $request->get('pfSv2');
        $webContentData->address = $request->get('address');
        $webContentData->telText = $request->get('telText');
        $webContentData->emailText = $request->get('emailText');

        $webContentData->save();


        return Redirect::back(); 

    }


}
