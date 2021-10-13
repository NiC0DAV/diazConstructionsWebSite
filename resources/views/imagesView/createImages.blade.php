@extends('adm-panel.admPanel')
@section('viewImages')

<div class="imgModule">
    <h2>Images of the page</h2>


        <form action="/admDashBoard/imagesView/upload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="imageTitle">Name</label>
                <input id="imageTitle" class="form-control" type="text" name="imageTitle">
            </div>

            <div class="form-group">
                <label for="imagePlace">Place</label>
                <input id="imagePlace" class="form-control" type="text" name="imagePlace">
            </div>

            <div class="form-group">
                <label for="imageDescription">Description</label>
                <input id="imageDescription" class="form-control" type="text" name="imageDescription">
            </div>

            <div class="form-group">
                <label for="pathImage">Upload Image</label>
                <input id="pathImage" class="form-control" type="file" name="pathImage">
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>

        <a href="/admDashboard" class="btn btn-primary">Back</a>

</div>

@endsection