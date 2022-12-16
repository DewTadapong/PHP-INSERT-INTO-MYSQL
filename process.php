<!--include ตัวไฟล์ connect-->
<?php include 'connect.php'; ?>
<?php

// ชื่อตัวแปร  ส่งค่าแบบ post 
 $name = $_POST['name'];
 $last = $_POST['last'];
// เพิ่มค่าในตาราง test ชื่อ คอลัม name กับ last ตามที่ตั้งใน database
 mysqli_query($connect, "INSERT INTO test (name,last)
                       VALUES('$name','$last')");
                       // ค่าจากตัวแปร

?>