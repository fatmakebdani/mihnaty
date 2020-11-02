@extends('layouts.app')

@section('content')
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
        <a href="/mesPropositions">
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
            <div class= <div class="row justify-content-center">
                             <section class="featured-job-area">
                            <div class="container" style="padding-bottom:20px; border-bottom: 1px solid #black;">
                                <!-- Count of Job list Start -->
                                
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                @if ($nbrE ?? ''>0)
                                <span>{{$nbrE ?? '' ?? ''}} examination(s)</span>
                                  @foreach($jurys ?? '' as $jury)
                                  @if($jury->offre->vérification=='acceptée')
                              <div class="single-job-items mb-30">
                                    <div class="job-items">
                                       <div class="company-img">
                                            <a><img width="85px;" height="85px;" src="{{url('/storage/entreprise_images/'.$jury->offre->user->fichee->entreprise_photo)}}"></a>
                                        </div>
        
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$jury->offre->titre}}</h4>
                                            </a>
                                            <ul>
                                                <li>{{$jury->offre->user->fichee->nom}}
                                                <li><i class="fas fa-map-marker-alt"></i>{{$jury->offre->ville}}</li>
                                                <li style="background-color:#fb246a; color:  #242b5e;">{{$jury->offre->statut}}</li>

                                            </ul>
                                        </div>
                                    </div>
                                      <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="genric-btn primary-border circle"  data-toggle="dropdown">
                                    options <span class="caret"></span>
                                </a>
                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                 <a href="#" aria-hidden="true" data-toggle="modal" data-target="#myModal3{{$jury->id}}"style="font-size: 13px;color: black"> Voir détail</a><br>
                                        @if($jury->offre->statut== en_cours_examination)
                                          <a href="#" aria-hidden="true" data-toggle="modal" data-target="#myModal5{{$jury->id}}"style="font-size: 13px;color: black"> Voir les candidatures</a><br>
                                       @endif
                                  
                              </div>
                            </div>
<div id="myModal3{{$jury->id}}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">{{$jury->offre->titre}}</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
    <ul class="list-unstyled pl-3 mb-0">
              <li class="mb-2"><strong class="text-black">Titre:</strong>{{$jury->offre->titre}}</li>
              <li class="mb-2"><strong class="text-black">Entreprise:</strong>{{$jury->offre->user->fichee->nom}}</li>
              <li class="mb-2"><strong class="text-black">Emplacement:</strong> {{$jury->offre->ville}}</li>
              <li class="mb-2"><strong class="text-black">Catégorie:</strong>{{$jury->offre->cat}}</li>
              <li class="mb-2"><strong class="text-black">Description de l'offre:</strong>{{$jury->offre->description}}</li>
              <li class="mb-2"><strong class="text-black">Sexe:</strong>{{$jury->offre->sexe}}</li>
              <li class="mb-2"><strong class="text-black">Salaire:</strong>{{$jury->offre->salaire}}<strong class="text-black">DA</strong></li>
              <li class="mb-2"><strong class="text-black">dernier délais de candidature:</strong>{{$jury->offre->dernier_delais}}</li>
              <li class="mb-2"><strong class="text-black">date de notification:</strong>{{$jury->offre->date_notif}}</li>
              <li class="mb-2"><strong class="text-black">date prise en fonction:</strong>{{$jury->offre->date_fonction}}</li> 
          </ul>

</div>
 <div class="modal-footer">
  
   
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
                            <div id="myModal5{{$jury->id}}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal1">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">{{$jury->offre->titre}}</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
       
      @if($candidats==0)
        <p>pas de candidatures</p>
        @endif
      
  
  @if($examination==0)
   <p>Prière d'envoyer les éxaminations avant:<b>{{$jury->offre->date_examination}}</b></p>
    <table class="table">
     <thead>
        <tr>
          <th style="color:#242b5e; ">Candidat</th><th></th>
        </tr>
      </thead>
      <tbody>
      @foreach($candidats as $key=>$candidat)
     
      <tr>
        @if($candidat->offre_id == $jury->offre_id)
       
        <form action="/Evaluer/{{$candidat->id}}">
          @csrf
          @method('POST')
                        <th>{{$candidat->user->nom}}&nbsp;{{$candidat->user->prenom}}</th><th> <input type="radio" name="candidature_id" id="id_sexe" value="{{$candidat->id}}"></th>
                         
                        @endif
                        </tr>
                      
                        @endforeach
                         
                        </tbody>

          </table>
       
          @else
          Vous avez choisi {{$examination->candidature->user->nom}} {{$examination->candidature->user->prenom}}

             <p>Prière d'envoyer  les changements avant:<b>{{$jury->offre->date_examination}}</b></p>
          <table class="table">
     <thead>
        <tr>
          <th style="color:#242b5e; ">Candidat</th><th></th>
        </tr>
      </thead>
      <tbody>
      @foreach($candidats as $key=>$candidat)
     
      <tr>
        @if($candidat->offre_id == $jury->offre_id)
       
        <form action="/Changer/{{$candidat->id}}">
          @csrf
          @method('POST')
                        <th>{{$candidat->user->nom}}&nbsp;{{$candidat->user->prenom}}</th><th> <input type="radio" name="candidature_id" id="id_sexe" value="{{$candidat->id}}"></th>
                         
                        @endif
                        </tr>
                      
                        @endforeach
                         
                        </tbody>

          </table>
          @endif

@endif

   
                                

      </div>
        @if($examination==0)
       <div class="modal-footer">
                                       
                          <button style="background: transparent;color: black;"> <div type="button" class="items-link items-link2 f-right"><a style="color: #9999ff;" >Envoyer</a></div></button>

                     
   
  
</form>
                                      <div class="items-link items-link2 f-right" data-dismiss="modal">
                                        <a href="#">Fermer</a>
                                    </div>
                                       
                                </div>
                                @else
         <div class="modal-footer">
                                       
                          <button style="background: transparent;color: black;"> <div type="button" class="items-link items-link2 f-right"><a style="color: #9999ff;" >Changer</a></div></button>

                     
   
  
</form>
                                      <div class="items-link items-link2 f-right" data-dismiss="modal">
                                        <a href="#">Fermer</a>
                                    </div>
                                       
                                </div>
                                     @endif   
                                            <!--  Select job items End-->
                                        </div>
                                    
                          
                                                                @endforeach
                                @else 

                                <p>Pas d'Examination</p>
                              @endif 
                                <!-- single-job-content -->
                              
                                <!-- single-job-content -->
                                
                                <!-- single-job-content -->
                                
                               
                                <!-- single-job-content -->
                               
                            </div>
                        </section>
                                    
                                </div>
                        </section>
                                    
                                </div>
    </div>
        </main>
            
            <!-- WELCOME-->
           
            <!-- END WELCOME-->

            <!-- STATISTIC-->
           
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            
            <!-- END COPYRIGHT-->
         @endsection
<!-- end document-->
