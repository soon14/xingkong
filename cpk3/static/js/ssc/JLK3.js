var MinModeJiao='0';var MinModeFen='0';var gamekey='JLK3';var isAutoModes='';var isFixModes='';var isAutoForPlay='yes'; var ArrFixModes=Array();var playlist={playid:'',shownum:'',minnum:'',maxnum:'',show_key:'',show_other:'',max_select:'',min_select:''};var selists=Array();var peroarr=Array();var perotimearr=Array();var seltask={istask:'no',perstop:'no',nums:'0',moneys:'0',list:''};var rearr={'Normal':'13','Second':'13'};
var arrTimes = {'001':{period:'001',begins:'08:30:00',ends:'08:40:00'},'002':{period:'002',begins:'08:40:00',ends:'08:50:00'},'003':{period:'003',begins:'08:50:00',ends:'09:00:00'},'004':{period:'004',begins:'09:00:00',ends:'09:10:00'},'005':{period:'005',begins:'09:10:00',ends:'09:20:00'},'006':{period:'006',begins:'09:20:00',ends:'09:30:00'},'007':{period:'007',begins:'09:30:00',ends:'09:40:00'},'008':{period:'008',begins:'09:40:00',ends:'09:50:00'},'009':{period:'009',begins:'09:50:00',ends:'10:00:00'},'010':{period:'010',begins:'10:00:00',ends:'10:10:00'},'011':{period:'011',begins:'10:10:00',ends:'10:20:00'},'012':{period:'012',begins:'10:20:00',ends:'10:30:00'},'013':{period:'013',begins:'10:30:00',ends:'10:40:00'},'014':{period:'014',begins:'10:40:00',ends:'10:50:00'},'015':{period:'015',begins:'10:50:00',ends:'11:00:00'},'016':{period:'016',begins:'11:00:00',ends:'11:10:00'},'017':{period:'017',begins:'11:10:00',ends:'11:20:00'},'018':{period:'018',begins:'11:20:00',ends:'11:30:00'},'019':{period:'019',begins:'11:30:00',ends:'11:40:00'},'020':{period:'020',begins:'11:40:00',ends:'11:50:00'},'021':{period:'021',begins:'11:50:00',ends:'12:00:00'},'022':{period:'022',begins:'12:00:00',ends:'12:10:00'},'023':{period:'023',begins:'12:10:00',ends:'12:20:00'},'024':{period:'024',begins:'12:20:00',ends:'12:30:00'},'025':{period:'025',begins:'12:30:00',ends:'12:40:00'},'026':{period:'026',begins:'12:40:00',ends:'12:50:00'},'027':{period:'027',begins:'12:50:00',ends:'13:00:00'},'028':{period:'028',begins:'13:00:00',ends:'13:10:00'},'029':{period:'029',begins:'13:10:00',ends:'13:20:00'},'030':{period:'030',begins:'13:20:00',ends:'13:30:00'},'031':{period:'031',begins:'13:30:00',ends:'13:40:00'},'032':{period:'032',begins:'13:40:00',ends:'13:50:00'},'033':{period:'033',begins:'13:50:00',ends:'14:00:00'},'034':{period:'034',begins:'14:00:00',ends:'14:10:00'},'035':{period:'035',begins:'14:10:00',ends:'14:20:00'},'036':{period:'036',begins:'14:20:00',ends:'14:30:00'},'037':{period:'037',begins:'14:30:00',ends:'14:40:00'},'038':{period:'038',begins:'14:40:00',ends:'14:50:00'},'039':{period:'039',begins:'14:50:00',ends:'15:00:00'},'040':{period:'040',begins:'15:00:00',ends:'15:10:00'},'041':{period:'041',begins:'15:10:00',ends:'15:20:00'},'042':{period:'042',begins:'15:20:00',ends:'15:30:00'},'043':{period:'043',begins:'15:30:00',ends:'15:40:00'},'044':{period:'044',begins:'15:40:00',ends:'15:50:00'},'045':{period:'045',begins:'15:50:00',ends:'16:00:00'},'046':{period:'046',begins:'16:00:00',ends:'16:10:00'},'047':{period:'047',begins:'16:10:00',ends:'16:20:00'},'048':{period:'048',begins:'16:20:00',ends:'16:30:00'},'049':{period:'049',begins:'16:30:00',ends:'16:40:00'},'050':{period:'050',begins:'16:40:00',ends:'16:50:00'},'051':{period:'051',begins:'16:50:00',ends:'17:00:00'},'052':{period:'052',begins:'17:00:00',ends:'17:10:00'},'053':{period:'053',begins:'17:10:00',ends:'17:20:00'},'054':{period:'054',begins:'17:20:00',ends:'17:30:00'},'055':{period:'055',begins:'17:30:00',ends:'17:40:00'},'056':{period:'056',begins:'17:40:00',ends:'17:50:00'},'057':{period:'057',begins:'17:50:00',ends:'18:00:00'},'058':{period:'058',begins:'18:00:00',ends:'18:10:00'},'059':{period:'059',begins:'18:10:00',ends:'18:20:00'},'060':{period:'060',begins:'18:20:00',ends:'18:30:00'},'061':{period:'061',begins:'18:30:00',ends:'18:40:00'},'062':{period:'062',begins:'18:40:00',ends:'18:50:00'},'063':{period:'063',begins:'18:50:00',ends:'19:00:00'},'064':{period:'064',begins:'19:00:00',ends:'19:10:00'},'065':{period:'065',begins:'19:10:00',ends:'19:20:00'},'066':{period:'066',begins:'19:20:00',ends:'19:30:00'},'067':{period:'067',begins:'19:30:00',ends:'19:40:00'},'068':{period:'068',begins:'19:40:00',ends:'19:50:00'},'069':{period:'069',begins:'19:50:00',ends:'20:00:00'},'070':{period:'070',begins:'20:00:00',ends:'20:10:00'},'071':{period:'071',begins:'20:10:00',ends:'20:20:00'},'072':{period:'072',begins:'20:20:00',ends:'20:30:00'},'073':{period:'073',begins:'20:30:00',ends:'20:40:00'},'074':{period:'074',begins:'20:40:00',ends:'20:50:00'},'075':{period:'075',begins:'20:50:00',ends:'21:00:00'},'076':{period:'076',begins:'21:00:00',ends:'21:10:00'},'077':{period:'077',begins:'21:10:00',ends:'21:20:00'},'078':{period:'078',begins:'21:20:00',ends:'21:30:00'},'079':{period:'079',begins:'21:30:00',ends:'21:40:00'},'080':{period:'080',begins:'21:40:00',ends:'21:50:00'},'081':{period:'081',begins:'21:50:00',ends:'22:00:00'},'082':{period:'082',begins:'22:00:00',ends:'22:10:00'},'083':{period:'083',begins:'22:10:00',ends:'22:20:00'},'084':{period:'084',begins:'22:20:00',ends:'22:30:00'},'085':{period:'085',begins:'22:30:00',ends:'22:40:00'},'086':{period:'086',begins:'22:40:00',ends:'22:50:00'}};var arrGameSet = {'firstcode':'3BT','lot_date':'','lot_num':'','Limit_Betting':'3',Max_LotNum:'87'};var arrGameCodes = Array('k3_hz','3TH1','3TH','2TH1','2TH','3BT','2BT','3LH');var arrCodes = {'k3_hz':{title:'和值',mode:'default',cate:'',pid:'0'},'3TH1':{title:'三同号通选',mode:'default',cate:'',pid:'0'},'3TH':{title:'三同号单选',mode:'default',cate:'快三型',pid:'0'},'2TH1':{title:'二同号复选',mode:'default',cate:'',pid:'0'},'2TH':{title:'二同号单选',mode:'default',cate:'快三型',pid:'0'},'3BT':{title:'三不同号',mode:'default',cate:'快三型',pid:'0'},'2BT':{title:'二不同号',mode:'default',cate:'快三型',pid:'0'},'3LH':{title:'三连号通选',mode:'default',cate:'快三型',pid:'0'}};var arrPlays = {'k3_hz':{'k3_hz':{playid:'k3_hz','CodeTile':'',ShowTile:'和值',Rebates:'Normal',MaxNote:''}},'3TH1':{'3TH-tx':{playid:'3TH-tx','CodeTile':'三同号',ShowTile:'通选',Rebates:'Normal',MaxNote:''}},'3TH':{'3TH-dx':{playid:'3TH-dx','CodeTile':'三同号',ShowTile:'单选',Rebates:'Normal',MaxNote:''}},'2TH1':{'2TH-fx':{playid:'2TH-fx','CodeTile':'',ShowTile:'',Rebates:'Normal',MaxNote:''}},'2TH':{'2TH-dx':{playid:'2TH-dx','CodeTile':'二同号单选',ShowTile:'标准选号',Rebates:'Normal',MaxNote:''},'2TH-ds':{playid:'2TH-ds','CodeTile':'二同号单选',ShowTile:'单式选号',Rebates:'Normal',MaxNote:''}},'3BT':{'3BT-dx':{playid:'3BT-dx','CodeTile':'三不同',ShowTile:'标准选号',Rebates:'Normal',MaxNote:''},'3BT-ds':{playid:'3BT-ds','CodeTile':'三不同',ShowTile:'单式选号',Rebates:'Normal',MaxNote:''},'3BT-HZ':{playid:'3BT-HZ','CodeTile':'三不同',ShowTile:'和值选号',Rebates:'Normal',MaxNote:''},'3BT-dt':{playid:'3BT-dt','CodeTile':'三不同',ShowTile:'胆拖选号',Rebates:'Normal',MaxNote:''}},'2BT':{'2BT-bz':{playid:'2BT-bz','CodeTile':'二不同',ShowTile:'标准选号',Rebates:'Normal',MaxNote:''},'2BT-ds':{playid:'2BT-ds','CodeTile':'二不同',ShowTile:'单式选号',Rebates:'Normal',MaxNote:''},'2BT-dt':{playid:'2BT-dt','CodeTile':'二不同',ShowTile:'胆拖选号',Rebates:'Normal',MaxNote:''}},'3LH':{'3LH-tx':{playid:'3LH-tx','CodeTile':'',ShowTile:'',Rebates:'Normal',MaxNote:''}}};var arrPlayList = {'k3_hz':{playid:'k3_hz',content:'投注数值与开奖三位数和值一致即中奖。',example:'是指对三个开奖号码的和值进行投注,和值从3到18,三个开奖号码的和值等于购买的号码，即为中奖。',help:'购买号码:5<br>开奖号码:113',title:'和值',shownum:'0',minnum:'0',maxnum:'0',show_key:'3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18',show_other:'',max_select:'5000',min_select:'0',is_yes:'yes','prize':'14.218'},'3TH-tx':{playid:'3TH-tx',content:'豹子号全包，开奖结果只要是豹子号即中奖。',example:'投注方案：111、222、333、444、555、666<br>开奖号码：3、3、3<br>即中奖',help:'只要开奖号码是豹子号（即三个号码一致）即中奖。',title:'号码',shownum:'0',minnum:'0',maxnum:'0',show_key:'111 222 333 444 555 666',show_other:'',max_select:'0',min_select:'0',is_yes:'','prize':'65.279'},'3TH-dx':{playid:'3TH-dx',content:'开出的豹子号与您选择的一致即中奖',example:'投注方案：333<br>开奖号码：3、3、3<br>即中奖',help:'开奖号码三位数一致即豹子号，可单选，也可多选，开奖结果包含所选豹子号即中奖。',title:'号码',shownum:'0',minnum:'0',maxnum:'0',show_key:'111|222|333|444|555|666',show_other:'',max_select:'0',min_select:'0',is_yes:'','prize':'324.649'},'2TH-fx':{playid:'2TH-fx',content:'开奖结果有对子号，且与您选择的对子号一致即中奖。',example:'投注方案：33*<br>开奖号码：2、3、3<br>即中奖',help:'开奖结果仅两个号码相同，且对子号与您选的对子号一致即中奖，不论顺序，可单选，可多选。',title:'号码',shownum:'0',minnum:'0',maxnum:'0',show_key:'11*|22*|33*|44*|55*|66*',show_other:'',max_select:'0',min_select:'0',is_yes:'yes','prize':'23.347'},'2TH-dx':{playid:'2TH-dx',content:'选择一个对子号和一个单号，与开奖结果一致即中奖。',example:'投注方案：11 3<br>开奖号码：1、1、3<br>即中奖',help:'开奖结果仅两个号码相同，且对子号和单号都与您选择的一致即中奖，不论顺序，可单选，可多选。',title:'同号|不同号',shownum:'0',minnum:'0',maxnum:'6',show_key:'11|22|33|44|55|66~1|2|3|4|5|6',show_other:'',max_select:'0',min_select:'0',is_yes:'yes','prize':'110.247'},'2TH-ds':{playid:'2TH-ds',content:'是指对三个号码中两个指定的相同号码和一个指定的不同号码进行投注',example:'是指对三个号码中两个指定的相同号码和一个指定的不同号码进行投注,开奖号码中有两个号码相同,与购买号码一样,顺序不限',help:'购买号码:112<br>开奖号码:112',title:'',shownum:'0',minnum:'0',maxnum:'0',show_key:'0',show_other:'0',max_select:'',min_select:'0',is_yes:'yes','prize':'110.247'},'3BT-dx':{playid:'3BT-dx',content:'至少选择3个不同号码投注，选号与开奖号码一致即中奖',example:'投注方案：1、3、6<br>开奖号码：1、3、6<br>即中奖',help:'至少选择3个号码，可以更多选，开奖结果包含所选号码即中奖，不论顺序。',title:'号码',shownum:'0',minnum:'0',maxnum:'0',show_key:'1|2|3|4|5|6',show_other:'',max_select:'0',min_select:'0',is_yes:'','prize':'59.186'},'3BT-ds':{playid:'3BT-ds',content:'手动输入，至少输入一个3位数,号码由1-6组成的不同的号码',example:'是指对三个各不相同的号码进行投注。',help:'购买号码:123<br>开奖号码:123',title:'',shownum:'0',minnum:'0',maxnum:'0',show_key:'0',show_other:'0',max_select:'',min_select:'0',is_yes:'yes','prize':'59.186'},'3BT-HZ':{playid:'3BT-HZ',content:'是指对三个各不相同的号码的和值进行投注',example:'是指对三个各不相同的号码和值进行投注,三个开奖号码完全不同,并且开奖号码的和值与所选和值号码一致，即为中奖。',help:'购买号码:10<br>开奖号码:136或者145或者23',title:'和值',shownum:'0',minnum:'0',maxnum:'0',show_key:'6|7|8|9|10|11|12|13|14|15',show_other:'',max_select:'5000',min_select:'1',is_yes:'yes','prize':'63.979'},'3BT-dt':{playid:'3BT-dt',content:'胆码选择不超过2个，总选择不超过3个号码，选号与开奖号码一致即中奖。',example:'投注方案：胆码：1，拖码：3、6<br>开奖号码：1、3、6<br>即中奖',help:'胆码最多选2个，拖码选择个数不限制（但至少选1个），开奖结果必须包含胆码，其他号码在拖码中即中奖，不论顺序。',title:'胆码|拖码',shownum:'0',minnum:'0',maxnum:'0',show_key:'1|2|3|4|5|6~1|2|3|4|5|6',show_other:'',max_select:'0',min_select:'0',is_yes:'','prize':'59.186'},'2BT-bz':{playid:'2BT-bz',content:'至少选择2个不同号码投注，选号与开奖号码一致即中奖',example:'投注方案：2、5<br>开奖号码：2、3、5<br>即中奖',help:'至少选2个不同号码下注，可多选，开奖结果至少两个号码不同，且开奖结果包含您选的号码即中奖，不论顺序。',title:'号码',shownum:'0',minnum:'0',maxnum:'0',show_key:'1|2|3|4|5|6',show_other:'',max_select:'0',min_select:'0',is_yes:'','prize':'13.259'},'2BT-ds':{playid:'2BT-ds',content:'手动输入，至少输入一个2位数,号码由1-6组成的不同的号码。',example:'是指对三个号码中两个指定的不同号码和一个任意号码进行投注',help:'购买号码:12<br>开奖号码:123',title:'',shownum:'0',minnum:'0',maxnum:'0',show_key:'0',show_other:'0',max_select:'',min_select:'0',is_yes:'yes','prize':'13.259'},'2BT-dt':{playid:'2BT-dt',content:'选择一个胆码，拖码不限（最少1个），选号与开奖号码一致即中奖',example:'投注方案：胆码2、拖码1、5<br>开奖号码：2、3、5<br>即中奖',help:'胆码仅能选1个，拖码选择个数不限制（但至少选1个），开奖结果至少两个号码不同，开奖结果必须包含胆码，且拖码至少有1个在开奖号码中即中奖，不论顺序。',title:'胆码|拖码',shownum:'0',minnum:'0',maxnum:'0',show_key:'1|2|3|4|5|6~1|2|3|4|5|6',show_other:'',max_select:'0',min_select:'0',is_yes:'','prize':'13.259'},'3LH-tx':{playid:'3LH-tx',content:'顺子号全包，开奖结果只要是顺子号即中奖',example:'投注方案：123、234、345、456<br>开奖号码：2、3、4<br>即中奖',help:'只要开奖号码是顺子号（即三个号码前后相连）即中奖。',title:'号码',shownum:'0',minnum:'0',maxnum:'0',show_key:'123 234 345 456',show_other:'',max_select:'0',min_select:'0',is_yes:'yes','prize':'16.726'}};var arrPlayPri = {'2TH-dx':{'prize':'108.56'},'2TH-fx':{'prize':'22.99'},'2BT-bz':{'prize':'13.056'},'2BT-dt':{'prize':'13.056'},'3TH-dx':{'prize':'319.68'},'3TH-tx':{'prize':'64.28'},'3BT-dx':{'prize':'58.28'},'3BT-dt':{'prize':'58.28'},'3LH-dx':{'prize':'58.28'},'3LH-tx':{'prize':'16.470'},'SH':{'prize':'32.4|8.23|8.23|2.74|2.19'},'2TH-qw':{'prize':'11.49'},'2BT-qw':{'prize':'6.52'},'3TH-qw':{'prize':'29.14'},'HZ-qw':{'prize':'154|58.28|29.14|18.48|12.65|9.38|7.99|7.32|7.32|7.99|9.38|12.56|18.48|29.14|58.28|154'},'KD-qx':{'prize':'32.14|6.52|4.11|3.66|4.11|6.52'},'BCH-qw':{'prize':'1.59'},'BDW-qw':{'prize':'2.16'},'ZYSM-qw':{'prize':'1.93'},'k3_hz':{'prize':'14'},'2TH-ds':{'prize':'108.56'},'3BT-HZ':{'prize':'63'},'3BT-ds':{'prize':'58.28'},'2BT-ds':{'prize':'13.056'}};var arrPlayTime = {'2TH-dx':{},'2TH-fx':{},'2BT-bz':{},'2BT-dt':{},'3TH-dx':{},'3TH-tx':{},'3BT-dx':{},'3BT-dt':{},'3LH-dx':{},'3LH-tx':{},'SH':{},'2TH-qw':{},'2BT-qw':{},'3TH-qw':{},'HZ-qw':{},'KD-qx':{},'BCH-qw':{},'BDW-qw':{},'ZYSM-qw':{},'k3_hz':{},'2TH-ds':{},'3BT-HZ':{},'3BT-ds':{},'2BT-ds':{}};