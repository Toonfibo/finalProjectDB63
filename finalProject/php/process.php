<?php  include 'connect.php' ;?>
<?php


$v_nameTH = $_POST['nameTH'];
$v_nameLocal = $_POST['nameLoc'];
$v_nameCommon = $_POST['nameCom'];
$v_nameScientific = $_POST['nameSci'];
$v_nameFam = $_POST['nameFam'];
$v_inputStatus = $_POST['aquaticSta'];
$v_local = $_POST['lifeLoc'];


mysqli_query($connect,"INSERT INTO name_aquetic(nameTH ,nameLoc ,nameCom ,nameSci ,nameFam ) VALUES('$v_nameTH' ,'$v_nameLocal' ,'$v_nameCommon' ,'$v_nameScientific' ,'$v_nameFam') ");


$sql = "SELECT * FROM detail_aquetic ORDER BY aqueticNum DESC LIMIT 1";
$result = mysqli_query($connect , $sql) or die("BAD Query: $sql");
$first = mysqli_fetch_assoc($result);
$changeId = explode("AT",$first['aqueticNum']);
$newId = "AT".($changeId[1] + 1);





mysqli_query($connect,"INSERT INTO detail_aquetic(aqueticNum ,author_yearPub ,lifeLoc ,aquaticSta) VALUES (
	'$newId','test','$v_local','$v_inputStatus') ");









 // print "Completed Save file <meta http-equiv=refresh content=\"0; URL=../index.html\">";







	?>