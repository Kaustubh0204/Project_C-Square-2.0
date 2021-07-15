<?php include 'logic.php'; ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>graph</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

</head>

<body onload="loadfun()" style=" font-family: Poppins; font-weight: 700; padding-left: 1vw; background-color: #B2D8D8; ">
    
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

        <form action="graph-m.php" method="post">
          Country: <input list="usernames"   type="text" name="username" id="username">

         <datalist id="usernames">
        
          <option value="Afghanistan">
          <option value="Albania">
          <option value="Algeria">
          <option value="Andorra">
          <option value="Angola">
          <option value="Antigua and Barbuda">
          <option value="Argentina">
          <option value="Armenia">
          <option value="Australia">
          <option value="Austria">
          <option value="Azerbaijan">
          <option value="Bahamas">
          <option value="Bahrain">
          <option value="Bangladesh">
          <option value="Barbados">
          <option value="Belarus">
          <option value="Belgium">
          <option value="Belize">
          <option value="Benin">
          <option value="Bhutan">
          <option value="Bolivia">
          <option value="Bosnia and Herzegovina">
          <option value="Botswana">
          <option value="Brazil">
          <option value="Brunei">
          <option value="Bulgaria">
          <option value="Burkina Faso">
          <option value="Burma">
          <option value="Burundi">
          <option value="Cabo Verde">
          <option value="Cambodia">
          <option value="Cameroon">
          <option value="Canada">
          <option value="Central African Republic">
          <option value="Chad">
          <option value="Chile">
          <option value="China">
          <option value="Colombia">
          <option value="Comoros">
          <option value="Congo (Brazzaville)">
          <option value="Congo (Kinshasa)">
          <option value="Costa Rica">
          <option value="Cote d'Ivoire">
          <option value="Croatia">
          <option value="Cuba">
          <option value="Cyprus">
          <option value="Czechia">
          <option value="Denmark">
          <option value="Diamond Princess">
          <option value="Djibouti">
          <option value="Dominica">
          <option value="Dominican Republic">
          <option value="Ecuador">
          <option value="Egypt">
          <option value="El Salvador">
          <option value="Equatorial Guinea">
          <option value="Eritrea">
          <option value="Estonia">
          <option value="Eswatini">
          <option value="Ethiopia">
          <option value="Fiji">
          <option value="Finland">
          <option value="France">
          <option value="Gabon">
          <option value="Gambia">
          <option value="Georgia">
          <option value="Germany">
          <option value="Ghana">
          <option value="Greece">
          <option value="Grenada">
          <option value="Guatemala">
          <option value="Guinea">
          <option value="Guinea-Bissau">
          <option value="Guyana">
          <option value="Haiti">
          <option value="Holy See">
          <option value="Honduras">
          <option value="Hungary">
          <option value="Iceland">
          <option value="India">
          <option value="Indonesia">
          <option value="Iran">
          <option value="Iraq">
          <option value="Ireland">
          <option value="Israel">
          <option value="Italy">
          <option value="Jamaica">
          <option value="Japan">
          <option value="Jordan">
          <option value="Kazakhstan">
          <option value="Kenya">
          <option value="Korea, South">
          <option value="Kosovo">
          <option value="Kuwait">
          <option value="Kyrgyzstan">
          <option value="Laos">
          <option value="Latvia">
          <option value="Lebanon">
          <option value="Lesotho">
          <option value="Liberia">
          <option value="Libya">
          <option value="Liechtenstein">
          <option value="Lithuania">
          <option value="Luxembourg">
          <option value="MS Zaandam">
          <option value="Madagascar">
          <option value="Malawi">
          <option value="Malaysia">
          <option value="Maldives">
          <option value="Mali">
          <option value="Malta">
          <option value="Marshall Islands">
          <option value="Mauritania">
          <option value="Mauritius">
          <option value="Mexico">
          <option value="Micronesia">
          <option value="Moldova">
          <option value="Monaco">
          <option value="Mongolia">
          <option value="Montenegro">
          <option value="Morocco">
          <option value="Mozambique">
          <option value="Namibia">
          <option value="Nepal">
          <option value="Netherlands">
          <option value="New Zealand">
          <option value="Nicaragua">
          <option value="Niger">
          <option value="Nigeria">
          <option value="North Macedonia">
          <option value="Norway">
          <option value="Oman">
          <option value="Pakistan">
          <option value="Panama">
          <option value="Papua New Guinea">
          <option value="Paraguay">
          <option value="Peru">
          <option value="Philippines">
          <option value="Poland">
          <option value="Portugal">
          <option value="Qatar">
          <option value="Romania">
          <option value="Russia">
          <option value="Rwanda">
          <option value="Saint Kitts and Nevis">
          <option value="Saint Lucia">
          <option value="Saint Vincent and the Grenadines">
          <option value="Samoa">
          <option value="San Marino">
          <option value="Sao Tome and Principe">
          <option value="Saudi Arabia">
          <option value="Senegal">
          <option value="Serbia">
          <option value="Seychelles">
          <option value="Sierra Leone">
          <option value="Singapore">
          <option value="Slovakia">
          <option value="Slovenia">
          <option value="Solomon Islands">
          <option value="Somalia">
          <option value="South Africa">
          <option value="South Sudan">
          <option value="Spain">
          <option value="Sri Lanka">
          <option value="Sudan">
          <option value="Suriname">
          <option value="Sweden">
          <option value="Switzerland">
          <option value="Syria">
          <option value="Taiwan*">
          <option value="Tajikistan">
          <option value="Tanzania">
          <option value="Thailand">
          <option value="Timor-Leste">
          <option value="Togo">
          <option value="Trinidad and Tobago">
          <option value="Tunisia">
          <option value="Turkey">
          <option value="US">
          <option value="Uganda">
          <option value="Ukraine">
          <option value="United Arab Emirates">
          <option value="United Kingdom">
          <option value="Uruguay">
          <option value="Uzbekistan">
          <option value="Vanuatu">
          <option value="Venezuela">
          <option value="Vietnam">
          <option value="West Bank and Gaza">
          <option value="Yemen">
          <option value="Zambia">
          <option value="Zimbabwe">
      </datalist>
          
          </div>
         
         <input  type="submit" class="btn" style="background-color: #006666; color: white;" value="Get graph">
         
    
       </div>
      
      </form>


        <!-- <canvas id="myChart"></canvas>
        <canvas id="myChart1"></canvas>
        <canvas id="myChart2"></canvas> -->
        <!-- <div style="height: 200px; width: 400px; border-style: solid; border-color: black;">
            <canvas id="myChart0" width="400" height="200"></canvas>
        </div>
        <div style="height: 200px; width: 400px; border-style: solid; border-color: black;">
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
        <div style="height: 200px; width: 400px; border-style: solid; border-color: black;">
            <canvas id="myChart1" width="400" height="200"></canvas>
        </div>
        <div style="height: 200px; width: 400px; border-style: solid; border-color: black;">
            <canvas id="myChart2" width="400" height="200"></canvas>
        </div> -->

        <br>
       
                        <div style="height: 265px; width: 350px; border-style: solid; border-color: black;">
                        <canvas id="myChart0" width="350" height="265"></canvas>
                        </div>
                   
                        <div style="height: 265px; width: 350px; border-style: solid; border-color: black;">
                        <canvas id="myChart" width="350" height="265"></canvas>
                        </div>
                   
                        <div style="height: 265px; width: 350px; border-style: solid; border-color: black;">
                        <canvas id="myChart1" width="350" height="265"></canvas>
                        </div>
                    
                        <div style="height: 265px; width: 350px; border-style: solid; border-color: black;">
                        <canvas id="myChart2" width="350" height="265"></canvas>
                        </div>
                  

      <?php  $country = $_POST["username"] ?> 



