@extends('layouts.app')

@section('content')
     
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="welcome p-t-10">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                 <div class="au-breadcrumb-left">
                            </div>
                                <div class="au-breadcrumb-right">
                                   
                                            <!-- Button trigger modal -->
<!-- Button trigger modal -->

                        </div>
                    </div>
                </div>
            </div>
            </section>
            <section class="au-breadcrumb2">
            <div class="container">
                        <div class="row">
                            
                            <div class="col-lg-6"style="padding-right:20px; border-right: 1px solid #ccc;">
                                <h3 class="mb-30"style="color:#fb246a">Offres à vérifier</h3>
                                
  

  
                         @foreach($offres as $offre)
            <div class="single-job-items ">
                                    <div class="job-items">
                                        <div class="company-img">
                                             <a> <img style="width:85px;height:85px;" src="{{url('/storage/entreprise_images/'.$offre->user->fichee->entreprise_photo)}} ">
                                           </a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$offre->titre}}</h4>
                                           </a>
                                            <ul>
                                                <li>{{$offre->user->fichee->nom}}</li>
                                                <li><i class="fas fa-map-marker-alt"></i>{{$offre->ville}}</li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="items-link items-link2 f-right"  aria-hidden="true" data-toggle="modal" data-target="#myModal-{{ $offre->id }}">
                                       
                                        <a>Voir détails</a>
                                       
                                      
                                    </div>

                                   <div id="myModal-{{ $offre->id }}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">{{$offre->titre}}
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" ></h4>
      </div>
      <div class="modal-body">
          <ul class="list-unstyled pl-3 mb-0">
              <li class="mb-2"><strong class="text-black">Titre:</strong>{{$offre->titre}}</li>
              <li class="mb-2"><strong class="text-black">Emplacement:</strong> {{$offre->ville}}</li>
              <li class="mb-2"><strong class="text-black">Catégorie:</strong>{{$offre->cat}}</li>
              <li class="mb-2"><strong class="text-black">Description de l'offre:</strong>{{$offre->description}}</li>
              <li class="mb-2"><strong class="text-black">Sexe:</strong>{{$offre->sexe}}</li>
              <li class="mb-2"><strong class="text-black">Salaire:</strong>{{$offre->salaire}}<strong class="text-black">DA</strong></li>
              <li class="mb-2"><strong class="text-black">dernier délais de candidature:</strong>{{$offre->dernier_delais}}</li>
              <li class="mb-2"><strong class="text-black">date de notification:</strong>{{$offre->date_notif}}</li>
              <li class="mb-2"><strong class="text-black">date prise en fonction:</strong>{{$offre->date_fonction}}</li> 
          </ul>
        
               <a href="/accepter-offre/{{$offre->id}}" class="genric-btn primary-border circle">
                                        Valider
                                          </a>
                                       
               <a href="/refuser-offre/{{$offre->id}}" class="genric-btn primary-border circle">
                                        Refuser
                                      </a>
                                      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>

  </div>
</div>

                                
                                </div>
        @endforeach
                                           
                                        
                                        </div>
                                 
                               
                             <div class="col-lg-6">
                                <h3 class="mb-30" style="color:#fb246a">Fiches des entreprises à vérifier</h3>
                                 @foreach($entreprises as $entreprise)
            <div class="single-job-items ">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a><img width="85px;" height="85px;"  src="{{url('/storage/entreprise_images/'.$entreprise->entreprise_photo)}}">
                                           </a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$entreprise->nom}}</h4>
                                            </a>
                                            <ul>
                                                <li>{{$entreprise->raison_sociale}}</li>
                                                <li><i class="fas fa-map-marker-alt"></i>{{$entreprise->adresse}}</li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="items-link items-link2 f-right"  aria-hidden="true" data-toggle="modal" data-target="#myModal-{{ $entreprise->id }}">
                                       
                                        <a>Voir détails</a>
                                       
                                      
                                    </div>
                                    <div id="myModal-{{ $entreprise->id }}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">{{$entreprise->titre}}
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" ></h4>
      </div>
      <div class="modal-body">
          <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Nom:</strong>{{$entreprise->nom}}</li>
                <li class="mb-2"><strong class="text-black">Adresse:</strong> {{$entreprise->adresse}}</li>
                <li class="mb-2"><strong class="text-black">Code posal:</strong>{{$entreprise->code_postal}}</li>
                <li class="mb-2"><strong class="text-black">Activité:</strong>{{$entreprise->activité}}</li>
                <li class="mb-2"><strong class="text-black">Raison sociale:</strong>{{$entreprise->raison_sociale}}</li>
                <li class="mb-2"><strong class="text-black">Date de création:</strong>{{$entreprise->date_de_creation}}</li>
                <li class="mb-2"><strong class="text-black">Site:</strong>{{$entreprise->site}}</li>
                <li class="mb-2"><strong class="text-black">Téléphone:</strong>0{{$entreprise->num}}</li>
              </ul>
        
               <a href="/accepter-fichee/{{$entreprise->id}}" class="genric-btn primary-border circle">
                                        Valider
                                      </a>
               <a href="/refuser-fichee/{{$entreprise->id}}" class="genric-btn primary-border circle">
                                        Refuser
                                      </a>
                                      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>

  </div>
</div>
</div>
                                 
        @endforeach
                            
                            
                        </div>
                    </div>
                        
                       
                       
                        </div>
                </div>
               
                        
                       
                       
                        </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
           
            <!-- END WELCOME-->

            <!-- STATISTIC-->
           
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->


            <!-- END COPYRIGHT-->
       

    @endsection