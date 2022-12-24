<nav id="header" class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <div class="col-auto">
            <button class="category" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <img src="../images/category.png" height="42" width="42" alt="">
            </button>
        </div>
        <a class="navbar-brand col-auto logo_div" href="/">
            <img class="logo_img" width="44" height="40" src="../images/logo.png" alt="">
            <span class="brand_text">BEVLIN</span>
        </a>

        <div class="col search_div">
            <div class="col" style="display: inline-block">
                <input type="text" name="" value="" class="input form-control search" placeholder="{{__("Product search")}}">
            </div>
            <div class="col-auto search-btn" style="display: inline-block">
                <button type="button" name="button" class="btn btn-primary " id="search_btn" style="border-radius: 0px 5px 5px 0px; height: 36px; width: 80px">{{__("Search")}}</button>
            </div>
        </div>
        <div class="col-auto">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle p-1 flex" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-inline-block">
                        <img src="../images/{{App::getLocale()}}.svg" class="rounded-circle" style="height: 20px;  width: 20px; object-fit: cover;" alt="">
                    </div>

                </button>

                <ul class="dropdown-menu py-0 rounded" aria-labelledby="dropdownMenuButton1">
                        <li class="active dropdown-item">
                            <a class="flex text-white text-decoration-none p-0">
                                <img src="../images/{{App::getLocale()}}.svg" class="rounded-circle mr-1" style="height: 20px; width: 20px; object-fit: cover;" alt=""><span style="font-size: 17px; margin-left: 3px; line-height: 20px">{{__(App::getLocale())}}</span>
                            </a>
                        </li>
                    @if(App::getLocale() != "en")
                        <li class="dropdown-item">
                            <a class="flex text-decoration-none p-0" href="change-language/en">
                                <img src="../images/en.svg" class="rounded-circle mr-1" style="height: 20px; width: 20px; object-fit: cover;" alt=""><span style="font-size: 17px; margin-left: 3px; line-height: 20px">{{__("en")}}</span>
                            </a>
                        </li>
                    @endif
                    @if(App::getLocale() != "ua")
                        <li class="dropdown-item">
                            <a class="flex text-decoration-none p-0" href="change-language/ua">
                                <img src="../images/ua.svg" class="rounded-circle mr-1" style="height: 20px; width: 20px; object-fit: cover;" alt=""><span style="font-size: 17px; margin-left: 3px; line-height: 20px">{{__("ua")}}</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>


        </div>
        <div class="col-auto">
            <button class="btn btn-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <img width="34" height="34" src="../images/cart.png">
            </button>
        </div>
        <div class="col-auto">
            <a class="btn btn-link" href="{{route('profile.edit')}}" >
                <img width="34" height="34" src="../images/profile.png">
            </a>
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
