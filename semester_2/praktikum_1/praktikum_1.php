<?php

 $pt1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
 $pt2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
 $pt3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
 $pt4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

 $pointment = [$pt1, $pt2 , $pt3, $pt4];

 ?>


<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
<center>
<h2>Daftar Nilai Siswa</h2>
</center>
<table class="table table-bordered border-dark table-striped table-sm">
 <thead>
 <tr>
 <th>No</th><th>NIM</th><th>UTS</th>
 <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor = 1;
 foreach($pointment as $pt){
 echo '<tr><td>'.$nomor.'</td>';
 echo '<td>'.$pt['nim'].'</td>';
 echo '<td>'.$pt['uts'].'</td>';
 echo '<td>'.$pt['uas'].'</td>';
 echo '<td>'.$pt['tugas'].'</td>';
 $finalValue = ($pt['uts'] + $pt['uas']+$pt['tugas'])/3;
 echo '<td>'.number_format($finalValue,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
 }
 ?>
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
 </tbody>
 </table>