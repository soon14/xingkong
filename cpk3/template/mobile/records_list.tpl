<!--{include file="<!--{$tplpath}-->head.tpl"}--> 

    <link href="<!--{$file_uri}-->/<!--{$skinpath}-->2017/Css/xssc.css" type="text/css" rel="stylesheet" />
    <link href="<!--{$file_uri}-->/<!--{$skinpath}-->2017/Css/mycenter.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="<!--{$file_uri}-->/<!--{$skinpath}-->2017/JS/MyCenter_Menu.js" ></script>


<script language="javascript" type="text/javascript" src="/static/js/My97DatePicker/WdatePicker.js"></script>
<!--{include file="<!--{$tplpath}-->navi.tpl"}-->

<script type="text/javascript">
  function jiangjin(a) {
    var jin="jiangjin" + a;
    $("#jiangjin a").each(function(){
      var id = $(this).attr("id");
      if (id==jin) {
        $(this).css("color","red");
      }
      else {
        $(this).css("color","");
      }
    });
  }

</script>


        <!--头部链接开始-->
        <!--主导航-->
        <div id="bd">

            <div id="main" class="clearfix">
                <div class="my_left">
         
                    

<!--{include file="<!--{$tplpath}-->user_left.tpl"}-->

              
                </div>
                <div class="my_right">
               
<!--{include file="<!--{$tplpath}-->user_top.tpl"}-->












                    <div class="home_rec clearfix">
      
                       <form action="home_records_list.html" method="get" target="_self">
                           

                        <table width="100%" border="0" style="border-bottom: 0px; border-right: 0px;" cellspacing="0"
                            cellpadding="0" class="my_tbl">
                            <tr>
                                <td align='left'>
                                &nbsp;彩种：
                                    <select name="lotteryid" id="lotteryid">
                                        <option value="">-所有彩种-</option>
                
                                        <!--{set_game_select('lotteryid','get')}-->
                                    </select>
                      
                                   &nbsp;类型：
                           <select id='is_prize' name='is_prize'>
	 <option value=''>-全部-</option>
	 <option value='3'>已中奖</option>
	 <option value='2'>未中奖</option>
	 <option value='1'>未开奖</option>
	 <option value='9'>已撤单</option></select>
	 <script>selectSetItem(G('is_prize'),'<!--{$is_prize}-->')</script>
                                    &nbsp;期号：<input name="period" type="text" style="width:100px;" value="<!--{$smarty.get.period}-->" />
                                   &nbsp;日期：
                                    <input type="text" name="begindate" id="begindate" value="<!--{$begindate}-->"  class="Wdate" style='width:100px;'type="text" onclick="WdatePicker({dateFmt:'yyyy-MM-dd',alwaysUseStartDate:false})"/>
	&nbsp;至

	 <input type="text" name="enddate" id="enddate" value="<!--{$enddate}-->"  class="Wdate" type="text" style='width:100px;' onclick="WdatePicker({dateFmt:'yyyy-MM-dd',alwaysUseStartDate:false})" />&nbsp;

                                    
                                                                     &nbsp;<input type="submit" class="button" onclick="" value=" 查询 " />
                                </td>
                            </tr>
                        </table>
                        </form>
                        <table style="border-bottom: 0px; border-right: 0px; border-top: 0px;" class="my_tbl my_tbltdm"
                            border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tbody>
                                <tr>   
                                                                <th>
                               彩种
                                    </th>                              
                                    <th>
                                        期号
                                    </th>
                                    <th>
                                        玩法
                                    </th>
                                    <th>
                                        号码
                                    </th>
                
                                    <th>
                                        金额
                                    </th>
                                                                                 <th>
                                  注数
                                    </th>
                                                          <th>
                                  倍数
                                    </th>
                                                          <th>
                                        模式
                                    </th>
                                    
               
                                    <th>
                                        奖金
                                    </th>
                                                                                        <th>
                                        状态
                                    </th>
                                    <th>
                                        时间
                                    </th>
                                    
     
                                    <th>
                                        操作
                                    </th>
                                </tr>
                                
                         
  <!--{$game_list}--> 

<script> 
   //show_moneys(G('listnums').value,"mon")
   //var moneys=G("moneys").innerHTML;
   //var prizes=G("prizes").innerHTML;
   //G("moneys").innerHTML=moneyFormatB(moneys);
   //G("prizes").innerHTML=moneyFormatB(prizes); 
   selectSetItem(G('gameid'),'<?echo $gameid;?>');
   selectSetItem(G('lotteryid'),'<?echo $lotteryid;?>')
</script>
                    
                                
                               <tr>
                                    <td class="page" colspan="15" style="padding: 8px;">
                                   
<!--{include file="<!--{$tplpath}-->block_page.tpl"}-->  
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>                        
                      
                        </div>
                    </div>
                    <!--详细内容iframe-end-->
                    
                </div>
            </div>
        </div>
        <!--底部包含文件开始-->
<!--{include file="<!--{$tplpath}-->bottom.tpl"}--> 








