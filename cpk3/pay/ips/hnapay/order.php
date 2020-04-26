<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pay Page</title>
</head>
<body>
	<h2>商户下单</h2>
	<form action="./order2.aspx" method="post">
		<table border="1" width="70%">
			<tr>
				<td width="250">提交的路徑 URL：</td>
				<td>
					<input type="text" name="URL" size="50" value="https://www.hnapay.com/website/pay.htm">
				 </td>
			</tr>
			<tr>
				<td width="250">版本	version：</td><td><input type="text" name="version" value="2.6">
				 </td>
			</tr>
			<tr>
				<td width="250">请求流水号 serialID：</td><td><input type="text" name="serialID" value="<?php echo time().rand(100, 1000);?>" >
					<input type="button" value="生成请求流水号" onclick="setOrderId(this.form);"/>
				 </td>
			</tr>
			<tr>
				<td width="250">订单提交时间	submitTime：</td><td><input type="text" name="submitTime" id="submitTime"  value="<?php echo date('YmdHis');?>"> 年年年年月月日日分分秒秒
				 </td>
			</tr>
			<tr>
				<td width="250">订单失效时间	failureTime：</td><td><input type="text" name="failureTime" id="failureTime"  value="<?php echo date('YmdHis',time()+365*24*3600);?>"> 年年年年月月日日分分秒秒，当前时间加1年
				 </td>
			</tr>
			<tr>
				<td width="250">客户下单域名及IP	customerIP：</td><td><input type="text" name="customerIP" value='localhost[127.0.0.1]'>
				 </td>
			</tr>
			<tr>
				<td width="250">订单明细信息	orderDetails：</td><td><input type="text" size="80" name="orderDetails">
					<input type="button" value="生成订单明细" onclick="buildOrderDetails(this.form);"/>
				 </td>
			</tr>
			<tr>
				<td width="250">订单总金额 totalAmount：</td><td><input type="text" id='totalAmount' name="totalAmount">
				 </td>
			</tr>
			<tr>
				<td width="250">交易类型 	type ：</td><td><input type="text" name="type" value='1000'> <br/>即时支付
				 </td>
			</tr>
			<tr>
				<td width="250">付款方新生账户号	buyerMarked ：</td><td><input type="text" name="buyerMarked" value="">
				 </td>
			</tr>
			<tr>
				<td width="250">付款方式	payType：</td><td><input type="text" name="payType" value='ALL'><br/>ALL：全部（默认），ACCT_RMB：账户支付，BANK_B2C：网银B2C支付，BANK_B2B：网银B2B支付
				 </td>
			</tr>
			<tr>
				<td width="250">目标资金机构代码	orgCode：</td><td><input type="text" name="orgCode">
				 </td>
			</tr>
			<tr>
				<td width="250">交易币种	currencyCode：</td><td><input type="text" name="currencyCode" value='1'> <br/>1：人民币（默认）,2：预付卡（选择用预付费卡支付时，可选）,3：授信额度
				 </td>
			</tr>
			<tr>
				<td width="250">是否直连	directFlag：</td><td><input type="text" name="directFlag" value='0'> <br/>0：非直连 （默认）,1：直连
				 </td>
			</tr>

			<tr>
				<td width="250">资金来源借贷标识	borrowingMarked :</td><td><input type="text" name="borrowingMarked" value='0'> 
				<br/>0：无特殊要求（默认）,1：只借记,2：只贷记
				</td>
			</tr>
			<tr>
				<td width="250">优惠券标识 couponFlag :</td><td><input type="text" name="couponFlag" value='1'>
				<br/>1：可用 （默认）,0：不可用
				</td>
			</tr>
			<tr>
				<td width="250">平台商ID	 platformID :</td><td><input type="text" name="platformID"> </td>
			</tr>
			<tr>
                <!-- returnUrl：商户必须配置为从外网能访问到的地址 -->
				<td width="250">商户回调地址	returnUrl :</td><td><input type="text" name="returnUrl" value="http://localhost/returnUrl.aspx"> </td>
			</tr>
			<tr>
                <!-- noticeUrl：商户必须配置为从外网能访问到的地址 -->
				<td width="250">商户通知地址	noticeUrl :</td><td><input type="text" name="noticeUrl" value="http://localhost/noticeUrl.aspx"> </td>
			</tr>
			<tr>
				<td width="250">商户ID	partnerID:</td><td><input type="text" name="partnerID" value="10088159555"> </td>
			</tr>
			<tr>
				<td width="250">扩展字段	remark:</td><td><input type="text" name="remark" value='扩展字段'> </td>
			</tr>
			<tr>
				<td width="250">编码方式	charset:</td><td><input type="text" name="charset" value='1'> </td>
			</tr>
			<tr>
				<td width="250">签名类型	signType:</td><td><input type="text" name="signType" value='2'>
					1：RSA 方式（推荐）,2：MD5 方式
				 </td>
			</tr>
			<tr>
				<td width="250">签名字符串 signMsg：</td><td><input type="text" name="signMsg"> 
					<input type="button" value="生成签名字符串 signMsg" onclick="setsignMsg(this.form);"/>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="submit">
					<input type="reset" value="reset">
				</td>
			</tr>
		</table>
	</form>
	
	
