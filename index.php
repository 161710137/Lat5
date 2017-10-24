<?php
require_once 'supermarket.php';

$namanya = new supermarket('Griya','Yogya','Borma','Alfa');
echo "nama supermarket...".$namanya->get_gy().'<br>';
echo "nama supermarket...".$namanya->get_yy().'<br>';
echo "nama supermarket...".$namanya->get_ba().'<br>';
echo "nama supermarket...".$namanya->get_aa().'<br>';

?>