#$Id$
# 資料表格式： `dds`
#
# 請將您的資料表 CREATE TABLE 語法置於下。
# 若無，則請將本檔 module.sql 刪除。

CREATE TABLE dds (
  O_NAME varchar(20)   ,
  D_NAME varchar(20)   ,
  D_NUM int(11)   ,
  D_DATE varchar(20)   ,
  D_BACKUP varchar(20)   ,
  D_ROWID int(11) NOT NULL  auto_increment,
  PRIMARY KEY  (D_ROWID),
  KEY index_d_name (D_NAME),
  KEY index_o_name (O_NAME),
  KEY index_d_num (D_NUM)
)


