@extends('adm-panel.admPanel')
@section('viewImages')

<div class="imgModule">
    <h2 class="text-center">Images section</h2>

    <table class="table table-dark table-striped mt-4 table-responsive">
        <thead>
            <tr>
                <th scope="col">Imagen</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Lugar</th>
                <th scope="col">Slider Status</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
                <td><img src="{{ url('uploads/'.$image->pathImage) }}" class="img-thumbnail img-table" alt=""></td>
                <td>{{$image->imageTitle}}</td>
                <td>{{$image->imageDescription}}</td>
                <td>{{$image->imagePlace}}</td>
                @if($image->sliderStatus == 1)
                <td>En slider</td>
                @else
                <td>No se encuentra en Slider</td>
                @endif
                <td>
                    <form action="imagesView/{{$image -> id}}/delete" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary" href="/admDashBoard/imagesView/{{ $image->id }}/edit">Edit Image</a>
                        <button type="submit" class="btn btn-danger">Delete Image</button>
                    </form>
                    
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/admDashboard" class="btn btn-primary">Back</a>
</div>

@endsection