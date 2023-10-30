<?php
include "config.php";
SelectMenu("dds3.php","全部修改、刪除");
$mysqli = new mysqli($DB_SERVER,$DB_LOGIN,$DB_PASSWORD,$DB_NAME);
if ($mysqli->connect_errno) {echo "連接資料庫失敗: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;exit();}
if (!$mysqli->set_charset("utf8")) {printf("資料庫設定無法設定utf8編碼: %s\r\n", $mysqli->error);exit();}
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
  if (isset($_REQUEST["act_del"]) && $_REQUEST["act_del"]=="刪除")
  {
  dds_del();
  }
if (isset($_REQUEST["act_mod"]) && $_REQUEST["act_mod"]=="修改")
  {
  dds_mod();
  }
dds_all();
$main.="</table>";	
echo $main;
FootCode();
function dds_all()
	{
	global $CONN,$main,$mysqli;
	$sql_select="select * from dds ";
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds3.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
		{
		$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'><tr bgcolor='#FFFFFF'><td>$O_NAME</td>
		<td>$D_NAME</td><td>$D_DATE</td><td>$D_NUM</td><td>$D_BACKUP</td>
		<td ><input type='hidden' name='D_ROWID' value='$D_ROWID'>
		<input type='submit' value='修改' name='act_mod'><input type='submit' value='刪除' name='act_del'></td></tr></form>";
		}
	}
function if_and($and_num)
	{
	if ($and_num==1)
		{
		$sql_select="AND ";
		}
	else 
	    {
		$sql_select="";
		}	
	return $sql_select;	
	}	
function dds_del()
	{
	global $CONN,$main,$mysqli;
	$sql_select = "select * from dds where D_ROWID='".$_REQUEST['D_ROWID']."'";
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds3.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
		{
		$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'><tr bgcolor='#FF00CC'>
		<td>$O_NAME</td><td>$D_NAME</td><td>$D_DATE</td><td>$D_NUM</td><td>$D_BACKUP</td>
		<td ><input type='hidden' name='D_ROWID' value='$D_ROWID'><input type='submit' value='確定刪除' name='com_del'></td></tr></form>";
		}
	}
function com_del()
	{
	global $CONN,$mysqli;
	$sql_select = "delete from dds where D_ROWID='".$_REQUEST['D_ROWID']."'";
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds3.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	}	
function dds_mod()
	{
	global $CONN,$main,$mysqli;
	$sql_select = "select * from dds where D_ROWID='".$_REQUEST['D_ROWID']."'";
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds3.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
		{
		$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'><tr bgcolor='#FF00CC'>
		<td><input type='text' name='O_NAME' size='10' value='$O_NAME'></td>
		<td><input type='text' name='D_NAME' size='10' value='$D_NAME'></td>
		<td><input type='text' name='D_DATE' size='20' value='$D_DATE'></td>
		<td><input type='text' name='D_NUM' size='10' value='$D_NUM'></td>
		<td><input type='text' name='D_BACKUP' size='20' value='$D_BACKUP'></td>
		<td ><input type='hidden' name='D_ROWID' value='$D_ROWID'><input type='submit' value='確定修改' name='com_mod'></td></tr></form>";
		}
	}
function com_mod()
	{
	global $CONN,$mysqli;
	$sql_select = "update dds set O_NAME='".$_REQUEST['O_NAME']."',D_NAME='".$_REQUEST['D_NAME']."',D_NUM='"
	.$_REQUEST['D_NUM']."',D_DATE='".$_REQUEST['D_DATE']."',D_BACKUP='".$_REQUEST['D_BACKUP']."'  where D_ROWID='".$_REQUEST['D_ROWID']."'";
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds3.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	}				
?>