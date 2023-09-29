<!doctype html>
<html lang="en">

<head>
    <title>Berlin - Portfolio Template</title>

    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0);
            /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="description" content="Berlin Portfolio Template">
    <meta name="keywords" content="personal, portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="/admin-assets//img/Logo Smile GoHome.png" rel="icon">
    <link href="/admin-assets//img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/user-assets/css/bootstrap.css" />
    <link rel="stylesheet" href="/user-assets/css/reset.css" />
    <link rel="stylesheet" href="/user-assets/css/style.css" />
    <link rel="stylesheet" href="/user-assets/css/animate.css" />
    <link rel="stylesheet" href="/user-assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="/user-assets/css/magnific-popup.css" />

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Font icons -->
    <link rel="stylesheet" href="/user-assets/icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/user-assets/icon-fonts/essential-regular-fonts/essential-icons.css" />

    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="diag">

    <!-- LOADER -->
    <!-- <div class="loader-wrapper">
        <div class="loader"></div>
    </div> -->

    <!-- konten -->
    <?= $this->include('user/layout/navbar') ?>
    <?= $this->renderSection('konten'); ?>
    <?= $this->include('user/layout/footer') ?>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!-- Javascripts -->
    <script src="/user-assets/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
    <script src="/user-assets/js/smoothscroll.js"></script>
    <script src="/user-assets/js/bootstrap.min.js"></script>
    <script src="/user-assets/js/wow.min.js"></script>
    <script src="/user-assets/js/isotope.pkgd.min.js"></script>
    <script src="/user-assets/js/typed.js"></script>
    <script src="/user-assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/user-assets/js/owl.carousel.min.js"></script>
    <script src="/user-assets/js/main.js"></script>

</body>

</html>