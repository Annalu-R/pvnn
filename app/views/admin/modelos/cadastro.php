<!DOCTYPE html>
<html lang="pt-br">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

    <style>

      .az-content-left  {
        background: #fcfcfc;
      }

      .table tr{
        padding: 10px;
        height: 50px;
        line-height: 50px;
      }

      .table thead th, .table thead td {
        border-bottom-width: 2px;
      }

    </style>

  <!-- Core build with no theme, formatting, non-essential modules -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  </head>
  <body>

    <div class="az-header">
      <div class="container-fluid">
        <div class="az-header-left">
          <a href="index.html" class="az-logo"><span></span> azia</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span></span> azia</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item">
              <a href="index.html" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i> Pages</a>
              <nav class="az-menu-sub">
                <a href="page-signin.html" class="nav-link">Sign In</a>
                <a href="page-signup.html" class="nav-link">Sign Up</a>
              </nav>
            </li>
            <li class="nav-item">
              <a href="chart-chartjs.html" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Charts</a>
            </li>
            <li class="nav-item">
              <a href="form-elements.html" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Forms</a>
            </li>
            <li class="nav-item active">
              <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i> Components</a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a href="elem-buttons.html" class="nav-link">Buttons</a>
                      <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
                      <a href="elem-icons.html" class="nav-link">Icons</a>
                      <a href="table-basic.html" class="nav-link">Table</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          <a href="https://www.bootstrapdash.com/demo/azia-free/docs/documentation.html" target="_blank" class="az-header-search-link"><i class="far fa-file-alt"></i></a>
          <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
          <div class="az-header-message">
            <a href="#"><i class="typcn typcn-messages"></i></a>
          </div><!-- az-header-message -->
          <div class="dropdown az-header-notification">
            <a href="" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                  <div class="media-body">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media new">
                  <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- az-notification-list -->
              <div class="dropdown-footer"><a href="">View All Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="../img/faces/face1.jpg" alt="">
                </div><!-- az-img-user -->
                <h6>Aziana Pechon</h6>
                <span>Premium Member</span>
              </div><!-- az-header-profile -->

              <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
              <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-content p-0">
      <div class="container-fluid p-0 pr-4">
        <div class="az-content-left az-content-left-components p-0  pl-4 pt-4">
          <div class="component-item">
            <label>UI Elements</label>
            <nav class="nav flex-column">
              <a href="elem-buttons.html" class="nav-link">Buttons</a>
              <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
              <a href="elem-icons.html" class="nav-link">Icons</a>
            </nav>
            <label>Forms</label>
            <nav class="nav flex-column">
              <a href="form-elements.html" class="nav-link">Form Elements</a>
            </nav>
            <label>Charts</label>
            <nav class="nav flex-column">
              <a href="chart-chartjs.html" class="nav-link">ChartJS</a>
            </nav>

            <label>Tables</label>
            <nav class="nav flex-column">
              <a href="table-basic.html" class="nav-link active">Basic Tables</a>
            </nav>
          </div><!-- component-item -->

        </div><!-- az-content-left -->
        
        <div class="az-content-body pd-lg-l-40 pt-4 d-flex flex-column">
          <div class="az-content-breadcrumb">
            <span>Posts</span>
            <span>Cadastro</span>
          </div>
          <h2 class="az-content-title">Cadastro</h2>

          <div class="az-content-label mg-b-5">Subtitulo</div>
          <p class="mg-b-20">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

          <div class="row row-sm">
            <div class="col-lg">
              <input class="form-control" placeholder="Input box" type="text">
            </div><!-- col -->
          </div>
          
          <hr class="mg-y-10">

          <div class="row row-sm">
            <div class="col-lg">
              <textarea rows="3" class="form-control" placeholder="Textarea"></textarea>
            </div><!-- col -->
          </div>
          
          <hr class="mg-y-10">         
          
          <div class="row row-sm">
            <div class="col-lg">
              <textarea id="toolbar" rows="3" class="form-control" placeholder="Textarea"></textarea>
            </div><!-- col -->
          </div>
          
          <hr class="mg-y-10">

          <div class="row row-sm">
            <div class="col-sm-7 col-md-6 col-lg-4">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div><!-- col -->
          </div><!-- row -->
          
          <hr class="mg-y-10">

          <div class="row row-sm">
          <div class="col-sm-7 col-md-6 col-lg-4">
            <button class="btn btn-block btn-az-primary">cadastrar</button>
          </div>
          </div>


          <div class="ht-40"></div>

          <div class="az-footer mg-t-auto">
            <div class="container">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div><!-- container -->
          </div><!-- az-footer -->



        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>

    <!-- Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


    <!-- Initialize Quill editor -->
    <script>
      var quill = new Quill('#toolbar', {
        theme: 'snow'
      });
    </script>

    <script src="../js/azia.js"></script>
  </body>
</html>
