<?php
include "config.php";
SelectMenu("index.php","代導師");
?>
<style type="text/css">
<!--
.style4 {font-size: large}
-->
</style>

<table  border="1">
  <tr>
    <td bgcolor="#FF99FF"><span class="style4">功能</span></td>
    <td bgcolor="#FF99FF"><span class="style4">說明</span></td>
  </tr>
  <tr>
    <td bgcolor="#FFFF66">新增時數</td>
    <td bgcolor="#FFFF66">當專任老師完成代導師任務後在此輸入，才可累積時數。</td>
  </tr>
  <tr>
    <td bgcolor="#00CCFF">查詢、修改、刪除</td>
    <td bgcolor="#00CCFF">可以依據各欄位查詢後修改資料。</td>
  </tr>
  <tr>
    <td bgcolor="#FFFF66">全部修改、刪除</td>
    <td bgcolor="#FFFF66">全部修改、刪除，如果資料量很大時間較久，所以不建議使用。</td>
  </tr>
  <tr>
    <td bgcolor="#00CCFF">班級查詢代導師</td>
    <td bgcolor="#00CCFF">依據班級查詢代導師時數，但是會整合代導師時數，例如王老師代理105班4小時，代理106班8小時，查詢時會出現12小時，是本程式最主要功能。</td>
  </tr>
  <tr>
    <td bgcolor="#FFFF66">所有代導師查詢</td>
    <td bgcolor="#FFFF66">同班級查詢代導師，但會傳回所有代導師，這個功能有認證，並有下載功能。</td>
  </tr>
  <tr>
    <td bgcolor="#00CCFF">備份、回存</td>
    <td bgcolor="#00CCFF">每學年要用此功能，查詢時才會出現代導師姓名，但是要小心使用，因為會刪除所有資料，所以也有資料備份、回存功能。</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?
FootCode();
?>