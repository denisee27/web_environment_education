<?php
// $conn = mysqli_connect("kaidahlingkungan.com","u764791775_kaidahlingkung","KaidahLingkungan22","u764791775_kaidahlingkung") or die("Could not connect database");
$conn = mysqli_connect("localhost", "root", "") or die("Could not connect database");

function insert($post)
{
  global $conn;
  $nama = $post["nama"];
  $kelas = $post["kelas"];
  $score1 = $post["score1"];
  $score2 = $post["score2"];
  $score3 = $post["score3"];
  $score4 = $post["score4"];
  $score5 = $post["score5"];
  $score6 = $post["score6"];
  $score7 = $post["score7"];
  $score8 = $post["score8"];
  $score9 = $post["score9"];
  $score10 = $post["score10"];
  $score11 = $post["score11"];
  $score12 = $post["score12"];
  $score13 = $post["score13"];
  $score14 = $post["score14"];
  $score15 = $post["score15"];
  $score16 = $post["score16"];
  $score17 = $post["score17"];
  $score18 = $post["score18"];
  $score19 = $post["score19"];
  $score20 = $post["score20"];
  $artikel = $post["artikel"];
  $total = ($post['score1'] + $post['score2'] + $post['score3'] + $post['score4'] + $post['score5'] + $post['score6'] +
    $post['score7'] + $post['score8'] + $post['score9'] + $post['score10'] + $post['score11'] + $post['score12'] +
    $post['score13'] + $post['score14'] + $post['score15'] + $post['score16'] + $post['score17'] + $post['score18'] +
    $post['score19'] + $post['score20']);

  $query = "INSERT INTO quiz
            VALUES  
              ('','$nama','$kelas','$score1','$score2','$score3','$score4','$score5','$score6','$score7','$score8','$score9','$score10','$score11',
              '$score12','$score13','$score14','$score15','$score16','$score17','$score18','$score19','$score20','$artikel','$total')
          ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function show($data)
{
  global $conn;
  $result = mysqli_query($conn, $data);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
