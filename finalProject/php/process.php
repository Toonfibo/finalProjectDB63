<?php  include 'connect.php' ;?>
<?php

	$v_type = $_POST['type'] ;
	$v_nameTH = $_POST['nameTH'];
	$v_nameLocal = $_POST['nameLoc'];
	$v_nameCommon = $_POST['nameCom'];
	$v_nameScientific = $_POST['nameSci'];
	$v_nameFam = $_POST['nameFam'];
	$v_inputStatus = $_POST['aquaticSta'];
	$v_local = $_POST['lifeLoc'];



	 mysqli_query($connect,"INSERT INTO name_aquetic(nameTH ,nameLoc ,nameCom ,nameSci ,nameFam ,aquaticSta ,lifeLoc) VALUES('$v_nameTH' ,'$v_nameLocal' ,'$v_nameCommon' ,'$v_nameScientific' ,'$v_nameFam' ,$v_inputStatus' ,$v_local) ");

	 // mysqli_query($connect,"INSERT INTO detail_aquqtic(aquaticSta ,lifeLoc) VALUES($v_inputStatus' ,$v_local) ");

	

	print "Completed Save file <meta http-equiv=refresh content=\"0; URL=../index.html\">";
?>