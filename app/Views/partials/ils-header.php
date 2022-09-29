<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-md-12 ils-bg-green">
            <div class="ils-header"> 
                <a href="./" style="text-decoration: none !important;">
                    <img class="ils-header-logo" src="storage/images/CvSU-logo-64x64.webp" width="64px" height="64px">
                    <div class="ils-website text-white">
                        Cavite State University
                        <span class="ils-website-sub text-white"><br>Integrated Library System</span>
                    </div>
                </a>
                <?php
                    if(!$this->app->user) {
                        echo '<div class="ils-mobile pt-2">
                            <a href="' . $this->app->config->auth->google->url . '">
                                <div class="google-btn d-inline-block">
                                    <div class="google-icon-wrapper">
                                    <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                                    </div>
                                    <p class="btn-text"><b>Sign in with google</b></p>
                                </div>
                            </a>
                        </div>';
                    } else {
                        echo '<div class="ils-mobile">
                            <div class="nav-item dropdown">
                                <a class="nav-link p-0 dropdown-toggle text-white" href="javascript:void(0)" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="rounded-circle" src="' . $this->app->user->google_userinfo->gu_picture . '" height="24px"> Hi! ' . $this->app->user->google_userinfo->gu_name . '</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown08">
                                        <a class="dropdown-item" href="?view=profile">Profile</a>
                                        <a class="dropdown-item" href="?view=deauth">Signout</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- To activate Navbar-mobile MENU -->
<div class="bg-dark d-md-none d-block">
    <div class="container">
        <div class="text-right py-2">
            <button onclick="toggleMenu()" class="btn btn-secondary rounded-0">Menu <i class="fa fa-bars"></i></button>
        </div>
    </div>
</div>
<!------------------------------------ Navbar Mobile --------------------------------------------------->
<div id="navbar-mobile" class="bg-dark d-none">
    <div class="container">
        <div class="text-right mt-4">
            <button onclick="toggleMenu()" class="btn btn-danger rounded-0">Close X</button>
        </div>
        <div id="accordion">
            <div class="accordion-item">
                <a href="./" class="btn btn-secondary btn-block rounded-0 text-left">Home</a>
            </div>
            <div class="accordion-item">
                <a href="http://library.cvsu.edu.ph/dashboard" class="btn btn-secondary btn-block rounded-0 text-left" target="_blank">Dashboard</a>
            </div>
            <div class="accordion-item">
                <a href="?view=about" class="btn btn-secondary btn-block rounded-0 text-left">About</a>
            </div>
            <div class="accordion-item">
                <button data-toggle="collapse" data-target="#catalog-mobile" class="btn btn-secondary btn-block rounded-0 text-left">Catalog <i class="fa fa-caret-down"></i></button>
                <div id="catalog-mobile" class="collapse accordion-item-content" data-parent="#accordion">
                    <div class="accordion-item-content-item">
                        <a href="http://library.cvsu.edu.ph/" class="text-dark accordion-content-link" target="_blank">
                            <h5 class="text-main">E-Library <span class="badge badge-info text-white" style="font-size: 0.6em;">Powered by Koha</span></h5>
                        </a>
                    </div>
                    <div class="accordion-item-content-item">
                        <a href="http://library.cvsu.edu.ph/ebooks" class="text-dark accordion-content-link" target="_blank">
                            <h5 class="text-main">E-Books</h5>
                        </a>
                    </div>
                    <div class="accordion-item-content-item">
                        <a href="http://library.cvsu.edu.ph/ejournal" class="text-dark accordion-content-link" target="_blank">
                            <h5 class="text-main">E-Journals</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button data-toggle="collapse" data-target="#services-mobile" class="btn btn-secondary btn-block rounded-0 text-left">Services <i class="fa fa-caret-down"></i></button>
                <div id="services-mobile" class="collapse accordion-item-content" data-parent="#accordion">
                    <div class="accordion-item-content-item">
                        <a href="?view=onlineservices" class="text-dark accordion-content-link">
                            <h5 class="text-main">Online Library Services</h5>
                        </a>
                    </div>
                    <div class="accordion-item-content-item">
                        <a href="?view=physicalervices class="text-dark accordion-content-link">
                            <h5 class="text-main">Physical Library Services</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button data-toggle="collapse" data-target="#campuses-mobile" class="btn btn-secondary btn-block rounded-0 text-left">CvSU Library Campuses <i class="fa fa-caret-down"></i></button>
                <div id="campuses-mobile" data-parent="#accordion" class="collapse accordion-item-content">
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Main</h5>
                        <a href="?view=about" class="text-dark accordion-content-link">History</a>
                        <a href="?view=aboutp#Vision" class="text-dark accordion-content-link">Vision</a>
                        <a href="?view=about#Mission" class="text-dark accordion-content-link">Mission</a>
                        <a href="?view=about#Goals" class="text-dark accordion-content-link">Goals</a>
                        <a href="?view=about#Objectives" class="text-dark accordion-content-link">Objectives</a>
                        <a href="?view=personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=MAIN" class="text-dark accordion-content-link">Building Directory</a>
                        <a href="?view=campus&code=MAIN#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=MAIN#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=MAIN#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=MAIN#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Bacoor City</h5>
                        <a href="?view=campus&code=BACOORCITY" class="text-dark accordion-content-link">Overview</a>
                        <a href="?view=campus&code=BACOORCITY#Vision" class="text-dark accordion-content-link">Vision</a>
                        <a href="?view=campus&code=BACOORCITY#Mission" class="text-dark accordion-content-link">Mission</a>
                        <a href="?view=campus&code=BACOORCITY#Goals" class="text-dark accordion-content-link">Goals</a>
                        <a href="?view=campus&code=BACOORCITY#Objectives" class="text-dark accordion-content-link">Objectives</a>
                        <a href="?view=campus&code=BACOORCITY#Personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=BACOORCITY#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=BACOORCITY#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=BACOORCITY#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=BACOORCITY#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">CCAT</h5>
                        <a href="?view=campus&code=CCAT" class="text-dark accordion-content-link">Overview</a>
                        <a href="?view=campus&code=CCAT#Vision" class="text-dark accordion-content-link">Vision</a>
                        <a href="?view=campus&code=CCAT#Mission" class="text-dark accordion-content-link">Mission</a>
                        <a href="?view=campus&code=CCAT#Goals" class="text-dark accordion-content-link">Goals</a>
                        <a href="?view=campus&code=CCAT#Objectives" class="text-dark accordion-content-link">Objectives</a>
                        <a href="?view=campus&code=CCAT#Personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=CCAT#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=CCAT#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=CCAT#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=CCAT#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Carmona</h5>
                        <a href="?view=campus&code=CARMONA" class="text-dark accordion-content-link">Goals</a>
                        <a href="?view=campus&code=CARMONA#Objectives" class="text-dark accordion-content-link">Objectives</a>
                        <a href="?view=campus&code=CARMONA#Personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=CARMONA#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=CARMONA#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=CARMONA#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=CARMONA#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Cavite City</h5>
                        <a href="?view=campus&code=CAVITECITY" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=CAVITECITY#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=CAVITECITY#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=CAVITECITY#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=CAVITECITY#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">General Trias City</h5>
                        <a href="?view=campus&code=GENERALTRIASCITY" class="text-dark accordion-content-link">Overview</a>
                        <a href="?view=campus&code=GENERALTRIASCITY#Personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=GENERALTRIASCITY#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=GENERALTRIASCITY#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=GENERALTRIASCITY#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Imus City</h5>
                        <a href="?view=campus&code=IMUS" class="text-dark accordion-content-link">Overview</a>
                        <a href="?view=campus&code=IMUS#Personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=IMUS#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=IMUS#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=IMUS#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=IMUS#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Naic</h5>
                        <a href="?view=campus&code=NAIC" class="text-dark accordion-content-link">Overview</a>
                        <a href="?view=campus&code=NAIC#Personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=NAIC#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=NAIC#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=NAIC#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=NAIC#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Silang</h5>
                        <a href="?view=campus&code=SILANG" class="text-dark accordion-content-link">Overview</a>
                        <a href="?view=campus&code=SILANG#Personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=SILANG#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=SILANG#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=SILANG#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=SILANG#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Tanza</h5>
                        <a href="?view=campus&code=TANZA" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=TANZA#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=TANZA#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=TANZA#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                    <div class="accordion-item-content-item">
                        <h5 class="text-main">Trece Martires City</h5>
                        <a href="?view=campus&code=TRECEMARTIRESCITY" class="text-dark accordion-content-link">Overview</a>
                        <a href="?view=campus&code=TRECEMARTIRESCITY#Personnel" class="text-dark accordion-content-link">Library Personnel</a>
                        <a href="?view=campus&code=TRECEMARTIRESCITY#Statistics" class="text-dark accordion-content-link">Statistics</a>
                        <a href="?view=campus&code=TRECEMARTIRESCITY#Gallery" class="text-dark accordion-content-link">Gallery</a>
                        <a href="?view=campus&code=TRECEMARTIRESCITY#Links" class="text-dark accordion-content-link">Links</a>
                        <a href="?view=campus&code=TRECEMARTIRESCITY#Others" class="text-dark accordion-content-link">Others</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <a href="?view=personnel" class="btn btn-secondary btn-block rounded-0 text-left">Library Personnel</a>
            </div>
        </div>
    </div>
</div>
<!------------------------------------ Navbar Desktop --------------------------------------------------->
<div id="navbar" class="bg-dark d-md-block d-none" style="border-bottom: 4px solid #408c40 !important;">
    <div class="container">
        <div class="d-flex justify-content-right align-items-center">
            <div class="menu-item">
                <a href="./" class="menu-link">Home</a>
            </div>
            <div class="menu-item">
                <a href="http://library.cvsu.edu.ph/dashboard" class="menu-link" target="_blank">Dashboard</a>
            </div>
            <div class="menu-item">
                <!-- ?view=about -->
                <a href="?view=about" class="menu-link">About</a>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">Catalog <i class="fa fa-caret-down"></i></a>
                <div class="menu-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="http://library.cvsu.edu.ph/" target="_blank">
                                    <div class="ils-services-card ils-services-elibrary">
                                        <div class="overlay"></div>
                                        <div class="content">
                                            <h4>E-Library <span class="badge badge-info text-white" style="font-size: 0.6em;">Powered by Koha</span></h4>
                                            <h6 class="text-truncate">Search for thesis, check for books...</h6>
                                        </div>
                                    </div>
                                </a>
                                <!-- <div class="p-3">
                                    <h4 class="text-main">E-Library</h4>
                                    <a href="http://library.cvsu.edu.ph/" target="_blank" class="text-dark menu-content-link">Home</a>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdq-kE4yp1UZAgnuWkMb-K9ivdYTE7cUjVGkV-Apx_680uNqA/viewform" target="_blank" class="text-dark menu-content-link">Request for CvSU THESIS Abstract</a>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSe8Sc8g254V_ijhLcm-rkJKdJFXNDzRC9dFbpP7vugB9p4GZw/viewform" target="_blank" class="text-dark menu-content-link">Request for PRINT BOOK Pages</a>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfSoAj3qM4b_ttQMZLuimqgwkfHDH1NyJ7S4eyjHD7Vr4j7EQ/viewform" target="_blank" class="text-dark menu-content-link">Request for E-BOOK Password</a>
                                </div> -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="http://library.cvsu.edu.ph/ebooks" target="_blank">
                                    <div class="ils-services-card ils-services-ebooks">
                                        <div class="overlay"></div>
                                        <div class="content">
                                            <h4>E-Books</h4>
                                            <h6 class="text-truncate">Search by category, search by title...</h6>
                                        </div>
                                    </div>
                                </a>
                                <!-- <div class="p-3">
                                    <h4 class="text-main">E-Books</h4>
                                    <a href="http://library.cvsu.edu.ph/ebooks" target="_blank" class="text-dark menu-content-link">Home</a>
                                    <a href="http://library.cvsu.edu.ph/ebooks/eshelf.php" target="_blank" class="text-dark menu-content-link">E-Shelf</a>
                                </div> -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="http://library.cvsu.edu.ph/ejournal" target="_blank">
                                    <div class="ils-services-card ils-services-ejournals">
                                        <div class="overlay"></div>
                                        <div class="content">
                                            <h4>E-Journals</h4>
                                            <h6 class="text-truncate">Look for open access e-journals...</h6>
                                        </div>
                                    </div>
                                </a>
                                <!-- <div class="p-3">
                                <h4 class="text-main">E-Journals</h4>
                                <a href="http://library.cvsu.edu.ph/ejournal" target="_blank" class="text-dark menu-content-link">Home</a>
                                <a href="http://library.cvsu.edu.ph/ejournal/eshelf.php" target="_blank" class="text-dark menu-content-link">E-Shelf</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">Services <i class="fa fa-caret-down"></i></a>
                <div class="menu-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="?view=onlineservices">
                                    <div class="ils-services-card ils-services-online">
                                        <div class="overlay"></div>
                                        <div class="content">
                                            <h4>Online Library Services</h4>
                                            <h6>24/7 services</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="?view=physicalservices">
                                    <div class="ils-services-card ils-services-physical">
                                        <div class="overlay"></div>
                                        <div class="content">
                                            <h4>Physical Library Services</h4>
                                            <h6>In-house services</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="p-3">
                                    <a href="http://library.cvsu.edu.ph/ebooks" target="_blank" class="text-dark menu-content-link">
                                        <h4 class="text-main">Online Library Services</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="p-3">
                                    <a href="http://library.cvsu.edu.ph/ebooks" target="_blank" class="text-dark menu-content-link">
                                        <h4 class="text-main">Physical Library Services</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">CvSU Campus Library <i class="fa fa-caret-down"></i></a>
                <div class="menu-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="list-group rounded-0" id="campuses-tabs">
                                    <a href="#main-tab-content" data-toggle="tab" class="list-group-item list-group-item-action active">
                                        <b>Main</b>
                                    </a>
                                    <a href="#bacoorcity-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>Bacoor City</b>
                                    </a> 
                                    <a href="#ccat-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>CCAT</b>
                                    </a>
                                    <a href="#carmona-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>Carmona</b>
                                    </a>
                                    <a href="#cavitecity-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>Cavite City</b>
                                    </a>
                                    <a href="#generaltriascity-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>General Trias City</b>
                                    </a> 
                                    <a href="#imus-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>Imus City</b>
                                    </a> 
                                    <a href="#naic-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>Naic</b>
                                    </a>
                                    <a href="#silang-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>Silang</b>
                                    </a>
                                    <a href="#tanza-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>Tanza</b>
                                    </a>
                                    <a href="#trecemartirescity-tab-content" data-toggle="tab" class="list-group-item list-group-item-action">
                                        <b>Trece Martires City</b>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 bg-light">
                                <div class="tab-content">
                                    <div id="main-tab-content" class="tab-pane fade show active">
                                        <div class="main-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=MAIN">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Main Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.198076,120.881161&z=18&t=h&hl=en-US&gl=US&mapclient=embed&cid=7513687788570292424" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> Indang, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=about" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        History
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=about#Vision" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Vision
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=about#Mission" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Mission
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=about#Goals" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Goals
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=about#Objectives" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Objectives
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=MAIN" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Building Directory
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=MAIN#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=MAIN#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=MAIN#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=MAIN#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="bacoorcity-tab-content" class="tab-pane fade p-3">
                                        <div class="bacoorcity-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=BACOORCITY">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Bacoor City Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.412771,120.981349&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=12613929739887301784" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> CX7J+4G5, Sampaguita, Bacoor, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Overview
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Vision" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Vision
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Mission" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Mission
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Goals" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Goals
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Objectives" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Objectives
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=BACOORCITY#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ccat-tab-content" class="tab-pane fade p-3">
                                        <div class="ccat-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=CCAT">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - CCAT Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.403545,120.865979&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=5281155602060050161" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> CV38+C99, Rosario, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Overview" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Overview
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Vision" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Vision
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Mission" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Mission
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Goals" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Goals
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Objectives" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Objectives
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CCAT#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="carmona-tab-content" class="tab-pane fade p-3">
                                        <div class="carmona-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=CARMONA">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Carmona Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.316973,121.064699&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=10061956140991413056" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> 8387+QVP, Maduya, Carmona, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CARMONA#Goals" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Goals
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CARMONA#Objectives" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Objectives
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CARMONA#Personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CARMONA#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CARMONA#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CARMONA#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CARMONA#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cavitecity-tab-content" class="tab-pane fade p-3">
                                        <div class="cavitecity-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=CAVITECITY">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Cavite City Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.458531,120.880183&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=3161368166448437348" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> FV5J+C37, Dalahican, Cavite City, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CAVITECITY" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CAVITECITY#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CAVITECITY#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CAVITECITY#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=CAVITECITY#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="generaltriascity-tab-content" class="tab-pane fade p-3">
                                        <div class="generaltriascity-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=GENERALTRIASCITY">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - General Trias City Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.384988,120.880504&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=14007862741619548784" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> 007 Arnaldo, General Trias, 4107 Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=GENERALTRIASCITY" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Overview
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=GENERALTRIASCITY#Personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=GENERALTRIASCITY#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=GENERALTRIASCITY#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=GENERALTRIASCITY#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="imus-tab-content" class="tab-pane fade p-3">
                                        <div class="imus-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=IMUS">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Imus Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.42846,120.946971&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=14049085126836561303" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> LTO Compound, Palico 4, Imus City, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=IMUS" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Overview
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=IMUS#Personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=IMUS#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=IMUS#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=IMUS#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=IMUS#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="naic-tab-content" class="tab-pane fade p-3">
                                        <div class="naic-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=NAIC">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Naic Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.322695,120.753936&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=568017643629344482" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> Bucana Malaki, Naic, 4110 Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=NAIC" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Overview
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=NAIC#Personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=NAIC#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=NAIC#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=NAIC#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=NAIC#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="silang-tab-content" class="tab-pane fade p-3">
                                        <div class="silang-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=SILANG">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Silang Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.240676,120.979067&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=17463832420403768187" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> J Rizal, Silang, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=SILANG" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Overview
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=SILANG#Personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=SILANG#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=SILANG#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=SILANG#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=SILANG#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tanza-tab-content" class="tab-pane fade p-3">
                                        <div class="tanza-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=TANZA">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Tanza Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.333251,120.850149&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=5215149568903383579" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> Phase 2, Bahay Katuparan Subdivision, Tanza, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TANZA" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TANZA#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TANZA#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TANZA#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="trecemartirescity-tab-content" class="tab-pane fade p-3">
                                        <div class="trecemartirescity-cover" style="height: 200px;">
                                            <!-- <div class="ils-bg-overlay" style="height: 200px;"></div> -->
                                        </div>
                                        <a class="ils-no-text-decoration" href="?view=campus&code=TRECEMARTIRESCITY">
                                            <h2 class="p-3 text-white text-center text-uppercase ils-campus-header-link">Cavite State University - Trece Martires City Campus</h2>
                                        </a>
                                        <a href="https://www.google.com/maps?ll=14.283306,120.876052&z=13&t=m&hl=en-US&gl=US&mapclient=embed&cid=11827716296074378472" target="blank"><small class="text-center text-uppercase mr-4"><i class="fas fa-map-marker-alt"></i> 7VMG+8CF, Barangay Osorio, Trece Martires, Cavite, Philippines</small></a>
                                        <div class="row pt-3">
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TRECEMARTIRESCITY" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Overview
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TRECEMARTIRESCITY#Personnel" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Library Personnel
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TRECEMARTIRESCITY#Statistics" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Statistics
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TRECEMARTIRESCITY#Gallery" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Gallery
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TRECEMARTIRESCITY#Links" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Links
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <a href="?view=campus&code=TRECEMARTIRESCITY#Others" class="text-dark">
                                                    <div class="p-3 ils-header-card rounded text-center align-middle">
                                                        <i class="fas fa-dot"></i>
                                                        Others
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <a href="?view=personnel" class="menu-link">Library Personnel</a>
            </div>
        </div>
    </div>
</div>
<div class="scroll-to-top">
    <span class="btn btn-position btn-style" data-btn="scroll">^</i>
</div>
<script>
    const scrollBtn = document.querySelector('[data-btn="scroll"]');
    const btnVisibility = () => {
        if (window.scrollY > 400) {
            scrollBtn.style.visibility = "visible";
        } else {
            scrollBtn.style.visibility = "hidden";
        }
    };
    document.addEventListener("scroll", () => {
        btnVisibility();
    });
    scrollBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
    
    function toggleMenu() {
        let menu = document.querySelector("#navbar-mobile");
        let body = document.querySelector("body");
        menu.classList.toggle("d-none");
        body.classList.toggle("overflow-hidden");
    }
</script>