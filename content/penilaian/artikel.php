<?php
require '../../backend/function.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    $query    =mysqli_query($conn, "SELECT * FROM quiz WHERE id='$id'");
    $artikel    =mysqli_fetch_array($query);
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <title>Artikel</title>
</head>
<body style="background-color:whitesmoke">
  <div style="position:absolute">
    <a href="../../penilaian.php"><button class="btn"> <img style="width:7vh ;" src="../../assets/back.png"></button></a>
  </div><br>
  <div class="text-center m-auto my-5 container" style="background-color: #284a6e; color: #f1f6f9 ;border-radius: 15px;">
    <h1 class="p-2">ARTIKEL</h1>
    <h1 class="p-2"><?= $artikel['nama'] ?></h1>
  </div>

  <div class="mx-auto container" style="padding: 20px 30px; border-radius: 15px ;background-color:#9ba4b4;color: #284a6e;">
    <span style="font-size:20px"><?= $artikel['artikel'] ?></span>
  </div><br>

  <footer style="background-color: #284a6e;color: #f1f6f9;width: 100%">
    <div style="padding:40px ;">
    <h6 class="text-center">Copyright @ 2022</h5>
    </div>
  </footer>
  
</body>
</html>