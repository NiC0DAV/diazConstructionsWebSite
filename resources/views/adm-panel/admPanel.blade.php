<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> 
    
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('./css/style.css') }}">
    
        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('./js/main.js') }}"></script>
        <script src="https://kit.fontawesome.com/a4edce8cc0.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    
    <h1>admPanel</h1>
<hr>
    <div class="imgModule">
        <h2>Images of the page</h2>


            <form action="/admDashboard/newImage" method="post" enctype="multipart/form-data">
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

    </div>
<hr>
    <div class="sliderImagesModule">
        <h2>Slider Images</h2>
    </div>
<hr>   
    <div class="webContentModule">
        <h2>NEW Web Content</h2>

        <form action="/admDashboard/newWebContent" method="post">
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

                <button class="btn btn-success">Submit new web CONTENT</button>
                
            </div>
        </form>
    </div>


    <div class="webContentModule">
        <h2>UPDATE Web Content</h2>

        <form action="/admDashboard/updateWebContent/{{$webContent -> id}}" method="post">
            @csrf
            <div class="form-group">

                <div class="form-group">
                    <label for="aboutUsText">aboutUsText</label>
                    <input id="aboutUsText" class="form-control" type="text" name="aboutUsText" value="{{$webContent->aboutUsText}}">
                </div>
                
                <div class="form-group">
                    <label for="mission">mission</label>
                    <input id="mission" class="form-control" type="text" name="mission" value="{{$webContent->mission}}">
                </div>

                <div class="form-group">
                    <label for="vission">vission</label>
                    <input id="vission" class="form-control" type="text" name="vission" value="{{$webContent->vission}}">
                </div>

                <div class="form-group">
                    <label for="pfSv1">pfSv1</label>
                    <input id="pfSv1" class="form-control" type="text" name="pfSv1" value="{{$webContent->pfSv1}}">
                </div>

                <div class="form-group">
                    <label for="pfSv2">pfSv2</label>
                    <input id="pfSv2" class="form-control" type="text" name="pfSv2" value="{{$webContent->pfSv2}}">
                </div>

                <div class="form-group">
                    <label for="address">address</label>
                    <input id="address" class="form-control" type="text" name="address" value="{{$webContent->address}}">
                </div>

                <div class="form-group">
                    <label for="telText">telText</label>
                    <input id="telText" class="form-control" type="text" name="telText" value="{{$webContent->telText}}">
                </div>

                <div class="form-group">
                    <label for="emailText">emailText</label>
                    <input id="emailText" class="form-control" type="text" name="emailText" value="{{$webContent->emailText}}">
                </div>

                <button class="btn btn-success"> web CONTENT</button>
                
            </div>
        </form>
    </div>

</body>
</html>