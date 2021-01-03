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
        <li><a href="/formations/create">Ajouter Formation</a></li>
      </div>
    </div>
  </div>

  <div class="aboutus">
    <div class="container">
    <center><h3>Les Formations</h3></center>
      <hr>
                    <div class="container-fluid col-md-12 col-md-offset-0" style="margin-top:-50px;">
                        <!-- MultiStep Form -->
                            <table>
                            
                            <section id="main-content">
      <section class="wrapper">
      <center>
      <table class="table table-bordered" style="margin-top:50px;">

@foreach ($formations as $formation)

<tr>

        <td style="font-size:12px; color:black;">{{ $formation->date }}</td>
        <td style="font-size:12px; color:black;">{{ $formation->nom_formation }}</td>
        <td style="font-size:12px; color:black;">{{ $formation->lieu }}</td>
        <td style="font-size:12px; color:black;">{{ $formation->horaire }}</td>

    <td style="width:100px;">
        <a class="btn btn-primary" href="{{ route('formations.show',$formation->id) }}" style="background-color:lightgreen;">Je m'inscris</a>
    </td>

</tr>

@endforeach

</table>

</center>

        <!-- /row -->
      </section>
    </section>

                            </table>
                        <!-- /.MultiStep Form -->
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
