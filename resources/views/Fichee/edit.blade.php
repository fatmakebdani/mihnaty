@extends('layouts.app')

@section('content')
        <!-- END HEADER MOBILE -->
        <!-- END HEADER MOBILE -->
        <main>
        <div id="viewport">
<div id="sidebar">
    <ul class="nav">
      <li>
        <a href="#">
          <i class="zmdi zmdi-file-text"></i> Ma fiche professionnelle
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-card-travel"></i> Ma fiche d'entreprise
        </a>
      </li>
      <li>
        <a href="/offre/create">
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
            </section>            
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="title-5 m-b-35"style="color:#242b5e;">Renseignements généraux</h6>
                            
                        </div>

                    </div>
               
                   {!! Form::open(['action' => ['FicheeController@update', $fichee->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                <div class="row">
                                    
                                  <img  style="width:25%;height: 25%" src="{{url('/storage/entreprise_images/'.$fichee->entreprise_photo)}} ">
                                        
                                    <label>Changer de photo</label>
                                    <input name="photo" type="file"id="idI" accept="image/png, image/jpeg">
                                    
                                   
                           
                                </div>


                                      <label>Nom</label>
                                    <input name="nom" type="text" class="form-control" id="id_nom"  value="{{$fichee->nom}}"><br>
                                    <label>Raison sociale</label>
                                    <input name="raison sociale" type="text" class="form-control" id="id_raison" value="{{$fichee->raison_sociale}}"><br>
                                    <label>Activité:</label>
                                    <input name="activité" type="text" class="form-control" id="id_TitreE" value="{{$fichee->activité}}">
                        
                                    <label>Adresse</label>
                                    <input name="adresse" type="text" class="form-control" id="id_adresse" value="{{$fichee->adresse}}"><br>

                                    <label>Code postal</label>
                                    <input name="code postal" type="text" class="form-control" id="id_postal" value="{{$fichee->code_postal}}"><br>

                                    <label >Site web</label>
                                    <input name="site" type="url" class="form-control" id="id_url" value="{{$fichee->site}}"><br>

                                    <label>N° de téléphone</label>
                                    <input name="num" type="tel" id="id_phone" value="{{$fichee->num}}" ><br>
   
                                    <label>Date de création</label>
                                    <input name="date de creation" type="date" id="id_DateN" value="{{$fichee->date_de_creation}}"><br>




                                    

 
                            
                            </div>
                            <!-- END CHART-->
                        </div>       
                    </div>
                    
                       
                <h6 class="title-5 m-b-35"style="color:#242b5e;">Représentant </h6>
                         <div class="row justify-content-center">
                         <div class="col-md-10">

                            
                        
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                    
                                    
                                 <h3> {{$gerant->nom}} {{$gerant->prenom}} </h3>
                          
                                    

 
            
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
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Membres de l'entreprise</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                @foreach($employes as $employe)
                                {{$employe->professionnel->nom}}
                                @endforeach
                                        
                               
                    
                                
                            </div>
                        </div>
                    </div>
                
                 {{Form::submit('Enregistrer les modifications', ['class'=>'genric-btn primary-border circle'])}}
                    </div>
                {!! Form::close() !!}

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
 
<!-- end document-->
 <script>
         $(document).ready(function() {
$('.mdb-select').materialSelect();
});
       </script> 
        @endsection