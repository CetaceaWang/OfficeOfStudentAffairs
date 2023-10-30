<?php
$DB_SERVER = "localhost";    // Database 伺服器的主機名稱
$DB_LOGIN = "root";                   // 登入資料庫的使用者
$DB_PASSWORD = "";                // 登入資料庫的密碼
$DB_NAME = "office_of_student_affairs";                       // 包含資料表的資料庫
$school_sshort_name="大華國中";
//"inscore.php"=>"輸入成績","statistics.php"=>"統計表","grade.php"=>"評比表","allstat.php"=>"期末統計表","setone.php"=>"期初設定"
function IsSelected($selectfilename, $filename)
{
	if ($filename == $selectfilename) {
		return '#FFF158';
	} else {
		return '#EFEFEF';
	}
}

function SelectMenu($selectfilename, $title)
{
	$menuHeader = '<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>' . $title . '</title>
	<link type="text/css" href="../themes/new/new.css" rel="stylesheet" />
	<link type="text/css" href="../themes/base/jquery-ui-1.8.2.custom.css" rel="stylesheet" />
</head>
<body  background="../images/background1.jpg">
	<table cellspacing=1 cellpadding=3><tr>
		<td class="tab" bgcolor="#EFEFEF">&nbsp;<a href="../index.html">首頁</a>&nbsp;</td>
		<td class="tab" bgcolor="' . IsSelected($selectfilename, "index.php") . '">&nbsp;<a href="index.php">整潔秩序</a>&nbsp;</td>
		<td class="tab" bgcolor="' . IsSelected($selectfilename, "inscore.php") . '">&nbsp;<a href="inscore.php">輸入成績</a>&nbsp;</td>
		<td class="tab" bgcolor="' . IsSelected($selectfilename, "statistics.php") . '">&nbsp;<a href="statistics.php">統計表</a>&nbsp;</td>
		<td class="tab" bgcolor="' . IsSelected($selectfilename, "grade.php") . '">&nbsp;<a href="grade.php">評比表</a>&nbsp;</td>
		<td class="tab" bgcolor="' . IsSelected($selectfilename, "allstat.php") . '">&nbsp;<a href="allstat.php">期末統計表</a>&nbsp;</td>
		<td class="tab" bgcolor="' . IsSelected($selectfilename, "setone.php") . '">&nbsp;<a href="setone.php">期初設定</a>&nbsp;</td>
		</tr></table>';
	echo $menuHeader;
}

function FootCode()
{
	$footer = '</body>
		</html>';
	echo $footer;
}
function error_echo($error_log)
{
	global $mysqli;
	echo $error_log . "<br>";
	$error_log = addslashes($error_log);
	exit();
}
function current_year_semester()
{
	global $mysqli, $current_year, $current_semester, $classnum;
	$query = "SELECT * FROM `year_semester_class` WHERE CURRENT_DATE() BETWEEN `start_day` AND `end_day`";
	if (!$record_set = $mysqli->query($query))
		error_echo("config.php:" . __LINE__ . "-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);
	if ($row = $record_set->fetch_assoc()) {
		$id = $row["id"];
		$current_year = $row["year"];
		$current_semester = $row["semester"];
		$classnum[1] = $row["class_number_1"];
		$classnum[2] = $row["class_number_2"];
		$classnum[3] = $row["class_number_3"];
	} else {
		error_echo("config.php:" . __LINE__ . "-找不到學期");
	}
	return $id;
}
function get_week_array()
{
	global $mysqli, $current_year, $current_semester;
	// 取得開學跟結束日期
	$sql_select = "select start_day,end_day from year_semester_class where year = $current_year and semester = $current_semester ";
	if (!$record_set = $mysqli->query($sql_select))
		error_echo("config.php:" . __LINE__ . "-查詢失敗: (" . $mysqli->errno . ") " . $mysqli->error);
	if ($row = $record_set->fetch_assoc()) {
		$semester_start_date = $row["start_day"];
		$semester_end_date = $row["end_day"];
	}
	$week_date = date("w", strtotime($semester_start_date));
	$semester_start_date = date("Y-m-d", strtotime($semester_start_date . "-$week_date day"));
	$semester_end_date = date("Y-m-d", strtotime($semester_end_date . "7 day"));
	$array_nmber = 1;
	$week_sunday = $semester_start_date;
	do {
		$week_array[$array_nmber] = $week_sunday;
		$week_sunday = date("Y-m-d", strtotime($week_sunday . "7 day"));
		$array_nmber++;
	} while ($week_sunday < $semester_end_date);
	return $week_array;
}
function DtoCh($dday="", $st="-") {
	if (!$dday) //使用預設日期
	$dday = date("Y-m-j");
	//把西元日期改為民國日期  $st為分隔符號
	  $tok = strtok($dday,$st) ;
	  $i = 0 ;
	  while ($tok) {
		  $d[$i] =$tok ;
		  $tok = strtok($st) ;
		  $i = $i+1 ;
	  }
	  $d[0] = $d[0] - 1911 ;
  
	  $cday = $d[0]."-".$d[1]."-".$d[2] ;
	  return $cday ;
  }
  function GetdayAdd($dday ,$dayn,$st="-") {
	//日期中加減日數
	  $tok = strtok($dday,$st) ;
	  $i = 0 ;
	  while ($tok) {
		  $d[$i] =$tok ;
		  $tok = strtok($st) ;
		  $i = $i+1 ;
	  }
	  return date("Y-m-d",mktime(0,0,0,$d[1],$d[2] + $dayn,$d[0])) ;
  }  

?>
