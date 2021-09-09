<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แสดงข้อมูลเห็ด</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js'></script>
<script type="text/javascript" class="init">
$(document).ready(function() {
$('#example').DataTable({
   "iDisplayLength": 10,	
   "aaSorting": [[ 0, "asc" ]] } );
} );
</script>
<body>
<?php include("nav.php");  ?>
<center><b>แสดงข้อมูลเห็ด</b></center><br />
<br />
<table id="example" class="display" cellspacing="0" width="100%">
<thead>
  <tr>
    <td>ภาพเห็ด</td>  
    <td>รหัสเห็ด</td>
    <td>ชื่อสามัญ/ท้องถิ่น</td>
    <td>ชื่อวิทยาศาสตร์</td>
    <td>ลักษณะเห็ด</td>
    <td>บริเวณที่พบ</td>
    <td>ลบ</td>
  </tr>
  </thead>
  <tbody>
<?php

  include("connect.php");
  $sql = "select * from mushroom";
  $result = mysqli_query($conn,$sql);
  
  while($row=mysqli_fetch_array($result)){
   ?>
  <tr>
    <td><img src='<?="img/".$row["Mushroom_icon"]?>'width="100" /></td>  
    <td><?=$row["Mushroom_Id"]?></td>
    <td><?=$row["Mushroom_commonname"]?></td>
    <td><?=$row["Mushroom_science"]?></td>
    <td><?="ลักษณะ : ".$row[""]."<br>"."ลักษณะ : ".$row[""]?></td>
    <td>
<span class="btn-group">
    <a href='map.php?Mushroom_Id=<?=$row["Mushroom_Id"]?>'>บริเวณที่พบ</a>
    <a href='addmap.php?Mushroom_Id=<?=$row["Mushroom_Id"]?>'>เพิ่มบริเวณที่พบ</a>
    <a href='delmap.php?Mushroom_Id=<?=$row["Mushroom_Id"]?>'>ลบบริเวณที่พบ</a>
</span>    
    </td>
    <td>
<span class="btn-group">
    <a href='del.php?Mushroom_Id=<?=$row["Mushroom_Id"]?>'>ลบ</a>
</span>
    </td>
  </tr>
  <?php } ?>
  </tbody>
</table>




</body>
</html>