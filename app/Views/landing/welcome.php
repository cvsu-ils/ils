<?php
    if($this->app->user && !$profileController->HasProfile()) {
        echo '
            <div class="container-fluid">
                <div class="container">
                    <div class="alert alert-warning alert-dismissible my-5 p-5">
                        <h3><i class="icon fas fa-exclamation-triangle"></i> Alert!</h3>
                        To continue using Cavite State University Integrated Library System Full Services! Click <a href="?view=createprofile"><strong>create profile</strong></a> details.
                    </div>
                </div>
            </div>
        ';
    }
?>
<div class="container-fluid p-0">
  <div class="wrap">
      <div id="dir-control-left" class="dir-control"><i class="fa fa-angle-left fa-5x" aria-hidden="true"></i></div>
      <div id="slider">
          <div class="slide slide1">
              <div class="slide-content">
                  <span>Main Campus</span>
              </div>
          </div>
          <div class="slide slide2">
              <div class="slide-content">
                  <span>Naic Campus</span>
              </div>
          </div>
          <div class="slide slide3">
              <div class="slide-content">
                  <span>Imus City Campus</span>
              </div>
          </div>
          <div class="slide slide4">
              <div class="slide-content">
                  <span>Trece Martires Campus</span>
              </div>
          </div>
          <div class="slide slide5">
              <div class="slide-content">
                  <span>CCAT Campus</span>
              </div>
          </div>
          <div class="slide slide11">
              <div class="slide-content">
                  <span>General Trias City Campus</span>
              </div>
          </div>
          <div class="slide slide6">
              <div class="slide-content">
                  <span>Carmona Campus</span>
              </div>
          </div>
          <div class="slide slide7">
              <div class="slide-content">
                  <span>Cavite City Campus</span>
              </div>
          </div>
          <div class="slide slide8">
              <div class="slide-content">
                  <span>Bacoor City Campus</span>
              </div>
          </div>
          <div class="slide slide9">
              <div class="slide-content">
                  <span>Silang Campus</span>
              </div>
          </div>
          <div class="slide slide10">
              <div class="slide-content">
                  <span>Tanza Campus</span>
              </div>
          </div>
      </div>
      <div id="dir-control-right" class="dir-control"><i class="fa fa-angle-right fa-5x" aria-hidden="true"></i></div>
  </div>
</div>
<!-- <div class="container-fluid p-5">
    <div class="container text-center">
        <h3 class="ils-text-green font-weight-bold pb-3">CvSU Integrated Library System</h3>
            <a class="btn btn-app ils-bg-green text-white">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a class="btn btn-app ils-bg-default">
                <i class="fas fa-book"></i> E-books
            </a>
            <a class="btn btn-app ils-bg-default">
                <i class="fas fa-book"></i> E-journals
            </a>
            <a class="btn btn-app ils-bg-yellow text-white">
                <i class="fas fa-university"></i> LibSpace
            </a>
        </div>
    </div>
