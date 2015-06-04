<?php
	// $arr = array(
	// 		'price' => 123,
	// 		'tickets' => 'fwresgesag'
	// 	);
	// echo json_encode($arr);
	// echo "string";

    $cb = htmlspecialchars($_GET['callback']);  // 接收回调函数，注意了，这里要做好过滤，防止xss攻击
  	echo $cb.'('.json_encode($arr).')';  // 返回客户端的数据为：cb({"name":"hcoding"})  这是一段js代码
?>