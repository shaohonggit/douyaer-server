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
  // $num = '123456';
  $num = $_GET['number'];  //分号一定要有，不然列表没有内容
  $sql_foucus = "SELECT * FROM focuslist WHERE number = '$num'";
  $query_focus = mysqli_query($conn,$sql_foucus);
  $sql_achv = "SELECT * FROM achievements WHERE number = '$num'";
  $query_achv = mysqli_query($conn,$sql_achv);
  // echo $query;
  $result_focus = mysqli_fetch_all($query_focus,MYSQLI_ASSOC); // 获取结果集中的所有数据，返回关联数组
  $result_achv = mysqli_fetch_all($query_achv,MYSQLI_ASSOC);

  // array_push(array,value1,value2,...),向数组尾部插入一个或多个元素，这里用来将两个数组首尾相连
  $result = array();
  array_push($result,$result_focus); 
  array_push($result,$result_achv);
  echo json_encode($result); //json编码格式输出
  // echo json_encode($result_achv);

?>