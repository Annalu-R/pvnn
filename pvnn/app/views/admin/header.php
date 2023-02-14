<!DOCTYPE html>
<html lang="pt-br">
  <head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blog PVNN - Admin</title>

    <!-- vendor css -->
    <link href="<?= $data['base_path'] ?>/public/admin/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= $data['base_path'] ?>/public/admin/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= $data['base_path'] ?>/public/admin/lib/typicons.font/typicons.css" rel="stylesheet">
    
    <!-- Core build with no theme, formatting, non-essential modules -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="<?= $data['base_path'] ?>/public/admin/css/azia.css">
    <link rel="stylesheet" href="<?= $data['base_path'] ?>/public/admin/css/pvnn.css">

  </head>
  <body>

    <div class="az-header">
      <div class="container-fluid">
        
        <div class="az-header-left">
          <a href="index.html" class="az-logo"><span></span> PVNN - Admin</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        
        <div class="az-header-right">
        
          <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>

          
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="<?= $data['base_path'] ?>/public/admin/img/faces/face1.jpg" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="<?= $data['base_path'] ?>/public/admin/img/faces/face1.jpg" alt="">
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
        
      <?php require_once __DIR__ . "/menu-lateral.php"; ?>