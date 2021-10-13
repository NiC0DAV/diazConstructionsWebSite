@extends('adm-panel.admPanel')
@section('createImages')

<div class="imgModule">
    <h2 class="">Upload new image</h2>

<hr>
        <form action="/admDashBoard/imagesView/upload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="imageTitle">Name</label>
                    <input id="imageTitle" class="form-control" type="text" name="imageTitle">
                </div>

                <div class="form-group col-md-6">
                    <label for="imagePlace">Place</label>
                    <input id="imagePlace" class="form-control" type="text" name="imagePlace">
                </div>

                <div class="form-group col-md-6">
                    <label for="imageDescription">Description</label>
                    <input id="imageDescription" class="form-control" type="text" name="imageDescription">
                </div>

                <div class="form-group col-md-6">
                    <label for="pathImage">Upload Image</label>
                    <input id="pathImage" class="form-control" type="file" name="pathImage">
                </div>
                <div class="d-grid gap-2 col-md-3 mx-auto mt-3">
                    <button class="btn btn-primary">Submit</button>
                </div>
                
            </div>
            
        </form>
</div>

@endsection