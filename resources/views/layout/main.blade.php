<!DOCTYPE html>
<html lang="en"
dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible"
  content="IE=edge">
  <meta name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap"
  rel="stylesheet">
  <!-- Perfect Scrollbar -->
  <link type="text/css"
  href="{{ asset('assets/vendor/perfect-scrollbar.css') }}"
  rel="stylesheet">
  <!-- Material Design Icons -->
  <link type="text/css"
  href="{{ asset('assets/css/material-icons.css') }}"
  rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link type="text/css"
  href="{{ asset('assets/css/fontawesome.css') }}"
  rel="stylesheet">
  <!-- Preloader -->
  <link type="text/css"
  href="{{ asset('assets/vendor/spinkit.css') }}"
  rel="stylesheet">
  <link type="text/css"
  href="{{ asset('assets/css/preloader.css') }}"
  rel="stylesheet">
  <!-- App CSS -->
  <link type="text/css"
  href="{{ asset('assets/css/app.css') }}"
  rel="stylesheet">
  <!-- Dark Mode CSS (optional) -->
  <link type="text/css"
  href="{{ asset('assets/css/dark-mode.css') }}"
  rel="stylesheet">
  <!-- Vector Maps -->
  <link type="text/css"
  href="{{ asset('assets/vendor/jqvmap/jqvmap.min.css') }}"
  rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  
</head>
<body class="layout-sticky-subnav layout-default ">
  <div class="preloader">
    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
    </div>
    
  </div>
  <!-- Header Layout -->
  <div class="mdk-header-layout js-mdk-header-layout">
    <!-- Header -->
    <div id="header"
    class="mdk-header js-mdk-header mb-0"
    data-fixed>
    <div class="mdk-header__content">
      <div class="navbar navbar-expand px-0  navbar-dark bg-dark"
      id="default-navbar"
      data-primary>
      <!-- Navbar toggler -->
      <button class="navbar-toggler d-block rounded-0"
      type="button"
      data-toggle="sidebar">
      <span class="material-icons">menu</span>
    </button>
    <!-- Navbar Brand -->
    <a href="/"
    class="navbar-brand mr-16pt">
    <img class="navbar-brand-icon mr-0 mr-lg-8pt"
    src="{{ asset('assets/images/logo/accent-teal-100%402x.png') }}"
    width="32"
    alt="Huma">
    <span class="d-lg-block"> Smart<strong>Desk</strong></span>
  </a>
  
  
  <div class="flex"></div>
  
  <div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
    <div class="nav-item dropdown d-none d-sm-flex">
      <a href="#"
      class="nav-link d-flex align-items-center dropdown-toggle"
      data-toggle="dropdown">
      <img width="32"
      height="32"
      class="rounded-circle mr-8pt"
      src="{{ asset('assets/images/people/50/guy-3.jpg') }}"
      alt="account" />
      <span class="flex d-flex flex-column mr-8pt">
        <span class="navbar-text-100">Laza Bogdan</span>
        <small class="navbar-text-50">Administrator</small>
      </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-header"><strong>Account</strong></div>
      <a class="dropdown-item"
      href="{{ route('account') }}">Edit Account</a>
      <a class="dropdown-item"
      href="{{ route('password') }}">Change Password</a>
      
      <a class="dropdown-item"
      href="fixed-login.html">Logout</a>
    </div>
  </div>
  
  
</div>

</div>
</div>
</div>
<!-- // END Header -->
<!-- Header Layout Content -->
<div class="mdk-header-layout__content page-content ">
  <div class="page__subnav navbar navbar-expand-sm navbar-shadow navbar-light bg-white p-sm-0 d-none d-sm-flex "
  id="secondary-navbar">
  <div class="container page__container">
    <!-- Navbar toggler -->
    <button class="navbar-toggler ml-n16pt"
    type="button"
    data-toggle="collapse"
    data-target="#navbar-submenu2">
    <span class="material-icons">people_outline</span>
  </button>
  <div class="collapse navbar-collapse"
  id="navbar-submenu2">
  <div class="navbar-collapse__content pb-16pt pb-sm-0">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a href="/"
        class="nav-link"
        >
        <i class="material-icons icon--left">assessment</i>
        Dashboards
      </a>
      
    </li>
    
    <li class="nav-item"
    style="position: initial;">
    <a href="{{ route('account') }}"
    class="nav-link"
    >
    <i class="material-icons icon--left">account_box</i>
    Athenticity
  </a>
  
