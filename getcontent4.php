<?php
//這個檔案僅能用在執行php的伺服器上讀取php檔案內容，目前在github上沒作用
$Password="ef1e539726fbade3b40a0ceab8d4a4af";
$main='<form method="POST" action="'.$_SERVER['PHP_SELF'].'"> 
<input type="hidden" name="filename">
<input type="hidden" name="password">
<input type="hidden" value="upload" name="submit"></form>';
if (isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="upload")
  PrintContent();
echo $main;
function PrintContent()
{
  global $main,$Password;
  set_field("filename");
  set_field("password");
  if ($_REQUEST["password"]!=$Password || LeadWithPoint($_REQUEST["filename"]))
    $main='';
  else
    $main=FileExist($_REQUEST["filename"]);
}
function LeadWithPoint($Text){
  if ($Text[0]==".")
    return true;
  else 
    return false;
}
function set_field($name,$default=""){
  if (!isset($_REQUEST[$name]))
    $_REQUEST[$name]=$default;
}
function FileExist($url){
  $contents = @file_get_contents($url);
  if ($contents) 
    return $contents;
  else 
    return '';
}  
?>