<?php  include 'logic.php'; ?>
<?php 
  error_reporting(0); 
  file_put_contents("databas.json", "");
  $text1 .="{\n".'"data":[' ."\n";
  $textend .='{}]}';
  $fh = fopen('databas.json', "a") or die("Could not open log file.");
  fwrite($fh, $text1) or die("Could not write file!");
  foreach($data as $key=> $value) 
  $text .= '{'.'"name":'.'"'.$key.'"'.",\n".'"confirmed":'.$value[$days_count]['confirmed'].",\n".'"recovered":'.$value[$days_count]['recovered'].",\n".'"deaths":'.$value[$days_count]['deaths'].",\n".'"confirmedm1":'.$value[$days_count-1]['confirmed'].",\n".'"recoveredm1":'.$value[$days_count-1]['recovered'].",\n".'"deathsm1":'.$value[$days_count-1]['deaths'].",\n".'"confirmedm2":'.$value[$days_count-2]['confirmed'].",\n".'"recoveredm2":'.$value[$days_count-2]['recovered'].",\n".'"deathsm2":'.$value[$days_count-2]['deaths'].",\n".'"confirmedm3":'.$value[$days_count-3]['confirmed'].",\n".'"recoveredm3":'.$value[$days_count-3]['recovered'].",\n".'"deathsm3":'.$value[$days_count-3]['deaths'].",\n".'"confirmedm4":'.$value[$days_count-4]['confirmed'].",\n".'"recoveredm4":'.$value[$days_count-4]['recovered'].",\n".'"deathsm4":'.$value[$days_count-4]['deaths'].",\n".'"confirmedm5":'.$value[$days_count-5]['confirmed'].",\n".'"recoveredm5":'.$value[$days_count-5]['recovered'].",\n".'"deathsm5":'.$value[$days_count-5]['deaths'].",\n".'"confirmedm6":'.$value[$days_count-6]['confirmed'].",\n".'"recoveredm6":'.$value[$days_count-6]['recovered'].",\n".'"deathsm6":'.$value[$days_count-6]['deaths'].",\n".'"confirmedm7":'.$value[$days_count-7]['confirmed'].",\n".'"recoveredm7":'.$value[$days_count-7]['recovered'].",\n".'"deathsm7":'.$value[$days_count-7]['deaths']."\n },\n";;
  fwrite($fh, $text) or die("Could not write file!");
  fwrite($fh, $textend) or die("Could not write file!");
  fclose($fh); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>

      <link rel="icon" href="assets/logo.png" type="image/icon type">

      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <!-- Mapbox -->
      <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
      <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />

      <!-- Data Tables -->
      <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
      <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

      <!-- Font Awesome -->
      <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">


      <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->


  </head>

  <body onload="loadfun()" style=" background-color: #66B2B2; font-family: Poppins; font-weight: 700; overflow: hidden;">


  <cool-ad>
  <template class="ad__mobile" style="color:black;">
  <nav class="navbar navbar-light" style="background-color: #008080;">
      <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-weight:700;">
            <img src="assets/logo.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
          </a>

          <div>
          <i class="fas fa-globe" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="font-size: 2rem; margin-left: 1vw;"></i>
          <i class="fas fa-chart-bar"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="font-size: 2rem; margin-left: 1vw;"></i>
          <i class="fas fa-info-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" style="font-size: 2rem; margin-left: 1vw;"></i>  
          <a href="/logout.php"><i style="color: #212529; font-size: 2rem; margin-left: 1vw;"  class="fas fa-sign-out-alt"></i></a>
        </div>
      </div>
    </nav>

    <div class="spinner-border" style="z-index: 2; color: teal; position: absolute; top: 50%; left: 50%;" id="loading" role="status">
    <span class="visually-hidden">Loading...</span>
    </div>

    <script>
    var load = document.getElementById("loading");
    function loadfun()
    {
      load.style.display='none';
    }
    </script>
    

  <div class="dropend" style="margin-top: 0.2vw; margin-left: 2.5vw; margin-bottom: 0.2vw;">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-cog"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <div id="menu" style="padding: 0.3vw; ">
    <input id="streets-v11" type="radio" name="rtoggle" value="streets"checked="checked" >
    <label for="streets-v11">streets</label>
    <input id="dark-v10" type="radio" name="rtoggle" value="dark">
    <label for="dark-v10">dark</label>
    <input id="light-v10" type="radio" name="rtoggle" value="light">
    <label for="light-v10">light</label>
    <input id="satellite-v9" type="radio" name="rtoggle" value="satellite">
    <label for="satellite-v9">satellite</label>

    </div>
    </ul>
  </div>


  <div class="container" style="position: absolute; height: 100%; border-style: solid; border-color: black; padding:0px; margin: 1vw;">
    <div id='map' style='width: 100%; height: 100%;'>
          <div class="card" style="position: absolute; bottom:15%; right: 0%; z-index: 1; margin: 1vw; background-color: rgba(255, 255, 255, 0); border-style: solid; border-color: rgba(255, 255, 255, 0);">
          <img src="assets/legend.png" width="120px" height="120px" >
          </div>

         
    
    <div class="card text-white bg-danger mb-3" style="width: 37%; z-index: 1; margin: 0.5vw; font-family: Poppins; font-weight: 700;">
            <div class="card-header">Confirmed cases</div>
            <div class="card-body">
              <h5 class="card-title" style="font-weight: 700;"><?php echo $total_confirmed;?></h5>
            </div>
          </div>
   
   
    <div class="card text-white bg-success mb-3" style="width: 37%; z-index: 1; margin: 0.5vw; font-family: Poppins; font-weight: 700;">
            <div class="card-header">Recovered cases</div>
            <div class="card-body">
              <h5 class="card-title" style="font-weight: 700;"><?php echo $total_recovered;?></h5>
            </div>
          </div>

    
   
    <div class="card text-white bg-dark mb-3" style="width: 37%;  z-index: 1; margin: 0.5vw; font-family: Poppins; font-weight: 700;">
            <div class="card-header">Deaths reported</div>
            <div class="card-body">
              <h5 class="card-title" style="font-weight: 700;"><?php echo $total_deaths;?></h5>
            </div>
          </div>
    

          

          
         
 
        <script type="module" src="app2.js"></script>
        <style>
  /* Marker tweaks */

  .mapboxgl-popup-content {
    font-family: Poppins;
    padding: 1vw;
    width: 180px;
    border-radius: 1vw;
  }

  .mapboxgl-popup-content-wrapper {
    padding: 1vw;
  }

  .mapboxgl-popup-content h3 {

    color: teal;
    margin-top: 1vw;
    display: block;
    padding-top: 3vw;
    padding-bottom: 1vw;
    border-radius: 3px 3px 0 0;
    font-weight: 700;
    font-size: 22px;
    margin-top: -15px;
  }

  .mapboxgl-popup-content h4 {
    margin: 0;
    display: block;
    font-size: 18px;
    font-weight: 400;
    color: red;
  }

  .mapboxgl-popup-content h5 {
    margin: 0;
    display: block;
    font-size: 18px;
    font-weight: 400;
    color: green;
  }

  .mapboxgl-popup-content h6 {
    margin: 0;
    display: block;
    font-size: 18px;
    font-weight: 400;
    color: black;
  }
  /* .mapboxgl-popup-content div {
    padding: 1vw;
  }

  .mapboxgl-container .leaflet-marker-icon {
    cursor: pointer;
  }

  .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
    margin-top: 15px;
  }

  .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
    border-bottom-color: #91c949;
  } */
