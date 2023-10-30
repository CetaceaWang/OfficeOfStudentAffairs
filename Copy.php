<?php
$DocRoot="C:\\xampp\\htdocs\\";
$DocFind="cleord\statistics.php";
if (!file_exists($DocRoot.$DocFind))
    if (file_exists($DocRoot."OfficeOfStudentAffairs\\".$DocFind))
        $DocRoot=$DocRoot."OfficeOfStudentAffairs\\";
    else{
        echo "找不到根目錄。 Can't find root directory.\n";
        exit;
    }
echo "根目錄： Root directory: ".$DocRoot."\n";
SaveFile("index.html",$DocRoot);
SaveFile("update.php",$DocRoot);
echo "\n";
function SaveFile($Name,$TargetDirectory){
    $TargetPath=$TargetDirectory.$Name;
    if (file_exists($TargetPath)) 
        rename($TargetPath, substr($TargetPath, 0, -3)."old");
    if (!copy($Name, $TargetPath)) 
        echo "檔案複製失敗... failed to copy $Name...\n";
    echo "檔案複製... copy $Name...\n";
}
?>