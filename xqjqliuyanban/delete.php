<?php
$messageId=$_POST['messageId'];
if(!empty($messageId)){
	$conn=@mysql_connect("103.255.176.25","a0705142325","e332a055") or die("error");
	mysql_select_db("a0705142325",$conn);
	mysql_query("set names utf8");
	$flag=mysql_query("delete from message0404 where messageId='$messageId'");
	if($flag){
		echo '{"status":"10001","mes":"删除成功"}';
	}
}else{
	header("location:index.html");
}
?>