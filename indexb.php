<?php
$t9 = $_SERVER['DOCUMENT_ROOT'];
$moof="$t9/fiplog.log";
$logline = date("Y-m-d H:i:s") . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . "FRANK" . "\t" .  $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$mooq = file_put_contents($moof, $logline, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
<title>Frank Sikernitsky</title>
<meta name="description" content="A very unique site highlighting projects and products by noted engineer and entrepreneur Frank Sikernitsky">

<meta name="apple-mobile-web-app-capable" content="yes" />
<!--meta name = "viewport" content = "width = 980"/-->
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery/css/custom-theme/jquery-ui-1.8.20.custom.css" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="ficon16.png" sizes="16x16">
<link rel="icon" type="image/png" href="ficon32.png" sizes="32x32">
<script src="jquery/js/jquery-1.7.2.min.js"></script>
<script src="jquery/js/jquery-ui-1.8.20.custom.min.js"></script>
<script src="jquery/js/jquery.ui.touch-punch.min.js"></script>
<script src="jquery/js/jquery.flippy.min.js"></script>
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


		html {
  background: #666666 url(bg.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


body {
	height:100%;
	width:100%;

	font-family: 'Open Sans', 'Lucida Grande', Helvetica, Arial;

	}

strong {
	font-weight:700;
}

.bigbox {
	display:block;
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	margin:0;
	}

.menuitem
	{
	font-size:14px;
	}

.aoncard, .aoncard a:link, .aoncard a:visited
	{
	color:#111111 !important;
	text-decoration:none;
	}

.aoncard a:hover
	{
	color:#444444 !important;
	}


.topribbon {
	position:absolute;
	width:100%;
	padding:4px;
	color:#FFF;
	border: 0;
	height:57px;
	font-family: 'Open Sans', Lucida Grande, Helvetica;
	font-size: 10pt;
	text-align: center;
	}

	.divinnerbox
	{ -moz-border-radius: 8px;
		-webkit-border-radius: 8px;
		-khtml-border-radius: 8px;
		border-radius: 8px;
}

	.ui-dialog {
	border:0;
  -moz-box-shadow:    1px 1px 6px 2px #222;
  -webkit-box-shadow: 1px 1px 6px 2px #222;
  box-shadow:         1px 1px 6px 2px #222;
}

.dragshadow {
border:0;
  -moz-box-shadow:    1px 1px 6px 2px #222;
  -webkit-box-shadow: 1px 1px 6px 2px #222;
  box-shadow:         1px 1px 6px 2px #222;
  -webkit-appearance: none;
  border-radius:1px;

}

.ui-widget-content {
	font-family: 'Open Sans', Lucida Grande, Helvetica, sans-serif; font-size: 14pt;
}

img {
border:0}

a{
outline: none;
  -moz-outline-style: none;}

.bodyprose {

	color:#FFFFFF;
	font-family: 'Open Sans', Lucida Grande, Helvetica, sans-serif;
	font-size: 9pt;
}

.titlemajor {
	font-size: 14pt;
	font-weight:bold;
}

.titleminor {
	font-size:12pt;
}

.ttlspc {
	font-size: 12pt;
	font-weight: bold;
padding-left: 6px;
vertical-align:14px;
color:#444;
}

.invl {
	display:block;
	padding:4px;
	font-size:9pt;
}

.invn {
	display:block;
	padding:4px;
	font-size:9pt;
}

.cardtitle {
	font-size: 12pt;
	font-weight: bold;
}

.divact1 {
	text-align:center;width:100px;float:left;
}

.divact2 {
	text-align:center;width:100px;float:left;

}

.divact3 {
	text-align:center;width:100px;float:left;padding-top:16px;

}

.divact4 {
	text-align:center;width:100px;float:left;padding-top:16px;

}

.actb { padding-top:6px;}

.is_x {
	height:32px;
	vertical-align:top;
	padding-top:4px;
}

.boxprose {
	font-size:10pt;
	color:#EEE;
	margin: 2px 10px 8px 10px;
}

.prose {
	font-size:8pt;
	color:#444;
	margin: 2px 10px 2px 10px;
}

.dragbase {
	font-family: 'Open Sans', Lucida Grande, Helvetica, Arial, sans-serif; font-size: 10pt;
}

.cardlink {
	-moz-box-shadow:inset 0px 1px 3px 0px #d1d1d1;
	-webkit-box-shadow:inset 0px 1px 3px 0px #d1d1d1;
	box-shadow:inset 0px 1px 3px 0px #d1d1d1;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e6e6e6), color-stop(1, #d1cdd1));
	background:-moz-linear-gradient(top, #e6e6e6 5%, #d1cdd1 100%);
	background:-webkit-linear-gradient(top, #e6e6e6 5%, #d1cdd1 100%);
	background:-o-linear-gradient(top, #e6e6e6 5%, #d1cdd1 100%);
	background:-ms-linear-gradient(top, #e6e6e6 5%, #d1cdd1 100%);
	background:linear-gradient(to bottom, #e6e6e6 5%, #d1cdd1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e6e6e6', endColorstr='#d1cdd1',GradientType=0);
	background-color:#e6e6e6;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:2px solid #B9B5B5;
	display:inline-block;
	cursor:pointer;
	margin-top:4px;
	color:#303030 !important;
	font-family:arial;
	font-size:11px;
	font-weight:bold;
	padding:2px 2px;
	text-decoration:none;
	width: 190px;
	text-align: center;
}

}

.topbutton {
	position:absolute;
	top:0px;
	left:825px;
	height:55px;
	width:110px;
	float:right;
	font-size: 8pt;
	text-align:center;
	padding-left:8px;
	padding-right:18px;
}

.topicon {
	height:42px;
	width:70px;
	background-image:url('topicons.png');
}


.shuf {background-position:0px 0px;}
.tmln {background-position:-68px 0px;}
.txtv {background-position:-151px 0px;}
.cttm {background-position:-232px 0px;}
.abot {background-position:-306px 0px;}




.front-ff { border:0; background:#222 url('ff.png') no-repeat left top !important; color:#fff !important; }
.back-ff { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-sp { border:0; background:#222 url('sp.png') no-repeat left top !important; color:#fff !important; }
.back-sp { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-gt { border:0; background:#222 url('gt.png') no-repeat left top !important; color:#fff !important; }
.back-gt { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-am { border:0; background:#222 url('am.png') no-repeat left top !important; color:#fff !important; }
.back-am { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-hd { border:0; background:#222 url('hd.png') no-repeat left top !important; color:#fff !important; }
.back-hd { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-tw { border:0; background:#222 url('tw.png') no-repeat left top !important; color:#fff !important; }
.back-tw { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-io { border:0; background:#222 url('io.png') no-repeat left top !important; color:#fff !important; }
.back-io { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-id { border:0; background:#222 url('id.png') no-repeat left top !important; color:#fff !important; }
.back-id { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-tj { border:0; background:#222 url('tj.png') no-repeat left top !important; color:#fff !important; }
.back-tj { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-ww { border:0; background:#595a7b url('ww.png') no-repeat left top !important; color:#fff !important; }
.back-ww { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}


.front-gv { border:0; background:#222 url('gv.png') no-repeat left top !important; color:#fff !important; }
.back-gv { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-hz { border:0; background:#222 url('hz.png') no-repeat left top !important; color:#fff !important; }
.back-hz { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-ub { border:0; background:#222 url('ub.png') no-repeat left top !important; color:#fff !important; }
.back-ub { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-ia { border:0; background:#222 url('ia.png') no-repeat left top !important; color:#fff !important; }
.back-ia { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-kb { border:0; background:#222 url('kb.png') no-repeat left top !important; color:#fff !important; }
.back-kb { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}


#drag-tj { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:389px; left:26px;}

#drag-hd { width: 220px; height: 220px; background-size:220px !important; position:absolute !important; top:230px; left:468px; }

#drag-tw { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:96px; left:413px; }

#drag-ff { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:334px; left:438px; }

#drag-sp { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:372px; left:286px; }

#drag-ww { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:274px; left:60px;}

#drag-id { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:70px; left:28px;}


#drag-gv { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:122px; left:149px;}

#drag-hz { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:396px; left:123px;}

#drag-io { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:274px; left:60px;}

#drag-am { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:211px; left:17px;}

#drag-gt { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:72px; left:343px;}

#drag-ub { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:379px; left:465px;}

#drag-kb { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:257px; left:184px;}

#drag-ia { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:206px; left:379px;}

#drop-menu ul
{
list-style-type:none;
margin:0;
padding:0;
}

#drop-menu li
{ height:48px;
	margin-bottom:6px;
}
#drop-menu li a
{
	display:block;
	width:275px;
	background: url('ibutton.png') no-repeat left top;
	text-decoration:none;
	font-size:12pt;
	padding:10px 0px 10px 0px;
	height:57px
	display:inline;
	text-align:center;
}

.ui-dialog-content {
	padding: 0.5em !important;
}


.noTitleStuff .ui-dialog-titlebar {display:none}


#drop-menu li a hover
{


text-decoration:none;
}

.icoico {

	height:61px;
	width:65px;
	 align:baseline;
	}

	</style>
<script>

	$(function() {

     $( "#drag-io" ).draggable({ drag: ga('send', 'event', 'carddrag', 'IntranetOffice'), opacity: 0.35 });
     $( "#drag-sp" ).draggable({ drag: ga('send', 'event', 'carddrag', 'Author'), opacity: 0.35 });
     $( "#drag-gv" ).draggable({ drag: ga('send', 'event', 'carddrag', 'BoxQueue'), opacity: 0.35 });
     $( "#drag-tw" ).draggable({ drag: ga('send', 'event', 'carddrag', 'Window'), opacity: 0.35 });
     $( "#drag-id" ).draggable({ drag: ga('send', 'event', 'carddrag', 'IdeaDev'), opacity: 0.35 });
     $( "#drag-gt" ).draggable({ drag: ga('send', 'event', 'carddrag', 'rootcloud'), opacity: 0.35 });
     $( "#drag-tj" ).draggable({ drag: ga('send', 'event', 'carddrag', 'TrincollJournal'), opacity: 0.35 });
    // $( "#drag-ww" ).draggable({ drag: ga('send', 'event', 'carddrag', 'Distechnical'), opacity: 0.35 });
     $( "#drag-hd" ).draggable({ drag: ga('send', 'event', 'carddrag', 'HeresDinner'), opacity: 0.35 });
     $( "#drag-ff" ).draggable({ drag: ga('send', 'event', 'carddrag', 'FitFiler'), opacity: 0.35 });
     $( "#drag-am" ).draggable({ drag: ga('send', 'event', 'carddrag', 'AttendeeManagement'), opacity: 0.35 });
     $( "#drag-hz" ).draggable({ drag: ga('send', 'event', 'carddrag', 'HobokenZoo'), opacity: 0.35 });
     $( "#drag-ub" ).draggable({ drag: ga('send', 'event', 'carddrag', 'fuxnux'), opacity: 0.35 });
     $( "#drag-ia" ).draggable({ drag: ga('send', 'event', 'carddrag', 'iasqu'), opacity: 0.35 });
     $( "#drag-kb" ).draggable({ drag: ga('send', 'event', 'carddrag', 'Klipbrd'), opacity: 0.35 });
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

			$( "#xtact" ).dialog({
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
			width:620,
			height: 420,
			show: { effect: 'fade', duration: 500 } ,
			hide: { effect: 'fade', duration: 500 }
			 });
});


	$(document).on('click' ,'#menubtn', function() {
		$( "#dialog" ).dialog("open");
	});

	$(document).on('click' ,'#xtactbtn', function() {
		$( "#xtact" ).dialog("open");
	});

	$(document).on('click' ,'#bioboxbtn', function() {
		ga('send', 'event', 'mainlink', 'biobox');
		$( "#biobox" ).dialog("open");
	});

	$(document).on('click' ,'#closeme', function() {
		$( "#dialog" ).dialog("close");
	});

	$(document).on('click' ,'.cardlink',function() {
        ga('send', 'event', 'cardlink', 'offsite');
    });

    $(document).on('click' ,'.golinkedin',function() {
        ga('send', 'event', 'mainlink', 'linkedin');
    });



$(document).on('click', '#lineme', function () {

		$("#dialog").dialog("close");

   $("#drag-tj").animate({top: 399, left: 26}, { duration: 400, queue: false }).css("z-index","5");
   $("#drag-tw").animate({top: 96, left: 413}, { duration: 400, queue: false }).css("z-index","2");
   $("#drag-io").animate({top: 274, left: 60}, { duration: 400, queue: false }).css("z-index","8");
   $("#drag-id").animate({top: 77, left: 204}, { duration: 400, queue: false }).css("z-index","6");
   $("#drag-am").animate({top: 211, left: 18}, { duration: 400, queue: false }).css("z-index","9");
   $("#drag-hd").animate({top: 230, left: 468}, { duration: 400, queue: false }).css("z-index","3");
   $("#drag-gv").animate({top: 90, left:47}, { duration: 400, queue: false }).css("z-index","4");
   $("#drag-hz").animate({top: 386, left:123}, { duration: 400, queue: false }).css("z-index","11");
   //$("#drag-ww").animate({top: 260, left:200}, { duration: 400, queue: false }).css("z-index","1");
   $("#drag-gt").animate({top: 92, left:129}, { duration: 400, queue: false }).css("z-index","7");
   $("#drag-sp").animate({top: 402, left:286 }, { duration: 400, queue: false }).css("z-index","10");
   $("#drag-ff").animate({top: 334, left:428 }, { duration: 400, queue: false }).css("z-index","14");
   $("#drag-ub").animate({top: 399, left:469 }, { duration: 400, queue: false }).css("z-index","13");
   $("#drag-kb").animate({top: 242, left:273 }, { duration: 400, queue: false }).css("z-index","12");
   $("#drag-ia").animate({top: 204, left:357 }, { duration: 400, queue: false }).css("z-index","15");

});

$(document).on('click', '#clickme', function () {
	shuffleit();
});

function shuffleit() {

	$("#dialog").dialog("close");

    $("#drag-ub").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    $("#drag-hz").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-am").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-ff").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-hd").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-gt").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
   			$("#drag-tj").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-id").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-tw").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-gv").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    	    $("#drag-sp").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
    	    	    $("#drag-io").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
		    	    $("#drag-ia").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
		    	    $("#drag-kb").animate({
       top: Math.floor((Math.random()*310)+60),
       left: Math.floor((Math.random()*420)+50)
    }, { duration: 400, queue: false });
};


$(function() {
		$(document).on('click', '#goback-ff', function(){
				ga('send', 'event', 'cardflip', 'FitFiler');
				$("#drag-ff").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-ff><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>FitFiler</span><p class=prose><strong>Advisor</strong><br>FitFiler is a family of mobile technologies that unites health data tracking with group-based social tools to yield a next generation approach to managing wellness.</span><p class=prose><strong>Dates</strong> 2011 - Current<br><strong>Status</strong> Pilot<br><a href=http://www.fitfiler.com class=cardlink target=_blank>www.fitfiler.com</a>',
					onStart: function () {$("#drag-ff").removeClass("dragshadow"); $("#drag-ff").removeClass("front-ff");},
					onFinish: function () {$("#drag-ff").addClass("back-ff");$("#drag-ff").addClass("dragshadow");}
					});   });   });

					$(function() {
		$(document).on('click', '#gomid-ff', function(){
				$("#drag-ff").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-ff><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>FitFiler</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-social.png><img src=sq-cloud.png><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-infra.png><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-startup.png><span class=invl><strong>Users</strong>: 6,000 pilot</span></p>',
					onStart: function () {$("#drag-ff").removeClass("dragshadow"); $("#drag-ff").removeClass("back-ff");;},
					onFinish: function () {$("#drag-ff").addClass("back-ff");$("#drag-ff").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-ff', function(){
					$("#drag-ff").flippy({ direction:'LEFT', light:0,  color_target:'#336633', content:'<span id=goback-ff><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-ff").removeClass("dragshadow"); $("#drag-ff").removeClass("back-ff");},
					onFinish: function () {$("#drag-ff").addClass("front-ff"); $("#drag-ff").addClass("dragshadow");}
					});   });   });

			$(function() {
		$(document).on('click', '#goback-id', function(){
				ga('send', 'event', 'cardflip', 'IdeaDev');
				$("#drag-id").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-id><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>IdeaDev</span><p class=prose><strong>Managing Director</strong><br><br>Based in NYC, IdeaDev was a software design agency. Major clients included Pfizer, GE, AAA, and Citibank.  </span><p class=prose><strong>Dates</strong> 1999 - 2007<br><strong>Status</strong> Retired<br>',
					onStart: function () {$("#drag-id").removeClass("dragshadow"); $("#drag-id").removeClass("front-id");},
					onFinish: function () {$("#drag-id").addClass("back-id");$("#drag-id").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gomid-id', function(){
					$("#drag-id").flippy({ direction:'TOP', light:0, content:'<span id=gofront-id><img src=flip.png  hspace=4 vspace=4></span><span class=ttlspc>IdeaDev</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-win.png><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-startup.png><img src=sq-lab.png><span class=invl><strong>Fortune 500 Clients</strong>: 6</span></p>',
  				onStart: function () {$("#drag-id").removeClass("dragshadow"); $("#drag-id").removeClass("back-id");},
					onFinish: function () {$("#drag-id").addClass("back-id");$("#drag-id").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-id', function(){
					$("#drag-id").flippy({ direction:'LEFT', light:0, color_target:'#6666cc', content:'<span id=goback-id><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-id").removeClass("dragshadow"); $("#drag-id").removeClass("back-id");},
					onFinish: function () {$("#drag-id").addClass("front-id"); $("#drag-id").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click', '#goback-hd', function(){
				ga('send', 'event', 'cardflip', 'HeresDinner');
				$("#drag-hd").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-hd><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>HeresDinner</span><p class=prose><strong>Investor</strong><br>HeresDinner is an outsourced food delivery service, combining online ordering with boots on the ground. Piloted for two years in Princeton, NJ, HD is planning re-release in the Northeast with a new emphasis on mobility. </span><p class=prose><strong>Dates</strong> 2005 - Current<br><strong>Status</strong> Post-Pilot<br></p>',
					onStart: function () {$("#drag-hd").removeClass("dragshadow"); $("#drag-hd").removeClass("front-hd");},
					onFinish: function () {$("#drag-hd").addClass("back-hd");$("#drag-hd").addClass("dragshadow");}
					});   });   });

					$(function() {
		$(document).on('click' ,'#gomid-hd', function(){
					$("#drag-hd").flippy({ direction:'LEFT', light:0, content:'<span id=gofront-hd><img src=flip.png  hspace=4 vspace=4></span><span class=ttlspc>HeresDinner</span><p class=prose><span class=invl><strong>Involvement</strong></span> <img src=sq-mobile.png><img src=sq-social.png><img src=sq-cloud.png><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-data.png><img src=sq-ui.png><img src=sq-prod.png><img src=sq-startup.png><span class=invl><strong>Users</strong>: 700 pilot</span></p>',
  				onStart: function () {$("#drag-hd").removeClass("dragshadow"); $("#drag-hd").removeClass("back-hd");},
					onFinish: function () {$("#drag-hd").addClass("back-hd");$("#drag-hd").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click' ,'#gofront-hd', function(){
					$("#drag-hd").flippy({ direction:'LEFT', light:0, content:'<span id=goback-hd><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-hd").removeClass("dragshadow"); $("#drag-hd").removeClass("back-hd");},
					onFinish: function () {$("#drag-hd").addClass("front-hd"); $("#drag-hd").addClass("dragshadow");}
					});   });   });




$(function() {
		$(document).on('click', '#goback-sp', function(){
				ga('send', 'event', 'cardflip', 'Author');
				$("#drag-sp").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-sp><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Author</span><br><p class=prose><strong><a href=http://supplysidesocialmedia.com target=_blank class=aoncard>Supply Side Social Media</a></strong><br>This book explores the economics of social media, proposing alternate ways to generate revenue.<i> Q4 2016</i><br><strong>The Post-PC World Survival Guide</strong><br>The book explores 50 years of computing, and how recent developments have entirely changed the way services are designed and consumed. <i>Q3 2016</i>',
					onStart: function () {$("#drag-sp").removeClass("dragshadow"); $("#drag-sp").removeClass("front-sp");},
					onFinish: function () {$("#drag-sp").addClass("back-sp");$("#drag-sp").addClass("dragshadow");
						}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-sp', function(){
					$("#drag-sp").flippy({ direction:'LEFT', light:0, content:'<span id=goback-sp><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-sp").removeClass("dragshadow"); $("#drag-sp").removeClass("back-sp");},
					onFinish: function () {$("#drag-sp").addClass("front-sp"); $("#drag-sp").addClass("dragshadow");
						}
					});   });   });

$(function() {
		$(document).on('click', '#goback-tw', function(){
				ga('send', 'event', 'cardflip', 'Window');
				$("#drag-tw").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-tw><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>The Window</span><p class=prose><strong>Creator, Editor</strong><br>The Window is a Philosophy resource created in 1995 while I was a student at Trinity College. In the intervening 17 years, it is now widely cited as a primary source on the Web. </span><p class=prose><strong>Dates</strong> 1995 - Current<br><strong>Status</strong> Online<br><a href=http://www.trincoll.edu/depts/phil/philo/index.html class=cardlink target=_blank>The Window</a> ',
					onStart: function () {$("#drag-tw").removeClass("dragshadow"); $("#drag-tw").removeClass("front-tw");},
					onFinish: function () {$("#drag-tw").addClass("back-tw");$("#drag-tw").addClass("dragshadow");}
					});   });   });

					$(function() {
		$(document).on('click' ,'#gomid-tw', function(){
					$("#drag-tw").flippy({ direction:'LEFT', light:0, content:'<span id=gofront-tw><img src=flip.png  hspace=4 vspace=4></span><span class=ttlspc>The Window</span><p class=prose><span class=invl><strong>Involvement</strong></span><br><img src=sq-lamp.png><img src=sq-eng.png><img src=sq-data.png><img src=sq-ui.png><img src=sq-pub.png><img src=sq-lab.png><span class=invl><strong>Online For</strong>: 17 years</span></p>',
  				onStart: function () {$("#drag-tw").removeClass("dragshadow"); $("#drag-tw").removeClass("back-tw");},
					onFinish: function () {$("#drag-tw").addClass("back-tw");$("#drag-tw").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-tw', function(){
					$("#drag-tw").flippy({ direction:'LEFT', light:0, color_target:'#3366cc', content:'<span id=goback-tw><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-tw").removeClass("dragshadow"); $("#drag-tw").removeClass("back-tw");},
					onFinish: function () {$("#drag-tw").addClass("front-tw"); $("#drag-tw").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click', '#goback-io', function(){
				ga('send', 'event', 'cardflip', 'IntranetOffice');
				$("#drag-io").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-io><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>IntranetOffice</span><p class=prose><strong>CTO, Lead Architect, Evangelist</strong><br>I/O was a collaboration and communication platform I created in 1997, which eventually spawned a family of knowledge-management and CRM products for the Fortune 500. </p><p class=prose><strong>Dates</strong> 1997 - 2004<br><strong>Status</strong> Retired<br>',
					onStart: function () {$("#drag-io").removeClass("dragshadow"); $("#drag-io").removeClass("front-io");},
					onFinish: function () {$("#drag-io").addClass("back-io");$("#drag-io").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gomid-io', function(){
					$("#drag-io").flippy({ direction:'LEFT', light:0, content:'<span id=gofront-io><img src=flip.png hspace=4 vspace=4></span><span class=ttlspc>IntranetOffice</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-win.png><img src=sq-eng.png><img src=sq-data.png><img src=sq-ui.png><img src=sq-data.png><br><img src=sq-prod.png><img src=sq-startup.png></p>',
  				onStart: function () {$("#drag-io").removeClass("dragshadow"); $("#drag-io").removeClass("back-io");},
					onFinish: function () {$("#drag-io").addClass("back-io");$("#drag-io").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-io', function(){
					$("#drag-io").flippy({ direction:'LEFT', light:0, color_target:'#d32700', content:'<span id=goback-io><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-io").removeClass("dragshadow"); $("#drag-io").removeClass("back-io");},
					onFinish: function () {$("#drag-io").addClass("front-io"); $("#drag-io").addClass("dragshadow");
					}
					});   });   });


$(function() {
		$(document).on('click', '#goback-hz', function(){
				ga('send', 'event', 'cardflip', 'HobokenZoo');
				$("#drag-hz").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-hz><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Hoboken Zoo</span><p class=prose><strong>Director</strong><br>The Zoo is about kids, imagination, technology, engineering, and the community.</p> <p class=prose><strong>Dates</strong> 2015 - Current<br><strong>Status</strong> Building Curriculum<br>',
					onStart: function () {$("#drag-hz").removeClass("dragshadow"); $("#drag-hz").removeClass("front-hz");},
					onFinish: function () {$("#drag-hz").addClass("back-hz");$("#drag-hz").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click', '#gomid-hz', function(){
				$("#drag-hz").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-hz><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Cloud Two</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-cloud.png><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-infra.png><img src=sq-data.png><img src=sq-lab.png><span class=invl><strong>Size</strong>: 256 cores/6 nodes</span></p>',
					onStart: function () {$("#drag-hz").removeClass("dragshadow"); $("#drag-hz").removeClass("back-hz");;},
					onFinish: function () {$("#drag-hz").addClass("back-hz");$("#drag-hz").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-hz', function(){
					$("#drag-hz").flippy({ direction:'LEFT', light:0, content:'<span id=goback-hz><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-hz").removeClass("dragshadow"); $("#drag-hz").removeClass("back-hz");},
					onFinish: function () {$("#drag-hz").addClass("front-hz"); $("#drag-hz").addClass("dragshadow");
					}
					});   });   });


$(function() {
		$(document).on('click', '#goback-gv', function(){
				ga('send', 'event', 'cardflip', 'BoxQueue');
				$("#drag-gv").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-gv><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Boxqueue</span><p class=prose><strong>Advisor</strong><br><br>Boxqueue is a startup focusing on rapid provisioning and intra-infra orchestration in the cloud space. </p><p class=prose><strong>Dates</strong> 2013 - Current<br><strong>Status</strong> Development<br><a href=http://www.boxqueue.com class=cardlink target=_blank>www.boxqueue.com</a>',
					onStart: function () {$("#drag-gv").removeClass("dragshadow"); $("#drag-gv").removeClass("front-gv");},
					onFinish: function () {$("#drag-gv").addClass("back-gv");$("#drag-gv").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-gv', function(){
					$("#drag-gv").flippy({ direction:'LEFT', light:0, content:'<span id=goback-gv><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-gv").removeClass("dragshadow"); $("#drag-gv").removeClass("back-gv");},
					onFinish: function () {$("#drag-gv").addClass("front-gv"); $("#drag-gv").addClass("dragshadow");
					}
					});   });   });

$(function() {
		$(document).on('click', '#goback-ub', function(){
				ga('send', 'event', 'cardflip', 'fuxnux');
				$("#drag-ub").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-ub><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Fuxnux</span><p class=prose><strong>Cartoonist</strong><br>I always wanted to draw a cartoon strip, but could never focus enough on the art. Now the Internet has lowered the artistic bar so *impossibly* low, I think I can pull it off now. </span><p class=prose><strong>Dates</strong> 2016 sometime<br>',
					onStart: function () {$("#drag-ub").removeClass("dragshadow"); $("#drag-ub").removeClass("front-ub");},
					onFinish: function () {$("#drag-ub").addClass("back-ub");$("#drag-ub").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click', '#gomid-ub', function(){
				$("#drag-ub").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-ub><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>r</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-win.png><img src=sq-eng.png><img src=sq-infra.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><span class=invl><strong>Users</strong>: 90,000</span></p>',
					onStart: function () {$("#drag-ub").removeClass("dragshadow"); $("#drag-ub").removeClass("back-ub");;},
					onFinish: function () {$("#drag-ub").addClass("back-ub");$("#drag-ub").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-ub', function(){
					$("#drag-ub").flippy({ direction:'LEFT', light:0, content:'<span id=goback-ub><img src=flipx.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-ub").removeClass("dragshadow"); $("#drag-ub").removeClass("back-ub");},
					onFinish: function () {$("#drag-ub").addClass("front-ub"); $("#drag-ub").addClass("dragshadow");
					}
					});   });   });


$(function() {
		$(document).on('click', '#goback-ww', function(){
				ga('send', 'event', 'cardflip', 'Distechnical');
				$("#drag-ww").flippy({ direction:'LEFT', color_target : '#CCCCCC', light:0,
					content:'<span id=gofront-ww><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Distechnical</span><p class=prose><strong>Blog</strong><br>My peronal blog, named Distechnical, covers technology from the point of view of of long-term transformation, disruption, and change as a constant.  </span><p class=prose><strong>Dates</strong> 2005 - Current<br><strong>Status</strong> In Production<br><a href=http://www.distechnical.com class=cardlink target=_blank>www.distechnical.com</a>',
					onStart: function () {$("#drag-ww").removeClass("dragshadow"); $("#drag-ww").removeClass("front-ww");},
					onFinish: function () {$("#drag-ww").addClass("back-ww");$("#drag-ww").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click', '#gomid-ww', function(){
				$("#drag-ww").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-ww><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Watch The Wire</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-social.png><img src=sq-cloud.png><img src=sq-lamp.png><img src=sq-win.png><br><img src=sq-infra.png><img src=sq-ui.png><img src=sq-data.png><img src=sq-pub.png></p>',
					onStart: function () {$("#drag-ww").removeClass("dragshadow"); $("#drag-ww").removeClass("back-ww");;},
					onFinish: function () {$("#drag-ww").addClass("back-ww");$("#drag-ww").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click' ,'#gofront-ww', function(){
					$("#drag-ww").flippy({ direction:'LEFT', light:0, color_target: '#595a7b', content:'<span id=goback-ww><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-ww").removeClass("dragshadow"); $("#drag-ww").removeClass("back-ww");},
					onFinish: function () {$("#drag-ww").addClass("front-ww"); $("#drag-ww").addClass("dragshadow");
					}
					});   });   });

$(function() {
		$(document).on('click', '#goback-gt', function(){
				ga('send', 'event', 'cardflip', 'rootcloud');
				$("#drag-gt").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-gt><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>root.cloud</span><p class=prose><strong>Designer</strong><br>Bedrock IoT play. Mega stealth. Stay tuned.  </span><p class=prose><strong>Dates</strong> 2016 - Current<br><strong>Status</strong> Design<br>',
					onStart: function () {$("#drag-gt").removeClass("dragshadow"); $("#drag-gt").removeClass("front-gt");},
					onFinish: function () {$("#drag-gt").addClass("back-gt");$("#drag-gt").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click', '#gomid-gt', function(){
				$("#drag-gt").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-gt><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>GorillaTeach</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-social.png><img src=sq-lamp.png><br><img src=sq-pub.png><img src=sq-lab.png></p>',
					onStart: function () {$("#drag-gt").removeClass("dragshadow"); $("#drag-gt").removeClass("back-gt");;},
					onFinish: function () {$("#drag-gt").addClass("back-gt");$("#drag-gt").addClass("dragshadow");}
					});   });   });



$(function() {
		$(document).on('click' ,'#gofront-gt', function(){
					$("#drag-gt").flippy({ direction:'LEFT', light:0, content:'<span id=goback-gt><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-gt").removeClass("dragshadow"); $("#drag-gt").removeClass("back-gt");},
					onFinish: function () {$("#drag-gt").addClass("front-gt"); $("#drag-gt").addClass("dragshadow");
					}
					});   });   });


					$(function() {
		$(document).on('click', '#goback-am', function(){
				ga('send', 'event', 'cardflip', 'AttendeeManagement');
				$("#drag-am").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-am><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>AMS</span><p class=prose><strong>Chief Architect</strong><br>Attendee Managememt was a white-label event planning system for enterprises. It handled enrollment, course selection, testing, surveying, and event planning down to the seating arrangements for thousands of attendees. </span><p class=prose><strong>Dates</strong> 2001 - 2008<br><strong>Status</strong> Retired<br>',
					onStart: function () {$("#drag-am").removeClass("dragshadow"); $("#drag-am").removeClass("front-am");},
					onFinish: function () {$("#drag-am").addClass("back-am");$("#drag-am").addClass("dragshadow");}
					});   });   });

					$(function() {
		$(document).on('click', '#gomid-am', function(){
				$("#drag-am").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-am><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>AMS</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-mobile.png><img src=sq-lamp.png><img src=sq-win.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><span class=invl><strong>Users</strong>: 130,000</span></p>',
					onStart: function () {$("#drag-am").removeClass("dragshadow"); $("#drag-am").removeClass("back-am");;},
					onFinish: function () {$("#drag-am").addClass("back-am");$("#drag-am").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-am', function(){
					$("#drag-am").flippy({ direction:'LEFT', light:0, content:'<span id=goback-am><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-am").removeClass("dragshadow"); $("#drag-am").removeClass("back-am");},
					onFinish: function () {$("#drag-am").addClass("front-am"); $("#drag-am").addClass("dragshadow");
					}
					});   });   });

$(function() {
		$(document).on('click', '#goback-tj', function(){
				ga('send', 'event', 'cardflip', 'TrincollJournal');
				$("#drag-tj").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-tj><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Trincoll Journal</span><p class=prose><strong>Editor-In-Chief</strong><br>TJ was the first regularly-published, exclusively-online Web magazine, starting at Trinity College in 1993 on NCSA Mosaic. Yes, Mosaic.  </span><p class=prose><strong>Dates</strong> 1993-1996<br><strong>Status</strong> Archived<br>',
					onStart: function () {$("#drag-tj").removeClass("dragshadow"); $("#drag-tj").removeClass("front-tj");},
					onFinish: function () {$("#drag-tj").addClass("back-tj");$("#drag-tj").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click', '#gomid-tj', function(){
				$("#drag-tj").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-tj><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Trincoll Journal</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-pub.png></p>',
					onStart: function () {$("#drag-tj").removeClass("dragshadow"); $("#drag-tj").removeClass("back-tj");;},
					onFinish: function () {$("#drag-tj").addClass("back-tj");$("#drag-tj").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click' ,'#gofront-tj', function(){
					$("#drag-tj").flippy({ direction:'LEFT', light:0, content:'<span id=goback-tj><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-tj").removeClass("dragshadow"); $("#drag-tj").removeClass("back-tj");},
					onFinish: function () {$("#drag-tj").addClass("front-tj"); $("#drag-tj").addClass("dragshadow");
					}
					});   });   });



$(function() {
		$(document).on('click', '#goback-kb', function(){
				ga('send', 'event', 'cardflip', 'Klipbrd');
				$("#drag-kb").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-kb><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>klipbrd.com</span><p class=prose><strong>Advisor</strong><br>Klipbrd is a tablet-based point-of-sale sign-in service available for a number of vertical markets.</span><p class=prose><strong>Dates</strong> 2014<br><strong>Status</strong> Active<br>',
					onStart: function () {$("#drag-kb").removeClass("dragshadow"); $("#drag-kb").removeClass("front-kb");},
					onFinish: function () {$("#drag-kb").addClass("back-kb");$("#drag-kb").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click', '#gomid-kb', function(){
				$("#drag-kb").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-kb><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Trincoll Journal</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-pub.png></p>',
					onStart: function () {$("#drag-kb").removeClass("dragshadow"); $("#drag-kb").removeClass("back-kb");;},
					onFinish: function () {$("#drag-kb").addClass("back-kb");$("#drag-kb").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click' ,'#gofront-kb', function(){
					$("#drag-kb").flippy({ direction:'LEFT', light:0, content:'<span id=goback-kb><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-kb").removeClass("dragshadow"); $("#drag-kb").removeClass("back-kb");},
					onFinish: function () {$("#drag-kb").addClass("front-kb"); $("#drag-kb").addClass("dragshadow");
					}
					});   });   });




$(function() {
		$(document).on('click', '#goback-ia', function(){
				ga('send', 'event', 'cardflip', 'iasqu');
				$("#drag-ia").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-ia><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>iasqu</span><p class=prose><strong>Advisor</strong><br>Publish smart questions that work on any technology, live, from phones to TVs. Available as an app, site, service and API.</span><p class=prose><strong>Dates</strong> 2014<br><strong>Status</strong> Active<br><a href=http://www.iasqu.com class=cardlink target=_blank>www.iasqu.com</a>',
					onStart: function () {$("#drag-ia").removeClass("dragshadow"); $("#drag-ia").removeClass("front-ia");},
					onFinish: function () {$("#drag-ia").addClass("back-ia");$("#drag-ia").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click', '#gomid-ia', function(){
				$("#drag-ia").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-ia><img src=flipx.png hspace=4 vspace=4></span><span class=ttlspc>Trincoll Journal</span><p class=prose><span class=invl><strong>Involvement</strong></span><img src=sq-lamp.png><img src=sq-eng.png><br><img src=sq-ui.png><img src=sq-data.png><img src=sq-prod.png><img src=sq-pub.png></p>',
					onStart: function () {$("#drag-ia").removeClass("dragshadow"); $("#drag-ia").removeClass("back-ia");;},
					onFinish: function () {$("#drag-ia").addClass("back-ia");$("#drag-ia").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click' ,'#gofront-ia', function(){
					$("#drag-ia").flippy({ direction:'LEFT', light:0, content:'<span id=goback-ia><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-ia").removeClass("dragshadow"); $("#drag-ia").removeClass("back-ia");},
					onFinish: function () {$("#drag-ia").addClass("front-ia"); $("#drag-ia").addClass("dragshadow");
					}
					});   });   });
</script>


</head>
<body>
     <div class="bigbox">
     <div class="topribbon" style="left:0;top:0;">
     	<div style="float:left;"><img src="innameonly.png" alt="[Frank Sikernitsky]"></div>

     </div>

     </div>


<div id="dialog" title="tools">


</div>


<!--- the thing -->


<div id="biobox" title="about frank sikernitsky" style="background-color:none !important; background-image:url(bg85.png) !important;">
<div class="divinnerbox">
<?php include('bio.html'); ?>
</div>
</div>



<div id="xtact" title="contact frank" style="background-color:none !important; background-image:url(bg85.png) !important;">
<div class="divinnerbox">
<?php include('xtact.html'); ?>
</div>
</div>







<div id="set">

<div id="drag-am" class="ui-widget-content dragshadow front-am">
<span id=goback-am><img src=flipx.png  hspace=4 vspace=4></span>
</div>

<div id="drag-tj" class="ui-widget-content dragshadow front-tj">
<span id=goback-tj><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-tw" class="ui-widget-content dragshadow front-tw">
<span id=goback-tw><img src=flip.png  hspace=4 vspace=4></span>
</div>

<!-- <div id="drag-ww" class="ui-widget-content dragshadow front-ww">
<span id=goback-ww><img src=flip.png  hspace=4 vspace=4></span>
</div> -->

<div id="drag-io" class="ui-widget-content dragshadow front-io">
<span id=goback-io><img src=flipx.png  hspace=4 vspace=4></span>
</div>

<div id="drag-sp" class="ui-widget-content dragshadow front-sp">
<span id=goback-sp><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-id" class="ui-widget-content dragshadow front-id">
<span id=goback-id><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-ub" class="ui-widget-content dragbase dragshadow front-ub">
<span id=goback-ub><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-gt" class="ui-widget-content dragshadow front-gt">
<span id=goback-gt><img src=flipm.png  hspace=4 vspace=4></span>
</div>

<div id="drag-hd" class="ui-widget-content dragshadow front-hd">
<span id=goback-hd><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-ff" class="ui-widget-content dragshadow front-ff">
<span id=goback-ff><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-gv" class="ui-widget-content dragshadow front-gv">
<span id=goback-gv><img src=flipx.png  hspace=4 vspace=4></span>
</div>


<div id="drag-hz" class="ui-widget-content dragshadow front-hz">
<span id=goback-hz><img src=flipm.png  hspace=4 vspace=4></span>
</div>

<div id="drag-kb" class="ui-widget-content dragshadow front-kb">
<span id=goback-kb><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-ia" class="ui-widget-content dragshadow front-ia">
<span id=goback-ia><img src=flip.png  hspace=4 vspace=4></span>
</div>




</div>
<div class="bodyprose" style="position:absolute; top:25px; float:right; left:600px; width:380px;">

<div class="bodyprose" style="position:relative; width:240px; padding:15px; float:right;"><!--img src="arrow.png"--><br>
<p class="titlemajor">about frank</p>
<p style="font-size:14px;">I tried to make my homepage interesting, you'll have to poke around a bit to see what I'm up to.
<p class="titlemajor">move and flip</p>
<p style="font-size:14px;">These are my major jobs and projects, on cards, spread to the left. You can drag them, sort through them, or hit <img src="flip.png" width="16" align="absbottom"> to flip the card for more info...</p>

<div style="clear:both;">
	<span class="titlemajor">or do other stuff...</span><br>
	<div id="clickme" class="divact1" style="clear:left;"><img src="shuffleit.png"><br><span class='titleminor'>shuffle</span><br>yeah, go ahead...</div>
<div id="lineme" class="divact2"><img src="straaait.png"><br><span class='titleminor'>timeline</span><br>old to new</div>
<div class="divact3" id="bioboxbtn"><img src="frank.png"><br><span class='titleminor'>fast bio</span><br>me in a popup</div>
<div class="divact4"><a href="http://www.linkedin.com/pub/frank-sikernitsky/0/148/8aa/" target="_blank" class="golinkedin"><img src="linkin.png" border=0></a><br><span class='titleminor'>profile</span><br>the conventional view</div>

</div>

</div>
</div>
</div>
    </body>
</html>
