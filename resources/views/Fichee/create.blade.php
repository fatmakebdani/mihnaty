@extends('layouts.app')

@section('content')
        <!-- END HEADER MOBILE -->
        <!-- END HEADER MOBILE -->
        <main>
        <div id="viewport">
<div id="sidebar">
    <ul class="nav">
      <li>
        <a href="/Professionnel/edit">
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
            </section>           
             <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="title-5 m-b-35"style="color:#242b5e;">Renseignements généraux</h6>
                        </div>

                    </div>
                    {!! Form::open(['action' => 'FicheeController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                <div class="row">   
                                 
                                    <label>Ajouter une logo:</label>
                                    <input name="entreprise_photo" type="file"id="idI" accept="image/png, image/jpeg">
                                    
                                
                                
                                <br>
                                <div class="row" >
                                      <label>Nom</label>
                                    <input name="nom" type="text" class="form-control" id="id_nom"><br>
                                    <label>Raison sociale</label>
                                    <input name="raison sociale" type="text" class="form-control" id="id_raison"><br>
                                     <label>Nature d'activité</label>
                                    <input name="activité" type="text" class="form-control" id="id_TitreE"><br>

                                    
                                    <label>Adresse</label>
                                    <input name="adresse" type="text" class="form-control" id="id_adresse"><br>

                                    <label>Code postal</label>
                                    <input name="code postal" type="text" class="form-control" id="id_postal"><br>

                                    <label >Site web</label>
                                    <input name="site" type="url" class="form-control" id="id_url" ><br>

                                    <label>N° de téléphone</label>
                                    <input name="num" type="tel" id="id_phone"  ><br>
   
                                    <label>Date de création</label>
                                    <input name="date de creation" type="date" id="id_DateN" ><br>

</div>


                                    

 
                            
                            </div>
                            <!-- END CHART-->
                        </div>       
                    </div>
                </div>
                         <h6 class="title-5 m-b-35"style="color:#242b5e;">Représentant </h6>
                        
                    <div class="row justify-content-center">
                         <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                       Le représentant de l'entreprise est
                                    <select class="mdb-select md-form"  searchable="Search here.." name="gerant_id" >Le représentant de l'entreprise est
                                        <option  disabled selected></option>
                                        @foreach ($professionnels as $professionnel)
                                        
                                        <option value="{{$professionnel->id}}">{{$professionnel->nom}}&nbsp;{{$professionnel->prenom}}</option>
                                        @endforeach
                                    </select>
                                        
                                  
                                
                                    
                                    

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
                        <div class="col-md-9">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Membres de l'entreprise</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                
                                  <select class="form-control" multiple size="4" name="employes[]" >
                                        <option  disabled selected>Membre</option>
                                        @foreach ($professionnels as $professionnel)
                                        
                                        <option value="{{$professionnel->id}}">{{$professionnel->nom}}&nbsp;{{$professionnel->prenom}}</option>
                                        @endforeach
                                    </select>  
                             
                    
                                
                            </div>
                        </div>
                    </div>
                
                 {{Form::submit('Enregistrer', ['class'=>'genric-btn primary-border circle'])}}
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