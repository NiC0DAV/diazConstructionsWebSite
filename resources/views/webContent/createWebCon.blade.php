@extends('adm-panel.admPanel');
@section('createWebC')

    <div class="webContentModule">
        <h2>NEW Web Content</h2>

        <form action="/admDashBoard/NewWebContent/create" method="post">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="aboutUsText">aboutUsText</label>
                    <input id="aboutUsText" class="form-control" type="text" name="aboutUsText">
                </div>
                
                <div class="form-group">
                    <label for="mission">mission</label>
                    <input id="mission" class="form-control" type="text" name="mission">
                </div>

                <div class="form-group">
                    <label for="vission">vission</label>
                    <input id="vission" class="form-control" type="text" name="vission">
                </div>

                <div class="form-group">
                    <label for="pfSv1">pfSv1</label>
                    <input id="pfSv1" class="form-control" type="text" name="pfSv1">
                </div>

                <div class="form-group">
                    <label for="pfSv2">pfSv2</label>
                    <input id="pfSv2" class="form-control" type="text" name="pfSv2">
                </div>

                <div class="form-group">
                    <label for="address">address</label>
                    <input id="address" class="form-control" type="text" name="address">
                </div>

                <div class="form-group">
                    <label for="telText">telText</label>
                    <input id="telText" class="form-control" type="text" name="telText">
                </div>

                <div class="form-group">
                    <label for="emailText">emailText</label>
                    <input id="emailText" class="form-control" type="text" name="emailText">
                </div>

                <button class="btn btn-success">Save new web content</button>
                
            </div>
        </form>
        <a href="/admDashboard" class="btn btn-primary">Back</a>
    </div>

@endsection