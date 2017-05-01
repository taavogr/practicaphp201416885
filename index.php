  <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Practica PHP</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">PRACTICA DE PHP</h1>
        <div class="row center">
          
        </div>

        <br><br>

      </div>
    </div>

  
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
      <div class="col s12 center">
      
      <h4>Lista de Servicios</h4>

        
            <table class="centered striped">
           <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><?php echo $row['nombre_servicio']?></td>
      <td><?php echo $row['descripcion_servicio']?></td>
      <td><img src="<?php echo $row['imagen_servicio']?>"></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
      
 </table>
</div>
    </div>
</div>


  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>SOLUCIONES MOVILES Y CLOUD</h4>
            
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">UPC-VILLA</h5>
          <p class="grey-text text-lighten-4">Demo desarrollada para el curso de Soluciones Móviles y Cloud de la carrera de Ingeniería de Sistemas de Información</p>


        </div>

        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="http://www.upc.edu.pe/">UPC Web</a></li>
            <li><a class="white-text" href="https://www.ibm.com/cloud-computing/bluemix/es/cloud-servers?cm_mmc=Search_Google-_-IBMCloudBluemixMarketing_Brand-_-LA-LA-_-LA-LA-Spanish-Peru-Search-Google-Brand-BM-%2Bbluemix-b&utm_source=google&utm_medium=cpc&utm_content=Brand%20-%20Spanish%20-%20Bluemix&utm_campaign=LA_-_LA_-_Spanish_-_Peru_-_Search_-_Google_-_Brand_-_BM&utm_term=%2Bbluemix&matchtype=b&_bt=191688595598&_bk=%2Bbluemix&_bm=b&adgroup=Brand%20-%20Spanish%20-%20Bluemix&utm_id=636_181332_191688595598_c&ksaffcode=181332&ksprofileID=636&ksdevice=c">Bluemix</a></li>
            <li><a class="white-text" href="https://www.facebook.com/gustavo.retamozofalcon">Desarrollador</a></li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="https://www.linkedin.com/in/gustavo-retamozo-falcon-411583112/">Gustavo</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>



