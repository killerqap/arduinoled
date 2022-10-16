<?php
include_once('function.php');
$use = new con;
if(isset($_POST['submit'])){
$va= $_POST['va'];

$use->openlight1($va);
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  

</head>
<body>
  <div id="content">
  <div class="led">
  <form action="" method="POST">
    <h1>LED1</h1>
    <button type="submit" name="submit" class="button1" onclick="click1();" >OFF</button>
    <input type="hidden" name="va" value="off" >
    
    </form>
    <form action="" method="POST">
    <input type="hidden" name="va" value="on">
    <button type="submit" name="submit" class="button2" onclick=" click2();">ON</button>
    </form>
  </div>
  </div>
  <script src="myscripts.js" ></script>
</body>
</html>