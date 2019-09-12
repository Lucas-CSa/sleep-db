<?php

include_once("connect.php");


//Victim table insert
$vit_name = filter_input(INPUT_POST, 'vit_name', FILTER_SANITIZE_STRING);
$vit_age = filter_input(INPUT_POST, 'vit_id', FILTER_SANITIZE_STRING);
$vit_doc = filter_input(INPUT_POST, 'vit_doc', FILTER_SANITIZE_STRING);
$vit_contact = filter_input(INPUT_POST, 'vit_con', FILTER_SANITIZE_STRING);

//echo "Name: $vit_name <br>";
//echo "Age:  $vit_age <br>";
//echo "Doc:  $vit_doc <br>";
//echo "Contact: $vit_contact <br>";

$result_victim = "INSERT INTO vitima(vit_name, vit_age, vit_doc, vit_cont)
                       VALUES ('$vit_name', '$vit_age', '$vit_doc', '$vit_contact')";

$resultado_victim = mysqli_query($connection, $result_victim);

//Colab table insert
$col_name = filter_input(INPUT_POST, 'col_name', FILTER_SANITIZE_STRING);
$col_ra = filter_input(INPUT_POST, 'col_ra', FILTER_SANITIZE_STRING);

$result_colab = "INSERT INTO colab(col_name, col_RA) 
                     VALUES  ('$col_name', '$col_ra')";
$resultado_colab = mysqli_query($connection, $result_colab);

//Extra table insert
$ext_desc = filter_input(INPUT_POST, 'ext_desc', FILTER_SANITIZE_STRING);
$ext_susp = filter_input(INPUT_POST, 'ext_susp', FILTER_SANITIZE_STRING);
$ext_amg = filter_input(INPUT_POST, 'ext_amg', FILTER_SANITIZE_STRING);

$result_ext = "INSERT INTO ext_amg(ext_susp, ext_desc, ext_amg, ext_time)
                    VALUES ('$ext_susp', '$ext_desc', '$ext_amg', NOW())";

$resultado_ext = mysqli_query($connection, $result_ext);
?>