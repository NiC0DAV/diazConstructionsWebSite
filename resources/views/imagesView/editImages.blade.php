@extends('adm-panel.admPanel')
@section('updateImages')

<h2>Editar imagenes</h2>

<form action="/admDashboard/updateImage/{{$images->id}}/edit" method="post">
    @csrf
    @method('PUT')
    <table class="table table-dark table-striped mt-4">
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
            <tr>
                <td><img src="{{ url('uploads/'.$images->pathImage) }}" class="img-thumbnail img-table" alt=""></td>
                <td><input id="imageTitle" class="form-control" type="text" name="imageTitle" value="{{$images->imageTitle}}"></td>
                <td><input id="imageDescription" class="form-control" type="text" name="imageDescription" value="{{$images->imageDescription}}"></td>
                <td><input id="imagePlace" class="form-control" type="text" name="imagePlace" value="{{$images->imagePlace}}"></td>
                @if($images->sliderStatus == 1)
                <td>En slider</td>
                @else
                <td>No se encuentra en Slider</td>
                @endif
                <td>
                    <button class="btn btn-success">Save Info</button>     
                    <a class="btn btn-danger" href="/admDashBoard/imagesView">Cancel</a>   
                    @if($images->sliderStatus == 1)
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" value="1" name="sliderStatus" checked> Activar en slider
                        </label>
                    </div>  
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" value="0" name="sliderStatus"> Desactivar en slider
                        </label>
                    </div>
                    @elseif($images->sliderStatus == 0)
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" value="1" name="sliderStatus"> Activar en slider
                        </label>
                    </div> 
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" value="0" name="sliderStatus" checked> Desactivar en slider
                        </label>
                    </div> 
                    @endif         
                </td> 
            </tr>
        </tbody>
    </table>
</form>

{{-- <a href="/admDashboard" class="btn btn-primary">Back</a> --}}

@endsection