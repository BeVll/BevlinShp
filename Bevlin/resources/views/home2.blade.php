<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <nav id="header" class="navbar navbar-dark bg-secondary fixed-top">
        <div class="container-fluid">
            <div class="col-auto">
                <button class="category" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="42px" height="42px" viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve">  <image id="image0" width="42" height="42" x="0" y="0" href="data:image/png;base64,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 YII="/>
                </svg>
                </button>
            </div>
            <a class="navbar-brand col-auto logo_div" href="/">
                <img class="logo_img" width="40" height="40" src="../images/logo.png" alt="">
                <span class="brand_text">BEVLIN</span>
            </a>

            <div class="col search_div">
                <div class="col" style="display: inline-block">
                    <input type="text" name="" value="" class="input form-control search" placeholder="Пошук товарів">
                </div>
                <div class="col-auto search-btn" style="display: inline-block">
                    <button type="button" name="button" class="btn btn-primary " id="search_btn" style="border-radius: 0px 5px 5px 0px; height: 36px; width: 80px">Знайти</button>
                </div>
            </div>
            <div class="col-auto">
                <button class="btn btn-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <img width="34" height="34" src="../images/cart.png">
                </button>
            </div>
            <div class="col-auto">
                <button class="btn btn-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <img width="34" height="34" src="../images/profile.png">
                </button>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>
