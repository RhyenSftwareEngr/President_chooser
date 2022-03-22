

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      /* If the screen size is 1200px wide or more, set the font-size to 80px */
@media (min-width: 1200px) {
  .responsive-font-example {
    font-size: 80px;
  }
}
/* If the screen size is smaller than 1200px, set the font-size to 80px */
@media (max-width: 1199.98px) {
  .responsive-font-example {
    font-size: 30px;
  }
}
  </style>
</head>
<body>
<?php 
if(isset($_POST['groupOfDefaultRadios']) && $_POST['groupOfDefaultRadios'] == "first" || $_POST['groupOfDefaultRadios'] == "third"){
    ?>
    <div class="container">
        <h2 class="responsive-font-example">Your most likely to vote as a President is</h2>
        <p>LENI ROBREDO</p>
        <img class="img-responsive img-rounded" src="Assets/leni.jpg" alt="Chania" width="460" height="345"> 
    </div>
<?php
}
else if(isset($_POST['groupOfDefaultRadios']) && $_POST['groupOfDefaultRadios'] == "second"){
    ?>
    <div class="container">
        <h2 class="responsive-font-example">Your most likely to vote as a President is</h2>
        <p>BONG BONG MARCOS</p>
        <img class="img-responsive img-rounded" src="Assets/bbm.jpg" alt="Chania" width="460" height="345"> 
  </div>

<?php  } ?>
<?php


$isko = '<img src="Assets/isko.jpg"/>';
$leni = '<img src="Assets/leni.jpg"/>';
$manny = '<img src="Assets/manny.jpg"/>';
$bbm = '<img src="Assets/bbm.jpg"/>';
$leody = '<img src="Assets/leody.webp"/>';
$ping = '<img src="Assets/ping.jpg"/>';

$a=array($isko, $leni, $manny, $bbm, $leody, $ping);
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";

?>

</body>
</html>