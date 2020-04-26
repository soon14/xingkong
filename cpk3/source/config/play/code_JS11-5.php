<?
$con_play_arr=array('code'=>array('3M','2M','BDW2','DWD','QWX','RXFS','RXDS','RXDT'),'firstcode'=>'3M','lot_date'=>'','lot_num'=>'');
$con_title_arr=array(
  '3M'=>array('fullname'=>'三码','mode'=>'default'),
  '2M'=>array('fullname'=>'二码','mode'=>'default'),
  'BDW2'=>array('fullname'=>'不定位','mode'=>'default'),
  'DWD'=>array('fullname'=>'定位胆','mode'=>'default'),
  'QWX'=>array('fullname'=>'定单双','mode'=>'default'),
  'RXFS'=>array('fullname'=>'任选复式','mode'=>'default'),
  'RXDS'=>array('fullname'=>'任选单式','mode'=>'default'),
  'RXDT'=>array('fullname'=>'任选胆拖','mode'=>'default')
);

$con_code_arr=array(
  '2M'=>array(
      '2M_zhxfs'=>array('ListKey'=>'2M_zhxfs','CodeTile'=>'前二','ShowTile'=>'前二直选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2M_zhxds'=>array('ListKey'=>'2M_zhxds','CodeTile'=>'前二','ShowTile'=>'前二直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2M_zxfs'=>array('ListKey'=>'2M_zxfs','CodeTile'=>'前二','ShowTile'=>'前二组选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2M_zxds'=>array('ListKey'=>'2M_zxds','CodeTile'=>'前二','ShowTile'=>'前二组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2M_zxdt'=>array('ListKey'=>'2M_zxdt','CodeTile'=>'前二','ShowTile'=>'前二组选胆拖','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zhxfs'=>array('ListKey'=>'2X_2_zhxfs','CodeTile'=>'后二','ShowTile'=>'后二直选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zhxds'=>array('ListKey'=>'2X_2_zhxds','CodeTile'=>'后二','ShowTile'=>'后二直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxfs'=>array('ListKey'=>'2X_2_2xzxfs','CodeTile'=>'后二','ShowTile'=>'后二组选复式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_zxds'=>array('ListKey'=>'2X_2_zxds','CodeTile'=>'后二','ShowTile'=>'后二组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '2X_2_2xzxbd'=>array('ListKey'=>'2X_2_2xzxbd','CodeTile'=>'后二','ShowTile'=>'后二组选包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3M'=>array(
      '3M_zhxfs'=>array('ListKey'=>'3M_zhxfs','CodeTile'=>'前三','ShowTile'=>'前三直选复式','Rebates'=>'Normal','MaxNote'=>''),
      '3M_zhxds'=>array('ListKey'=>'3M_zhxds','CodeTile'=>'前三','ShowTile'=>'前三直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '3M_zxfs'=>array('ListKey'=>'3M_zxfs','CodeTile'=>'前三','ShowTile'=>'前三组选复式','Rebates'=>'Normal','MaxNote'=>''),
      '3M_zxds'=>array('ListKey'=>'3M_zxds','CodeTile'=>'前三','ShowTile'=>'前三组选单式','Rebates'=>'Normal','MaxNote'=>''),
      '3M_zxdt'=>array('ListKey'=>'3M_zxdt','CodeTile'=>'前三','ShowTile'=>'前三组选胆拖','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_fs'=>array('ListKey'=>'3X2_fs','CodeTile'=>'后三','ShowTile'=>'后三直选复式','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_ds'=>array('ListKey'=>'3X2_ds','CodeTile'=>'后三','ShowTile'=>'后三直选单式','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_zhxhz'=>array('ListKey'=>'3X2_zhxhz','CodeTile'=>'后三','ShowTile'=>'直后三选和值','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_hhzx'=>array('ListKey'=>'3X2_hhzx','CodeTile'=>'后三','ShowTile'=>'后三混合组选','Rebates'=>'Normal','MaxNote'=>''),
      '3X2_bd'=>array('ListKey'=>'3X2_bd','CodeTile'=>'后三','ShowTile'=>'后三组选包胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'BDW2'=>array(
      'BDW_qsym'=>array('ListKey'=>'BDW_qsym','CodeTile'=>'不定位','ShowTile'=>'一码不定位','Rebates'=>'Normal','MaxNote'=>''),
      'BDW_qsem'=>array('ListKey'=>'BDW_qsem','CodeTile'=>'不定位','ShowTile'=>'二码不定位','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'DWD'=>array(
      'DWD_dwd'=>array('ListKey'=>'DWD_dwd','CodeTile'=>'定位胆','ShowTile'=>'定位胆','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QWX'=>array(
      'QWX_dds'=>array('ListKey'=>'QWX_dds','CodeTile'=>'趣味型','ShowTile'=>'定单双','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'RXDS'=>array(
      'RXDS_1z1'=>array('ListKey'=>'RXDS_1z1','CodeTile'=>'任选单式','ShowTile'=>'任选一单式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_2z2'=>array('ListKey'=>'RXDS_2z2','CodeTile'=>'任选单式','ShowTile'=>'任选二单式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_3z3'=>array('ListKey'=>'RXDS_3z3','CodeTile'=>'任选单式','ShowTile'=>'任选三单式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_4z4'=>array('ListKey'=>'RXDS_4z4','CodeTile'=>'任选单式','ShowTile'=>'任选四单式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_5z5'=>array('ListKey'=>'RXDS_5z5','CodeTile'=>'任选单式','ShowTile'=>'任选五单式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_6z5'=>array('ListKey'=>'RXDS_6z5','CodeTile'=>'任选单式','ShowTile'=>'任选六单式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_7z5'=>array('ListKey'=>'RXDS_7z5','CodeTile'=>'任选单式','ShowTile'=>'任选七单式','Rebates'=>'Normal','MaxNote'=>''),
      'RXDS_8z5'=>array('ListKey'=>'RXDS_8z5','CodeTile'=>'任选单式','ShowTile'=>'任选八单式','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'RXDT'=>array(
      'RXDT_2z2'=>array('ListKey'=>'RXDT_2z2','CodeTile'=>'任选胆拖','ShowTile'=>'任选二胆拖','Rebates'=>'Normal','MaxNote'=>''),
      'RXDT_3z3'=>array('ListKey'=>'RXDT_3z3','CodeTile'=>'任选胆拖','ShowTile'=>'任选三胆拖','Rebates'=>'Normal','MaxNote'=>''),
      'RXDT_4z4'=>array('ListKey'=>'RXDT_4z4','CodeTile'=>'任选胆拖','ShowTile'=>'任选四胆拖','Rebates'=>'Normal','MaxNote'=>''),
      'RXDT_5z5'=>array('ListKey'=>'RXDT_5z5','CodeTile'=>'任选胆拖','ShowTile'=>'任选五胆拖','Rebates'=>'Normal','MaxNote'=>''),
      'RXDT_6z5'=>array('ListKey'=>'RXDT_6z5','CodeTile'=>'任选胆拖','ShowTile'=>'任选六胆拖','Rebates'=>'Normal','MaxNote'=>''),
      'RXDT_7z5'=>array('ListKey'=>'RXDT_7z5','CodeTile'=>'任选胆拖','ShowTile'=>'任选七胆拖','Rebates'=>'Normal','MaxNote'=>''),
      'RXDT_8z5'=>array('ListKey'=>'RXDT_8z5','CodeTile'=>'任选胆拖','ShowTile'=>'任选八胆拖','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'RXFS'=>array(
      'RXFS_fs1z1'=>array('ListKey'=>'RXFS_fs1z1','CodeTile'=>'任选复式','ShowTile'=>'任选一','Rebates'=>'Normal','MaxNote'=>''),
      'RXFS_fs2z2'=>array('ListKey'=>'RXFS_fs2z2','CodeTile'=>'任选复式','ShowTile'=>'任选二','Rebates'=>'Normal','MaxNote'=>''),
      'RXFS_fs3z3'=>array('ListKey'=>'RXFS_fs3z3','CodeTile'=>'任选复式','ShowTile'=>'任选三','Rebates'=>'Normal','MaxNote'=>''),
      'RXFS_fs4z4'=>array('ListKey'=>'RXFS_fs4z4','CodeTile'=>'任选复式','ShowTile'=>'任选四','Rebates'=>'Normal','MaxNote'=>''),
      'RXFS_fs5z5'=>array('ListKey'=>'RXFS_fs5z5','CodeTile'=>'任选复式','ShowTile'=>'任选五','Rebates'=>'Normal','MaxNote'=>''),
      'RXFS_fs6z5'=>array('ListKey'=>'RXFS_fs6z5','CodeTile'=>'任选复式','ShowTile'=>'任选六','Rebates'=>'Normal','MaxNote'=>''),
      'RXFS_fs7z5'=>array('ListKey'=>'RXFS_fs7z5','CodeTile'=>'任选复式','ShowTile'=>'任选七','Rebates'=>'Normal','MaxNote'=>''),
      'RXFS_fs8z5'=>array('ListKey'=>'RXFS_fs8z5','CodeTile'=>'任选复式','ShowTile'=>'任选八','Rebates'=>'Normal','MaxNote'=>'')
  )
);
$con_play_pri=array(
  '3M_zhxfs'=>array('','','','1930'),
  '3M_zhxds'=>array('','','','1930'),
  '3M_zxfs'=>array('','','','965'),
  '3M_zxds'=>array('','','','965'),
  '3M_zxdt'=>array('','','','965'),
  '3X2_fs'=>array('','','','1930'),
  '3X2_ds'=>array('','','','1930'),
  '3X2_zhxhz'=>array('','','','1930'),
  '3X2_bd'=>array('','','','965'),
  '3X2_hhzx'=>array('','','','320.18'),
  '2M_zhxfs'=>array('','','','193'),
  '2M_zhxds'=>array('','','','193'),
  '2M_zxfs'=>array('','','','96.5'),
  '2M_zxds'=>array('','','','96.5'),
  '2X_2_zhxfs'=>array('','','','193'),
  '2X_2_zhxds'=>array('','','','193'),
  '2X_2_2xzxfs'=>array('','','','96.5'),
  '2X_2_zxds'=>array('','','','96.5'),
  '2X_2_2xzxbd'=>array('','','','96.5'),
  'BDW_hsym'=>array('','','','7.118'),
  'BDW_qsym'=>array('','','','7.118'),
  'DWD_dwd'=>array('','','','19.3'),
  'QWX_dds'=>array('','','','3.86'),
  'RXFS_fs1z1'=>array('','','','19.3'),
  'RXFS_fs2z2'=>array('','','','193'),
  'RXFS_fs3z3'=>array('','','','1930'),
  'RXFS_fs4z4'=>array('','','','19300'),
  'RXFS_fs5z5'=>array('','','','193000'),
  'RXFS_fs6z5'=>array('','','','193000'),
  'RXFS_fs7z5'=>array('','','','193000'),
  'RXFS_fs8z5'=>array('','','','193000'),
  'RXDS_1z1'=>array('','','','19.3'),
  'RXDS_2z2'=>array('','','','193'),
  'RXDS_3z3'=>array('','','','1930'),
  'RXDS_4z4'=>array('','','','19300'),
  'RXDS_5z5'=>array('','','','193000'),
  'RXDS_6z5'=>array('','','','193000'),
  'RXDS_7z5'=>array('','','','193000'),
  'RXDS_8z5'=>array('','','','193000'),
  'RXDT_2z2'=>array('','','','193'),
  'RXDT_3z3'=>array('','','','1930'),
  'RXDT_4z4'=>array('','','','19300'),
  'RXDT_5z5'=>array('','','','193000'),
  'RXDT_6z5'=>array('','','','193000'),
  'RXDT_7z5'=>array('','','','193000'),
  'RXDT_8z5'=>array('','','','193000'),
  'BDW_qsem'=>array('','','','35.717')
);

$con_play_time=array(
  '3M_zhxfs'=>array('','',''),
  '3M_zhxds'=>array('','',''),
  '3M_zxfs'=>array('','',''),
  '3M_zxds'=>array('','',''),
  '3M_zxdt'=>array('','',''),
  '3X2_fs'=>array('','',''),
  '3X2_ds'=>array('','',''),
  '3X2_zhxhz'=>array('','',''),
  '3X2_bd'=>array('','',''),
  '3X2_hhzx'=>array('','',''),
  '2M_zhxfs'=>array('','',''),
  '2M_zhxds'=>array('','',''),
  '2M_zxfs'=>array('','',''),
  '2M_zxds'=>array('','',''),
  '2X_2_zhxfs'=>array('','',''),
  '2X_2_zhxds'=>array('','',''),
  '2X_2_2xzxfs'=>array('','',''),
  '2X_2_zxds'=>array('','',''),
  '2X_2_2xzxbd'=>array('','',''),
  'BDW_hsym'=>array('','',''),
  'BDW_qsym'=>array('','',''),
  'DWD_dwd'=>array('','',''),
  'QWX_dds'=>array('','',''),
  'RXFS_fs1z1'=>array('','',''),
  'RXFS_fs2z2'=>array('','',''),
  'RXFS_fs3z3'=>array('','',''),
  'RXFS_fs4z4'=>array('','',''),
  'RXFS_fs5z5'=>array('','',''),
  'RXFS_fs6z5'=>array('','',''),
  'RXFS_fs7z5'=>array('','',''),
  'RXFS_fs8z5'=>array('','',''),
  'RXDS_1z1'=>array('','',''),
  'RXDS_2z2'=>array('','',''),
  'RXDS_3z3'=>array('','',''),
  'RXDS_4z4'=>array('','',''),
  'RXDS_5z5'=>array('','',''),
  'RXDS_6z5'=>array('','',''),
  'RXDS_7z5'=>array('','',''),
  'RXDS_8z5'=>array('','',''),
  'RXDT_2z2'=>array('','',''),
  'RXDT_3z3'=>array('','',''),
  'RXDT_4z4'=>array('','',''),
  'RXDT_5z5'=>array('','',''),
  'RXDT_6z5'=>array('','',''),
  'RXDT_7z5'=>array('','',''),
  'RXDT_8z5'=>array('','',''),
  'BDW_qsem'=>array('','','')
);

?>