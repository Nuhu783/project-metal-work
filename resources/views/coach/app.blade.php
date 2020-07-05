
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}">
    <title>Welcome to Meddy project</title>

    <link rel="shortcut icon" href="images/gt_favicon.png">
    
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

 
    <link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="css/main.css">

    
    @yield('content')
    @include('inc.nav')

</head>

<body class="home">
    @include('inc.footer')
</body>
</html>
