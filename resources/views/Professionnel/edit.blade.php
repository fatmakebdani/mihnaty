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

                {!! Form::open(['action' => ['ProfessionnelController@update', $professionnel->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB">
                                <div class="row">
                                        <img src="/storage/user_images/{{$professionnel->user->user_photo}}" alt="cover_img">
                                        <label>Changer de photo</label>
                                        <input name="image" type="file"id="idI" accept="image/png, image/jpeg">
                                    </div>

                                <label>Nom</label>
                                <input name='nom' type="text" class="form-control" id="id_nom" value="{{$professionnel->nom}}">

                                <label>Prénom</label>
                                <input name="prenom" type="text" class="form-control" id="id_prenom" value="{{$professionnel->prenom}}"><br>
                                @if ($professionnel->sexe == "H")
                                <input type="radio" name="sexe" id="id_sexe" value="H" checked>
                                <label>Homme</label>
                                <input type="radio" name="sexe" id="id_sexe" value="F">
                                <label>Femme</label><br>
                                @else
                                <input type="radio" name="sexe" id="id_sexe" value="H">
                                <label>Homme</label>
                                <input type="radio" name="sexe" id="id_sexe" value="F" checked>
                                <label>Femme</label><br>
                                @endif

                                <label >Email</label>
                                <input name="email" type="email" class="form-control" id="id_email" value="{{$professionnel->email}}"><br>

                                <label>N° de téléphone</label>
                                <input name="tel" type="tel" id="id_phone" value="{{$professionnel->tel}}"><br>

                                <label>Date de naissance</label>
                                <input  name="date" type="date" id="example-date-input" value="{{$professionnel->dateN}}"><br>
                            </div>
                        <!-- END CHART-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;" {{$i = 0}}>Expériences</h6>
                            <!-- CHART-->

                            @foreach ($professionnel->user->experiences as $experience)
                            <div class="statistic-chart-1"style="background-color:#A6A4BB " >
                                <p>Experience N° {{++$i}}</p>
                                <label>Nom entreprise</label>
                                <input name="experience_id_{{$i}}" type="number" value="{{$experience->id}}" hidden>
                                <input name="nom_en_{{$i}}" type="text" class="form-control" id="id_NomE" value="{{$experience->entreprise}}" required><br>

                                <label>Titre</label>
                                <input name="titre_en_{{$i}}" type="text" class="form-control" id="id_TitreE" value="{{$experience->titre}}" required>

                                <label>Date de début</label>
                                <input name="date_debut_{{$i}}" type="date" id="id_DateD" value="{{$experience->debut}}" required><br>

                                <label>Date de fin</label>
                                <input name="date_fin_{{$i}}" type="date" id="id_DateF" value="{{$experience->fin}}" required><br>

                                <input name="contrat_file_{{$i}}" type="file"  id="id_fileE"><br>

                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35">Poste courant</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB;">
                                <label>Titre</label>
                                <input name="titre" type="text" class="form-control" id="id_TitreE" value="{{$professionnel->user->poste_courant->titre}}"><br>

                                <label>Nom entreprise</label>
                                <input name="nom_en_c" type="text" class="form-control" id="id_NomE" value="{{$professionnel->user->poste_courant->entreprise}}"><br>

                                <label>Date de début</label>
                                <input name="date_debut_c" type="date" id="id_DateD" value="{{$professionnel->user->poste_courant->debut}}"><br>

                                <label>Date jusqu'à présent</label>
                                <input name="date_fin_c" type="date" id="id_DateF" value="{{$professionnel->user->poste_courant->fin}}"><br>

                                <input name="contrat_c_file" type="file"  id="id_fileE"><br>

                            </div>
                            <!-- END CHART-->
                        </div>

                            <!-- END CHART-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <h6 class="title-5 m-b-35"style="color: #242b5e;" {{$i=0}}>Diplômes et formations</h6>
                            @foreach ($professionnel->user->diplomes as $diplome)
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                <h6>Diplôme N° {{++$i}}</h6>
                                <label>Titre</label>
                                <input name="diplome_id_{{$i}}" type="number" value="{{$diplome->id}}" hidden>
                                <input name="diplome_{{$i}}" type="text" class="form-control" id="id_TitreE" value="{{$diplome->titre}}" required>

                                <label>Nom établissement</label>
                                <input name="diplome_en_{{$i}}" type="text" class="form-control" id="id_NomE" value="{{$diplome->etablisement}}" required><br>



                                <label>Date de début</label>
                                <input name="date_debut_d_{{$i}}" type="date" id="id_DateD" value="{{$diplome->debut}}" required><br>

                                    <label>Date de fin</label>
                                <input name="date_fin_d_{{$i}}" type="date" id="id_DateF" value="{{$diplome->fin}}" required><br>
                                <label>

                                <input name="diplome_file_{{$i}}" type="file"  id="id_file"><br>


                            </div>
                            @endforeach
                        </div>

                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;" {{$i=0}}>Compétences</h6>
                            <!-- CHART-->
                            @foreach ($professionnel->user->competences as $competence)
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                <label>Compétence N° {{++$i}}</label>

                                <input name="competence_id_{{$i}}" type="number" value="{{$competence->id}}" hidden>
                                <input name="competence_{{$i}}" type="text" class="form-control" id="id_TitreE" value="{{$competence->titre}}" required><br>

                            </div>
                            @endforeach
                            <!-- END CHART-->
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35">Réseaux sociaux</h6>
                            <div class="statistic-chart-1"style="background-color:#A6A4BB;">
                                <img src="assets/img/icon/instag.png"  />
                                <label>Instagram</label>
                                <input name="insta" type="url" class="form-control" id="id_link" value="{{$professionnel->user->insta}}"><br>

                                <img src="assets/img/icon/lin.png"  />
                                <label>Linkedin</label>
                                <input name="linkedin" type="url" class="form-control" id="id_insta" value="{{$professionnel->user->linkedin}}"><br>

                                <img src="assets/img/icon/por.png"  />
                                <label>Portfolio</label>
                                <input name="portfolio" type="url" class="form-control" id="id_port" value="{{$professionnel->user->portfolio}}"><br>

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Enregistrer Les Modifications', ['class'=>'genric-btn primary-border circle'])}}
                    </div>
                {!! Form::close() !!}

            </div>
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
