DROP TABLE IF EXISTS cleord;
CREATE TABLE `cleord` (
  `prikey` int(11) NOT NULL AUTO_INCREMENT,
  `kind` tinyint(4) NOT NULL,
  `class` smallint(6) NOT NULL,
  `week` tinyint(4) NOT NULL,
  `Mon` tinyint(4) NOT NULL,
  `Tue` tinyint(4) NOT NULL,
  `Wed` tinyint(4) NOT NULL,
  `Thu` tinyint(4) NOT NULL,
  `Fri` tinyint(4) NOT NULL,
  `Sat` tinyint(4) NOT NULL,
  `Sun` tinyint(4) NOT NULL,
  `tscore` smallint(6) NOT NULL,
  `rank` varchar(6) NOT NULL,
  `memo` varchar(4) NOT NULL,
  PRIMARY KEY (`prikey`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('1','2','200','1','-2','1','2','3','4','-100','-100','0','','日期');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('2','2','201','1','80','98','88','94','87','0','0','447','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('3','2','202','1','81','99','82','95','86','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('4','2','203','1','82','99','81','96','85','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('5','2','204','1','83','98','80','97','84','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('6','2','205','1','84','97','80','98','83','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('7','2','206','1','85','96','81','99','82','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('8','2','207','1','86','95','82','99','81','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('9','2','208','1','87','94','83','98','80','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('10','2','209','1','88','93','84','97','80','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('11','2','210','1','89','92','85','96','81','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('12','2','211','1','90','91','86','95','82','0','0','444','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('13','2','212','1','91','90','87','94','83','0','0','445','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('14','2','213','1','92','89','88','93','84','0','0','446','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('15','2','214','1','93','88','89','92','85','0','0','447','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('16','2','215','1','94','87','90','91','86','0','0','448','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('17','2','216','1','95','86','91','90','87','0','0','449','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('18','2','217','1','96','85','92','89','88','0','0','450','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('19','2','218','1','97','84','93','88','89','0','0','451','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('20','2','100','1','-2','1','2','3','4','-100','-100','0','','日期');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('21','2','101','1','71','72','73','94','87','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('22','2','102','1','81','99','82','95','86','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('23','2','103','1','82','99','81','96','85','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('24','2','104','1','83','98','80','97','84','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('25','2','105','1','84','97','80','98','83','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('26','2','106','1','85','96','81','99','82','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('27','2','107','1','86','95','82','99','81','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('28','2','108','1','87','94','83','98','80','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('29','2','109','1','88','93','84','97','80','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('30','2','110','1','89','92','85','96','81','0','0','443','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('31','2','111','1','90','91','86','95','82','0','0','444','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('32','2','112','1','91','90','87','94','83','0','0','445','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('33','2','113','1','92','89','88','93','84','0','0','446','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('34','2','114','1','93','88','89','92','85','0','0','447','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('35','2','115','1','94','87','90','91','86','0','0','448','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('36','2','116','1','95','86','91','90','87','0','0','449','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('37','2','117','1','96','85','92','89','88','0','0','450','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('38','2','118','1','97','84','93','88','89','0','0','451','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('39','2','300','1','-2','1','2','3','4','-100','-100','0','','日期');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('40','2','301','1','99','80','98','82','96','0','0','455','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('41','2','302','1','98','80','99','81','97','0','0','455','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('42','2','303','1','97','81','99','80','98','0','0','455','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('43','2','304','1','96','82','98','80','99','0','0','455','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('44','2','305','1','95','83','97','81','99','0','0','455','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('45','2','306','1','94','84','96','82','98','0','0','454','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('46','2','307','1','93','85','95','83','97','0','0','453','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('47','2','308','1','92','86','94','84','96','0','0','452','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('48','2','309','1','91','87','93','85','95','0','0','451','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('49','2','310','1','90','88','92','86','94','0','0','450','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('50','2','311','1','89','89','91','87','93','0','0','449','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('51','2','312','1','88','90','90','88','92','0','0','448','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('52','2','313','1','87','91','89','89','91','0','0','447','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('53','2','314','1','86','92','88','90','90','0','0','446','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('54','2','315','1','85','93','87','91','89','0','0','445','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('55','2','316','1','84','94','86','92','88','0','0','444','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('56','2','317','1','83','95','85','93','87','0','0','443','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('57','2','318','1','82','96','84','94','86','0','0','442','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('58','2','319','1','81','97','83','95','85','0','0','441','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('59','2','100','2','-2','1','2','3','4','-100','-100','0','','日期');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('60','2','101','2','80','90','88','90','80','0','0','428','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('61','2','102','2','80','90','88','90','81','0','0','429','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('62','2','103','2','80','90','84','90','82','0','0','426','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('63','2','104','2','80','90','84','90','83','0','0','427','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('64','2','105','2','80','90','84','90','84','0','0','428','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('65','2','106','2','80','90','84','90','84','0','0','428','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('66','2','107','2','80','90','84','90','83','0','0','427','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('67','2','108','2','80','90','84','90','82','0','0','426','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('68','2','109','2','80','90','84','90','86','0','0','430','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('69','2','110','2','80','90','84','90','87','0','0','431','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('70','2','111','2','80','90','84','90','89','0','0','433','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('71','2','112','2','80','90','84','90','89','0','0','433','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('72','2','113','2','80','90','84','90','90','0','0','434','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('73','2','114','2','80','90','84','90','81','0','0','425','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('74','2','115','2','80','90','84','90','91','0','0','435','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('75','2','116','2','80','90','84','90','92','0','0','436','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('76','2','117','2','80','90','84','90','93','0','0','437','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('77','2','118','2','80','90','84','90','95','0','0','439','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('78','2','200','2','-2','1','2','3','4','-100','-100','0','','日期');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('79','2','201','2','80','80','80','80','81','0','0','401','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('80','2','202','2','80','80','80','80','91','0','0','411','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('81','2','203','2','80','80','80','80','90','0','0','410','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('82','2','204','2','80','80','80','80','96','0','0','416','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('83','2','205','2','80','80','80','80','95','0','0','415','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('84','2','206','2','80','80','80','80','94','0','0','414','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('85','2','207','2','80','80','80','80','83','0','0','403','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('86','2','208','2','80','80','80','80','84','0','0','404','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('87','2','209','2','80','80','80','80','93','0','0','413','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('88','2','210','2','80','80','80','80','86','0','0','406','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('89','2','211','2','80','80','80','80','94','0','0','414','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('90','2','212','2','80','80','80','80','95','0','0','415','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('91','2','213','2','80','80','80','80','85','0','0','405','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('92','2','214','2','80','80','80','80','92','0','0','412','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('93','2','215','2','80','80','80','80','81','0','0','401','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('94','2','216','2','80','80','80','80','92','0','0','412','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('95','2','217','2','80','80','80','80','91','0','0','411','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('96','2','218','2','80','80','80','80','90','0','0','410','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('97','2','300','2','-2','1','2','3','4','-100','-100','0','','日期');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('98','2','301','2','80','80','81','82','91','0','0','414','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('99','2','302','2','81','80','81','82','92','0','0','416','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('100','2','303','2','92','80','81','82','93','0','0','428','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('101','2','304','2','93','80','81','82','94','0','0','430','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('102','2','305','2','80','80','80','80','84','0','0','404','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('103','2','306','2','80','80','80','80','86','0','0','406','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('104','2','307','2','80','80','80','80','82','0','0','402','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('105','2','308','2','80','80','80','80','80','0','0','400','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('106','2','309','2','80','80','80','80','81','0','0','401','','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('107','2','310','2','80','90','80','90','86','0','0','426','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('108','2','311','2','80','90','80','90','84','0','0','424','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('109','2','312','2','80','90','91','90','91','0','0','442','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('110','2','313','2','80','90','91','90','92','0','0','443','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('111','2','314','2','80','90','91','90','93','0','0','444','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('112','2','315','2','80','90','91','90','84','0','0','435','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('113','2','316','2','80','90','91','90','90','0','0','441','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('114','2','317','2','80','90','91','90','92','0','0','443','特優','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('115','2','318','2','80','90','91','90','91','0','0','442','優等','');
insert into `cleord`(`prikey`,`kind`,`class`,`week`,`Mon`,`Tue`,`Wed`,`Thu`,`Fri`,`Sat`,`Sun`,`tscore`,`rank`,`memo`) values('116','2','319','2','80','90','91','90','90','0','0','441','優等','');
DROP TABLE IF EXISTS year_semester_class;
CREATE TABLE `year_semester_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `class_number_1` int(11) NOT NULL,
  `class_number_2` int(11) NOT NULL,
  `class_number_3` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
insert into `year_semester_class`(`id`,`year`,`semester`,`start_day`,`end_day`,`class_number_1`,`class_number_2`,`class_number_3`) values('1','108','2','2020-02-25','2020-07-14','18','18','19');
insert into `year_semester_class`(`id`,`year`,`semester`,`start_day`,`end_day`,`class_number_1`,`class_number_2`,`class_number_3`) values('4','109','2','2021-02-25','2021-07-14','18','18','19');
insert into `year_semester_class`(`id`,`year`,`semester`,`start_day`,`end_day`,`class_number_1`,`class_number_2`,`class_number_3`) values('6','110','1','2021-08-01','2022-01-31','16','17','19');
insert into `year_semester_class`(`id`,`year`,`semester`,`start_day`,`end_day`,`class_number_1`,`class_number_2`,`class_number_3`) values('7','110','2','2022-02-11','2022-06-30','16','17','19');
insert into `year_semester_class`(`id`,`year`,`semester`,`start_day`,`end_day`,`class_number_1`,`class_number_2`,`class_number_3`) values('8','112','1','2023-08-25','2024-01-20','18','18','19');
