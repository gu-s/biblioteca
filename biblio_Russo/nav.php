<div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Bibliot3ca</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Libri</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php">Autore</a>
                            </li>
                            <li>
                                <a href="index.php" >editore</a>
                            </li>                            
                        </ul>
                    </li>
                    
                    <li>
                        <a id="bkoff"  href="#">Area Riservata</a>
                    </li>
                   <?php if(isset($_SESSION['account'])){    ?>
                    <li><a href="logout.php">LogOut</a>&nbsp;&nbsp;&nbsp;&nbsp;
                   <?php   } ?></li>
                    
                </ul>
                </div>
</div>
