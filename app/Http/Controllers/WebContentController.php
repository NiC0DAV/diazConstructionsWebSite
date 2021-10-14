<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

use App\Models\galleryImage;
use App\Models\WebContent;
use App\Models\User;

class WebContentController extends Controller
{

    public function dashBoardView(){

        return view('adm-panel.admPanel');

    }

    public function createWebContentView(){

        return view('webContent.createWebCon');

    }

    public function updateWebContentView($id){

        $webContentData = WebContent::find($id);
        return view('webContent.editWebCon')->with('webContent', $webContentData);

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

        return redirect('/admDashboard');  

    }

    public function updateWebContent(Request $request, $id){

        $webContentData = WebContent::find($id);

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

        $webContentData->aboutUsText = $request->get('aboutUsText');
        $webContentData->mission = $request->get('mission');
        $webContentData->vission = $request->get('vission');
        $webContentData->pfSv1 = $request->get('pfSv1');
        $webContentData->pfSv2 = $request->get('pfSv2');
        $webContentData->address = $request->get('address');
        $webContentData->telText = $request->get('telText');
        $webContentData->emailText = $request->get('emailText');

        $webContentData->save();

        return redirect('/admDashBoard/updateWebContent/1');

    }


}
