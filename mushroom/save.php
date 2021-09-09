<meta charset="utf-8" />
<?php
include("connect.php");
$id = $_POST['Mushroom_Id'];
$Mushroom_icon = $_FILES['Mushroom_icon']['name'];
$ext       = explode('.', $Mushroom_icon);
$ext       = ".".end($ext);
$newfile = $id.$ext ;
$path = "img/".$newfile;
$upload = move_uploaded_file($_FILES['Mushroom_icon']['tmp_name'], $path);
$sql = "INSERT into mushroom (Mushroom_Id, Mushroom_commonname, Mushroom_science, Musroom_type, Mushroom_benefit, Mushroom_icon, Name_discover, Mushroom_habitat, Mushroom_growth, Cap, Undercap, Volva, Ring, Stipe, MushroomFamily_Id) values
       ($id, '" .$_POST['txtcommonname']"', '" .$_POST['txtscience']"', '" .$_POST['txttype']"', '" .$_POST['txtbenefit']"', $newfile, '" .$_POST['txtdiscover']"', '" .$_POST['txthabitat']"', '" .$_POST['txtgrowth']"', '" .$_POST['txtcap']"', '" .$_POST['txtundercap']"', '" .$_POST['txtvolva']"', '" .$_POST['txtring']"', '" .$_POST['txtstipe']"', '" .$_POST['txtfamily']"')";
$result = mysqli_query($conn,$sql);
if($result){
  echo "<script>alert('เพิ่มข้อมูลสำเร็จ');window.location='show.php'</script>";
}else{
  echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');</script>";
}
?>