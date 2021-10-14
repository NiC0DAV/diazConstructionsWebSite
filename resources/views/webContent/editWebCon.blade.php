@extends('adm-panel.admPanel');
@section('updateWebC')
<h2 class="">Update web content</h2>
<form action="/admDashBoard/updateWebContent/{{$webContent -> id}}/edit" method="post">
    @csrf
    <div class="row">
        
        {{-- <div class="form-group col-md-6">
            <label for="aboutUsText">About Us</label>
            <input id="aboutUsText" class="form-control" type="text" name="aboutUsText" value="">
        </div> --}}
        <div class="form-group col-md-6">
            <label for="aboutUsText">About Us</label>
            <textarea id="aboutUsText" class="form-control" name="aboutUsText" rows="2">{{$webContent->aboutUsText}}</textarea>
        </div>
        
        <div class="form-group col-md-6">
            <label for="mission">Mission</label>
            {{-- <input id="mission" class="form-control" type="text" name="mission" value="{{$webContent->mission}}"> --}}
            <textarea id="mission" class="form-control" name="mission" rows="2">{{$webContent->mission}}</textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="vission">Vission</label>
            {{-- <input id="vission" class="form-control" type="text" name="vission" value="{{$webContent->vission}}"> --}}
            <textarea id="vission" class="form-control" name="vission" rows="2">{{$webContent->vission}}</textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="pfSv1">Preferential Services 1</label>
            {{-- <input id="pfSv1" class="form-control" type="text" name="pfSv1" value="{{$webContent->pfSv1}}"> --}}
            <textarea id="pfSv1" class="form-control" name="pfSv1" rows="2">{{$webContent->pfSv1}}</textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="pfSv2">Preferential Services 1</label>
            {{-- <input id="pfSv2" class="form-control" type="text" name="pfSv2" value="{{$webContent->pfSv2}}"> --}}
            <textarea id="pfSv2" class="form-control" name="pfSv2" rows="2">{{$webContent->pfSv2}}</textarea>
        </div>

        <div class="form-group col-md-2 mt-1 mb-1">
            <label for="address">Addres (footer)</label>
            <input id="address" class="form-control" type="text" name="address" value="{{$webContent->address}}">
        </div>

        <div class="form-group col-md-2">
            <label for="telText">Phone Number (footer)</label>
            <input id="telText" class="form-control" type="text" name="telText" value="{{$webContent->telText}}">
        </div>

        <div class="form-group col-md-2">
            <label for="emailText">E-mail (footer)</label>
            <input id="emailText" class="form-control" type="text" name="emailText" value="{{$webContent->emailText}}">
        </div>
        <div class="d-grid gap-2 col-md-3 mx-auto mt-3">
            <button class="btn btn-success">Update information</button>
        </div>
        
    </div>
</form>
@endsection