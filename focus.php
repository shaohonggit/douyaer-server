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
  $uNum = $_GET[number];
  $uName = $_GET['username'];
  $uClass = $_GET['class'];
  $evnName = $_GET['eventName'];
  $sql_1 = "SELECT * FROM focuslist WHERE number = '$num'";
  $query_1 = mysqli_query($conn,$sql_1);
  if ($query_1) {
    $sql = "INSERT INTO focuslist (username, number, class, eventName) VALUES ('$uName','$uNum','$uClass','$evnName')";
  // $sql = "INSERT INTO focuslist (eventName) VALUES ('EI期刊论文') WHERE nuber = '123456'";
  // $sql = "SELECT * FROM detail WHERE eventID = '$evnID'";
    $query = mysqli_query($conn,$sql);
    if ($query) {
      echo "新记录插入成功";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo "Error:" . $sql_1 . "<br>" . mysqli_error($conn);
  }
  // echo $query;
  // $result = mysqli_fetch_all($query,MYSQLI_ASSOC); // 获取结果集中的所有数据，返回数组
  // echo $result['password'];
  // print ($query);
  // var_dump($result);   //显示变量值，变量类型，变量长度
  // echo json_encode($result); //json编码格式输出
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