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
            
            body {
                                    margin:0px;
                                    background-image:url("http://workstuff.net/justimghost/bg_bluer_2200.jpg");
                                    background-repeat:no-repeat;
                                    overflow-y:hidden; /*temporarily hide scrollbar*/}
                                
                                  /* NEW STYLES FOR ACCOUNT SETTINGS ===================*/
                                  .info {
                                    padding-top:8px;
                                    padding-left:6%;
                                    padding-right:6%;}
                                  
                                  .top {
                                    margin-top:-20px;}
                                  
                                  .info-box {
                                    width:100%;
                                    border:1px solid #d9d9d9;
                                    padding-bottom:4%;}
                                  
                                  .label {
                                    font-family:'Avenir W01';
                                    font-size: 14px;
                                    color:#999999;}
                                  
                                  p.data {
                                    font-family:'Avenir W01';
                                    font-weight:300;
                                    font-size:18px;
                                    line-height:0px;
                                    color:#333;}
                                  
                                  .edit {  
                                    height:48px;
                                    width:100%;
                                    font-family:'Avenir W01';
                                    font-weight:500;
                                    font-size:16px;
                                    color:#333;
                                    box-sizing:border-box;
                                    text-align:right;
                                    padding-top:14px;
                                    padding-right:2%; }
                                  
                                  .red {
                                    color:#E34949;}
                                  
                                  .edit:hover {
                                    background-color:#f2f2f2;}
                                  
                                  .edit:active {
                                    background-color:#eaebec;}
                                  
                                  
                                  /* Header ================*/
                                  .header {
                                    position: relative;
                                    z-index: 10;
                                    width: 100%;
                                    height: 50px;
                                    box-sizing: border-box;
                                    margin-right: auto;
                                    margin-left: auto;
                                    background-color: #4cb2e1;
                                    box-shadow: rgba(0, 0, 0, 0.2) -2px 2px 1px 1px;
                                    color: white;
                                    font-size: 20px;
                                    text-align: center;
                                    font-family: "OpenSans";
                                    font-weight: 400;}
                                  
                                  .headertitle {
                                    font-family:'Avenir W01';
                                    font-weight: 400;
                                    padding-top:16px;}
                                  
                                  .iconbtn {
                                    padding-top:16px;
                                    width: 50px;
                                    height: 50px;
                                    box-sizing: border-box;
                                    font-family: FontAwesome, sans-serif;
                                    font-size: 25px;
                                    font-weight: 400;}
                                  
                                  .iconbtn:hover {
                                    background-color: rgba(88, 88, 88, 0.15);}
                                  
                                  .iconbtn:active {
                                    background-color: rgba(88, 88, 88, 0.35);
                                  }
              
                                  .iconbtn.back {
                                    float: left;
                                    text-align: center;
                                  }
              
                                  .iconbtn.hamburg {
                                    float: right;
                                    text-align: center;
                                  }
              
              
                                  /*TYPOGRAPHY===================*/
                                  h2{  
                                    color: #585858;
                                    font-family: 'Avenir W01', sans-serif;
                                    font-size: 18px;
                                    line-height: 24px;
                                    font-weight: 400;
                                    text-align: left;
                                    margin-bottom:4%;}
                                  
                                  
                                  
                                  
                                  /* Content ================*/
                                  .container{
                                    width:100%;
                                    max-width:800px;
                                    margin-left:auto;
                                    margin-right:auto;
                                    height:100vh;
                                    box-shadow: rgba(0, 0, 0, 0.1) -1px 0px 0px 2px;
                                    background-color:#fafafa;}
                                  
                                  /*BUTTON - note max width ==============*/
                                  .btn-dark {
                                    box-sizing:border-box;
                                    width:100%;
                                    max-width:600px;
                                    margin:0px auto;
                                    padding-top:12px;
                                    color:#fff;
                                    font-family:'Avenir W01';
                                    font-weight:medium;
                                    font-size:20px;
                                    text-align:center;
                                    background-color:#585858;
                                    height:50px;
                                    box-shadow: rgba(0, 0, 0, 0.2) -2px 2px 1px 1px;}
                                  
                                  .btn-dark:hover {
                                    background-color:#4f4f4f; 
                                  }
                                  .btn-dark:active {
                                    background-color:#333333;
                                  }
              
                                  /*THIS PINS THE BUTTON TO THE BOTTOM ==============*/
                                  .btn-box {
                                    position:absolute;
                                    bottom:2%;
                                    left:2%;
                                    right:2%;}
            </style>

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
                  <form method="post" action="/user/adduser">
                      <div class="info top">
                          <p class="label ">EMAIL</p>
                          <input name="email" type="email" value="{{$user->email}}">
                      </div>

                      <div class="info">
                          <p class="label">FIRST NAME</p>
                          <input name="firstName" type="text">
                      </div>

                      <div class="info">
                          <p class="label">LAST NAME</p>
                          <input name="surName" type="text">
                        </div>

                        <div class="info">
                          <p class="label">Date of Birth</p>
                          <input name="dateOfBirth" type="date">
                        </div>

                        <div class="info">
                          <p class="label">Recent Purchase</p>
                          <input name="recentPurchase" type="text">
                        </div>

                        <div class="info">
                            <p class="label">Address</p>
                            <textarea name="address"> </textarea>
                        </div>

                      </div>
                        @csrf
                        <input type="submit" name="submit" value="Add User">
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