<p><font color="red">订单明细开始</font></p>
订单详细信息：<input type="text" id='orders' name="orders" size="80" value="" readonly="readonly"/><br/>

订单号 orderID：<input name="orderID" id="orderID" value="<?php echo time();?>"/><br/>
订单明细金额 orderAmount：<input name="orderAmount" id="orderAmount" value="100"/><br/>
下单商户显示名 displayName：<input name="displayName" id="displayName" value="上海易生"/><br/>
商品名称 goodsName：<input name="goodsName" id="goodsName" value="测试机票A"/><br/>
商品数量 goodsCount：<input name="goodsCount" id="goodsCount" value="1"/><br/>
<br/>

<!-- 订单号 orderID：<input name="orderID1" id="orderID1" value="188888"/><br/>
订单明细金额 orderAmount：<input name="orderAmount1" id="orderAmount1" value="100"/>厘<br/>
下单商户显示名 displayName：<input name="displayName1" id="displayName1" value="上海易生"/>厘<br/>
商品名称 goodsName：<input name="goodsName1" id="goodsName1" value="测试机票B"/><br/>
商品数量 goodsCount：<input name="goodsCount1" id="goodsCount1" value="1"/><br/>
<br/> -->

<p><font color="red">订单明细结束</font></p>
	
		
	<script type="text/javascript">

	function setOrderId(f){
	
	var myDate = new Date();
	f.serialID.value=myDate.getTime();
	document.getElementById("orderID").value = f.serialID.value.substr(5) + "1";

	
	var myDate = new Date();
    myDate.getYear();       //获取当前年份(2位)
    myDate.getFullYear();   //获取完整的年份(4位,1970-????)
    myDate.getMonth();      //获取当前月份(0-11,0代表1月)
    myDate.getDate();       //获取当前日(1-31)
    myDate.getDay();        //获取当前星期X(0-6,0代表星期天)
    myDate.getTime();       //获取当前时间(从1970.1.1开始的毫秒数)
    myDate.getHours();      //获取当前小时数(0-23)
    myDate.getMinutes();    //获取当前分钟数(0-59)
    myDate.getSeconds();    //获取当前秒数(0-59)
    myDate.getMilliseconds();   //获取当前毫秒数(0-999)
    myDate.toLocaleDateString();    //获取当前日期
    var mytime=myDate.toLocaleTimeString();    //获取当前时间
    myDate.toLocaleString();       //获取日期与时间

	var x = myDate.getFullYear()+'';
	var y = myDate.getFullYear()+1+'';
    
    if(myDate.getMonth()+1<10){
    	x += '0'+(myDate.getMonth()+1);
    	y += '0'+(myDate.getMonth()+1);
    }
    else{
    	x+=myDate.getMonth()+1;
    	y+=myDate.getMonth()+1;
    }
    
    if(myDate.getDate()<10){
    	x += '0'+myDate.getDate();
    	y += '0'+myDate.getDate();
    }
    else{
    	x +=myDate.getDate();
    	y +=myDate.getDate();
    }
    
    if(myDate.getHours()<10){
    	x += '0'+myDate.getHours();
    	y += '0'+myDate.getHours();
    }
    else{
    	x +=myDate.getHours();
    	y +=myDate.getHours();
    }
    
    if(myDate.getMinutes()<10){
    	x += '0'+myDate.getMinutes();
    	y += '0'+myDate.getMinutes();
    }
    else{
    	x +=myDate.getMinutes();
    	y +=myDate.getMinutes();
    }
    
    if(myDate.getSeconds()<10){
    	x += '0'+myDate.getMinutes();
    	y += '0'+myDate.getMinutes();
    }
    else{
    	x +=myDate.getSeconds();
    	y +=myDate.getSeconds();
    }
    if(x.length = 15){
		x = x.substr(0, 14)
	}
	if(y.length = 15){
		y = y.substr(0, 14)
	}
    document.getElementById("submitTime").value = x;
	document.getElementById("failureTime").value = y;
    
    }

