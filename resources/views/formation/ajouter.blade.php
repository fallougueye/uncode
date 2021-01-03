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
        <li>Formations</li>
      </div>
    </div>
  </div>

  <div class="aboutus">
    <div class="container">
    <center><h3>Formations</h3></center>
      <hr>
                    <div class="container-fluid col-md-12 col-md-offset-0" style="margin-top:-160px;">
                        <!-- MultiStep Form -->
                        <h6> @if (session('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('message') }}
                                            </div>  
                                        @endif</h6>
                <main class="content" role="content">
                <section id="section1">
                    <div class="container-fluid col-md-6 col-md-offset-3">                           
                        <form id="regForm" method="post" action="{{route('formations.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h1>Formulaire Formations</h1>
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">
                                <div class="titre"><b style="color:red;">*</b>Formation:</div>
                                <p><input placeholder="Formation" oninput="this.className = ''" name="nom_formation" required></p>
                                <div class="titre"><b style="color:red;">*</b>Date de la Formation:</div>
                                <p><input type="date" placeholder="Date de la Formation" oninput="this.className = ''" name="date" required></p>
                                <div class="titre"><b style="color:red;">*</b>Lieux:</div>
                                <p><input placeholder="Lieux" oninput="this.className = ''" name="lieu" required></p>
                                <div class="titre"><b style="color:red;">*</b>Horaire:</div>
                                <p><input placeholder="Horaire" oninput="this.className = ''" name="horaire" required></p>
                                <div class="titre">Public Ciblé:</div>
                                <p><input placeholder="Public ciblé" oninput="this.className = ''" name="public_cible"></p>
                                <div class="titre">Programme:</div>
                                <p><input placeholder="Programme" oninput="this.className = ''" name="programme"></p>
                                <div class="titre"><b style="color:red;">*</b>Catégorie:</div>
                                <select name="categorie" required>
                                        <option selected>--Selectionner Catégorie--: </option>
                                        @foreach($categories as $categorie)
                                        <option value="{{$categorie->nom_cate}}">{{$categorie->nom_cate}}</option> 
                                        @endforeach
                                    </select>                               
                                <hr>


                            </div>
  
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="submit" style="background-color:lightgreen;">Enregistrer</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                
                          </div>

                        </form>
                        <!-- /.MultiStep Form -->
                        </div>
                </section>
            </main>
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


</body>

</html>
