<?php
require './backend/function.php';

if(isset($_POST["submit"])) {
  if (insert ($_POST) > 0) {
      echo "
          <script>
              alert('Data Berhasil Ditambahkan!');    
              document.location.href = 'evaluasi.php';
          </script>
          ";
  } else {
      echo "
          <script>
              alert('Data Gagal Ditambahkan!');    
              document.location.href = 'evaluasi.php';
          </script>
          ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
  <script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>
  <title>Evaluasi</title>
  <style>
    @media screen and (min-width: 300px) {
      .biodata{
        display:block;
      }
    }
    
    @media screen and (min-width: 1000px) {
      .biodata{
        display:flex;
      }
    }
    
      </style>
</head>
<body style="background-color:whitesmoke">
  <div style="position: fixed;bottom: 5vh;right: 5vh;">
    <a href="#header">
    <button type="button" class="btn rounded-pill" style="background-color: #284a6e">
      <lord-icon
      src="https://cdn.lordicon.com/ribwzplp.json"
      trigger="click"
      colors="primary:#ffffff"
      state="hover-1"
      style="width:50px;height:50px">
      </lord-icon>
    </button>
  </a>
  </div>

  <div id='header' style="position:absolute">
    <a href="index.html"><button class="btn"> <img style="width:7vh ;" src="assets/back.png"></button></a>
  </div><br>
  <div class="text-center m-auto my-5 container" style="background-color: #284a6e; color: #f1f6f9 ;border-radius: 15px">
    <h1 class="p-2">QUIZ KESEHATAN LINGKUNGAN</h1>
  </div>
  <form action="" method="post">
  <div class="mx-auto container" style="padding: 20px 30px; border-radius: 15px; overflow: auto ;background-color:#9ba4b4;color: #284a6e;">
     <div class="border text-center m-auto" style="width:40vh;border-radius: 15px;background-color: whitesmoke;">
      <h2>Isi Data Diri</h2>
    </div>
    <div class="biodata" style="justify-content: center">
      <div class="mx-4 mt-3 text-center">
        <h4>Nama</h4>
        <input type="text" class="py-1 px-4" name="nama" style="border-radius:10px" required>
      </div>
      <div class="text-center mt-3">
        <h4>Kelas</h4>
        <input type="text" class="py-1 px-4" name="kelas" style="border-radius:10px" required>
      </div>
    </div>
  </div><br>

  <div class="text-center m-auto my-5 container" style="background-color: #284a6e; color: #f1f6f9 ;border-radius: 15px">
    <h1 class="p-2">Pilih Jawaban di Bawah Ini!</h1>
  </div>

  <div class="mx-auto container" style="padding: 20px 30px; border-radius: 15px; overflow: auto ;background-color:#9ba4b4;color: #284a6e;">
    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
    <span>1. Di bawah ini merupakan langkah-langkah dalam menganalisis informasi baik fakta dan opini dalam sebuah artikel, kecuali ?</span> <br>
    <input type="radio" name="score1" value="0"> <label>A. Analisis informasi</label><br>
    <input type="radio" name="score1" value="0"> <label>B. Pilih kalimat dari artikel</label><br>
    <input type="radio" name="score1" value="5"> <label>C. Perhatikan ide pokoknya</label><br>
    <input type="radio" name="score1" value="0"> <label>D. Baca artikel dengan saksama</label><br>
    <input type="radio" name="score1" value="0"> <label>E. Cermati kalimat yang diambil</label><br>
    </div><br>
  
    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
    <span>2. <b>Perhatikan pernyataan-pernyataan berikut!</b></span> <br>
    <ol>
      <li>sesuai kenyataan isi dan kebenarannya</li>
      <li>bergantung pada kepentingan tertentu</li>
      <li>benar atau salah bergantung data pendukung</li>
      <li>cenderung deskriptif pengungkapannya</li>
      <li>cenderung persuasif pengungkapan</li>
      <li>penalarannya cenderung induktif</li>
      <li>penalarannya cenderung deduktif.</li>
    </ol>
    <span>Berdasarkan pernyataan di atas yang termasuk ciri-ciri fakta adalah</span><br>
    <input type="radio" name="score2" value="0"> <label>A. (1), (2), (3)</label><br>
    <input type="radio" name="score2" value="5"> <label>B. (1), (4), (6)</label><br>
    <input type="radio" name="score2" value="0"> <label>C. (2), (4), (5)</label><br>
    <input type="radio" name="score2" value="0"> <label>D. (2), (3), (6)</label><br>
    <input type="radio" name="score2" value="0"> <label>E. (3), (4), (5)</label><br>
  </div><br>

    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
    <span>3. <b>Bacalah paragraf berikut dengan saksama!</b></span> <br>
    <ol>
      <li>Udara di Bogor terasa dingin.</li>
      <li>Kali ini dinginnya melebihi hari-hari sebelumnya.</li>
      <li>Dinginnya suhu udara di Bogor mencapai 24°C.</li>
      <li>Data tingkat suhu udara ini, terdapat di papan informasi pengukur suhu di jalan-jalan besar di kota Bogor.</li>
    </ol>
    <span>Dua kalimat pendapat pada teks tersebut ditandai dengan nomor ....</span><br>
    <input type="radio" name="score3" value="5"> <label>A. (1) dan (2)</label><br>
    <input type="radio" name="score3" value="0"> <label>B. (1) dan (3)</label><br>
    <input type="radio" name="score3" value="0"> <label>C. (1) dan (4)</label><br>
    <input type="radio" name="score3" value="0"> <label>D. (2) dan (3)</label><br>
    <input type="radio" name="score3" value="0"> <label>E. (2) dan (4)</label><br>
  </div><br> 

    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
    <span>4. <b>Cermati kutipan teks berikut untuk menjawab soal nomor 5 dan 6!</b></span> <br>
    <span>
      Olahraga sangat membantu pertahanan tubuh agar terhindar dari berbagai penyakit. Rajin berolahraga, antara lain, membuat kita dapat tidur nyenyak. Olahraga juga membuat kita menjadi orang yang selalu ceria sehingga terhindar dari berbagai macam penyakit, termasuk kanker.
      <br>
      Pendapat yang dapat mewakili pernyataan itu adalah...<br>
    </span>
    <input type="radio" name="score4" value="5"> <span>A. Rajin berolahraga sudah pasti terbebas dari kanker.</span><br>
    <input type="radio" name="score4" value="0"> <span>B. Sebelum tidur, seseorang harus banyak berolahraga.</span><br>
    <input type="radio" name="score4" value="0"> <span>C. Perhatikan ide pokoknya</span><br>
    <input type="radio" name="score4" value="0"> <span>D. Baca artikel dengan saksama</span><br>
    <input type="radio" name="score4" value="0"> <span>E. Kanker merupakan penyakit yang disebabkan oleh kurang tidur.</span><br>
    </div><br>
  
    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
    <span>5. Fakta yang diperlukan untuk pendapat-pendapat yang ada pada kutipan itu adalah...</span> <br>
    <input type="radio" name="score5" value="0"> <span>A. Cara-cara berolahraga yang baik.</span><br>
    <input type="radio" name="score5" value="0"> <span>B. Proses perkembangbiakan kanker.</span><br>
    <input type="radio" name="score5" value="0"> <span>C. Macam-macam penyakit berbahaya.</span><br>
    <input type="radio" name="score5" value="0"> <span>D. Jumlah penyakit yang biasa menyerang tubuh.</span><br>
    <input type="radio" name="score5" value="5"> <span>E. Pengalaman orang-orang yang biasa olahraga.</span><br>
    </div><br>

    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
      <span>6. <b>Cermati informasi berikut!</b></span> <br>
      <span>
        Pernyataan (Tesis) Saat ini gaya belanja masyarakat sudah banyak yang beralih melalui belanja online.
      </span>
      <ol>
        <li>Metode pembayaran terbatas sehingga belanja aman dan terkendali.</li>
        <li>Hemat waktu dan tenaga sehingga tak perlu lelah mengantre di kasir.</li>
        <li>Varian barang yang dijual hanya barang-barang tertentu dan berkualitas.</li>
        <li>Jenis promo beragam mulai dari potongan harga, poin, hingga voucer belanja.</li>
        <li>Lalu lintas yang padat membuat masyarakat malas keluar rumah untuk belanja.</li>
      </ol>
      <span>Dua kalimat pendapat pada teks tersebut ditandai dengan nomor ....</span><br>
      <input type="radio" name="score6" value="0"> <label>A. (1), (2), dan (3)</label><br>
      <input type="radio" name="score6" value="0"> <label>B. (1), (3), dan (5)</label><br>
      <input type="radio" name="score6" value="0"> <label>C. (2), (3), dan (4)</label><br>
      <input type="radio" name="score6" value="5"> <label>D. (2), (4), dan (5)</label><br>
      <input type="radio" name="score6" value="0"> <label>E. (3), (4), dan (5)</label><br>
    </div><br> 
    
    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
      <span>7. <b>Cermati teks berikut!</b></span> <br>
      <ol>
        <li>Saat ini literasi bukan hanya sekadar mampu membaca dan menulis.</li>
        <li>Melainkan, kemampuan lebih dari sekadar itu.</li>
        <li>Padahal, pemahaman literasi yang mana berarti seorang individu mampu dalam mengolah informasi dan pengetahuan untuk kecakapan hidup.</li>
        <li>Dalam konteks pengajaran, literasi merupakan kemampuan mengakses, memahami, dan menggunakan sesuatu secara cerdas melalui berbagai aktivitas.</li>
        <li>Aktivitas tersebut di antaranya, membaca, berhitung, menyimak, menulis, berbicara dan berbudaya.</li>
      </ol>
      <span>Kalimat yang tidak efektif dari paragraf tersebut adalah kalimat nomor....</span><br>
      <input type="radio" name="score7" value="0"> <label>A. (1) dan (2)</label><br>
      <input type="radio" name="score7" value="0"> <label>B. (1) dan (5)</label><br>
      <input type="radio" name="score7" value="5"> <label>C. (2) dan (3)</label><br>
      <input type="radio" name="score7" value="0"> <label>D. (3) dan (4)</label><br>
      <input type="radio" name="score7" value="0"> <label>E. (4) dan (5)</label><br>
    </div><br> 

    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
      <span>
        8. <b>Cermati teks berikut!</b> <br>Kebaikan merupakan perbuatan positif yang bersumber dari nilai-nilai agama dan tidak <span style="color:red">kontra</span> dengan 
        norma dan etika. Keberadaannya sebagai manifestasi dari penghambaan diri seorang makhluk kepada Tuhannya. Setiap kebaikan akan 
        diberikan ganjaran pahala oleh Tuhan, sebaliknya, setiap kejahatan akan <span style="color:red">mendapatkan</span>  sanksi dari-Nya. Akan tetapi, setiap satu 
        kebaikan akan mendapat pahala berlipat ganda, tetapi setiap satu kejahatan hanya dicatat satu dosa saja. Oleh karena itu, kita 
        tidak perlu <span style="color:red">mengkalkulasikan</span> setiap kebaikan dengan pahala yang akan diterima. Kebaikan bukanlah kebenaran dan kepastian, melainkan 
        ketenangan dan kenyamanan jiwa dan hati.<br>Perbaikan kata berimbuhan yang tepat untuk memperbaiki kata yang bercetak miring pada paragraf tersebut adalah ...
      </span> <br>
      <input type="radio" name="score8" value="0"> <span>A. kontras, mendapati, mengalkulasikan</span><br>
      <input type="radio" name="score8" value="5"> <span>B. kontras, mendapatkan, mengkalkulasi</span><br>
      <input type="radio" name="score8" value="0"> <span>C. kontradiktif, mendapati, mengalkulasi</span><br>
      <input type="radio" name="score8" value="0"> <span>D. kontradiksi, mendapatkan, mengkalkulasi</span><br>
      <input type="radio" name="score8" value="0"> <span>E. kontradiktif, mendapatkan, mengalkulasikan</span><br>
      </div><br>

      <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
        <span>9. <b>Cermati keterangan berikut!</b></span> <br>
        <span>
          Judul : Problematika Budaya Menyontek di Indonesia
        </span>
        <ol>
          <li>Berbagai aspek yang melandasi seseorang untuk menyontek.</li>
          <li>Kebudayaan menyontek semakin marak di Indonesia.</li>
          <li>Pemerolehan hasil atau nilai yang tinggi dan memuaskan</li>
          <li>Berbagai fakta ditemukan pada setiap tingkat jenjang pendidikan.</li>
          <li>Simpulan budaya menyontek dengan budaya korupsi di Indonesia</li>
        </ol>
        <span>Urutan kerangka yang sesuai dengan judul adalah nomor ?</span><br>
        <input type="radio" name="score9" value="0"> <label>A. (1), (2), (4), (3), (5)</label><br>
        <input type="radio" name="score9" value="0"> <label>B. (2), (4), (1), (3), (5)</label><br>
        <input type="radio" name="score9" value="0"> <label>C. (3), (2), (3), (1), (5)</label><br>
        <input type="radio" name="score9" value="0"> <label>D. (3), (4), (2), (1), (5)</label><br>
        <input type="radio" name="score9" value="5"> <label>E. (4), (1), (3), (2), (5)</label><br>
      </div><br>

      <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
        <span>10. <b>Cermati teks berikut!</b></span> <br>
        <p style="text-indent: 20px"> 
          Predikat kota Yogyakarta bukan hanya sekadar
         pelajar dan parawisata, melainkan gudangnya industri kecil, terutama kerajinan. Ribuan Industri kecil kerajinan berkembang di daerah ini, mulai dari skala kecil, misalnya souvenir
          hasil industri rumah tangga hingga skala
          besar yang bertaraf
          internasional. Model-model yang dihasilkan juga sesuai dengan trend dunia </p>
        <span>Ejaan yang perlu diperbaiki pada paragraf diatas adalah...</span><br>
        <input type="radio" name="score10" value="0"> <label>A. Sekadar seharusnya sekedar</label><br>
        <input type="radio" name="score10" value="0"> <label>B. Souvenir seharusnya sovenir</label><br>
        <input type="radio" name="score10" value="0"> <label>C. Skala seharusnya sekala</label><br>
        <input type="radio" name="score10" value="0"> <label>D. Bertaraf seharusnya bertarap</label><br>
        <input type="radio" name="score10" value="5"> <label>E. Trend seharusnya tren</label><br>
      </div><br> 
      
      <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
        <span>11. <b>Cermati teks berikut dengan saksama!</b></span> <br>
        <ol>
          <li>Antioksidan ternyata ditemukan pada berbagai buah dan sayuran berupa vitamin C.</li>
          <li>Zat ini pun ada yang beranggapan dapat mencegah oksidan kolesterol dan proses yang menyebabkan penyempitan arteri.</li>
          <li>
            Untuk mempercantik tubuh dan sehat, banyaklah orang yang melakukan diet seimbang dengan lima porsi buah dan sayuran setiap 
            hari, karena dianggap cukup untuk memenuhi kebutuhan vitamin C tubuh dan pencegahan penyakit.</li>
          <li>Di samping itu, mengonsumsi buah yang bervitamin C, terbukti tidak berdampak sampingan yang merugikan tubuh.</li>
          <li>Dengan demikian, bolehlah kita yakini bahwa sangatlah berbeda efek suplemen vitamin C hasil olahan dengan yang asli dari buah.</li>
        </ol>
        <span>Fakta dalam paragraf tersebut terdapat pada kalimat nomor berapakah?</span><br>
        <input type="radio" name="score11" value="5"> <label>A. (1) dan (4)</label><br>
        <input type="radio" name="score11" value="0"> <label>B. (2) dan (4)</label><br>
        <input type="radio" name="score11" value="0"> <label>C. (3) dan (4)</label><br>
        <input type="radio" name="score11" value="0"> <label>D. (3) dan (5)</label><br>
        <input type="radio" name="score11" value="0"> <label>E. (4) dan (5)</label><br>
      </div><br> 

      <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
        <span>
          12. <b>Cermati kutipan teks berikut!</b> <br> <p style="text-indent:20px"> meminta maaf dan sulit memberi maaf sesungguhnya merupakan sifat manusia pada umumnya. 
          Namun, peluang untuk meminta maaf dan memberi maaf pastilah selalu ada. Jika setiap orang bersedia memberi maaf alangkah tenteram dan 
          nikmatnya kehidupan di muka bumi ini. Lebih dari itu, apabila setiap orang sadar bahwa memberi maaf itu lebih mulia daripada meminta maaf.</p>
          <br>Pendapat yang tepat sesuai kutipan teks tersebut adalah.. <br>
        <input type="radio" name="score12" value="0"> <span>A. Saling memaafkan suatu kebiasaan setiap manusia.</span><br>
        <input type="radio" name="score12" value="0"> <span>B. Setiap orang memiliki peluang untuk berbuat salah.</span><br>
        <input type="radio" name="score12" value="0"> <span>C. Kata "maaf" seringkali mudah diucapkan seseorang.</span><br>
        <input type="radio" name="score12" value="5"> <span>D. Hidup damai jika setiap orang bersedia memberi maaf.</span><br>
        <input type="radio" name="score12" value="0"> <span>E. Meminta maaf akan lebih baik dibanding memberi maaf.</span><br>
        </div><br>

        <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
          <span>
            13. <b>Cermati kutipan teks berikut! </b><br> <P style="text-indent:20px">Perempuan memang paling rentan terhadap anemia, terutama anemia karena kekurangan zat besi. Darah memang 
            sangat penting bagi perempuan. Hal ini terutama pada saat hamil, zat besi itu dibagi dua, yaitu bagi si ibu dan janinnya. Apabila si ibu anemia, 
            bisa terjadi abortus, lahir prematur dan juga kematian ibu melahirkan. Padahal, kita ingat di Indonesia, angka kematian ibu melahirkan dan kematian bayi 
            masih cukup tinggi. Bahkan, bagi janin, zat besi juga dibutuhkan karena berkaitan dengan kecerdasan.</P>
            <br>Pernyataan pendapat yang layak dijadikan bahan penulisan artikel dari kutipan tersebut adalah...<br>
          <input type="radio" name="score13" value="0"> <span>A. Fungsi kecerdasan bagi anak</span><br>
          <input type="radio" name="score13" value="0"> <span>B. Pemelihaaraan bayi prematur</span><br>
          <input type="radio" name="score13" value="0"> <span>C. Kebutuhan manusia akan darah</span><br>
          <input type="radio" name="score13" value="5"> <span>D. Anemia berbahaya bagi perempuan</span><br>
          <input type="radio" name="score13" value="0"> <span>E. Cara memelihara bayi dalam kandungan</span><br>
          </div><br>

          <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
            <span>
              14. <b>Cermati kutipan teks berikut! </b><br> <p style="text-indent:20px">Buncis, Phaseolus vulgaris L, merupakan sayuran sejenis polong-polongan yang dapat dimanfaatkan buah, biji, dan daunnya. Di Indonesia sayuran ini cukup 
              populer dan banyak dikonsumsi oleh masyarakat. Sayur ini dikenal sebagai makanan sumber serat, folat, mangan, serta vitamin C yang baik untuk tubuh. Dengan 
              berbagai kandungan nutrisi tersebut, sayuran ini mempunyai beberapa manfaat untuk kesehatan. Manfaat sayuran ini, antara lain menjaga kesehatan jantung, menyehatkan 
              saluran pencernaan, memperkuat sistem kekebalan tubuh, dan memelihara kesehatan mata.</p>
              <br>Informasi yang sesuai dengan kutipan tersebut terdapat dalam kalimat....<br>
            <input type="radio" name="score14" value="0"> <span>A. Buncis sejenis polong-polongan yang dapat digunakan mulai dari buah, biji, batang, dan daunnya</span><br>
            <input type="radio" name="score14" value="0"> <span>B. Sayuran buncis baik dikonsumsi karena memiliki banyak manfaat terutama untuk kesehatan mata.</span><br>
            <input type="radio" name="score14" value="5"> <span>C. Sayuran buncis adalah makanan sumber serat, folat, mangan, serta vitamin C yang baik untuk tubuh.</span><br>
            <input type="radio" name="score14" value="0"> <span>D. Buncis merupakan sayuran yang sangat populer di Indonesia karena masyarakat menyukainya.</span><br>
            <input type="radio" name="score14" value="0"> <span>E. Sayuran buncis dapat bermanfaat untuk menyehatkan jantung, pencernaan, menjaga kondisi mata.</span><br>
            </div><br>

            <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
              <span>
                15. <b>Cermati kutipan teks berikut! </b><br> <p style="text-indent:20px">Masalah polusi plastik sedang menjadi isu hangat di Indonesia. Sudah menjadi fakta yang tidak dapat dipungkiri bahwa Indonesia adalah penyumbang terbesar 
                kedua untuk sampah plastik di laut setelah Tiongkok. Hal itu disebabkan dengan beberapa perkiraan yang menunjukkan bahwa sampah plastik menyumbang sekitar 10% 
                dari polusi plastik global. Terlebih lagi, diketahui bahwa empat sungai di Indonesia termasuk di antara 20 sungai yang paling tercemar di dunia dalam hal sampah 
                plastik. Plastik tidak dapat terurai dan sayangnya, tidak semua masyarakat Indonesia sadar akan hal ini. Plastik yang dibuang sembarangan di sungai akan terbawa 
                arus menuju laut. Selanjutnya, plastik tersebut akan dianggap sebagai makanan bagi burung dan hewan laut/hewan sekitar laut. Akibatnya, ribuan hewan akan terluka 
                atau mati setiap tahunnya karena menelan sampah plastik. Seperti pemberitaan akhir-akhir ini, seekor paus sperma ditemukan mati terdampar di perairan Pula </p> <br>
                <span>Manakah kalimat fakta yang terdapat pada teks tersebut?</span><br>
              <input type="radio" name="score15" value="5"> <span>A. Indonesia merupakan penyumbang terbesar kedua untuk sampah plastik di laut setelah Tiongkok.</span><br>
              <input type="radio" name="score15" value="0"> <span>B. Ribuan hewan laut terluka dan mati setiap tahunnya karena menelan sampah plastik yang ada di laut.</span><br>
              <input type="radio" name="score15" value="0"> <span>C. Seekor paus telah ditemukan mati karena menelan hampir enam kilogram plastik dan sandal jepit.</span><br>
              <input type="radio" name="score15" value="0"> <span>D. Sampah plastik di Indonesia diperkirakan telah menyumbang lebih dari 10 % polusi plastik global.</span><br>
              <input type="radio" name="score15" value="0"> <span>E. Indonesia termasuk empat sungai yang paling tercemar sungainya akibat sampah berbentuk plastik.</span><br>
              </div><br>

              <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
                <span>16. <b>Cermati teks berikut untuk menjawab soal nomor 16 dan 17!</b></span> <br>
                <ol>
                  <li>Perempuan memang paling rentan terhadap anemia, terutama anemia karena kekurangan zat besi.</li>
                  <li>Darah memang sangat penting bagi perempuan, terutama pada saat hamil, zat besi itu dibagi dua, yaitu bagi si ibu dan janinnya.</li>
                  <li>Apabila si ibu anemia, bisa terjadi abortus, lahir prematur dan juga kematian ibu melahirkan.</li>
                  <li>Padahal, kita ingat di Indonesia, angka kematian ibu melahirkan dan kematian bayi masih cukup tinggi.</li>
                  <li>Bahkan, bagi janin, zat besi juga dibutuhkan karena berkaitan dengan kecerdasan.</li>
                </ol>
                <span>Fakta yang mendasari pengembangan teks bidang kesehatan tersebut dinyatakan dalam kalimat nomor?</span><br>
                <input type="radio" name="score16" value="5"> <label>A. (1) dan (2)</label><br>
                <input type="radio" name="score16" value="0"> <label>B. (1) dan (5)</label><br>
                <input type="radio" name="score16" value="0"> <label>C. (2) dan (3)</label><br>
                <input type="radio" name="score16" value="0"> <label>D. (3) dan (4)</label><br>
                <input type="radio" name="score16" value="0"> <label>E. (4) dan (5)</label><br>
              </div><br> 

              <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
                <span>17. Istilah pada kutipan teks tersebut adalah...</span> <br>
                <input type="radio" name="score17" value="0"> <label>A. abortus, bayi, hamil</label><br>
                <input type="radio" name="score17" value="0"> <label>B. darah, anemia, hamil</label><br>
                <input type="radio" name="score17" value="0"> <label>C. anemia, zat besi, bayi</label><br>
                <input type="radio" name="score17" value="0"> <label>D. kematian, kecerdasan, anemia</label><br>
                <input type="radio" name="score17" value="5"> <label>E. prematur, anemia, darah tinggi</label><br>
                </div><br>

                <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
                  <span>
                    18. <b>Cermati opini berikut!</b> <br> <p style="text-indent:20px">Selama bulan suci Ramadan, tempat-tempat hiburan memang perlu dibatasi jam operasinya. Selain mengganggu, kekhusyukan ibadah umat 
                    Islam, tidak tertutup kemungkinan akan terjadinya hal-hal maksiat.</p>
                    <br>Pendapat yang relevan untuk pernyataan tersebut adalah...
                    <br>
                  <input type="radio" name="score18" value="0"> <span>A. Tidak ada yang bisa menjamin terciptanya kekhusyukan beribadah hanya dengan menutup tempat-tempat maksiat seperti itu.</span><br>
                  <input type="radio" name="score18" value="0"> <span>B. Perlu ada partisipasi dari aparat keamanan untuk menciptakan ketenteraman di bulan Ramadan dan ketenteraman masyarakat lainnya.</span><br>
                  <input type="radio" name="score18" value="0"> <span>C. Hal itu perlu dipikirkan ulang atas usulan penutupan tempat-tempat hiburan jangan sampai menimbulkan ekses negatif, terutama pada para pekerjaannya.</span><br>
                  <input type="radio" name="score18" value="5"> <span> D. Memang sepantasnya, tempat-tempat hiburan itu ditutup agar umat Islam merasa dihargai dan ketenteraman di lingkungan masyarakat pada umumnya juga bisa terjamin</span><br>
                  <input type="radio" name="score18" value="0"> <span> E. Cara seperti itu bisa saja dilakukan, tetapi menurut saya tidak bisa memberikan solusi jangka panjang karena setelah Ramadan penyakit masyarakat itu akan kembali berjangkit.</span><br>
                  </div><br>

                  <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
                    <span>
                      19. <b>Cermati paragraf rumpang berikut untuk menjawab soal nomor 19 dan 20!</b> <br> <p style="text-indent: 20px">Kulit wajah berbeda dengan kulit tubuh kita yang lebih kasar dan lebih kuat. Sebaliknya, kulit wajah bersifat 
                      lebih lembut dan sensitif. Oleh sebab itu, [ ... ] Gosoklah wajah menggunakan tangan yang bersih secara lembut dengan gerakan melingkar, hindari menggosok secara kasar dan hindari juga menggunakan 
                      pembersih wajah seperti sabun muka yang kasar atau mengandung pewangi. Memberikan terlalu banyak tekanan atau menggosok terlalu kasar dapat menyebabkan kapiler kulit wajah rusak, menyebabkan kulit meregang, 
                      dan dapat menyebabkan kulit berwarna kemerah-merahan. Lambat-laun, kulit wajah akan mudah mengalami tanda penuaan seperti kerutan halus, kering, dan kendor.</p>
                      <br>Kalimat yang sesuai untuk melengkapi paragraf rumpang tersebut adalah...<br>
                    <input type="radio" name="score19" value="0"> <span>A. kulit wajah memerlukan perawatan khusus dan sabun khusus agar tidak terkena dampak lebih parah.</span><br>
                    <input type="radio" name="score19" value="5"> <span>B. saat mencuci wajah, sebaiknya kulit wajah diperlakukan seperti kain sutra yang lembut dan rentan.</span><br>
                    <input type="radio" name="score19" value="0"> <span>C. perlakukan kulit seperti memperlakukan seseorang yang kamu sayangi dengan penuh kelembutan</span><br>
                    <input type="radio" name="score19" value="0"> <span>D. sebaiknya kamu selalu menjaga kelembapan dan kelembutan kulit agar tidak menyesal di kemudian hari.</span><br>
                    <input type="radio" name="score19" value="0"> <span>E. jangan sampai salah menggunakan produk perawatan kulit wajah dengan kulit tubuh supaya tidak iritasi.</span><br>
                    </div><br>

                    <div class="p-3 m-auto" style="border-radius: 15px;background-color: whitesmoke;">
                      <span>20. Judul yang sesuai untuk paragraf tersebut adalah...</span> <br>
                      <input type="radio" name="score20" value="0"> <span>A. Perawatan Wajah yang Tepat akan Membuat Wajah Tampak Muda</span><br>
                      <input type="radio" name="score20" value="0"> <span>B. Menjaga Kesehatan Kulit dengan Perawatan yang Benar Setiap Hari</span><br>
                      <input type="radio" name="score20" value="0" > <span>C. Kulit Wajah Segar nan Alami Membuat Hidup Menjadi Lebih Berseri</span><br>
                      <input type="radio" name="score20" value="5"> <span>D. Tips Jitu Merawat Kulit wajah agar Tetap Cantik, sehat, dan Alami</span><br>
                      <input type="radio" name="score20" value="0"> <span>E. Perlakukan Kulit Wajahmu dengan Kelembutan yang Benar dan Tepat</span><br>
                      </div><br>   
                   

                  <div class="text-center m-auto my-5 container" style="background-color: #284a6e; color: #f1f6f9 ;border-radius: 15px">
                    <h1 class="p-2">Isi Essay Dibawah Ini</h1>
                  </div>
                  <div class="p-3 m-auto text-center container" style="border-radius: 15px;background-color: whitesmoke;">
                  <label>Buatlan sebuah artikel yang membahas mengenai kesehatan lingkungan berkaitan dengan limbah, polusi, pencemaran, sampah, dll</label>
                  </div><br>
                  <textarea id="ckeditor" required name="artikel"></textarea><br>

                  <button class="btn btn-success" name="submit" style="float:right" type="submit">Submit</button>
                  </form>  
                  </div><br>

  <footer style="background-color: #284a6e;color: #f1f6f9;width: 100%">
    <div style="padding:40px ;">
    <h6 class="text-center">Copyright @ 2022</h5>
    </div>
  </footer>
  
  <script>
    CKEDITOR.replace('ckeditor', {
      extraPlugins: 'editorplaceholder',
      editorplaceholder: 'Start typing here...',
      removeButtons: 'PasteFromWord',
      extraPlugins: 'autogrow',
      width: '100%'
    });
</script>
</body>
</html>