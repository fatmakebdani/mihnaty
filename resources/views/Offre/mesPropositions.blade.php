@extends('layouts.app')

@section('content')

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
                <a href="#">
                <i class="zmdi zmdi-card-travel"></i> Ma fiche d'entreprise
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-lightbulb"></i> Mes propositions
                </a>
            </li>
            <li>
                <a href="#">
                <i class="zmdi zmdi-check-square"></i> Mes examinations
                </a>
            </li>
             <li>
         <a href="/professionnel/invitations">
          <i class="fas fa-user-plus"></i> Mes invitations
          </a>
        </li>

            </ul>
        </div>
    <!-- Content -->
    <div id="content" class="scroll">
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
            {!! Form::open(['action' => 'OffreController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="row justify-content-center">
                <label  for="Titre" style="color: #242b5e; font-weight: bolder;">Titre</label>
                <input name="titre" type="text" class="form-control" id="Titre">
            </div><br>
            <div class="row justify-content-center">
                <label  for="Ville" style="color: #242b5e; font-weight: bolder;">Emplacement</label><br>
                <div class="wrapper">
               <select name="ville" size="1" class="form-control" >wilaya
                                      <option value="1">Adrar</option><option value="2">Chlef</option><option value="3">Laghouat</option><option value="4">Oum El-Bouaghi</option><option value="5">Batna</option><option value="6">Bejaia</option><option value="7">Biskra</option><option value="8">Bechar</option><option value="9">Blida</option><option value="10">Bouira</option><option value="11">Tamanrassat</option><option value="12">Tebessa</option><option value="13">Tlemcen</option><option value="14">Tiaret</option><option value="15">Tizi-Ouzou</option><option value="16">Alger</option><option value="17">Djelfa</option><option value="18">Jijel</option><option value="19">Setif</option><option value="20">Saida</option><option value="21">Skikda</option><option value="22">Sidi-Bel-Abbes</option><option value="23">Annaba</option><option value="24">Guelma</option><option value="25">Constantine</option><option value="26">Médea</option><option value="27">Mostaganem</option><option value="28">M'sila</option><option value="29">Mascara</option><option value="30">Ouargla</option><option value="31">Oran</option><option value="32">El-Bayadh</option><option value="33">Illizi</option><option value="34">Bordj Bou-Arreridj</option><option value="35">Boumerdes</option><option value="36">El-Taref</option><option value="37">Tindouf</option><option value="38">Tissimsilt</option><option value="39">El-Oued</option><option value="40">khenchela</option><option value="41">Souk Ahras</option><option value="42">Tipaza</option><option value="43">Mila</option><option value="44">Ain Defla</option><option value="45">Naama</option><option value="46">Ain Timouchent</option><option value="47">Ghardaia</option><option value="48">Relizane</option>
                                    </select>
              </div>
          </div><br>
           <div class="row justify-content-center">
                <label  for="cat" style="color: #242b5e; font-weight: bolder;">Catégorie</label><br>
                <div class="wrapper">
               <select name="cat" size="1" class="form-control"  data-live-search="true">
                                     <option value="1">Commercial et marketing</option>
                                        <option value="2">Commerce et vente</option>
                                        <option value="3">Industrie et production</option>
                                        <option value="4">Education et formations</option>
                                        <option value="5">Bureatique et secretariat</option>
                                        <option value="6">Beauté et Esthétique</option>
                                        <option value="7">Tourisme et Gastronomie</option>
                                        <option value="8">Nettoyage et Hygiéne</option>
                                        <option value="9">Génie logiciel</option>
                                        <option value="10">développement web</option>
                                        <option value="11">développement mobile</option>
                                        <option value="12">Programmation</option>
                                        <option value="13">Base de données</option>
                                        <option value="14">Cryptographie</option>
                                        <option value="15">Photographie</option>
                                        <option value="16">Analyse des donnés</option>
                                        <option value="17">Réseau</option>
                                        <option value="18">Développement jeux vidéo</option>
                                        <option value="19">Systeme d'informations</option>
                                        <option value="20">Securité</option>
                                        <option value="21">Comptabilité et Audit</option>
                                        <option value="22">Couture et Confection</option>
                                        <option value="23">Graphisme et Communication</option>
                                        <option value="24">Administration et Management</option>
                                        <option value="25">Mécanique Auto</option>
                                        <option value="26">Transport et Chauffeurs</option>
                                        <option value="27">Agents polyvalents</option>
                                        <option value="28">Eléctronique et Téchnique</option>
                                        <option value="29">Artisanat</option>
                                        <option value="30">Immobilier</option>
                                        <option value="31">Achat et Logistique</option>
                                        <option value="32">Environnement</option>
                                        <option value="33">Journalisme et Presse</option>
                                        <option value="34">Recherche</option>
                                        <option value="35">Juridique</option>
                                        <option value="36">Carburants et Mines</option>
                                        <option value="37">Construction et Travaux</option>
                                        <option value="38">Medecine et Santé</option>
                                        <option value="39">Télecom</option>
                                        <option value="40">Banque,Assurances</option>
                                        <option value="41">Autre</option>
                                    </select>
              </div>
          </div><br>
              
              <div class="row justify-content-center">
                <label for="text-aria" style="color: #242b5e; font-weight: bolder;">Description</label>
                <textarea name="description" id="textarea" class="form-control" rows="4" placeholder="decrivez votre offre!"></textarea><br>
                </div><br>
              <div class="row justify-content-center">
                                <label style="color: #242b5e; font-weight: bolder;">Sexe</label><br>

                <input type="radio" name="sexe" id="id_sexe" value="H">
                                <label>Homme</label>

                                <input type="radio" name="sexe" id="id_sexe" value="F">
                                <label>Femme</label>
                                <input type="radio" name="sexe" id='id_sexe' value="Q">
                                <label>Quelconque</label><br>



              </div><br>
             
              <div class="row justify-content-center">
                <label style="color: #242b5e; font-weight: bolder;">Type de contrat</label><br>
                  
                                      <input type="radio" name="contrat" id="id_contrat" value="CDI">
                                <label>CDI</label>

                                <input type="radio" name="contrat" id="id_contrat" value="CDD">
                                <label>CDD</label><br>

              </div>
              <div class="row justify-content-center">
                <label for="salaire" style="color: #242b5e;font-weight: bolder;">Salaire</label>
                <input type="text" class="form-control" name="salaire">
                
              </div>
               <div class="row justify-content-center">
                   <label style="color: #242b5e; font-weight: bolder;">Dernier délais</label>
                                    <input name="dernier_delais" type="date" id="id_dernier_delais" ><br>

              </div>
                <div class="row justify-content-center">
                   <label style="color: #242b5e; font-weight: bolder;">Date de notification</label>
                                    <input name="date_notif" type="date" id="id_date_notif" ><br>

              </div>
               <div class="row justify-content-center">
                   <label style="color: #242b5e; font-weight: bolder;">Date de prise de fonction</label>
                                    <input name="date_fonction" type="date" id="id_date_fonction" ><br>

              </div>

  

         
        
    
      </div>
    </section>

</div>
 <div class="modal-footer">
      
                            {{Form::submit('Enregistrer', ['class'=>'genric-btn primary-border circle'])}}
                    
                {!! Form::close() !!}

         
        
                            
                                      <div class="genric-btn primary-border circle" data-dismiss="modal">
                                        Annuler
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
                                                     <a aria-hidden="true" data-toggle="modal" data-target="#myModal3"> Voir détail</a>
<div id="myModal3" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">offre</div>
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
          </div>                 

            <!-- BREADCRUMB-->
            
        </main>
            
            <!-- WELCOME-->
           
            <!-- END WELCOME-->

            <!-- STATISTIC-->
           
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
          
            <!-- END COPYRIGHT-->
              @endsection