<?php foreach($data as $key => $value) { ?>
            
            <?php if($key == $country){ ?>
                                
                <script>
                    var ctx0 = document.getElementById('myChart0').getContext('2d');
                    var chart0 = new Chart(ctx0, {
                    // The type of chart we want to create
                    type: 'line',
                
            
                    // The data for our dataset
                    data:   {
                        labels: ['Last 6 days', 'Last 5 days', 'Last 4 days', 'Last 3 days', 'Last 2 days', 'Last 1 day', 'Today'],
                        datasets:   [{
                            label: '<?php echo $key?> | active cases | csquare.ga',
                            backgroundColor: 'rgb(255,219,88)',
                            borderColor: 'rgb(184,134,11)',
                            data: [<?php echo $value[$days_count-6]['confirmed']-$value[$days_count-7]['confirmed'];?>, <?php echo $value[$days_count-5]['confirmed']-$value[$days_count-6]['confirmed'];?>, <?php echo $value[$days_count-4]['confirmed']-$value[$days_count-5]['confirmed'];?>, <?php echo $value[$days_count-3]['confirmed']-$value[$days_count-4]['confirmed'];?>, <?php echo $value[$days_count-2]['confirmed']-$value[$days_count-3]['confirmed'];?>, <?php echo $value[$days_count-1]['confirmed']-$value[$days_count-2]['confirmed'];?>, <?php echo $value[$days_count]['confirmed']-$value[$days_count-1]['confirmed'];?>]
                                    }]
                            },


                

                    // Configuration options go here
                    options: {}
                    
                    });
                
                </script>
                
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',
                
            
                    // The data for our dataset
                    data:   {
                        labels: ['Last 6 days', 'Last 5 days', 'Last 4 days', 'Last 3 days', 'Last 2 days', 'Last 1 day', 'Today'],
                        datasets:   [{
                            label: '<?php echo $key?> | confirmed cases | csquare.ga',
                            backgroundColor: 'rgb(255,179,222)',
                            borderColor: 'rgb(209,0,71)',
                            data: [<?php echo $value[$days_count-6]['confirmed'];?>, <?php echo $value[$days_count-5]['confirmed'];?>, <?php echo $value[$days_count-4]['confirmed'];?>, <?php echo $value[$days_count-3]['confirmed'];?>, <?php echo $value[$days_count-2]['confirmed'];?>, <?php echo $value[$days_count-1]['confirmed'];?>, <?php echo $value[$days_count]['confirmed'];?>]
                                    }]
                            },


                

                    // Configuration options go here
                    options: {}
                    
                    });
                
                </script>

                <script>
                    var ctx1 = document.getElementById('myChart1').getContext('2d');
                    var chart1 = new Chart(ctx1, {
                    // The type of chart we want to create
                    type: 'line',
                
            
                    // The data for our dataset
                    data:   {
                        labels: ['Last 6 days', 'Last 5 days', 'Last 4 days', 'Last 3 days', 'Last 2 days', 'Last 1 day', 'Today'],
                        datasets:   [{
                            label: '<?php echo $key?> | recovered cases | csquare.ga',
                            backgroundColor: 'rgb(173,255,47)',
                            borderColor: 'rgb(100,140,17)',
                            data: [<?php echo $value[$days_count-6]['recovered'];?>, <?php echo $value[$days_count-5]['recovered'];?>, <?php echo $value[$days_count-4]['recovered'];?>, <?php echo $value[$days_count-3]['recovered'];?>, <?php echo $value[$days_count-2]['recovered'];?>, <?php echo $value[$days_count-1]['recovered'];?>, <?php echo $value[$days_count]['recovered'];?>]
                                    }]
                            },

                

                    // Configuration options go here
                    options: {}
                    
                    });
                
                </script>
                <script>
                    var ctx2 = document.getElementById('myChart2').getContext('2d');
                    var chart2 = new Chart(ctx2, {
                    // The type of chart we want to create
                    type: 'line',
                
            
                    // The data for our dataset
                    data:   {
                        labels: ['Last 6 days', 'Last 5 days', 'Last 4 days', 'Last 3 days', 'Last 2 days', 'Last 1 day', 'Today'],
                        datasets:   [{
                            label: '<?php echo $key?> | deaths cases | csquare.ga',
                            backgroundColor: '#777777',
                            borderColor: '#000000',
                            data: [<?php echo $value[$days_count-6]['deaths'];?>, <?php echo $value[$days_count-5]['deaths'];?>, <?php echo $value[$days_count-4]['deaths'];?>, <?php echo $value[$days_count-3]['deaths'];?>, <?php echo $value[$days_count-2]['deaths'];?>, <?php echo $value[$days_count-1]['deaths'];?>, <?php echo $value[$days_count]['deaths'];?>]
                                    }]
                            },

                

                    // Configuration options go here
                    options: {}
                    
                    });
                
                </script>




            <?php } ?>

        <?php }?>
</body>
</html>


<!-- <div style="height: 200px; width: 400px; border-style: solid; border-color: black; background-color: teal;">
    <canvas id="myChart1" width="400" height="200"></canvas>
</div> -->