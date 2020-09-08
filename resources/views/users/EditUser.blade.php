<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit User</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/users.css') }}" >
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

            <div class="content">

                @if(isset($user) && !empty($user))
                <div class="title m-b-md">
                    @if(isset($Ok))
                        {{$Ok}}
                    @endif
                    <div class="header">
                  <div class="iconbtn hamburg"></div>
                  <div class="headertitle">Add User</div>
                </div>
                <br />
                <br />
                <br />
                  <form method="post" action="/user/editUser">

                      <input type="hidden" name="id" value="{{$user->id}}">           

                      <div class="info top">
                          <p class="label ">EMAIL</p>
                          <input name="email" type="email" value="{{$user->email}}">
                      </div>

                      <div class="info">
                          <p class="label">FIRST NAME</p>
                          <input name="firstName" type="text" value="{{$user->firstName}}">
                      </div>

                      <div class="info">
                          <p class="label">LAST NAME</p>
                          <input name="surName" type="text" value="{{$user->surName}}">
                        </div>

                        <div class="info">
                          <p class="label">Date of Birth</p>
                          <input name="dateOfBirth" type="date" value="{{$user->dateOfBirth}}">
                        </div>

                        <div class="info">
                          <p class="label">Recent Purchase</p>
                          <input name="recentPurchase" type="text" value="{{$user->recentPurchase}}">
                        </div>

                        <div class="info">
                            <p class="label">Address</p>
                            <textarea name="address">{{$user->address}}</textarea>
                        </div>

                      </div>
                        @csrf
                        <input type="submit" name="submit" value="Edit User">
                      </div>
                </form>
                </div>
                    </div>
                </div>
            </div>
            @else User not found
            @endif
        </div>
    </body>
</html>
