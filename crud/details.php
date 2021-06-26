<?php require_once 'nav.php'

?>
<?php require_once 'actions/db_connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM offers WHERE id = {$id}";

$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result) > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
       $tbody .= "

       <div class='col'>
       <div class='card m-5'>
       
         <div class='card-body text-center'>
         <p><img class='card-img-top' src='./pictures/" .$row['picture']."'</p>
         <h5>".$row['name']."</h5>
         <p> info : ".$row['info']."</p>
         <p> location : ".$row['locationName']."</p>
        
         
           <h5 class='card-title'> Price : ".$row['price']."</h5>
           
           <a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
         <a href='../crud/delet.php?id=" .$row['id']."'><button class='btn btn-dark btn-sm' type='button'>Delete</button></a>
         <a href='../crud/index.php?id=" .$row['id']."'><button class='btn btn-warning btn-sm' type='button'>Back</button></a>
         
         
         </div>
       </div>
     </div><div id='map'></div>
     <script>
     
         var map;
     
         function initMap() {
     
             map = new google.maps.Map(document.getElementById('map'), {
     
             center: {lat: 48.20849, lng: 16.37208}, zoom: 8
     
             });
     
         }
     
     </script>
     
     <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap' async defer></script>
     
     <script>
     
     var map;
     
     function initMap() {
     
     var vienna = {
     
     lat: ".$row['latitude'].",
     
     lng: ".$row['longitude']."
    
     };
     
     map = new google.maps.Map(document.getElementById('map'), {
     
     center: vienna,
     
     zoom: 8
     
     });
     
     var pinpoint = new google.maps.Marker({
     
     position: vienna,
     
     map: map
     
     });
     
     }
     </script>";
   };
} else {
   $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
};

$connect->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
    .manageProduct {
        margin: auto;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }

    td {
        text-align: left;
        vertical-align: middle;

    }

    tr {
        text-align: center;
    }
    </style>
</head>

<body>

    <div class="manageProduct w-75 mt-3">

        <p class='h2'></p>

        <div class="container">


            <h5 class="card-title  owntitle"></h5>
            <div class="row row-cols-1 row-cols-md-2 g-4">

                <!-- dynamic cards -->
                <?= $tbody;?>

            </div>
        </div>
    </div>
    

</body>

</html>