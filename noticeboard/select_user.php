<?php
	//����
	$query = "select * from test_user";
	$conn = mysql_connect("localhost","dongkeydev","Dong230723!", "dongkeydev");
	mysql_select_db("name", $conn);
	
	//�ѱ� �������� �ذ���. 
	/*
	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");
	*/
	mysql_query("set names utf8"); //������ �̰� �����̸� �ǳ�

	$result = mysql_query($query, $conn);

	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$res['id'] = $row["id"];
		$res['name'] = urlencode($row["name"]);
		$res['text'] = urlencode($row["text"]);
		$res['photo'] =urlencode($row["photo"]);
		$res['url'] = urlencode($row["url"]);
		$res['reg'] = $row["reg"];
		$arr["result"][] = $res;
	}
	
	$json = json_encode ($arr);
	$json = urldecode ($json);
	print $json;
	mysql_close($conn);
?>i
