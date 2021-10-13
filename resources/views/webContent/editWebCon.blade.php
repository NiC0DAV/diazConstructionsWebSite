@extends('adm-panel.admPanel');
@section('updateWebC')

<!-- Button trigger modal -->
<a type="button" href="/admDashboard/updateWebContent/{id}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Update web content 
</a>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/admDashboard/updateWebContent/{{$webContent -> id}}/edit" method="post">
                @csrf
                <div class="form-control">
                    
                    <div class="form-group">
                        <label for="aboutUsText">About Us</label>
                        <input id="aboutUsText" class="form-control" type="text" name="aboutUsText" value="{{$webContent->aboutUsText}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="mission">Mission</label>
                        <input id="mission" class="form-control" type="text" name="mission" value="{{$webContent->mission}}">
                    </div>
    
                    <div class="form-group">
                        <label for="vission">Vission</label>
                        <input id="vission" class="form-control" type="text" name="vission" value="{{$webContent->vission}}">
                    </div>
    
                    <div class="form-group">
                        <label for="pfSv1">Preferential Services 1</label>
                        <input id="pfSv1" class="form-control" type="text" name="pfSv1" value="{{$webContent->pfSv1}}">
                    </div>
    
                    <div class="form-group">
                        <label for="pfSv2">Preferential Services 1</label>
                        <input id="pfSv2" class="form-control" type="text" name="pfSv2" value="{{$webContent->pfSv2}}">
                    </div>
    
                    <div class="form-group">
                        <label for="address">Addres (footer)</label>
                        <input id="address" class="form-control" type="text" name="address" value="{{$webContent->address}}">
                    </div>
    
                    <div class="form-group">
                        <label for="telText">Phone Number (footer)</label>
                        <input id="telText" class="form-control" type="text" name="telText" value="{{$webContent->telText}}">
                    </div>
    
                    <div class="form-group">
                        <label for="emailText">E-mail (footer)</label>
                        <input id="emailText" class="form-control" type="text" name="emailText" value="{{$webContent->emailText}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-success"> Submit new data</button>
                    </div>
                    
                </div>
            </form>
        </div>
       
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
        
      </div>
    </div>
  </div>
  <a href="/admDashboard" class="btn btn-primary">Back</a>
@endsection