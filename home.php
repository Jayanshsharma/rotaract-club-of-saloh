<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="icon" type="image/gif/png" href="img/title.png">
    <link rel="stylesheet" href="admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <title>Rotaract Club of Saloh H.p</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>

    <script src="admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
            });
        });
    </script>
</head>
<body>
    <script data-ad-client="ca-pub-3482929739237150" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
    <section id="top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fa fa-phone"></i><a href="tel: +919358253652">+91 9358253652</a></li>
                        <li><i class="fa fa-phone"></i><a href="tel: +919530376467"> +91 9530376467</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:rotaractsaloh@gmail.com">rotaractsaloh@gmail.com</a></li>



                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 social">
                    <ul class="social_links">

                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i> </a></li>

                    </ul>
                </div>
            </div>
        </div>
        </div>

    </section>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>

                        <a class="navbar-brand" href="index.php">
                        <img src="123456.png" width="235px" alt="" class="d-inline-block align-middle mr-2"></a>

                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active nav-item"><a href="index.html" style="color:black">Home</a></li>
                        
                            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="true" style="color:black">About Rotary <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-item"><a href="What_is_rotary.html" style="color:black">What is Rotary</a>
                                    </li>
                                    <div class="divider"></div>
                                    <li class="dropdown-item"><a href="Hist.html" style="color:black">History of Rotary</a>
                                    </li>
                                    <div class="divider"></div>
                                    <li class="dropdown-item"><a href="Paul_Harris_RF.html" style="color:black">Paul Harris: Rotary's Founder</a>
                                    </li>
                                    <div class="divider"></div>
                                    <li class="dropdown-item"><a href="https://www.rotary.org/en/about-rotary/our-structure" target="_blank" style="color:black">Organization Structure</a>
                                    </li>
                                    <div class="divider"></div>
                                    <li class="dropdown-item"><a href="https://rotarynewsonline.org/current-issue/" target="_blank" style="color:black">Rotary News Online</a>
                                    </li>
                                    <div class="divider"></div>
                                    <li class="nav-item"><a href="http://rid3070.rotaryindia.org" target="_blank" style="color:black">RI DISTT. 3070</a></li>
                                    <div class="divider"></div>
                                    <li><a href="https://www.rotary.org/en" target="_blank" style="color:black">Rotary International</a></li>
                                </ul>
                            </li>



                           
                        
                              

                            </li>
                            <li class="nav-item"><a href="mediayear.php" style="color:black">Media</a></li>
                            <li class="nav-item"><a href="https://forms.gle/jriyEv9ufrtZj1v78" style="color:black">Donate</a>   
                            <li><a href="contact.html" style="color:black">Contact us</a>
                            <li class="nav-item"> <a href="logout.php" style="color:black">Logout</a>
                        </li>

                        </ul>
                    </div>


                </div>
            </div>
        </nav>
        
     <h1>Hello, Rotarian <?php echo $_SESSION['name']; ?></h1>
     <h1>Site Under Progress</h1>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>