<?php
$t9 = $_SERVER['DOCUMENT_ROOT']; $moof="$t9/fiplog.log";
$logline = date("Y-m-d H:i:s") . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . "FRANK" . "\t" .  $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$mooq = file_put_contents($moof, $logline, FILE_APPEND);
?>
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><title>Frank Sikernitsky</title>
<meta name = "description" content="A fun and unique look at the major products and projects of noted engineer and entrepreneur Frank Sikernitsky.">
<meta name = "apple-mobile-web-app-capable" content="yes" /><meta  name=viewport content="width=device-width,shrink-to-fit=no">
<script>
var cb = function() {
var l = document.createElement('link'); l.rel = 'stylesheet';
l.href = 'jquery-ui-1.8.20.custom.min.css';
var h = document.getElementsByTagName('head')[0];  h.parentNode.insertBefore(l, h);
};
var raf = requestAnimationFrame || mozRequestAnimationFrame ||
webkitRequestAnimationFrame || msRequestAnimationFrame;
if (raf) raf(cb);
else window.addEventListener('load', cb);
</script>
<link rel="apple-touch-icon" href="apple-touch-icon.png"><link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png"><link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png"><link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> <link rel="icon" type="image/png" href="ficon16.png" sizes="16x16"><link rel="icon" type="image/png" href="ficon32.png" sizes="32x32">
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Roboto:400,700,300:latin','Open+Sans:300,400,600,700:latin','Oswald:400,600:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65833072-1', 'auto');
  ga('send', 'pageview');

