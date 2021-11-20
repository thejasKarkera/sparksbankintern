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
  background: rgba(153, 153, 255,0.8);
  border-radius: 0.25em;
  border-collapse: collapse;
  margin: 1em;
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
  background: #6666ff;
}
.center {
  margin-left: auto;
  margin-right: auto;
}

</style>


</head>

<body style="background-image: url('assets/img/1.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">

  <?php
  require_once 'config.php';
  include 'navbar.php';
  ?>

  <!-- ======= Header ======= -->
<br>

  <!-- ======= Hero Section ======= -->
<div class="bg">
  <section id="hero_v" class="d-flex align-items-center">

    <div class="container">

      <div class="row">
<br>
       <h2 align= "center" style="color:#ffffff;">Transaction History</h2><br>

     </br> </br>
  <table>
      <thead>
          <tr>

              <th class="text-center"><b>Sender</b></th>
              <th class="text-center"><b>Receiver</b></th>
              <th class="text-center"><b>Amount</b></th>
              <th class="text-center"><b>Date & Time</b></th>
          </tr>
      </thead>
      <tbody>
      <?php

          include 'config.php';

          $sql ="select * from transaction_details";

          $query =mysqli_query($conn, $sql);

          while($rows = mysqli_fetch_assoc($query))
          {
      ?>

          <tr>

          <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
          <td class="text-center py-2" ><?php echo $rows['receiver']; ?></td>
          <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
          <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>

      <?php
          }

      ?>
      </tbody>
  </table>

  </div>





    </div>

  </section><!-- End Hero -->
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
