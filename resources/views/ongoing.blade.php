<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <title>Completed Projects | Code Consultants</title>

    <!--External Google font css-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!--Common css-->
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="preload"><img src="images/loading.gif"></div>
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
        <a class="navbar-brand" href="index.html">
            <img src="images/code_consultant_logo_light.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-sm-0 mt-3" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-collapse__list" id="menu">
                <li class="nav-item" data-menuanchor="page1">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active dropdown">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        News
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                        <a class="dropdown-item" href="articles">Articles</a>
                        <a class="dropdown-item" href="#">Events</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-block">
        <div class="header-banner-area header-banner-area__completed-projects">
            <div class="header-banner-area__overlay">
                <h1 class="main-topic text-uppercase">Ongoing<br> Projects</h1>
            </div>
        </div>
        <div class="header-banner-area__cover-images d-lg-block d-none">
            <div class="header-banner-area__cover-images--1 shadow-lg">
                <img src="images/projects/4-2.jpg">
            </div>
            <div class="header-banner-area__cover-images--2 shadow-lg">
                <img src="images/projects/4-1.jpg">
            </div>
        </div>
        <div class="container">

            @foreach($projects as $project)
            <div class="row content-block__section">
                <div class="col-md-5 offset-md-1 col-sm-6 offset-sm-0 mt-sm-5 mt-0" data-aos="fade-up">
                    <div class="content-block__description-square align-items-center">
                        <div class="content-block__description-square-topic main-topic text-uppercase">Project</div>
                        <div class="content-block__description-square-back"></div>
                        <div class="content-block__description-square-text">
                            <h3 class="main-topic mb-0">{{$project->title}}</h3>
                            <h6 class="sub-topic mt-0">{{$project->location}}</h6>
                            <p class="mt-4">{{$project->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 mt-5" data-aos="fade-up">
                    <img width="770px" height="329px" src="{{$project->image}}" class="w-100">
                </div>
            </div>
            @endforeach

            <!-- 
            <div class="row content-block__section">
                <div class="col-md-6 col-sm-6 order-sm-0 order-1 mt-lg-3 mt-5" data-aos="fade-up">
                    <img src="images/projects/5.jpg" class="w-100">
                </div>
                <div class="col-md-5 offset-md-1 order-sm-1 order-0 mt-sm-5 mt-0" data-aos="fade-up">
                    <div class="content-block__description-square align-items-center">
                        <div class="content-block__description-square-topic main-topic text-uppercase">Project</div>
                        <div class="content-block__description-square-back"></div>
                        <div class="content-block__description-square-text">
                            <h3 class="main-topic mb-0">Jaffna University</h3>
                            <h6 class="sub-topic mt-0">Jaffna</h6>
                            <p class="mt-4">Design of 2 Stories Reinforced concrete hotel building complex.</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="row content-block__section">
                <div class="col-md-5 offset-md-1 col-sm-6 offset-sm-0 mt-sm-5 mt-0" data-aos="fade-up">
                    <div class="content-block__description-square align-items-center">
                        <div class="content-block__description-square-topic main-topic text-uppercase">Project</div>
                        <div class="content-block__description-square-back"></div>
                        <div class="content-block__description-square-text">
                            <h3 class="main-topic mb-0">Colombo City Center</h3>
                            <h6 class="sub-topic mt-0">Colombo</h6>
                            <p class="mt-4">Design of 2 Stories Reinforced concrete hotel building complex.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 mt-lg-3 mt-5" data-aos="fade-up">
                    <img src="images/projects/5.jpg" class="w-100">
                </div>
            </div> -->
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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    AOS.init();
</script>
<script>
    $(function() {
        $(".preload").fadeOut(3000, function() {});
    });
</script>

</html>