<?
$con_play_arr=array('code'=>array('2TH','2BT','3TH','3BT','3LH','QW-SH','QW-2TH','QW-2BT','QW-3LH','QW_HZ','QW-KD','QW-BCH','QW-BDW','QW-ZYSM'),'firstcode'=>'2TH','lot_date'=>'','lot_num'=>'');
$con_title_arr=array(
  '2TH'=>array('fullname'=>'二同号','mode'=>''),
  '2BT'=>array('fullname'=>'二不同','mode'=>''),
  '3TH'=>array('fullname'=>'三同号','mode'=>''),
  '3BT'=>array('fullname'=>'三不同','mode'=>''),
  '3LH'=>array('fullname'=>'三连号','mode'=>''),
  'QW-SH'=>array('fullname'=>'梭哈','mode'=>''),
  'QW-2TH'=>array('fullname'=>'二同号','mode'=>''),
  'QW-2BT'=>array('fullname'=>'二不同','mode'=>''),
  'QW-3LH'=>array('fullname'=>'三连号','mode'=>''),
  'QW_HZ'=>array('fullname'=>'和值','mode'=>''),
  'QW-KD'=>array('fullname'=>'跨度','mode'=>''),
  'QW-BCH'=>array('fullname'=>'不出号','mode'=>''),
  'QW-BDW'=>array('fullname'=>'不定位','mode'=>''),
  'QW-ZYSM'=>array('fullname'=>'自由双面','mode'=>'')
);

$con_code_arr=array(
  '2BT'=>array(
      '2BT-bz'=>array('ListKey'=>'2BT-bz','CodeTile'=>'二不同','ShowTile'=>'标准','Rebates'=>'Normal','MaxNote'=>''),
      '2BT-dt'=>array('ListKey'=>'2BT-dt','CodeTile'=>'二不同','ShowTile'=>'胆拖','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '2TH'=>array(
      '2TH-dx'=>array('ListKey'=>'2TH-dx','CodeTile'=>'二同号','ShowTile'=>'单选','Rebates'=>'Normal','MaxNote'=>''),
      '2TH-fx'=>array('ListKey'=>'2TH-fx','CodeTile'=>'二同号','ShowTile'=>'复选','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3BT'=>array(
      '3BT-dx'=>array('ListKey'=>'3BT-dx','CodeTile'=>'三不同','ShowTile'=>'单选','Rebates'=>'Normal','MaxNote'=>''),
      '3BT-dt'=>array('ListKey'=>'3BT-dt','CodeTile'=>'三不同','ShowTile'=>'胆拖','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3LH'=>array(
      '3LH-dx'=>array('ListKey'=>'3LH-dx','CodeTile'=>'三连号','ShowTile'=>'单选','Rebates'=>'Normal','MaxNote'=>''),
      '3LH-tx'=>array('ListKey'=>'3LH-tx','CodeTile'=>'三连号','ShowTile'=>'通选','Rebates'=>'Normal','MaxNote'=>'')
  ),
  '3TH'=>array(
      '3TH-dx'=>array('ListKey'=>'3TH-dx','CodeTile'=>'三同号','ShowTile'=>'单选','Rebates'=>'Normal','MaxNote'=>''),
      '3TH-tx'=>array('ListKey'=>'3TH-tx','CodeTile'=>'三同号','ShowTile'=>'通选','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW-2BT'=>array(
      '2BT-qw'=>array('ListKey'=>'2BT-qw','CodeTile'=>'','ShowTile'=>'趣味','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW-2TH'=>array(
      '2TH-qw'=>array('ListKey'=>'2TH-qw','CodeTile'=>'','ShowTile'=>'趣味','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW-3LH'=>array(
      '3TH-qw'=>array('ListKey'=>'3TH-qw','CodeTile'=>'','ShowTile'=>'趣味','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW-BCH'=>array(
      'BCH-qw'=>array('ListKey'=>'BCH-qw','CodeTile'=>'','ShowTile'=>'趣味','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW-BDW'=>array(
      'BDW-qw'=>array('ListKey'=>'BDW-qw','CodeTile'=>'','ShowTile'=>'趣味','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW-KD'=>array(
      'KD-qx'=>array('ListKey'=>'KD-qx','CodeTile'=>'','ShowTile'=>'趣味','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW-SH'=>array(
      'SH'=>array('ListKey'=>'SH','CodeTile'=>'','ShowTile'=>'梭哈','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW-ZYSM'=>array(
      'ZYSM-qw'=>array('ListKey'=>'ZYSM-qw','CodeTile'=>'','ShowTile'=>'趣味','Rebates'=>'Normal','MaxNote'=>'')
  ),
  'QW_HZ'=>array(
      'HZ-qw'=>array('ListKey'=>'HZ-qw','CodeTile'=>'','ShowTile'=>'趣味','Rebates'=>'Normal','MaxNote'=>'')
  )
);
$con_play_pri=array(
  '2TH-dx'=>array('','','','108.56'),
  '2TH-fx'=>array('','','','22.99'),
  '2BT-bz'=>array('','','','13.056'),
  '2BT-dt'=>array('','','','13.056'),
  '3TH-dx'=>array('','','','319.68'),
  '3TH-tx'=>array('','','','64.28'),
  '3BT-dx'=>array('','','','58.28'),
  '3BT-dt'=>array('','','','58.28'),
  '3LH-dx'=>array('','','','58.28'),
  '3LH-tx'=>array('','','','16.470'),
  'SH'=>array('','','','32.4|8.23|8.23|2.74|2.19'),
  '2TH-qw'=>array('','','','11.49'),
  '2BT-qw'=>array('','','','6.52'),
  '3TH-qw'=>array('','','','29.14'),
  'HZ-qw'=>array('','','','154|58.28|29.14|18.48|12.65|9.38|7.99|7.32|7.32|7.99|9.38|12.56|18.48|29.14|58.28|154'),
  'KD-qx'=>array('','','','32.14|6.52|4.11|3.66|4.11|6.52'),
  'BCH-qw'=>array('','','','1.59'),
  'BDW-qw'=>array('','','','2.16'),
  'ZYSM-qw'=>array('','','','1.93')
);

$con_play_time=array(
  '2TH-dx'=>array('','',''),
  '2TH-fx'=>array('','',''),
  '2BT-bz'=>array('','',''),
  '2BT-dt'=>array('','',''),
  '3TH-dx'=>array('','',''),
  '3TH-tx'=>array('','',''),
  '3BT-dx'=>array('','',''),
  '3BT-dt'=>array('','',''),
  '3LH-dx'=>array('','',''),
  '3LH-tx'=>array('','',''),
  'SH'=>array('','',''),
  '2TH-qw'=>array('','',''),
  '2BT-qw'=>array('','',''),
  '3TH-qw'=>array('','',''),
  'HZ-qw'=>array('','',''),
  'KD-qx'=>array('','',''),
  'BCH-qw'=>array('','',''),
  'BDW-qw'=>array('','',''),
  'ZYSM-qw'=>array('','','')
);

?>