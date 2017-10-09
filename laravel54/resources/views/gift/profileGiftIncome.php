<!doctype html>
//主播收入
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
    <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
    <title>直播个人中心</title>
    <link rel="stylesheet" href="http://assets.dwstatic.com/project/yytv/center/2.9.2/css/admin.css">
    <style type="text/css">
        .main-col{*padding-bottom: 140px;}
    </style>
    <script type="text/javascript" src="http://i.huya.com/base/js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="http://i.huya.com/main/statics/js/WdatePicker.js"></script>
    <style type="text/css">
        .mod-tab .mod-tab-trigger a{
            padding: 0 10px 10px 10px;
        }
        #page span{padding: 0 0 0 20px;font-size: 14px;}
    </style>
</head>
<body>


<script src="//a.msstatic.com/huya/common/header.js"></script>
<div style="height:50px;"></div>
<div class="admin-wrap">
    <style type="text/css">
        .nav-scroll-wrap .nav-section .icon-recommendtag{
            background-image: url(../main/statics/img/icon-recommendtag.png);
        }
        .nav-scroll-wrap .nav-section .icon-room{
            background-image: url(../main/statics/img/room_man_icon.png);
        }
        /*CDK兑换*/
        .nav-scroll-wrap .nav-section .icon-CDKey_change {
            background-image: url(../main/statics/img/icon_CDKey.png);
        }
        /*中奖查询*/
        .nav-scroll-wrap .nav-section .icon-maw {
            background-image: url(../main/statics/img/icon_my_awards.png);
        }
        /*虎牙认证*/
        .nav-scroll-wrap .nav-section .icon-auth{background-image: url('../main/statics/img/auth_icon.png');}
        /*广告推广*/
        .nav-scroll-wrap .nav-section .icon-ad{
            background-image: url('../main/statics/img/icon-ad.png');
        }
        /*我的粉丝*/
        .nav-scroll-wrap .nav-section .icon-fans{
            background-image: url('../main/statics/img/icon-fans.png');
        }
        /*艺人签约*/
        .nav-scroll-wrap .nav-section .icon-artist-sign{
            background-image: url('../main/statics/img/icon-artist-sign.png');
        }
        /*我的消息*/
        .nav-scroll-wrap .nav-section li .msg_new{
            right: 63px;
            top: 16px;
            width: 8px;
            height: 8px;
        }
        /*等级成长*/
        .nav-scroll-wrap .nav-section .icon-userlevel{
            background-image: url('../main/statics/img/icon-uesr-level.png');
        }
        /*违规查询*/
        .nav-scroll-wrap .nav-section .icon-violation{
            background-image: url('../main/statics/img/icon-violation.png');
        }
    </style>
    <script>
        var currentMenu = 'profileIncome',
            indexUrl = "http://i.huya.com/",
            indexFile = "index.php";
    </script>
    <script type="text/javascript" src="//a.msstatic.com/huya/icenter/2.45/js/main_menu.js"></script>
    <script type="text/javascript" src="//a.msstatic.com/huya/icenter/1.0/js/cookies.js"></script>
    <div class="admin-menu">
        <div class="content">
            <div class="nav-scroll-wrap">
                <div class="scroll-content">
                    <div class="nav-section" style="padding-bottom:0">
                        <h3 class="header">&nbsp;个人中心</h3>
                        <ul class="icon-filter">
                            <li>
                                <a menu="home" href="http://i.huya.com/" class="selected">
                                    <span class="icon icon-home"></span>
                                    <span class="title">
                                    我的信息
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="userlevel" href="http://i.huya.com/index.php?m=UserLevel">
                                    <span class="icon icon-userlevel"></span>
                                    <span class="title">
                                    等级成长
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="subscribe" href="http://i.huya.com/index.php?m=Subscribe">
                                    <span class="icon icon-subscribe"></span>
                                    <span class="title">
                                    订阅与历史
                                </span>
                                </a>
                            </li>
                            <li id="msg-li">
                                <a menu="msg" href="http://i.huya.com/index.php?m=Msg&amp;do=listMsg">
                                    <span class="icon icon-msg"></span>
                                    <span class="title">
                                    我的消息
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="noble" href="http://i.huya.com/index.php?m=NobleSys">
                                    <span class="icon icon-noble"></span>
                                    <span class="title">
                                    我的贵族
                                </span>
                                </a>
                            </li>
                            <!-- <li>
                                    <a menu="myRoom" href="http://i.huya.com/index.php?m=MyRoomAuditor">
                                        <span class="icon icon-room"></span>
                                        <span class="title">
                                            房间管理
                                        </span>
                                    </a>
                                </li> -->
                            <li>
                                <a menu="myRoom" href="http://i.huya.com/index.php?m=MyRoomAuditor">
                                    <span class="icon icon-room"></span>
                                    <span class="title">
                                    我的头衔
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="money" href="http://i.huya.com/index.php?m=MyAccount&amp;do=myAccount">
                                    <span class="icon icon-money"></span>
                                    <span class="title">
                                    我的财产
                                </span>
                                </a>
                            </li>
                            <!-- <li>
                                <a menu="guess" href="http://i.huya.com/index.php?m=Guess">
                                    <span class="icon icon-guess"></span>
                                    <span class="title">
                                        我的竞猜
                                    </span>
                                </a>
                            </li> -->
                            <!-- <li>
                                <a menu="texas" href="http://i.huya.com/index.php?m=Texas">
                                    <span class="icon icon-teaxs"></span>
                                    <span class="title">
                                        开心德州
                                    </span>
                                </a>
                            </li> -->
                            <!--
                            <li>
                                <a menu="guard" href="http://i.huya.com/index.php?m=Guard&do=guardInfo">
                                    <span class="icon icon-protect"></span>
                                    <span class="title">
                                        主播守护
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a menu="badge"  href="http://i.huya.com/index.php?m=Badge">
                                    <span class="icon icon-badge"></span>
                                     <span class="title">
                                         我的徽章
                                     </span>
                                </a>
                            </li>
                            -->
                            <!--
                            <li>
                                <a menu="basesetting" href="http://i.huya.com/index.php?m=PopOptions&do=userOption">
                                    <span class="icon icon-base"></span>
                                    <span class="title">
                                        基础设置
                                    </span>
                                </a>
                            </li>
                            -->
                            <!-- <li id="mygift-li">
                                <a menu="mygift" href="http://i.huya.com/index.php?m=MyGift&do=listMyGift">
                                    <span class="icon icon-welfare"></span>
                                    <span class="title">
                                        我的福利
                                    </span>
                                </a>
                            </li> -->
                            <!-- <li id="maw-li">
                                <a menu="maw" href="http://i.huya.com/index.php?m=Maw">
                                    <span class="icon icon-maw"></span>
                                    <span class="title">
                                        中奖查询
                                    </span>
                                </a>
                            </li> -->
                            <!-- <li id="interaction_game-li">
                                <a menu="interaction_game" href="http://i.huya.com/index.php?m=MonkeyTrick">
                                    <span class="icon icon-interaction"></span>
                                    <span class="title">
                                        互动游戏
                                    </span>
                                </a>
                            </li> -->
                            <!-- <li id="mygift-li">
                                <a menu="userlevel" href="http://i.huya.com/index.php?m=UserLevel">
                                    <span class="icon icon-power"></span>
                                    <span class="title">
                                        等级特权
                                    </span>
                                </a>
                            </li> -->
                            <li id="CDKey_change-li">
                                <a menu="cdkey" href="http://i.huya.com/index.php?m=CdKey">
                                    <span class="icon icon-CDKey_change"></span>
                                    <span class="title">
                                    CDKey兑换
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="auth" href="http://i.huya.com/index.php?m=ProfileAuth">
                                    <span class="icon icon-auth"></span>
                                    <span class="title">
                                    虎牙认证
                                </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-section" style="padding-bottom:0">
                        <h3 class="header">&nbsp;我是主播</h3>
                        <ul class="anchor-info">
                            <li>
                                <a menu="profiler" href="<?=url('index/ProfileInfo')?>">
                                    <span class="icon icon-anchor"></span>
                                    <span class="title">
                                    主播信息
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="profileFreezeAppeal" href="<?=url('index/ProfileFreezeAppeal')?>">
                                    <span class="icon icon-violation"></span>
                                    <span class="title">
                                    违规查询
                                </span>
                                </a>
                            </li>
                            <li id="sign_li" style="display:none;">
                                <a menu="reservation" href="http://i.huya.com/index.php?m=ProfileReservation">
                                    <span class="icon icon-sign-booking"></span>
                                    <span class="title">
                                    官方签约
                                </span>
                                </a>
                                <i class="new">new</i></li>
                            <li>
                                <a menu="profileIncome" href="<?=url('index/MyAccount')?>">
                                    <span class="icon icon-income"></span>
                                    <span class="title">
                                    主播收入
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="profilefans" href="<?=url('index/ProfileFans')?>">
                                    <span class="icon icon-fans"></span>
                                    <span class="title">
                                    我的粉丝
                                </span>
                                </a>
                            </li>
                            <!--                            <li>-->
                            <!--                                <a menu="profileRoom" href="http://i.huya.com/index.php?m=ProfileRoomAuditor">-->
                            <!--                                    <span class="icon icon-room"></span>-->
                            <!--                                    <span class="title">-->
                            <!--                                    我的房管-->
                            <!--                                </span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->

                            <!-- <li>
                                <a menu="profileRecommendTag" href="http://i.huya.com/index.php?m=ProfileRecommendTag">
                                    <span class="icon icon-recommendtag"></span>
                                    <span class="title">
                                        推荐标签
                                    </span>
                                </a>
                            </li> -->
                            <!--                            <li style="display:none;">-->
                            <!--                                <a menu="myvideo" href="http://i.huya.com/index.php?m=MyVideo" class="hiido_stat" hiido_code="10004005">-->
                            <!--                                    <span class="icon icon-admin-shot"></span>-->
                            <!--                                    <span class="title">-->
                            <!--                                    我的精彩镜头-->
                            <!--                                </span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->
                            <!--                            <li>-->
                            <!--                                <a menu="adminsetting" href="http://i.huya.com/index.php?m=ProfileSetting">-->
                            <!--                                    <span class="icon icon-admin-setting"></span>-->
                            <!--                                    <span class="title">-->
                            <!--                                    主播设置-->
                            <!--                                </span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->
                            <!--                            <li>-->
                            <!--                                <a menu="sign" href="http://i.huya.com/index.php?m=ProfileSign">-->
                            <!--                                    <span class="icon icon-sign"></span>-->
                            <!--                                    <span class="title">-->
                            <!--                                    公会签约-->
                            <!--                                </span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->
                            <!--                            <li>-->
                            <!--                                <a menu="match" href="http://i.huya.com/index.php?m=Match">-->
                            <!--                                    <span class="icon icon-match"></span>-->
                            <!--                                    <span class="title">-->
                            <!--                                    赛事中心-->
                            <!--                                </span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->
                            <!--  <li>
                                 <a menu="ad" href="http://i.huya.com/index.php?m=Ad&do=adList">
                                     <span class="icon icon-ad"></span>
                                     <span class="title">
                                         广告推广
                                     </span>
                                 </a>
                             </li> -->

                            <!--
                                                    <li>
                                <a menu="booking" href="http://i.huya.com/index.php?m=ProfileBooking">
                                    <span class="icon icon-booking"></span>
                                    <span class="title">
                                        盒子预约
                                    </span>
                                </a>
                            </li>
                                                    -->
                        </ul>
                    </div>
                    <div class="nav-section nav-ow">
                        <h3 class="header">&nbsp;我是OW</h3>
                        <ul class="ow">
                            <li>
                                <a menu="channel" href="http://i.huya.com/index.php?m=Ow">
                                    <span class="icon icon-channel"></span>
                                    <span class="title">
                                    公会概况
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="channelIncome" href="http://i.huya.com/index.php?m=MyAccount&amp;do=channelDetail&amp;from=channelIncome">
                                    <span class="icon icon-income"></span>
                                    <span class="title">
                                    公会收入
                                </span>
                                </a>
                            </li>
                            <li>
                                <a id="verify-li" menu="channelProfile" href="http://i.huya.com/index.php?m=Ow&amp;do=profileList&amp;anchorType=1">
                                    <span class="icon icon-profile-list"></span>
                                    <span class="title">
                                    主播管理
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="recruitProfile" href="http://i.huya.com/index.php?m=RecruitProfileInfo">
                                    <span class="icon icon-recruit"></span>
                                    <span class="title">
                                    主播招募平台
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="apply" href="http://i.huya.com/index.php?m=PlatinumUnion">
                                    <span class="icon icon-apply"></span>
                                    <span class="title">
                                    白金公会
                                </span>
                                </a>
                            </li>
                            <li>
                                <a menu="channel_setting" href="http://i.huya.com/index.php?m=ChannelSetting">
                                    <span class="icon icon-channel-setting" style="background-image: url(http://i.huya.com/main/statics/img/icon_channel_set.png)"></span>
                                    <span class="title">
                                    公会设置
                                </span>
                                </a>
                            </li>
                            <li id="verify-li" style="display:none;">
                                <a menu="verify" href="http://i.huya.com/index.php?m=Ow&amp;do=signRequest">
                                    <span class="icon icon-verify"></span>
                                    <span class="title">
                                    主播审核
                                </span>
                                </a>
                            </li>
                            <!-- <li>
