<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>CodeCofe | Beranda</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/adminLTE/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Roboto+Slab&display=swap" rel="stylesheet">
  {{-- My Css --}}
<link rel="stylesheet" href="{{ asset('/css/style.home.css')}}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{ url('/')}}" class="navbar-brand">
        <img src="{{ asset('/img/logo5.png')}}" alt="CodeCafe Logo" width="200" class=" mr-2 logo-nav"
             style="opacity: .8">
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ url('/forum')}}" class="nav-link btn-nav h-75">Forum</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
            <div class="form-group has-search">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Search">
              </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a href="{{ url('/masuk')}}" class=" btn btn-primary btn-masuk mr-1">Masuk</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/daftar')}}" class="btn btn-block btn-outline-primary btn-daftar">Daftar</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="jumbotron hero text-center">
      <h1 class="display-4">Ngobrol, Ngoding, Nongkrong dan Ngopi</h1>
      <p class="lead">Forum Developer dari Developer, untuk Developer. Karya anak bangsa</p>
      <p>Lebih asyik kalau sambil ngopi</p>
      <a class="btn btn-nav btn-lg" href="#" role="button">Buat Pertanyaan</a>
    </div>
  <div class="content">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="card-deck">
          <div class="card mr-3 mt-4" style="width: 18rem;">
            <div class="card-body text-center text-biru">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="120" height="120"
              viewBox="0 0 172 172"
              style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b8733a"><path d="M86,10.75c-47.41968,0 -86,31.06372 -86,69.23462c0,23.84107 14.93872,45.46704 40.06055,58.14868c-0.46191,6.30933 -2.18359,16.81787 -8.073,26.64404c-0.5564,0.92383 -0.50391,2.07861 0.12598,2.94995c0.50391,0.71387 1.32275,1.12329 2.18359,1.12329c0.18896,0 0.38843,-0.02099 0.57739,-0.06299c20.34521,-4.52466 29.88794,-16.125 33.3313,-21.53149c5.88941,0.98682 11.86279,1.48022 17.79419,1.48022c47.41968,0 86,-30.84326 86,-68.75171c0,-38.1814 -38.58032,-69.23462 -86,-69.23462zM86,16.125c44.45923,0 80.625,28.64917 80.625,63.85962c0,34.948 -36.16577,63.37671 -80.625,63.37671c-6.22534,0 -12.50317,-0.57739 -18.65503,-1.72168c-1.14429,-0.19946 -2.29907,0.32544 -2.85547,1.34375c-1.80566,3.29639 -8.5874,13.59497 -24.94336,18.95947c4.59814,-10.02564 5.74243,-19.85181 5.98389,-25.31079c0.05249,-1.0708 -0.5459,-2.07861 -1.51172,-2.55103c-24.198,-11.63184 -38.64331,-31.86157 -38.64331,-54.09643c0,-35.21045 36.16577,-63.85962 80.625,-63.85962zM86,26.875c-36.98462,0 -67.06152,24.11401 -67.06152,53.75c0,3.62183 0.44092,7.23315 1.32276,10.7395c0.31494,1.21777 1.40674,2.02612 2.60352,2.02612c0.22046,0 0.45141,-0.02099 0.67188,-0.08398c1.42773,-0.35693 2.29907,-1.82666 1.94214,-3.26489c-0.77686,-3.07593 -1.16528,-6.23584 -1.16528,-9.41675c0,-26.67554 27.67285,-48.375 61.68652,-48.375c10.92847,0 21.66797,2.27808 31.05322,6.58228c1.35425,0.60889 2.94995,0.02099 3.55884,-1.33325c0.61939,-1.34375 0.03149,-2.93945 -1.31226,-3.55884c-10.08862,-4.61914 -21.60498,-7.06518 -33.2998,-7.06518zM129.14697,40.36499c-0.68238,0.11548 -1.32276,0.48291 -1.75317,1.0813c-0.87134,1.19678 -0.61939,2.87647 0.58789,3.7478c2.39355,1.75317 4.64014,3.67432 6.67676,5.70044c0.5144,0.5354 1.20728,0.79785 1.90015,0.79785c0.68237,0 1.37524,-0.26245 1.88965,-0.78735c1.0603,-1.0498 1.0603,-2.75049 0.0105,-3.80029c-2.21509,-2.22559 -4.68213,-4.33569 -7.31714,-6.24634c-0.59839,-0.44092 -1.31226,-0.59839 -1.99463,-0.49341zM70.77783,53.75c-2.21509,0 -4.22022,0.39893 -5.99439,1.19678c-1.78467,0.79785 -3.28589,1.84766 -4.51416,3.12842c-1.22827,1.29126 -2.1521,2.73999 -2.77148,4.33569c-0.60889,1.6062 -0.92383,3.20191 -0.92383,4.79761c0,3.93677 1.35425,6.93921 4.06274,9.02832c2.698,2.08911 5.83691,3.12842 9.40625,3.12842c-0.12598,2.09961 -0.68237,3.93677 -1.66919,5.54297c-0.97632,1.5957 -2.20459,2.98145 -3.67432,4.14673c-1.48022,1.16528 -3.04443,2.1416 -4.70312,2.94995c-0.021,0 -0.04199,0.0105 -0.06299,0.021c-2.27808,1.10229 -3.07593,3.93677 -1.65869,6.03637l2.61401,3.85278c0.78735,1.15479 2.07861,1.80566 3.40137,1.80566c0.58789,0 1.18628,-0.13647 1.75317,-0.39892c1.0813,-0.51441 2.1731,-1.03931 2.79248,-1.36475c1.54321,-0.79785 3.17041,-1.78467 4.89209,-2.94995c1.72168,-1.16528 3.25439,-2.42505 4.59814,-3.7793c3.07593,-3.06543 5.44849,-6.57178 7.09668,-10.50854c1.65869,-3.93677 2.49854,-8.23047 2.49854,-12.9126c0,-2.44604 -0.36743,-4.78711 -1.11279,-7.0022c-0.73486,-2.20459 -1.77417,-4.11523 -3.12842,-5.71094c-1.5957,-1.72168 -3.53784,-3.03393 -5.80542,-3.95776c-2.27808,-0.92383 -4.64014,-1.38574 -7.09668,-1.38574zM106.9856,53.75c-2.21509,0 -4.22022,0.39893 -5.99439,1.19678c-1.78467,0.79785 -3.28589,1.84766 -4.51416,3.12842c-1.22827,1.29126 -2.1521,2.73999 -2.76099,4.33569c-0.61939,1.6062 -0.92383,3.20191 -0.92383,4.79761c0,3.93677 1.34375,6.93921 4.05224,9.02832c2.698,2.08911 5.83691,3.12842 9.39575,3.12842c-0.11548,2.09961 -0.67187,3.93677 -1.64819,5.54297c-0.98682,1.5957 -2.21509,2.98145 -3.68482,4.14673c-1.48022,1.16528 -3.04443,2.1416 -4.70312,2.94995c-0.02099,0 -0.04199,0.0105 -0.05249,0.021c-2.28858,1.10229 -3.09692,3.93677 -1.66919,6.03637l2.60352,3.85278c0.79785,1.15479 2.07861,1.80566 3.40137,1.80566c0.59839,0 1.19678,-0.13647 1.76367,-0.39892c1.0813,-0.51441 2.1731,-1.03931 2.80298,-1.36475c1.53271,-0.79785 3.15991,-1.78467 4.88159,-2.94995c1.72168,-1.16528 3.2544,-2.42505 4.60864,-3.7793c3.06543,-3.06543 5.43799,-6.57178 7.09668,-10.50854c1.64819,-3.93677 2.48804,-8.23047 2.48804,-12.9021c0,-2.45654 -0.36743,-4.79761 -1.10229,-7.0127c-0.74536,-2.20459 -1.78467,-4.10473 -3.13892,-5.71094c-1.5957,-1.71118 -3.53784,-3.03393 -5.80542,-3.95776c-2.27808,-0.92383 -4.64014,-1.38574 -7.09668,-1.38574zM143.70776,55.93359c-0.33594,0.05249 -0.68237,0.16797 -0.99731,0.35693c-1.27027,0.76636 -1.67969,2.41455 -0.91333,3.68481c3.91577,6.48779 5.8894,13.427 5.8894,20.64966c0,22.0249 -18.96997,41.27832 -46.12842,46.82129c-1.44873,0.29395 -2.39355,1.72168 -2.08911,3.17041c0.25195,1.27026 1.37524,2.1521 2.62451,2.1521c0.17847,0 0.35693,-0.021 0.5354,-0.06299c29.69897,-6.05737 50.43262,-27.47339 50.43262,-52.08081c0,-8.20947 -2.23608,-16.09351 -6.66626,-23.42114c-0.57739,-0.95532 -1.64819,-1.41723 -2.6875,-1.27026zM70.77783,59.125c1.77417,0 3.43286,0.32544 5.07055,0.98682c1.51172,0.60889 2.75049,1.44873 3.81079,2.55102c0.86084,1.0498 1.55371,2.34107 2.05762,3.85278c0.5459,1.64819 0.82935,3.43286 0.82935,5.30151c0,3.92627 -0.70337,7.55859 -2.07861,10.81299c-1.37524,3.26489 -3.36987,6.22534 -5.94189,8.79736c-1.10229,1.1023 -2.38306,2.1521 -3.81079,3.12842c-1.55371,1.0498 -3.02344,1.93164 -4.35669,2.62451c-0.38843,0.20996 -0.98682,0.50391 -1.64819,0.81885l-1.18628,-1.76367c1.57471,-0.85034 3.08642,-1.84766 4.50366,-2.97095c1.95264,-1.54321 3.61133,-3.41186 4.92358,-5.54297c1.44873,-2.34107 2.26758,-5.04956 2.44605,-8.02051c0.08398,-1.48022 -0.44092,-2.92896 -1.44873,-4.01025c-1.01831,-1.0813 -2.43555,-1.69019 -3.91577,-1.69019c-2.36206,0 -4.36719,-0.66137 -6.12036,-2.01562c-0.91333,-0.70337 -1.96314,-1.88965 -1.96314,-4.77661c0,-0.94483 0.18897,-1.87915 0.5669,-2.86597c0.36743,-0.93433 0.89233,-1.77417 1.64819,-2.56152c0.73486,-0.77685 1.65869,-1.40674 2.81348,-1.93164c1.0813,-0.48291 2.36206,-0.72436 3.80029,-0.72436zM106.9856,59.125c1.77417,0 3.43286,0.32544 5.08105,0.98682c1.50122,0.60889 2.73999,1.44873 3.78979,2.55102c0.87134,1.0498 1.56421,2.34107 2.05762,3.85278c0.5564,1.64819 0.83984,3.43286 0.83984,5.30151c0,3.92627 -0.70337,7.55859 -2.06811,10.82349c-1.38574,3.26489 -3.38037,6.22534 -5.95239,8.78686c-1.10229,1.11279 -2.38306,2.1626 -3.82129,3.13892c-1.54321,1.03931 -3.01294,1.93164 -4.35669,2.62451c-0.38843,0.19946 -0.97632,0.49341 -1.6272,0.80835l-1.19678,-1.76367c1.57471,-0.85034 3.07593,-1.84766 4.50366,-2.97095c1.95264,-1.54321 3.61133,-3.42236 4.92359,-5.54297c1.44873,-2.35156 2.27808,-5.04956 2.45654,-8.03101c0.08398,-1.48022 -0.44092,-2.92896 -1.45923,-4.01026c-1.01831,-1.0708 -2.43555,-1.69018 -3.91577,-1.69018c-2.36206,0 -4.36719,-0.65088 -6.12036,-2.01562c-0.91333,-0.70337 -1.95264,-1.87915 -1.95264,-4.76611c0,-0.94483 0.17847,-1.87915 0.5564,-2.86597c0.36743,-0.94482 0.90283,-1.78467 1.64819,-2.56152c0.74536,-0.77685 1.66919,-1.40674 2.81348,-1.93164c1.0813,-0.48291 2.36206,-0.72436 3.80029,-0.72436zM34.79053,98.93359c-0.67187,-0.11548 -1.40674,0.0105 -2.00513,0.44092l-4.40918,3.08642c-1.21777,0.83984 -1.51172,2.51953 -0.66138,3.7373c0.5144,0.74536 1.35425,1.14429 2.19409,1.14429c0.5354,0 1.0708,-0.15747 1.54321,-0.48291l4.40918,-3.08643c1.20728,-0.83984 1.51172,-2.51953 0.66138,-3.7373c-0.41992,-0.59839 -1.0603,-0.98682 -1.73218,-1.10229zM44.03931,109.76758c-0.69287,0.06299 -1.35425,0.37793 -1.83716,0.95532l-3.45386,4.10474c-0.95532,1.13379 -0.80835,2.83447 0.32544,3.78979c0.50391,0.41992 1.12329,0.62988 1.73218,0.62988c0.76636,0 1.52222,-0.32544 2.05762,-0.95532l3.45386,-4.11523c0.95532,-1.13379 0.81885,-2.83447 -0.32544,-3.78979c-0.56689,-0.47241 -1.27026,-0.67187 -1.95264,-0.61939zM56.78393,117.6936c-1.0498,-0.04199 -2.06811,0.5354 -2.53003,1.53271l-2.27808,4.87109c-0.62988,1.35425 -0.05249,2.94995 1.29126,3.57984c0.36743,0.16797 0.75586,0.25195 1.14429,0.25195c1.00781,0 1.97363,-0.57739 2.43555,-1.54321l2.27808,-4.87109c0.61939,-1.34375 0.04199,-2.94995 -1.30176,-3.56934c-0.33594,-0.15747 -0.69287,-0.24146 -1.03931,-0.25195zM71.20825,122.16577c-1.49072,-0.27295 -2.85547,0.71387 -3.11792,2.1731l-0.94483,5.30151c-0.26245,1.45923 0.71387,2.85547 2.18359,3.10742c0.15747,0.03149 0.31494,0.04199 0.46191,0.04199c1.28076,0 2.41455,-0.91333 2.64551,-2.20459l0.94483,-5.30151c0.26245,-1.46973 -0.71387,-2.85547 -2.1731,-3.11792zM85.21265,122.78516c-1.46973,0.13647 -2.56152,1.43823 -2.43555,2.91846l0.46191,5.354c0.12598,1.39624 1.29126,2.44604 2.677,2.44604c0.07349,0 0.15747,0 0.24146,-0.0105c1.46973,-0.12598 2.56152,-1.41724 2.43555,-2.89746l-0.46191,-5.3645c-0.12598,-1.46973 -1.37524,-2.59302 -2.91846,-2.44604z"></path></g></g></svg>
              <p class="card-judul">Menjawab Pertanyaan</p>
              <p class="card-text">Jawablah pertanyaan yang ada untuk menambah sklillmu!</p>
              <a href="#" class="stretched-link"></a>
              <a href="#" class="btn btn-link-coklat">Mulai Sekarang!</a>
            </div>
          </div>
          <div class="card mr-3" style="width: 18rem;">
            <div class="card-body text-center text-biru">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="120" height="120"
              viewBox="0 0 172 172"
              style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b8733a"><path d="M86,11.21191c-47.41968,0 -86,30.85376 -86,68.77271c0,23.84107 14.93872,45.46704 40.06055,58.14868c-0.46191,6.30933 -2.18359,16.81787 -8.073,26.64404c-0.5564,0.92383 -0.50391,2.07861 0.12598,2.94995c0.50391,0.71387 1.32275,1.12329 2.1731,1.12329c0.18896,0 0.38843,-0.02099 0.57739,-0.06299c20.35571,-4.52466 29.89844,-16.125 33.3418,-21.53149c5.87891,0.98682 11.8523,1.48022 17.79419,1.48022c47.41968,0 86,-30.84326 86,-68.75171c0,-37.91895 -38.58032,-68.77271 -86,-68.77271zM86,16.58691c44.45923,0 80.625,28.43921 80.625,63.39771c0,34.948 -36.16577,63.37671 -80.625,63.37671c-6.22534,0 -12.51367,-0.57739 -18.65503,-1.72168c-1.13379,-0.19946 -2.29907,0.32544 -2.85547,1.34375c-1.80566,3.29639 -8.5874,13.59497 -24.94336,18.95947c4.59814,-10.02564 5.74243,-19.85181 5.98389,-25.31079c0.05249,-1.0708 -0.5459,-2.07861 -1.51172,-2.55103c-24.198,-11.63184 -38.64331,-31.86157 -38.64331,-54.09643c0,-34.9585 36.16577,-63.39771 80.625,-63.39771zM86,26.875c-36.98462,0 -67.07202,24.11401 -67.07202,53.75c0,3.61133 0.45142,7.22266 1.33325,10.7395c0.30444,1.21777 1.40674,2.02612 2.60352,2.02612c0.22046,0 0.44092,-0.02099 0.66137,-0.08398c1.43823,-0.35693 2.30957,-1.81616 1.94214,-3.26489c-0.76636,-3.07593 -1.16528,-6.24634 -1.16528,-9.41675c0,-26.67554 27.67285,-48.375 61.69702,-48.375c10.92847,0 21.66797,2.27808 31.05322,6.58228c1.34375,0.60889 2.93945,0.02099 3.55884,-1.33325c0.61939,-1.34375 0.03149,-2.93945 -1.31226,-3.55884c-10.08862,-4.61914 -21.60498,-7.06518 -33.2998,-7.06518zM129.14697,40.36499c-0.68238,0.10498 -1.32276,0.47241 -1.75317,1.0813c-0.88184,1.19678 -0.61939,2.87647 0.58789,3.7478c2.40405,1.75317 4.64014,3.67432 6.66626,5.70044c0.5249,0.5354 1.21777,0.79785 1.91064,0.79785c0.68237,0 1.36475,-0.26245 1.88965,-0.78735c1.0498,-1.0498 1.0603,-2.75049 0.0105,-3.80029c-2.22559,-2.22559 -4.68213,-4.33569 -7.31714,-6.24634c-0.59839,-0.44092 -1.31226,-0.59839 -1.99463,-0.49341zM83.3125,48.375c-7.41162,0 -13.4375,6.02588 -13.4375,13.4375c0,1.49072 1.20728,2.6875 2.6875,2.6875c1.48022,0 2.6875,-1.19678 2.6875,-2.6875c0,-4.44067 3.62183,-8.0625 8.0625,-8.0625h8.0625c4.44067,0 8.0625,3.62183 8.0625,8.0625v2.25708c0,3.91577 -2.49853,7.39063 -6.22534,8.62939c-5.9209,1.97363 -9.89966,7.49561 -9.89966,13.73145v2.25708c0,1.49072 1.20728,2.6875 2.6875,2.6875c1.48022,0 2.6875,-1.19678 2.6875,-2.6875v-2.25708c0,-3.91577 2.49854,-7.39062 6.22534,-8.62939c5.9209,-1.97363 9.89966,-7.49561 9.89966,-13.73145v-2.25708c0,-7.41162 -6.02588,-13.4375 -13.4375,-13.4375zM143.70776,55.93359c-0.33594,0.05249 -0.68237,0.16797 -0.99731,0.35693c-1.27027,0.76636 -1.67969,2.41455 -0.91333,3.68481c3.91577,6.48779 5.8894,13.4375 5.8894,20.64966c0,22.0249 -18.96997,41.27832 -46.12842,46.82129c-1.44873,0.29395 -2.39355,1.72168 -2.08911,3.17041c0.25195,1.27026 1.37524,2.1521 2.62451,2.1521c0.17847,0 0.35693,-0.021 0.5354,-0.06299c29.69897,-6.05737 50.44311,-27.47339 50.44311,-52.08081c0,-8.20947 -2.24658,-16.09351 -6.67676,-23.42114c-0.56689,-0.95532 -1.64819,-1.41723 -2.6875,-1.27026zM86,96.75c-2.97095,0 -5.375,2.40405 -5.375,5.375c0,2.97095 2.40405,5.375 5.375,5.375c2.97095,0 5.375,-2.40405 5.375,-5.375c0,-2.97095 -2.40405,-5.375 -5.375,-5.375zM34.79053,98.93359c-0.68238,-0.11548 -1.40674,0.0105 -2.00513,0.44092l-4.40918,3.08642c-1.21777,0.83984 -1.51172,2.51953 -0.66138,3.7373c0.5249,0.74536 1.35425,1.14429 2.20459,1.14429c0.5354,0 1.0708,-0.15747 1.53271,-0.48291l4.40918,-3.08643c1.21777,-0.83984 1.51172,-2.51953 0.67188,-3.7373c-0.43042,-0.60889 -1.0603,-0.98682 -1.74267,-1.10229zM44.03931,109.76758c-0.69287,0.06299 -1.35425,0.37793 -1.83716,0.95532l-3.44336,4.10474c-0.95532,1.13379 -0.81885,2.83447 0.32544,3.78979c0.50391,0.41992 1.11279,0.62988 1.72168,0.62988c0.76636,0 1.52222,-0.32544 2.05762,-0.95532l3.45386,-4.11523c0.95532,-1.13379 0.81885,-2.83447 -0.32544,-3.78979c-0.56689,-0.47241 -1.27026,-0.68237 -1.95264,-0.61939zM56.78393,117.6936c-1.0498,-0.04199 -2.06811,0.5249 -2.53003,1.53271l-2.27808,4.87109c-0.62988,1.35425 -0.05249,2.94995 1.29126,3.57984c0.36743,0.16797 0.75586,0.25195 1.14429,0.25195c1.00781,0 1.97363,-0.57739 2.43555,-1.54321l2.26758,-4.87109c0.62988,-1.34375 0.05249,-2.94995 -1.29126,-3.56934c-0.33594,-0.15747 -0.69287,-0.24146 -1.03931,-0.25195zM71.19776,122.16577c-1.46973,-0.26245 -2.85547,0.71387 -3.11792,2.1731l-0.93433,5.30151c-0.26245,1.45923 0.72436,2.85547 2.18359,3.10742c0.15747,0.03149 0.31494,0.04199 0.46191,0.04199c1.28076,0 2.41455,-0.91333 2.64551,-2.20459l0.94483,-5.30151c0.26245,-1.46973 -0.72437,-2.85547 -2.18359,-3.11792zM85.21265,122.78516c-1.46973,0.13647 -2.57202,1.43823 -2.44604,2.91846l0.47241,5.354c0.12598,1.39624 1.29126,2.44604 2.677,2.44604c0.07349,0 0.15747,0 0.23096,-0.0105c1.48022,-0.12598 2.57202,-1.41724 2.44604,-2.89746l-0.46191,-5.3645c-0.12598,-1.46973 -1.43823,-2.59302 -2.91846,-2.44604z"></path></g></g></svg>
              <p class="card-judul">Membuat Pertanyaan  </p>
              <p class="card-text">Buatlah pertanyaanmu disini dan berdiskusilah dengan teman barumu!</p>
              <a href="#" class="stretched-link"></a>
              <a href="#" class="btn btn-link-coklat">Mulai Sekarang!</a>
            </div>
          </div>
          <div class="card mr-3 mt-4" style="width: 18rem;">
            <div class="card-body text-center text-biru">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="120" height="120"
              viewBox="0 0 172 172"
              style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#b8733a"><path d="M86,13.76c-43.59125,0 -79.12,30.54344 -79.12,68.78656c0,22.18531 12.1475,41.50844 30.82563,54.12625c-0.02688,0.73906 0.02687,1.94844 -0.94063,5.54969c-1.20937,4.47469 -3.655,10.76344 -8.6,17.85844l-3.52062,5.03906h6.15437c21.285,0 33.60719,-13.88094 35.51531,-16.11156c6.3425,1.49156 12.85969,2.29781 19.68594,2.29781c43.57781,0 79.12,-30.54344 79.12,-68.77312c0,-38.22969 -35.52875,-68.77313 -79.12,-68.77313zM86,20.64c39.82875,0 72.24,27.76188 72.24,61.90656c0,34.13125 -32.41125,61.89312 -72.24,61.89312c-6.08719,0 -12.01312,-0.69875 -18.11375,-2.12312l-4.085,-0.95406l-2.71437,3.17125c-2.35156,2.75469 -10.26625,10.84406 -23.30063,13.115c2.49938,-4.48812 4.38063,-9.05687 5.60344,-13.63906c0.9675,-3.5475 1.14219,-5.41531 1.1825,-7.05469l0.16125,-3.82969l-3.18469,-2.15c-17.65687,-11.94594 -27.78875,-29.60281 -27.78875,-48.42875c0,-34.14469 32.41125,-61.90656 72.24,-61.90656zM103.2,48.16v68.8h20.64v-68.8zM110.08,55.04h6.88v55.04h-6.88zM48.16,61.92v55.04h20.64v-55.04zM55.04,68.8h6.88v41.28h-6.88zM75.68,79.12v37.84h20.64v-37.84zM82.56,86h6.88v24.08h-6.88z"></path></g></g></svg>
              <p class="card-judul">Vote Pertanyaan</p>
              <p class="card-text">Vote pertanyaan untuk memilih pertanyaan terbaik!</p>
              <a href="#" class="stretched-link"></a>
              <a href="#" class="btn btn-link-coklat">Mulai Sekarang!</a>
            </div>
          </div>
        </div>
  </div>
  </div>
  </div><br>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://codecafe.id">CodeCafe.id</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/adminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/adminLTE/dist/js/demo.js')}}"></script>
@stack('scripts')
</body>
</html>
