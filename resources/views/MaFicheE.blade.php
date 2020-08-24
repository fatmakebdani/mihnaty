@extends('layouts.app')

@section('content')
        <!-- END HEADER MOBILE -->
        <!-- END HEADER MOBILE -->
        <main>
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
   <section class="au-breadcrumb2">
                  <div class="container">
                        <div class="row justify-content-left">
                            <div class=" col-lg-9">
                                <h3 class="mb-30"style="color:#fb246a">Ma fiche d'entreprise</h3>
                                
                            <hr class="line-seprate">
                        </div>
                       
                    </div>
                </div>
            </section>            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="title-5 m-b-35"style="color:#242b5e;">Renseignements généraux</h6>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
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
                                    <input type="text" class="form-control" id="id_nom"><br>
                                    <label>Raison sociale</label>
                                    <input type="text" class="form-control" id="id_raison"><br>

                                    
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" id="id_adresse"><br>

                                    <label>Code postal</label>
                                    <input type="text" class="form-control" id="id_postal"><br>

                                    <label >Site web</label>
                                    <input type="url" class="form-control" id="id_url" ><br>

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
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
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

                            <h6 class="title-5 m-b-35"style="color:#242b5e;">Représentant </h6>
                        
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
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
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
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
                    <div class="col-lg-offset-8 col-lg-4">
                           <input class="genric-btn primary-border circle" type="submit" value="Valider">
                           <input class="genric-btn primary-border circle"type="reset" value="Annuler">
                        </div>
                </div>
            </section>
        </div>
</div>

        <!-- PAGE CONTENT-->
            <!-- BREADCRUMB-->
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
          
        </main>
            <!-- COPYRIGHT-->
        
    <!-- Jquery JS-->
  @endsection
<!-- end document-->