<a menu="texasHall" href="http://i.huya.com/index.php?m=PokerAdmin">
<span class="icon icon-icon icon-teaxsHall"></span>
<span class='title'>
德州牌厅管理
</span>
</a>
</li> -->
                            <!--<li>
                                <a menu="owstar" href="http://i.huya.com/index.php?m=Owscout">
                                    <span class="icon icon-star"></span>
                                     <span class="title">
                                         OW星探
                                     </span>
                                </a>
                            </li>-->
                        </ul>

                    </div>


                    <div class="to-be-anchor">
                        <p>想成为万人敬仰的主播？</p>
                        <a href="http://www.huya.com/e/zhubo" target="_blank" class="btn btn-to-anchor">成为主播</a>
                    </div>

                </div>


            </div>

        </div>
    </div>





    <div class="main-col">
        <div class="scroll-content">
            <div class="mod mod-propery">
                <div class="mod-hd">
                    <h3>主播收入</h3>
                </div>
                <div class="mod-bd">
                    <div class="income-content">
                        <div id="tab-click" class="mod-tab">
                            <div class="mod-tab-hd">
                                <ul class="mod-tab-trigger J_nav">
                                    <li class="selected"><a href="<?=url('gift/profileGiftIncome')?>">主播礼物收入</a></li>
                                    <li><a href="<?=url('gift/profileGiftList')?>">主播礼物清单</a></li>
                                    <li><a href="http://i.huya.com/index.php?m=MyAccount&do=profileGuardDetail&from=profileIncome">主播守护明细</a></li>
                                    <li><a href="http://i.huya.com/index.php?m=MyAccount&do=goldbeanUserDetail&from=profileIncome">账号金元宝流水</a></li>
                                    <li><a href="http://i.huya.com/index.php?m=MyAccount&do=allCommissionDetail&from=profileIncome">账号直播佣金流水</a></li>
                                    <li><a href="http://i.huya.com/index.php?m=MyAccount&do=profileGoldbeanInteractiveDetail&from=profileIncome">互动游戏佣金</a></li> -->
                                    <li><a href="http://i.huya.com/index.php?m=MyAccount&do=nobleIncomeDetail&from=profileIncome">贵族收入明细</a></li>
                                    <li><a href="http://i.huya.com/index.php?m=MyAccount&do=gameIncomeDetail&from=profileIncome">游戏收入明细</a></li>
                                    <li><a href="http://i.huya.com/index.php?m=MyAccount&do=sailIncomeDetail&from=profileIncome">寻宝收入明细</a></li>
                                </ul>
                            </div>
                            <div class="mod-tab-bd J_content">
                                <!--
                                                <div class="mod-tab-content">
                                                   <div class="calendar">
                                                                                                    <form id="timeSelect" action="http://i.huya.com/index.php?m=MyAccount&do=profileGiftIncome&from=profileIncome" method="post">

                                                           <label>
                                                               <i>时间</i>
                                                               <input type="hidden" name="type" value="customize" />
                                                               <input  class="Wdate" type="text" id="datetime" name="datetime" onfocus="WdatePicker({dateFmt:'yyyy年MM月',vel:'realdateTime', maxDate: '%y-{%M-1}',onpicked:function(){$('#timeSelect').submit();}})" value="2017年09月"/>
                                                               <input type="hidden" id="realdateTime" name="realdateTime" value="2017-09-01">
                                                           </label>

                                                           <span class="btn btn-check" onclick="$('#timeSelect').submit();">查看</span>
                                                           <div class="contribute__total" style="float:right;margin-right:20px;">
                                                            <div class="year__contribute">每月4号显示上月礼物收入明细</div>
                                                            </div>
                                                        </form>
                                                       </div>
                                                      <table>
                                                       <tbody><tr class="tit-head">
                                                            <th>获得时间</th>
                                                            <th>礼物价值<i>（金元宝)</i></th>
                                                            <!--<th>守护收入<i>（金元宝)</i></th>-->
                                <!--                            <th>分成等级</th>
                                                            <th>OW提成</th>
                                                            <th>来源</th>
                                                            <th>入账时间</th>
                                                            <th>最终获得<i>（金元宝)</i></th>
                                                        </tr>

                                                                                      <!-- 总计 每页都有总计-->
                                <!--                        <tr>
                                                            <th>总计</th>
                                                            <td class="num">0</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="num">0</td>
                                                        </tr>


                                                        </tbody>
                                                    </table>
                                                    <script type="text/javascript">
                    $(document).ready(function(){
                        var indexUrl = '';
                        var tmp=window.location.href;

                        page_util = {
                            gotopage: function (currentPage) {
                                var form = document.getElementById('pageForm');
                                form.action=indexUrl;
                                document.getElementById('pageForm_page').value=currentPage;
                                form.submit();
                            }
                        }
                    });
                </script>

                                                </div>
                                -->
                                <div class="mod-tab-content">
                                    <div class="calendar">
                                        <form id="timeSelect">
                                            <label>
                                                <i>时间</i>
                                                <input type="hidden" name="type" value="customize" />
                                                <input  class="Wdate" type="text" id="datetime" name="datetime" onfocus="WdatePicker({dateFmt:'yyyy年MM月',vel:'realdateTime',isShowClear:false,readOnly:true, maxDate: '%y-{%M-1}',onpicked:getTimeShow})" value="2017年09月"/>
                                                <script>
                                                    function getTimeShow(){//是否显示收入来源
                                                        var year = parseInt($dp.cal.getP('y')),
                                                            mon = parseInt($dp.cal.getP('M')),
                                                            $incometype = $("#incometype_label");
                                                        if(year <= 2016 && mon <= 9){
                                                            $incometype.show();
                                                        }else{
                                                            $incometype.hide();
                                                        }
                                                    }
                                                </script>
                                                <input type="hidden" id="realdateTime" name="realdateTime" value="2017-09-01">
                                            </label>
                                            <label  id="incometype_label" style="display:none;">
                                                <i>收入来源</i>
                                                <select class="channel-select" name="" id="incometype">
                                                    <option value="0">全部</option>
                                                    <option value="1">PC端道具主播分成</option>
                                                    <option value="17">手机端道具主播分成</option>
                                                </select>
                                            </label>

                                            <span class="btn btn-check" id="giftIncome_view">查看</span>
                                            <div class="contribute__total" style="float:right;margin-right:20px;">
                                                <div class="year__contribute">每月4号显示上月礼物收入明细<a href="javascript:void(0)" class="mini-q" id="detail"></a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <table>
                                        <thead>
                                        <tr class="tit-head">
                                            <th>产生日期</th>
                                            <th>进账日期</th>
                                            <!-- <th>收入来源</th> -->
                                            <th>分成等级</th>
                                            <th>OW提成比例</th>
                                            <th>主播最终收入<i>（金元宝）</i></th>
                                        </tr>
                                        </thead>
                                        <tbody id="account_income">
                                        </tbody>
                                    </table>
                                    <div id="page" class="mod-page">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
