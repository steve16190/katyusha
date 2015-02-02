<?php
/*
 * User registration page
 *
 * Author:  Stephen Smith
 * Date:    28/01/15
 * Version: 1.0
 */

require($_SERVER['DOCUMENT_ROOT'] . "/lib/runtime.inc");

$type = (isset($_GET['q']) && !empty($_GET['q'])) ? $_GET['q'] : null;
$form = $_SERVER['DOCUMENT_ROOT'] . "/signup/forms/" . ucwords($type) . "Register.php";

if($type === null){
    $std->goHome();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The home of talent. A central hub for entertainment professionals. A worldwide service aimed at bringing the talent and opportunities in the entertainment community together.">
    <meta name="author" content="Stephen John Smith">

    <title>Register <?php echo $type; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Signup forms CSS -->
    <link href="css/signup.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Katyusha</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <!--<div class="container">-->

        <div class="row">
            <?php require($form); ?>
        </div>
        <!-- /.row -->

    <!--</div>-->
    <!-- /.container -->

    <!--jQuery-->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.easing.minified.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    
    <!--Registration javascript-->
    <script src="js/register.js"></script>

</body>

</html>
