!function(){var e=phoenix.Games;phoenix.Games.P5.getInstance(),phoenix.GameTypes.getInstance(),phoenix.GameStatistics.getInstance(),phoenix.GameOrder.getInstance(),phoenix.GameSubmit.getInstance(),phoenix.Games.P5.Message.getInstance(),phoenix.GamePlan.getInstance();var t=function(t){var n=!0,a=!0,r=t.data,o=new phoenix.CountDown({isLoop:!1,showDom:".deadline-number",expands:{_showTime:function(e){var t=this,n=$(t.defConfig.showDom),a=t.checkNum(e.h)+"",r=t.checkNum(e.m)+"",o=t.checkNum(e.s)+"";pointerAngleH=6*(60-parseInt(a)),pointerAngleM=6*(60-parseInt(r)),pointerAngleS=6*(60-parseInt(o)),n.find(".hour-left").text(a.substring(0,1)),n.find(".hour-right").text(a.substring(1,2)),n.find(".min-left").text(r.substring(0,1)),n.find(".min-right").text(r.substring(1,2)),n.find(".sec-left").text(o.substring(0,1)),n.find(".sec-right").text(o.substring(1,2)),t.fireEvent("afterShowTime",e,t)}}});e.getCurrentGame().addEvent("afterSwitchGameMethod",function(){a?(phoenix.Games.P5.getInstance().removeFakeBallDom(),a=!1,r.historyBall&&setTimeout(function(){e.getCurrentGame().getCurrentGameMethod().refreshHistory(r)},100)):e.getCurrentGame().getCurrentGameMethod().refreshHistory()}),e.getCurrentGameTypes().addEvent("endChange",function(){n&&(phoenix.Games.P5.getInstance().removeFakeMenuDom(),e.getCurrentGameTypes().containerShow(),n=!1)}),e.getCurrentGame().addEvent("changeDynamicConfig",function(t,n){if("undefined"!=typeof n.balance&&$("#J-balance-value").html(n.balance),n.lastballs){var a=n.lastballs.split(",");$("#J-lottery-info-number").text(n.number),$("#J-lottery-info-lastnumber").text(n.lastnumber),$("#J-lottery-info-balls").find("em").each(function(e){this.innerHTML=a[e]}),e.getCurrentGame().showLotteryDescription(n.lastballsTrans),e.getCurrentGame().startGetBetBall(),o.setStartTime(new Date(n.nowtime)),o.setEndTime(new Date(n.nowstoptime)),o.continueCount()}}),e.getCurrentGame().setDynamicConfig(r),e.getCurrentGameStatistics().getBonusData(),e.getCurrentGameTypes().addEvent("endShow",function(){$.support.leadingWhitespace?e.getCurrentGameTypes().changeMode(e.getCurrentGame().getGameConfig().getInstance().getDefaultMethod()):setTimeout(function(){e.getCurrentGameTypes().changeMode(e.getCurrentGame().getGameConfig().getInstance().getDefaultMethod())},1e3)}),setTimeout(function(){$("body").append('<iframe src="'+e.getCurrentGame().getGameConfig().getInstance().getUploadPath()+'" name="check_file_frame" style="display:none;"></iframe>'),phoenix.GameTrace.getInstance(),e.getCurrentGamePlan().refreshPlanData(),e.getCurrentGamePlan().checkReleaseQueue()},0),e.getCurrentGame().addEvent("afterSuccessGetLastBall",function(t,n){var a=n.ball.split(","),r=n.period;try{e.getCurrentGame().stopGetBetBall(),e.getCurrentGame().getCurrentGameMethod().refreshHistory(n),e.getCurrentGame().showLotteryDescription(n.lastballsTrans),$("#J-lottery-info-lastnumber").text(r),$("#J-lottery-info-balls").find("em").each(function(e){this.innerHTML=a[e]})}catch(o){}}),o.addEvent("afterSuccessRedRessTime",function(t,n){n.availablebalance&&e.getCurrentGame().setBalanceValue(n.availablebalance)}),e.getCurrentGameSubmit().addEvent("afterSubmitSuccess",function(){e.getCurrentGame().getBalanceFormServer()}),e.getCurrentGamePlan().addEvent("afterSubmitPlanSuccess",function(){e.getCurrentGame().getBalanceFormServer()}),function(){var e=$("#J-submit-count"),t=$(".countdown"),n=t.find("a").width(),a=$(".main").offset().left,r=$(".main").offset().top,i=null;t.css("right",a-n),$(window).scroll(function(e){i&&(clearTimeout(i),i=null),i=setTimeout(function(){n=t.find("a").width(),a=$(".main").offset().left,r=$(".main").offset().top,$(window).scrollTop()>r?t.show():(t.hide(),t.hasClass("countdown-current")||t.addClass("countdown-current"))},30)}),t.find("a").bind("click",function(){t.hasClass("countdown-current")?t.removeClass("countdown-current"):t.addClass("countdown-current")}),o.addEvent("afterShowTime",function(n,a,r){var o=r.checkNum(a.m)+"",i=r.checkNum(a.s)+"",s=r.checkNum(a.h);e.html(s+":"+o+":"+i),t.find("strong").html(s+":"+o+":"+i)})}(),o.addEvent("afterTimeFinish",function(){var t=e.getCurrentGameMessage();e.getCurrentGame().delCurrentPeriod(e.getCurrentGame().getDynamicConfig()),e.getCurrentGame().getServerDynamicConfig(),t.show({cover:"no",mask:!0,cancelIsShow:!0,cancelFun:function(){this.hide()},time:1,content:"当前奖期结束，请注意奖期变化。"})}),new phoenix.Tab({par:".program-chase",triggers:".program-chase-title > li",panels:".program-chase-content > li",eventType:"click",currPanelClass:"current"}),$(".prompt").on("mouseenter",".example-button",function(){$(".example-tip").css({bottom:0,left:$(this).position().left+$(this).width()+5}).show()}).on("mouseleave",".example-button",function(){$(".example-tip").hide()}),function(){var e=$("#J-game-chart"),t=function(){var t="/newgame_play.shtml?curmid="+window.GamesInitData.curmid+"&flag=historyBalls&size=10";$.ajax({url:t,dataType:"html",success:function(t){e.find(".inner-content").html(t)},error:function(t,n){e.find(".inner-content").html("获取近期号码出错！出错信息:"+t.responseText)}})};$(".chart-switch").bind("click",function(){$(".control-btn").removeClass("current-control"),e.parent().hasClass("game-chart")?e.parent().removeClass():($(this).addClass("current-control"),e.parent().removeClass(),t(),e.parent().addClass("game-chart"))})}(),function(){var t=$("#J-game-plan");$(".plan-switch").bind("click",function(){e.currentGameStatistics.gameMethodName;$(".control-btn").removeClass("current-control"),t.parent().hasClass("game-plan")?t.parent().removeClass():($(this).addClass("current-control"),t.parent().removeClass(),e.getCurrentGamePlan().getPlanDataFormServer(function(e){var t=this;t.renderPlanHtml(e)}),t.parent().addClass("game-plan"))}),$("#J-game-plan").on("click",".plan-title",function(){var t=$.trim($(this).parent().attr("data-id"));e.getCurrentGamePlan().getDetailsByPlanId(t,function(n){e.getCurrentGamePlan().showTheDetalsInfo(n,t)})}),$("#J-game-plan").on("click",".plan-remove",function(){var t=$(this).parent(),n=$.trim($(this).parent().attr("data-id")),a=$.trim($(this).parents("li").find("p").text());e.getCurrentGamePlan().deletePlanById(n,a,function(e){t.remove()})})}(),$("#J-add-order").click(function(){e.getCurrentGameOrder().add(e.getCurrentGameStatistics().getResultData())}),$("#J-bet-order").click(function(){e.getCurrentGameOrder().addbet(e.getCurrentGameStatistics().getResultData(),function(){e.getCurrentGameSubmit().submitBetOrderData()})}),$("#randomone").click(function(){e.getCurrentGame().getCurrentGameMethod().randomLotterys(1)}),$("#randomfive").click(function(){e.getCurrentGame().getCurrentGameMethod().randomLotterys(5)}),$("#restdata").click(function(){e.getCurrentGameOrder().reSet().cancelSelectOrder(),e.getCurrentGame().getCurrentGameMethod().reSet()}),$("body").on("click",".remove-error",function(){e.getCurrentGame().getCurrentGameMethod().removeOrderError()}).on("click",".remove-same",function(){e.getCurrentGame().getCurrentGameMethod().removeOrderSame()}).on("click",".remove-all",function(){e.getCurrentGame().getCurrentGameMethod().removeOrderAll()}),$("#J-fresh-balance").on("click",function(){e.getCurrentGame().getBalanceFormServer()}),$("#J-header-toggle").on("click",function(){$("body").toggleClass("header-hiden"),"收起顶部"==$.trim($(this).text())?$(this).text("展开顶部"):$(this).text("收起顶部")}),$("body").on("click","#J-submit-order",function(){e.getCurrentGameSubmit().submitData()}),$("body").on("click","#J-close-fnarea",function(){$(this).parent().removeClass(),$(".control-btn").removeClass("current-control")}),$("#J-history-control").on("click",".menu-button-title a",function(){var e=$(this).parent().parent(),t=$(this)[0].className.replace(/current|\s/g,"");e.find(".menu-button-title a").removeClass("current"),$(this).addClass("current"),e.find(".inner-content").hide(),e.find("."+t+"-content").show()}),$("#J-history-control").on("click",".details-lottery",function(){$(this).next().hide().show()}),$("#J-balls-statistics-lockMultiple, .icon-unlock, .icon-lock").on("click",function(e){var t=$("#J-balls-statistics-panel"),n=$("#J-balls-statistics-lockMultiple");t.find(".icon-unlock")[0]?(n.prop("checked",!0),t.find(".icon-unlock").removeClass().addClass("icon-lock")):(n.prop("checked",!1),t.find(".icon-lock").removeClass().addClass("icon-unlock"))})};t(jsDynamicConfig)}();