#$Id$
# ��ƪ�榡�G `dds`
#
# �бN�z����ƪ� CREATE TABLE �y�k�m��U�C
# �Y�L�A�h�бN���� module.sql �R���C

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


