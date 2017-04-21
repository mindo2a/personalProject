<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
	<title>LTdevelopment</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS/contact.css">
</head>
<body>
    <header>
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LTdevelopment</a>
                <ul class="nav navbar-nav navbar-right">
                    <li class="presentation" ><a class="text-uppercase" href="index.html">Žemėlapis</a></li>
                    <li class="presentation" ><a class="text-uppercase" href="projects.html">Projektai</a></li>
                    <li class="presentation" ><a class="text-uppercase" href="about.html">Apie</a></li>
                    <li class="presentation active" ><a class="text-uppercase" href="contact.html">Kontaktai</a></li>
                </ul>           
            </div>
        </nav>
    </header>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="forma">
                        <h2 class="text-center contact-heading text-uppercase">Įkelkite projektą</h2>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                        <!-- virsutine dalis -->
                            <p class="p-style">Projekto pavadinimas<p>
                            <input class="projName" type="text" name="project">
                            <p class="p-style">Miestas</p>
                            <input class="city-top" type="text" name="city">
                            <p class="p-style">Gatvė</p>
                            <input class="vieta" type="text" name="street">
                            <p class="p-style">Platumos kordinatės</p>
                            <input class="vieta" type="text" name="latitude">
                            <p class="p-style">Ilgumos kordinatės</p>
                            <input class="vieta" type="text" name="longitude">
                            <p class="p-style">Data</p>
                            <input class="data" type="text" name="data" placeholder="yyyy-mm-dd"><br>
                            <p class="stat-first">Statusas:</p>
                            <select class="status" name="selector">
                                <option name="Statomas" value="Statomas">Statomas</option>
                                <option name="Planuojamas" value="Planuojamas">Planuojamas</option>
                                <option name="Pastatytas" value="Pastatytas">Pastatytas</option>
                                <option name="Rekonstruojamas" value="Rekonstruojamas">Rekonstruojamas</option>
                            </select>
                            <hr>
                            <!-- Apie Projekta -->
                            <h3>Apie projekta: </h3>
                            <p class="p-style">Projekta vysto</p>
                            <input class="about-prj" type="text" name="develop"
                            >
                            <p class="p-style">Architektas</p>
                            <input class="about-prj" type="text" name="arch">
                            <p class="p-style">Bendras plotas</p>
                            <input class="plotas" type="text" name="bl-size">
                            <p class="p-style">Tipas:</p>
                            <select class="tipas" name="type-selector">
                                <option name= "Komercinis" value="komercinis">Komercinis</option>
                                <option name="Gyvenamieji" value="gyvenamieji">Gyvenamieji</option>
                                <option name="Gamyba/Logistika" value="gamyba">Gamyba/Logistika</option>
                                <option name="Visuomeninis" value="visuomeninis">Visuomeninis</option>
                                <option name="medicina" value="medicina">Sveikatos priežiūra</option>
                                <option name="svietimas" value="svietimas">Švietimo įstaiga</option>
                                <option name="parkas" value="parkai">Parkai</option>
                                <option name="viesos" value="viesos">Viešosios erdvės</option>
                                <option name="transportas" value="transportas">Transportas</option>
                            </select>
                            <p class="p-style">Projekto tinklapis</p>
                            <input class="tinklapis" type="text" name="web-page"><br>
                            <p class="p-style">Projekto aprašas:</p>
                            <textarea class="text-area" name="text" rows="5" cols="75"></textarea>
                            <p class="p-style">Nuotraukos:</p>
                            <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
                            <hr>
                            <h3>Jūsu kontaktai:</h3>
                            <p class="p-style">Vardas/Pavardė</p>
                            <input class="kontaktai" type="text" name="name">
                            <p class="p-style">Įmonė</p>
                            <input class="kontaktai" type="text" name="company">
                            <p class="p-style">Elektroninis paštas</p>
                            <input class="kontaktai" type="email" name="email">
                            <p class="p-style">Telefono numėris</p>
                            <input class="kontaktai" type="text" name="phone">
                            <input class="center-block" type="submit" name="submit" value="Patvirtinti">
                        </form>
                    </div>
                    <div class="contacts">
                    <h2 class="text-center text-uppercase">Susisiekite su mumis</h2>
                      <div class="icons">
                        <a href=""><i class="fa fa-envelope fa-5x"></a></i>
                        <a href=""><i class="fa fa-facebook-square fa-5x"></a></i>
                        <a href=""><i class="fa fa-instagram fa-5x"></a></i>
                      </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    
    $con = mysqli_connect("localhost", "root", "root", "projectdb");

    mysqli_set_charset($con,"utf8");

    if( $con === false ) {
        die ("ERROR: Could not connect. ".mysqli_connect_error());
    } 
    
    if(isset($_POST['submit'])) {
    
    //formos dalis iki apie projekta  
    $project = mysqli_real_escape_string($con, $_POST['project']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $latitude = mysqli_real_escape_string($con, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($con, $_POST['longitude']);
    $data = mysqli_real_escape_string($con, $_POST['data']);  
    $develop = mysqli_real_escape_string($con, $_POST['develop']);
    $arch = mysqli_real_escape_string($con, $_POST['arch']);
    $size = mysqli_real_escape_string($con, $_POST['bl-size']);
    $web_page = mysqli_real_escape_string($con, $_POST['web-page']);
    $text = mysqli_real_escape_string($con, $_POST['text']);


    if(isset($_POST['selector']) and isset($_POST['type-selector'])){
        $selector = $_POST['selector'];
        $type_selector = $_POST['type-selector'];
        $sql = "INSERT INTO place (project,city,street,latitude,longitude,data_,category,develop,arch,size,type,web_page,text_area) VALUES ('$project','$city','$street','$latitude','$longitude','$data','$selector','$develop','$arch','$size','$type_selector','$web_page','$text');";
         mysqli_query($con, $sql);
         $lastPlaceId = mysqli_insert_id ($con);                    
    }
    // formos dalis apie projekta


    // if(isset($_POST['type-selector'])){
    //     $type_selector = $_POST['type-selector'];
    //     $sql .= "INSERT INTO place (develop,arch,size,type,web_page,text_area) VALUES ('$develop','$arch','$size','$type_selector','$web_page','$text');";
    //      mysqli_query($con, $sql);                    
    // }

    // Images upload 
    
    $valid_formats = array("jpg", "png", "gif",);
    $max_file_size = 3*1024*1024; 
    $path = "uploads/"; // Upload directory
    $count = 0;

    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
        // Loop $_FILES to exeicute all files
        foreach ($_FILES['files']['name'] as $f => $name) {     
            if ($_FILES['files']['error'][$f] == 4) {
                continue; // Skip file if any error found
            }          
            if ($_FILES['files']['error'][$f] == 0) {              
                if ($_FILES['files']['size'][$f] > $max_file_size) {
                    $message[] = "$name is too large!.";
                    continue; // Skip large files
                }
                elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
                    $message[] = "$name is not a valid format";
                    continue; // Skip invalid file formats
                }
                else{ // No error found! Move uploaded files 
                    $sql_error = ''; // add this before you start the loop
                    $img_name = $name;

                    if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)){
                      $sql = "INSERT INTO images (image_name,place_id) VALUES ('$img_name', $lastPlaceId)" ;

                      $result = mysqli_query($con, $sql);
                      if ( false===$result ) {
                        $sql_error .= 'Error in the query '.$sql.'  Error Desc :'.mysqli_error($con).'<br /><br />' ;
                      }
                    }
                    }
            }
        }
    } 
    
    $name_lname = mysqli_real_escape_string($con, $_POST['name']);
    $company = mysqli_real_escape_string($con, $_POST['company']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $sql = "INSERT INTO contacts (name,company,email,phone,place_id) VALUES ('$name_lname','$company','$email','$phone','$lastPlaceId')";


    if (mysqli_multi_query($con, $sql)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    }


    mysqli_close($con);
    ?>
</body>
</html>