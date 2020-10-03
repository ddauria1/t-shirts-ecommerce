<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/table.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/users.css') }}" >
    <link href="cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Logic -->
    <script src="cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="table.js"></script>
</head>

<body>
    <script> 
        $(document).ready( function () {
            $('#myTable').DataTable();
        } ); 
    </script>
    <div class="table-responsive-vertical shadow-z-1">

        <table id='myTable' class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Surname</th>
                    <th>Date of Birth</th>
                    <th>Recent Purchase</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td data-title="ID">{{$user->id}}</td>
                    <td data-title="Firstname">{{$user->firstName}}</td>
                    <td data-title="Surname">{{$user->surName}}</td>
                    <td data-title="Date of Birth">{{$user->dateOfBirth}}</td>
                    <td data-title="Recent Purchase">{{$user->recentPurchase}}</td>
                    <td data-title="Address">{{$user->address}}</td>
                    <td data-title="Delete"><a href="/user/deleteUser/{{$user->id}}"> Delete User </a> </td>
                </tr>
                <tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/user/adduser"> Add User </a>
    <script> 
        $(document).ready( function () {
            $('#myTable').DataTable();
        } ); 
    </script>
</body>

</html>
