2020.05.10 因應 SFS3 學務系統主機要關機，把學務處軟體：[代導師]、[整潔秩序] 改為單機操作，執行畫面如下：<br />
<br />
<div class="separator" style="clear: both; text-align: center;">
<a href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjariaOASAX1DwsDUqWo6NgoIQz8KCYTP8cY6YeP4O6tRncs8sVz06lmiBMuEGRUmkfSfT_WB0MZrW4UV5_7p3EHEmM9FYHfLBMHgvOZffxy8xzsd-nrHOv9paYmRDf-HyF4lA_oQpMLPxq/s1600/%25E6%2593%25B7%25E5%258F%2596.JPG" style="margin-left: 1em; margin-right: 1em;"><img border="0" height="160" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjariaOASAX1DwsDUqWo6NgoIQz8KCYTP8cY6YeP4O6tRncs8sVz06lmiBMuEGRUmkfSfT_WB0MZrW4UV5_7p3EHEmM9FYHfLBMHgvOZffxy8xzsd-nrHOv9paYmRDf-HyF4lA_oQpMLPxq/s640/%25E6%2593%25B7%25E5%258F%2596.JPG" width="640" /></a></div>
<br />
<!--more--><a href="https://github.com/CetaceaWang/OfficeOfStudentAffairs/archive/refs/heads/main.zip" target="_blank">檔案下載</a>。<br />
安裝步驟：<br />
1. 下載 XAMPP並安裝。<br />
2. 更改 php.ini 中的 date.timezone=Asia/Taipei<br />
3. 設定自動啟動 Apache及 MySQL。<br />
4. 開 啟 phpmyadmin建立資料庫 office_of_student_affairs及資料表 dds(dds/module.sql)。<br />
5. 開 啟 瀏覽 器 執行 index.html<br />
6. cleord/config.php 的 $school_sshort_name="仁愛國中 " 要改。<div><br /></div><div>2023.10.30 版本 1.02更新功能，將index.html 及 update.php 放入首頁目錄，上方即可出更新按鈕</div><div><br /></div><div>2023.12.20 版本 1.03 更新功能，先使用[更新]等待更新完成後，可以開啟檔案"代導師時數暨商數統計表"，相關說明在"代導師時數暨商數統計表"中。</div><div><br /></div><div>2024.07.17&nbsp;版本 1.04 更新功能：</div><div><span>&nbsp; &nbsp; 1.[代導師]&gt;[備份、回存]&gt;[下載備份資料] 輸出檔案可讓 Excel 開啟</span><br /></div><div><span><span>&nbsp; &nbsp; 2.</span></span>[代導師]&gt;[備份、回存] 將工具程式"Csv2Csv" 連結放入。</div><div><span>&nbsp; &nbsp; 3.</span>update.php 可以更新中文檔案</div><div><br /></div><div><div>2024.08.01 版本 1.05 更新功能：</div><div><span>&nbsp; &nbsp; 1.</span>[代導師]&gt;[備份、回存] 將工具程式"代導師時數暨商數統計表"連結放入。</div><div><span>&nbsp; &nbsp; 2.</span>[代導師]&gt;[備份、回存] 將工具程式"製作代導師上傳檔案"連結放入。</div><div><span>&nbsp; &nbsp; 3.</span>[代導師]&gt;[備份、回存]&nbsp;簡化流程。</div></div><div><span><span>&nbsp; &nbsp; 4</span>.</span>[代導師]&gt;[所有代導師查詢]&gt;[下載csv]及[下載班級csv]均可用Excel 開啟。</div>
