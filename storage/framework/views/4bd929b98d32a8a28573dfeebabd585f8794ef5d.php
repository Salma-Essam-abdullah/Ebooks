<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>memorial books</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->

      <link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo e(URL::asset('css/responsive.css')); ?>">
      <!-- fevicon -->

      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->

      <link rel="stylesheet" href="<?php echo e(URL::asset('css/jquery.mCustomScrollbar.min.css')); ?>">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
                    .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            }

            .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            .container {
            padding: 2px 16px;
            }

      </style>
   </head>
   <!-- body -->
   <body class="main-layout Books-bg">

      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="/images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li > <a href="http://127.0.0.1:8000/">Home</a> </li>
                                 <li class="active"><a href=<?php echo e(route('books.index')); ?>>Our Books</a></li>
                                 <li><a href="<?php echo e(route('list.booklist')); ?>">library</a></li>
                               <a href="#"><img src="/images/search_icon.png" alt="#" /></a> </li>
                                 <li class="mean-last"> <a href="#"><img src="/images/top-icon.png" alt="#" /></a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Our Books</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Books -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span>
                  </div>
               </div>
            </div>
            <div class="row box">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="/images/book-1.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="book-box">
                     <figure><img src="/images/book-2.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="/images/book-1.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-md-6 offset-md-3">
                  <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
               </div>
            </div>


                     <div class="books" style="background-color:rgb(243, 243, 243);">
                          <div class="card" style="display: inline ">
                            <div class="container">
                  <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h3>ID: <?php echo e($books->id); ?></h3>
                             <h3><b>Name: <?php echo e($books->name); ?></b></h3>
                             <p>Description: <?php echo e($books->description); ?></p>
                             <p>Price: <?php echo e($books->price); ?></p>
                             <p>Quantity: <?php echo e($books->quantity); ?></p>
                             <p>Category ID:<?php echo e($books->list_id); ?></p>
                             <a href="<?php echo e(route('books.show', ['books'=>$books->id])); ?>" type="button" class="btn btn-success" >SHOW</a>
                             <a href="<?php echo e(route('books.update', ['books'=>$books->id])); ?>" type="button" class="btn btn-info" >UPDATE</a>
                             <a href="<?php echo e(route('books.delete', ['books'=>$books->id])); ?>" type="button" class="btn btn-danger" >DELETE</a>
                             <hr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          </div>
                     </div>


         </div>
      </div>
      <!-- end Books -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="/icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="/icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="/icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="/icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2021 All Right Reserved </p>
            </div>
         </div>

      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>

   </body>
</html>

<?php /**PATH G:\projects\example-app2\resources\views/books/index.blade.php ENDPATH**/ ?>