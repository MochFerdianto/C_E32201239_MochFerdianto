<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="/backend/img/favicon.png">

  <title>{{ config('app.name')}}</title>

  <!-- Bootstrap CSS -->
  <link href="/backend/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="/backend/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="/backend/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="/backend/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="/backend/css/style.css" rel="stylesheet">
  <link href="/backend/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">
    @yield('content')
  </div>


</body>

</html>
