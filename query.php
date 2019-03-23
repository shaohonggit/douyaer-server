<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "douyaer";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if (!$conn) {
    die("连接失败:".mysqli_error($conn));
    # code...
  }
  mysqli_query($conn,"SET NAMES UTF8");
  // $cla = '测仪1501';
  // $num = '123';
  // $tableName = "`scorelist2`";
  // $cla = $_GET['class'];
  $tableName = $_GET['class'];
  $num = $_GET['number'];
  $yea = $_GET['yearInfo'];
  $ter = $_GET['termInfo'];
  $sql = "SELECT * FROM $tableName WHERE number = '$num' AND year = '$yea' AND term = '$ter'";
  // $sql = "SELECT * FROM $tableName WHERE class = '$cla' AND number = '$num'";
  $query = mysqli_query($conn,$sql);
  if ($query) {
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC); // 获取结果集中的所有数据，返回数组
    echo json_encode($result); //json编码格式输出
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>