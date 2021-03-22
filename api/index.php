<?php
if($_GET["jd"] == true){
  header('Content-Type: application/json');
}


if($_POST["jd"] == true){
  header('Content-Type: application/json');
}



/*echo json_encode(array(
 "error" => true,
 "msg" => "No api avalible please contact @csoftwarecf on twitter if this is a bug."
));
exit(); */

include("../internal/server.php");
include("../internal/configure.php");

$function = strip_tags(stripslashes($_GET['function']));
$sandbox = strip_tags(stripslashes($_GET['sb']));





switch($function){

    case "addtomap":
        addtomap($db);
    break;
    case "listalllocations":
      listalllocations($db);
    break;
    case "ping":
      echo json_encode(array(
  
        "ping" => "pong"
  
    ));
    break;
      case "do you watch me sleep":
        echo json_encode(array(
    
          "answer" => "yes i do"
    
        ));
        break;
        case "who made you":
          echo json_encode(array(
      
            "creator" => "kessan robertson (bluethefox)"
      
          ));
          break;
    
}




function addtomap($db){
ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3');
$sb = strip_tags(stripslashes($_GET['sb']));
$cn = strip_tags(stripslashes(htmlspecialchars ($_GET['company'])));
$address = strip_tags(stripslashes($_GET['address']));
$website = strip_tags(stripslashes($_GET['website']));
$cat = strip_tags(stripslashes($_GET['category']));
$description = strip_tags(stripslashes(htmlspecialchars($_GET['description'])));
$websiteerror = false;


if(!$description){
  echo json_encode(array(
    "error" => true,
    "msg" => "You are missing a required parameter."
  
  ));
  $websiteerror = true;
  }
  if(!$address){
    echo json_encode(array(
      "error" => true,
      "msg" => "You are missing a required parameter."
    
    ));
    $websiteerror = true;
    }
    if(!$cn){
      echo json_encode(array(
        "error" => true,
        "msg" => "You are missing a required parameter."
      
      ));
      $websiteerror = true;
      }

       
  
    $content = file_get_contents('http://nominatim.openstreetmap.org/?format=json&addressdetails=1&q='.urlencode($address).'&format=json&limit=1');
    file_put_contents("recent.txt", 'http://nominatim.openstreetmap.org/?format=json&addressdetails=1&q='.urlencode($address).'&format=json&limit=1');
    // We convert the JSON to an array
    $geoo = json_decode($content, true);

 
    // If everything is cool
   
       $latitude = $geoo[0]['lat'];
       $longitude = $geoo[0]['lon'];
       if($content['status'] = 'OK'){
       if(!$latitude){
         echo json_encode(array(

          "error" => true,
          "msg" => "This location dosent exist according to OSM check the address and try again try removing the house number or unit number and place the full address in the description the address box is for the address but also the lat and lon."

         ));
         $websiteerror = true;
         
       }else{

       }
       }
    
   
    $sql = "INSERT INTO locations (`name`, `description`, `address`, `category`,`long`,`lat`,`website`)
    VALUES ('$cn', '$description', '$address','$category','$longitude','$latitude','$website')";
    
  if($websiteerror){exit();}
    if (mysqli_query($db, $sql)) {
      echo json_encode(array(

        "error"=> false,
        "msg" => "SUCCESS"

      ));
    } else {
       echo json_encode(array(

            "error"=> true,
            "msg" => mysqli_error($db)
    
          ));
    }
  }



function listalllocations($db){
    $query = "SELECT * FROM `locations`";
    $result = mysqli_query($db, $query);
    while ($data = mysqli_fetch_array($result)) {
        $da[] = $data;
    }
    echo json_encode($da);
}



function submitreview(){

}




?>