</style>
    
    </div>
  </div>
  
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 100%; background-color: #B2D8D8;" >
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">C-Square</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

    <div class="container-fluid">
      <div class="table-responsive">
          <table class="table" id="myTable">
              <thead class="thead-secondary">
                  <tr>
                      <th scope="col">Countries</th>
                      <th scope="col">Confirmed</th>
                      <th scope="col">Recovered</th>
                      <th scope="col">Deceased</th>
                  </tr>
              </thead>
              <tbody class="text-dark">
                  <?php
                      foreach($data as $key => $value){
                          $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                  ?>
                      <tr>
                          <th scope="row"><?php echo $key?> <?php if($increase != 0){ ?>
                                  <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                              <?php } ?></th> 
                          <td>
                              <?php echo $value[$days_count]['confirmed'];?>
                                  
                          </td>
                          <td><?php echo $value[$days_count]['recovered'];?></td>
                          <td><?php echo $value[$days_count]['deaths'];?></td>
                      </tr>
                  <?php }?>
              </tbody>
          </table>
      </div>
  </div>

 
    


    </div>
  </div>



  <div class="offcanvas offcanvas-bottom"  tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height: 74%; background-color: #B2D8D8;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasBottomLabel">About Us</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body small" style="padding: 0px;">
    
    <iframe width="100%" height="465" src="aboutus.html" frameborder="0" scrolling="auto" allowfullscreen></iframe>
    
  </div>
