<?php
include "config.php";
SelectMenu("dds1.php","新增時數");
$mysqli = new mysqli($DB_SERVER,$DB_LOGIN,$DB_PASSWORD,$DB_NAME);
if ($mysqli->connect_errno) {echo "連接資料庫失敗: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;exit();}
if (!$mysqli->set_charset("utf8")) {printf("資料庫設定無法設定utf8編碼: %s\r\n", $mysqli->error);exit();}
if (isset($_REQUEST["B1"]) && $_REQUEST["B1"]=="新增")
	{
	dds_add();
	}
if (isset($_REQUEST["com_del"]) && $_REQUEST["com_del"]=="確定刪除")
	{
	com_del();
	}	
if (isset($_REQUEST["com_mod"]) && $_REQUEST["com_mod"]=="確定修改")
	{
	com_mod();
	}		
$main=
'
<table border="1"> <tr bgcolor="#FF99FF">
  <td><p><font size="4"><b>導師班級</b></font></p></td>
  <td><p><font size="4"><b>任課教師姓名</b></font></p></td>
  <td><p><b><font size="4">日期</font></b></p></td>
  <td><p><b><font size="4">時數</font></b></p></td>
  <td><p><b><font size="4">備註</font></b></p></td>
  <td><p><b><font size="4">功能按鈕</font>　</p></td>
  </tr>';
list5();
if (isset($_REQUEST["act_del"]) && $_REQUEST["act_del"]=="刪除")
	{
	dds_del();
	}
if (isset($_REQUEST["act_mod"]) && $_REQUEST["act_mod"]=="修改")
	{
	dds_mod();
	}
$main.=' 
  <form method="POST" action="'.$_SERVER['PHP_SELF'].'"> 
  <tr bgcolor="#00CCFF">
  <td><p><input type="text" name="tt1" size="10"></p></td>
  <td><p><input type="text" name="tt2" size="10"></p></td>
  <td><p><input type="text" name="tt3" size="20"></font></b></p></td>
  <td><p><input type="text" name="tt4" size="10"></font></b></p></td>
  <td><p><input type="text" name="tt5" size="20"></font></b></p></td>
  <td><p><input type="submit" value="新增" name="B1"><input type="reset" value="清除" name="B2"></p></td>
  </tr>
  </form>
  </table>
';
echo $main;
FootCode();
function list5(){
	global $CONN,$main,$mysqli;
	$sql_select="select * from dds ";
	//$recordSet=$CONN->Execute($sql_select) or user_error("讀取失敗！<br>$sql_select",256);
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds1.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	//$rec_cou=$recordSet->RecordCount();
	$rec_cou=$record_set->num_rows;
	if ($rec_cou<5) 
		{
		$rec_cou=1;
		}
	else 
		{
		$rec_cou=$rec_cou-5;
		}
	$sql_select="select * from dds LIMIT $rec_cou,5";
	//$recordSet=$CONN->Execute($sql_select) or user_error("讀取失敗！<br>$sql_select",256);
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds1.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	//while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$recordSet->FetchRow())
	while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
	{
		$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'><tr bgcolor='#FFFFFF'><td>$O_NAME</td><td>$D_NAME</td><td>$D_DATE</td><td>$D_NUM</td><td>$D_BACKUP</td><td ><input type='hidden' name='D_ROWID' value='$D_ROWID'><input type='submit' value='修改' name='act_mod'><input type='submit' value='刪除' name='act_del'></td></tr></form>";
	}
	
}
function dds_add()
	{
	global $CONN,$mysqli;
	$d_name=$_REQUEST["tt2"];
	$sql_insert = "insert into dds (O_NAME,D_NAME,D_NUM,D_DATE,D_BACKUP) values ('".$_REQUEST["tt1"]."','$d_name',
	'".$_REQUEST["tt4"]."','".$_REQUEST["tt3"]."','".$_REQUEST["tt5"]."')";
	//$CONN->Execute($sql_insert) or user_error("新增失敗！<br>$sql_insert",256);
	if (!$record_set =$mysqli->query($sql_insert))
	{error_echo ("dds1.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	}
function dds_del()
	{
	global $CONN,$main,$mysqli;
	$sql_select = "select * from dds where D_ROWID='".$_REQUEST["D_ROWID"]."'";
	//$recordSet=$CONN->Execute($sql_select) or user_error("查詢失敗！<br>$sql_select",256);
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds1.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	//while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$recordSet->FetchRow())
	while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
		{
		$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'><tr bgcolor='#FF00CC'><td>$O_NAME</td><td>$D_NAME</td><td>$D_DATE</td><td>$D_NUM</td><td>$D_BACKUP</td><td ><input type='hidden' name='D_ROWID' value='$D_ROWID'><input type='submit' value='確定刪除' name='com_del'></td></tr></form>";
		}
	}
	
function dds_mod()
	{
	global $CONN,$main,$mysqli;
	$sql_select = "select * from dds where D_ROWID='".$_REQUEST["D_ROWID"]."'";
	//$recordSet=$CONN->Execute($sql_select) or user_error("查詢失敗！<br>$sql_select",256);
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds1.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	//while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$recordSet->FetchRow())
	while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
		{
		$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'><tr bgcolor='#FF00CC'><td><input type='text' name='O_NAME' size='10' value='$O_NAME'></td><td><input type='text' name='D_NAME' size='10' value='$D_NAME'></td><td><input type='text' name='D_DATE' size='20' value='$D_DATE'></td><td><input type='text' name='D_NUM' size='10' value='$D_NUM'></td><td><input type='text' name='D_BACKUP' size='20' value='$D_BACKUP'></td><td ><input type='hidden' name='D_ROWID' value='$D_ROWID'><input type='submit' value='確定修改' name='com_mod'></td></tr></form>";
		}
	}	
	
function com_del()
	{
	global $CONN,$mysqli;
	$sql_select = "delete from dds where D_ROWID='".$_REQUEST["D_ROWID"]."'";
	//$recordSet=$CONN->Execute($sql_select) or user_error("刪除失敗！<br>$sql_select",256);
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds1.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	}
function com_mod()
	{
	global $CONN,$mysqli;
	$sql_select = "update dds set O_NAME='".$_REQUEST["O_NAME"]."',D_NAME='".$_REQUEST["D_NAME"]."',D_NUM='".$_REQUEST["D_NUM"]."',D_DATE='".$_REQUEST["D_DATE"]."',D_BACKUP='".$_REQUEST["D_BACKUP"]."'  where D_ROWID='".$_REQUEST["D_ROWID"]."'";
	//$CONN->Execute($sql_select) or user_error("修改失敗！<br>$sql_select",256);
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds1.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	}
?>