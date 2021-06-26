
<?php
require_once 'actions/db_connect.php';

if  ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM offers WHERE id = {$id}";
   $result = $connect->query($sql);
   if ($result->num_rows == 1) {
       $data = $result->fetch_assoc();
       $name = $data['name'];
       $locationName = $data['locationName'];
       $longitude = $data['longitude'];
       $latitude = $data['latitude'];
       $info= $data['info'];
        $price = $data['price'];
       $picture = $data['picture'];
   } else {
       header( "location: error.php");
   }
   $connect->close();
} else {
   header("location: error.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
       <title> Edit offers </title>
       <?php require_once  'components/boot.php'?>
       <style   type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }  
           .img-thumbnail{
               width: 70px !important;
                height: 70px !important;
           }    
       </style>
   </head>
   <body>
       <fieldset>
           <legend class='h2'> Update request <img class='img-thumbnail rounded-circle'  src='pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></legend >
           <form action ="actions/a_update.php"  method="post"  enctype="multipart/form-data">
                <table class="table">
                   <tr>
                       <th>Name</th>
                       <td><input class ="form-control" type="text"   name="name" placeholder="Name" value="<?php echo $name ?>"/></td>
                   </tr>
                   <tr>
                       <th>Location Name</th>
                       <td><input class ="form-control" type="text"   name="locationName" placeholder="location Name" value="<?php echo $locationName ?>"/></td>
                   </tr>
                   <tr>
                       <th>info</th>
                       <td><input class ="form-control" type="text"   name="info" placeholder="info" value="<?php echo $info ?>"/></td>
                   </tr>
                   <tr>
                       <th>Logitude</th>
                       <td><input class ="form-control" type="text"   name="longitude" placeholder="longitude" value="<?php echo $longitude ?>"/></td>
                   </tr>
                   <tr>
                       <th>Latitute</th>
                       <td><input class ="form-control" type="text"   name="latitude" placeholder="latitute" value="<?php echo $latitude ?>"/></td>
                   </tr>
                   <tr>
                       <th>Price</th>
                        <td><input   class="form-control" type= "number" name="price" step="any"  placeholder="Price" value  ="<?php echo $price ?>"/></td>
                   </tr>
                   <tr>
                       <th>Picture</th >
                       <td><input class= "form-control" type="file"  name= "picture" /></td>
                   </tr>
                   <tr>
                       <input type= "hidden"  name= "id"  value= "<?php echo $data['id'] ?>"/>
                       <input type= "hidden"  value= "picture"  value= "<?php echo $data['picture'] ?>" />
                       <td><button class ="btn btn-success" type = "submit">Save Changes</button></td>
                       <td><a href= "index.php" ><button class ="btn btn-warning" type ="button">Back </button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>