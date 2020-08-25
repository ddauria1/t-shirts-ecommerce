<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="welcome.css" rel="stylesheet" type="text/css" />
        <link href="css\test.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <style>
            
                </style>

            <div class="content">
                <div class="title m-b-md">

                    <div class="header">
                  <div class="iconbtn hamburg"></div>
                  <div class="headertitle">Account Details</div>
                </div>
                <br />
                <br />
                <br />
                  <div class="info top">
                      <p class="label ">EMAIL</p>
                      <p class="data">{{$name}}.{{$surname}}@hotmail.com</p>
                  </div>

                  <div class="info">
                      <p class="label">FIRST NAME</p>
                      <p class="data">Dilan</p>
                  </div>

                  <div class="info">
                      <p class="label">LAST NAME</p>
                      <p class="data">{{$surname}}</p>
                    </div>

                    <div class="info">
                      <p class="label">Last Purchase</p>
                      <p class="data">{{$recentPurchase}}</p>
                    </div>

                    <div class="info">
                      <p class="label">Date of Birth</p>
                      <p class="data">{{$dob}}</p>
                    </div>

                    <div class="info">
                        <p class="label">Address</p>
                        <p class="data">{{$address}}</p>
                    </div>

                  </div>
                  </div>
                </div>
    
  



</div>



                </div>                
            </div>
        </div>
    </body>
</html>
