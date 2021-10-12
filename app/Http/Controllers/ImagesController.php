<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galleryImage;

class ImagesController extends Controller
{


    public function imagesUpload(Request $request)
    {
        $images = new galleryImage();

        $images->imageTitle = $request->input('imageTitle');
        $images->imagePlace = $request->input('imagePlace');
        $images->imageDescription = $request->input('imageDescription');

        if($request->hasfile('pathImage')){
            $file = $request->file('pathImage');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('uploads', $fileName);
            $images->pathImage = $fileName;
        }else{
            return $request;
            $images->pathImage = '';
        }

        // dd($images->pathImage);
        // die();
        $images->save();

        return redirect('/admDashboard/1');
    }

    public function destroy($id)
    {
        //
    }
}
