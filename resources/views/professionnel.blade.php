@extends('layouts.app')

@section('content')
        <!-- END HEADER MOBILE -->
<main>
        <!-- PAGE CONTENT-->
            <!-- BREADCRUMB-->
            <!-- END BREADCRUMB-->
<div id="viewport">
<div id="sidebar">
    <ul class="nav">
      <li>
        <a href="/professionnelle">
          <i class="zmdi zmdi-file-text"></i> Ma fiche professionnelle
        </a>
      </li>
      <li>
        <a href="/MaFicheE">
          <i class="zmdi zmdi-card-travel"></i> Ma fiche d'entreprise
        </a>
      </li>
      <li>
        <a href="/MesPropositions">
          <i class="fas fa-lightbulb"></i> Mes propositions
        </a>
      </li>
      <li>
        <a href="/MesExaminations">
          <i class="zmdi zmdi-check-square"></i> Mes examinations
        </a>
      </li>
    
    </ul>
  </div>
  <!-- Content -->
  <div id="content" class="scroll">
            <!-- WELCOME-->
            <section class="au-breadcrumb2">
                  <div class="container">
                        <div class="row justify-content-left">
                            <div class=" col-lg-9">
                                <h3 class="mb-30"style="color:#fb246a">Ma fiche professionnelle</h3>
                                
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
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Informations personnelles</h6>
                        </div>
                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB">
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
                                    <input type="text" class="form-control" id="id_nom">

                                    <label>Prénom</label>
                                    <input type="text" class="form-control" id="id_prenom"><br>

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
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Expériences</h6>
                       
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                            
                                    
                                    <label>Nom entreprise</label>
                                    <input type="text" class="form-control" id="id_NomE"><br>

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

                                     <label>Date jusqu'à présent</label>
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

                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Diplômes et formations</h6>
                        
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
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
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Compétences</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
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
                <input class="genric-btn primary-border circle" type="submit" value="Valider">
                           <input class="genric-btn primary-border circle"type="reset" value="Annuler">
            </section>
        </div>
        </main>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
         
            <!-- END COPYRIGHT-->

            <!-- END COPYRIGHT-->
 @endsection
<!-- end document-->
