!function(t,e,a,n){var o={name:"wuxing.zhixuan.danshi",editorobj:".content-text-balls",uploadButton:"#file",exampleText:"12345 33456 87898 <br />12345 33456 87898 <br />12345 33456 87898 ",tips:"五星直选单式玩法提示",exampleTip:"这是单式弹出层提示",checkFont:/[\u4E00-\u9FA5]|[\/\n]|[\/W]/g,filtration:/[\s]|[,]|[;]|[<br>]|[，]|[；]/i,checkNum:/^[0-9]*$/,normalTips:'<p style="color:#888;font-size:12px;line-height:170%;">'+["说明：",'1、请参照"标准格式样本"格式录入或上传方案。',"2、每一注号码之间的间隔符支持 回车 空格[ ] 逗号[,] 分号[;] 冒号[:] 竖线 [|]","3、文件格式必须是.txt格式。","4、文件较大时会导致上传时间较长，请耐心等待！","5、将文件拖入文本框即可快速实现文件上传功能。","6、导入文本内容后将覆盖文本框中现有的内容。"].join("<br>")+"</p>"},r=t.Games,s=t.Games.SSC,l={init:function(t){var e=this;e.ieRange="",e.vData=[],e.aData=[],e.tData=[],e.errorData=[],e.sameData=[],e.firstfocus=!0,e.ranNumTag=!1,e.isFirstAdd=!0,r.getCurrentGameStatistics().addEvent("afterStatisReset",function(t,a){var i=this,n=i.defConfig;methodName=i.getGameMethodName(),methodName!=e.defConfig.name||i.getLockMultipleDom().prop("checked")||i.multipleDom.setValue(n.multiple)}),r.getCurrentGameOrder().addEvent("beforeAdd",function(t,a){e.tData;a.type==e.defConfig.name&&(e.isFirstAdd?e.ranNumTag||(a.lotterys=[],e.isFirstAdd=null,e.updateData(),r.getCurrentGameOrder().add(r.getCurrentGameStatistics().getResultData())):(""==e.errorData.join("")&&""==e.sameData.join("")||e.ballsErrorTip(),e.checkLimitBall(a),e.isFirstAdd=!0))})},initFrame:function(){var e=this;e.win=e.container.find(e.defConfig.editorobj)[0].contentWindow,e.doc=e.win.document,e._bulidEditDom();var a=t.Tip.getInstance();e.container.find(".balls-example-danshi-tip").click(function(t){t.preventDefault();var i=$(this);a.setText(e.getExampleText()),a.show(i.outerWidth()+10,0,this)}).mouseout(function(){a.hide()})},getSubmitType:function(){return"input"},getExampleText:function(){return this.defConfig.exampleText},rebuildData:function(){this.balls=[[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1],[-1,-1,-1,-1,-1,-1,-1,-1,-1,-1]]},buildUI:function(){var t=this;t.container.html(t.getHTML())},reSelect:function(){},makeSubmitParameter:function(t,e){for(var a=e.lotterys.slice(),i=0;i<a.length;i++)a[i]=a[i].join("");return a.join("&")},batchSetBallDom:function(){},getNormalTips:function(){return this.defConfig.normalTips},showNormalTips:function(){var t=this;t.replaceText(t.getNormalTips.call(t)),t.firstfocus=!0},_bulidEditDom:function(){var t=this,e="";t.doc.designMode="On",t.doc.contentEditable=!0,t.doc.open(),e='<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />',e+="<style>*{margin:0;padding:0;font-size:14px;}</style>",e+="</head>",t.doc.writeln("<html>"+e+'<body style="word-break: break-all">'+t.getNormalTips()+"</body></html>"),t.doc.close(),t.bindPress(),document.all&&(t.doc.onkeypress=function(){return t._ieEnter()}),t.dragUpload()},dragUpload:function(){var t=this,e=$(t.doc.body);window.FileReader&&(e.bind("dragover",function(t){t.preventDefault(),t.stopPropagation()}),e.get(0).addEventListener("drop",function(e){e.preventDefault(),e.stopPropagation();var a=e.dataTransfer.files,i=a[0],n=new FileReader;"text/plain"==(i.type?i.type:"n/a")&&(n.onload=function(e){var a=e.target.result;""!=$.trim(a)&&(t.replaceText(a),t.firstfocus=!1,t.updateData())},n.readAsText(i))},!1))},_ieEnter:function(){if(13==this.win.event.keyCode)return this._saveRange(),this._insert("<br/>"),!1},_insert:function(t){var e=this;if(e.ieRange)e.ieRange.pasteHTML(t),e.ieRange.select(),e.ieRange=!1;else if(e.win.focus(),document.all)e.doc.body.innerHTML+=t;else{var a=win.getSelection(),i=a.getRangeAt(0),n=i.createContextualFragment(t);i.insertNode(n)}},_saveRange:function(){if(document.all&&!me.ieRange){var t=me.doc.selection;if(me.ieRange=t.createRange(),"Control"!=t.type){var e=me.ieRange.parentElement();"INPUT"!=e.tagName&&e!=document.body||(me.ieRange=!1)}}},getHtml:function(){var t=this;return t.doc?$(t.doc.body).html():""},getText:function(){var t=this;return t.doc?$(t.doc.body).text():""},replaceText:function(t){var e=this,t=t.replace(/\n/g,"<br>");e.doc&&t&&$(e.doc.body).html(t)},bindPress:function(){var t=this,e=t.container.find(t.defConfig.uploadButton);window.navigator.userAgent.toLowerCase();$(t.doc).bind("input",function(){t.updateData()}),$(t.doc.body).bind("keyup",function(){t.updateData()}),$(t.doc.body).bind("blur",function(){t.updateData()}),$(t.doc).bind("focus",function(){t.firstfocus&&(t.replaceText(" "),t.firstfocus=!1)}),$(t.doc).bind("blur",function(){var e=t.getText();""==$.trim(e)&&t.showNormalTips()}),$(t.doc.body).bind("focus",function(){t.firstfocus&&(t.replaceText(" "),t.firstfocus=!1)}),$(t.doc.body).bind("blur",function(){var e=t.getText();""==$.trim(e)&&t.showNormalTips()}),e.bind("change",function(){var e=$(this).parent();t.checkFile(this,e)})},iterator:function(t){for(var e=this,a=e.defConfig,i=[],n=0,o=0;o<t.length;o++)a.filtration.test(t.charAt(o))&&(i.push(t.substr(n,o-n)),n=o+1);return i},checkResult:function(t,e){for(var a=e.length-1;a>=0;a--)if(e[a].join("")==t)return!1;return!0},filterLotters:function(t){var e=this,a="";return a=t.replace(/<br>+|&nbsp;+/gi," "),a=a.replace(/[\s]|[,]+|[;]+|[，]+|[；|]+/gi," "),a=a.replace(/<(?:"[^"]*"|'[^']*'|[^>'"]*)+>/g," "),a=a.replace(e.defConfig.checkFont,"")+" "},checkSingleNum:function(t){var e=this;return e.defConfig.checkNum.test(t)&&t.length==e.balls.length},checkBallIsComplete:function(t){var e=this,a=0,i=[];if(e.isFirstAdd)for(e.aData=[],e.vData=[],e.sameData=[],e.errorData=[],e.tData=[],e.vDataBack={},e.aDataBack={},e.tDataBack={},e.sameDataBack={},e.errorDataBack={},i=e.iterator(e.filterLotters(t))||[];a<i.length;a++){var n=i[a].split(""),o=i[a];e.checkSingleNum(o)?(e.vDataBack[o]?e.sameData.push(n):e.tData.push(n),e.vDataBack[o]=n,e.vData.push(n)):(e.errorDataBack[o]?e.sameData.push(n):e.errorData.push(n),e.errorDataBack[o]=n),e.aDataBack[o]||e.aData.push(n),e.aDataBack[o]=n}return e.vData.length>0?(e.isBallsComplete=!0,e.isFirstAdd?e.vData:e.tData.length>0?e.tData:[]):(e.isBallsComplete=!1,[])},countInstances:function(t,e){var a=[],i=0;do{(i=t.indexOf(e,i))!=-1&&(a.push(i),i+=e.length)}while(i!=-1);return a},removeOrderError:function(){var t=this,e=t.vData.length>0?"":" ";if(!t.firstfocus){for(var a=0;a<t.vData.length;a++)e+=t.vData[a].join("")+"&nbsp;";if(t.errorDataTips(),""==$.trim(e))return void t.showNormalTips();t.replaceText(e),t.checkBallIsComplete(e),t.updateData()}},removeOrderSame:function(){var t=this,e=t.aData.length>0?"":" ";if(!t.firstfocus){for(var a=0;a<t.aData.length;a++)e+=t.aData[a].join("")+"&nbsp;";t.sameDataTips(),t.replaceText(e),t.checkBallIsComplete(e),t.updateData()}},removeOrderAll:function(){var t=this;t.firstfocus||(t.replaceText(" "),t.sameData=[],t.aData=[],t.tData=[],t.vData=[],r.getCurrentGameStatistics().reSet(),t.showNormalTips())},checkFile:function(t,e){var a=t.value,i=a.substring(a.lastIndexOf("."),a.length),i=i.toLowerCase();if(".txt"!=i)return alert("对不起，导入数据格式必须是.txt格式文件哦，请您调整格式后重新上传，谢谢 ！"),!1;e[0].submit()},getFile:function(t){var e=this,a=e.container.find(e.defConfig.uploadButton);t&&(e.replaceText(t),e.firstfocus=!1,e.updateData(),a.blur().val(""))},errorTip:function(t,e){var a=this;alert(a.errorData.join())},sameDataTips:function(){var t=this,e=t.sameData,a="",i=r.getCurrentGameMessage(),n=[];if(""!=e.join("")){for(var o=0;o<e.length;o++)$.trim(e[o].join(""))&&n.push(e[o].join(""));a='<h4 class="pop-text" style="display:block;font-weight:bold">以下号码重复，已进行自动过滤</h4><p class="pop-text" style="display:block">'+n.join(", ")+"</p>",i.show({mask:!0,content:['<div class="bd text-center">','<div class="pop-waring">','<i class="ico-waring <#=icon-class#>"></i>','<div style="display:inline-block;*zoom:1;*display:inline;vertical-align:middle">'+a+"</div>","</div>","</div>"].join(""),closeIsShow:!0,closeFun:function(){this.hide()}})}},errorDataTips:function(){var t=this,e=t.errorData,a="",i=r.getCurrentGameMessage(),n=[];if(""!=e.join("")){for(var o=0;o<e.length;o++)$.trim(e[o].join(""))&&n.push(e[o].join(""));a='<h4 class="pop-text" style="display:block;font-weight:bold">以下号码错误，已进行自动过滤</h4><p class="pop-text" style="display:block">'+n.join(", ")+"</p>",i.show({mask:!0,content:['<div class="bd text-center">','<div class="pop-waring">','<i class="ico-waring <#=icon-class#>"></i>','<div style="display:inline-block;*zoom:1;*display:inline;vertical-align:middle">'+a+"</div>","</div>","</div>"].join(""),closeIsShow:!0,closeFun:function(){this.hide()}})}},ballsErrorTip:function(t,e){var a=this,i=a.errorData,n=a.sameData,o="",s="",l=r.getCurrentGameMessage(),c=[],u=[];if(""!=n.join("")){for(var d=0;d<n.length;d++)$.trim(n[d].join(""))&&u.push(n[d].join(""));s='<h4 class="pop-text" style="display:block;font-weight:bold">以下号码重复，已进行自动过滤</h4><p class="pop-text" style="display:block">'+u.join(", ")+"</p>"}if(""!=i.join("")){for(var d=0;d<i.length;d++)$.trim(i[d].join(""))&&c.push(i[d].join(""));o='<h4 class="pop-text" style="display:block;font-weight:bold">以下号码错误，已进行自动过滤</h4><p class="pop-text" style="display:block">'+c.join(", ")+"</p>"}l.show({mask:!0,content:['<div class="bd text-center">','<div class="pop-waring">','<i class="ico-waring <#=icon-class#>"></i>','<div style="display:inline-block;*zoom:1;*display:inline;vertical-align:middle">'+s+o+"</div>","</div>","</div>"].join(""),closeIsShow:!0,closeFun:function(){this.hide()}})},reSet:function(){var t=this;t.isBallsComplete=!1,t.rebuildData(),t.updateData(),t.ranNumTag||t.showNormalTips(),t.removeRanNumTag()},makePostParameter:function(t,e){for(var a=[],t=e.lotterys,i=0;i<t.length;i++)a.push(t[i].join(""));return a.join(" ")},getLottery:function(){var t=this,e=t.getHtml();if(""!=e)return t.checkBallIsComplete(e)},removeSameNum:function(t){var e,a=0,i=this,n=this.getBallData()[0].length;for(len=t.length,e=Math.floor(Math.random()*n);a<t.length;a++)if(e==t[a])return arguments.callee.call(i,t);return e},emptySameData:function(){this.sameData=[]},emptyErrorData:function(){this.errorData=[]},addRanNumTag:function(){var t=this;t.ranNumTag=!0,t.emptySameData(),t.emptyErrorData()},getTdata:function(){return this.tData},getOriginal:function(){var t=this,e=t.getBallData(),a=e.length,n=e[0].length;for(i=0,j=0,row=[],tData=t.getTdata(),data=t.getHtml(),result=[];i<a;i++){for(row=[],j=0;j<n;j++)e[i][j]>0&&row.push(j);result.push(row)}return tData.length>0&&(result[0][0]=t.getTdata().join(",")),result},removeRanNumTag:function(){this.ranNumTag=!1},checkRandomBets:function(t,e){var a=this,i=void 0===t,t=t||{},n=[],e=e||0,o=(a.getBallData().length,a.getBallData()[0].length,r.getCurrentGameOrder().getTotal().orders);if(n=a.createRandomNum(),Number(e)>Number(a.getRandomBetsNum()))return n;if(i)for(var s=0;s<o.length;s++)if(o[s].type==a.defConfig.name){var l=o[s].original.join("").replace(/,/g,"");t[l]=l}return t[n.join("")]?(e++,arguments.callee.call(a,t,e)):n},randomNum:function(){var t=this,e=[],a=null,i=(t.getBallData(),t.defConfig.name,[]),n=[];return t.addRanNumTag(),e=t.checkRandomBets(),n=e,i=t.combination(n),a={type:r.getCurrentGame().getCurrentGameMethod().getGameMethodName(),original:n,lotterys:i,moneyUnit:r.getCurrentGameStatistics().getMoneyUnit(),multiple:r.getCurrentGameStatistics().getMultip(),onePrice:r.getCurrentGameStatistics().getOnePrice(),num:i.length},a.amount=Number(a.num*a.moneyUnit*a.multiple*a.onePrice),a.amountText=r.getCurrentGameStatistics().formatMoney(a.num*a.moneyUnit*a.multiple*a.onePrice),a},getHTML:function(){var t=[];return t.push('<div class="balls-import clearfix">'),t.push('<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="'+r.getCurrentGame().getGameConfig().getInstance().getUploadPath()+'" target="check_file_frame" style="position:relative;padding-bottom:10px;">'),t.push('<input name="file" type="file" id="file" size="40" hidefocus="true" value="上传附件" style="outline:none;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);filter:alpha(opacity=0);opacity: 0;position:absolute;top:0px; left:0px; width:107px; height:30px;z-index:1;background:#000" />'),t.push('<input type="button" class="balls-import-input" value="上传附件" onclick=document.getElementById("form1").file.click()><a class="balls-example-danshi-tip" href="#">查看标准格式样本</a>'),t.push('<input type="reset" style="outline:none;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);filter:alpha(opacity=0);opacity: 0;width:0px; height:0px;z-index:1;background:#000" />'),t.push("</form>"),t.push('<div class="panel-select" ><iframe style="width:100%;height:100%;border:0 none;background-color:#F9F9F9;" class="content-text-balls"></iframe></div>'),t.push('<div class="panel-btn">'),t.push('<a class="remove-error" id="" href="javascript:void(0);"><i></i>删除错误项</a>'),t.push('<a class="remove-same" id="" href="javascript:void(0);"><i></i>删除重复项</a>'),t.push('<a class="remove-all" id="" href="javascript:void(0);"><i></i>清空文本框</a>'),t.push("</div>"),t.push("</div>"),t.join("")},getLockMultipleDom:function(){return $("#J-balls-statistics-lockMultiple")}},c=t.Class(l,a);c.defConfig=o,s.Danshi=c}(phoenix,0,phoenix.GameMethod);