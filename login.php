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
  $num = $_GET['number'];
  // $num = '123';
  $sql = "SELECT * FROM userlist WHERE number = '$num'";
  $query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_assoc($query); //获取mysqli_query（）只取一条数据，返回数组
  // echo $result['password'];
  // var_dump($result);   //显示变量值，变量类型，变量长度
  echo json_encode($result); //json编码格式输出
  // $results = array();
  // while($row = mysqli_fetch_assoc($query))
  //   {
  //     $results[] = $row;
  //       // 将数组转成json格式
  //     echo json_encode($results);
  // }
?>