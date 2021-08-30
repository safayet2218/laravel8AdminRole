<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .home{
                margin-top: 150px;
                display: block;
            }
            
            .header{
                width: 100%;
                position: fixed;
                text-align: center;
                font-size: 40px;
            }
            .log-in{
                width: 200px;
                height: 50px;
                margin-top: 100px;
                border-radius: 10px;
                text-align: center;
                font-size: 30px;
                font-weight: bold;
                display: inline-block;
                transition-duration: 0.4s;
                border: 2px solid;
            }
            .log-in:hover{
                background-color: #1ac920;
            }
            .log-in a{
                text-decoration: none;
                color: rgb(228, 227, 189);
            }
            .log-in a:hover{
                
                color: rgb(241, 241, 241);
            }

            
        </style>
    </head>
    <body>
        <div class="d-flex justify-content-center home">
            <div class="header">
                <p>Welcome to My Site</p>
            </div>
            <div class="reg-log">
                <div class="log-in">
                    <a href="{{ route('login') }}" >Sign In</a>
                </div>
                <div class="log-in">
                    <a href="{{ route('register') }}" >Sign Up</a>
                </div>
            </div>
        </div>
    </body>
</html>
