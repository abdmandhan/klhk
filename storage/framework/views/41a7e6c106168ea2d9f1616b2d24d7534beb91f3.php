<!doctype html>
<html lang="en">
  <head>
    <title>SIMTORING KLHK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/fonts/icomoon/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/jquery.fancybox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/fonts/flaticon/font/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/client/css/style.css')); ?>">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo" ><a href="/front/home" class="h4 mb-0"><img src="<?php echo e(url('vendor/client/images/logo.png')); ?>" alt=""> </a></h4>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="/front/home" class="nav-link">Beranda</a></li>
                <li class="has-children">
                  <a href="" class="nav-link">Eselon</a>
                  <ul class="dropdown">
                    <?php $__currentLoopData = $eselons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="/front/eselon/<?php echo e($a->id); ?>"><?php echo e($a->name_other); ?></a></li>
                        <!-- <li><a href="/front/itjen/2">Itjen</a></li>
                        <li><a href="/front/pktl/3">PKTL</a></li>
                        <li><a href="/front/ksdae/4">KSDAE</a></li>
                        <li><a href="/front/pdashl/5">PDASHL</a></li>
                        <li><a href="/front/phpl/6">PHPL</a></li>
                        <li><a href="/front/ppkl/7">PPKL</a></li>
                        <li><a href="/front/pslb3/8">PSLB3</a></li>
                        <li><a href="/front/ppi/9">PPI</a></li>
                        <li><a href="/front/pskl/10">PSKL</a></li>
                        <li><a href="/front/gakkum/11">GAKKUM</a></li>
                        <li><a href="/front/bp2sdm/12">BP2SDM</a></li>
                        <li><a href="/front/litbang/13">BLI</a></li> -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#" class="nav-link">Kategori</a>
                  <ul class="dropdown">
                    <?php $__currentLoopData = $web_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="/front/categori/<?php echo e($b->id); ?>"><?php echo e($b->name); ?></a></li>
                    <!-- <li><a href="/front/website">Website</a></li> -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </li>
                <li><a href="#contact-section" class="nav-link">Kontak</a></li>
                <li>
                  <form action="/front/hasil" method="get">
                    <input type="text" name="search" placeholder="Search.." >
                  </form>
                </li>
                <li class="social"><a href="https://facebook.com/HumasKemenLHK/" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="https://twitter.com/Kementerianlhk/" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="https://www.instagram.com/kementerianlhk/" class="nav-link"><span class="icon-instagram"></span></a></li>
                <li class="social"><a href="https://www.youtube.com/user/ppiddephut" class="nav-link"><span class="icon-youtube"></span></a></li>
           </ul>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>
<?php /**PATH C:\xampp\htdocs\klhk\resources\views/client/header.blade.php ENDPATH**/ ?>