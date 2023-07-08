<?php
require './backend/function.php';

$data = show("SELECT * FROM quiz");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/1657603438.js"></script>
  <title>Referensi</title>
  <style>
    @media screen and (min-width: 1000px) {
      footer {
        position: absolute;
        bottom: 0;
      }
    }
  </style>
</head>

<body style="background-color:whitesmoke">
  <div style="position:absolute">
    <a href="index.html"><button class="btn"> <img style="width:7vh ;" src="assets/back.png"></button></a>
  </div><br>
  <div class="text-center m-auto my-5 container" style="background-color: #284a6e; color: #f1f6f9 ;border-radius: 15px;">
    <h1 class="p-2">PENILAIAN</h1>
  </div>
  <div class="mx-auto container" style="padding: 20px 0; border-radius: 15px ;background-color:#9ba4b4;color: #284a6e;">
    <table class="container text-center table table-striped">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Artikel</th>
        <?php $i = 1; ?>
        <?php foreach ($data as $row) : ?>
      </tr>
      <td><?= $i ?></td>
      <td><?= $row["nama"] ?></td>
      <td><?= $row["kelas"] ?></td>
      <td><?= $row["total"] ?></td>
      <td><a href=" content/penilaian/artikel.php?id=<?= $row['id'] ?>">
          <i class="fa fa-file-text fa-lg"></i></a></td>
      <?php $i++; ?>
    <?php endforeach; ?>
    </table>
  </div><br>
  <footer style="background-color: #284a6e;color: #f1f6f9;width: 100%">
    <div style="padding:40px ;">
      <h6 class="text-center">Copyright @ 2022</h5>
    </div>
  </footer>

</body>

</html>