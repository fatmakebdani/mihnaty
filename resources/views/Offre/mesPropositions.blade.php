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
                <a href="/MesExaminations">
                <i class="zmdi zmdi-check-square"></i> Mes examinations
                </a>
            </li>
            

            </ul>
        </div>
    <!-- Content -->
    <div id="content" class="scroll">
        <!-- PAGE CONTENT-->
            <!-- BREADCRUMB-->
        
            <section class="au-breadcrumb2">
            <div class="container" >
              <div class="genric-btn primary-border circle">
                                                     <a aria-hidden="true" data-toggle="modal" data-target="#myModal1"> Nouvelle offre</a>
                                                   </div>
                      <h2 class="mb-30"style="color:#fb246a">Mes offres acceptées</h2>

                      <hr class="line-seprate">
                       <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            
                                            <!-- Select job items start -->
                                                 
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
                                      <option value="Adrar">Adrar</option><option value="Chlef">Chlef</option><option value="Laghouat">Laghouat</option><option value="Oum El-Bouaghi">Oum El-Bouaghi</option><option value="Batna">Batna</option><option value="Bejaia">Bejaia</option><option value="Biskra">Biskra</option><option value="Bechar">Bechar</option><option value="Blida">Blida</option><option value="Bouira">Bouira</option><option value="Tamanrassat">Tamanrassat</option><option value="Tebessa">Tebessa</option><option value="Tlemcen">Tlemcen</option><option value="Tiaret">Tiaret</option><option value="Tizi-Ouzou">Tizi-Ouzou</option><option value="Alger">Alger</option><option value="Djelfa">Djelfa</option><option value="Jijel">Jijel</option><option value="Setif">Setif</option><option value="Saida">Saida</option><option value="Skikda">Skikda</option><option value="Sidi-Bel-Abbes">Sidi-Bel-Abbes</option><option value="Annaba">Annaba</option><option value="Guelma">Guelma</option><option value="Constantine">Constantine</option><option value="Médea">Médea</option><option value="Mostaganem">Mostaganem</option><option value="Msila">M'sila</option><option value="Mascara">Mascara</option><option value="Ouargla">Ouargla</option><option value="Oran">Oran</option><option value="El-Bayadh">El-Bayadh</option><option value="Illizi">Illizi</option><option value="Bordj Bou-Arreridj">Bordj Bou-Arreridj</option><option value="Boumerdes">Boumerdes</option><option value="El-Taref">El-Taref</option><option value="Tindouf">Tindouf</option><option value="Tissimsilt">Tissimsilt</option><option value="El-Oued">El-Oued</option><option value="khenchela">khenchela</option><option value="Souk Ahras">Souk Ahras</option><option value="Tipaza">Tipaza</option><option value="Mila">Mila</option><option value="Ain Defla">Ain Defla</option><option value="Naama">Naama</option><option value="Ain Timouchent">Ain Timouchent</option><option value="Ghardaia">Ghardaia</option><option value="Relizane">Relizane</option>
                                    </select>
              </div>
          </div><br>
           <div class="row justify-content-center">
                <label  for="cat" style="color: #242b5e; font-weight: bolder;">Catégorie</label><br>
                <div class="wrapper">
               <select name="cat" size="1" class="form-control"  data-live-search="true">
                                     <option value="Commercial et marketing">Commercial et marketing</option>
                                        <option value="Commerce et vente">Commerce et vente</option>
                                        <option value="Industrie et production">Industrie et production</option>
                                        <option value="Education et formations">Education et formations</option>
                                        <option value="Bureatique et secretariat">Bureatique et secretariat</option>
                                        <option value="Beauté et Esthétique">Beauté et Esthétique</option>
                                        <option value="Tourisme et Gastronomie">Tourisme et Gastronomie</option>
                                        <option value="Nettoyage et Hygiéne">Nettoyage et Hygiéne</option>
                                        <option value="Génie logiciel">Génie logiciel</option>
                                        <option value="Développement web">Développement web</option>
                                        <option value="Développement mobile">Développement mobile</option>
                                        <option value="Programmation">Programmation</option>
                                        <option value="Base de données">Base de données</option>
                                        <option value="Cryptographie">Cryptographie</option>
                                        <option value="Photographie">Photographie</option>
                                        <option value="Analyse des données">Analyse des données</option>
                                        <option value="Réseau">Réseau</option>
                                        <option value="Développement jeux vidéo">Développement jeux vidéo</option>
                                        <option value="Systeme d'informations">Systeme d'informations</option>
                                        <option value="Securité">Securité</option>
                                        <option value="Comptabilité et Audit">Comptabilité et Audit</option>
                                        <option value="Couture et Confection">Couture et Confection</option>
                                        <option value="Graphisme et Communication">Graphisme et Communication</option>
                                        <option value="Administration et Management">Administration et Management</option>
                                        <option value="Mécanique Auto">Mécanique Auto</option>
                                        <option value="Transport et Chauffeurs">Transport et Chauffeurs</option>
                                        <option value="Agents polyvalents">Agents polyvalents</option>
                                        <option value="Eléctronique et Téchnique">Eléctronique et Téchnique</option>
                                        <option value="Artisanat">Artisanat</option>
                                        <option value="Immobilier">Immobilier</option>
                                        <option value="Achat et Logistique">Achat et Logistique</option>
                                        <option value="Environnement">Environnement</option>
                                        <option value="Journalisme et Presse">Journalisme et Presse</option>
                                        <option value="Recherche">Recherche</option>
                                        <option value="Juridique">Juridique</option>
                                        <option value="Carburants et Mines">Carburants et Mines</option>
                                        <option value="Construction et Travaux">Construction et Travaux</option>
                                        <option value="Medecine et Santé">Medecine et Santé</option>
                                        <option value="Télecom">Télecom</option>
                                        <option value="Banque,Assurances">Banque,Assurances</option>
                                        <option value="Autre">Autre</option>
                                    </select>
              </div>
          </div><br>
              
              <div class="row justify-content-center">
                <label for="text-aria" style="color: #242b5e; font-weight: bolder;">Description</label>
                <textarea name="description" id="textarea" class="form-control" rows="4" placeholder="decrivez votre offre!"></textarea><br>
                </div><br>
              <div class="row justify-content-center">
                                <label style="color: #242b5e; font-weight: bolder;">Sexe</label><br>

                <input type="radio" name="sexe" id="id_sexe" value="Homme">
                                <label>Homme</label>

                                <input type="radio" name="sexe" id="id_sexe" value="Femme">
                                <label>Femme</label>
                                <input type="radio" name="sexe" id='id_sexe' value="Quelconque">
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
                   <label style="color: #242b5e; font-weight: bolder;">Dernier délais de candidature</label>
                                    <input name="dernier_delais" type="date" id="id_dernier_delais" ><br>

              </div>
               <div class="row justify-content-center">
                   <label style="color: #242b5e; font-weight: bolder;">Dernier délais de soumission des évaluations</label>
                                    <input name="date_examination" type="date" id="id_date_examination" ><br>

              </div>
                <div class="row justify-content-center">
                   <label style="color: #242b5e; font-weight: bolder;">Date de notification</label>
                                    <input name="date_notif" type="date" id="id_date_notif" ><br>

              </div>
               <div class="row justify-content-center">
                   <label style="color: #242b5e; font-weight: bolder;">Date de prise de fonction</label>
                                    <input name="date_fonction" type="date" id="id_date_fonction" ><br>

              </div>
              <div class="row justify-content-center">
                <label style="color: #242b5e;font-weight: bolder;">Membre de jury</label>
               <select class="form-control" multiple size="4" name="jurys[]" >
                                        <option  disabled selected></option>
                                        @foreach ($professionnels as $professionnel)
                                        
                                        <option value="{{$professionnel->id}}">{{$professionnel->nom}}&nbsp;{{$professionnel->prenom}}</option>
                                        @endforeach
                                    </select>  
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
                            <div class="container" style="padding-bottom:20px; border-bottom: 1px solid #black;">
                                <!-- Count of Job list Start -->
                                
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                @if ($offreA ?? ''>0)
                                <span>{{$offreA ?? '' ?? ''}} offre(s) acceptée(s)</span>
                                  @foreach($mesOffres ?? '' as $monOffre)
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                       <div class="company-img">
                                            <a><img width="85px;" height="85px;" src="{{url('/storage/entreprise_images/'.$monOffre->user->fichee->entreprise_photo)}}"></a>
                                        </div>
        
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$monOffre->titre}}</h4>
                                            </a>
                                            <ul>
                                                <li><i class="fas fa-map-marker-alt"></i>{{$monOffre->ville}}</li>
                                                <li>{{$monOffre->salaire}}</li>
                                                 <li style="background-color:#fb246a; color:  #242b5e;">{{$monOffre->statut}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="genric-btn primary-border circle"  data-toggle="dropdown">
                                    options <span class="caret"></span>
                                </a>
                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                 <a href="#" aria-hidden="true" data-toggle="modal" data-target="#myModal3{{$monOffre->id}}"style="font-size: 13px;color: black"> Voir détail</a><br>
                                <a href="/supprimer-offre/{{$monOffre->id}}" style="font-size: 13px;color: black">
                                        Modifier</a><br>
                                         
                                        @if($monOffre->statut=='ouverte')
                                         <a href="/changerStatut/{{$monOffre->id}}" style="font-size: 13px;color: black">
                                        Fermer les candidatures</a>
                                         <a href="#" aria-hidden="true" data-toggle="modal" data-target="#myModal5{{$monOffre->id}}"style="font-size: 13px;color: black"> Voir les candidatures</a><br>
                                        @elseif($monOffre->statut=='cloturée')
                                         <a href="/passerExamination/{{$monOffre->id}}" style="font-size: 13px;color: black">
                                         Passer à l'examination </a>
                                          <a href="#" aria-hidden="true" data-toggle="modal" data-target="#myModal5{{$monOffre->id}}"style="font-size: 13px;color: black"> Voir les candidatures</a><br>
                                         @elseif($monOffre->statut=='en_cours_examination')
                                         <a href="/fermerExamination/{{$monOffre->id}}" style="font-size: 13px;color: black">
                                         Cloturer l'examination </a>
                                          <a href="#" aria-hidden="true" data-toggle="modal" data-target="#myModal5{{$monOffre->id}}"style="font-size: 13px;color: black"> Voir les candidatures</a><br>
                                          @elseif($monOffre->statut=='examination_finalisée')
                                          <a href="#" aria-hidden="true" data-toggle="modal" data-target="#myModal6{{$monOffre->id}}"style="font-size: 13px;color: black"> Voir les examinations</a><br>
                                        @elseif($monOffre->statut=='attribuée')
                                        {{$monOffre->titre}}<br>
                                        @endif
                                   <a href="/supprimer-offre/{{$monOffre->id}}"style="font-size: 13px;color: black" >
                                        Supprimer</a>
                              </div>
                            </div>
                                    
<div id="myModal3{{$monOffre->id}}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">{{$monOffre->titre}}</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
    <ul class="list-unstyled pl-3 mb-0">
              <li class="mb-2"><strong class="text-black">Titre:</strong>{{$monOffre->titre}}</li>
              <li class="mb-2"><strong class="text-black">Entreprise:</strong>{{$monOffre->user->fichee->nom}}</li>
              <li class="mb-2"><strong class="text-black">Emplacement:</strong> {{$monOffre->ville}}</li>
              <li class="mb-2"><strong class="text-black">Catégorie:</strong>{{$monOffre->cat}}</li>
              <li class="mb-2"><strong class="text-black">Description de l'offre:</strong>{{$monOffre->description}}</li>
              <li class="mb-2"><strong class="text-black">Sexe:</strong>{{$monOffre->sexe}}</li>
              <li class="mb-2"><strong class="text-black">Salaire:</strong>{{$monOffre->salaire}}<strong class="text-black">DA</strong></li>
              <li class="mb-2"><strong class="text-black">dernier délais de candidature:</strong>{{$monOffre->dernier_delais}}</li>
              <li class="mb-2"><strong class="text-black">date de notification:</strong>{{$monOffre->date_notif}}</li>
              <li class="mb-2"><strong class="text-black">date prise en fonction:</strong>{{$monOffre->date_fonction}}</li> 
          </ul>

</div>
 <div class="modal-footer">
      
                              
                                      <div class="items-link items-link2 f-right" data-dismiss="modal">
                                        <a href="#">Fermer</a>
                                    </div>
                                       
                                </div>
                            </div>
                          </div>
                        </div>
                        <div id="myModal5{{$monOffre->id}}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">{{$monOffre->titre}}</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
    
     
     <table class="table">
      <thead>
        <tr>
          <th style="color:#242b5e; ">Candidat</th>
        </tr>
      </thead>
      <tbody>

      @foreach($examinationq as $key=>$candidat)
      
      <tr>
        @if($candidat->offre_id == $monOffre->id)
        
                    <th>{{$candidat->user->nom}}&nbsp;{{$candidat->user->prenom}}</th>
                        @endif
                        </tr>
                      
                        @endforeach
                        </tbody>

          </table>

</div>
   
                                   <div class="modal-footer">
      
                              
                                      <div class="items-link items-link2 f-right" data-dismiss="modal">
                                        <a href="#">Fermer</a>
                                    </div>
                                       
                                </div>

      </div>
                                        
                                            <!--  Select job items End-->
                                        </div>
                                    </div>

                                    <div id="myModal6{{$monOffre->id}}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">{{$monOffre->titre}}</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
    
      @if($candidats==0)
        <p>pas de candidatures</p>
        @else
     <table class="table">
      <thead>
        <tr>
         <th style="color:#242b5e; ">Candidat</th><th>Score</th>
        </tr>
      </thead>
      <tbody>

      @foreach($candidats as $key=>$candidat)
      
      <tr>
        @if($candidat->offre_id == $monOffre->id)
            <form action="/Attribuer/{{$candidat->id}}">
          @csrf
          @method('POST')
                        <th>{{$candidat->user->nom}}&nbsp;{{$candidat->user->prenom}}</th>
                        

                         <th>{{$candidat->evaluations->count()}}</th>
                         <th> <input type="radio" name="candidature_id" id="id_sexe" value="{{$candidat->id}}"></th>
                     

                        @endif
                        </tr>
                      
                        @endforeach
                        </tbody>

          </table>
          @endif

</div>
   
                                   <div class="modal-footer">
      
                                                        <button style="background: transparent;color: black;"> <div type="button" class="items-link items-link2 f-right"><a style="color: #9999ff;" >Attribuer</a></div></button>
                                                      </form>

                                      <div class="items-link items-link2 f-right" data-dismiss="modal">
                                        <a href="#">Fermer</a>
                                    </div>
                                       
                                </div>

      </div>
                                        
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                  </div>
                                                                @endforeach
                                @else 

                                <p>Pas d'offre proposées</p>
                              @endif 
                                <!-- single-job-content -->
                              
                                <!-- single-job-content -->
                                
                                <!-- single-job-content -->
                                
                               
                                <!-- single-job-content -->
                               
                            </div>
                        </section>
                                    
                                </div>
                                <hr class="line-seprate">
                                 <h2 class="mb-30"style="color:#fb246a">Mes offres refusées</h2>
                                 <div class="row justify-content-center">
                             <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                 @if ($offreR ?? ''>0)
                                  <span>{{$offreR ?? ''}} offres refusées</span>
                                  @foreach($mesOffresR ?? '' as $monOffre)
                               <div class="single-job-items mb-30">
                                    <div class="job-items">
                                       <div class="company-img">
                                            <a><img width="85px;" height="85px;" src="{{url('/storage/entreprise_images/'.$monOffre->user->fichee->entreprise_photo)}}"></a>
                                        </div>
        
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$monOffre->titre}}</h4>
                                            </a>
                                            <ul>
                                                <li>{{$monOffre->user->fichee->nom}}
                                                <li><i class="fas fa-map-marker-alt"></i>{{$monOffre->ville}}</li>
                                                <li>{{$monOffre->salaire}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="items-link items-link2 f-right">
                                                     <a aria-hidden="true" data-toggle="modal" data-target="#myModal3{{$monOffre->id}}"> Voir détail</a>
                                                   </div>
<div id="myModal3{{$monOffre->id}}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
   <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">{{$monOffre->titre}}</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
      <div class="modal-body">
    <ul class="list-unstyled pl-3 mb-0">
              <li class="mb-2"><strong class="text-black">Titre:</strong>{{$monOffre->titre}}</li>
              <li class="mb-2"><strong class="text-black">Entreprise:</strong>{{$monOffre->user->fichee->nom}}</li>
              <li class="mb-2"><strong class="text-black">Emplacement:</strong> {{$monOffre->ville}}</li>
              <li class="mb-2"><strong class="text-black">Catégorie:</strong>{{$monOffre->cat}}</li>
              <li class="mb-2"><strong class="text-black">Description de l'offre:</strong>{{$monOffre->description}}</li>
              <li class="mb-2"><strong class="text-black">Sexe:</strong>{{$monOffre->sexe}}</li>
              <li class="mb-2"><strong class="text-black">Salaire:</strong>{{$monOffre->salaire}}<strong class="text-black">DA</strong></li>
              <li class="mb-2"><strong class="text-black">dernier délais de candidature:</strong>{{$monOffre->dernier_delais}}</li>
              <li class="mb-2"><strong class="text-black">date de notification:</strong>{{$monOffre->date_notif}}</li>
              <li class="mb-2"><strong class="text-black">date prise en fonction:</strong>{{$monOffre->date_fonction}}</li> 
          </ul>

</div>
 <div class="modal-footer">
       <div class="items-link items-link2 f-right">
          <a href="/supprimer-offre/{{$monOffre->id}}" >
                                        Supprimer
    </div>
   
                                      </a>
                                      <div class="items-link items-link2 f-right" data-dismiss="modal">
                                        <a href="#">Fermer</a>
                                    </div>
      </div>
                                        
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                                @else
                                <p>Pas d'offres refusées</p>
                                @endif
                               
                                <!-- single-job-content -->
                              
                                <!-- single-job-content -->
                                
                                <!-- single-job-content -->
                                
                               
                                <!-- single-job-content -->
                               
                            </div>
                        </section>
                                    
                                </div>
                                  <hr class="line-seprate">
                                 <h2 class="mb-30"style="color:#fb246a">Mes offres en attente</h2>
                                 <div class="row justify-content-center">
                             <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                 @if ($offreS ?? ''>0)
                                  <span>{{$offreS ?? ''}} offres en attente</span>
                                  @foreach($mesOffresS ?? '' as $monOffre)
                               <div class="single-job-items mb-30">
                                    <div class="job-items">
                                       <div class="company-img">
                                            <a><img width="85px;" height="85px;" src="{{url('/storage/entreprise_images/'.$monOffre->user->fichee->entreprise_photo)}}"></a>
                                        </div>
        
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$monOffre->titre}}</h4>
                                            </a>
                                            <ul>
                                                <li>{{$monOffre->user->fichee->nom}}
                                                <li><i class="fas fa-map-marker-alt"></i>{{$monOffre->ville}}</li>
                                                <li>{{$monOffre->salaire}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="items-link items-link2 f-right">
                                                     <a aria-hidden="true" data-toggle="modal" data-target="#myModal3{{$monOffre->id}}"> Voir détail</a>
                                                   </div>
<div id="myModal3{{$monOffre->id}}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">{{$monOffre->titre}}</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
     <div class="modal-body">
    <ul class="list-unstyled pl-3 mb-0">
              <li class="mb-2"><strong class="text-black">Titre:</strong>{{$monOffre->titre}}</li>
              <li class="mb-2"><strong class="text-black">Entreprise:</strong>{{$monOffre->user->fichee->nom}}</li>
              <li class="mb-2"><strong class="text-black">Emplacement:</strong> {{$monOffre->ville}}</li>
              <li class="mb-2"><strong class="text-black">Catégorie:</strong>{{$monOffre->cat}}</li>
              <li class="mb-2"><strong class="text-black">Description de l'offre:</strong>{{$monOffre->description}}</li>
              <li class="mb-2"><strong class="text-black">Sexe:</strong>{{$monOffre->sexe}}</li>
              <li class="mb-2"><strong class="text-black">Salaire:</strong>{{$monOffre->salaire}}<strong class="text-black">DA</strong></li>
              <li class="mb-2"><strong class="text-black">dernier délais de candidature:</strong>{{$monOffre->dernier_delais}}</li>
              <li class="mb-2"><strong class="text-black">date de notification:</strong>{{$monOffre->date_notif}}</li>
              <li class="mb-2"><strong class="text-black">date prise en fonction:</strong>{{$MonOffre->date_fonction}}</li> 
          </ul>

</div>
 <div class="modal-footer">
   <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    options <span class="caret"></span>
                                </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                <a href="/supprimer-offre/{{$monOffre->id}}" >
                                        Modifier</a>
                                        @if($monOffre->statut=='cloturée')
                                         <a href="/supprimer-offre/{{$monOffre->id}}" >
                                        Fermer les candidatures</a>
                                        @else
                                         <a href="/supprimer-offre/{{$monOffre->id}}" >
                                        Supprimer</a>
                                        @endif
                                  
                              </div>
                                  
                              </div>
      
   
                                    
                                    
      </div>
                                        
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                                @endforeach
                                @else
                                <p>Pas d'offres en attente</p>
                                @endif
                               
                                <!-- single-job-content -->
                              
                                <!-- single-job-content -->
                                
                                <!-- single-job-content -->
                                
                               
                                <!-- single-job-content -->
                               
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