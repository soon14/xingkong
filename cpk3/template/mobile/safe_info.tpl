


<!--{include file="<!--{$tplpath}-->head.tpl"}--> 

    <link href="<!--{$file_uri}-->/<!--{$skinpath}-->2017/Css/mycenter.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<!--{$file_uri}-->/<!--{$skinpath}-->zdialog/zdrag.js"></script>
<script type="text/javascript" src="<!--{$file_uri}-->/<!--{$skinpath}-->zdialog/zdialog.js"></script>
<script language="javascript" type="text/javascript" src="<!--{$file_uri}-->/<!--{$skinpath}-->js/diags.js"></script>
<script language="javascript" type="text/javascript" src="<!--{$file_uri}-->/<!--{$skinpath}-->js/window.diags.js"></script>

<style>

	.sec_m li{
		background-color: #fff;
		height:40px;
		line-height: 40px;
		padding: 0px 10px;
		border-bottom: 1px solid #ddd;
clear: both;
	}
	.sec_m li span{
		display: inline-block;
		overflow: hidden;
		height:40px;
		line-height: 40px;
	}
	.sec_m li span:first-child{
		float: left;
		width: 80px;
		text-align: right;
	}
	.sec_m li span:last-child{
	padding-left: 5px;
		text-align: left;
	}

</style>

<!--{if $next_group['title']}-->
<div class="top">
	<div class="back" onclick="window.history.go(-1);" >
		<i  class=" icon-left-open-big"></i>

	</div>
	<ul>
		<li class="<!--{if $smarty.get.type!='grade'}-->on<!--{/if}-->"  ><a  href="home_safe_info.html">个人资料</a></li>
		<li class="<!--{if $smarty.get.type=='grade'}-->on<!--{/if}-->"  >
			<a href="home_safe_info.html?type=grade">等级头衔</a>
		</li>
	</ul>

</div>

<!--{/if}-->


		<!--{if $smarty.get.type!='grade'}-->

		<!--用户资料管理开始-->
							<div class="sec_m" >
								<form name="theform" action='?mod=safe&code=info' onsubmit="return check_sub()" method='post'>
								<ul>
									<li><span class="sp338 tr">头像：</span>
										<span style="text-align: left;height: 50px;">			<img  src="<!--{$file_uri}-->/<!--{avatar()}-->" style="width: 40px;height: 40px;margin-top: 0px;" class="avatar" onclick="location.href='home_safe_avatar.html'; "></span></li>

									<li><span class="sp338 tr">账号：</span>
									<span><!--{$userinfo['username']}--></span></li>

									<li><span class="sp338 tr">等级：</span>
										<span><!--{$user_group['title']}--></span>
									</li>
									<li><span class="sp338 tr">头衔：</span>
										<span><!--{$user_group['touxian']}--></span>
									</li>
									

									<!--{foreach from=$field_list key=key item=item}-->

									<li><span class="sp338 tr"><!--{$item['title']}-->：</span>
										<span>

											<input type="text" name="field[<!--{$item['id']}-->]" id="field_<!--{$item['id']}-->"   value="<!--{if field_show($userinfo['userid'],$item['id'])}--><!--{str_md(field_show($userinfo['userid'],$item['id']))}--><!--{/if}-->" disabled  style="width: 150px;">
                                          <!-- <font  onclick="update_item('field_<!--{$item['id']}-->');">修改</font> -->
										</span>
									</li>

									<!--{/foreach}-->

									<li><span class="sp338 tr">性别：</span>
										<span>
                                    <input type="radio" name="sex" value="男" <!--{if $userinfo['sex']=='男'}-->checked<!--{/if}-->>男 &nbsp;&nbsp;
											    <input type="radio" name="sex" value="女" <!--{if $userinfo['sex'] == '女'}-->checked<!--{/if}-->>女 &nbsp;&nbsp;
											    <input type="radio" name="sex" value="保密" <!--{if $userinfo['sex']=='保密'}-->checked<!--{/if}-->>保密
										</span></li>

									<li><span class="sp338 tr">生日：</span><span>
							<input type="text" name="birth"  value="<!--{$userinfo['birth']}-->" class="Wdate" onclick="WdatePicker({dateFmt:'yyyy-MM-dd',alwaysUseStartDate:false})"></span></li>
									<li><span class="sp338 tr"> &nbsp;</span><span>
										<input type="submit" value="修 改" class="button" onclick="return click_sub();"/></span></li>
								</ul>
								</form>
							</div>


