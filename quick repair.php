
<?php
$insert=false;
if(isset($_POST['name'])){




// Set connection variables
$server = "localhost";
$username = "root"; 
$password = "";

// Create a database connection
$con = mysqli_connect($server, $username, $password,);

// Check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
 //echo"success connecting to the database";

 //sql quree to connect database
   $name = $_POST['name'];
$gender = $_POST['gender'] ;
$myage = $_POST['age'] ;
$email = $_POST['email'];
$phone= $_POST['phone'] ;
$desc = $_POST['desc'] ;




//$sql = "INSERT INTO `trip`.`trip` ( `name`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$gender', '$email', '$phone', '$desc', current_timestamp())"; 



//$sql = "INSERT INTO `youtube`.`db_cu` ( `namedb`, `genderdb`, `agebd`, `emaildb`, `phonedb`, `timedb`) VALUES ( '$name', '$gender', '$myage', '$email', '$phone', current_timestamp())";
$sql = "INSERT INTO `www`.`quick repair` ( `name`, `gender`, `age`, `email`, `phone`, `des`,`time`) VALUES ('$name', '$gender', '$myage', '$email', '$phone', '$desc', current_timestamp())";

//INSERT INTO `quick repair` (`srno`, `name`, `gender`, `age`, `email`, `phone`, `des`, `time`) VALUES ('1', 'rt', 'rt', '55', 'gfdf@gmail.com', '556', 'rt', current_timestamp());





// echo $sql;

if($con->query($sql)==true){
 // echo"Successfully Inserted";
    $insert=true;
}
else{

    echo"ERROR";  //$sql <br> $con -> error
}
$con->close();
}
?>












<!-- adding html here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Repairs</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/maids.css">
    <!-- Adding Bootstap 5.1 Here -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar">

        <nav id="navbar">
            <div id="logo">
                <img src="img/logo.jpg" alt="logo lagao">
            </div>
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a id="maidd" href="services.php">Services</a></li>
                <li class="item"><a href="tourism.php">Tourism</a></li>
                <li class="item"><a id="findd" href="find a job.php">Find A Job</a></li>
                <li class="item"><a href="contact us.php">Contact Us </a></li>
                <!-- <li class="item"><a href="#contact">Contact Us</a></li> -->
            </ul>
        </nav>
    </div>


<!-- adding form herer -->
<!-- creating  form  -->


<!-- Adding backgound  image -->
    <!-- <img class="bg" src="bg.jpg" alt="IIT Kharapur"> -->
<div style="display: inline-flex;" class="don">
    <div class="qimg">
        <img style="height: 500px;" src="img/quick.jpeg">
    </div>
    <div class="formc">
        <h1>Welcome To Quick Repairs Services</h1>
        <p style="margin-top: 20px;">Enter Your Deatails And Submit This Form To Repair Your Product.</p>
        <!-- <p class="submitMsg">Thank for submitting your form .We are happy to see you joining us for the us trip</p> -->

        <!-- ctreating a Form -->
        <form action="quick repair.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Full Name">
            <input type=" text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type=" text" name="age" id="age" placeholder="Enter Your Age">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="phone" name="phone" id="phone " placeholder="Enter Your Phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter Any Other Information Here"></textarea>
            <button onclick="clicked();" class="btnm">Submit</button>

        </form>



</div>






 
</body>

<script>
    function clicked(){
    
    
    alert('Your Response Submitted Successfully !  ')
    
    }
    
    
    </Script>
</html>
