@extends('layouts.app')

@section('content')

                        <!-- Mobile Menu -->
                   
        <!-- Header End -->
        <!-- END HEADER MOBILE -->
<main>
        <!-- PAGE CONTENT-->
            <!-- BREADCRUMB-->
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="au-breadcrumb2">
                  <div class="container">
                        <div class="row justify-content-left">
                            <div class=" col-lg-9">
                                <h3 class="mb-30"style="color:#fb246a">Ma fiche professionnelle</h3>
                                
                            <hr class="line-seprate">
                        </div>
                        <div class="col-md-3">
                           <input class="btn btn-success" type="submit" value="Valider">
                           <input class="btn btn-danger" type="reset" value="Annuler">
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
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Informations personnelles</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB; ">
                                <form>
                                    <div class="row">
                                    <div class="col-md-6" class="vertical-right">
                                    
                                    <div class="genric-btn primary-border circle" text-align="vertical-right">Modifier</div>
                                </div>
                                 <div  class="col-md-6" class="vertical-right">
                                    <label>Choisir une photo</label>
                                    <input type="file"id="idI" accept="image/png, image/jpeg">
                                </div>
                    </div>
                                    <label>Nom</label>
                                    <input type="text" class="form-control" id="id_nom" >

                                    <label>Prénom</label>
                                    <input type="text" class="form-control" id="id_prenom" ><br>

                                    <input type="radio" name="sexe" id="id_sexe" value="Homme">
                                    <label>Homme</label>

                                    <input type="radio" name="sexe" id="id_sexe" value="Femme">
                                    <label>Femme</label><br>

                                    <label >Email</label>
                                    <input type="email" class="form-control" id="id_email" ><br>

                                    <label>N° de téléphone</label>
                                    <input type="tel" id="id_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required ><br>
   
                                    <label>Date de naissance</label>
                                     <input  type="date" value="jj/mm/aaaa" id="example-date-input"><br>


                                    

 
                                </form>
                            </div>
                            <!-- END CHART-->
                        </div>       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35">Expériences</h6>
                       
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB;">
                                <form>
                                    <label>Titre</label>
                                    <input type="text" class="form-control" id="id_TitreE">

                                    <label>Nom entreprise</label>
                                    <input type="text" class="form-control" id="id_NomE"><br>

                                    
   
                                    <label>Date de début</label>
                                    <input type="date" id="id_DateD" ><br>

                                     <label>Date de fin</label>
                                    <input type="date" id="id_DateF" ><br>

                                    

                                     <input type="file"  id="id_fileE"><br>

                                      

                                    <div class="col-md-6" class="vertical-right">
                                    
                                    <div class="genric-btn primary-border circle" text-align="vertical-right">Ajouter</div>
                                </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35">Poste courant</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB;">
                                <form>
                                    <label>Titre</label>
                                    <input type="text" class="form-control" id="id_TitreE"><br>

                                    <label>Nom entreprise</label>
                                    <input type="text" class="form-control" id="id_NomE"><br>

                                    <label>Date de début</label>
                                    <input type="date" id="id_DateD" ><br>

                                     <label>Date de fin</label>
                                    <input type="date" id="id_DateF" ><br>

                                     <input type="file"  id="id_fileE"><br>

                                      

                                    <div class="col-md-6" class="vertical-right">
                                    
                                    <div class="genric-btn primary-border circle" text-align="vertical-right">Ajouter</div>
                                </div>


                             

 
                                </form>
                                
                            </div>
                            <!-- END CHART-->
                        </div>
                         
                         
                            <!-- END CHART-->
                        </div> 
                       <div class="row">
                        <div class="col-md-6">

                            <h6 class="title-5 m-b-35">Diplômes et formations</h6>
                        
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB;">
                                <form>
                                    <label>Titre</label>
                                    <input type="text" class="form-control" id="id_TitreE">

                                    <label>Nom établissement</label>
                                    <input type="text" class="form-control" id="id_NomE"><br>

                                    
   
                                    <label>Date de début</label>
                                    <input type="date" id="id_DateD" ><br>

                                     <label>Date de fin</label>
                                    <input type="date" id="id_DateF" ><br>
                                    <label>

                                   <input type="file"  id="id_file"><br>
                                  
                                <div class="col-md-6" class="vertical-right">
                                    
                                     <div class="genric-btn primary-border circle" text-align="vertical-right">Ajouter</div>
                                </div>
                                    
                                    

 
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                           
                            <h6 class="title-5 m-b-35">Compétences</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB;">
                                <form>
                                    <label>Titre</label>
                                    <input type="text" class="form-control" id="id_TitreE"><br>
                                    

                             
                                    <div class="col-md-6" class="vertical-right">
                                    
                                      <div class="genric-btn primary-border circle" text-align="vertical-right">Ajouter</div>
                                </div>

 
                                </form>
                                
                            </div>
                            
                            <!-- END CHART-->
                        </div>  
                             

                    </div>
                     <div class="row">     
                        <div class="col-md-6">
                          <h6 class="title-5 m-b-35">Réseaux sociaux</h6>
                           <div class="statistic-chart-1"style="background-color:#A6A4BB;">
                                <form>
                                    <img src="assets/img/icon/instag.png"  />
                                    <label>Instagram</label>
                                    <input type="url" class="form-control" id="id_link"><br>
                                    
                                    <img src="assets/img/icon/lin.png"  />
                                    <label>Linkedin</label>
                                    <input type="url" class="form-control" id="id_insta"><br>

                                    <img src="assets/img/icon/por.png"  />
                                    <label>Portfolio</label>
                                    <input type="url" class="form-control" id="id_port"><br>
                                    
                                    

 
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </section>
        </main>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
         
            <!-- END COPYRIGHT-->
    
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
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
        

</body>

</html>
<!-- end document-->
@endsection