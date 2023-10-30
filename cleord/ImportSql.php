<?php
include "config.php";
SelectMenu("Import.php","匯入 SQl");
$mysqli = new mysqli($DB_SERVER,$DB_LOGIN,$DB_PASSWORD,$DB_NAME);
if ($mysqli->connect_errno) {echo "連接資料庫失敗: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;exit();}
if (!$mysqli->set_charset("utf8")) {printf("資料庫設定無法設定utf8編碼: %s\r\n", $mysqli->error);exit();}
if(isset($_REQUEST["B2"]) && $_REQUEST["B2"]=="上傳SQL")
	{
	import_sql();
	}
	
$main=
'
<table border="1"> 
  <tr><td bgcolor="#CC00FF">
  <form enctype="multipart/form-data" method="POST" action="'.$_SERVER['PHP_SELF'].'">
  <input type="file" name="import" size="20"><input type="submit" value="上傳SQL" name="B2"></form></td> </tr></table>
    ';
echo $main;
?>
<font color="#FF00CC">★請注意[上傳上傳SQL]會完全刪除原有資料</font><br />
<?php
FootCode();
function import_sql()
	{
	global $mysqli;
	if ($_FILES['import']['size']>0 && $_FILES['import']['name'] != "") 
		{
		$sql="";
		$fp=fopen($_FILES['import']['tmp_name'],"r");
		$sql = fread($fp, filesize($_FILES['import']['tmp_name']));
		fclose($fp);
		if (!$record_set =$mysqli->multi_query($sql)) //一次執行多行 SQL
			{error_echo ("ImportSql.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
		echo '<li>'.date('Y/m/d h:i:s')." 已自[".$_FILES['import']['name']."]匯入CSV資料</li>";
		}
	}	
?>
</p>