<script>

    function  update_item(id) {

        document.getElementById(id).value='';
        document.getElementById(id).disabled=false;

    }

    function isChineseChar(str){
        var reg = /[\u4E00-\u9FA5\uF900-\uFA2D]/;
        return reg.test(str);
    }

    function click_sub() {

        <!--{foreach from=$field_list key=key item=item}-->
        if(isChineseChar(document.getElementById('field_<!--{$item['id']}-->').value)){
            alert('<!--{$item['title']}-->不能包含中文')

            return false;
        }


        <!--{/foreach}-->
    }

</script>
		<!--{else}-->

<div class="ag-top" style="height: 220px">
<div style="   display: table;table-layout: fixed;width:95%;margin:0 auto;padding-top: 10px;">
<div style="display:table-cell;width:100px;text-align:left;">
<img src="<!--{avatar()}-->" style="width: 80px;height:80px;border-radius: 50%;border: 4px #7a4456 solid">

</div>

	<div style="    display: table-cell;vertical-align: top;padding-top: 10px;line-height: 30px;font-size: 16px;">
		<div >	<span style="color: #fff;display: inline-block;width: 110px"><!--{$userinfo['username']}--></span>
		<span style="color:#f4e80b;"><!--{$user_group['title']}--></span>
		</div>
		<div>	<span style="color: #fff;display: inline-block;width: 110px">头衔：<!--{$user_group['touxian']}--></span>

			<span style="color:#f4e80b;">成长值<!--{$userinfo['score']}-->分</span>
		</div>
	</div>
</div>

	<div style="margin-top: 30px;padding-left: 10px;">

		距离下一级还要<!--{$next_group['score']-$userinfo['score']}-->分,每充值1元加<!--{$con_system['score_pre']/100}-->分

	</div>
	<div  class="levelBar">
		<p  class="upProgress">
			<span  class="pgbar" style="width:<!--{100*($userinfo['score']-$user_group['score'])/($next_group['score']-$user_group['score'])}-->%;"><span  class="pging"></span></span>
		</p>
		<em ><!--{100*number_format(($userinfo['score']-$user_group['score'])/($next_group['score']-$user_group['score']),2,'.','')}-->%</em>
		<div  class="levelBarInfo"><em ><!--{$user_group['title']}--></em>
			<p ><span  style="color: rgb(241, 66, 65);"><!--{$userinfo['score']-$user_group['score']}--></span>/<!--{$next_group['score']-$user_group['score']}--> </p><i ><!--{$next_group['title']}--></i>
		</div>
	</div>


</div>


		<div class="sec_m" style="display: inline-block;background-color: #fff;">



<DIV class="gradeCon">







		<h6 >等级机制</h6>





		<table style=" border-spacing: 0px;">
			<tbody >
			<tr ><th >等级</th> <th >头衔</th> <th >成长积分</th> <th >晋级奖励(元)</th></tr>
			<!--{foreach from=$group_list key=key item=item}-->
			<tr ><td ><!--{$item['title']}--></td><td ><!--{$item['touxian']}--></td><td ><!--{$item['score']}--></td><td ><!--{$item['prize']}--></td></tr>
			<!--{/foreach}-->
		</tbody>
		</table>
	<div  class="levelBar"><div  class="userTip"><p ><i class="icon-warning" ></i>温馨提示：若会员跳级晋升，可获得晋升的各级奖励之和，<br >
				&nbsp;&nbsp;&nbsp;&nbsp;
				如<!--{$group_list[0]['title']}-->直接晋升到<!--{$group_list[4]['title']}-->，
				可获得奖励为：<!--{$group_list[1]['prize']}-->+<!--{$group_list[2]['prize']}-->+<!--{$group_list[3]['prize']}-->+<!--{$group_list[4]['prize']}-->=<!--{$group_list[1]['prize']+$group_list[2]['prize']+$group_list[3]['prize']+$group_list[4]['prize']}-->元。
			</p></div></div>
</DIV>
	<!--{/if}-->
						</div>

 