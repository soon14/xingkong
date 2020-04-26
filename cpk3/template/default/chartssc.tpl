
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><!--{$game['fullname']}-->游戏走势图</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">


    <meta name="renderer" content="webkit" title="360浏览器强制开启急速模式-webkit内核" />

    <link rel="shortcut icon" href="<!--{$con_system['ico']}-->" type="image/x-icon" />
    <meta name="description" content="<!--{$config.description}-->" />
    <meta name="keywords" content="<!--{$config.keywords}-->" />
    <style>
        html, body, h1, h2, h3, h4, h5, h6, div, dl, dt, dd, ul, ol, li, p, blockquote, pre, hr, figure, table, caption, th, td, form, fieldset, legend, input, button, textarea, menu
        {
            margin: 0;
            padding: 0;
        }
        html
        {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        a
        {
            color: #333;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }
        a:active, a:hover, :focus
        {
            outline: 0;
        }
        b, strong
        {
            font-weight: bold;
        }
        i, em
        {
            font-style: normal;
        }
        h1, h2, h3, h4, h5, h6
        {
            font-size: 100%;
        }
        img
        {
            border: 0 none;
            vertical-align: middle;
        }
        body, input, button, select, textarea
        {
            font: 12px/1.5 "Microsoft YaHei" ,Arial,\5b8b\4f53,sans-serif;
            color: #333;
        }

        .query-form
        {
            margin: 10px;
        }
        .query-form .lab, .query-form .ipt, .query-form select, .query-form .to, .query-form .btn, .query-form .query-date
        {
            float: left;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .query-form .ipt, .query-form select
        {
            border: 1px solid #e7eaeb;
        }
        .query-form .ipt
        {
            width: 100px;
            height: 24px;
            padding: 2px 9px;
        }
        .query-form .lab, .query-form .to
        {
            height: 30px;
            line-height: 30px;
            overflow: hidden;
        }
        .query-form .query-date
        {
            position: relative;
        }
        .query-form .query-date .ipt
        {
            margin-right: 0;
            margin-bottom: 0;
        }
        .query-form .query-date .icon-date
        {
            position: absolute;
            z-index: 9;
            top: 50%;
            right: 7px;
            width: 16px;
            height: 16px;
            margin-top: -8px;
            background-image: url(/chart/img/icon_query_date.png);
        }
        .query-form select
        {
            width: 100px;
            height: 30px;
            padding-left: 5px;
        }
        .query-form .btn-query
        {
            width: 60px;
            height: 30px;
            margin-right: 5px;
            border-radius: 3px;
            color: #fff;
            background-color: #fba026;
        }
        .query-form .btn-query2
        {
            width: 60px;
            height: 30px;
            line-height: 30px;
            margin: auto 5px auto 0px;
            border-radius: 3px;
            color: #fff;
            background-color: #fba026;
        }
        .query-form .time-range
        {
            float: left;
        }
        .query-form .time-range li
        {
            float: left;
            width: 88px;
            height: 28px;
            line-height: 28px;
            margin-right: 10px;
            border: 1px solid #e7eaeb;
            text-align: center;
            color: #999;
            cursor: pointer;
        }
        .query-form .time-range .selected
        {
            color: #fff;
            border-color: #fba026;
            background-color: #fba026;
        }

        .query-table
        {
            width: 100%;
            max-width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            text-align: center;
        }
        .query-table tr
        {
            height: 35px;
        }
        .query-table thead tr
        {
            color: #fff;
            background-color: #3b3c46;
        }
        .query-table th, .query-table td
        {
            width: 20px;
            padding: 3px;
            border: 1px solid #ddd;
        }
        .query-table .btn
        {
            width: 38px;
            height: 24px;
            line-height: 24px;
            margin: 0 5px;
            border: 1px solid #e7eaeb;
            border-radius: 2px;
            background-color: #fff;
        }
        .ball01
        {
            color: #FFF;
            font-size: 10px;
            background: url(/static/chart/ball.png);
            width: 20px;
            height: 20px;
            line-height: 20px;
        }
    </style>
</head>
<body>
<div class="query-area">
    <div class="query-form">
        <form action="" method="post">
            <div class="input-group" style="height: 30px;line-height:30px;">
                <select name="key" id="lotteryid"   onchange="location.href='index_chart.html?playkey='+this.value">


                    <!--{foreach from=$game_list key=key item=item}-->
                    <!--{if $item['skey']!='kl8'}-->
                    <option value='<!--{$item['ckey']}-->'  <!--{if $smarty.get.playkey eq  $item['ckey']}-->selected<!--{/if}-->><!--{$item['fullname']}--></option>
                    <!--{/if}-->
                    <!--{/foreach}-->

                </select>

                <input type="checkbox" name="checkbox2" value="checkbox" id="has_line">显示折线
                <input type="checkbox" name="checkbox" value="checkbox" id="no_miss" checked="checked">显示遗漏
                <a href="index_chart.html?playkey=<!--{$smarty.get.playkey}-->&top=50"  <!--{if $top==50}--> style="color: #f00"<!--{/if}-->>最近50期</a>
                <a href="index_chart.html?playkey=<!--{$smarty.get.playkey}-->&top=100" <!--{if $top==100}--> style="color: #f00"<!--{/if}-->>最近100期</a>
                <a href="index_chart.html?playkey=<!--{$smarty.get.playkey}-->&top=200" <!--{if $top==200}--> style="color: #f00"<!--{/if}-->>最近200期</a>


                &nbsp; &nbsp; <a href="game_<!--{$game['id']}-->.html" target="_blank" style="color: #625be6">去投注 &gt;&gt;</a>
            </div>
        </form>
    </div>
    <div class="query-result" style="width: 100%">
        <table id="chartsTable" width="100%" border="0" cellpadding="0" cellspacing="1" class="query-table">
            <thead id="LotteryHeadLines">
            </thead>
            <tbody id="LotteryLines">
            </tbody>
        </table>
    </div>
</div>
</body>
<script type="text/javascript" src="<!--{$file_uri}-->/static/js/jquery-1.9.1.js"></script>
<script src="<!--{$file_uri}-->/static/chart/line.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        ajaxList('<!--{$smarty.get.playkey}-->', <!--{$top}-->);

    });

    function ajaxList(lotteryId, top) {
        var nols = $("div[class^='ball1']");
        $.each(nols, function (i, n) {
            n.style.display = 'none';
        });
        $("#LotteryHeadLines").html("");
        $("#LotteryLines").html("");
        url = "index_chart.html?type=list&playkey=" + lotteryId + "&top=" + top;
        $.ajax(url, {
            data: "",
            dataType: 'json',
            crossDomain: true,
            success: function (d) {
                var LotteryHeadLines = "";
                var LotteryLines = "";
                var min = 0;
                var max = 9;
                var count = 10;
                var ballNum = 5;
                var strheader = "<tr>";
                strheader += "<td rowspan=\"2\" style=\"width:100px;\">期号</td>";
                strheader += "<td rowspan=\"2\" style=\"width:100px;\">开奖号码</td>";
                if (lotteryId.indexOf('SSC')>-1 || lotteryId.indexOf('FC')>-1) {
                    min = 0;
                    max = 9;
                    count = 10;
                    ballNum = 5;

                    var strheader = "<tr>";
                    strheader += "<td rowspan=\"2\" style=\"width:100px;\">期号</td>";
                    strheader += "<td rowspan=\"2\" style=\"width:100px;\">开奖号码</td>";
                    strheader += "<td colspan=\"" + count + "\">万位</td>";
                    strheader += "<td colspan=\"" + count + "\">千位</td>";
                    strheader += "<td colspan=\"" + count + "\">百位</td>";
                    strheader += "<td colspan=\"" + count + "\">十位</td>";
                    strheader += "<td colspan=\"" + count + "\">个位</td>";
                    strheader += "</tr>";
                    strheader += "<tr>";
                    for (var j = 0; j < ballNum; j++) {
                        for (var k = min; k <= max; k++) {
                            strheader += "<td>" + k + "</td>";
                        }
                    }
                    strheader += "</tr>";
                    LotteryHeadLines = strheader;
                    $("#LotteryHeadLines").html(LotteryHeadLines);
                }
                if (lotteryId.indexOf('11-5')>-1) {
                    min = 1;
                    max = 11;
                    count = 11;
                    ballNum = 5;
                    var strheader = "<tr>";
                    strheader += "<td rowspan=\"2\" style=\"width:100px;\">期号</td>";
                    strheader += "<td rowspan=\"2\" style=\"width:100px;\">开奖号码</td>";
                    strheader += "<td colspan=\"" + count + "\">一位</td>";
                    strheader += "<td colspan=\"" + count + "\">二位</td>";
                    strheader += "<td colspan=\"" + count + "\">三位</td>";
                    strheader += "<td colspan=\"" + count + "\">四位</td>";
                    strheader += "<td colspan=\"" + count + "\">五位</td>";
                    strheader += "</tr>";
                    strheader += "<tr>";
                    for (var j = 0; j < ballNum; j++) {
                        for (var k = min; k <= max; k++) {
                            strheader += "<td>" + k + "</td>";
                        }
                    }
                    strheader += "</tr>";
                    LotteryHeadLines = strheader;
                    $("#LotteryHeadLines").html(LotteryHeadLines);
                }
                if (lotteryId.indexOf('K3')>-1) {
                    min = 0;
                    max = 9;
                    count = 10;
                    ballNum = 3;
                    var strheader = "<tr>";
                    strheader += "<td rowspan=\"2\" style=\"width:100px;\">期号</td>";
                    strheader += "<td rowspan=\"2\" style=\"width:100px;\">开奖号码</td>";
                    strheader += "<td colspan=\"" + count + "\">百位</td>";
                    strheader += "<td colspan=\"" + count + "\">十位</td>";
                    strheader += "<td colspan=\"" + count + "\">个位</td>";
                    strheader += "</tr>";
                    strheader += "<tr>";
                    for (var j = 0; j < ballNum; j++) {
                        for (var k = min; k <= max; k++) {
                            strheader += "<td>" + k + "</td>";
                        }
                    }
                    strheader += "</tr>";
                    LotteryHeadLines = strheader;
                    $("#LotteryHeadLines").html(LotteryHeadLines);
                }
                if (lotteryId.indexOf('PK10')>-1) {
                    min = 1;
                    max = 10;
                    count = 10;
                    ballNum = 10;
                    var strheader = "<tr>";
                    strheader += "<td rowspan=\"2\" style=\"width:100px;\">期号</td>";
                    strheader += "<td rowspan=\"2\" style=\"width:100px;\">开奖号码</td>";
                    strheader += "<td colspan=\"" + count + "\">冠军</td>";
                    strheader += "<td colspan=\"" + count + "\">亚军</td>";
                    strheader += "<td colspan=\"" + count + "\">季军</td>";
                    strheader += "<td colspan=\"" + count + "\">四位</td>";
                    strheader += "<td colspan=\"" + count + "\">五位</td>";
                    strheader += "<td colspan=\"" + count + "\">六位</td>";
                    strheader += "<td colspan=\"" + count + "\">七位</td>";
                    strheader += "<td colspan=\"" + count + "\">八位</td>";
                    strheader += "<td colspan=\"" + count + "\">九位</td>";
                    strheader += "<td colspan=\"" + count + "\">十位</td>";
                    strheader += "</tr>";
                    strheader += "<tr>";
                    for (var j = 0; j < ballNum; j++) {
                        for (var k = min; k <= max; k++) {
                            strheader += "<td>" + k + "</td>";
                        }
                    }
                    strheader += "</tr>";
                    LotteryHeadLines = strheader;
                    $("#LotteryHeadLines").html(LotteryHeadLines);
                }

                var countArray = new Array();
                var MaxNum = new Array();
                var MaxNumArray = new Array();
                var MaxLostNum = new Array();
                var strArray = new Array();
                var numArray = new Array();
                for (var i = 0; i < ballNum; i++) {
                    countArray[i] = new Array();
                    MaxNum[i] = new Array();
                    MaxNumArray[i] = new Array();
                    MaxLostNum[i] = new Array();
                    strArray[i] = new Array();
                    numArray[i] = new Array();
                    for (var j = min; j <= max; j++) {
                        countArray[i][j] = 0;
                        MaxNum[i][j] = 0;
                        MaxNumArray[i][j] = 0;
                        MaxLostNum[i][j] = 0;
                        strArray[i][j] = 0;
                        numArray[i][j] = 0;
                    }
                }
                if (d.table.length>0)
                    $("#name").html(d.table[0].name);

                for (var i = 0; i < d.table.length; i++) {
                    var dt = d.table[i];
                    var num0;
                    var str = dt.title;
                    var str2 = dt.number;
                    var strArray2 = str2.split(',');

                    var str3 = "<tr>";
                    str3 += "<td class=\"issue\">";
                    str3 += str;
                    str3 += "</td>";
                    str3 += "<td align=\"center\" class=\"tdwth\">";
                    str3 += str2;
                    str3 += "</td>";

                    for (var j = 0; j < strArray2.length; j++) {
                        num0 = min;
                        while (num0 <= max) {
                            if (num0 == parseInt(strArray2[j])) {
                                countArray[j][num0]++;
                                numArray[j][num0] = -1;
                                MaxNumArray[j][num0]++;
                                if (MaxNum[j][num0] < MaxNumArray[j][num0])
                                    MaxNum[j][num0] = MaxNumArray[j][num0];
                            }
                            else {
                                MaxNumArray[j][num0] = 0;
                                numArray[j][num0]++;
                                if (MaxLostNum[j][num0] < numArray[j][num0])
                                    MaxLostNum[j][num0] = numArray[j][num0];
                            }
                            if (num0 == parseInt(strArray2[j])) {
                                str3 += "<td class=\"charball td0\"><div class=\"ball01\">" + strArray2[j] + "</div></td>";
                                numArray[j][num0]++;
                            }
                            else {
                                str3 += "<td class=\"wdh td0\"><div class=\"ball14\">" + numArray[j][num0] + "</div></td>";

                            }
                            num0++;
                        }
                    }
                    str3 += "</tr>";
                    LotteryLines += str3;

                }

                var str4 = "<tr>";
                str4 += "<td colspan=\"2\">";
                str4 += "当前最大连开";
                str4 += "</td>";

                for (var j = 0; j < ballNum; j++) {
                    var num0 = min;
                    while (num0 <= max) {
                        str4 += "<td class=\"wdh td0\"><div class=\"ball14\">" + MaxNum[j][num0] + "</div></td>";
                        num0++;
                    }
                }
                str4 += "</tr>";


                var str5 = "<tr>";
                str5 += "<td colspan=\"2\">";
                str5 += "当前最大遗漏";
                str5 += "</td>";

                for (var j = 0; j < ballNum; j++) {
                    var num0 = min;
                    while (num0 <= max) {
                        str5 += "<td class=\"wdh td0\"><div class=\"ball14\">" + MaxLostNum[j][num0] + "</div></td>";
                        num0++;
                    }
                }
                str5 += "</tr>";

                var str6 = "<tr>";
                str6 += "<td colspan=\"2\">";
                str6 += "当前出现次数";
                str6 += "</td>";

                for (var j = 0; j < ballNum; j++) {
                    var num0 = min;
                    while (num0 <= max) {
                        str6 += "<td class=\"wdh td0\"><div class=\"ball14\">" + countArray[j][num0] + "</div></td>";
                        num0++;
                    }
                }
                str6 += "</tr>";

                LotteryLines += str6 + str4 + str5;

                $("#LotteryLines").html(LotteryLines);


                if ($("#chartsTable").width() > $('body').width()) {
                    $('body').width(($("#chartsTable").width() + 30) + "px");
                    $('.history_code').css("width", $("#chartsTable").width() + "px");
                }
                Chart.init();
                DrawLine.bind("chartsTable", "has_line");

                DrawLine.color('#FF0000');
                DrawLine.add((parseInt(0) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#00B22D');
                DrawLine.add((parseInt(1) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#FF0000');
                DrawLine.add((parseInt(2) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#00B22D');
                DrawLine.add((parseInt(3) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#FF0000');
                DrawLine.add((parseInt(4) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#00B22D');
                DrawLine.add((parseInt(5) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#FF0000');
                DrawLine.add((parseInt(6) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#00B22D');
                DrawLine.add((parseInt(7) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#FF0000');
                DrawLine.add((parseInt(8) * count + 1 + 1), 2, count, 0);
                DrawLine.color('#00B22D');
                DrawLine.add((parseInt(9) * count + 1 + 1), 2, count, 0);
                DrawLine.draw(Chart.ini.default_has_line);
                resize();

                var show = false;
                var nols = $("div[class^='ball1']");
                $("#no_miss").click(function () {
                    show = !show;
                    $.each(nols, function (i, n) {
                        if (show == true) {
                            n.style.display = 'none';
                        } else {
                            n.style.display = 'block';
                        }
                    });
                });

                $("tr").live({
                    mouseover: function () {
                        $(this).css("background-color", "#eeeeee");
                    },
                    mouseout: function () {
                        $(this).css("background-color", "#ffffff");
                    }
                })
            }
        });
    }

    function resize() {
        window.onresize = func;
        function func() {
            window.location.href = window.location.href;
        }
    }

    function GetQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null)
            return unescape(r[2]);
        return null;
    }
</script>
</html>
