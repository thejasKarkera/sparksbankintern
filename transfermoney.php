<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Basic Banking System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="assets/css/table.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">


  <link href="assets/css/style.css" rel="stylesheet">


<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #105469;
  font-family: 'Open Sans', sans-serif;
}
table {
  background: #b3b3ff;
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em;
  align: center;
}
th {
  border-bottom: 1px solid #364043;
  color: #1a000d;
  font-size: 1em;
  font-weight: 600;
  padding: 0.5em 1em;
  text-align: left;
}
td {
  color: #000;
  font-weight: 400;
  padding: 0.65em 1em;
}
.disabled td {
  color: #ff6666;
}
tbody tr {
  transition: background 0.25s ease;
}
tbody tr:hover {
  background: #9999ff;
}
.center {
  margin-left: auto;
  margin-right: auto;
}

button{
  transition: 1.5s;
}
.btn {
  background-color:#6666ff;
}

button:hover{
  background-color:#af96b0;
  color: white;
}

</style>


</head>

<body style="background-color: #37517e;">

  <?php
  include 'navbar.php';
    include 'config.php';
    $sql = "SELECT * FROM users_details";
    $result = mysqli_query($conn,$sql);
?>
<div class="bg">
  <section id="hero_v" class="d-flex align-items-center">

    <div class="container">
   <h2 align= "center" style="color:#ffffff;">Transfer Money</h2><br>
      <div class="row">
<br>
     </br> </br>
                <div class="col">
                  <table class="center">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['name']?></td>
                        <td class="text-center py-2"><?php echo $rows['email']?></td>
                        <td class="text-center py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Show Details/Transfer</button></a></td>
                    </tr>
                <?php
                    }
                ?>

                        </tbody>
                    </table>

                </div>
            </div>
         </div>
         <div id="preloader"></div>
         <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


         <script src="assets/vendor/aos/aos.js"></script>
         <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
         <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
         <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
         <script src="assets/vendor/php-email-form/validate.js"></script>
         <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
         <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

        
         <script src="assets/js/main.js"></script>

</body>
</html>
