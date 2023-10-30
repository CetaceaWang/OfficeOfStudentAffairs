2020.05.10 因應 SFS3 學務系統主機要關機，把學務處軟體：[代導師]、[整潔秩序] 改為單機操作，執行畫面如下：<br />
<br />
<div class="separator" style="clear: both; text-align: center;">
<a href="http://4.bp.blogspot.com/-ysObPorTrWQ/XrdlWwLbLdI/AAAAAAACUy8/H_X_dvEAlysdsm1OX5T55b_rmsIgz4QzwCK4BGAYYCw/s1600/%25E6%2593%25B7%25E5%258F%2596.JPG" style="margin-left: 1em; margin-right: 1em;"><img border="0" height="160" src="https://4.bp.blogspot.com/-ysObPorTrWQ/XrdlWwLbLdI/AAAAAAACUy8/H_X_dvEAlysdsm1OX5T55b_rmsIgz4QzwCK4BGAYYCw/s640/%25E6%2593%25B7%25E5%258F%2596.JPG" width="640" /></a></div>
<br />
<!--more--><a href="https://drive.google.com/open?id=1DlZA69NP3oTemUkn5oQS3tupL7SifCWm" target="_blank">檔案下載</a>。<br />
安裝步驟：<br />
1. 下載 XAMPP並安裝。<br />
2. 更改 php.ini 中的 date.timezone=Asia/Taipei<br />
3. 設定自動啟動 Apache及 MySQL。<br />
4. 開 啟 phpmyadmin建立資料庫 office_of_student_affairs及資料表 dds(dds/module.sql)。<br />
5. 開 啟 瀏覽 器 執行 index.html<br />
6. cleord/config.php 的 $school_sshort_name="仁愛國中 " 要改。<div><br /></div><div>2023.10.30 版本 1.02更新功能，將index.html 及 update.php 放入首頁目錄，上方即可出更新按鈕</div>
