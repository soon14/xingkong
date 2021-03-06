<?
$con_play_arr=array('code'=>array('5X','4x2','3X2','3X3','3X1','2X2','2X1','1X','DXDS'),'firstcode'=>'5X','lot_date'=>'','lot_num'=>'');
$con_title_arr=array(
  '5X'=>array('fullname'=>'五星','mode'=>'default'),
  '4x2'=>array('fullname'=>'四星','mode'=>''),
  '3X1'=>array('fullname'=>'前三','mode'=>'default'),
  '3X3'=>array('fullname'=>'中三','mode'=>'default'),
  '3X2'=>array('fullname'=>'后三','mode'=>'default'),
  '1X'=>array('fullname'=>'一星','mode'=>'default'),
  'DXDS'=>array('fullname'=>'大小单双','mode'=>'default'),
  '2X1'=>array('fullname'=>'前二','mode'=>''),
  '2X2'=>array('fullname'=>'后二','mode'=>'')
);

$con_code_arr=array(
  '1X'=>array(
      '1X_dwd'=>array('ListKey'=>'1X_dwd','CodeTile'=>'定位胆','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '2X1'=>array(
      '2X_1_zhxfs'=>array('ListKey'=>'2X_1_zhxfs','CodeTile'=>'直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_zhxds'=>array('ListKey'=>'2X_1_zhxds','CodeTile'=>'直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzhxhz'=>array('ListKey'=>'2X_1_2xzhxhz','CodeTile'=>'直选','ShowTile'=>'和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzhxkd'=>array('ListKey'=>'2X_1_2xzhxkd','CodeTile'=>'直选','ShowTile'=>'跨度','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzxfs'=>array('ListKey'=>'2X_1_2xzxfs','CodeTile'=>'组选','ShowTile'=>'组选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_zxds'=>array('ListKey'=>'2X_1_zxds','CodeTile'=>'组选','ShowTile'=>'组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzxhz'=>array('ListKey'=>'2X_1_2xzxhz','CodeTile'=>'组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzxbd'=>array('ListKey'=>'2X_1_2xzxbd','CodeTile'=>'组选','ShowTile'=>'组选包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '2X2'=>array(
      '2X_2_zhxfs'=>array('ListKey'=>'2X_2_zhxfs','CodeTile'=>'直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zhxds'=>array('ListKey'=>'2X_2_zhxds','CodeTile'=>'直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzhxhz'=>array('ListKey'=>'2X_2_2xzhxhz','CodeTile'=>'直选','ShowTile'=>'和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzhxkd'=>array('ListKey'=>'2X_2_2xzhxkd','CodeTile'=>'直选','ShowTile'=>'跨度','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxfs'=>array('ListKey'=>'2X_2_2xzxfs','CodeTile'=>'组选','ShowTile'=>'组选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zxds'=>array('ListKey'=>'2X_2_zxds','CodeTile'=>'组选','ShowTile'=>'组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxhz'=>array('ListKey'=>'2X_2_2xzxhz','CodeTile'=>'组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxbd'=>array('ListKey'=>'2X_2_2xzxbd','CodeTile'=>'组选','ShowTile'=>'组选包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3X1'=>array(
      '3X1_fs'=>array('ListKey'=>'3X1_fs','CodeTile'=>'直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_ds'=>array('ListKey'=>'3X1_ds','CodeTile'=>'直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_zhxhz'=>array('ListKey'=>'3X1_zhxhz','CodeTile'=>'直选','ShowTile'=>'和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_kd'=>array('ListKey'=>'3X1_kd','CodeTile'=>'直选','ShowTile'=>'跨度','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_zxhz'=>array('ListKey'=>'3X1_zxhz','CodeTile'=>'组选','ShowTile'=>'和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_z3'=>array('ListKey'=>'3X1_z3','CodeTile'=>'组选','ShowTile'=>'组三','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_z6'=>array('ListKey'=>'3X1_z6','CodeTile'=>'组选','ShowTile'=>'组六','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_hhzx'=>array('ListKey'=>'3X1_hhzx','CodeTile'=>'组选','ShowTile'=>'混合组选','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_bd'=>array('ListKey'=>'3X1_bd','CodeTile'=>'组选','ShowTile'=>'组选包胆','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_z3ds'=>array('ListKey'=>'3X1_z3ds','CodeTile'=>'组选','ShowTile'=>'组三单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_z6ds'=>array('ListKey'=>'3X1_z6ds','CodeTile'=>'组选','ShowTile'=>'组六单式','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_qsym'=>array('ListKey'=>'BDW_qsym','CodeTile'=>'不定位','ShowTile'=>'一码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_qsem'=>array('ListKey'=>'BDW_qsem','CodeTile'=>'不定位','ShowTile'=>'二码不定位','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3X2'=>array(
      '3X2_fs'=>array('ListKey'=>'3X2_fs','CodeTile'=>'直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_ds'=>array('ListKey'=>'3X2_ds','CodeTile'=>'直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_zhxhz'=>array('ListKey'=>'3X2_zhxhz','CodeTile'=>'直选','ShowTile'=>'和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_kd'=>array('ListKey'=>'3X2_kd','CodeTile'=>'直选','ShowTile'=>'跨度','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_zxhz'=>array('ListKey'=>'3X2_zxhz','CodeTile'=>'组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_z3'=>array('ListKey'=>'3X2_z3','CodeTile'=>'组选','ShowTile'=>'组三','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_z6'=>array('ListKey'=>'3X2_z6','CodeTile'=>'组选','ShowTile'=>'组六','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_hhzx'=>array('ListKey'=>'3X2_hhzx','CodeTile'=>'组选','ShowTile'=>'混选组选','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_bd'=>array('ListKey'=>'3X2_bd','CodeTile'=>'组选','ShowTile'=>'组选包胆','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_z3ds'=>array('ListKey'=>'3X2_z3ds','CodeTile'=>'组选','ShowTile'=>'组三单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_z6ds'=>array('ListKey'=>'3X2_z6ds','CodeTile'=>'组选','ShowTile'=>'组六单式','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_hsym'=>array('ListKey'=>'BDW_hsym','CodeTile'=>'不定位','ShowTile'=>'一码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_hsem'=>array('ListKey'=>'BDW_hsem','CodeTile'=>'不定位','ShowTile'=>'二码不定位','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3X3'=>array(
      '3X3_fs'=>array('ListKey'=>'3X3_fs','CodeTile'=>'直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_ds'=>array('ListKey'=>'3X3_ds','CodeTile'=>'直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_zhxhz'=>array('ListKey'=>'3X3_zhxhz','CodeTile'=>'直选','ShowTile'=>'和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_kd'=>array('ListKey'=>'3X3_kd','CodeTile'=>'直选','ShowTile'=>'直选跨度','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_zxhz'=>array('ListKey'=>'3X3_zxhz','CodeTile'=>'组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_z3'=>array('ListKey'=>'3X3_z3','CodeTile'=>'组选','ShowTile'=>'组三复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_z6'=>array('ListKey'=>'3X3_z6','CodeTile'=>'组选','ShowTile'=>'组六','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_hhzx'=>array('ListKey'=>'3X3_hhzx','CodeTile'=>'组选','ShowTile'=>'混合组选','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_bd'=>array('ListKey'=>'3X3_bd','CodeTile'=>'组选','ShowTile'=>'组选包胆','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_z3ds'=>array('ListKey'=>'3X3_z3ds','CodeTile'=>'组选','ShowTile'=>'组三单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_z6ds'=>array('ListKey'=>'3X3_z6ds','CodeTile'=>'组选','ShowTile'=>'组六单式','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_zsym'=>array('ListKey'=>'BDW_zsym','CodeTile'=>'不定位','ShowTile'=>'一码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_zsem'=>array('ListKey'=>'BDW_zsem','CodeTile'=>'不定位','ShowTile'=>'二码不定位','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '4x2'=>array(
      '4X_fs'=>array('ListKey'=>'4X_fs','CodeTile'=>'直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '4X_ds'=>array('ListKey'=>'4X_ds','CodeTile'=>'直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '4X_z24'=>array('ListKey'=>'4X_z24','CodeTile'=>'组选','ShowTile'=>'组选24','Rebates'=>'Normal','MaxNote'=>''),
      '4X_z12'=>array('ListKey'=>'4X_z12','CodeTile'=>'组选','ShowTile'=>'组选12','Rebates'=>'Normal','MaxNote'=>''),
      '4X_z6'=>array('ListKey'=>'4X_z6','CodeTile'=>'组选','ShowTile'=>'组选6','Rebates'=>'Normal','MaxNote'=>''),
      '4X_z4'=>array('ListKey'=>'4X_z4','CodeTile'=>'组选','ShowTile'=>'组选4','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_sxym'=>array('ListKey'=>'BDW_sxym','CodeTile'=>'不定位','ShowTile'=>'一码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_sxem'=>array('ListKey'=>'BDW_sxem','CodeTile'=>'不定位','ShowTile'=>'二码不定位','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '5X'=>array(
      '5X_fs'=>array('ListKey'=>'5X_fs','CodeTile'=>'直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '5X_ds'=>array('ListKey'=>'5X_ds','CodeTile'=>'直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z120'=>array('ListKey'=>'5X_z120','CodeTile'=>'组选','ShowTile'=>'组选120','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z60'=>array('ListKey'=>'5X_z60','CodeTile'=>'组选','ShowTile'=>'组选60','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z30'=>array('ListKey'=>'5X_z30','CodeTile'=>'组选','ShowTile'=>'组选30','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z20'=>array('ListKey'=>'5X_z20','CodeTile'=>'组选','ShowTile'=>'组选20','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z10'=>array('ListKey'=>'5X_z10','CodeTile'=>'组选','ShowTile'=>'组选10','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z5'=>array('ListKey'=>'5X_z5','CodeTile'=>'组选','ShowTile'=>'组选5','Rebates'=>'Normal','MaxNote'=>''),
      'BDW3_hsym'=>array('ListKey'=>'BDW3_hsym','CodeTile'=>'不定位','ShowTile'=>'一码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_wxem'=>array('ListKey'=>'BDW_wxem','CodeTile'=>'不定位','ShowTile'=>'二码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_wxsm'=>array('ListKey'=>'BDW_wxsm','CodeTile'=>'不定位','ShowTile'=>'三码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'QW_yffs'=>array('ListKey'=>'QW_yffs','CodeTile'=>'趣味','ShowTile'=>'一帆风顺','Rebates'=>'Normal','MaxNote'=>''),
      'QW_hscs'=>array('ListKey'=>'QW_hscs','CodeTile'=>'趣味','ShowTile'=>'好事成双','Rebates'=>'Normal','MaxNote'=>''),
      'QW_sxbx'=>array('ListKey'=>'QW_sxbx','CodeTile'=>'趣味','ShowTile'=>'三星报喜','Rebates'=>'Normal','MaxNote'=>''),
      'QW_sjfc'=>array('ListKey'=>'QW_sjfc','CodeTile'=>'趣味','ShowTile'=>'四季发财','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'DXDS'=>array(
      'DXDS_qedx'=>array('ListKey'=>'DXDS_qedx','CodeTile'=>'大小单双','ShowTile'=>'前二大小单双','Rebates'=>'Normal','MaxNote'=>''),
      'DXDS_hedx'=>array('ListKey'=>'DXDS_hedx','CodeTile'=>'大小单双','ShowTile'=>'后二大小单双','Rebates'=>'Normal','MaxNote'=>''),
      'DXDS_qsdx'=>array('ListKey'=>'DXDS_qsdx','CodeTile'=>'大小单双','ShowTile'=>'前三大小单双','Rebates'=>'Normal','MaxNote'=>''),
      'DXDS_hsdx'=>array('ListKey'=>'DXDS_hsdx','CodeTile'=>'大小单双','ShowTile'=>'后三大小单双','Rebates'=>'Normal','MaxNote'=>'')
  )
);
$con_play_pri=array(
  '3X2_fs'=>array('1700','1800','1900','2000'),
  '3X2_ds'=>array('1700','1800','1900','2000'),
  '3X2_zhxhz'=>array('1700','1800','1900','2000'),
  '3X2_kd'=>array('1700','1800','1900','2000'),
  '3X2_zh'=>array('1700|170|17','1800|180|18','1900|190|19','2000'),
  '3X2_z3'=>array('565','600','610','666.1624'),
  '3X2_z6'=>array('280','300','310','333.635'),
  '3X2_hhzx'=>array('565','600','610','663.365'),
  '3X2_zxhz'=>array('565','600','610','666.1624'),
  '3X2_bd'=>array('565','600','610','666.1624'),
  '3X2_hzws'=>array('17','18','19','20'),
  '3X2_tshm'=>array('170|28|6.2','180|30|6.6','190|32|6.8','195.6|30.17|7.1'),
  '3X2_z3ds'=>array('570','600','','666.1624'),
  '3X2_z6ds'=>array('280','300','','333.635'),
  '2X_1_zhxfs'=>array('170','180','190','200'),
  '2X_1_zhxds'=>array('170','180','190','200'),
  '2X_1_2xzhxhz'=>array('170','180','190','200'),
  '2X_1_2xzhxkd'=>array('170','180','190','200'),
  '2X_2_zhxfs'=>array('170','180','190','200'),
  '2X_2_zhxds'=>array('170','180','190','200'),
  '2X_2_2xzhxhz'=>array('170','180','190','200'),
  '2X_2_2xzhxkd'=>array('170','180','190','200'),
  '2X_1_2xzxfs'=>array('85','90','95','90'),
  '2X_1_zxds'=>array('85','90','95','90'),
  '2X_1_2xzxhz'=>array('85','90','95','90'),
  '2X_1_2xzxbd'=>array('85','90','95','90'),
  '2X_2_2xzxfs'=>array('85','90','95','90'),
  '2X_2_zxds'=>array('85','90','95','90'),
  '2X_2_2xzxhz'=>array('85','90','95','90'),
  'DXDS_hedx'=>array('6.8','7.2','7.6','7.82'),
  'DXDS_hsdx'=>array('13.6','14.5','15.2','15.7513'),
  'DXDS_qedx'=>array('6.8','7.2','7.6','7.82'),
  'DXDS_qsdx'=>array('13.6','14.5','15.2','15.2'),
  'QW_smqwsx'=>array('2450|950','2600|1000','2740|1060','1930'),
  'QW_wmqwsx'=>array('4900|620','5200|660','5480|700','1930'),
  'QW_hsqwex'=>array('245|95','260|100','274|106','193'),
  'QW_qsqwex'=>array('245|95','260|100','280|106','193'),
  'QW_wmqjsx'=>array('31000|470','33000|500','34500|530','1930'),
  'QW_smqjsx'=>array('6250|570','6600|600','6800|630','1930'),
  'QW_hsqjex'=>array('625|57','660|60','680|63','193'),
  'QW_qsqjex'=>array('625|57','660|60','680|63','193'),
  'QW_yffs'=>array('4','4.2','4.4','4.58'),
  'QW_hscs'=>array('20','22','22','22.99'),
  'QW_sxbx'=>array('200','210','220','229.9'),
  'QW_sjfc'=>array('3700','3900','4050','2299'),
  '3X1_fs'=>array('1700','1800','1900','2000'),
  '3X1_ds'=>array('1700','1800','1900','2000'),
  '3X1_zhxhz'=>array('1700','1800','1900','2000'),
  '3X1_kd'=>array('1700','1800','1900','2000'),
  '3X1_zh'=>array('1700|170|17','1800|180|18','1900|190|19','2000'),
  '3X1_z3'=>array('565','600','610','666.1624'),
  '3X1_z6'=>array('280','300','310','333.32'),
  '3X1_hhzx'=>array('565','600','610','333.32'),
  '3X1_zxhz'=>array('565','600','610','666.1624'),
  '3X1_bd'=>array('565','600','610','666.1624'),
  '3X1_hzws'=>array('17','18','19','20'),
  '3X1_tshm'=>array('170|28|6.2','180|30|6.6','190|32|6.8','195.6|30.17|7.1'),
  '3X3_fs'=>array('1700','1800','1900','2000'),
  '3X3_ds'=>array('1700','1800','1900','2000'),
  '3X3_zhxhz'=>array('1700','1800','1900','2000'),
  '3X3_kd'=>array('1700','1800','1900','2000'),
  '3X3_zh'=>array('1700|170|17','1800|180|18','1900|190|19','2000'),
  '3X3_z3'=>array('565','600','610','666.1624'),
  '3X3_z6'=>array('280','300','310','333.32'),
  '3X3_hhzx'=>array('565','600','610','333.32'),
  '3X3_zxhz'=>array('565','600','610','666.1624'),
  '3X3_bd'=>array('565','600','610','666.1624'),
  '3X3_hzws'=>array('17','18','19','20'),
  '3X3_tshm'=>array('170|28|6.2','180|30|6.6','190|32|7','195.6|30.17|7.1'),
  '5X_fs'=>array('','','','200000'),
  '5X_z120'=>array('','','','1667.47'),
  '5X_z60'=>array('','','','3333.13'),
  '5X_z30'=>array('','','','6665.67'),
  '5X_z20'=>array('','','','1000'),
  '5X_z10'=>array('','','','20000'),
  '5X_z5'=>array('','','','40000'),
  '5X_ds'=>array('','','','200000'),
  '4X_fs'=>array('','','','20000'),
  '4X_ds'=>array('','','','20000'),
  '4X_z24'=>array('','','','832'),
  '4X_z12'=>array('','','','1671'),
  '4X_z6'=>array('','','','3335'),
  '4X_z4'=>array('','','','5000'),
  '4X1_ds'=>array('','','','19300'),
  '4X1_fs'=>array('','','','19300'),
  '1X_dwd'=>array('','','','20'),
  'BDW_hsym'=>array('','','','7.3378'),
  'BDW_hsem'=>array('','','','36.6625'),
  'BDW_qsym'=>array('','','','7.22'),
  'BDW_qsem'=>array('','','','36.50'),
  'BDW3_hsym'=>array('','','','4.701'),
  'BDW_zsym'=>array('','','','7.118'),
  'BDW_zsem'=>array('','','','35.717'),
  'SH-q5'=>array('','','','20000|420|210|160|28|18|4|7|780'),
  'SH-q3'=>array('','','','149|34.2|5.6|5.6|6.98'),
  'SH-z3'=>array('','','','149|34.2|5.6|5.6|6.98'),
  'SH-h3'=>array('','','','149|34.2|5.6|5.6|6.98'),
  'BCH-q3'=>array('','','','1.28'),
  'BCH-q5'=>array('','','','1.59'),
  'BDW-z3'=>array('','','','3.39'),
  'BCH-h3'=>array('','','','1.28'),
  'BDW-q5'=>array('','','','2.26'),
  'BDW-q3'=>array('','','','3.39'),
  'BDW-h3'=>array('','','','3.39'),
  'KD-q5'=>array('','','','10100|114.68|21.26|10.76|9.06|548|42.24|14.8|9.06|12.86|2.15|13.86|3.54|3.96'),
  'KD-q3'=>array('','','','149|13.82|11.58|11.5|15.48|19.42|13.24|11.1|12.84|30.15|3.3|4.36|3.66|3.82'),
  'KD-z3'=>array('','','','149|13.82|11.58|11.5|15.48|19.42|13.24|11.1|12.84|30.15|3.3|4.36|3.66|3.82'),
  'KD-h3'=>array('','','','149|13.82|11.58|11.5|15.48|19.42|13.24|11.1|12.84|30.15|3.3|4.36|3.66|3.82'),
  'ZYSM-q5'=>array('','','','3.86'),
  'DWT-q1'=>array('','','','19.3'),
  'DWT-z1'=>array('','','','19.3'),
  'DWT-h1'=>array('','','','19.3'),
  'HZ-q3'=>array('','','','110.66|78.46|58.34|44.66|36.33|30.18|24.14|24.14|22.12|22.14|22.14|22.12|24.14|24.14|30.18|36.22|44.66|58.42|78.46|110.66'),
  'HZ-z3'=>array('','','','110.66|78.46|58.34|44.66|36.33|30.18|24.14|24.14|22.12|22.14|22.14|22.12|24.14|24.14|30.18|36.22|44.66|58.42|78.46|110.66'),
  'HZ-h3'=>array('','','','110.66|78.46|58.34|44.66|36.33|30.18|24.14|24.14|22.12|22.14|22.14|22.12|24.14|24.14|30.18|36.22|44.66|58.42|78.46|110.66'),
  '3LH-q3'=>array('','','','240'),
  '3LH-z3'=>array('','','','240'),
  '3LH-h3'=>array('','','','240'),
  '2TH-q3'=>array('','','','58.34'),
  '2TH-z3'=>array('','','','58.34'),
  '2TH-h3'=>array('','','','58.34'),
  '2BT-q3'=>array('','','','30.18'),
  '2BT-z3'=>array('','','','30.18'),
  '2BT-h3'=>array('','','','30.18'),
  'LHH-q5'=>array('','','','4.18|4.18|18.9'),
  'LHH-q3'=>array('','','','4.18|4.18|18.9'),
  'LHH-z3'=>array('','','','4.18|4.18|18.9'),
  'LHH-h3'=>array('','','','4.18|4.18|18.9'),
  'DN-q5'=>array('','','','22'),
  'DN-DXDS'=>array('','','','8'),
  '4X1_z24'=>array('','','','802.68'),
  '4X1_z4'=>array('','','','4825.5'),
  '4X1_z12'=>array('','','','1607.59'),
  '4X1_z6'=>array('','','','3215.18'),
  '4R_z6'=>array('','','','3335'),
  '4R_z12'=>array('','','','1671'),
  '4R_z24'=>array('','','','832'),
  '4R_z4'=>array('','','','5000'),
  'RXDS_5z4'=>array('','','','20000'),
  'RXFS_fs5z4'=>array('','','','19300'),
  '3X1_z6dt'=>array('','','','320.18'),
  '3X1_dt'=>array('','','','1930'),
  '3X_zsbt'=>array('','','','640.36'),
  '3X1_z6hz'=>array('','','','320.18'),
  '3X3_z3bt'=>array('','','','640.36'),
  '3X3_dt'=>array('','','','1930'),
  '3X3_z6dt'=>array('','','','320.18'),
  '3X3_z6hz'=>array('','','','320.18'),
  '3X2_z6dt'=>array('','','','320.18'),
  '3X2_z6hz'=>array('','','','320.18'),
  '3X2_dt'=>array('','','','1930'),
  '3X2_z3bt'=>array('','','','640.36'),
  'RXDS_zx5z3'=>array('','','','2000'),
  '3R_z6hz'=>array('','','','333.32'),
  '3R_z6dt'=>array('','','','320.18'),
  '3R_dt'=>array('','','','1930'),
  '3R_z6'=>array('','','','333.32'),
  '3R_z3bt'=>array('','','','640.36'),
  '3R_kd'=>array('','','','1930'),
  'RXDS_5z3'=>array('','','','1930'),
  'RXHZ_5z3'=>array('','','','1930'),
  'RXHZ_zx5z3'=>array('','','','640.36'),
  '3R_hhzx'=>array('','','','333.32'),
  'RXFS_fs5z3'=>array('','','','1930'),
  '4R_fs'=>array('','','','20000'),
  '3R_fs'=>array('','','','2000'),
  '3R_z3'=>array('','','','666.1624'),
  'BCH-z3'=>array('','','','1.28'),
  '2R_2xzxfs'=>array('','','','96.5'),
  '2R_2xzhxhz'=>array('','','','200'),
  '2R_2xzxhz'=>array('','','','100'),
  '2R_zhxds'=>array('','','','200'),
  '2R_zhxfs'=>array('','','','193'),
  '3R_ds'=>array('','','','1930'),
  '3R_zxhz'=>array('','','','640.820'),
  '3R_zhxhz'=>array('','','','2000'),
  '5X_zh'=>array('','','','200000'),
  'BDW_sxym'=>array('','','','5.7'),
  'BDW_sxem'=>array('','','','19.9'),
  'BDW_wxem'=>array('','','','13.3266'),
  'BDW_wxsm'=>array('','','','45.5625'),
  '4X_zh'=>array('','','','20000'),
  '3X1_z6ds'=>array('','','','333.32'),
  '3X1_z3ds'=>array('','','','666.1624'),
  '3X3_z3ds'=>array('','','','333.32'),
  '3X3_z6ds'=>array('','','','333.32'),
  '3R_z3ds'=>array('','','','666.1624'),
  '3R_z6ds'=>array('','','','333.32'),
  '2X_2_2xzxbd'=>array('','','','90'),
  'RXDS_zx5z2'=>array('','','','200'),
  '5X_lhh'=>array('','','','4.25|4.25|20'),
  '5X_DXDS'=>array('','','','3.8'),
  'LH_01'=>array('','','','4.46|4.46|20'),
  'LH_02'=>array('','','','4.46|4.46|20'),
  'LH_03'=>array('','','','4.46|4.46|20'),
  'LH_04'=>array('','','','4.46|4.46|20'),
  'LH_12'=>array('','','','4.46|4.46|20'),
  'LH_13'=>array('','','','4.46|4.46|20'),
  'LH_14'=>array('','','','4.46|4.46|20'),
  'LH_23'=>array('','','','4.46|4.46|20'),
  'LH_24'=>array('','','','4.46|4.46|20'),
  'LH_34'=>array('','','','4.46|4.46|20'),
  '2R_fs'=>array('','','','200'),
  'DXDSZH3'=>array('','','','4'),
  'ZYH'=>array('','','','4.4|4.4|20'),
  'ZXH'=>array('','','','4.4|4.4|20'),
  'ZXD'=>array('','','','20'),
  'DXDSZH'=>array('','','',' 2.8|5.8|3.6|4|4.6|3.4|2.8|5.8|4|4|4.7|3.5')
);

$con_play_time=array(
  '3X2_fs'=>array('','',''),
  '3X2_ds'=>array('','',''),
  '3X2_zhxhz'=>array('','',''),
  '3X2_kd'=>array('','',''),
  '3X2_zh'=>array('','',''),
  '3X2_z3'=>array('','',''),
  '3X2_z6'=>array('','',''),
  '3X2_hhzx'=>array('','',''),
  '3X2_zxhz'=>array('','',''),
  '3X2_bd'=>array('','',''),
  '3X2_hzws'=>array('','',''),
  '3X2_tshm'=>array('','',''),
  '3X2_z3ds'=>array('','',''),
  '3X2_z6ds'=>array('','',''),
  '2X_1_zhxfs'=>array('','',''),
  '2X_1_zhxds'=>array('','',''),
  '2X_1_2xzhxhz'=>array('','',''),
  '2X_1_2xzhxkd'=>array('','',''),
  '2X_2_zhxfs'=>array('','',''),
  '2X_2_zhxds'=>array('','',''),
  '2X_2_2xzhxhz'=>array('','',''),
  '2X_2_2xzhxkd'=>array('','',''),
  '2X_1_2xzxfs'=>array('','',''),
  '2X_1_zxds'=>array('','',''),
  '2X_1_2xzxhz'=>array('','',''),
  '2X_1_2xzxbd'=>array('','',''),
  '2X_2_2xzxfs'=>array('','',''),
  '2X_2_zxds'=>array('','',''),
  '2X_2_2xzxhz'=>array('','',''),
  'DXDS_hedx'=>array('','',''),
  'DXDS_hsdx'=>array('','',''),
  'DXDS_qedx'=>array('','',''),
  'DXDS_qsdx'=>array('','',''),
  'QW_smqwsx'=>array('','',''),
  'QW_wmqwsx'=>array('','',''),
  'QW_hsqwex'=>array('','',''),
  'QW_qsqwex'=>array('','',''),
  'QW_wmqjsx'=>array('','',''),
  'QW_smqjsx'=>array('','',''),
  'QW_hsqjex'=>array('','',''),
  'QW_qsqjex'=>array('','',''),
  'QW_yffs'=>array('','',''),
  'QW_hscs'=>array('','',''),
  'QW_sxbx'=>array('','',''),
  'QW_sjfc'=>array('','',''),
  '3X1_fs'=>array('223','500','50'),
  '3X1_ds'=>array('223','500','50'),
  '3X1_zhxhz'=>array('223','500','50'),
  '3X1_kd'=>array('223','500','50'),
  '3X1_zh'=>array('223','500','50'),
  '3X1_z3'=>array('223','500','50'),
  '3X1_z6'=>array('223','500','50'),
  '3X1_hhzx'=>array('223','500','50'),
  '3X1_zxhz'=>array('223','500','50'),
  '3X1_bd'=>array('223','500','50'),
  '3X1_hzws'=>array('223','500','50'),
  '3X1_tshm'=>array('223','500','50'),
  '3X3_fs'=>array('223','500','50'),
  '3X3_ds'=>array('223','500','50'),
  '3X3_zhxhz'=>array('223','500','50'),
  '3X3_kd'=>array('223','500','50'),
  '3X3_zh'=>array('223','500','50'),
  '3X3_z3'=>array('223','500','50'),
  '3X3_z6'=>array('223','500','50'),
  '3X3_hhzx'=>array('223','500','50'),
  '3X3_zxhz'=>array('223','500','50'),
  '3X3_bd'=>array('223','500','50'),
  '3X3_hzws'=>array('223','500','50'),
  '3X3_tshm'=>array('223','500','50'),
  '5X_fs'=>array('','',''),
  '5X_z120'=>array('','',''),
  '5X_z60'=>array('','',''),
  '5X_z30'=>array('','',''),
  '5X_z20'=>array('','',''),
  '5X_z10'=>array('','',''),
  '5X_z5'=>array('','',''),
  '5X_ds'=>array('','',''),
  '4X_fs'=>array('','',''),
  '4X_ds'=>array('','',''),
  '4X_z24'=>array('','',''),
  '4X_z12'=>array('','',''),
  '4X_z6'=>array('','',''),
  '4X_z4'=>array('','',''),
  '4X1_ds'=>array('','',''),
  '4X1_fs'=>array('','',''),
  '1X_dwd'=>array('','',''),
  'BDW_hsym'=>array('','',''),
  'BDW_hsem'=>array('','',''),
  'BDW_qsym'=>array('','',''),
  'BDW_qsem'=>array('','',''),
  'BDW3_hsym'=>array('','',''),
  'BDW_zsym'=>array('','',''),
  'BDW_zsem'=>array('','',''),
  'SH-q5'=>array('','',''),
  'SH-q3'=>array('','',''),
  'SH-z3'=>array('','',''),
  'SH-h3'=>array('','',''),
  'BCH-q3'=>array('','',''),
  'BCH-q5'=>array('','',''),
  'BDW-z3'=>array('','',''),
  'BCH-h3'=>array('','',''),
  'BDW-q5'=>array('','',''),
  'BDW-q3'=>array('','',''),
  'BDW-h3'=>array('','',''),
  'KD-q5'=>array('','',''),
  'KD-q3'=>array('','',''),
  'KD-z3'=>array('','',''),
  'KD-h3'=>array('','',''),
  'ZYSM-q5'=>array('','',''),
  'DWT-q1'=>array('','',''),
  'DWT-z1'=>array('','',''),
  'DWT-h1'=>array('','',''),
  'HZ-q3'=>array('','',''),
  'HZ-z3'=>array('','',''),
  'HZ-h3'=>array('','',''),
  '3LH-q3'=>array('','',''),
  '3LH-z3'=>array('','',''),
  '3LH-h3'=>array('','',''),
  '2TH-q3'=>array('','',''),
  '2TH-z3'=>array('','',''),
  '2TH-h3'=>array('','',''),
  '2BT-q3'=>array('','',''),
  '2BT-z3'=>array('','',''),
  '2BT-h3'=>array('','',''),
  'LHH-q5'=>array('','',''),
  'LHH-q3'=>array('','',''),
  'LHH-z3'=>array('','',''),
  'LHH-h3'=>array('','',''),
  'DN-q5'=>array('','',''),
  'DN-DXDS'=>array('','',''),
  '4X1_z24'=>array('','',''),
  '4X1_z4'=>array('','',''),
  '4X1_z12'=>array('','',''),
  '4X1_z6'=>array('','',''),
  '4R_z6'=>array('','',''),
  '4R_z12'=>array('','',''),
  '4R_z24'=>array('','',''),
  '4R_z4'=>array('','',''),
  'RXDS_5z4'=>array('','',''),
  'RXFS_fs5z4'=>array('','',''),
  '3X1_z6dt'=>array('','',''),
  '3X1_dt'=>array('','',''),
  '3X_zsbt'=>array('','',''),
  '3X1_z6hz'=>array('','',''),
  '3X3_z3bt'=>array('','',''),
  '3X3_dt'=>array('','',''),
  '3X3_z6dt'=>array('','',''),
  '3X3_z6hz'=>array('','',''),
  '3X2_z6dt'=>array('','',''),
  '3X2_z6hz'=>array('','',''),
  '3X2_dt'=>array('','',''),
  '3X2_z3bt'=>array('','',''),
  'RXDS_zx5z3'=>array('','',''),
  '3R_z6hz'=>array('','',''),
  '3R_z6dt'=>array('','',''),
  '3R_dt'=>array('','',''),
  '3R_z6'=>array('','',''),
  '3R_z3bt'=>array('','',''),
  '3R_kd'=>array('','',''),
  'RXDS_5z3'=>array('','',''),
  'RXHZ_5z3'=>array('','',''),
  'RXHZ_zx5z3'=>array('','',''),
  '3R_hhzx'=>array('','',''),
  'RXFS_fs5z3'=>array('','',''),
  '4R_fs'=>array('','',''),
  '3R_fs'=>array('','',''),
  '3R_z3'=>array('','',''),
  'BCH-z3'=>array('','',''),
  '2R_2xzxfs'=>array('','',''),
  '2R_2xzhxhz'=>array('','',''),
  '2R_2xzxhz'=>array('','',''),
  '2R_zhxds'=>array('','',''),
  '2R_zhxfs'=>array('','',''),
  '3R_ds'=>array('','',''),
  '3R_zxhz'=>array('','',''),
  '3R_zhxhz'=>array('','',''),
  '5X_zh'=>array('','',''),
  'BDW_sxym'=>array('','',''),
  'BDW_sxem'=>array('','',''),
  'BDW_wxem'=>array('','',''),
  'BDW_wxsm'=>array('','',''),
  '4X_zh'=>array('','',''),
  '3X1_z6ds'=>array('','',''),
  '3X1_z3ds'=>array('','',''),
  '3X3_z3ds'=>array('','',''),
  '3X3_z6ds'=>array('','',''),
  '3R_z3ds'=>array('','',''),
  '3R_z6ds'=>array('','',''),
  '2X_2_2xzxbd'=>array('','',''),
  'RXDS_zx5z2'=>array('','',''),
  '5X_lhh'=>array('','',''),
  '5X_DXDS'=>array('','',''),
  'LH_01'=>array('','',''),
  'LH_02'=>array('','',''),
  'LH_03'=>array('','',''),
  'LH_04'=>array('','',''),
  'LH_12'=>array('','',''),
  'LH_13'=>array('','',''),
  'LH_14'=>array('','',''),
  'LH_23'=>array('','',''),
  'LH_24'=>array('','',''),
  'LH_34'=>array('','',''),
  '2R_fs'=>array('','',''),
  'DXDSZH3'=>array('','',''),
  'ZYH'=>array('','',''),
  'ZXH'=>array('','',''),
  'ZXD'=>array('','',''),
  'DXDSZH'=>array('','','')
);

?>