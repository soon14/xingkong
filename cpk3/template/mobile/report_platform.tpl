
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
<!--{include file="<!--{$tplpath}-->report_nav.tpl"}-->




                    <div class="home_rec clearfix">

                        <div>
                            <table width="100%" border="0" cellspacing="1" cellpadding="4" >
  <form method="POST" action="<!--{$this_url}-->" name="form1" id="form1"> 
  <input name="isgetdata" id="isgetdata" value="yes" style='display:none'>
  <tr height=25 align="left">
     <td width=100% align="left" style='padding-left:5px;'>
     
	<b>订单号</b>：  <input type="text" name="order_sn" id="order_sn" style="width:200px;" value='<!--{$smarty.post.order_sn}-->'>

&nbsp;&nbsp;
	<b>时间</b>：<input type="text" name="begindate" id="begindate" value="<!--{$begindate}-->"class="Wdate"  style="width:100px;"  onclick="WdatePicker({dateFmt:'yyyy-MM-dd',alwaysUseStartDate:false})">
&nbsp;&nbsp;至
	 <input type="text" name="enddate" id="enddate" value="<!--{$enddate}-->" class="Wdate" style="width:100px;"   onclick="WdatePicker({dateFmt:'yyyy-MM-dd',alwaysUseStartDate:false})">&nbsp;

 &nbsp;&nbsp;

 &nbsp;&nbsp;
    <input type="submit" value="搜 索" class="button"></td>
   </tr>
 </table>
  
<style>.td_div{overflow:hidden;height:30px;}</style>  
          <table style="border-top: 0px; border-right: 0px; border-bottom: 0px;margin-top:10px;" class="my_tbl my_tbltdm list_tbl" border="0" cellspacing="0"
                            cellpadding="0" width="100%">
                            <tbody>
                                <tr>
                                    <th>
                                        订单号
                                    </th>
                                    
                                    <th>
                                        提现金额
                                    </th>
                                    <th>
                                        可用资金
                                    </th>
          
                                    <th>
                                        操作时间
                                    </th>
                                                                     
                                    <th>
                                        账户类型
                                    </th>                                    
                                    <th>
                                        状态
                                    </th>
                
                                </tr>
                                  <!--{if count($list)>0}-->
                  <!--{foreach from=$list key=key item=value}--> 

					
                                <tr>
                                    <td>
                                      <!--{$value['order_sn']}-->
                                    </td>
                                   
                                    <td>
                                        <span id="czcount">  <!--{$value['money']}--></span>
                                    </td>
                                    <td>
                                         <!--{$value['hig_amount']}-->
                                    </td>
                                
                                    <td>
                                       <!--{$value['creatdate']}-->
                                    </td>
									
									<td>
                                        <a href="javascript:void(0)" onclick="DialogResetWindow('订单 <!--{$value['order_sn']}-->提现信息','index.aspx?mod=platform&code=info&id=<!--{$value['id']}-->','600','250');" class="blue">  <!--{$value['bankname']}--></a>
                                    </td> 
									
									                                   
                                    <td>
                                 <!--{if $value['status']=='0'}-->等待审核<!--{/if}-->
                                 <!--{if $value['status']=='1'}-->提现成功<!--{/if}-->
                                 <!--{if $value['status']=='2'}-->提现失败<!--{/if}-->                        
                                    </td>
                                
                                </tr>
                                
<!--{/foreach}-->
                                
                                <tr>
                                    <td>当页合计</td>
                                    <td><span id="czcounts"><!--{$sum}--></span></td>
                                    <td></td>
                                    <td colspan="5"></td>
                                </tr>
                                <tr>
                                    <td>当期合计</td>
                                    <td><!--{$sum1}--></td>
                                    <td></td>
                                    <td colspan="5"></td>
                                </tr>
                                <tr>
                                     <td class="page" colspan="10" style="padding: 8px;">
                                        
                                   

<!--{include file="<!--{$tplpath}-->block_page.tpl"}-->  	     
                                    </td>
                                </tr>
                                
                                     
                                  <!--{else}-->
                            <tr>
                            <td colspan="10">
                            
                            

                <div class="drawing-table">
                        <div class="complete">
                            <div class="complete-sub image"> <span><img src="<!--{$file_uri}-->static/images/empty.png" alt=""></span> </div>
                            <div class="complete-sub title">
                                <h2>呃...当前查询条件没有记录!</h2>
                            </div>
                        </div>
                </div>
                
                            </td>
                            
                            </tr>
                            
                            <!--{/if}-->
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













