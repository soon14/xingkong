var iframes=[],players=[];$(function(){jQuery(".videoDialog").dialog({autoOpen:!1,modal:!0,width:"685",height:"450"}).prev(".ui-dialog-titlebar").css("color","#93d20d","font-size","16px"),$('a[id^="opener"]').each(function(){var i=$(this).prop("id").match(/\d+/g)[0];iframes[i]=$("#dialog"+i+" iframe"),iframes[i].attr("src",function(){return $(this).data("src")}),$(this).on("click",function(){$("#dialog"+i).dialog("open")}),$(".ui-dialog-titlebar-close").eq(i).on("click",function(){iframes[i].attr("src",function(){return $(this).data("src")})})})});