@extends('adm-panel.admPanel')
@section('reviewStatusCheck')

<h2>Approve Reviews</h2>

{{-- <form action="/admDashboard/updateImage/{{$reviews->id}}/edit" method="post"> --}}
    @csrf
    <table class="table table-dark table-striped mt-4 table-responsive">
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
            @foreach ($reviews as $review)
            <tr>
                <td>{{$review->userName}}</td>
                <td>{{$review->userEmail}}</td>
                <td>{{$review->userLocation}}</td>
                <td>{{$review->userDescription}}</td>
                @if($review->reviewStatus == 1)
                <td>Approved</td>
                @else
                <td>Not Approved</td>
                @endif
                <td>
                    <form action="/admDashBoard/reviewsCheck/{{$review->id}}/delete" method="delete">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary" href="/admDashBoard/reviewsCheck/statusChange/{{ $review->id }}">Approve</a>
                        <button type="submit" class="btn btn-danger">Delete review</button>
                    </form>
                    
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
{{-- </form> --}}


@endsection