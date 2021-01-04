<?php
//-- query untuk mendapatkan semua data atribut di tabel nbc_atribut
$sql = 'SELECT * FROM nbc_atribut';
$result = $db->query($sql);
//-- menyiapkan variable penampung berupa array
$atribut=array();

?>