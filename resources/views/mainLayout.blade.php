<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Input Zero">
    <meta name="author" content="Input Zero">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>User List</title>
    <!-- Bootstrap Core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Custom CSS -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="fix-header">

    <div id="wrapper">

        @yield('content')

    </div>

</body>
    
<footer>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    @yield('scripts')
</footer>

</html>
