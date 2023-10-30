<?php
   $DB_SERVER="localhost";    // Database 伺服器的主機名稱
   $DB_LOGIN="root";                   // 登入資料庫的使用者
   $DB_PASSWORD="";                // 登入資料庫的密碼
   $DB_NAME="office_of_student_affairs";                       // 包含資料表的資料庫
   //$school_menu_p= array("dds1.php"=>"新增時數","dds2.php"=>"查詢、修改、刪除","dds3.php"=>"全部修改、刪除","dds4.php"=>"班級查詢代導師","dds5.php"=>"所有代導師查詢","dds6.php"=>"備份、回存");
 function IsSelected($selectfilename,$filename)
 {
	if ($filename==$selectfilename)
		{
		return '#FFF158';
		}
	else
		{
		return '#EFEFEF';
		}
 } 

function SelectMenu($selectfilename,$title)
	{
$menuHeader='<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>'.$title.'</title>
	<link type="text/css" href="../themes/new/new.css" rel="stylesheet" />
	<link type="text/css" href="../themes/base/jquery-ui-1.8.2.custom.css" rel="stylesheet" />
</head>
<body  background="../images/background1.jpg">
	<table cellspacing=1 cellpadding=3><tr>
		<td class="tab" bgcolor="#EFEFEF">&nbsp;<a href="../index.html">首頁</a>&nbsp;</td>
		<td class="tab" bgcolor="'.IsSelected($selectfilename,"index.php").'">&nbsp;<a href="index.php">代導師</a>&nbsp;</td>
		<td class="tab" bgcolor="'.IsSelected($selectfilename,"dds1.php").'">&nbsp;<a href="dds1.php">新增時數</a>&nbsp;</td>
		<td class="tab" bgcolor="'.IsSelected($selectfilename,"dds2.php").'">&nbsp;<a href="dds2.php">查詢、修改、刪除</a>&nbsp;</td>
		<td class="tab" bgcolor="'.IsSelected($selectfilename,"dds3.php").'">&nbsp;<a href="dds3.php">全部修改、刪除</a>&nbsp;</td>
		<td class="tab" bgcolor="'.IsSelected($selectfilename,"dds4.php").'">&nbsp;<a href="dds4.php">班級查詢代導師</a>&nbsp;</td>
		<td class="tab" bgcolor="'.IsSelected($selectfilename,"dds5.php").'">&nbsp;<a href="dds5.php">所有代導師查詢</a>&nbsp;</td>
		<td class="tab" bgcolor="'.IsSelected($selectfilename,"dds6.php").'">&nbsp;<a href="dds6.php">備份、回存</a>&nbsp;</td>

		</tr></table>';
echo $menuHeader;
    }

    function FootCode()
    {
        $footer='</body>
		</html>';
echo $footer;
	}
	function error_echo ($error_log)
      {
            global $mysqli;
            echo $error_log."<br>";
            $error_log=addslashes ($error_log);
            exit();
      }   
?>