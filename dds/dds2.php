<?php
include "config.php";
SelectMenu("dds2.php","查詢、修改、刪除");
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
$main.=' 
  <form method="POST" action="'.$_SERVER['PHP_SELF'].'"> 
  <tr bgcolor="#00CCFF">
  <td><p><input type="text" name="O_NAME" size="10"></p></td>
  <td><p><input type="text" name="D_NAME" size="10"></p></td>
  <td><p><input type="text" name="D_DATE" size="20"></font></b></p></td>
  <td><p><input type="text" name="D_NUM" size="10"></font></b></p></td>
  <td><p><input type="text" name="D_BACKUP" size="20"></font></b></p></td>
  <td><p><input type="submit" value="查詢" name="B1"><input type="reset" value="清除" name="B2"></p></td>
  </tr>
  </form>
 ';
if (isset($_REQUEST["B1"]) && $_REQUEST["B1"]=="查詢")
	{
	dds_sel();
	}
$main.="</table>";	
echo $main;
FootCode();
function dds_sel()
	{
	global $CONN,$main,$mysqli;
	$sql_select="select * from dds where ";
	$and_num=0;
	if (isset($_REQUEST["O_NAME"]) && $_REQUEST["O_NAME"]!="")
		{
		$sql_select.="O_NAME LIKE '".$_REQUEST["O_NAME"]."' ";
		$and_num=1;
		}
	if (isset($_REQUEST["D_NAME"]) && $_REQUEST["D_NAME"]!="")
		{
		$sql_select.=if_and($and_num);
		$d_name=quotemeta($_REQUEST["D_NAME"]);
		$sql_select.="D_NAME LIKE '%".$d_name."%' ";
		$and_num=1;
		}
	if (isset($_REQUEST["D_NUM"]) && $_REQUEST["D_NUM"]!="")
		{
		$sql_select.=if_and($and_num);
		$sql_select.="D_NUM='".$_REQUEST["D_NUM"]."' ";
		$and_num=1;
		}
	if (isset($_REQUEST["D_DATE"]) && $_REQUEST["D_DATE"]!="")
		{
		$sql_select.=if_and($and_num);
		$sql_select.="D_DATE LIKE '".$_REQUEST["D_DATE"]."' ";
		$and_num=1;
		}
	if (isset($_REQUEST["D_BACKUP"]) && $_REQUEST["D_BACKUP"]!="")
		{
		$sql_select.=if_and($and_num);
		$sql_select.="D_BACKUP LIKE '".$_REQUEST["D_BACKUP"]."' ";
		$and_num=1;
		}
	if ($and_num==1)
		{
		//$recordSet=$CONN->Execute($sql_select) or user_error("查詢失敗！<br>$sql_select",256);
		if (!$record_set =$mysqli->query($sql_select))
		{error_echo ("dds2.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
		while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
			{
			$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'><tr bgcolor='#FFFFFF'><td>$O_NAME</td>
			<td>$D_NAME</td><td>$D_DATE</td><td>$D_NUM</td><td>$D_BACKUP</td><td ><input type='hidden' name='D_ROWID' value='$D_ROWID'>
			<input type='hidden' name='B1' value='查詢'><input type='hidden' name='O_NAME' value='".$_REQUEST["O_NAME"]."'>
			<input type='hidden' name='D_NAME' value='".$_REQUEST["D_NAME"]."'><input type='submit' value='修改' name='act_mod'>
			<input type='submit' value='刪除' name='act_del'></td></tr></form>";
			}
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
	//$recordSet=$CONN->Execute($sql_select) or user_error("查詢失敗！<br>$sql_select",256);
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds2.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
		{
		$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'><tr bgcolor='#FF00CC'><td>$O_NAME</td><td>$D_NAME</td>
		<td>$D_DATE</td><td>$D_NUM</td><td>$D_BACKUP</td><td ><input type='hidden' name='D_ROWID' value='$D_ROWID'>
		<input type='hidden' name='O_NAME' value='".$_REQUEST['O_NAME']."'>
		<input type='hidden' name='D_NAME' value='".$_REQUEST['D_NAME']."'>
		<input type='hidden' name='B1' value='查詢'><input type='submit' value='確定刪除' name='com_del'></td></tr></form>";
		}
	}
function com_del()
	{
	global $CONN,$mysqli;
	$sql_select = "delete from dds where D_ROWID='".$_REQUEST['D_ROWID']."'";
	//$recordSet=$CONN->Execute($sql_select) or user_error("刪除失敗！<br>$sql_select",256);
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds2.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	}	
function dds_mod()
	{
	global $CONN,$main,$mysqli;
	$sql_select = "select * from dds where D_ROWID='".$_REQUEST['D_ROWID']."'";
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds2.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	//$recordSet=$CONN->Execute($sql_select) or user_error("查詢失敗！<br>$sql_select",256);
	while (list($O_NAME,$D_NAME,$D_NUM,$D_DATE,$D_BACKUP,$D_ROWID)=$record_set->fetch_array(MYSQLI_NUM))
		{
		$main.="<form method='POST' action='".$_SERVER['PHP_SELF']."'>
		<tr bgcolor='#FF00CC'><td><input type='text' name='O_NAMEM' size='10' value='$O_NAME'></td>
		<td><input type='text' name='D_NAMEM' size='10' value='$D_NAME'></td>
		<td><input type='text' name='D_DATEM' size='20' value='$D_DATE'></td>
		<td><input type='text' name='D_NUMM' size='10' value='$D_NUM'></td>
		<td><input type='text' name='D_BACKUPM' size='20' value='$D_BACKUP'></td>
		<td ><input type='hidden' name='D_ROWID' value='$D_ROWID'>
		<input type='hidden' name='O_NAME' value='".$_REQUEST['O_NAME']."'>
		<input type='hidden' name='D_NAME' value='".$_REQUEST['D_NAME']."'>
		<input type='hidden' name='B1' value='查詢'><input type='submit' value='確定修改' name='com_mod'></td></tr></form>";
		}
	}
function com_mod()
	{
	global $CONN,$mysqli;
	$sql_select = "update dds set O_NAME='".$_REQUEST['O_NAMEM']."',D_NAME='".$_REQUEST['D_NAMEM']."',D_NUM='".$_REQUEST['D_NUMM']
	."',D_DATE='".$_REQUEST['D_DATEM']."',D_BACKUP='".$_REQUEST['D_BACKUPM']."'  where D_ROWID='".$_REQUEST['D_ROWID']."'";
	//$CONN->Execute($sql_select) or user_error("修改失敗！<br>$sql_select",256);
	//$sql_select = "select * from dds where D_ROWID='".$_REQUEST['D_ROWID']."'";
	if (!$record_set =$mysqli->query($sql_select))
	{error_echo ("dds2.php:".__LINE__."-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);}
	}				
?>