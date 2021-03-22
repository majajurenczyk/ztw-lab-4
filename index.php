<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!--your custom styles-->
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#">Podróżnicy.pl</a>

      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#quote">Nasze motto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#lastTravels">Ostatnie podróże</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#chart">Wykres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#directions">Kierunki</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#carousel">Pracownicy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#maps">Mapa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontakt</a>
          </li>
        </ul>
        <!-- Left links -->

        <!-- Search form -->
        <form class="d-flex input-group w-auto">
          <input
            type="search"
            class="form-control"
            placeholder="Wpisz coś"
            aria-label="Search"
          />
          <button
            class="btn btn-outline-primary"
            type="button"
            data-mdb-ripple-color="dark"
          >
            Wyszukaj
          </button>
        </form>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div class="bg-image" style="background-image: url('./img/italy.jpg'); height: 100vh;">
    <div class="mask" style="background-color: rgba(95, 94, 94, 0.6)">
      <div class="container-fluid d-flex justify-content-center align-items-center h-100">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="display-4 font-weight-bold text-white pt-5 mb-2">Podróżowanie</h2>
            <hr style="background-color:white; color: white; height: 2px;"/>
            <h4 class="text-white my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, vero ea officia doloremque cupiditate possimus nesciunt a rerum doloribus est, nam architecto natus officiis eius exercitationem corporis numquam. Praesentium, nulla.</h4>
            <button type="button" class="btn btn-outline-light">Dowiedz sie wiecej<i class="fas fa-book mx-1"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->

  <main class="mt-5">
    <div class="container">

      <!--section quote-->
      <section id="quote">
        <?php require "quote.html" ?>
      </section>
      <!--section quote-->

      <hr class="my-5">

      <!--section last travels-->
      <section id="lastTravels" class="text-center">
        <?php require "last_travels.html" ?>
      </section>
      <!--section last travels-->

      <hr class="my-5">

      <!--section chart-->
      <section id="chart">
        <?php require "chart.html" ?>
      </section>
      <!--section chart-->

      <hr class="my-5">

      <!--section directions-->
      <section id="directions">
        <?php require "directions.html" ?>
      </section>
      <!--section directions-->

      <hr class="my-5">

      <!--section faq-->
      <section id="faq">
        <?php require "faq.html" ?>
      </section>
      <!--section faq-->

      <hr class="my-5">

      <!--section carousel-->
      <section id="carousel">
        <?php require "carousel.html" ?>
      </section>
      <!--section carousel-->

      <hr class="my-5">

      <!--section maps-->
      <section id="maps">
        <?php require "maps.html" ?>
      </section>
      <!--section maps-->

      <hr class="my-5">

      <!--section contact-->
      <section id="contact">
        <?php require "contact.html" ?>
      </section>
      <!--section contact-->

      <hr class="my-5">
    </div>
  </main>


  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
  <!--Google Maps-->
  <script src="https://maps.google.com/maps/api/js"></script>

  <!-- Google Maps settings -->
  <script>
    // Regular map
    function regular_map() {
      var var_location = new google.maps.LatLng(51.111608, 17.060327);

      var var_mapoptions = {
        center: var_location,
        zoom: 15
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "Nasza siedziba"
      });
    }
    // Initialize maps
    google.maps.event.addDomListener(window, 'load', regular_map);
  </script>

  <!--chart-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script>
    let myChart = document.getElementById('myChart').getContext('2d');
    Chart.defaults.global.defaultFontSize = 15;
    let dirChart = new Chart(myChart, {
      type: 'bar',
      data:{
        labels:['Bali', 'Nowy Jork', 'Egipt', 'Londyn'],
        datasets:[{
          label:'Podróżnicy',
          data:[
            2000,
            3000,
            4000,
            5000
          ],
          backgroundColor:[
            'cyan',
            'green',
            'red',
            'pink',
            'grey'
          ],
          corderColor: 'grey'
        }]
      },
      options:{
        scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
        },
        legend:{
          display:false
        }
      }
    })
  </script>
  </body>
</html>