<!-- 详细信息 -->

<script type="text/javascript" src="main/statics/js/account_profile_gift_list.js"></script>
<script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.14/js/jquery.page.js"></script>
<script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.17/js/account_income_profile.js?t=1507517544"></script>
<script src="//a.msstatic.com/huya/common/footer.js"></script>
<script src="http://assets.dwstatic.com/b=project/yytv/center/2.8/js&f=main.js"></script>
<script type="text/javascript" src="http://szhuodong.duowan.com/s/rp/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript" src="http://a.msstatic.com/huya/icenter/1.0/js/report_info.js"></script>
<!--/footer-->
<!-- S 后台推送消息 -->
<!--[if lte IE 7]>
<script  type='text/javascript' src='http://i.huya.com/base/js/push/json3.min.js'></script>
<![endif]-->
<!--[if lte IE 9]>
<script type='text/javascript' src='http://i.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>
<![endif]-->
<script data-fixed="true">
    var PUSH_PROXY_URL="http://channelproxy.huya.com/";
    var PUSH_ENABLE=true;//推送开关
    var WEB_PUSH_URL="webpush.huya.com";
    var WEB_PUSH_TLS_ENABLE=true;//是否使用TLS
</script>
<script type='text/javascript' src='http://www.huya.com/base/js/push/push-min.js?t=20170818'></script>
<script type='text/javascript' src='http://i.huya.com/base/js/push/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->
</body>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: yangwh
 * Date: 2017/10/9
 * Time: 20:19
 */