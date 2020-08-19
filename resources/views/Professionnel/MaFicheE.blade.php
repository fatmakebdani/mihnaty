<!DOCTYPE html><!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job board HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="css/app.css">
            <link href="/assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <li href="assets/css/table.css"></li>
     <!-- Bootstrap CSS-->
   

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/css/theme.css" rel="stylesheet" media="all">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-1" align="left">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="/"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-10 col-md-9" align="rights">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                             <li><a href="/">Acceuil</a></li>
                                            <li><a href="jobl">Les offres</a></li>
                                            <li><a href="e">Les fiches d'entreprises</a></li>
                                            <li><a href="apropos">Apropos</a></li>
                                            <li><a href="contactt">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="fa fa-bell"style="color:#1f2b7b" aria-hidden="true"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item has-noti js-item-menu">
                             <i class="fa fa-envelope"style="color:#1f2b7b" aria-hidden="true"></i>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="/assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" style="color:#1f2b7b " href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                   
                    <div class="col-lg-12" style="background-color: #28395a;">
                         <div class="header__navbar">
                        <ul class="list-unstyled ">
                            <li>
                                <a href="/MaFichePP">
                                    <i class="fa fa-file-powerpoint-o"></i>
                                    <span class="bot-line"></span>Ma fiche professionnelle</a>
                            </li>
                            <li>
                                <a href="MaFicheE">
                                    <i class="fa fa-building"></i>
                                    <span class="bot-line"></span>Ma fiche d'entreprise</a>
                            </li>
                           
                            
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Mes offres</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="login.html">Mes examinations</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Mes propositions</a>
                                    </li>
                                </ul>
                            </li>
                         
                        </ul>
                    </div>
            </div>
       
        <!-- Header End -->
    </header>
        <!-- END HEADER MOBILE -->
<main>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
            <!-- BREADCRUMB-->
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row justify-content-left">
                        <div class="col-md-8">
                              <h2 class="mb-30"style="color:#fb246a">Ma fiche d'entreprise</h2>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Renseignements généraux</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#F1F0EF ">
                                <form>
                                    <div class="row">
                                    <div class="col-md-6" class="vertical-right">
                                    
                                    <div class="genric-btn primary-border circle" text-align="vertical-right">Modifier</div>
                                </div>
                                 <div  class="col-md-6" class="vertical-right">
                                    <label>Choisir une photo</label>
                                    <input type="file"id="idI" accept="image/png, image/jpeg">
                                    
                                   
                           <img src="assets/images/icon/reda.JPG" width="100" height="70" />
                                </div>
</div>
                                    <label>Raison sociale</label>
                                    <input type="text" class="form-control" id="id_raison"><br>

                                    
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" id="id_adresse"><br>

                                    <label>Code postal</label>
                                    <input type="text" class="form-control" id="id_postal"><br>

                                    <label >Email</label>
                                    <input type="email" class="form-control" id="id_email" ><br>

                                    <label>N° de téléphone</label>
                                    <input type="tel" id="id_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required ><br>
   
                                    <label>Date de création</label>
                                    <input type="date" id="id_DateN" ><br>




                                    

 
                                </form>
                            </div>
                            <!-- END CHART-->
                        </div>       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Nature d'activité</h6>
                       
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#F1F0EF ">
                                <form>
                                    <label>Activité principale:</label>
                                    <input type="text" class="form-control" id="id_TitreE">


                                    <label>Activité(s) secondaire(s)</label>
                                    <textarea id="id_sec" ></textarea>
                                    
   
                                    

                                    <div class="col-md-6" class="vertical-right">
                                    
                                    <div class="genric-btn primary-border circle" text-align="vertical-right">Ajouter</div>
                                </div>

                                </form>
                            </div>
                        </div>
                         
                         <div class="col-md-6">

                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Représentant juridique</h6>
                        
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#F1F0EF ">
                                <form>
                                    <label>Nom</label>
                                    <input type="text" class="form-control" id="id_nomR">

                                    <label>Prénom</label>
                                    <input type="text" class="form-control" id="id_prenomR"><br>

                                    
   
                                    <label>Carte d’identité nationale (ou pièce d’identité) n°</label>
                                    <input type="number" id="id_carte" ><br>

                                    
                                  
                                <div class="col-md-6" class="vertical-right">
                                    
                                    <div class="genric-btn primary-border circle" text-align="vertical-right">Ajouter</div>
                                </div>
                                    
                                    

 
                                </form>
                            </div>
                        </div>
                            <!-- END CHART-->
                        </div> 
                      
                </div>
               
            </section>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            
            <!-- END DATA TABLE-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Membres de l'entreprise</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#F1F0EF ">
                                <form>
                                    <label>Titre</label>
                                    <input type="text" class="form-control" id="id_TitreE"><br>

                             
                                    <div class="col-md-6" class="vertical-right">
                                    
                                    <div class="genric-btn primary-border circle" text-align="vertical-right">Ajouter</div>
                                </div>

 
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
            <!-- COPYRIGHT-->
           <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :Your address goes
                                        here, your demo address.</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <!-- Footer Bottom Tittle -->
                        <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Jquery JS-->
  <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="/assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/slick.min.js"></script>
        <script src="/assets/js/price_rangs.js"></script>
        
        <!-- One Page, Animated-HeadLin -->
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/animated.headline.js"></script>
        <script src="/assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="/assets/js/jquery.scrollUp.min.js"></script>
        <script src="/assets/js/jquery.nice-select.min.js"></script>
        <script src="/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="/assets/js/contact.js"></script>
        <script src="/assets/js/jquery.form.js"></script>
        <script src="/assets/js/jquery.validate.min.js"></script>
        <script src="/assets/js/mail-script.js"></script>
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
          <script src="/assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assets/vendor/slick/slick.min.js">
    </script>
    <script src="/assets/vendor/wow/wow.min.js"></script>
    <script src="/assets/vendor/animsition/animsition.min.js"></script>
    <script src="/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assets/js/main.js"></script>


</body>

</html>
<!-- end document-->
