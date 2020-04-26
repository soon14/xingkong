<?
$con_play_arr=array('code'=>array('5X','4x2','3X2','3X3','3X1','2X2','2X1','1X','BDW','DXDS','LH','2R','3R','4R'),'firstcode'=>'3X3','lot_date'=>'','lot_num'=>'');
$con_title_arr=array(
  '5X'=>array('fullname'=>'五星','mode'=>'default'),
  '4x2'=>array('fullname'=>'四星','mode'=>''),
  '4R'=>array('fullname'=>'任四','mode'=>''),
  '3X1'=>array('fullname'=>'前三','mode'=>'default'),
  '3X3'=>array('fullname'=>'中三','mode'=>'default'),
  '3X2'=>array('fullname'=>'后三','mode'=>'default'),
  '1X'=>array('fullname'=>'定位胆','mode'=>'default'),
  '3R'=>array('fullname'=>'任三','mode'=>''),
  'BDW'=>array('fullname'=>'不定位','mode'=>'default'),
  'DXDS'=>array('fullname'=>'大小单双','mode'=>'default'),
  '2X1'=>array('fullname'=>'二星','mode'=>''),
  '2R'=>array('fullname'=>'任二','mode'=>'')
);

$con_code_arr=array(
  '1X'=>array(
      '1X_dwd'=>array('ListKey'=>'1X_dwd','CodeTile'=>'定位胆','ShowTile'=>'定位胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '2R'=>array(
      '2R_fs'=>array('ListKey'=>'2R_fs','CodeTile'=>'任二直选','ShowTile'=>'直选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2R_zhxds'=>array('ListKey'=>'2R_zhxds','CodeTile'=>'任二直选','ShowTile'=>'直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2R_2xzhxhz'=>array('ListKey'=>'2R_2xzhxhz','CodeTile'=>'任二直选','ShowTile'=>'直选和值','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_zx5z2'=>array('ListKey'=>'RXDS_zx5z2','CodeTile'=>'任二组选','ShowTile'=>'组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2R_2xzxhz'=>array('ListKey'=>'2R_2xzxhz','CodeTile'=>'任二组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '2X1'=>array(
      '2X_2_zhxfs'=>array('ListKey'=>'2X_2_zhxfs','CodeTile'=>'二星直选','ShowTile'=>'后二直选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zhxds'=>array('ListKey'=>'2X_2_zhxds','CodeTile'=>'二星直选','ShowTile'=>'后二直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzhxhz'=>array('ListKey'=>'2X_2_2xzhxhz','CodeTile'=>'二星直选','ShowTile'=>'后二直选和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_zhxfs'=>array('ListKey'=>'2X_1_zhxfs','CodeTile'=>'二星直选','ShowTile'=>'前二直选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_zhxds'=>array('ListKey'=>'2X_1_zhxds','CodeTile'=>'二星直选','ShowTile'=>'前二直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzhxhz'=>array('ListKey'=>'2X_1_2xzhxhz','CodeTile'=>'二星直选','ShowTile'=>'前二直选和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxfs'=>array('ListKey'=>'2X_2_2xzxfs','CodeTile'=>'二星组选','ShowTile'=>'后二组选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zxds'=>array('ListKey'=>'2X_2_zxds','CodeTile'=>'二星组选','ShowTile'=>'后二组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxhz'=>array('ListKey'=>'2X_2_2xzxhz','CodeTile'=>'二星组选','ShowTile'=>'后二组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxbd'=>array('ListKey'=>'2X_2_2xzxbd','CodeTile'=>'二星组选','ShowTile'=>'后二组选包胆','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzxfs'=>array('ListKey'=>'2X_1_2xzxfs','CodeTile'=>'二星组选','ShowTile'=>'前二组选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_zxds'=>array('ListKey'=>'2X_1_zxds','CodeTile'=>'二星组选','ShowTile'=>'前二组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzxhz'=>array('ListKey'=>'2X_1_2xzxhz','CodeTile'=>'二星组选','ShowTile'=>'前二组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_1_2xzxbd'=>array('ListKey'=>'2X_1_2xzxbd','CodeTile'=>'二星组选','ShowTile'=>'前二组选包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '2X2'=>array(
      '2X_2_zhxfs'=>array('ListKey'=>'2X_2_zhxfs','CodeTile'=>'后二直选','ShowTile'=>'直选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zhxds'=>array('ListKey'=>'2X_2_zhxds','CodeTile'=>'后二直选','ShowTile'=>'直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzhxhz'=>array('ListKey'=>'2X_2_2xzhxhz','CodeTile'=>'后二直选','ShowTile'=>'直选和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzhxkd'=>array('ListKey'=>'2X_2_2xzhxkd','CodeTile'=>'后二直选','ShowTile'=>'直选跨度','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxfs'=>array('ListKey'=>'2X_2_2xzxfs','CodeTile'=>'后二组选','ShowTile'=>'组选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zxds'=>array('ListKey'=>'2X_2_zxds','CodeTile'=>'后二组选','ShowTile'=>'组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxhz'=>array('ListKey'=>'2X_2_2xzxhz','CodeTile'=>'后二组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxbd'=>array('ListKey'=>'2X_2_2xzxbd','CodeTile'=>'后二组选','ShowTile'=>'组选包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3R'=>array(
      '3R_fs'=>array('ListKey'=>'3R_fs','CodeTile'=>'任三直选','ShowTile'=>'直选复式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_zx5z3'=>array('ListKey'=>'RXDS_zx5z3','CodeTile'=>'任三直选','ShowTile'=>'组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '3R_zhxhz'=>array('ListKey'=>'3R_zhxhz','CodeTile'=>'任三直选','ShowTile'=>'直选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3R_z3'=>array('ListKey'=>'3R_z3','CodeTile'=>'任三组选','ShowTile'=>'组三复式','Rebates'=>'Normal','MaxNote'=>''),
      '3R_z3ds'=>array('ListKey'=>'3R_z3ds','CodeTile'=>'任三组选','ShowTile'=>'组三单式','Rebates'=>'Normal','MaxNote'=>''),
      '3R_z6'=>array('ListKey'=>'3R_z6','CodeTile'=>'任三组选','ShowTile'=>'组六复式','Rebates'=>'Normal','MaxNote'=>''),
      '3R_z6ds'=>array('ListKey'=>'3R_z6ds','CodeTile'=>'任三组选','ShowTile'=>'组六单式','Rebates'=>'Normal','MaxNote'=>''),
      '3R_hhzx'=>array('ListKey'=>'3R_hhzx','CodeTile'=>'任三组选','ShowTile'=>'混和组选','Rebates'=>'Normal','MaxNote'=>''),
      '3R_z6hz'=>array('ListKey'=>'3R_z6hz','CodeTile'=>'任三组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3X1'=>array(
      '3X1_fs'=>array('ListKey'=>'3X1_fs','CodeTile'=>'前三直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_ds'=>array('ListKey'=>'3X1_ds','CodeTile'=>'前三直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_zhxhz'=>array('ListKey'=>'3X1_zhxhz','CodeTile'=>'前三直选','ShowTile'=>'直选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_z3'=>array('ListKey'=>'3X1_z3','CodeTile'=>'前三组选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_z6'=>array('ListKey'=>'3X1_z6','CodeTile'=>'前三组选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_z6ds'=>array('ListKey'=>'3X1_z6ds','CodeTile'=>'前三组选','ShowTile'=>'组六单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_zxhz'=>array('ListKey'=>'3X1_zxhz','CodeTile'=>'前三组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X1_bd'=>array('ListKey'=>'3X1_bd','CodeTile'=>'前三组选','ShowTile'=>'包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3X2'=>array(
      '3X2_fs'=>array('ListKey'=>'3X2_fs','CodeTile'=>'后三直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_ds'=>array('ListKey'=>'3X2_ds','CodeTile'=>'后三直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_zhxhz'=>array('ListKey'=>'3X2_zhxhz','CodeTile'=>'后三直选','ShowTile'=>'直选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_z3'=>array('ListKey'=>'3X2_z3','CodeTile'=>'后三组选','ShowTile'=>'组三','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_z6'=>array('ListKey'=>'3X2_z6','CodeTile'=>'后三组选','ShowTile'=>'组六','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_z6ds'=>array('ListKey'=>'3X2_z6ds','CodeTile'=>'后三组选','ShowTile'=>'组六单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_zxhz'=>array('ListKey'=>'3X2_zxhz','CodeTile'=>'后三组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_bd'=>array('ListKey'=>'3X2_bd','CodeTile'=>'后三组选','ShowTile'=>'包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3X3'=>array(
      '3X3_fs'=>array('ListKey'=>'3X3_fs','CodeTile'=>'中三直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_ds'=>array('ListKey'=>'3X3_ds','CodeTile'=>'中三直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_zhxhz'=>array('ListKey'=>'3X3_zhxhz','CodeTile'=>'中三直选','ShowTile'=>'直选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_z3'=>array('ListKey'=>'3X3_z3','CodeTile'=>'中三组选','ShowTile'=>'组三','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_z6'=>array('ListKey'=>'3X3_z6','CodeTile'=>'中三组选','ShowTile'=>'组六','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_z6ds'=>array('ListKey'=>'3X3_z6ds','CodeTile'=>'中三组选','ShowTile'=>'组六单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_zxhz'=>array('ListKey'=>'3X3_zxhz','CodeTile'=>'中三组选','ShowTile'=>'组选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X3_bd'=>array('ListKey'=>'3X3_bd','CodeTile'=>'中三组选','ShowTile'=>'包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '4R'=>array(
      '4R_fs'=>array('ListKey'=>'4R_fs','CodeTile'=>'任四直选','ShowTile'=>'直选复式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_5z4'=>array('ListKey'=>'RXDS_5z4','CodeTile'=>'任四直选','ShowTile'=>'直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '4R_z24'=>array('ListKey'=>'4R_z24','CodeTile'=>'任四组选','ShowTile'=>'组选24','Rebates'=>'Normal','MaxNote'=>''),
      '4R_z12'=>array('ListKey'=>'4R_z12','CodeTile'=>'任四组选','ShowTile'=>'组选12','Rebates'=>'Normal','MaxNote'=>''),
      '4R_z6'=>array('ListKey'=>'4R_z6','CodeTile'=>'任四组选','ShowTile'=>'组选6','Rebates'=>'Normal','MaxNote'=>''),
      '4R_z4'=>array('ListKey'=>'4R_z4','CodeTile'=>'任四组选','ShowTile'=>'组选4','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '4x2'=>array(
      '4X_fs'=>array('ListKey'=>'4X_fs','CodeTile'=>'四星直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '4X_ds'=>array('ListKey'=>'4X_ds','CodeTile'=>'四星直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '4X_z24'=>array('ListKey'=>'4X_z24','CodeTile'=>'四星组选','ShowTile'=>'组选24','Rebates'=>'Normal','MaxNote'=>''),
      '4X_z12'=>array('ListKey'=>'4X_z12','CodeTile'=>'四星组选','ShowTile'=>'组选12','Rebates'=>'Normal','MaxNote'=>''),
      '4X_z6'=>array('ListKey'=>'4X_z6','CodeTile'=>'四星组选','ShowTile'=>'组选6','Rebates'=>'Normal','MaxNote'=>''),
      '4X_z4'=>array('ListKey'=>'4X_z4','CodeTile'=>'四星组选','ShowTile'=>'组选4','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '5X'=>array(
      '5X_fs'=>array('ListKey'=>'5X_fs','CodeTile'=>'五星直选','ShowTile'=>'复式','Rebates'=>'Normal','MaxNote'=>''),
      '5X_ds'=>array('ListKey'=>'5X_ds','CodeTile'=>'五星直选','ShowTile'=>'单式','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z120'=>array('ListKey'=>'5X_z120','CodeTile'=>'五星组选','ShowTile'=>'组选120','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z60'=>array('ListKey'=>'5X_z60','CodeTile'=>'五星组选','ShowTile'=>'组选60','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z30'=>array('ListKey'=>'5X_z30','CodeTile'=>'五星组选','ShowTile'=>'组选30','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z20'=>array('ListKey'=>'5X_z20','CodeTile'=>'五星组选','ShowTile'=>'组选20','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z10'=>array('ListKey'=>'5X_z10','CodeTile'=>'五星组选','ShowTile'=>'组选10','Rebates'=>'Normal','MaxNote'=>''),
      '5X_z5'=>array('ListKey'=>'5X_z5','CodeTile'=>'五星组选','ShowTile'=>'组选5','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'BDW'=>array(
      'BDW_hsym'=>array('ListKey'=>'BDW_hsym','CodeTile'=>'不定位','ShowTile'=>'后三一码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_hsem'=>array('ListKey'=>'BDW_hsem','CodeTile'=>'不定位','ShowTile'=>'后三二码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_qsym'=>array('ListKey'=>'BDW_qsym','CodeTile'=>'不定位','ShowTile'=>'前三一码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_qsem'=>array('ListKey'=>'BDW_qsem','CodeTile'=>'不定位','ShowTile'=>'前三二码不定位','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'DXDS'=>array(
      'DXDS_qedx'=>array('ListKey'=>'DXDS_qedx','CodeTile'=>'大小单双','ShowTile'=>'前二大小单双','Rebates'=>'Normal','MaxNote'=>''),
      'DXDS_hedx'=>array('ListKey'=>'DXDS_hedx','CodeTile'=>'大小单双','ShowTile'=>'后二大小单双','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'LH'=>array(
      'LH_01'=>array('ListKey'=>'LH_01','CodeTile'=>'龙虎','ShowTile'=>'万千','Rebates'=>'Normal','MaxNote'=>''),
      'LH_02'=>array('ListKey'=>'LH_02','CodeTile'=>'龙虎','ShowTile'=>'万百','Rebates'=>'Normal','MaxNote'=>''),
      'LH_03'=>array('ListKey'=>'LH_03','CodeTile'=>'龙虎','ShowTile'=>'万十','Rebates'=>'Normal','MaxNote'=>''),
      'LH_04'=>array('ListKey'=>'LH_04','CodeTile'=>'龙虎','ShowTile'=>'万个','Rebates'=>'Normal','MaxNote'=>''),
      'LH_12'=>array('ListKey'=>'LH_12','CodeTile'=>'龙虎','ShowTile'=>'千百','Rebates'=>'Normal','MaxNote'=>''),
      'LH_13'=>array('ListKey'=>'LH_13','CodeTile'=>'龙虎','ShowTile'=>'千十','Rebates'=>'Normal','MaxNote'=>''),
      'LH_14'=>array('ListKey'=>'LH_14','CodeTile'=>'龙虎','ShowTile'=>'千个','Rebates'=>'Normal','MaxNote'=>''),
      'LH_23'=>array('ListKey'=>'LH_23','CodeTile'=>'龙虎','ShowTile'=>'百十','Rebates'=>'Normal','MaxNote'=>''),
      'LH_24'=>array('ListKey'=>'LH_24','CodeTile'=>'龙虎','ShowTile'=>'百个','Rebates'=>'Normal','MaxNote'=>''),
      'LH_34'=>array('ListKey'=>'LH_34','CodeTile'=>'龙虎','ShowTile'=>'十个','Rebates'=>'Normal','MaxNote'=>'')
  )
);
$con_play_pri=array(
  '5X_fs'=>array('','','','200000'),
  '5X_z120'=>array('','','','1667.47'),
  '5X_z60'=>array('','','','3333.13'),
  '5X_z30'=>array('','','','6665.67'),
  '5X_z20'=>array('','','','1000'),
  '5X_z10'=>array('','','','20000'),
  '5X_z5'=>array('','','','40000'),
  '5X_ds'=>array('','','','200000'),
  'QW_yffs'=>array('','','','4.58'),
  'QW_hscs'=>array('','','','22.99'),
  'QW_sxbx'=>array('','','','229.9'),
  'QW_sjfc'=>array('','','','2299'),
  '5X_zh'=>array('','','','200000'),
  '4X_fs'=>array('','','','20000'),
  '4X_ds'=>array('','','','20000'),
  '4X_z24'=>array('','','','832'),
  '4X_z12'=>array('','','','1671'),
  '4X_z6'=>array('','','','3335'),
  '4X_z4'=>array('','','','5000'),
  '4X_zh'=>array('','','','20000'),
  '3X2_zxhz'=>array('','','','666.1624'),
  '3X2_hhzx'=>array('','','','663.365'),
  '3X2_fs'=>array('','','','2000'),
  '3X2_ds'=>array('','','','2000'),
  '3X2_zhxhz'=>array('','','','2000'),
  '3X2_kd'=>array('','','','2000'),
  '3X2_hzws'=>array('','','','20'),
  '3X2_bd'=>array('','','','666.1624'),
  '3X2_z3'=>array('','','','666.1624'),
  '3X2_z6'=>array('','','','333.635'),
  '3X2_zh'=>array('','','','2000'),
  '3X2_z3ds'=>array('','','','666.1624'),
  '3X2_tshm'=>array('','','','195.6|30.17|7.1'),
  '3X2_z6ds'=>array('','','','333.635'),
  '3X3_fs'=>array('','','','2000'),
  '3X3_ds'=>array('','','','2000'),
  '3X3_zhxhz'=>array('','','','2000'),
  '3X3_z3ds'=>array('','','','333.32'),
  '3X3_z3'=>array('','','','666.1624'),
  '3X3_z6'=>array('','','','333.32'),
  '3X3_hhzx'=>array('','','','333.32'),
  '3X3_kd'=>array('','','','2000'),
  '3X3_zh'=>array('','','','2000'),
  '3X3_zxhz'=>array('','','','666.1624'),
  '3X3_z6ds'=>array('','','','333.32'),
  '3X3_bd'=>array('','','','666.1624'),
  '3X3_hzws'=>array('','','','20'),
  '3X3_tshm'=>array('','','','195.6|30.17|7.1'),
  '3X1_z6ds'=>array('','','','333.32'),
  '3X1_hzws'=>array('','','','20'),
  '3X1_tshm'=>array('','','','195.6|30.17|7.1'),
  '3X1_zxhz'=>array('','','','666.1624'),
  '3X1_z3ds'=>array('','','','666.1624'),
  '3X1_bd'=>array('','','','666.1624'),
  '3X1_hhzx'=>array('','','','333.32'),
  '3X1_z6'=>array('','','','333.32'),
  '3X1_z3'=>array('','','','666.1624'),
  '3X1_zh'=>array('','','','2000'),
  '3X1_kd'=>array('','','','2000'),
  '3X1_zhxhz'=>array('','','','2000'),
  '3X1_ds'=>array('','','','2000'),
  '3X1_fs'=>array('','','','2000'),
  '2X_2_zhxfs'=>array('','','','200'),
  '2X_2_zhxds'=>array('','','','200'),
  '2X_2_2xzhxhz'=>array('','','','200'),
  '2X_2_2xzhxkd'=>array('','','','200'),
  '2X_2_2xzxfs'=>array('','','','90'),
  '2X_2_zxds'=>array('','','','90'),
  '2X_2_2xzxhz'=>array('','','','90'),
  '2X_2_2xzxbd'=>array('','','','90'),
  '2X_1_2xzhxkd'=>array('','','','200'),
  '2X_1_zhxfs'=>array('','','','200'),
  '2X_1_zhxds'=>array('','','','200'),
  '2X_1_2xzhxhz'=>array('','','','200'),
  '2X_1_2xzxfs'=>array('','','','90'),
  '2X_1_zxds'=>array('','','','90'),
  '2X_1_2xzxhz'=>array('','','','90'),
  '2X_1_2xzxbd'=>array('','','','90'),
  '1X_dwd'=>array('','','','20'),
  'BDW_sxym'=>array('','','','5.7'),
  'BDW_qsym'=>array('','','','7.22'),
  'BDW_qsem'=>array('','','','36.50'),
  'BDW_hsym'=>array('','','','7.3378'),
  'BDW_hsem'=>array('','','','36.6625'),
  'BDW_sxem'=>array('','','','19.9'),
  'BDW_wxem'=>array('','','','13.3266'),
  'BDW_wxsm'=>array('','','','45.5625'),
  'DXDS_hedx'=>array('','','','7.82'),
  'DXDS_hsdx'=>array('','','','15.7513'),
  'DXDS_qedx'=>array('','','','7.82'),
  'DXDS_qsdx'=>array('','','','15.2'),
  '2R_2xzxfs'=>array('','','','100'),
  '2R_2xzhxhz'=>array('','','','200'),
  '2R_2xzxhz'=>array('','','','100'),
  '2R_zhxds'=>array('','','','200'),
  '2R_zhxfs'=>array('','','','193'),
  'RXDS_zx5z2'=>array('','','','200'),
  '3R_z6hz'=>array('','','','333.32'),
  '3R_zhxhz'=>array('','','','2000'),
  'RXDS_zx5z3'=>array('','','','2000'),
  '3R_z3ds'=>array('','','','666.1624'),
  '3R_z6ds'=>array('','','','333.32'),
  '3R_hhzx'=>array('','','','333.32'),
  '3R_z6'=>array('','','','333.32'),
  '3R_fs'=>array('','','','2000'),
  '3R_z3'=>array('','','','666.1624'),
  '4R_z6'=>array('','','','3335'),
  '4R_z12'=>array('','','','1671'),
  '4R_z24'=>array('','','','832'),
  '4R_z4'=>array('','','','5000'),
  '4R_fs'=>array('','','','20000'),
  'RXDS_5z4'=>array('','','','20000'),
  '5X_lhh'=>array('','','','4.25|4.25|20'),
  '5X_DXDS'=>array('','','','3.8'),
  '2R_fs'=>array('','','','200'),
  'LH_01'=>array('','','','4.46|4.46|20'),
  'LH_02'=>array('','','','4.46|4.46|20'),
  'LH_03'=>array('','','','4.46|4.46|20'),
  'LH_04'=>array('','','','4.46|4.46|20'),
  'LH_12'=>array('','','','4.46|4.46|20'),
  'LH_13'=>array('','','','4.46|4.46|20'),
  'LH_14'=>array('','','','4.46|4.46|20'),
  'LH_23'=>array('','','','4.46|4.46|20'),
  'LH_24'=>array('','','','4.46|4.46|20'),
  'LH_34'=>array('','','','4.46|4.46|20')
);

$con_play_time=array(
  '5X_fs'=>array('','',''),
  '5X_z120'=>array('','',''),
  '5X_z60'=>array('','',''),
  '5X_z30'=>array('','',''),
  '5X_z20'=>array('','',''),
  '5X_z10'=>array('','',''),
  '5X_z5'=>array('','',''),
  '5X_ds'=>array('','',''),
  'QW_yffs'=>array('','',''),
  'QW_hscs'=>array('','',''),
  'QW_sxbx'=>array('','',''),
  'QW_sjfc'=>array('','',''),
  '5X_zh'=>array('','',''),
  '4X_fs'=>array('','',''),
  '4X_ds'=>array('','',''),
  '4X_z24'=>array('','',''),
  '4X_z12'=>array('','',''),
  '4X_z6'=>array('','',''),
  '4X_z4'=>array('','',''),
  '4X_zh'=>array('','',''),
  '3X2_zxhz'=>array('','',''),
  '3X2_hhzx'=>array('','',''),
  '3X2_fs'=>array('','',''),
  '3X2_ds'=>array('','',''),
  '3X2_zhxhz'=>array('','',''),
  '3X2_kd'=>array('','',''),
  '3X2_hzws'=>array('','',''),
  '3X2_bd'=>array('','',''),
  '3X2_z3'=>array('','',''),
  '3X2_z6'=>array('','',''),
  '3X2_zh'=>array('','',''),
  '3X2_z3ds'=>array('','',''),
  '3X2_tshm'=>array('','',''),
  '3X2_z6ds'=>array('','',''),
  '3X3_fs'=>array('','',''),
  '3X3_ds'=>array('','',''),
  '3X3_zhxhz'=>array('','',''),
  '3X3_z3ds'=>array('','',''),
  '3X3_z3'=>array('','',''),
  '3X3_z6'=>array('','',''),
  '3X3_hhzx'=>array('','',''),
  '3X3_kd'=>array('','',''),
  '3X3_zh'=>array('','',''),
  '3X3_zxhz'=>array('','',''),
  '3X3_z6ds'=>array('','',''),
  '3X3_bd'=>array('','',''),
  '3X3_hzws'=>array('','',''),
  '3X3_tshm'=>array('','',''),
  '3X1_z6ds'=>array('','',''),
  '3X1_hzws'=>array('','',''),
  '3X1_tshm'=>array('','',''),
  '3X1_zxhz'=>array('','',''),
  '3X1_z3ds'=>array('','',''),
  '3X1_bd'=>array('','',''),
  '3X1_hhzx'=>array('','',''),
  '3X1_z6'=>array('','',''),
  '3X1_z3'=>array('','',''),
  '3X1_zh'=>array('','',''),
  '3X1_kd'=>array('','',''),
  '3X1_zhxhz'=>array('','',''),
  '3X1_ds'=>array('','',''),
  '3X1_fs'=>array('','',''),
  '2X_2_zhxfs'=>array('','',''),
  '2X_2_zhxds'=>array('','',''),
  '2X_2_2xzhxhz'=>array('','',''),
  '2X_2_2xzhxkd'=>array('','',''),
  '2X_2_2xzxfs'=>array('','',''),
  '2X_2_zxds'=>array('','',''),
  '2X_2_2xzxhz'=>array('','',''),
  '2X_2_2xzxbd'=>array('','',''),
  '2X_1_2xzhxkd'=>array('','',''),
  '2X_1_zhxfs'=>array('','',''),
  '2X_1_zhxds'=>array('','',''),
  '2X_1_2xzhxhz'=>array('','',''),
  '2X_1_2xzxfs'=>array('','',''),
  '2X_1_zxds'=>array('','',''),
  '2X_1_2xzxhz'=>array('','',''),
  '2X_1_2xzxbd'=>array('','',''),
  '1X_dwd'=>array('','',''),
  'BDW_sxym'=>array('','',''),
  'BDW_qsym'=>array('','',''),
  'BDW_qsem'=>array('','',''),
  'BDW_hsym'=>array('','',''),
  'BDW_hsem'=>array('','',''),
  'BDW_sxem'=>array('','',''),
  'BDW_wxem'=>array('','',''),
  'BDW_wxsm'=>array('','',''),
  'DXDS_hedx'=>array('','',''),
  'DXDS_hsdx'=>array('','',''),
  'DXDS_qedx'=>array('','',''),
  'DXDS_qsdx'=>array('','',''),
  '2R_2xzxfs'=>array('','',''),
  '2R_2xzhxhz'=>array('','',''),
  '2R_2xzxhz'=>array('','',''),
  '2R_zhxds'=>array('','',''),
  '2R_zhxfs'=>array('','',''),
  'RXDS_zx5z2'=>array('','',''),
  '3R_z6hz'=>array('','',''),
  '3R_zhxhz'=>array('','',''),
  'RXDS_zx5z3'=>array('','',''),
  '3R_z3ds'=>array('','',''),
  '3R_z6ds'=>array('','',''),
  '3R_hhzx'=>array('','',''),
  '3R_z6'=>array('','',''),
  '3R_fs'=>array('','',''),
  '3R_z3'=>array('','',''),
  '4R_z6'=>array('','',''),
  '4R_z12'=>array('','',''),
  '4R_z24'=>array('','',''),
  '4R_z4'=>array('','',''),
  '4R_fs'=>array('','',''),
  'RXDS_5z4'=>array('','',''),
  '5X_lhh'=>array('','',''),
  '5X_DXDS'=>array('','',''),
  '2R_fs'=>array('','',''),
  'LH_01'=>array('','',''),
  'LH_02'=>array('','',''),
  'LH_03'=>array('','',''),
  'LH_04'=>array('','',''),
  'LH_12'=>array('','',''),
  'LH_13'=>array('','',''),
  'LH_14'=>array('','',''),
  'LH_23'=>array('','',''),
  'LH_24'=>array('','',''),
  'LH_34'=>array('','','')
);

?>