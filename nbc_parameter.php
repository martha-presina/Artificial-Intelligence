<?php

//-- query untuk mendapatkan semua data atribut di tabel nbc_atribut
$sql = 'SELECT p.id_atribut, a.atribut, p.nilai, p.parameter 
        FROM nbc_parameter p JOIN nbc_atribut a ON p.id_atribut=a.id_atribut 
        ORDER BY p.id_atribut,p.id_parameter';
$result = $db->query($sql);
//-- menyiapkan variable penampung berupa array
$parameter=array();
$id_atribut=0;

?>