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
  // $broad = '品德纪实';
  $broad = $_GET['broadHeading'];  //分号一定要有，不然列表没有内容
  $sql = "SELECT * FROM smallclass WHERE broadHeading = '$broad'";
  $query = mysqli_query($conn,$sql);
  // echo $query;
  $result = mysqli_fetch_all($query,MYSQLI_ASSOC); // 获取结果集中的所有数据，返回关联数组
  // echo $result['password'];
  // print ($query);
  // var_dump($result);   //显示变量值，变量类型，变量长度
  echo json_encode($result); //json编码格式输出
  // $results = array();
  // while($row = mysqli_fetch_assoc($query))        //在结果集中只取一条数据，返回关联数组
  //   {
  //     $results = $row;
  //     // echo "smallclassID:".$results['smallclassID']."smallName:".$results['smallName']."bigclass:".$results['bigclass']."discribe:".$results['discribe'];
  //     // 将数组转成json格式
  //     // echo json_encode($results['smallName'],JSON_UNESCAPED_UNICODE);
  //     echo json_encode($results);
  //   }
?>