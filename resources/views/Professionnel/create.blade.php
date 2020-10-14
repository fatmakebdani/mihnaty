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
                <a href="professionnel.create">
                <i class="zmdi zmdi-file-text"></i> Ma fiche professionnelle
                </a>
            </li>
            <li>
                <a href="/professionnel'.'/'. $professionnel->id . '/edit'">
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
                <a href="#">
                <i class="fas fa-user-plus"></i> Mes invitations
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

                {!! Form::open(['action' => 'ProfessionnelController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB">
                                <div class="row ">

                                        <label>Choisir une photo</label>
                                        <input name="image" type="file"id="idI" accept="image/png, image/jpeg">
                                    </div>

                                <label>Nom</label>
                                <input name='nom' type="text" class="form-control" id="id_nom">

                                <label>Prénom</label>
                                <input name="prenom" type="text" class="form-control" id="id_prenom"><br>

                                <input type="radio" name="sexe" id="id_sexe" value="H" checked>
                                <label>Homme</label>

                                <input type="radio" name="sexe" id="id_sexe" value="F">
                                <label>Femme</label><br>

                                <label >Email</label>
                                <input name="email" type="email" class="form-control" id="id_email" value="{{$user->email}}"><br>

                                <label >N° de téléphone</label><br>
                                <input name="tel" type="tel" id="id_phone"><br>

                                <label>Date de naissance</label><br>
                                <input  name="date" type="date" value="jj/mm/aaaa" id="example-date-input"><br>
                            </div>
                        <!-- END CHART-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Dernière Expérience</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                <label>Nom entreprise</label>
                                <input name="nom_en" type="text" class="form-control" id="id_NomE"><br>

                                <label>Titre</label>
                                <input name="titre_en" type="text" class="form-control" id="id_TitreE">

                                <label>Date de début</label>
                                <input name="date_debut" type="date" id="id_DateD" ><br>

                                <label>Date de fin</label>
                                <input name="date_fin" type="date" id="id_DateF" ><br>

                                <input name="contrat_file" type="file"  id="id_fileE"><br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35">Poste courant</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB;">
                                <label>Titre</label>
                                <input name="titre" type="text" class="form-control" id="id_TitreE"><br>

                                <label>Nom entreprise</label>
                                <input name="nom_en_c" type="text" class="form-control" id="id_NomE"><br>

                                <label>Date de début</label>
                                <input name="date_debut_c" type="date" id="id_DateD" ><br>

                                <label>Date jusqu'à présent</label>
                                <input name="date_fin_c" type="date" id="id_DateF" value="{{date("Y-m-d")}}"><br>

                                <input name="contrat_c_file" type="file"  id="id_fileE"><br>

                            </div>
                            <!-- END CHART-->
                        </div>

                            <!-- END CHART-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Dernier Diplôme ou dernière Formation </h6>

                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                <label>Titre</label>
                                <input name="diplome" type="text" class="form-control" id="id_TitreE">

                                <label>Nom établissement</label>
                                <input name="diplome_en" type="text" class="form-control" id="id_NomE"><br>



                                <label>Date de début</label>
                                <input name="date_debut_d" type="date" id="id_DateD" ><br>

                                    <label>Date de fin</label>
                                <input name="date_fin_d" type="date" id="id_DateF" ><br>
                                <label>

                                <input name="diplome_file" type="file"  id="id_file"><br>


                            </div>
                        </div>

                        <div class="col-md-6">
                            <h6 class="title-5 m-b-35"style="color: #242b5e;">Dernière Compétence acquise</h6>
                            <!-- CHART-->
                            <div class="statistic-chart-1"style="background-color:#A6A4BB ">
                                <label>Titre</label>
                                <input name="competence" type="text" class="form-control" id="id_TitreE"><br>
                            </div>
                            <!-- END CHART-->
                        </div>

                    </div>
                   
                    <div class="row justify-content-center">
                         {{Form::submit('Enregistrer', ['class'=>'genric-btn primary-border circle'])}}
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
