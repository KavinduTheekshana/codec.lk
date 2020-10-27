<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">

    <title>Articles | Code Consultants</title>

    <!--External Google font css-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!--Common css-->
    <link rel="stylesheet" href="{{asset('css/fontawesome-free-5.14.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="preload"><img src="{{asset('images/loading.gif')}}"></div>
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('images/code_consultant_logo_light.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

      
        <div class="collapse navbar-collapse mt-sm-0 mt-3" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-collapse__list" id="menu">
                <li class="nav-item" data-menuanchor="page1">
                    <a class="nav-link" href="/#page1">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown-1">
                        <span data-menuanchor="page2"><a class="dropdown-item" href="/#page2">Completed Projects</a></span>
                        <span data-menuanchor="page3"><a class="dropdown-item" href="/#page3">Ongoing Projects</a>
                    </div>
                </li>
                <li class="nav-item" data-menuanchor="page4">
                    <a class="nav-link" href="/#page4">Services</a>
                </li>
                <li class="nav-item" data-menuanchor="page5">
                    <a class="nav-link" href="/#page5">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About Us</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        News
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                        <a class="dropdown-item" href="articles">Articles</a>
                        <a class="dropdown-item" href="events.html">Events</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-block">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-lg-8 offset-lg-2">
                    <h3 class="card-title text-dark mt-3">{{$articles->title}}</h3>
                    <p class="card-text"><small class="text-muted">Last updated : {{ date('d-M-Y', strtotime($articles->updated_at)) }}</small></p>
                    <img src="{{ asset($articles->image) }}" class="rounded-0 w-100" height="500px" style="overflow: hidden; object-fit: cover;" alt="...">
                    <p class="card-text text-dark mt-3 paragraph-text">{!! $articles->description !!}</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="border-0">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-sm-4 offset-sm-4">
                    <h6 class="text-bold">CODE Consultants (Pvt) Ltd</h6>
                    <h6 class="mb-4 text-secondary">10, Albert Crescent, Colombo 07</h6>
                    <p class="margin-bottom-0 mb-0 text-secondary">Tel: +94 112166320 | Email: code@codec.lk | Web: www.codec.lk</p>
                </div>
                <div class="col-sm-4 text-lg-right">
                    <ul class="social-icon margin-top-20 p-0 mt-3 mr-0 mb-0 ml-0">
                        <li class="d-inline-block"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="d-inline-block"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="d-inline-block"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="d-inline-block"><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/aos.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    AOS.init();
</script>
<script>
    $(function() {
        $(".preload").fadeOut(3000, function() {
        });
    });
</script>
</html>