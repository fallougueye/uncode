<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>wiki</title>

  <!-- Bootstrap -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" type="text/css" rel="stylesheets" href="{{asset('css/formu.css')}}">
  <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />

  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="/"><img src="{{asset('images/wiki/logo.svg')}}" alt="" style="width:220px;"></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="/" class="active">Accueil</a></li>
              <li role="presentation"><a href="/formations">Formations</a></li>
                <li role="presentation"><a href="/inscriptions">Inscriptions</a></li>
                <li role="presentation"><a href="/categories">Catégories</a></li>
               <!--  <li role="presentation"><a href="/portfolio">Portfolio</a></li>
                <li role="presentation"><a href="/blog">Blog</a></li> -->
                <li role="presentation"><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="breadcrumb" style="background-color:lightgreen;">
    <div class="container" style="background-color:lightgreen;">
      <div class="breadcrumb" style="background-color:lightgreen;">
        <li><a href="/">Accueil</a></li>
        <li>Inscriptions</li>
      </div>
    </div>
  </div>

  <div class="aboutus">
    <div class="container">
    <center><h3>Inscrivez vous</h3></center>
      <hr>
                    <div class="container-fluid col-md-12 col-md-offset-0" style="margin-top:-160px;>
                        <!-- MultiStep Form -->
                        <h6> @if (session('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('message') }}
                                            </div>  
                                        @endif</h6>
              <main class="content" role="content">
                <section id="section1">
                    <div class="container-fluid col-md-6 col-md-offset-3">                      
                        <form id="regForm" method="post" action="{{route('inscriptions.store')}}">
                            {{ csrf_field() }}
                            <h1>Formulaire D'Inscriptions</h1>
                            <!-- One "tab" for each step in the form: -->
                              <div class="tab">
                                    <div class="titre"><b style="color:red;">*</b>Civilite:</div>
                                      <p>
                                          <select name="identite" required>
                                              <option selected>--Selectionner Votre civilité--: </option>
                                              <option >Monsieur</option> 
                                              <option >Madame</option>    
                                              <option >Mademoiselle</option> 
                                          </select>
                                      </p>
                                      <div class="titre"><b style="color:red;">*</b>Prénom:</div>
                                      <p><input placeholder="Prénom" oninput="this.className = ''" name="prenom" required></p>
                                      <div class="titre"><b style="color:red;">*</b>Nom:</div>
                                      <p><input placeholder="Nom" oninput="this.className = ''" name="nom" required></p>
                                      <div class="titre">Entreprise / Institution:</div>
                                      <p><input placeholder="Nom" oninput="this.className = ''" name="entreprise"></p>
                                      <div class="titre">Fonction / Occupation:</div>
                                      <p><input placeholder="Fonction / Occupation" oninput="this.className = ''" name="fonction"></p>
                                      <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:20%; background-color:lightgreen;">
                                          <span class="sr-only"></span>
                                        </div>
                                      </div>
                              </div>

                              <div class="tab">
                                   <div class="titre"><b style="color:red;">*</b>Téléphone Mobile:</div>
                                      <p><input placeholder="Téléphone Mobile" oninput="this.className = ''" name="tel_mobile" required></p>

                                    <div class="titre">Téléphone Whatshap:</div>
                                    <p><input placeholder="Téléphone Whatshap" oninput="this.className = ''" name="tel_whatsap"></p>
                                   
                                    <div class="titre"><b style="color:red;">*</b>Courriel:</div>
                                      <p><input type="email" placeholder="exemple@....." oninput="this.className = ''" name="email" required></p>
                                      
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:40%; background-color:lightgreen;">
                                          <span class="sr-only"></span>
                                        </div>
                                    </div>
                              </div> 

                              <div class="tab">
                                <div class="titre"><b style="color:red;">*</b>Attente 1:</div>
                                <p><input placeholder="Votre réponse" oninput="this.className = ''" name="attente_a" required></p>
                                <div class="titre">Attente 2:</div>
                                <p><input placeholder="Votre réponse" oninput="this.className = ''" name="attente_b"></p>
                                <div class="titre">Attente 3:</div>
                                <p><input placeholder="Votre réponse" oninput="this.className = ''" name="attente_c"></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%; background-color:lightgreen;">
                                      <span class="sr-only"></span>
                                    </div>
                                  </div>
                              </div>

                              <div class="tab">
                                      <p>
                                      <div class="titre"><b style="color:red;">*</b>Choix de la Session:</div>

                                          <div class="check">
                                            <input placeholder="Nom" oninput="this.className = ''" type="radio" value="Dakar-23 au 27 Mars 2020" name="session" ><b style="color:black; font-size:12px;"> Dakar-23 au 27 Mars 2020</b>
                                            <input placeholder="Nom" oninput="this.className = ''" type="radio" value="Ouagadougou-30 Mars au 03 Avril 2020" name="session" ><b style="color:black; font-size:12px;"> Ouagadougou-30 Mars au 03 Avril 2020</b>
                                          </div>
                                      </p>

                                      <p>
                                      <div class="titre"><b style="color:red;">*</b>Je fais le choix Optimal:</div>

                                          <div class="check">
                                            <input placeholder="Nom" oninput="this.className = ''" type="radio" value="Je choisis la formation MasterClass + Art du Focus à 200.000F HT + 25.000 TTC" name="optimal" ><b style="color:black; font-size:12px;"> Je choisis la formation MasterClass + Art du Focus à 200.000F HT + 25.000 TTC</b>
                                            <input placeholder="Nom" oninput="this.className = ''" type="radio" value="Je choisis la formation MasterClass uniquement à 200.000F HT" name="optimal" ><b style="color:black; font-size:12px;"> Je choisis la formation MasterClass uniquement à 200.000F HT</b>
                                          </div>
                                      </p>

                                      <p>
                                      <div class="titre"><b style="color:red;">*</b>Qui finance votre formatin ?:</div>

                                          <div class="check">
                                            <input placeholder="Qui finance votre formatin ?" oninput="this.className = ''" type="radio" value="Mon Entreprise" name="finance" ><b style="color:black; font-size:12px;"> Mon Entreprise</b>
                                            <input placeholder="Qui finance votre formatin ?" oninput="this.className = ''" type="radio" value="Je paie moi-même" name="finance" ><b style="color:black; font-size:12px;"> Je paie moi-même</b>
                                            <input placeholder="Qui finance votre formatin ?" oninput="this.className = ''" type="radio" value="J'ai un(e) sponsor" name="finance" ><b style="color:black; font-size:12px;"> J'ai un(e) sponsor</b>

                                          </div>
                                      </p>
                                        <div class="progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:80%; background-color:lightgreen;">
                                            <span class="sr-only"></span>
                                          </div>
                                        </div>

                                </div> 

                                <div class="tab"> 
                                        <p>
                                        <div class="titre"><b style="color:red;">*</b>Comment réglez-vous cette formation ?:</div>

                                            <div class="check">
                                              <input placeholder="Comment réglez-vous cette formation" oninput="this.className = ''" type="radio" value="Par chèque" name="payement" ><b style="color:black; font-size:12px;"> Par chèque</b>
                                              <input placeholder="Comment réglez-vous cette formation" oninput="this.className = ''" type="radio" value="Par virement bancaire" name="payement" ><b style="color:black; font-size:12px;"> Par virement bancaire</b>
                                              <input placeholder="Comment réglez-vous cette formation" oninput="this.className = ''" type="radio" value="Par mobile money" name="payement" ><b style="color:black; font-size:12px;"> Par mobile money</b>
                                              <input placeholder="Comment réglez-vous cette formation" oninput="this.className = ''" type="radio" value="En  espèces" name="payement" ><b style="color:black; font-size:12px;"> En  espèces</b>
                                              <input placeholder="Comment réglez-vous cette formation" oninput="this.className = ''" type="radio" value="Mon Sponsor" name="payement" ><b style="color:black; font-size:12px;"> Mon Sponsor</b>
                                            </div>
                                        </p>

                                        <p>
                                        <div class="titre"><b style="color:red;">*</b>Comment avez-vous été informé(e) de cette formation:</div>

                                            <div class="check">
                                              <input placeholder="Comment avez-vous été informé(e) de cette formation" oninput="this.className = ''" type="checkbox" name="information" value="Recommandation d'un(e) ami(e)" ><b style="color:black; font-size:12px;"> Recommandation d'un(e) ami(e)</b>
                                              <input placeholder="Comment avez-vous été informé(e) de cette formation" oninput="this.className = ''" type="checkbox" name="information" value="Recommandation d'un(e) participant(e)"><b style="color:black; font-size:12px;"> Recommandation d'un(e) participant(e)</b>
                                              <input placeholder="Comment avez-vous été informé(e) de cette formation" oninput="this.className = ''" type="checkbox" name="information" value="Rechercher Libre sur Internet"><b style="color:black; font-size:12px;"> Rechercher Libre sur Internet</b>
                                              <input placeholder="Comment avez-vous été informé(e) de cette formation" oninput="this.className = ''" type="checkbox" name="information" value="Via les réseaux Sociaux"><b style="color:black; font-size:12px;"> Via les réseaux Sociaux</b>

                                            </div>
                                        </p>
                                        <div class="titre"><b style="color:red;">*</b>Noms et détails de la personne qui vous a recommandé:</div>
                                        <p><input placeholder="Noms et détails de la personne qui vous a recommandé" oninput="this.className = ''" name="nom_recommande"></p>
<!--                                         <div class="titre">Formation:</div>
 -->                                        <p><input placeholder="Nom" oninput="this.className = ''" type="hidden" value="{{$formation->nom_formation}}" name="formation"></p>
<!--                                         <div class="titre">Formation id:</div>
 -->                                        <p><input placeholder="Nom" oninput="this.className = ''" type="hidden" value="{{$formation->id}}" name="formation_id"></p>

                                        <div class="progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%; background-color:lightgreen;">
                                            <span class="sr-only"></span>
                                          </div>
                                        </div> 

                              </div> 
                                <hr>


                            
  
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précedent</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Continuer</button>

                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>

                            </div>
                        </form>
                        <!-- /.MultiStep Form -->
                        </div>
                </section>
            </main>
            <!-- /content -->
            <!-- alerts are for fun of it -->
            
                    </div>

    </div>
  </div>

  <div class="our-team">
    <div class="container">
      <h3>Our Team</h3>
      <div class="text-center">
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <img src="{{asset('images/wiki/team1.JPG')}}" alt="" style="width: 300px; height: 300px;">
          <h4>Team wiki</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <img src="{{asset('images/wiki/team3.JPG')}}" alt="" style="width: 300px; height: 300px;">
          <h4>Team wiki</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
          <img src="{{asset('images/wiki/team2.JPG')}}" alt="" style="width: 300px; height: 300px;">
          <h4>JTeam wiki</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer" style="background-color:lightgreen;">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook" style="color:black;"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter" style="color:black;"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus" style="color:black;"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin" style="color:black;"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube" style="color:black;"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright" style="color:black;">
            &copy; Company Theme. All Rights Reserved.
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              Designed by <a href="http://wiki.com/" style="color:black;">wiki</a></div>
          </div>
        </div>
      </div>
      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script src="{{asset('js/functions.js')}}"></script>
  <script src="{{asset('js/formu.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
