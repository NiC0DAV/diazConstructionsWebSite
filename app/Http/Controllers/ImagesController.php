<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galleryImage;

class ImagesController extends Controller
{

    public function imagesView(){
        
        $images = galleryImage::all();
        return view('imagesView.viewImages')->with('images', $images);

    }

    public function imagesCreateView(){
        
        return view('imagesView.createImages');

    }

    public function editImagesCreateView($id){
        
        $images = galleryImage::find($id);
        return view('imagesView.editImages')->with('images', $images);

    }

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

            $images->save();
            
        }else{
            // return $request;
            dd($images->pathImage);
            die();
        }

        return redirect('/admDashBoard/imagesView');

    }

    public function editImage($id)
    {
        $images = galleryImage::find($id);

        return view('imagesView.editImages')->with('images', $images);
    }

    public function updateImage(Request $request, $id)
    {
        $images = galleryImage::find($id);

        $images->imageTitle = $request->get('imageTitle');
        $images->imagePlace = $request->get('imagePlace');
        $images->imageDescription = $request->get('imageDescription');
        $images->sliderStatus = $request->get('sliderStatus');
        $images->save();

        return redirect('/admDashBoard/imagesView');
    }

    public function destroy($id)
    {
        $images = galleryImage::find($id);
        $images->delete();
        return redirect('/admDashBoard/imagesView');
    }
}
