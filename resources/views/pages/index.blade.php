

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>AdForest | Largest Classifieds Portal</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/style.css">
      <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link href="css/flaticon.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
      <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/forest-menu.css" type="text/css">
      <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="css/animate.min.css" type="text/css">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="css/select2.min.css" rel="stylesheet" />
      <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
      <link href="css/nouislider.min.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
      <link href="css/slider.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link href="skins/minimal/minimal.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
      <link href="css/responsive-media.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="color" href="css/colors/red.css">
      <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
      <!-- JavaScripts -->
      <script src="js/modernizr.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      {{-- <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div> --}}
      <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
      {{-- <div class="color-switcher" id="choose_color">
         <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
         <h5>STYLE SWITCHER</h5>
         <div class="theme-colours">
            <p> Choose Colour style </p>
            <ul>
               <li>
                  <a href="#." class="defualt" id="defualt"></a>
               </li>
               <li>
                  <a href="#." class="green" id="green"></a>
               </li>
               <li>
                  <a href="#." class="blue" id="blue"></a>
               </li>
               <li>
                  <a href="#." class="red" id="red"></a>
               </li>
               
               <li>
                  <a href="#." class="sea-green" id="sea-green"></a>
               </li>
              
            </ul>
         </div>
         <div class="clearfix"> </div>
      </div> --}}
      <!-- =-=-=-=-=-=-= Transparent Header =-=-=-=-=-=-= -->
      @include('templates.header')
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Transparent Header =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Home Banner 2 =-=-=-=-=-=-= -->
      @include('components.banner1280x800')
      <!-- =-=-=-=-=-=-= Home Banner 2 End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Popular Categories =-=-=-=-=-=-= -->
         <section class="custom-padding gray">
            <!-- Main Container -->
            {{-- @include('components.categories') --}}
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Popular Categories End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
         {{-- @include('components.anuncios_destacados') --}}
         <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Trending Ads =-=-=-=-=-=-= -->
         <section class="custom-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Latest <span class="heading-color"> Trending</span> Ads</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <ul class="list-unstyled">
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/car-4.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>8</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- Ad Status --><span class="ad-status"> Featured </span>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a>Honda Civic 2017 Sports Edition</a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$18,640</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/list-2.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>4</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- Ad Status --><span class="ad-status"> Featured </span>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/6.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a>Honda CBR 1000RR  for Sale</a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$900</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/12.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>5</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Art & Toys</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a> Xbox 360 + Games + Accessories </a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$120</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/lap-4.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>3</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/3.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Laptops</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a> Sony VAIO Duo Convertible 13.3" i7 </a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$1,129</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/list-10.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>4</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- Ad Status --><span class="ad-status"> Featured </span>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/4.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Mobiles</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a>Sony Xperia Z5 Waterproof</a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$350</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class="text-center">
                        <ul class="pagination ">
                           <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                           <li><a href="#">1</a></li>
                           <li class="active"><a href="#">2</a></li>
                           <li><a href="#">...</a></li>
                           <li><a href="#">10</a></li>
                           <li><a href="#">20</a></li>
                           <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Trending Ads End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Featured Ad Parallex =-=-=-=-=-=-= -->
         <section class="parallex bg-3 featured-ads">
            <div class="container">
               <!-- Container -->
               <div class="container">
                  <div class="col-md-8 col-sm-6 no-padding">
                     <div class="app-text-section">
                        <h5>Featured Ads</h5>
                        <h3>Get more exposure </h3>
                        <ul>
                           <li>Find nearby cars in your network with Scholar</li>
                           <li>Browse real hirers reviews to know why choose Scholar</li>
                           <li>Rent a car so easy with a tap !</li>
                           <li>Rent a car so easy with a tap !</li>
                        </ul>
                        <button class="btn btn-lg btn-theme"> Join Us now <i class="fa fa-refresh"></i> </button>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 no-padding">
                     <div class="pricing-fancy ">
                        <div class="icon-bg"><i class="flaticon-money-2"></i></div>
                        <h3><strong>Featured</strong> <span class="thin">Ads</span></h3>
                        <div class="price-box">
                           <div class="price-large"> <span class="dollartext">$</span>1.99<span class="monthtext">/month</span> </div>
                           <p>Regulary <del>$5.00</del></p>
                           <a href="#" class="btn btn-lg btn-theme">Submit Featured Ad</a> 
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container /- -->
            </div>
         </section>
         <!-- =-=-=-=-=-=-= Featured Ad Parallex End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Blog Section =-=-=-=-=-=-= -->
         <section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Content Box -->
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Latest <span class="heading-color"> Blog</span> Post</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/1.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> Sony Xperia XZ: Release date and everything you need to know</a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
                        </div>
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/2.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> Review of the 2017 Honda Accord Sport </a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
                        </div>
                        <!-- Blog Post-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="blog-post">
                              <div class="post-img">
                                 <a href="#"> <img class="img-responsive" alt="" src="images/blog/3.jpg"> </a>
                              </div>
                              <div class="post-info"> <a href="">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                              <h3 class="post-title"> <a href="#"> How to Buy a House 6 Must-Dos Before Buying A Home</a> </h3>
                              <p class="post-excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. </p>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Blog Section End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= App Download Section =-=-=-=-=-=-= -->   
         <div class="app-download-section style-2">
            <!-- app-download-section-wrapper -->
            <div class="app-download-section-wrapper">
               <!-- app-download-section-container -->
               <div class="app-download-section-container">
                  <!-- container -->
                  <div class="container">
                     <!-- row -->
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="mobile-image-content"> <img src="images/hand.png" alt=""> </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="app-text-section">
                              <h5>Download our app</h5>
                              <h3>Get Our App For Your Mobile</h3>
                              <ul>
                                 <li>Find nearby cars in your network with Scholar</li>
                                 <li>Browse real hirers reviews to know why choose Scholar</li>
                                 <li>Rent a car so easy with a tap !</li>
                                 <li>Rent a car so easy with a tap !</li>
                              </ul>
                              <div class="app-download-btn">
                                 <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                       <!-- Windows Store -->
                                       <a href="#" title="Windows Store" class="btn app-download-button">
                                       <span class="app-store-btn">
                                       <i class="fa fa-windows"></i>
                                       <span>
                                       <span>Download From</span>
                                       <span>Windows Store </span>
                                       </span>
                                       </span>
                                       </a>
                                       <!-- /Windows Store -->
                                    </div>
                                    <div class="col-md-6 col-sm-12  col-xs-12">
                                       <!-- Windows Store -->
                                       <a href="#" title="Windows Store" class="btn app-download-button"> <span class="app-store-btn">
                                       <i class="fa fa-apple"></i>
                                       <span>
                                       <span>Download From</span> <span>Apple Store </span> </span>
                                       </span>
                                       </a>
                                       <!-- /Windows Store -->
                                    </div>
                                    <!-- Windows Store -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /row -->
                  </div>
                  <!-- /container -->
               </div>
               <!-- /app-download-section-container -->
            </div>
            <!-- /download-section-wrapper -->
         </div>
         <!-- =-=-=-=-=-=-= App Download Section End =-=-=-=-=-=-= -->     
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         @include('templates.footer')
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button">
         <span class="sell-icons">
         <i class="flaticon-photo"></i>
         </span>
         <h4>Publicar</h4>
      </a>
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
      <div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <h3 class="modal-title" id="lineModalLabel">Email for Price</h3>
               </div>
               <div class="modal-body">
                  <!-- content goes here -->
                  <form>
                     <div class="form-group  col-md-6">
                        <label>Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name"> 
                     </div>
                     <div class="form-group  col-md-6">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter email"> 
                     </div>
                     <div class="form-group  col-md-12">
                        <label>Contact No</label>
                        <input type="text" class="form-control" placeholder="Contact No"> 
                     </div>
                     <div class="form-group  col-md-12">
                        <label>Comments</label>
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                     </div>
                     <div class="col-md-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                     <div class="clearfix"></div>
                     <div class="col-md-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Product Preview Popup -->
      <div class="quick-view-modal modalopen" id="ad-preview" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg ad-modal">
            <button class="close close-btn popup-cls" aria-label="Close" data-dismiss="modal" type="button"> <i class="fa-times fa"></i> </button>
            <div class="modal-content single-product">
               <div class="diblock">
                  <div class="col-lg-7 col-sm-12 col-xs-12">
                     <div class="clearfix"></div>
                     <div class="flexslider single-page-slider">
                        <div class="flex-viewport">
                           <ul class="slides slide-main">
                              <li class=""><img alt="" src="images/single-page/1.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/2.jpg" title=""></li>
                              <li class="flex-active-slide"><img alt="" src="images/single-page/3.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/4.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/5.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/6.jpg" title=""></li>
                           </ul>
                        </div>
                     </div>
                     <div class="flexslider" id="carousels">
                        <div class="flex-viewport">
                           <ul class="slides slide-thumbnail">
                              <li><img alt="" draggable="false" src="images/single-page/1_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/2_thumb.jpg"></li>
                              <li class="flex-active-slide"><img alt="" draggable="false" src="images/single-page/3_thumb.jpg"> </li>
                              <li><img alt="" draggable="false" src="images/single-page/4_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/5_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/6_thumb.jpg"></li>
                              <!-- items mirrored twice, total of 12 -->
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=" col-sm-12 col-lg-5 col-xs-12">
                     <div class="summary entry-summary">
                        <div class="ad-preview-details">
                           <a href="#">
                              <h4>Honda Civic Sports Edition 2017</h4>
                           </a>
                           <div class="overview-price">
                              <span>$36.000</span>
                           </div>
                           <div class="clearfix"></div>
                           <p>Tattooed fashion axe Blue Bottle butcher tilde. Pitchfork leggings meh Odd Future.Drinking vinegar. </p>
                           <ul class="car-info col-md-6 col-sm-6">
                              <li>
                                 <span>Fabrication:</span>
                                 <p>2013/2014</p>
                              </li>
                              <li>
                                 <span>Speed:</span>
                                 <p>160p/h</p>
                              </li>
                              <li>
                                 <span>Mileage:</span>
                                 <p>30.000km - 40.000km</p>
                              </li>
                              <li>
                                 <span>Fuel:</span>
                                 <p>Petrol</p>
                              </li>
                           </ul>
                           <ul class="ad-preview-info col-md-6 col-sm-6">
                              <li>
                                 <span>Color:</span>
                                 <p>Black</p>
                              </li>
                              <li>
                                 <span>Transmition:</span>
                                 <p>Automatic</p>
                              </li>
                              <li>
                                 <span>Dors:</span>
                                 <p>4/5</p>
                              </li>
                              <li>
                                 <span>Engine:</span>
                                 <p>2500cm3</p>
                              </li>
                           </ul>
                           <button class="btn btn-theme btn-block" type="submit">Contact Dealer</button>
                        </div>
                     </div>
                     <!-- .summary -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- / Product Preview Popup -->
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap Core Css  -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Jquery Easing -->
      <script src="js/easing.js"></script>
      <!-- Menu Hover  -->
      <script src="js/forest-megamenu.js"></script>
      <!-- Jquery Appear Plugin -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Numbers Animation   -->
      <script src="js/jquery.countTo.js"></script>
      <!-- Jquery Smooth Scroll  -->
      <script src="js/jquery.smoothscroll.js"></script>
      <!-- Jquery Select Options  -->
      <script src="js/select2.min.js"></script>
      <!-- noUiSlider -->
      <script src="js/nouislider.all.min.js"></script>
      <!-- Carousel Slider  -->
      <script src="js/carousel.min.js"></script>
      <script src="js/slide.js"></script>
      <!-- Image Loaded  -->
      <script src="js/imagesloaded.js"></script>
      <script src="js/isotope.min.js"></script>
      <!-- CheckBoxes  -->
      <script src="js/icheck.min.js"></script>
      <!-- Jquery Migration  -->
      <script src="js/jquery-migrate.min.js"></script>
      <!-- Sticky Bar  -->
      <script src="js/theia-sticky-sidebar.js"></script>
      <!-- Style Switcher -->
      <script src="js/color-switcher.js"></script>
      <!-- Template Core JS -->
      <script src="js/custom.js"></script>
   </body>
</html>