</div> -->
<div class="container p-5">
  <div class="row">
      <div class="col-md-9">
          <h1 class="p-3 mb-3 rounded text-center text-uppercase ils-bg-green text-white">Online library</h1>
          <div class="card rounded mb-3" style="width: 100%;">
              <div class="row no-gutters">
                  <div class="col-sm-3">
                      <img class="card-img" src="storage/images/modules/e-library.jpg" alt="E-library" height="100%">
                  </div>
                  <div class="col-sm-9">
                      <div class="card-body">
                          <h5 class="card-title">E-Library <span class="badge badge-info text-white" style="font-size: 0.6em;">Powered by Koha</span></h5>
                          <p class="card-text text-muted">Search for thesis, check for books and more...</p>
                          <a href="http://library.cvsu.edu.ph/" class="btn btn-primary ils-btn-green" target="_blank">Browse e-library</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card rounded mb-3 reveal" style="width: 100%;">
              <div class="row no-gutters">
                  <div class="col-sm-3">
                      <img class="card-img" src="storage/images/modules/e-books.jpg" alt="E-books" height="100%">
                  </div>
                  <div class="col-sm-9">
                      <div class="card-body">
                          <h5 class="card-title">E-Books</h5>
                          <p class="card-text text-muted">Search by category, search by title and download a copy.</p>
                          <a href="?view=ebooks" class="btn btn-primary ils-btn-green" target="_blank">Browse e-books</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card rounded mb-3 reveal" style="width: 100%;">
              <div class="row no-gutters">
                  <div class="col-sm-3">
                      <img class="card-img" src="storage/images/modules/e-journals.jpg" alt="E-journals" height="100%">
                  </div>
                  <div class="col-sm-9">
                      <div class="card-body">
                          <h5 class="card-title">E-Journals</h5>
                          <p class="card-text text-muted">Look for open access e-journals, search by category and more...</p>
                          <a href="?view=ejournals" class="btn btn-primary ils-btn-green" target="_blank">Browse e-journals</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card">
              <div class="card-header font-weight-bold text-dark">
                  Bulletin Board
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="http://library.cvsu.edu.ph/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=65" target="_blank"><span class="badge badge-danger">NEW</span> 2023 Print Books</a></li>
                  <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="http://library.cvsu.edu.ph/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=91" target="_blank"><span class="badge badge-danger">NEW</span> 2023 Online E-Books</a></li>
                  <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="http://library.cvsu.edu.ph/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=80" target="_blank"><span class="badge badge-danger">NEW</span> 2023 Theses</a></li>
                  <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="http://library.cvsu.edu.ph/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=27&sortfield=title" target="_blank">2022 E-Books</a></li>
                  <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="http://library.cvsu.edu.ph/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=26" target="_blank">2022 Print Books</a></li>
                  <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="http://library.cvsu.edu.ph/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=12&sortfield=title" target="_blank">2021 Online E-Books</a></li>
                  <!-- <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="http://library.cvsu.edu.ph/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=10&sortfield=title" target="_blank">2021 Print Books</a></li> -->
                  <!-- <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="http://library.cvsu.edu.ph/cgi-bin/koha/opac-shelves.pl?op=view&shelfnumber=6" target="_blank">2020 Print Books</a></li> -->
                  <!-- <li class="list-group-item" style="font-size: 14px;"><a class="link-default" href="#">Read more...</a></li> -->
              </ul>
          </div>
          <br>
          <div class="card reveal">
            <div class="card-header font-weight-bold text-dark">
                Online Library Services
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-muted" style="font-size: 14px;"><a class="link-default" href="https://docs.google.com/forms/d/e/1FAIpQLSdq-kE4yp1UZAgnuWkMb-K9ivdYTE7cUjVGkV-Apx_680uNqA/viewform" target="_blank"><span class="badge badge-danger">NEW</span> Request for CvSU THESIS Abstract</a></li>
                <li class="list-group-item text-muted" style="font-size: 14px;"><a class="link-default" href="https://docs.google.com/forms/d/e/1FAIpQLSe8Sc8g254V_ijhLcm-rkJKdJFXNDzRC9dFbpP7vugB9p4GZw/viewform" target="_blank"><span class="badge badge-danger">NEW</span> Request for PRINT BOOK Pages</a></li>
                <li class="list-group-item text-muted" style="font-size: 14px;"><a class="link-default" href="https://docs.google.com/forms/d/e/1FAIpQLSfSoAj3qM4b_ttQMZLuimqgwkfHDH1NyJ7S4eyjHD7Vr4j7EQ/viewform" target="_blank"><span class="badge badge-danger">NEW</span> Request for E-BOOK Password</a></li>
                <li class="list-group-item text-muted" style="font-size: 14px;"><a class="link-default" href="https://docs.google.com/forms/d/157pIlBi3uZUxosHCkL8g4kK0DbcNbpSVqGcXOlg_pyg/viewform?pli=1&fbclid=IwAR2fdmmzwADRfyBeVxDJcm4SPcVzMDe1_OV21-xHhVhP0DD5wbNYN5Lpg0A&pli=1&edit_requested=true" target="_blank">Online Submission of Thesis or Manuscripts</a></li>
                <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="https://sites.google.com/cvsu.edu.ph/cvsu-main-campus-library/home" target="_blank">CvSU Library Brochure</a></li>
            </ul>
          </div>
          <!-- <br>
          <div class="card reveal">
              <div class="card-header font-weight-bold text-dark">
                  Other Links
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item text-muted text-truncate" style="font-size: 14px;"><a class="link-default" href="https://sites.google.com/cvsu.edu.ph/cvsu-main-campus-library/home" target="_blank">CvSU Library Brochure</a></li>
              </ul>
          </div> -->
          <br>
          <div class="card reveal">
              <div class="card-header font-weight-bold text-dark">
                  Downloadable Library Forms
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item text-muted" style="font-size: 14px;"><a class="link-default" href="?view=downloads&form=authors-permission-form" target="_blank">Authors Permission Form (ULIB-QF-01)</a></li>
              </ul>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid ils-bg-green">
  <div class="container p-5">
      <div class="row reveal">
          <div class="col-12">
              <h1 class="text-center text-white text-uppercase" style="margin-bottom: 40px;">Online Records</h1>
          </div>
          <div class="col-md-4 col-sm-12">
              <div class="p-3 text-center text-white">
                  <h1 class="text-gradient text-white"><span class="value" akhi="50">0</span>K+</h1>
                  <h5 class="mt-3 font-weight-bold">Online Records</h5>
                  <p class="text-sm font-weight-normal" style="font-size: 14px;">From all catalogs like theses, e-books,<br>e-journals and etc.</p>
              </div>
          </div>
          <div class="col-md-4 col-sm-12">
              <div class="p-3 text-center text-white">
                  <h1 class="text-gradient text-white"><span class="value" akhi="4000">0</span>+</h1>
                  <h5 class="mt-3 font-weight-bold">E-Books</h5>
                  <p class="text-sm font-weight-normal" style="font-size: 14px;">From open access and purchased<br>e-books</p>
              </div>
          </div>
          <div class="col-md-4 col-sm-12">
              <div class="p-3 text-center text-white">
                  <h1 class="text-gradient text-white"><span class="value" akhi="2000">0</span>+</h1>
                  <h5 class="mt-3 font-weight-bold">E-Journals</h5>
                  <p class="text-sm font-weight-normal" style="font-size: 14px;">From open access, subscribed, and purchased e-journals</p>
              </div>
          </div>
      </div>
  </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var slideImages = document.querySelectorAll('.slide'),
            dirRight = document.getElementById('dir-control-right'),
            dirLeft = document.getElementById('dir-control-left'),
            current = -1;
        var timeOutId;

        //if javascript is on apply styling
        function jsActive() {
            for(var i = 0; i < slideImages.length; i++){
                slideImages[i].classList.add('slider-active');
            }  
        }

        // Clear images
        function reset() {
            for(var i = 0; i < slideImages.length; i++){
                slideImages[i].classList.remove('slide-is-active');
            }
        }

        //init slider
        function startSlide() {
            reset();
            slideImages[0].classList.add('slide-is-active');
            setTimeout(function() {
                for(var i = 0; i < slideImages.length; i++) {
                    slideImages[i].classList.add('slide-transition');
                }
            }, 1000);

            showDivs();
        }

        function showDivs() {
            // Stop the timeout from triggering.
            clearTimeout(timeOutId);

            if(current === slideImages.length - 1) {
                current = -1;
            }
            slideRight();
            
            // Schedule a new timeout.
            timeOutId = setTimeout(showDivs, 5000); // Change image every 5 seconds
        }

        //slide left
        function slideLeft() {
            reset();
            slideImages[current - 1].classList.add('slide-is-active');
            current--;
        }

        //slide right
        function slideRight() {
            reset();
            slideImages[current + 1].classList.add('slide-is-active');
            current++;
        }

        dirLeft.addEventListener('click', function() {
            if(current === 0){
                current = slideImages.length;
            }
            slideLeft();
        })

        dirRight.addEventListener('click', function() {
            if(current === slideImages.length-1){
                current = -1;
            }
            slideRight();
        })

        //apply styling
        jsActive();
        startSlide();
    });
    
	$(function () {
        $('[data-toggle="tooltip"]').tooltip();
    })

    const counters = document.querySelectorAll('.value');
    const speed = 500;

    counters.forEach( counter => {
        const animate = () => {
            const value = +counter.getAttribute('akhi');
            const data = +counter.innerText;

            console.log(data);
            
            const time = value / speed;
            if(data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 1);
            } else {
                let toFix = new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(value);
                counter.innerText = toFix;
            }
        }
        animate();
    });
    
    window.addEventListener('scroll', reveal);

    function reveal() {
      var reveals = document.querySelectorAll('.reveal');

      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 20;

        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        } else{
            //reveals[i].classList.remove('active');
        }
      }
    }
</script>