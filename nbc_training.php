<?php
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
    $atribut[$row['id_atribut']]=$row['atribut'];
  }
  
  //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
  foreach ($result as $row) {
    if($id_atribut!=$row['id_atribut']){
        $parameter[$row['id_atribut']]=array();
        $id_atribut=$row['id_atribut'];
    }
    $parameter[$row['id_atribut']][$row['nilai']]=$row['parameter'];
  }
  
  //-- query untuk mendapatkan semua data training di tabel nbc_responden dan nbc_data
  $sql = 'SELECT * FROM nbc_data a JOIN nbc_responden b ON a.id_responden=b.id_responden ORDER BY a.id_data';
  $result = $db->query($sql);
    //-- menyiapkan variable penampung berupa array
    $data=array();
    $responden=array();
    $id_responden=0;
    //-- melakukan iterasi pengisian array untuk tiap record data yang didapat
    foreach ($result as $row) {
      if($id_responden!=$row['id_responden']){
          $responden[$row['id_responden']]=$row['responden'];
          $data[$row['id_responden']]=array();
          $id_responden=$row['id_responden'];
      }
      $data[$row['id_responden']][$row['id_atribut']]=$row['id_parameter'];
    }
    $jml_atribut = 7;
  
  //-- menyiapkan variable penampung utk freq tiap atribut berupa array $freq
  $freq=array();
  
  //-- inisialisasi data awal $freq
  for($i=2;$i<=$jml_atribut;$i++){
      for($j=0;$j<3;$j++){
          for($k=0;$k<3;$k++){
              $freq[$i][$j][$k]=0;
          }
      }
  }
  
  //-- menyiapkan variable penampung utk freq prior berupa array $prior_freq
  $prior_freq=array();
  //-- iterasi tiap data training
  foreach($data as $i=>$v){
      //-- hitung freq tiap atribut
      for($j=2;$j<=$jml_atribut;$j++){
          $freq[$j][$v[$j]][$v[1]]+=1;
      }
      //-- hitung feq prior/kelas
      if(!isset($prior_freq[$v[1]])) $prior_freq[$v[1]]=0;
      $prior_freq[$v[1]]+=1;
  }
  ksort($prior_freq);
  
  
  //-- menyiapkan variable penampung untuk class probabilities $prior
  $prior=array();
  //-- hitung nilai masing2 class probabilities
  foreach($prior_freq as $p=>$v){
      $prior[$p]=$v/array_sum($prior_freq);
  }
  ksort($prior);
  
  //-- menyiapkan variable penampung utk conditional probabilities $likehood
  $likehood=array();
  //-- iterasi mulai atribut ke-2 sampai terakhir
  for($i=2;$i<=$jml_atribut;$i++){
      //-- iterasi nilai atribut
      for($j=0;$j<3;$j++){
          //-- iterasi nilai kelas
          for($k=0;$k<3;$k++){
              //-- tes kondisi jika terdapat freq yang 0(nol) utk kelas=$k
              $t_nol=($freq[$i][0][$k]==0 || $freq[$i][1][$k]==0 || $freq[$i][2][$k]==0);
              //-- lakukan laplace correction jika ditemukan freq 0(nol) $t_nol=true
              $likehood[$i][$j][$k]=($freq[$i][$j][$k]+($t_nol?1:0))/($prior_freq[$k]+($t_nol?count($prior_freq):0));
          }
      }
  }
  
  //-- menyiapkan variabel penampung probabilitas per data training thd kelas
  $prob=array();
  //-- inisialisasi jumlah kumulatif prediksi benar dari data training
  $right=0;
  //-- iterasi utk setiap data training
  foreach($data as $n=>$v){
      $m=array();
      //-- iterasi utk setiap nilai kelas
      for($i=0;$i<3;$i++){
          //-- inisialisasi probabilitas awal
          $m[$i]=1;
          //-- perkalian nilai probabilitas tiap atribut
          for($j=2;$j<=$jml_atribut;$j++){
              $m[$i]*=$likehood[$j][$v[$j]][$i];
          }
          //-- kalikan dengan prior probabilitasnya
          $m[$i]*=$prior[$i];
      }
      //-- menentukan nilai prediksi kelas per data training
      $predict[$n]=array_search(max($m),$m);
      $prob[$n]=$m;
      //-- hitung kumulatif prediksi yang benar
      $right+=($predict[$n]==$v[1]?1:0);
  }
?>