</script>
<!--[if IE]><script src="jquery/js/excanvas.js"></script><![endif]-->
<style>
body,html{min-height:100%;height:100%}#itis,.bigbox,.topbutton,.topribbon{position:absolute}#drop-menu li a,#drop-menu li a hover,.cardlink{text-decoration:none}body{background:url(bg.jpg) center center no-repeat fixed #222;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;font-family:'Roboto','Open Sans','Lucida Grande',Helvetica,Arial}strong{font-weight:700}
.medstrong{font-weight:600}p{margin:0;padding:5px}
.bigbox{display:block;top:0;left:0;width:100%;height:100%;margin:0}
.divact1,.divact2,.divact3,.divact4{width:100px;float:left;text-align:center}
.menuitem{font-size:14px}
.aoncard,.aoncard a:link,.aoncard a:visited{color:#111!important;text-decoration:none}
.aoncard a:hover{color:#444!important}
.topribbon{padding:14px;color:#FFF;border:0;height:57px;font-family:'Roboto','Open Sans',Lucida Grande,Helvetica;font-size:10pt;text-align:center}
.bodyprose,.ui-widget-content{font-family:'Roboto','Open Sans',Lucida Grande,Helvetica,sans-serif}
.divinnerbox{-moz-border-radius:8px;-webkit-border-radius:8px;-khtml-border-radius:8px;border-radius:8px}
.ui-dialog{border:0;-moz-box-shadow:1px 1px 6px 2px #222;-webkit-box-shadow:1px 1px 6px 2px #222;box-shadow:1px 1px 6px 2px #222}
.dragshadow{border:0;-moz-box-shadow:1px 1px 6px 2px #222;-webkit-box-shadow:1px 1px 6px 2px #222;box-shadow:1px 1px 6px 2px #222;-webkit-appearance:none;border-radius:1px}
.ui-widget-content{font-size:14pt}img{border:0}a{outline:0;-moz-outline-style:none}
.bodyprose{font-size:9pt;font-weight:400;color:#E0E0E0}
.cardtitle,.titlemajor,.ttlspc{font-weight:700}
.titlemajor{font-size:14pt}
.titleminor,.ttlspc{font-size:12pt}
.ttlspc{padding-left:6px;vertical-align:14px;color:#444}
.invl,.invn{display:block;padding:4px;font-size:9pt}
.cardtitle{font-size:12pt}
.divact3,.divact4{padding-top:16px}
.actb{padding-top:6px}
.is_x{height:32px;vertical-align:top;padding-top:4px}
.boxprose{font-size:10pt;color:#EEE;margin:2px 10px 8px}
.prose{font-size:8pt;color:#333;font-weight:400;margin:2px 10px}
.lighterprose{color:#AAA}   
.dragbase{font-family:'Open Sans',Lucida Grande,Helvetica,Arial,sans-serif;font-size:10pt}
.cardlink{-moz-box-shadow:inset 0 1px 3px 0 #d1d1d1;-webkit-box-shadow:inset 0 1px 3px 0 #d1d1d1;box-shadow:inset 0 1px 3px 0 #d1d1d1;background:-webkit-gradient(linear,left top,left bottom,color-stop(.05,#e6e6e6),color-stop(1,#d1cdd1));background:-moz-linear-gradient(top,#e6e6e6 5%,#d1cdd1 100%);background:-webkit-linear-gradient(top,#e6e6e6 5%,#d1cdd1 100%);background:-o-linear-gradient(top,#e6e6e6 5%,#d1cdd1 100%);background:-ms-linear-gradient(top,#e6e6e6 5%,#d1cdd1 100%);background:linear-gradient(to bottom,#e6e6e6 5%,#d1cdd1 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e6e6e6', endColorstr='#d1cdd1', GradientType=0);background-color:#e6e6e6;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;border:2px solid #B9B5B5;display:inline-block;cursor:pointer;margin-top:4px;color:#303030!important;font-family:arial;font-size:11px;font-weight:700;padding:2px;width:190px;text-align:center}
.topbutton{top:0;left:825px;height:55px;width:110px;float:right;font-size:8pt;text-align:center;padding-left:8px;padding-right:18px}
.topicon{height:42px;width:70px;background-image:url(topicons.png)}
.shuf{background-position:0 0}
.tmln{background-position:-68px 0}
.txtv{background-position:-151px 0}
.cttm{background-position:-232px 0}
.abot{background-position:-306px 0}#itis{top:55px}#itissub{position:relative;width:240px;padding:8px}
.front-ff{border:0;background:url(ff.png) left top no-repeat #222!important;color:#fff!important}
.back-ff{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-hp{border:0;background:url(hp.png) left top no-repeat #222!important;color:#fff!important}
.back-hp{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-rc{border:0;background:url(rc.png) left top no-repeat #222!important;color:#fff!important}
.back-rc{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-am{border:0;background:url(am.png) left top no-repeat #222!important;color:#fff!important}
.back-am{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-hd{border:0;background:url(hd.png) left top no-repeat #222!important;color:#fff!important}
.back-hd{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-tw{border:0;background:url(tw.png) left top no-repeat #222!important;color:#fff!important}
.back-tw{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-bp{border:0;background:url(bp.png) left top no-repeat #222!important;color:#fff!important}
.back-bp{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-id{border:0;background:url(id.png) left top no-repeat #222!important;color:#fff!important}
.back-id{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-tj{border:0;background:url(tj.png) left top no-repeat #222!important;color:#fff!important}
.back-tj{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-ww{border:0;background:url(ww.png) left top no-repeat #595a7b!important;color:#fff!important}
.back-ww{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-gv{border:0;background:url(gv.png) left top no-repeat #222!important;color:#fff!important}
.back-gv{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-hz{border:0;background:url(hz.png) left top no-repeat #222!important;color:#fff!important}
.back-hz{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-ub{border:0;background:url(ub.png) left top no-repeat #222!important;color:#fff!important}
.back-ub{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-ia{border:0;background:url(ia.png) left top no-repeat #222!important;color:#fff!important}
.back-ia{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
.front-g2{border:0;background:url(g2.png) left top no-repeat #222!important;color:#fff!important}
.back-g2{border:0;background:url(f2.png) left top no-repeat #DDD!important;color:#000!important}
#drag-am,#drag-ff,#drag-rc,#drag-gv,#drag-hd,#drag-hz,#drag-ia,#drag-bp,#drag-g2,#drag-hp,#drag-tj,#drag-tw,#drag-ub,#drag-ww{width:220px;height:220px;background-size:220px!important;position:absolute!important}
#drag-tj{top:369px;left:266px}
#drag-bp{top:219px;left:742px}
#drag-tw{top:76px;left:678px}
#drag-ff{top:314px;left:528px}
#drag-hp{top:372px;left:505px}
#drag-hd{top:265px;left:355px}
#drag-id{width:220px;height:220px;background-size:220px!important;position:absolute!important;top:30px;left:340px}
#drag-gv{top:102px;left:389px}
#drag-hz{top:376px;left:363px}
#drag-am{top:191px;left:247px}
#drag-rc{top:25px;left:582px}
#drag-ub{top:265px;left:600px}
#drag-g2{top:200px;left:250px}
#drag-ia{top:100px;left:500px}

#exty{width:10px;height:20px;display:none}
@media only screen and (max-width:420px){#drag-am,#drag-ff,#drag-rc,#drag-gv,#drag-g2,#drag-tj,#drag-tw{left:100px}#drag-hd,#drag-hz,#drag-ia,#drag-id,#drag-bp,#drag-hp,#drag-ub{width:250px;height:250px;background-size:250px!important;position:absolute!important;left:20px}#drag-tj{width:250px;height:250px;background-size:250px!important;position:absolute!important;top:2665px}#drag-hd{top:2485px}#drag-tw{width:250px;height:250px;background-size:250px!important;position:absolute!important;top:2305px}#drag-bp{top:2125px}#drag-am{width:250px;height:250px;background-size:250px!important;position:absolute!important;top:1945px}#drag-id{top:1765px}#drag-gv{width:250px;height:250px;background-size:250px!important;position:absolute!important;top:1585px}#drag-hp{top:1405px}#drag-ff{width:250px;height:250px;background-size:250px!important;position:absolute!important;top:1225px}#drag-hz{top:1045px}#drag-rc{width:250px;height:250px;background-size:250px!important;position:absolute!important;top:865px}#drag-ub{top:685px}#drag-g2{width:250px;height:250px;background-size:250px!important;position:absolute!important;top:505px}#drag-ia{top:325px}#itis{position:absolute;top:50px;left:10px;width:auto}#itissub{padding:5px;width:auto}
.divact1,.divact2{display:none}
.bodyprose{color:#FFF;font-family:'Open Sans',Lucida Grande,Helvetica,sans-serif;font-size:8pt;font-weight:400}
.titlemajor{font-size:11pt;font-weight:700}}
@media (orientation:landscape) and (min-device-height:1000px),all and (min-width:1000px){#exty{min-width:1070px;min-height:750px;display:block}}#drop-menu ul{list-style-type:none;margin:0;padding:0}#drop-menu li{height:48px;margin-bottom:6px}#drop-menu li a{display:block;width:275px;background:url(ibutton.png) left top no-repeat;font-size:12pt;padding:10px 0;height:57px
display:inline;text-align:center}
.ui-dialog-content{padding:.5em!important}
.noTitleStuff .ui-dialog-titlebar{display:none}
.icoico{height:61px;width:65px;align:baseline}
	</style>
</head><body>
<div id="exty" style="position:absolute;top:0;left:0;border:0;clear:both;z-index:-999;">&nbsp;</div>
<div class="bigbox"><div class="topribbon" style="left:0;top:0;"><div style="float:left;"><img src="innameonly.png" alt="[Frank Sikernitsky]"></div></div></div>
<div id="biobox" title="about frank sikernitsky" style="display:none;background-color:none !important; background-image:url(bg85.png) !important;">
<div class="divinnerbox"><?php include('bio.html'); ?></div></div>
<div id="actbox" title="about frank sikernitsky" style="display:none;background-color:none !important; background-image:url(bg85.png) !important;">
<div class="divinnerbox"><?php include('xtac.html'); ?></div></div>
<div id="set">
<!--div id="drag-am" class="ui-widget-content dragshadow front-am"><span id="goback-am"><img src="flipx.png" hspace=4 vspace=4></span></div-->
<!--div id="drag-tj" class="ui-widget-content dragshadow front-tj"><span id="goback-tj"><img src=flip.png hspace=4 vspace=4></span></div-->
<!--div id="drag-tw" class="ui-widget-content dragshadow front-tw"><span id="goback-tw"><img src=flip.png hspace=4 vspace=4></span></div-->
<div id="drag-id" class="ui-widget-content dragshadow front-id"><span id="goback-id"><img src=flip.png hspace=4 vspace=4></span></div>
<div id="drag-ub" class="ui-widget-content dragbase dragshadow front-ub"><span id="goback-ub"><img src=flip.png hspace=4 vspace=4></span></div>
<div id="drag-rc" class="ui-widget-content dragshadow front-rc"><span id="goback-rc"><img src=flipm.png hspace=4 vspace=4></span></div>
<div id="drag-hd" class="ui-widget-content dragshadow front-hd"><span id="goback-hd"><img src=flip.png hspace=4 vspace=4></span></div>
<!--div id="drag-ff" class="ui-widget-content dragshadow front-ff"><span id="goback-ff"><img src=flip.png hspace=4 vspace=4></span></div-->
<!--div id="drag-gv" class="ui-widget-content dragshadow front-gv"><span id="goback-gv"><img src=flipx.png hspace=4 vspace=4></span></div-->
<!--div id="drag-hz" class="ui-widget-content dragshadow front-hz"><span id="goback-hz"><img src=flipm.png hspace=4 vspace=4></span></div-->
<div id="drag-g2" class="ui-widget-content dragshadow front-g2"><span id="goback-g2"><img src=flip.png hspace=4 vspace=4></span></div>
<div id="drag-ia" class="ui-widget-content dragshadow front-ia"><span id="goback-ia"><img src=flip.png hspace=4 vspace=4></span></div>
<div id="drag-bp" class="ui-widget-content dragshadow front-bp"><span id="goback-bp"><img src=flipx.png hspace=4 vspace=4></span></div>
<div id="drag-hp" class="ui-widget-content dragshadow front-hp"><span id="goback-hp"><img src=flip.png hspace=4 vspace=4></span></div>
</div>
<div id="itis" class="bodyprose">
<div id="itissub" class="bodyprose"><br><p style="font-size:14px;line-height:16px;">Welcome to my home page!</p><p style="font-size:14px;line-height:16px;padding-top:5px;">I'm an engineer, inventor, author, starter-upper, and a bunch of other things.</p><p style="font-size:14px;line-height:16px;padding-top:5px;">As you can see, I didn't follow the 'minimalist home page' crowd. Instead, here are some of my recent projects, on cards, and scattered around this page.</p> </p><p style="font-size:14px;line-height:16px;padding-top:5px;"><span class="medstrong" >You can drag them around, and hit <img src="flipw.png" width="18" align="absbottom"> to flip the card for more info...</span></p>

<div style="clear:both;margin-top:10px;">
<div id="clickme" class="divact1" style="clear:left;"><img src="shuffleit.png"><br><span class='titleminor'>shuffle</span><br>yeah, go ahead...</div>
<div class="divact2" id="bioboxbtn"><img src="frank.png" style="padding-top:3px;"><br><span class='titleminor'>fast bio</span><br>me in a popup</div>
<div class="divact3" style="clear:left;"><a href="https://twitter.com/stsky" target="_blank" class="golinkedin"><img src="twit.png" style="border:0px;width:45px;height:auto;"></a><br><span class='titleminor'>#stsky</span><br>microblog</div>
<div class="divact4"><a href="http://www.linkedin.com/pub/frank-sikernitsky/0/148/8aa/" target="_blank" class="golinkedin"><img src="linkin.png" border=0></a><br><span class='titleminor'>profile</span><br>the conventional view</div>
</div></div></div></div>
<script src="jquery/js/jquery-1.7.2.min.js" ></script><script src="jquery/js/jquery-ui-1.8.20.custom.min.js" ></script>
<script src="jquery/js/jquery.ui.touch-punch.min.js" ></script><script src="jquery/js/jquery.flippy.min.js" async="true" ></script>
<script>
$(function() {
$( "#drag-bp" ).draggable({ opacity: 0.35 });
$( "#drag-hp" ).draggable({ opacity: 0.35 });
// $( "#drag-gv" ).draggable({ opacity: 0.35 });
//$( "#drag-tw" ).draggable({ opacity: 0.35 });
$( "#drag-id" ).draggable({ opacity: 0.35 });
$( "#drag-rc" ).draggable({ opacity: 0.35 });
//$( "#drag-tj" ).draggable({ opacity: 0.35 });
// $( "#drag-ww" ).draggable({ drag: ga('send', 'event', 'carddrag', 'Distechnical'), opacity: 0.35 });
$( "#drag-hd" ).draggable({ opacity: 0.35 });
// $( "#drag-ff" ).draggable({ opacity: 0.35 });
// $( "#drag-am" ).draggable({ opacity: 0.35 });
//$( "#drag-hz" ).draggable({ opacity: 0.35 });
$( "#drag-ub" ).draggable({ opacity: 0.35 });
$( "#drag-ia" ).draggable({ opacity: 0.35 });
$( "#drag-g2" ).draggable({ opacity: 0.35 });
$( "#set div" ).draggable({ stack: "#set div" });

$( "#dialog" ).dialog({
resizable: false,
draggable: false,
autoOpen: false,
width:293,
height: 271,
show: { effect: 'fade', duration: 500 } ,
hide: { effect: 'fade', duration: 500 } ,
position: {
my: 'right top',
at: 'right top',
of: $('#menubtn'),
offset: '-20 5'
} });

$( "#actbox" ).dialog({
resizable: false,
draggable: true,
autoOpen: false,
width:450,
height: 220,
show: { effect: 'fade', duration: 500 } ,
hide: { effect: 'fade', duration: 500 }
});

$( "#biobox" ).dialog({
resizable: false,
draggable: true,
autoOpen: false,
width:'90%',
height: 'auto',
show: { effect: 'fade', duration: 500 } ,
hide: { effect: 'fade', duration: 500 }
});
});

$( "#drag-bp" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'BoardPath'); });
$( "#drag-hp" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'HobokenPress'); });
$( "#drag-gv" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'BoxQueue'); });
$( "#drag-tw" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'Window'); });
$( "#drag-id" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'IdeaDev'); });
$( "#drag-rc" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'rootcloud'); });
$( "#drag-tj" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'TrincollJournal'); });
// $( "#drag-ww" ).draggable({ drag: ga('send', 'event', 'carddrag', 'Distechnical'), opacity: 0.35 });
$( "#drag-hd" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'HeresDinner'); });
$( "#drag-ff" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'FitFiler'); });
$( "#drag-am" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'AttendeeManagement'); });
$( "#drag-hz" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'HobokenZoo'); });
$( "#drag-ub" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'fuxnux'); });
$( "#drag-ia" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'iasqu'); });
$( "#drag-g2" ).on( "dragstop", function() { ga('send', 'event', 'carddrag', 'GeneralVirtual'); });

$(document).on('click' ,'#menubtn', function() { $( "#dialog" ).dialog("open"); });
$(document).on('click' ,'#xtactbtn', function() { $( "#xtact" ).dialog("open"); });
$(document).on('click' ,'#bioboxbtn', function() {
ga('send', 'event', 'mainlink', 'biobox');
$( "#biobox" ).dialog("open");
});
$(document).on('click' ,'#closeme', function() { $( "#dialog" ).dialog("close"); });
$(document).on('click' ,'.cardlink',function() { ga('send', 'event', 'cardlink', 'offsite'); });
$(document).on('click' ,'.golinkedin',function() { ga('send', 'event', 'mainlink', 'linkedin'); });
$(document).on('click', '#lineme', function () {

$("#dialog").dialog("close");
// $("#drag-tj").animate({top: 399, left: 26}, { duration: 400, queue: false }).css("z-index","5");
// $("#drag-tw").animate({top: 96, left: 413}, { duration: 400, queue: false }).css("z-index","2");
$("#drag-hd").animate({top: 274, left: 60}, { duration: 400, queue: false }).css("z-index","8");
$("#drag-id").animate({top: 77, left: 204}, { duration: 400, queue: false }).css("z-index","6");
//$("#drag-am").animate({top: 211, left: 18}, { duration: 400, queue: false }).css("z-index","9");
$("#drag-bp").animate({top: 230, left: 468}, { duration: 400, queue: false }).css("z-index","3");
//$("#drag-gv").animate({top: 90, left:47}, { duration: 400, queue: false }).css("z-index","4");
//$("#drag-hz").animate({top: 386, left:123}, { duration: 400, queue: false }).css("z-index","11");
//$("#drag-ww").animate({top: 260, left:200}, { duration: 400, queue: false }).css("z-index","1");
$("#drag-rc").animate({top: 92, left:129}, { duration: 400, queue: false }).css("z-index","7");
$("#drag-hp").animate({top: 402, left:286 }, { duration: 400, queue: false }).css("z-index","10");
//$("#drag-ff").animate({top: 334, left:428 }, { duration: 400, queue: false }).css("z-index","14");
$("#drag-ub").animate({top: 399, left:469 }, { duration: 400, queue: false }).css("z-index","13");
$("#drag-g2").animate({top: 242, left:273 }, { duration: 400, queue: false }).css("z-index","12");
$("#drag-ia").animate({top: 204, left:357 }, { duration: 400, queue: false }).css("z-index","15");

});

$(document).on('click', '#clickme', function () {
shuffleit();
});

function shuffleit() {
$("#dialog").dialog("close");
$("#drag-ub").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-hz").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-am").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-ff").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-hd").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-rc").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-tj").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-id").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-tw").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-gv").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-hp").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-bp").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-ia").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
$("#drag-g2").animate({
top: Math.floor((Math.random()*310)+30),
left: Math.floor((Math.random()*420)+260)
}, { duration: 400, queue: false });
};

$(function() {
$(document).on('click', '#goback-ff', function(){
ga('send', 'event', 'cardflip', 'FitFiler');
$("#drag-ff").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-ff><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>FitFiler</span><p class=prose><strong>Advisor</strong><br>FitFiler is a family of mobile technologies that unites health data tracking with group-based social tools to yield a next generation approach to managing wellness.</span><p class=prose><strong>Dates</strong> 2011 - Current<br><strong>Status</strong> Pilot<br><a href=http://www.fitfiler.com class=cardlink target=_blank>www.fitfiler.com</a>',
onStart: function () {$("#drag-ff").removeClass("dragshadow"); $("#drag-ff").removeClass("front-ff");},
onFinish: function () {$("#drag-ff").addClass("back-ff");$("#drag-ff").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-ff', function(){
$("#drag-ff").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-ff><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>FitFiler</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-social.png><img src=sq-cloud.png><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-infra.png><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-startup.png><span class=invl><strong>Users</strong>: 6,000 pilot</span></p>',
onStart: function () {$("#drag-ff").removeClass("dragshadow"); $("#drag-ff").removeClass("back-ff");;},
onFinish: function () {$("#drag-ff").addClass("back-ff");$("#drag-ff").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-ff', function(){
$("#drag-ff").flippy({ direction:'LEFT', light:0,  color_target:'#336633', content:'<span id=goback-ff><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-ff").removeClass("dragshadow"); $("#drag-ff").removeClass("back-ff");},
onFinish: function () {$("#drag-ff").addClass("front-ff"); $("#drag-ff").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#goback-id', function(){
ga('send', 'event', 'cardflip', 'IdeaDev');
$("#drag-id").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-id><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>IdeaDev</span><p class=prose><strong>Managing Director</strong><br><br>Based in NYC, IdeaDev was a software design agency. Major clients included Pfizer, GE, AAA, and Citibank.  </span><p class=prose><strong>Dates</strong> 1999 - 2007<br><strong>Status</strong> Retired<br>',
onStart: function () {$("#drag-id").removeClass("dragshadow"); $("#drag-id").removeClass("front-id");},
onFinish: function () {$("#drag-id").addClass("back-id");$("#drag-id").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gomid-id', function(){
$("#drag-id").flippy({ direction:'TOP', light:0, content:'<span id=gofront-id><img src=flip.png  hspace=4 vspace=4></span><span class=ttlspc>IdeaDev</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-win.png><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-startup.png><img src=sq-lab.png><span class=invl><strong>Fortune 500 Clients</strong>: 6</span></p>',
onStart: function () {$("#drag-id").removeClass("dragshadow"); $("#drag-id").removeClass("back-id");},
onFinish: function () {$("#drag-id").addClass("back-id");$("#drag-id").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-id', function(){
$("#drag-id").flippy({ direction:'LEFT', light:0, color_target:'#6666cc', content:'<span id=goback-id><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-id").removeClass("dragshadow"); $("#drag-id").removeClass("back-id");},
onFinish: function () {$("#drag-id").addClass("front-id"); $("#drag-id").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#goback-hd', function(){
ga('send', 'event', 'cardflip', 'HeresDinner');
$("#drag-hd").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-hd><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>HeresDinner</span><p class=prose><strong>Investor</strong><br>HeresDinner is an outsourced food delivery service, combining online ordering with boots on the ground. Piloted for two years in Princeton, NJ, HD is planning re-release in the Northeast with a new emphasis on mobility. </span><p class=prose><strong>Dates</strong> 2005 - Current<br><strong>Status</strong> Post-Pilot<br></p>',
onStart: function () {$("#drag-hd").removeClass("dragshadow"); $("#drag-hd").removeClass("front-hd");},
onFinish: function () {$("#drag-hd").addClass("back-hd");$("#drag-hd").addClass("dragshadow");}
}); }); });

$(function() {
$(document).on('click' ,'#gomid-hd', function(){
$("#drag-hd").flippy({ direction:'LEFT', light:0, content:'<span id=gofront-hd><img src=flip.png  hspace=4 vspace=4></span><span class=ttlspc>HeresDinner</span><p class=prose><span class=invl><strong>Involvement</strong></span> <img src=sq-mobile.png><img src=sq-social.png><img src=sq-cloud.png><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-data.png><img src=sq-ui.png><img src=sq-prod.png><img src=sq-startup.png><span class=invl><strong>Users</strong>: 700 pilot</span></p>',
onStart: function () {$("#drag-hd").removeClass("dragshadow"); $("#drag-hd").removeClass("back-hd");},
onFinish: function () {$("#drag-hd").addClass("back-hd");$("#drag-hd").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-hd', function(){
$("#drag-hd").flippy({ direction:'LEFT', light:0, content:'<span id=goback-hd><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-hd").removeClass("dragshadow"); $("#drag-hd").removeClass("back-hd");},
onFinish: function () {$("#drag-hd").addClass("front-hd"); $("#drag-hd").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#goback-hp', function(){
ga('send', 'event', 'cardflip', 'HobokenPress');
$("#drag-hp").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-hp><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Hoboken Press</span><br><p class=prose>After kicking off online publishing in 1994 and running with it for over 20 years, I finally decided I liked books after all. So I started a hyper-local publisher specializing in unique and local content.</p><p class="prose"><a href=http://hobokenpress.com class=cardlink target=_blank>HobokenPress.com</a></P>',
onStart: function () {$("#drag-hp").removeClass("dragshadow"); $("#drag-hp").removeClass("front-hp");},
onFinish: function () {$("#drag-hp").addClass("back-hp");$("#drag-hp").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-hp', function(){
$("#drag-hp").flippy({ direction:'LEFT', light:0, content:'<span id=goback-hp><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-hp").removeClass("dragshadow"); $("#drag-hp").removeClass("back-hp");},
onFinish: function () {$("#drag-hp").addClass("front-hp"); $("#drag-hp").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-tw', function(){
ga('send', 'event', 'cardflip', 'Window');
$("#drag-tw").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-tw><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>The Window</span><p class=prose><strong>Creator, Editor</strong><br>The Window is a Philosophy resource created in 1995 while I was a student at Trinity College. In the intervening 20 years, it is now widely cited as a primary source on the Web. </span><p class=prose><strong>Dates</strong> 1995 - Current<br><strong>Status</strong> Online<br><a href=http://www.trincoll.edu/depts/phil/philo/index.html class=cardlink target=_blank>The Window</a> ',
onStart: function () {$("#drag-tw").removeClass("dragshadow"); $("#drag-tw").removeClass("front-tw");},
onFinish: function () {$("#drag-tw").addClass("back-tw");$("#drag-tw").addClass("dragshadow");}
}); }); });

$(function() {
$(document).on('click' ,'#gomid-tw', function(){
$("#drag-tw").flippy({ direction:'LEFT', light:0, content:'<span id=gofront-tw><img src=flip.png  hspace=4 vspace=4></span><span class=ttlspc>The Window</span><p class=prose><span class=invl><strong>Involvement</strong></span><br><img src=sq-lamp.png><img src=sq-eng.png><img src=sq-data.png><img src=sq-ui.png><img src=sq-pub.png><img src=sq-lab.png><span class=invl><strong>Online For</strong>: 17 years</span></p>',
onStart: function () {$("#drag-tw").removeClass("dragshadow"); $("#drag-tw").removeClass("back-tw");},
onFinish: function () {$("#drag-tw").addClass("back-tw");$("#drag-tw").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-tw', function(){
$("#drag-tw").flippy({ direction:'LEFT', light:0, color_target:'#3366cc', content:'<span id=goback-tw><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-tw").removeClass("dragshadow"); $("#drag-tw").removeClass("back-tw");},
onFinish: function () {$("#drag-tw").addClass("front-tw"); $("#drag-tw").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#goback-bp', function(){
ga('send', 'event', 'cardflip', 'IntranetOffice');
$("#drag-bp").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-bp><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>BoardPath</span><p class=prose><strong>Advisor, Evangelist</strong><br></p><p class="prose">BoardPath is a social business community designed around the very unique and specific needs of board members, from publically traded companies in the F50, all the way to small private nonprofit charities. <br><a href=http://boardpath.com class=cardlink target=_blank>BoardPath.com</a>',
onStart: function () {$("#drag-bp").removeClass("dragshadow"); $("#drag-bp").removeClass("front-bp");},
onFinish: function () {$("#drag-bp").addClass("back-bp");$("#drag-bp").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gomid-bp', function(){
$("#drag-bp").flippy({ direction:'LEFT', light:0, content:'<span id=gofront-bp><img src=flip.png hspace=4 vspace=4></span><span class=ttlspc>BoardPath</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-win.png><img src=sq-eng.png><img src=sq-data.png><img src=sq-ui.png><img src=sq-data.png><br><img src=sq-prod.png><img src=sq-startup.png></p>',
onStart: function () {$("#drag-bp").removeClass("dragshadow"); $("#drag-bp").removeClass("back-bp");},
onFinish: function () {$("#drag-bp").addClass("back-bp");$("#drag-bp").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-bp', function(){
$("#drag-bp").flippy({ direction:'LEFT', light:0, color_target:'#d32700', content:'<span id=goback-bp><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-bp").removeClass("dragshadow"); $("#drag-bp").removeClass("back-bp");},
onFinish: function () {$("#drag-bp").addClass("front-bp"); $("#drag-bp").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-hz', function(){
ga('send', 'event', 'cardflip', 'HobokenZoo');
$("#drag-hz").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-hz><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Hoboken Zoo</span><p class=prose><strong>Director</strong><br>The Zoo is about kids, imagination, technology, engineering, and the community.</p> <p class=prose><strong>Dates</strong> 2015 - Current<br><strong>Status</strong> Building Curriculum<br>',
onStart: function () {$("#drag-hz").removeClass("dragshadow"); $("#drag-hz").removeClass("front-hz");},
onFinish: function () {$("#drag-hz").addClass("back-hz");$("#drag-hz").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-hz', function(){
$("#drag-hz").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-hz><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Cloud Two</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-cloud.png><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-infra.png><img src=sq-data.png><img src=sq-lab.png><span class=invl><strong>Size</strong>: 256 cores/6 nodes</span></p>',
onStart: function () {$("#drag-hz").removeClass("dragshadow"); $("#drag-hz").removeClass("back-hz");;},
onFinish: function () {$("#drag-hz").addClass("back-hz");$("#drag-hz").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-hz', function(){
$("#drag-hz").flippy({ direction:'LEFT', light:0, content:'<span id=goback-hz><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-hz").removeClass("dragshadow"); $("#drag-hz").removeClass("back-hz");},
onFinish: function () {$("#drag-hz").addClass("front-hz"); $("#drag-hz").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-gv', function(){
ga('send', 'event', 'cardflip', 'BoxQueue');
$("#drag-gv").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-gv><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Boxqueue</span><p class=prose><strong>Advisor</strong><br><br>Boxqueue is a startup focusing on rapid provisioning and intra-infra orchestration in the cloud space. </p><p class=prose><strong>Dates</strong> 2013 - Current<br><strong>Status</strong> Development<br><a href=http://www.boxqueue.com class=cardlink target=_blank>www.boxqueue.com</a>',
onStart: function () {$("#drag-gv").removeClass("dragshadow"); $("#drag-gv").removeClass("front-gv");},
onFinish: function () {$("#drag-gv").addClass("back-gv");$("#drag-gv").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-gv', function(){
$("#drag-gv").flippy({ direction:'LEFT', light:0, content:'<span id=goback-gv><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-gv").removeClass("dragshadow"); $("#drag-gv").removeClass("back-gv");},
onFinish: function () {$("#drag-gv").addClass("front-gv"); $("#drag-gv").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-ub', function(){
ga('send', 'event', 'cardflip', 'fuxnux');
$("#drag-ub").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-ub><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Fuxnux</span><p class=prose><strong>Cartoonist</strong><br>I always wanted to draw a cartoon strip, but could never focus enough on the art. Now the Internet has lowered the artistic bar so *impossibly* low, I think I can pull it off now. </span><p class=prose><strong>Dates</strong> 2017 sometime<br>',
onStart: function () {$("#drag-ub").removeClass("dragshadow"); $("#drag-ub").removeClass("front-ub");},
onFinish: function () {$("#drag-ub").addClass("back-ub");$("#drag-ub").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-ub', function(){
$("#drag-ub").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-ub><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>r</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-win.png><img src=sq-eng.png><img src=sq-infra.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><span class=invl><strong>Users</strong>: 90,000</span></p>',
onStart: function () {$("#drag-ub").removeClass("dragshadow"); $("#drag-ub").removeClass("back-ub");;},
onFinish: function () {$("#drag-ub").addClass("back-ub");$("#drag-ub").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-ub', function(){
$("#drag-ub").flippy({ direction:'LEFT', light:0, content:'<span id=goback-ub><img src=flipx.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-ub").removeClass("dragshadow"); $("#drag-ub").removeClass("back-ub");},
onFinish: function () {$("#drag-ub").addClass("front-ub"); $("#drag-ub").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-ww', function(){
ga('send', 'event', 'cardflip', 'Distechnical');
$("#drag-ww").flippy({ direction:'LEFT', color_target : '#CCCCCC', light:0,
content:'<span id=gofront-ww><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Distechnical</span><p class=prose><strong>Blog</strong><br>My peronal blog, named Distechnical, covers technology from the point of view of of long-term transformation, disruption, and change as a constant.  </span><p class=prose><strong>Dates</strong> 2005 - Current<br><strong>Status</strong> In Production<br><a href=http://www.distechnical.com class=cardlink target=_blank>www.distechnical.com</a>',
onStart: function () {$("#drag-ww").removeClass("dragshadow"); $("#drag-ww").removeClass("front-ww");},
onFinish: function () {$("#drag-ww").addClass("back-ww");$("#drag-ww").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-ww', function(){
$("#drag-ww").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-ww><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Watch The Wire</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-social.png><img src=sq-cloud.png><img src=sq-lamp.png><img src=sq-win.png><br><img src=sq-infra.png><img src=sq-ui.png><img src=sq-data.png><img src=sq-pub.png></p>',
onStart: function () {$("#drag-ww").removeClass("dragshadow"); $("#drag-ww").removeClass("back-ww");;},
onFinish: function () {$("#drag-ww").addClass("back-ww");$("#drag-ww").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-ww', function(){
$("#drag-ww").flippy({ direction:'LEFT', light:0, color_target: '#595a7b', content:'<span id=goback-ww><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-ww").removeClass("dragshadow"); $("#drag-ww").removeClass("back-ww");},
onFinish: function () {$("#drag-ww").addClass("front-ww"); $("#drag-ww").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-rc', function(){
ga('send', 'event', 'cardflip', 'rootcloud');
$("#drag-rc").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-rc><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>root.cloud</span><p class=prose><strong>Lead Tinkerer</strong><br>This is my cloud lab, where I build things like toasters that write poetry or design cybernetic implants for Christmas trees. I even designed a font or two. Really mad science. Everyone is invited...fun stuff.  </span><p class=prose><a href=http://root.cloud class=cardlink target=_blank>root.cloud</a>',
onStart: function () {$("#drag-rc").removeClass("dragshadow"); $("#drag-rc").removeClass("front-rc");},
onFinish: function () {$("#drag-rc").addClass("back-rc");$("#drag-rc").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-rc', function(){
$("#drag-rc").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-rc><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>GorillaTeach</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-social.png><img src=sq-lamp.png><br><img src=sq-pub.png><img src=sq-lab.png></p>',
onStart: function () {$("#drag-rc").removeClass("dragshadow"); $("#drag-rc").removeClass("back-rc");;},
onFinish: function () {$("#drag-rc").addClass("back-rc");$("#drag-rc").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-rc', function(){
$("#drag-rc").flippy({ direction:'LEFT', light:0, content:'<span id=goback-rc><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-rc").removeClass("dragshadow"); $("#drag-rc").removeClass("back-rc");},
onFinish: function () {$("#drag-rc").addClass("front-rc"); $("#drag-rc").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-am', function(){
ga('send', 'event', 'cardflip', 'AttendeeManagement');
$("#drag-am").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-am><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>AMS</span><p class=prose><strong>Chief Architect</strong><br>Attendee Managememt was a white-label event planning system for enterprises. It handled enrollment, course selection, testing, surveying, and event planning down to the seating arrangements for thousands of attendees. </span><p class=prose><strong>Dates</strong> 2001 - 2008<br><strong>Status</strong> Retired<br>',
onStart: function () {$("#drag-am").removeClass("dragshadow"); $("#drag-am").removeClass("front-am");},
onFinish: function () {$("#drag-am").addClass("back-am");$("#drag-am").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-am', function(){
$("#drag-am").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-am><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>AMS</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-lamp.png><img src=sq-win.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><span class=invl><strong>Users</strong>: 130,000</span></p>',
onStart: function () {$("#drag-am").removeClass("dragshadow"); $("#drag-am").removeClass("back-am");;},
onFinish: function () {$("#drag-am").addClass("back-am");$("#drag-am").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-am', function(){
$("#drag-am").flippy({ direction:'LEFT', light:0, content:'<span id=goback-am><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-am").removeClass("dragshadow"); $("#drag-am").removeClass("back-am");},
onFinish: function () {$("#drag-am").addClass("front-am"); $("#drag-am").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-tj', function(){
ga('send', 'event', 'cardflip', 'TrincollJournal');
$("#drag-tj").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-tj><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Trincoll Journal</span><p class=prose><strong>Editor-In-Chief</strong><br>TJ was the first regularly-published, exclusively-online Web magazine, starting at Trinity College in 1993 on NCSA Mosaic. Yes, Mosaic.  </span><p class=prose><strong>Dates</strong> 1993-1996<br><strong>Status</strong> Archived<br>',
onStart: function () {$("#drag-tj").removeClass("dragshadow"); $("#drag-tj").removeClass("front-tj");},
onFinish: function () {$("#drag-tj").addClass("back-tj");$("#drag-tj").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-tj', function(){
$("#drag-tj").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-tj><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Trincoll Journal</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-pub.png></p>',
onStart: function () {$("#drag-tj").removeClass("dragshadow"); $("#drag-tj").removeClass("back-tj");;},
onFinish: function () {$("#drag-tj").addClass("back-tj");$("#drag-tj").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-tj', function(){
$("#drag-tj").flippy({ direction:'LEFT', light:0, content:'<span id=goback-tj><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-tj").removeClass("dragshadow"); $("#drag-tj").removeClass("back-tj");},
onFinish: function () {$("#drag-tj").addClass("front-tj"); $("#drag-tj").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-g2', function(){
ga('send', 'event', 'cardflip', 'Klipbrd');
$("#drag-g2").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-g2><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>General Virtual</span><p class=prose><strong>Advisor</strong><br>The spiritual successor to IdeaDev, GV provides deep experience with trending technologies. Today that means IoT, chatbots, AI, high-availability infra, really big data, and apps that work for anyone, anywhere, anytime, on any device. Plus old-school stuff, if that is what you want...</span><p class=prose><a href=http://www.generalvirtual.com class=cardlink target=_blank>generalvirtual.com</a>',
onStart: function () {$("#drag-g2").removeClass("dragshadow"); $("#drag-g2").removeClass("front-g2");},
onFinish: function () {$("#drag-g2").addClass("back-g2");$("#drag-g2").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-g2', function(){
$("#drag-g2").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-g2><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Trincoll Journal</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-pub.png></p>',
onStart: function () {$("#drag-g2").removeClass("dragshadow"); $("#drag-g2").removeClass("back-g2");;},
onFinish: function () {$("#drag-g2").addClass("back-g2");$("#drag-g2").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-g2', function(){
$("#drag-g2").flippy({ direction:'LEFT', light:0, content:'<span id=goback-g2><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-g2").removeClass("dragshadow"); $("#drag-g2").removeClass("back-g2");},
onFinish: function () {$("#drag-g2").addClass("front-g2"); $("#drag-g2").addClass("dragshadow");
}
}); }); });
$(function() {
$(document).on('click', '#goback-ia', function(){
ga('send', 'event', 'cardflip', 'iasqu');
$("#drag-ia").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-ia><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>iasqu</span><p class=prose><strong>Advisor</strong><br>Publish smart questions that work on any technology, live, from phones to TVs -- with live feedback and analysis baked into the widget. Available for brands, content creators, publishers and app designers as a high-capacity, low-lag service.</span><p class=prose><a href=http://www.iasqu.com class=cardlink target=_blank>www.iasqu.com</a></p>',
onStart: function () {$("#drag-ia").removeClass("dragshadow"); $("#drag-ia").removeClass("front-ia");},
onFinish: function () {$("#drag-ia").addClass("back-ia");$("#drag-ia").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click', '#gomid-ia', function(){
$("#drag-ia").flippy({ direction:'LEFT', light:0,
content:'<span id=gofront-ia><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Trincoll Journal</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-pub.png></p>',
onStart: function () {$("#drag-ia").removeClass("dragshadow"); $("#drag-ia").removeClass("back-ia");;},
onFinish: function () {$("#drag-ia").addClass("back-ia");$("#drag-ia").addClass("dragshadow");}
}); }); });
$(function() {
$(document).on('click' ,'#gofront-ia', function(){
$("#drag-ia").flippy({ direction:'LEFT', light:0, content:'<span id=goback-ia><img src=flip.png  hspace=4 vspace=4></span>',
onStart: function () {$("#drag-ia").removeClass("dragshadow"); $("#drag-ia").removeClass("back-ia");},
onFinish: function () {$("#drag-ia").addClass("front-ia"); $("#drag-ia").addClass("dragshadow");
}
}); }); });
</script>
    </body>
</html>