function makeRandomNumber(n,min,max)
{
     var nums=[];
     var a;
     do{
       a=min+Math.random()*max;
       nums.push(a);
     }while(nums.length<n)
     return nums
}
	
		/*根据元素ID取得元素*/
function $E(elemid) {
	return document.getElementById(elemid);
}
/*根据元素ID取得元素的value*/
function $Vo(elemid) {
	return document.getElementById(elemid).value;
}
/*检查字符串是否为Null*/
function isNull(s){
    if (s == null || s.length <= 0 || s.trim() == ""){
            return true;
    }
    return false;
}


var fieldArr = new Array("orderID",
		"orderAmount","displayName",
		"goodsName");
		
var fieldArr2 = new Array("orderID1",
		"orderAmount1","displayName1",
		"goodsName1");

function buildOrderDetails(d){

	var str = '';
	var key1 = '';
	var key2 = '';
	
	for(var i = 0;i<fieldArr.length;i++) {
		key1 += $Vo(fieldArr[i]) + ',' ;
	}
	key1 += $Vo('goodsCount');
 	
	// for(var i = 0;i<fieldArr2.length;i++) {
	//	key2 += $Vo(fieldArr2[i]) + ',' ;
	//}
	//key2 += $Vo('goodsCount1'); -->
	
	str = key1;//+"|"+key2;

	d.orderDetails.value=str;
	document.getElementById('orders').value = str;
	
	document.getElementById('totalAmount').value= 
		eval(document.getElementById('orderAmount').value);//+
		//eval(document.getElementById('orderAmount1').value);
	
	
}
		
		
		function setsignMsg(f){
			/*
			版本	version
			请求序列号	serialID
			订单提交时间	submitTime
			订单失效时间	failureTime

			客户下单域名及IP	customerIP
			订单明细信息	orderDetails
			订单总金额	totalAmount
			交易类型 	type 
			付款方新生账户号	buyerMarked
			付款方式	payType
			目标资金机构代码	orgCode
			交易币种	currencyCode
			是否直连	directFlag
			资金来源借贷标识	borrowingMarked
			优惠券标识	couponFlag
			平台商ID	platformID
			商户回调地址	returnUrl
			商户通知地址	noticeUrl
			商户ID	partnerID
			扩展字段	remark
			编码方式	charset
			签名类型	signType
			签名字符串	signMsg
			
			*/
			
			var version = f.version.value;
			var serialID = f.serialID.value;
			var submitTime = f.submitTime.value;
			var failureTime = f.failureTime.value;
			var customerIP = f.customerIP.value;
			var orderDetails = f.orderDetails.value;
			var totalAmount = f.totalAmount.value;
			var type = f.type.value;
			var buyerMarked = f.buyerMarked.value;
			var payType = f.payType.value;
			var orgCode = f.orgCode.value;
			var currencyCode = f.currencyCode.value;
			var directFlag = f.directFlag.value;
			var borrowingMarked = f.borrowingMarked.value;
			var couponFlag = f.couponFlag.value;
			var platformID = f.platformID.value;
			var returnUrl = f.returnUrl.value;
			var noticeUrl = f.noticeUrl.value;
			var partnerID = f.partnerID.value;
			var remark = f.remark.value;
			var charset = f.charset.value;
			var signType = f.signType.value;
			
			f.signMsg.value = 
			"version="+version
			 +"&serialID="+serialID
			 +"&submitTime="+submitTime
			 +"&failureTime="+failureTime
			 +"&customerIP="+customerIP
			 +"&orderDetails="+orderDetails
			 +"&totalAmount="+totalAmount
			 +"&type="+type
			 +"&buyerMarked="+buyerMarked
			 +"&payType="+payType
			 +"&orgCode="+orgCode
			 +"&currencyCode="+currencyCode
			 +"&directFlag="+directFlag
			 +"&borrowingMarked="+borrowingMarked
			 +"&couponFlag="+couponFlag
			 +"&platformID="+platformID
			 +"&returnUrl="+returnUrl
			 +"&noticeUrl="+noticeUrl
			 +"&partnerID="+partnerID
			 +"&remark="+remark
			 +"&charset="+charset
			 +"&signType="+signType
			 +"&pkey=30819f300d06092a864886f70d010101050003818d003081890281810080c9cda5b5052743ea959a9d3baf78c2a9ec001d2927d0eb972c359b01230c51e3397f13b60446fa74d490586f526e47d92ee9cc3bc0c0a228ff2183fa59db4ee0e81e5edd9e1f2f4932e000666ed649f46bf952e9b5aca15acdce676823b0be601ad068b1d9e8c849a96bcfb30f709eb42c613f5e9629eac4c6e03fe440e8930203010001"

			alert(f.signMsg.value);
		}
	
	</script>
	
</body>
</html>