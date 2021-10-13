@extends('adm-panel.admPanel')
@section('reviewStatusEdit')

<h2>Editar imagenes</h2>

<form action="/admDashBoard/reviewsCheck/statusChange/{{$reviews->id}}/edit" method="put">
    @csrf
    @method('PUT')
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Location</th>
                <th scope="col">Description</th>
                <th scope="col">Approve Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$reviews->userName}}</td>
                <td>{{$reviews->userEmail}}</td>
                <td>{{$reviews->userLocation}}</td>
                <td>{{$reviews->userDescription}}</td>
                @if($reviews->reviewStatus == 1)
                <td>Approved</td>
                @else
                <td>Not Approved</td>
                @endif
                <td>
                    @if($reviews->reviewStatus == 1)
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" value="1" name="reviewStatus" checked> Approve review
                            </label>
                        </div>  
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" value="0" name="reviewStatus"> Disapprove review
                            </label>
                        </div>
                        @elseif($reviews->reviewStatus == 0)
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" value="1" name="reviewStatus"> Approve review
                            </label>
                        </div> 
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" value="0" name="reviewStatus" checked> Disapprove review
                            </label>
                        </div> 
                        @endif         
                        <button class="btn btn-success">Save Info</button>       
                </td> 
            </tr>
        </tbody>
    </table>
</form>
{{-- <a href="/admDashboard" class="btn btn-primary">Back</a> --}}
@endsection