</div>



<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 100%; background-color: #B2D8D8; overflow: hidden;">
  <div class="offcanvas-header" style="padding-bottom:0px;">
    <h5 id="offcanvasRightLabel">C-Square</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" style="overflow: hidden;">
    



      <iframe width="100%" height="100%" src="graph-m.php" frameborder="0" scrolling="auto" allowfullscreen></iframe>





  </div>
</div>
  </template>
  <template class="ad__desktop">
  <nav class="navbar navbar-light" style="background-color: #008080;">
      <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-weight:700;">
            <img src="assets/logo.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
          </a>

          <div>
          
          <i class="fas fa-globe"  data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="font-size: 2rem; margin: 0.5vw;"></i>
          <i class="fas fa-chart-bar"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="font-size: 2rem; margin: 0.5vw;"></i>
          <i class="fas fa-info-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" style="font-size: 2rem; margin: 0.5vw;"></i>  
          <a href="/logout.php"><i style="color: #212529; font-size: 2rem; margin: 0.5vw;"  class="fas fa-sign-out-alt"></i></a>

        </div>
      </div>
    </nav>

    <div class="spinner-border" style="z-index: 2; color: teal; position: absolute; top: 50%; left: 50%;" id="loading" role="status">
    <span class="visually-hidden">Loading...</span>
    </div>

    <script>
    var load = document.getElementById("loading");
    function loadfun()
    {
      load.style.display='none';
    }
    </script>
    

  <div class="dropend" style="margin-top: 0.2vw; margin-left: 2.5vw; margin-bottom: 0.2vw;">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-cog"></i>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <div id="menu" style="padding: 0.3vw; ">
    <input id="streets-v11" type="radio" name="rtoggle" value="streets"checked="checked" >
    <label for="streets-v11">streets</label>
    <input id="dark-v10" type="radio" name="rtoggle" value="dark">
    <label for="dark-v10">dark</label>
    <input id="light-v10" type="radio" name="rtoggle" value="light">
    <label for="light-v10">light</label>
    <input id="satellite-v9" type="radio" name="rtoggle" value="satellite">
    <label for="satellite-v9">satellite</label>
    <input id="outdoors-v11" type="radio" name="rtoggle" value="outdoors">
    <label for="outdoors-v11">outdoors</label>
    </div>
    </ul>
  </div>


  <div class="container" style=" border-style: solid; border-color: black; padding:0px; margin-bottom: 1vw; margin-top: 0px;">
    <div id='map' style='width: 100%; height: 100%;'>
          <div class="card" style="position: absolute; right: 0%; z-index: 1; margin: 1vw; background-color: rgba(255, 255, 255, 0); border-style: solid; border-color: rgba(255, 255, 255, 0);">
          <img src="assets/legend.png" width="200px" height="200px" >
          </div>

          <div class="card text-white bg-danger mb-3" style="max-width: 18rem; z-index: 1; margin: 1vw; font-family: Poppins; font-weight: 700;">
              <div class="card-header">Confirmed cases</div>
              <div class="card-body">
                <h5 class="card-title" style="font-weight: 700;">Confirmed</h5>
                <h4 style="font-weight: 700;"><?php echo $total_confirmed;?></h4>
                <p class="card-text" style="font-size: 10.5px; font-weight: 300;">Here is the count of confirmed COVID-19 cases which were reported from all over the world.</p>
              </div>
          </div>
         

          <div class="card text-white bg-success mb-3" style="max-width: 18rem; z-index: 1; margin: 1vw; font-family: Poppins; font-weight: 700;">
            <div class="card-header">Recovered cases</div>
            <div class="card-body">
              <h5 class="card-title" style="font-weight: 700;">Recovered</h5>
              <h4 style="font-weight: 700;"><?php echo $total_recovered;?></h4>
              <p class="card-text" style="font-size: 10.5px; font-weight: 300;">Here is the count of recovered COVID-19 cases which were reported from all over the world.</p>
            </div>
        </div>

        <div class="card text-white bg-dark mb-3" style="max-width: 18rem; z-index: 1; margin: 1vw; font-family: Poppins; font-weight: 700;">
          <div class="card-header">Deaths reported</div>
          <div class="card-body">
            <h5 class="card-title" style="font-weight: 700;">Deaths</h5>
            <h4 style="font-weight: 700;"><?php echo $total_deaths;?></h4>
            <p class="card-text" style="font-size: 10.5px; font-weight: 300;">Here is the count of deaths caused by COVID-19 which were reported from all over the world.</p>
          </div>
        </div>

        <script type="module" src="app2.js"></script>
        <style>
  /* Marker tweaks */

  .mapboxgl-popup-content {
    font-family: Poppins;
    padding: 1vw;
    width: 180px;
    border-radius: 1vw;
  }

  .mapboxgl-popup-content-wrapper {
    padding: 1vw;
  }

  .mapboxgl-popup-content h3 {

    color: teal;
    margin: 0;
    display: block;
    padding-top: 1vw;
    padding-bottom: 1vw;
    border-radius: 3px 3px 0 0;
    font-weight: 700;
    font-size: 22px;
    margin-top: -15px;
  }

  .mapboxgl-popup-content h4 {
    margin: 0;
    display: block;
    font-size: 18px;
    font-weight: 400;
    color: red;
  }

  .mapboxgl-popup-content h5 {
    margin: 0;
    display: block;
    font-size: 18px;
    font-weight: 400;
    color: green;
  }

  .mapboxgl-popup-content h6 {
    margin: 0;
    display: block;
    font-size: 18px;
    font-weight: 400;
    color: black;
  }
  /* .mapboxgl-popup-content div {
    padding: 1vw;
  }

  .mapboxgl-container .leaflet-marker-icon {
    cursor: pointer;
  }

  .mapboxgl-popup-anchor-top > .mapboxgl-popup-content {
    margin-top: 15px;
  }

  .mapboxgl-popup-anchor-top > .mapboxgl-popup-tip {
    border-bottom-color: #91c949;
  } */
