@extends('layouts.app')

@section('content')

<main>
     
        <!-- PAGE CONTENT-->
            <!-- BREADCRUMB-->
        
            <section class="au-breadcrumb2">
            <div class="container ">
                      <h2 class="mb-30"style="color:#fb246a">Mes propositions</h2>
                      <hr class="line-seprate">
                       <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <span>6 offres proposées</span>
                                            <!-- Select job items start -->
                                                 <div class="items-link items-link2 f-right">
                                                     <a aria-hidden="true" data-toggle="modal" data-target="#myModal1"> Nouvelle offre</a>
<div id="myModal1" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">Nouvelle offre</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
     <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
              
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form method="post">
              
              <div class="form-group">
                <label  for="Titre" style="color: #242b5e; font-weight: bolder;">Titre</label>
                <input name="titre" type="text" class="form-control" id="Titre">
              </div>
              <div class="form-group">
                <label for="Ville" style="color: #242b5e; font-weight: bolder;">Emplacement</label>
                <div class="wrapper">
               <select name="ville" size="1" class="form-control" >wilaya
                                      <option value="1">Adrar</option><option value="2">Chlef</option><option value="3">Laghouat</option><option value="4">Oum El-Bouaghi</option><option value="5">Batna</option><option value="6">Bejaia</option><option value="7">Biskra</option><option value="8">Bechar</option><option value="9">Blida</option><option value="10">Bouira</option><option value="11">Tamanrassat</option><option value="12">Tebessa</option><option value="13">Tlemcen</option><option value="14">Tiaret</option><option value="15">Tizi-Ouzou</option><option value="16">Alger</option><option value="17">Djelfa</option><option value="18">Jijel</option><option value="19">Setif</option><option value="20">Saida</option><option value="21">Skikda</option><option value="22">Sidi-Bel-Abbes</option><option value="23">Annaba</option><option value="24">Guelma</option><option value="25">Constantine</option><option value="26">Médea</option><option value="27">Mostaganem</option><option value="28">M'sila</option><option value="29">Mascara</option><option value="30">Ouargla</option><option value="31">Oran</option><option value="32">El-Bayadh</option><option value="33">Illizi</option><option value="34">Bordj Bou-Arreridj</option><option value="35">Boumerdes</option><option value="36">El-Taref</option><option value="37">Tindouf</option><option value="38">Tissimsilt</option><option value="39">El-Oued</option><option value="40">khenchela</option><option value="41">Souk Ahras</option><option value="42">Tipaza</option><option value="43">Mila</option><option value="44">Ain Defla</option><option value="45">Naama</option><option value="46">Ain Timouchent</option><option value="47">Ghardaia</option><option value="48">Relizane</option>
                                    </select>
              </div>
          </div>

              <div class="form-group">
        
              </div>

              
              <div class="form-group">
                <label for="text-aria" style="color: #242b5e; font-weight: bolder;">Description</label>
                <textarea name="description" id="textarea" class="form-control" rows="4" placeholder="decrivez votre offre!"></textarea>
                </div>
              <div class="form-group">
                <label style="color: #242b5e; font-weight: bolder;">Sexe</label><br>
                                    <input  type="radio" name="sexe" id="id_sexe" value="Homme">
                                    <label>Homme</label>
                                    <input type="radio" name="sexe" id="id_sexe" value="Femme">
                                    <label>Femme</label>
                                    <input type="radio" name="sexe" id="id_sexe" value="Quelconque">
                                    <label>Quelconque</label>


              </div>
             
              <div class="form-group">
                <label style="color: #242b5e; font-weight: bolder;">Type de contrat</label><br>
                  
                                    <input type="radio" name="contrat" id="id_contrat" value="CDD">
                                    <label>CDD</label>
                                     <input type="radio" name="contrat" id="id_contrat" value="CDI">
                                    <label>CDI</label>

              </div>
               <div class="form-group">
                   <label style="color: #242b5e; font-weight: bolder;">Dernier délais</label>
                                    <input name="dernier_delais" type="date" id="id_dernier_delais" ><br>F

              </div>
                <div class="form-group">
                   <label style="color: #242b5e; font-weight: bolder;">Date de notification</label>
                                    <input name="date_notif" type="date" id="id_date_notif" ><br>

              </div>
               <div class="form-group">
                   <label style="color: #242b5e; font-weight: bolder;">Date de prise de fonction</label>
                                    <input name="date_fonction" type="date" id="id_date_fonction" ><br>

              </div>
</form>

         
        </div>
    
      </div>
    </section>

</div>
 <div class="modal-footer">
      <div class="items-link items-link2 f-right">
                                        <a href="#">Poster</a>
                                    </div>
                                      <div class="items-link items-link2 f-right" data-dismiss="modal">
                                        <a href="#">Annuler</a>
                                    </div>
      </div>
                                        
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
          
         
                        <div class="row justify-content-center">
                             <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
        
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>Digital Marketer</h4>
                                            </a>
                                            <ul>
                                                <li>Creative Agency</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                <li>$3500 - $4000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="job_details.html">Full Time</a>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>Digital Marketer</h4>
                                            </a>
                                            <ul>
                                                <li>Creative Agency</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                <li>$3500 - $4000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="job_details.html">Full Time</a>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                      
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>Digital Marketer</h4>
                                            </a>
                                            <ul>
                                                <li>Creative Agency</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                <li>$3500 - $4000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="job_details.html">Full Time</a>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>Digital Marketer</h4>
                                            </a>
                                            <ul>
                                                <li>Creative Agency</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                <li>$3500 - $4000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="job_details.html">Full Time</a>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>Digital Marketer</h4>
                                            </a>
                                            <ul>
                                                <li>Creative Agency</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                <li>$3500 - $4000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="job_details.html">Full Time</a>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>Digital Marketer</h4>
                                            </a>
                                            <ul>
                                                <li>Creative Agency</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                <li>$3500 - $4000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="job_details.html">Full Time</a>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                     
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>Digital Marketer</h4>
                                            </a>
                                            <ul>
                                                <li>Creative Agency</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                <li>$3500 - $4000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="job_details.html">Full Time</a>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </section>
                                    
                                </div>
                            </div>
                           

            <!-- BREADCRUMB-->
            
        </main>
            
            <!-- WELCOME-->
           
            <!-- END WELCOME-->

            <!-- STATISTIC-->
           
            <!-- END DATA TABLE-->

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
            <!-- END COPYRIGHT-->
              @endsection