<?php require_once 'nav.php'

?>
<?php require_once 'actions/db_connect.php';

$sql = "SELECT * FROM offers";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
       $tbody .= "

       <div class='col'>
       <div class='card m-5'>
       
         <div class='card-body text-center'>
         <p><img class='card-img-top' src='./pictures/" .$row['picture']."'</p>
         <h5 class='ownstyle'>".$row['name']."</h5>
         
           <p class='card-title'> Price : ".$row['price']."</p>
         <a href='../crud/details.php?id=".$row['id']."'><button class='btn btn-dark btn-sm' type='button'>Details</button></a>
         </div>
       </div>
     </div>";
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>PHP CRUD</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
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

    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css");
    @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');

    .manageProduct {
        margin: auto;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;

    }

    .h2 {
        color: white;
        display: inline;
    }


    .h5 {
        color: white;

        border-bottom: 3px solid #fff;
        font-size: 30px;
    }

    .owntitle {
        color: white;
        display: inline;


        font-size: 30px;
    }

    td {
        text-align: left;
        vertical-align: middle;
    }

    tr {
        text-align: center;
        color: black !important;

    }

    img {
        height: 300px;


    }

    .h3 {
        text-align: center;
        color:  !important;
        /* background-color: #f9dd94; */

        font-size: 80px;
        padding: 1rem;
        font-weight: 300 !important;
        font-family: 'Tangerine', serif;

    }

    a {
        color: black !important;

    }

    .ownfooter {
        text-align: center !important;
        color: white !important;



    }

    h2,
    h5 {
        color: black !important;

    }

    .ownstyle {
        font-family: 'Tangerine', serif;
        font-weight: 600 !important;
    }

    p {
        text-align: center;
        color: black;
    }


    .textColor {
        text-align: center !important;
        font-family: 'Tangerine', serif;
        color: black;
        font-weight: 600 !important;
    }



    body {}

    .card_img_header {

        object-fit: cover;

    }

    .card_img_section {
        object-fit: cover;
        height: 59vh;
    }

    .card {

        background-position: center;
        object-fit: cover;
        background-size: cover;

    }

    .hero {
        display: block;
        width: 100%;
        height: 59vh;
        background-image: url(https://images.pexels.com/photos/382167/pexels-photo-382167.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 30px;
    }

    .hero h1 {
        font-weight: 300 !important;
        color: #FFF;
    }
    </style>
</head>

<body>









    <div class="container">
        <!-- This code snippet uses the basscss framework -->
        <header class=" hero  center white">
            <p class="h3">Explore Dream Destination</p>
            <div class="col-md-12 col-sm-6 text-center">

                <p class="h5" id="content"></p>
                <button id="buttonClick" onclick='loadDoc()' type="button" class="btn btn-dark">Good Vibes
                    Only!</button>
            </div>
        </header>

        <div class='h2 textColor m-3 p-3'>ipsum dsaepe delectus?
            Lorem insem</div>
        <p class="card-text m-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos accusamus sit tempora
            quibusdam cum doloribus eligendi accusantium. Vitae, saepe delectus?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, autem.
        </p>
    </div>
    </div>
    <div class="container">
        <p>
        <h5 class="card-title  owntitle m-5 mt-5"></h5>
        </p>

        <div class="row row-cols-1 row-cols-md-2 g-4">

            <!-- dynamic cards -->
            <?= $tbody;?>
        </div>


    </div>
    </div>
    <div class="col container">
        <p>
        <h5 class="card-title  owntitle"></h5>
        </p>
        <div class="row">
            <div class="col ">
                <img src="https://images.pexels.com/photos/327412/pexels-photo-327412.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                    class="card-img card_img_section" alt="...">
            </div>


            <div class="col">
                <h5 class="card-title"></h5>

                <div class='h2 textColor'>ipsum dsaepe delectus?
                    Lorem ipssm</div>
                <p class="card-text m-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos accusamus sit
                    tempora quibusdam cum doloribus eligendi accusantium. Vitae, saepe delectus?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, autem.
                </p>
                </p>
            </div>
        </div>

        <div class='h2 textColor'>ipsum dsaepe delectus?
                    Lorem ipssm</div>
                <p class="card-text m-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos accusamus sit
                    tempora quibusdam cum doloribus eligendi accusantium. Vitae, saepe delectus?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, autem.
                </p>
                </p>
            </div>

    </div>
</body>




<script>
function loadDoc() {
    let xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if (this.status == 200) {
            document.getElementById("content").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "api.php", true); //(method, URL, async)
    xhttp.send();
}
</script>



</html>