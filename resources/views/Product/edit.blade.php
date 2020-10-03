<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
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

        <div classs="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="align-self-center flex-grow-1">Edit product | #1 Lenovo IdeaPad i300</div>

                                <div class="align-self-center text-right">
                                    <a href="" class="btn btn-danger">Cancel</a>
                                    <a href="" class="btn btn-primary"><i class="fa fa-image"></i> Manage media</a>
                                    <a href="" class="btn btn-primary"><i class="fa fa-comments"></i> Reviews</a>
                                    <a href="" class="btn btn-primary"><i class="fa fa-save"></i> Save</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST">
                                <!-- main product data -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://via.placeholder.com/250" class="img-thumbnail img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">ID</label>
                                            <div class="col-sm-5">
                                                <input type="text" readonly class="form-control-plaintext" value="1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="name"
                                                    value="Lenovo IdeaPad i300">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="category" class="col-sm-3 col-form-label">Category</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" id="category">
                                                    <option>Ноутбуки</option>
                                                    <option>Планшеты</option>
                                                    <option>Компьютеры</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="brand" class="col-sm-3 col-form-label">Brand</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" id="brand">
                                                    <option>Asus</option>
                                                    <option>HP</option>
                                                    <option>Lenovo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="manufacturer_id" class="col-sm-3 col-form-label">Manufacturer
                                                ID</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="manufacturer_id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /main product data -->

                                <!-- Attributes -->
                                <h4>Attributes</h4>
                                <hr />
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="attr_1" class="col-sm-2 col-form-label">Модель</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="attr_1" value="i300" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="attr_2" class="col-sm-2 col-form-label">Цвет</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="attr_2" value="Серый" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="attr_3" class="col-sm-2 col-form-label">Вес</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="attr_3" value="2кг" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Attributes -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