</li>
<li class="nav-item"
style="position: initial;">
<a href="{{ route('account') }}"
class="nav-link"
>
<i class="material-icons icon--left">account_box</i>
Account
</a>

</li>
<li class="nav-item">
  <a href="{{ route('password') }}"
  class="nav-link"
  >
  <i class="material-icons icon--left">tune</i>
  Change Password
</a>

</li>

</ul>

</div>
</div>
</div>
</div>


</div>
<!-- // END Header Layout Content -->












<div class="mdk-drawer js-mdk-drawer"
id="default-drawer">
<div class="mdk-drawer__content">
  <div class="sidebar sidebar-dark sidebar-left"
  data-perfect-scrollbar>
  <!-- Navbar toggler -->
  <a href="#"
  class="navbar-toggler navbar-toggler-right navbar-toggler-custom d-flex align-items-center justify-content-center position-absolute right-0 top-0"
  
  data-placement="right"
  data-boundary="window">
  <span class="material-icons">sync_alt</span>
</a>
<a href="/"
class="sidebar-brand ">
<img class="sidebar-brand-icon"
src="assets/images/logo/accent-teal-100%402x.png"
alt="SmartDesk">
<span>Smart<strong>Desk</strong></span>
</a>

<div class="sidebar-heading">Overview</div>
<ul class="sidebar-menu">
  <li class="sidebar-menu-item active">
    <a class="sidebar-menu-button"
    href="/">
    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">insert_chart_outlined</span>
    <span class="sidebar-menu-text">Dashboard</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button"
  
  href="{{ route('account') }}">  
  Athenticity     
</a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button"
  
  href="{{ route('account') }}">  
  Account      
</a>
</li>

<li class="sidebar-menu-item">
  <a class="sidebar-menu-button js-sidebar-collapse"
  
  href="{{ route('password') }}">                     
  Change Password
</a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button"
  data-toggle="collapse"
  href="#productivity_menu">                    
  Logout                   
</a>
</li>
</ul>


</div>
</div>
</div>


@yield('content')




<div class="js-fix-footer footer border-top-2">
  <div class="container page__container page-section d-flex flex-column">
    <p class="text-70 brand mb-24pt">
      <img class="brand-icon"
      src="assets/images/logo/black-70%402x.png"
      width="30"
      alt="Huma"> Smart<strong>Desk</strong>
    </p>
    
  </div>
  <div class="pb-16pt pb-lg-24pt">
    <div class="container page__container">
      <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
        <div class="row">
          <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
            <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
            <nav class="nav nav-links nav--flush">
              <a href="#"
              class="nav-link mr-8pt"><img src="{{ asset('assets/images/icon/footer/facebook-square%402x.png') }}"
              width="24"
              height="24"
              alt="Facebook"></a>
              <a href="#"
              class="nav-link mr-8pt"><img src="{{ asset('assets/images/icon/footer/twitter-square%402x.png') }}"
              width="24"
              height="24"
              alt="Twitter"></a>
              <a href="#"
              class="nav-link mr-8pt">
              <img src="{{ asset('assets/images/icon/footer/vimeo-square%402x.png') }}"
              width="24"
              height="24"
              alt="Vimeo"></a>
              
            </nav>
          </div>
          <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
            
          </div>
          <div class="col-md-4 text-md-right">
            <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
              <a href="#"
              class="text-white-70 text-underline mr-16pt">Terms</a>
              <a href="#"
              class="text-white-70 text-underline">Privacy policy</a>
            </p>
            <p class="text-white-50 small mb-0">Copyright <?php echo Date('Y')?> &copy; All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<!-- jQuery -->
