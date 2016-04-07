<?php 
include './autentication.inc';
include_once './config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="author" content="Gustavo D.">
        <title>Biblioteca</title>
        <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
        <header>
        <div id="header">
            <?php include './header.php'; ?>
        </div>
        </header>
        
        <nav id="nav" class="navbar navbar-inverse navbar-fixed-top " role="navigation">            
            <?php include './nav.php'; ?>           
        </nav>
        <!-- Page Content -->
    <div class="container" id="corpo">
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="list-unstyled" id="contenitore">
                <?php include './cms/inserisci.php'; ?>
                                  
                </ul>                    
            </div>                
        </div>
        <!-- /.row -->        
    </div>
    <!-- /.container -->    
        
        <footer id="footer" class="footer navbar-inverse navbar-fixed-bottom">
              <?php include './footer.php'; ?>         
        </footer>        
        <!-- /.container -->      
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/miojavascript.js" type="text/javascript"></script>
        
    </body>
</html>