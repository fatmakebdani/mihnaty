@extends('layouts.app')

@section('content')
    <main>

        <!-- slider Area Start-->
       <section>
    <div id="carouselExampleFade" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"data-interval="200">
                <img src="assets/img/hero/suit.jpg" class="d-block w-100" alt="...">
                
                        <div class="carousel-caption">
                            <h1>Votre logiciel </h1>
                            <h2>de recrutement</h2>
                        </div>
                       
                
            </div>
            <div class="carousel-item">
                <img src="assets/img/hero/Construction.jpg" class="d-block w-100" alt="...">

                        <div class="carousel-caption">
                            <h1>La chance de trouver</h1>
                            <h2>l'emploi adéquat</h2>
                        </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/hero/femme.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                            <h1>Un clic</h1>
                            <h2>et vous serez recruter</h2>
                        </div>
            </div>
             <div class="carousel-item">
                <img src="assets/img/hero/meet.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                            <h1>Trouvez rapidement</h1>
                            <h2>les profils recherchés</h2>
                        </div>
            </div>
            <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
           
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          
        </a>
    </div>
</section>
<section>
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" placeholder="titre offre ,mot clé">
                                    </div>
                                                                                  <div class="wrapper">
               <select style="height:4.4em;" size="1" class="form-control">
                                      <option value="1">Adrar</option><option value="2">Chlef</option><option value="3">Laghouat</option><option value="4">Oum El-Bouaghi</option><option value="5">Batna</option><option value="6">Bejaia</option><option value="7">Biskra</option><option value="8">Bechar</option><option value="9">Blida</option><option value="10">Bouira</option><option value="11">Tamanrassat</option><option value="12">Tebessa</option><option value="13">Tlemcen</option><option value="14">Tiaret</option><option value="15">Tizi-Ouzou</option><option value="16">Alger</option><option value="17">Djelfa</option><option value="18">Jijel</option><option value="19">Setif</option><option value="20">Saida</option><option value="21">Skikda</option><option value="22">Sidi-Bel-Abbes</option><option value="23">Annaba</option><option value="24">Guelma</option><option value="25">Constantine</option><option value="26">Médea</option><option value="27">Mostaganem</option><option value="28">M'sila</option><option value="29">Mascara</option><option value="30">Ouargla</option><option value="31">Oran</option><option value="32">El-Bayadh</option><option value="33">Illizi</option><option value="34">Bordj Bou-Arreridj</option><option value="35">Boumerdes</option><option value="36">El-Taref</option><option value="37">Tindouf</option><option value="38">Tissimsilt</option><option value="39">El-Oued</option><option value="40">khenchela</option><option value="41">Souk Ahras</option><option value="42">Tipaza</option><option value="43">Mila</option><option value="44">Ain Defla</option><option value="45">Naama</option><option value="46">Ain Timouchent</option><option value="47">Ghardaia</option><option value="48">Relizane</option>
                                    </select>
              </div>
                                    <div class="search-form">
                                        <a href="#">Chercher</a>
                                    </div>  
                                </form> 
                            </section>

        <!-- slider Area End-->
        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2> Top Categories </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Design et création</a></h5>
                                <span>(653)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Informatique,Systèmes d'information,Internet</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Ventes et Marketing</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Application mobile</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Construction</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Information Technology</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Immobilier</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Rédacteur de contenu</a></h5>
                                <span>(658)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More Btn -->
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="job_listing.html" class="border-btn2">Toutes les catégories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
        
                <!-- Section Tittle -->
                
        <!-- Online CV Area End-->
        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Fiches d'entreprise</span>
                            <h2>Nos fidèles entreprises</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <h3 style="color:#fb246a">60 offres</h3s>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="assets/img/icon/job-list2.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                             <div class="items-link f-right">
                                <h3 style="color:#fb246a">60 offres</h3s>
                            </div>
                        </div>
                         <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <h3 style="color:#fb246a">60 offres</h3s>
                            </div>
                        </div>
                         <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="assets/img/icon/job-list4.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <h3 style="color:#fb246a">60 offres</h3s>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="job_listing.html" class="border-btn2">Toutes les entreprises</a>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Notre processus</span>
                            <h2> Comment ça marche</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Chercher un emploi</h5>
                               <p>Grâce à Mihnaty vous pouvez chercher un emploi que ça soit par secteur ou par wilaya, vous trouverez votre emploi idéal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Postuler pour un emploi</h5>
                               <p>En un seul clique postuler pour l'offre d'emploi qui vous convient et votre CV sera  traité le plutôt possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. Sélectionner un candidat</h5>
                               <p>Aprés la cloture de l'adhésion à une offre,le recruteur passe à l'évaluation de chaque candidat tout seul ou à l'aide d'un jury pour à la fin arriver à un seul candidat au quel le poste sera attribué.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                                <h5>4. Gestion des professionnels</h5>
                               <p>Un professionnel est un acteur qui possède un poste dans une entreprise. Il a la possibilité de créer une fiche pour son etreprise, et c'est lui qui propose les offres d'emploi. Il peut etre impliqué dans une offre comme membre de jury lors d'une évaluation collaborative.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- How  Apply Process End-->
        <!-- Testimonial Start -->
         

        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle black-text text-center">
                            <span>Témoignages</span>
                            <h2> Derniers avis</h2>
                        </div>
                    </div>
        </div>
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
         <!-- Support Company Start-->
          <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            
                            <h2> Questions fréquentes</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                
                            </div>
                            <div class="process-cap">
                               <h5>1. Comment s'inscrire ?</h5>
                               <p>Il faut s'inscrire selon votre besoin, soit en tant que candidat pour pouvoir chercher et postuler pour un emploi, ou en tant que professionnel pour pouvoir recruter pour votre entreprise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                               
                            </div>
                            <div class="process-cap">
                               <h5>2. Comment postuler pour une offre ?</h5>
                               <p>Un fois connecté en tant que candidat vous devez obligatoirement remplir votre fiche professionnelle et ensuite chercher une offre d'emploi et postuler. Votre CV sera envoyé automatiquement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                               
                            </div>
                            <div class="process-cap">
                               <h5>3. Le recrutement collaboratif, ça marche comment ?</h5>
                               <p>En tant que professionnel, une fois avoir créer votre offre d'emploi, vous pouvez impliquer des membres de votre entreprise pour en faire un jury qui va donc évaluer les candidats potentiels et vous envoyer les résultats.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                
                            </div>
                            <div class="process-cap">
                               <h5>4. La fiche d'entreprise qu'est ce que c'est ?</h5>
                               <p>Une fiche d'entreprise concerne le professionnel et nos pas le candidat, elle contient toute information importante sur l'entreprise à la quelle il appartient.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- Support Company End-->
        <!-- Blog Area Start -->
        
        <!-- Blog Area End -->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>A propos</h4>
                                 <div class="footer-pera">
                                     <p>est le site internet qui englobe tout le processus de recutement.Lancé en 2020, notre équipe a pour objectif de faciliter la tâche au recruteur et de donner la chance au candidat.</p>
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
                                    <p>Adresse: Votre adresse va ici.</p>
                                    </li>
                                    <li><a href="#">Téléphone : 07 45 25 41 02</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Ecrivez nous.</p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email '">
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
                        <a href="/"><img src="assets/img/logo/MihnatyFatma.png"height="50" width="120" alt=""></a>
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
                       
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  
    @endsection