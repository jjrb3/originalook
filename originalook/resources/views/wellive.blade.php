<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Wellive</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="{{asset('tema_cliente/v2.0/css/style.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper video-background">
    <!--
    Video from YouTube
  
    -->
    <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=LFpJ6S1OPRs', containment:'body', autoPlay:true, mute:true, startAt:1, stopAt: 53, opacity:1, }"></a>

    <div class="overlay"></div>

    <div class="site-wrapper-inner">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand"><i class="fa fa-phone fa-fw"><a href="tel:1234567890"></i> (301) 495-4136<br><small>Click Para Llamar <i class="fa fa-level-up"></i></small></a></h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope fa-fw"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="cover-container">
            <div class="inner cover">
                <h1 class="cover-heading">Wellive</h1>
                <p class="lead">La Mejor Forma De Ofrecer Tus Servicios De Bienestar y Belleza Facilmente En Una Sola Aplicación</p>
                <p class="lead"><a href="inicio" class="btn btn-lg btn-default">Saber Mas</a></p>
            </div>

            <div class="mastfoot">
                <div class="row">
                <div class="col-md-12"> <p>------Trabajando para satisfacer a nuestros clientes------</p></div>
                   
                </div>
            </div>

            </div>

    </div>
</div>

<!-- Modal video -->
<div class="modal fade ingresar-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <video width="900" autoplay>
                <source src="recursos/videos/wellive1.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>
    </div>
</div>
<!-- Fin Modal video -->

<!--la otra section -->



<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- Plugins and Custom JavaScript -->
<script src="{{asset('tema_cliente/v2.0/js/device.min.js')}}"></script>
<script src="{{asset('tema_cliente/v2.0/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('tema_cliente/v2.0/js/custom.js')}}"></script>

<!--
Google Analitics
Demo Purpose Only
Change UA-XXXXXXX-X to be your site's ID
 -->
<script>
    $('.ingresar-modal').modal();
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-1057679-2', 'auto');
    ga('send', 'pageview');
</script>

</body>
</html>