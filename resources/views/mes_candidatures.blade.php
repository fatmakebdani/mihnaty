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
                <a href="/candidat">
                <i class="zmdi zmdi-file-text"></i> Ma fiche professionnelle
                </a>
            </li>
           
            <li>
                <a href="/MesPropositions">
                <i class="fas fa-lightbulb"></i> Mes candidatures
                </a>
            </li>
           
            </ul>
        </div>
    <!-- Content -->
    <div id="content" class="scroll">
        <!-- WELCOME-->
        <section class="au-breadcrumb2">
            <div class="container">
                    <div class="row justify-content-center">
                        <div class=" col-lg-9">
                            <h2 class="mb-30"style="color:#fb246a">Mes candidatures</h2>
                        <hr class="line-seprate">
                    </div>

                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- STATISTIC-->

        <!-- END STATISTIC-->

        <!-- STATISTIC CHART-->
       
        <div class="row justify-content-center">
                             <section class="featured-job-area">
                            <div class="container" style="padding-bottom:20px; border-bottom: 1px solid #black;">
                                <!-- Count of Job list Start -->
                                
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                @if ($nbrC ?? ''>0)
                                <span>{{$nbrC ?? '' ?? ''}} candidature(s)</span>
                                  @foreach($candidatures ?? '' as $candidature)
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                       <div class="company-img">
                                            <a><img width="85px;" height="85px;" src="{{url('/storage/entreprise_images/'.$candidature->offre->user->fichee->entreprise_photo)}}"></a>
                                        </div>
        
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{$candidature->offre->titre}}</h4>
                                            </a>
                                            <ul>
                                                <li>{{$candidature->offre->user->fichee->nom}}
                                                <li><i class="fas fa-map-marker-alt"></i>{{$candidature->offre->ville}}</li>
                                                <li>{{$candidature->offre->staut}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="items-link items-link2 f-right">
                                                     <a aria-hidden="true" data-toggle="modal" data-target="#myModal3{{$candidature->id}}"> Voir détail</a>
                                                   </div>
<div id="myModal3{{$candidature->id}}" class="modal" tabindex="-1" role="dialog"  aria-labelledby="myModal3{{$candidature->id}}">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
     
  <div class="modal-header">
    <div class="modal-title" style="color:#fb246a; font-weight: bolder;">{{$candidature->offre->titre}}</div>
      <button type="button" class="close" data-dismiss="modal">X</button>
    </div>
    <div class="modal-body">
     <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Titre:</strong>{{$candidature->offre->titre}}</li>
                <li class="mb-2"><strong class="text-black">Emplacement:</strong> {{$candidature->offre->ville}}</li>
                <li class="mb-2"><strong class="text-black">Catégorie:</strong>{{$candidature->offre->cat}}</li>
                <li class="mb-2"><strong class="text-black">Description:</strong> <p>{{$candidature->offre->description}}</p></li>
                <li class="mb-2"><strong class="text-black">Sexe:</strong>{{$candidature->offre->sexe}}</li>
                <li class="mb-2"><strong class="text-black">dernier délais de candidature:</strong>{{$candidature->offre->dernier_delais}}</li>
                <li class="mb-2"><strong class="text-black">date de notification:</strong>{{$candidature->offre->date_notif}}</li>
                <li class="mb-2"><strong class="text-black">Salaire:</strong>{{$candidature->offre->salaire}}<strong class="text-black">DA</strong></li>
               
                <li class="mb-2"><strong class="text-black">date prise en fonction:</strong>{{$candidature->offre->date_fonction}}</li>
              </ul>

</div>
 <div class="modal-footer">
    <div class="items-link items-link2 f-right">
          <a href="/se-retirer/{{$candidature->id}}" >
                                        Se retirer
                                          </a>
    </div>
   
                                    
                                      <div class="items-link items-link2 f-right" data-dismiss="modal">
                                        <a href="#">Fermer</a>
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

                                <p>Pas de candidature</p>
                              @endif 
                                <!-- single-job-content -->
                              
                                <!-- single-job-content -->
                                
                                <!-- single-job-content -->
                                
                               
                                <!-- single-job-content -->
                               
                            </div>
                             <hr class="line-seprate">
                                 <h2 class="mb-30"style="color:#fb246a">Mes Attributions</h2>
                                    @if ($nbrA ?? ''>0)
                                <span>{{$nbrA ?? '' ?? ''}} attribution(s)</span>
                                  <hr class="line-seprate">
                                  @foreach($attributions ?? '' as $attribution)
                              <div class="row">
                    <div class="col-md-3">
                                       
                                            <img width="85px;" height="85px;" src="{{url('/storage/entreprise_images/'.$attribution->offre->user->fichee->entreprise_photo)}}">
                                        </div>
                                        <div class="col-md-9 mt-sm-20">
                        <p><b>{{$attribution->offre->user->fichee->nom}}</b> a le plaisir de vous annoncer que vous etes choisi pour le poste <b>{{$attribution->offre->titre}}</b>.Veuillez nous contacter le plus vite possible sur <b>0 {{$attribution->offre->user->fichee->num}}</b><br>
                            Merci </p>
                    </div>
                </div>
        
                                       
                                   
                        
                                                                @endforeach
                                @else 

                                <p>Pas de candidature</p>
                              @endif
                        </section>
                                    
                                </div>

                        </section>
                                    
                                </div>
    </div>
</main>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->h

            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->

            <!-- END COPYRIGHT-->

            <!-- END COPYRIGHT-->
 @endsection
<!-- end document-->