<script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>
<!-- Perfect Scrollbar -->
<script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>
<!-- DOM Factory -->
<script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>
<!-- MDK -->
<script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>
<!-- App JS -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- Highlight.js -->
<script src="{{ asset('assets/js/hljs.js') }}"></script>
<!-- Global Settings -->
<script src="{{ asset('assets/js/settings.js') }}"></script>
<!-- Flatpickr -->
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/flatpickr.js') }}"></script>
<!-- Moment.js -->
<script src="{{ asset('assets/vendor/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/moment-range.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('assets/vendor/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/chartjs.js') }}"></script>
<!-- Chart.js Samples -->
<script src="{{ asset('assets/js/page.analytics-dashboard.js') }}"></script>
<!-- Vector Maps -->
<script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/js/vector-maps.js') }}"></script>
<!-- List.js -->
<script src="{{ asset('assets/vendor/list.min.js') }}"></script>
<script src="{{ asset('assets/js/list.js') }}"></script>
<!-- Tables -->
<script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>
<script src="{{ asset('assets/js/check-selected-row.js') }}"></script>

</body>

</html>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Reference </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
          <div class="card-body">
            <h4 class="card-title">Contact Person</h4>
            <p class="text-70"><strong>Nkanyiso</strong></p>
            <h4 class="card-title">Contact Number</h4>
            <p class="text-70"><strong>073 45871 684</strong></p>
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="auth" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 80vw;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Athenticity Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
          molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
          numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
          optio, eaque rerum! Provident similique accusantium nemo autem.</p>
          
          
          <p>I  <input type="text" name="" placeholder="learner name">  ID/NO <input type="text" name="">
            
          </p>
          <p>optio, eaque rerum! Provident similique accusantium nemo autem.</p>
          
          <p>Learner Signature <input type="text" name=""></p>
          
          <hr>
          <h5>Diclaration By Assessor</h5>
          <div class="row">
            <div class="col-md-6 list-group list-group-form">
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="form-label col-form-label col-sm-12">Assessor Name</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control"  >
                  </div>
                </div>
              </div>
              
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="form-label col-form-label col-sm-12">Assessor RegNo</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control"  placeholder="Your id ">
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="form-label col-form-label col-sm-12">Assessor Signature</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control"  placeholder="Your id ">
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="form-label col-form-label col-sm-12">Assessor Date</label>
                  <div class="col-sm-12">
                    <input type="date" class="form-control"  placeholder="Your id ">
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-6 list-group list-group-form">
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="form-label col-form-label col-sm-12">Modarator Name</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control"  placeholder="Your id ">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 list-group list-group-form">
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="form-label col-form-label col-sm-12">Modarator Signature</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control"  placeholder="Your id ">
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-6 list-group list-group-form">
              <div class="list-group-item">
                <div class="form-group row align-items-center mb-0">
                  <label class="form-label col-form-label col-sm-12">Modarator Date</label>
                  <div class="col-sm-12">
                    <input type="date" class="form-control"  placeholder="Your id ">
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
  
  
  
  {{-- create unit Standard --}}
  
  <div class="modal fade" id="unit_standard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">UNIT STANDARD </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form  method="post" action="/unit_standard/create" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6 list-group list-group-form">
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Unit Standard</label>
                    <div class="col-sm-12">
                      <input name="us_name" type="text" class="form-control"  placeholder="Your id ">
                    </div>
                  </div>
                </div>
                
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Unit Standard Title</label>
                    <div class="col-sm-12">
                      <input name="us_title" type="text" class="form-control"  placeholder="Your id ">
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Unit Standard Level</label>
                    <div class="col-sm-12">
                      <input name="us_level" type="text" class="form-control"  placeholder="Your id ">
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Unit Standard Credit</label>
                    <div class="col-sm-12">
                      <input name="us_credit" type="text" class="form-control"  placeholder="Your id ">
                    </div>
                  </div>
                </div>
                
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Copies of unit standard </label>
                    <div class="col-sm-12">
                      <input name="us_copies" type="file" class="form-control"  >
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-md-6 list-group list-group-form">
                
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Copies of Alignment Metrics </label>
                    <div class="col-sm-12">
                      <input name="us_alignment" type="file" class="form-control"  >
                    </div>
                  </div>
                </div>
                
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Leaner Guide</label>
                    <div class="col-sm-12">
                      <input name="learner_guide" type="file" class="form-control"  >
                    </div>
                  </div>
                </div>
                
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Formative</label>
                    <div class="col-sm-12">
                      <input name="formative" type="file" class="form-control"  >
                    </div>
                  </div>
                </div>
                
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Summative</label>
                    <div class="col-sm-12">
                      <input name="summative" type="file" class="form-control"  >
                    </div>
                  </div>
                </div>
                
                <div class="list-group-item">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-12">Other</label>
                    <div class="col-sm-12">
                      <input name="other" type="file" class="form-control"  >
                    </div>
                  </div>
                </div>
                
                
              </div>
            </div>
            <div class="modal-footer">
              <button  class="btn btn-outline-secondary">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  
  
  {{-- assessment evidence --}}
  
  
  <div class="modal fade" id="assessment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Learner Assessment Evidence </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <div class="card-body text-70">
            
            
            <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
              
              <div class="list-group-item" style="border: none !important;" >
                <div class="form-group row align-items-center mb-0">
                  <label class="form-label col-form-label col-sm-3">
                    Learner ID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control"  placeholder="ID ">
                    </div>
                  </div>
                </div>
                <div class="list-group-item" style="border: none !important;">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-3">
                      Learner Name
                    </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                  </div>
                </div>
                <div class="list-group-item" style="border: none !important;">
                  <div class="form-group row align-items-center mb-0">
                    <label class="form-label col-form-label col-sm-3">
                      Unit Standard Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Title">
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="list-group-item" style="border: none !important;">
                    <div class="form-group row align-items-center mb-0">
                      <label class="form-label col-form-label col-sm-3">
                        Unit Standard Id</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    
                    <div class="list-group-item" style="border: none !important;">
                      <div class="form-group row align-items-center mb-0">
                        <label class="form-label col-form-label col-sm-3">
                          Unit Standard Level</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Level">
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item" style="border: none !important;">
                        <div class="form-group row align-items-center mb-0">
                          <label class="form-label col-form-label col-sm-3">
                            Unit Standard Credit</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Credit">
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item" style="border: none !important;">
                          <div class="form-group row align-items-center mb-0">
                            
                            <div class="col-sm-6">
                              <label class="form-label col-form-label">
                                Learner Guide</label>
                                <input type="file" class="form-control file" placeholder="Title">
                              </div>
                              
                              
                              <div class="col-sm-6">
                                <label class="form-label col-form-label">
                                  Attach Summative Assessment</label>
                                  <input type="file" class="form-control file" placeholder="Title">
                                </div>
                                
                                <div class="col-sm-6">
                                  <label class="form-label col-form-label">
                                    Attach Formative Assessement </label>
                                    <input type="file" class="form-control file" placeholder="Title">
                                  </div>
                                  
                                  
                                  <div class="col-sm-6">
                                    <label class="form-label col-form-label">
                                      Attach Additional Assesssment Instrument</label>
                                      <input type="file" class="form-control file" placeholder="Title">
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              
                            </div>
                            <div class="modal-footer">
                              <button  class="btn btn-outline-secondary">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    {{-- create class --}}
                    
                    <div class="modal fade" id="classes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
                        <div class="modal-content">
                          <form  method="post" action="/class/create" >
                            @csrf
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Create Class </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                                
                                <div class="list-group-item" style="border: none !important;" >
                                  <div class="form-group row align-items-center mb-0">
                                    <label class="form-label col-form-label col-sm-3">
                                      Class Name</label>
                                      <div class="col-sm-9">
                                        <input name="name" type="text" class="form-control"  placeholder="Name ">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                      <label class="form-label col-form-label col-sm-3">
                                        Assessor
                                      </label>
                                      <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder=" Assessor Name">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list-group-item" style="border: none !important;">
                                    <div class="form-group row align-items-center mb-0">
                                      <label class="form-label col-form-label col-sm-3">
                                        Moderrator</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" placeholder="Moderrator Name">
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-outline-secondary">Create</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          
                          
                        </div>
                        
                        
                        {{-- create student --}}
                        
                        <div class="modal fade" id="create_student" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
                            <div class="modal-content">
                              <form action="/leaner/create" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Create </h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                                    
                                    <div class="list-group-item" style="border: none !important;" >
                                      <div class="form-group row align-items-center mb-0">
                                        <label class="form-label col-form-label col-sm-3">
                                          Student Name</label>
                                          <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control"  placeholder="John Peter">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="list-group-item" style="border: none !important;" >
                                        <div class="form-group row align-items-center mb-0">
                                          <label class="form-label col-form-label col-sm-3">
                                            Student Surname</label>
                                            <div class="col-sm-9">
                                              <input name="surname" type="text" class="form-control"  placeholder="Doe">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="list-group-item" style="border: none !important;">
                                          <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-3">
                                              Student ID/Passport
                                            </label>
                                            <div class="col-sm-9">
                                              <input name="identinty" type="text" class="form-control" placeholder="00000000000000/CN44444">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-outline-secondary">Add</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            
                            {{-- create student end --}}
                            
                            
                            
                            {{-- create user --}}
                            
                            <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Create User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                                      
                                      <div class="list-group-item" style="border: none !important;" >
                                        <div class="form-group row align-items-center mb-0">
                                          <label class="form-label col-form-label col-sm-3">
                                            User Name</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control"  placeholder="Name ">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="list-group-item" style="border: none !important;">
                                          <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-3">
                                              User Email
                                            </label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" placeholder=" Assessor Name">
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="list-group-item" style="border: none !important;">
                                          <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-3">
                                              User Phone
                                            </label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" placeholder="phone">
                                            </div>
                                          </div>
                                        </div>
                                        
                                        
                                        <div class="list-group-item" style="border: none !important;">
                                          <div class="form-group row align-items-center mb-0">
                                            <label class="form-label col-form-label col-sm-3">
                                              Role
                                            </label>
                                            <div class="col-sm-9">
                                              <select type="text" class="form-control form-custom">
                                                <option>admin</option>
                                                <option>moderator</option>
                                                <option>Assessor</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button class="btn btn-outline-secondary">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              {{-- create users end --}}
                              
                              
                              
                              
                              
                              
                              {{-- create school --}}
                              
                              <div class="modal fade" id="school" tabindex="-1" role="dialog" aria-labelledby="school" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="box-shadow: 0 3px 3px -2px rgb(39 44 51 / 10%), 0 3px 4px 0 rgb(39 44 51 / 4%), 0 1px 8px 0 rgb(39 44 51 / 2%);">
                                  <form  method="post" action="/school/create" >
                                    @csrf 
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Create School</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="list-group list-group-form" style="box-shadow: none;border: none !important; ">
                                          
                                          <div class="list-group-item" style="border: none !important;" >
                                            <div class="form-group row align-items-center mb-0">
                                              <label class="form-label col-form-label col-sm-3">
                                                School Name</label>
                                                <div class="col-sm-9">
                                                  <input name="name" type="text" class="form-control"  placeholder="Name ">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="list-group-item" style="border: none !important;" >
                                              <div class="form-group row align-items-center mb-0">
                                                <label class="form-label col-form-label col-sm-3">
                                                  Contact Person Name</label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control"  placeholder="Name ">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="list-group-item" style="border: none !important;">
                                                <div class="form-group row align-items-center mb-0">
                                                  <label class="form-label col-form-label col-sm-3">
                                                    User Email
                                                  </label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder=" Assessor Name">
                                                  </div>
                                                </div>
                                              </div>
                                              
                                              <div class="list-group-item" style="border: none !important;">
                                                <div class="form-group row align-items-center mb-0">
                                                  <label class="form-label col-form-label col-sm-3">
                                                    User Phone
                                                  </label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" placeholder="phone">
                                                  </div>
                                                </div>
                                              </div>
                                              
                                              
                                              <div class="list-group-item" style="border: none !important;">
                                                <div class="form-group row align-items-center mb-0">
                                                  <label class="form-label col-form-label col-sm-3">
                                                    Role
                                                  </label>
                                                  <div class="col-sm-9">
                                                    <select type="text" class="form-control form-custom">
                                                      <option>admin</option>
                                                      <option>moderator</option>
                                                      <option>Assessor</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button class="btn btn-outline-secondary">Add</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  
                                  {{-- create school end --}}