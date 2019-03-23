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
  $smallID = $_GET['smallclassID'];
  $sql = "SELECT * FROM event WHERE smallclassID = '$smallID'";
  $query = mysqli_query($conn,$sql);
  // echo $query;
  $result = mysqli_fetch_all($query,MYSQLI_ASSOC); // 获取结果集中的所有数据，返回数组
  // echo $result['password'];
  // print ($query);
  // var_dump($result);   //显示变量值，变量类型，变量长度
  echo json_encode($result); //json编码格式输出
  // $results = array();
  // while($row = mysqli_fetch_assoc($query))        //在结果集中只取一条数据，返回数组
  //   {
  //     $results = $row;
  //     // echo "smallclassID:".$results['smallclassID']."smallName:".$results['smallName']."bigclass:".$results['bigclass']."discribe:".$results['discribe'];
  //     // 将数组转成json格式
  //     // echo json_encode($results['smallName'],JSON_UNESCAPED_UNICODE);
  //     echo json_encode($results);
  //   }
?>