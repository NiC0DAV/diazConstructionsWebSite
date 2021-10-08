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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ url('./css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">


    <!-- JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="{{ url('./js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/a4edce8cc0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>


    <title>Document</title>
</head>
<body>
    {{-- <div class="abUsContent"> --}}
        <h1>REVIEWS</h1>
        <form action="/newReview" method="post">
            @csrf
    
            <div class="form-group">
                <label for="userName">Name</label>
                <input id="userName" class="form-control" placeholder="Terrance James" type="text" name="userName">
            </div>
            <div class="form-group">
                <label for="userEmail">E-Mail</label>
                <input id="userEmail" class="form-control" type="text" placeholder="example@email.com" name="userEmail">
            </div>
            <div class="form-group">
                <label for="userLocation">Location</label>
                <input id="userLocation" class="form-control" type="text" placeholder="Fort Lee - New Jersey" name="userLocation">
            </div>
            <div class="form-group">
                <label for="userDescription">Text</label>
                <textarea id="userDescription" class="form-control" type="text" placeholder="Write what you want" name="userDescription" rows="3"></textarea>
            </div>
    
            <button class="btn btn-success">Submit review</button>
        
        </form>
    {{-- </div> --}}`
</body>
</html>