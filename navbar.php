    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" onclick="setPage('herobanner')"><img src="App/Images/rasalogo.png" height="40px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" onclick="setPage('aboutus')" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About US
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" onclick="setPage('menu')" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" onclick="setPage('gallery')" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" onclick="setPage('review')" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reviews
                        </a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" onclick="setPage('bookingpolicy')" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reservation Policy
                        </a>
                    </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" onclick="setPage('contact')" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact US
                        </a>
                    </li>

                </ul>
        <ul class="navbar-nav">
            <!--<li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/profile.php?id=100091817333277&mibextid=rS40aB7S9Ucbxw6v" target="_blank"><i class="bi bi-facebook"></i></a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/rasasangam?igsh=MWFmajhvMmtiZmI1OA==" target="_blank"><img src="App/Images/insta.png" height="30px" style="border-radius:20%"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.swiggy.com/restaurants/rasa-sangam-hennur-bagalur-main-rd-geddalahalli-bangalore-671662" target="_blank"><img src="App/Images/swiggy.png" height="30px" style="border-radius:20%"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.zomato.com/bangalore/rasa-sangam-hennur-bangalore" target="_blank"><img src="App/Images/zomato.png" height="30px" style="border-radius:20%"></a>
            </li>
        </ul>
        <button class="btn btn-sm btn-outline-success" onclick="setPage('booktbl')">Book A Table</button>
                <!--<form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
                <form id="siteform" method="post">
                    <input type="hidden" name="page_name" id="page_name">
                </form>
            </div>
        </div>
    </nav>
