<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\galleryImage;
use App\Models\WebContent;
use App\Models\User;

class UpdatesController extends Controller
{

    public function index(){

        return view('adm-panel.admPanel');

    }

    public function updateWebContent(){

        if ( $loggedUser = '1'){
            // Actualizar datos
                $validate = \Validator::make($webContentData, [
                    'aboutUsText' => ['required','alpha'],
                    'mission' => ['required', 'alpha'],
                    'vission' => ['required', 'alpha'],
                    'pfSv1' => ['required', 'alpha'],
                    'pfSv2' => ['required', 'alpha'],
                    'address' => ['required', 'alpha'],
                    'telText' => ['required', 'alpha'],
                    'emailText' => ['required', 'alpha']

                ]);

                //Actualizar datos en BD
                $webContentUpdate = WebContent::where('idText', 1)->update($webContentData);

                $status = 'Success';

        }else{
            $status = 'Error';
        }

    }

    public function updateImagesGallery(){

        if ( $loggedUser = '1'){
            // Actualizar datos
                $validate = \Validator::make($webContentData, [
                    'imageTitle' => ['required','alpha'],
                    'imageDescription' => ['required', 'alpha'],
                    'imagePlace' => ['alpha'],
                    'pathImage' => ['alpha'],
                    'sliderStatus' => ['required']
                ]);

                //Actualizar datos en BD
                $webContentUpdate = WebContent::where('idText', 1)->update($webContentData);

                $status = 'Success';

        }else{
            $status = 'Error';
        }
    }

}
