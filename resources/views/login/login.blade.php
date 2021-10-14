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
    <link rel="stylesheet" href="{{ url('./css/loginStyle.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous"> --}}


    <!-- JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="{{ url('./js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/a4edce8cc0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>


    <title>Document</title>
</head>
    <body class="loginBody">
        <section class="sec">
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>

            <div class="box">
                <div class="square" style="--i:0;"></div>
                <div class="square" style="--i:1;"></div>
                <div class="square" style="--i:2;"></div>
                <div class="square" style="--i:3;"></div>
                <div class="square" style="--i:4;"></div>
                <div class="container">
                    <div class="form">
                        <h2>Login</h2>
                        <form action="">
                            <div class="inputBox">
                                <input class="inputField" type="text" name="login" placeholder="Email">
                            </div>
                            <div class="inputBox">
                                <input class="inputField" type="password" name="login" placeholder="Password">
                            </div>
                            <div class="inputBox">
                                <input class="inputField" type="submit" value="LogIn">
                            </div>
                            {{-- <p class="forget">Forgot your password?<a href="#">click here</a></p>
                            <p class="forget">Don't have an account yet?<a href="#">Sign Up</a></p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>