</style>
    
    </div>
  </div>
  
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 50%; background-color: #B2D8D8;" >
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">C-Square</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

    <div class="container-fluid">
      <div class="table-responsive">
          <table class="table" id="myTable">
              <thead class="thead-secondary">
                  <tr>
                      <th scope="col">Countries</th>
                      <th scope="col">Confirmed</th>
                      <th scope="col">Recovered</th>
                      <th scope="col">Deceased</th>
                  </tr>
              </thead>
              <tbody class="text-dark">
                  <?php
                      foreach($data as $key => $value){
                          $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                  ?>
                      <tr>
                          <th scope="row"><?php echo $key?> <?php if($increase != 0){ ?>
                                  <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                              <?php } ?></th> 
                          <td>
                              <?php echo $value[$days_count]['confirmed'];?>
                                  
                          </td>
                          <td><?php echo $value[$days_count]['recovered'];?></td>
                          <td><?php echo $value[$days_count]['deaths'];?></td>
                      </tr>
                  <?php }?>
              </tbody>
          </table>
      </div>
  </div>

 
    


    </div>
  </div>



  <div class="offcanvas offcanvas-bottom"  tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height: 74%; background-color: #B2D8D8;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasBottomLabel">About Us</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body small" style="padding: 0px;">
    
    <iframe width="100%" height="465" src="aboutus.html" frameborder="0" scrolling="auto" allowfullscreen></iframe>
    
  </div>
</div>



<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 58%; background-color: #B2D8D8; overflow: hidden;">
  <div class="offcanvas-header" style="padding-bottom:0px;">
    <h5 id="offcanvasRightLabel">C-Square</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" style="overflow: hidden;">
    



      <iframe width="100%" height="100%" src="graph.php" frameborder="0" scrolling="auto" allowfullscreen></iframe>





  </div>
</div>
  </template>
</cool-ad>


<script>
  class AdComponent extends HTMLElement {
    connectedCallback() {
      const isMobile = matchMedia('(max-width: 700px)').matches;    
      const ad = document.currentScript.closest('.ad');
      const content = this
        .querySelector(isMobile ? '.ad__mobile' : '.ad__desktop')
        .content;
      
      this.appendChild(document.importNode(content, true));
    }
  }
  
  customElements.define('cool-ad', AdComponent);
  </script>

   <!-- Data Tables -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
          integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
          crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
          integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
          crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script class="text-light">
          $(document).ready(function() {
          $('#myTable').DataTable( {
              "order": [[ 3, "desc" ]]
          } );
      } );
    </script>
</body>
</html>

  

   

    
  </body>
</html>