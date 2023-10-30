<?php
include "config.php";
if (CurlExist())
	echo "true";
else
	echo "false";
function CurlExist(){
    return function_exists('curl_version');
}
function export_sql()
{
	global $CONN, $filedata;
	$table="cleord";
	$q2 = $CONN->Execute("show create table `$table`");
	$sql = $q2->FetchRow();
	$mysql = $sql['Create Table'] . ";\r\n";
	//$CONN->setFetchMode(ADODB_FETCH_ASSOC);//«ü©w FetchRow() ¼Ò¦¡
	$q3 =  $CONN->Execute("select * from `$table`");
	while ($data = $q3->FetchRow()) {
		$keys = array_keys($data);
		$keys = array_map('addslashes', $keys);
		$keys = join('`,`', $keys);
		$keys = "`" . $keys . "`";
		$vals = array_values($data);
		$vals = array_map('addslashes', $vals);
		$vals = join("','", $vals);
		$vals = "'" . $vals . "'";
		$mysql .= "insert into `$table`($keys) values($vals);\r\n";
	}
	$filedata="DROP TABLE IF EXISTS $table;\r\n".$mysql;
}