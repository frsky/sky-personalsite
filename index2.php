<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>curriculum flipperae : frank sikernitsky</title>

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name = "viewport" content = "width = 980px"/>

<link rel="stylesheet" href="jquery/css/custom-theme/jquery-ui-1.8.20.custom.css" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<script src="jquery/js/jquery-1.7.2.min.js"></script>
<script src="jquery/js/jquery-ui-1.8.20.custom.min.js"></script>
<script src="jquery/js/jquery.ui.touch-punch.min.js"></script>
<script src="jquery/js/jquery.flippy.min.js"></script>
	<style>

body {
	height:100%;
	width:100%;
	background:#666;}

.bigbox {
	display:block;
  position:absolute;

  top:0;
  left:0;
	width:100%;
	height:100%;
	background: #666;
	}

	.menuitem
	{font-size:14px;}

.topribbon {
	position:absolute;
	width:100%;
	padding:4px;
	color:#FFF;
	background-color: #222;
	background: #222 url('barbg.png') repeat-x 0 0;
	border: 0;
	height:57px;
	font-family: Lucida Grande, Helvetica;
	font-size: 10pt;
	text-align: center;
	}


	.dragshadow {
	border:0;
  -moz-box-shadow:    2px 2px 9px 3px #333;
  -webkit-box-shadow: 2px 2px 9px 3px #333;
  box-shadow:         2px 3px 9px 3px #333;
}

.ui-widget-content {
	font-family: Lucida Grande, Helvetica; font-size: 14pt;
}


.bodyprose {

	color:#FFFFFF;
	font-family: Lucida Grande, Helvetica;
	font-size: 9pt;
}

.titlemajor {
	font-size: 14pt;
}

.titleminor {
	font-size:12pt;
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

.actb { padding-top:6px;}

.is_x {
	height:32px;
	vertical-align:top;
	padding-top:4px;
}


.prose {
	font-size:8pt;
	color:#444;
	margin: 2px 10px 2px 10px;
}

.dragbase {
	font-family: Lucida Grande, Helvetica, Verdana, Arial, sans-serif; font-size: 10pt;
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
.back-ww { border:0; background:#DDD url('ww2.png') no-repeat left top !important; color:#000 !important;}
.all-ww {background:#595a7b;}

.front-gv { border:0; background:#222 url('gv.png') no-repeat left top !important; color:#fff !important; }
.back-gv { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-c2 { border:0; background:#222 url('c2.png') no-repeat left top !important; color:#fff !important; }
.back-c2 { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}

.front-fx { border:0; background:#222 url('fx.png') no-repeat left top !important; color:#fff !important; }
.back-fx { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}


#drag-ff { width: 220px; height: 220px; background-size:220px !important; position:absolute !important; top:256px; left:386px; }

#drag-tw { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:91px; left:282px; }

#drag-hd { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:169px; left:317px; }

#drag-sp { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:65px; left:75px; }

#drag-io { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:100px; left:5px;}

#drag-id { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:127px; left:45px;}

#drag-tj { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:282px; left:37px;}

#drag-gv { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:272px; left:33px;}

#drag-fx { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:204px; left:239px;}

#drag-c2 { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:243px; left:193px;}

#drag-ww { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:190px; left:110px;}

#drag-am { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:252px; left:17px;}

#drag-gt { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:124px; left:275px;}


#drop-menu ul
{
list-style-type:none;
margin:0;
padding:0;
}

#drop-menu li a
{
display:block;width:250px;
text-decoration:none;
font-size:12pt;
padding:6px;
}

#drop-menu li a hover
{

background:#555;

}

	</style>
<script>

	$(function() {

     $( "#drag-io" ).draggable({ opacity: 0.35 });
     $( "#drag-sp" ).draggable({ opacity: 0.35 });
     $( "#drag-gv" ).draggable({ opacity: 0.35 });
     $( "#drag-tw" ).draggable({ opacity: 0.35 });
     $( "#drag-id" ).draggable({ opacity: 0.35 });
     $( "#drag-gt" ).draggable({ opacity: 0.35 });
     $( "#drag-tj" ).draggable({ opacity: 0.35 });
     $( "#drag-ww" ).draggable({ opacity: 0.35 });
     $( "#drag-hd" ).draggable({ opacity: 0.35 });
     $( "#drag-ff" ).draggable({ opacity: 0.35 });
     $( "#drag-am" ).draggable({ opacity: 0.35 });
     $( "#drag-c2" ).draggable({ opacity: 0.35 });
     $( "#drag-fx" ).draggable({ opacity: 0.35 });
     $( "#set div" ).draggable({ stack: "#set div" });
});



$(document).on('click', '#lineme', function () {

		$("#dialog").dialog("close");

   $("#drag-tj").animate({top: 65, left: 20}, { duration: 400, queue: false }).css("z-index","1");
   $("#drag-tw").animate({top: 65, left: 100}, { duration: 400, queue: false }).css("z-index","2");
   $("#drag-io").animate({top: 65, left: 180}, { duration: 400, queue: false }).css("z-index","3");
   $("#drag-id").animate({top: 65, left: 260}, { duration: 400, queue: false }).css("z-index","4");
   $("#drag-am").animate({top: 65, left: 340}, { duration: 400, queue: false }).css("z-index","5");
   $("#drag-hd").animate({top: 65, left: 420}, { duration: 400, queue: false }).css("z-index","6");
   $("#drag-gv").animate({top: 260, left:40 }, { duration: 400, queue: false }).css("z-index","7");
   $("#drag-c2").animate({top: 260, left:120 }, { duration: 400, queue: false }).css("z-index","8");
   $("#drag-ww").animate({top: 260, left:200 }, { duration: 400, queue: false }).css("z-index","9");
   $("#drag-gt").animate({top: 260, left:280 }, { duration: 400, queue: false }).css("z-index","10");
   $("#drag-sp").animate({top: 260, left:360 }, { duration: 400, queue: false }).css("z-index","11");
   $("#drag-ff").animate({top: 260, left:440 }, { duration: 400, queue: false }).css("z-index","12");
   $("#drag-fx").animate({top: 65, left:20 }, { duration: 400, queue: false }).css("z-index","0");

});

$(document).on('click', '#clickme', function () {
	shuffleit();
});

function shuffleit() {

	$("#dialog").dialog("close");

    $("#drag-fx").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    $("#drag-c2").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-am").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-ff").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-hd").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-ww").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-gt").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });

   				$("#drag-tj").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-id").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-tw").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    $("#drag-gv").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    	    $("#drag-sp").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
    	    	    $("#drag-io").animate({
       top: Math.floor((Math.random()*230)+60),
       left: Math.floor((Math.random()*380)+50)
    }, { duration: 400, queue: false });
};


$(function() {
		$(document).on('click', '#goback-ff', function(){
				$("#drag-ff").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-ff><img src=flipx.png hspace=4 vspace=4></span><img src=is_mobi.png class=is_x><img src=is_mgmt.png class=is_x><img src=is_engr.png class=is_x><p class=prose><span class=cardtitle>FitFiler</span><br><strong>CTO</strong><br>FitFiler is a family of technologies that unites health data tracking with group-based social tools to yield a next generation approach to managing wellness. Aimed at a worldwide audience, there is a heavy mobility component. </span><p class=prose><strong>Dates</strong> 2011 - Current<br><strong>Status</strong> Pilot<br></p>',
					onStart: function () {$("#drag-ff").removeClass("dragshadow"); $("#drag-ff").removeClass("front-ff");},
					onFinish: function () {$("#drag-ff").addClass("back-ff");$("#drag-ff").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-ff', function(){
					$("#drag-ff").flippy({ direction:'LEFT', light:0, content:'<span id=goback-ff><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-ff").removeClass("dragshadow"); $("#drag-ff").removeClass("back-ff");},
					onFinish: function () {$("#drag-ff").addClass("front-ff"); $("#drag-ff").addClass("dragshadow");}
					});   });   });

			$(function() {
		$(document).on('click', '#goback-id', function(){
				$("#drag-id").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-id><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>IdeaDev</span><br><strong>Managing Director</strong><br>Based in NYC, IdeaDev was a full-service software development agency, also providing consulting and architecture services. Major clients included Pfizer, GE, AAA, and Citibank.  </span><p class=prose><strong>Dates</strong> 1999 - 2007<br><strong>Status</strong> Retired<br>',
					onStart: function () {$("#drag-id").removeClass("dragshadow"); $("#drag-id").removeClass("front-id");},
					onFinish: function () {$("#drag-id").addClass("back-id");$("#drag-id").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-id', function(){
					$("#drag-id").flippy({ direction:'LEFT', light:0, content:'<span id=goback-id><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-id").removeClass("dragshadow"); $("#drag-id").removeClass("back-id");},
					onFinish: function () {$("#drag-id").addClass("front-id"); $("#drag-id").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click', '#goback-hd', function(){
				$("#drag-hd").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-hd><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>HeresDinner</span><br><strong>Investor</strong><br>HeresDinner is a next-generation food delivery and logistics service. HD was piloted for two years in the Princeton, NJ area and is planning re-release with an emphasis on mobility tools, and an entry into the NYC market. </span><p class=prose><strong>Dates</strong> 2005 - Current<br><strong>Status</strong> Post-Pilot<br></p>',
					onStart: function () {$("#drag-hd").removeClass("dragshadow"); $("#drag-hd").removeClass("front-hd");},
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
				$("#drag-sp").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-sp><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>Spleened</span><br><strong>Author</strong><br>Spleened is a humor blog based on current events, with a streak of Photoshop manipulation. Heavily sarcastic. </p><p class=prose><strong>Dates</strong> 2008 - Current<br><strong>Status</strong> Actively Published<br>',
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
				$("#drag-tw").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-tw><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>The Window</span><br><strong>Creator, Editor</strong><br>The Window is a Philosophy resource created in 1995 while I was a student at Trinity College. In the intervening 17 years, it is now widely cited as a primary source on the Web. </span><p class=prose><strong>Dates</strong> 1995 - Current<br><strong>Status</strong> Online<br>',
					onStart: function () {$("#drag-tw").removeClass("dragshadow"); $("#drag-tw").removeClass("front-tw");},
					onFinish: function () {$("#drag-tw").addClass("back-tw");$("#drag-tw").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-tw', function(){
					$("#drag-tw").flippy({ direction:'LEFT', light:0, content:'<span id=goback-tw><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-tw").removeClass("dragshadow"); $("#drag-tw").removeClass("back-tw");},
					onFinish: function () {$("#drag-tw").addClass("front-tw"); $("#drag-tw").addClass("dragshadow");}
					});   });   });


$(function() {
		$(document).on('click', '#goback-io', function(){
				$("#drag-io").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-io><img src=flipx.png hspace=4 vspace=4></span><p class=prose><span class=cardtitle>Intranet Office</span><br><strong>CTO, Lead Architect, Evangelist</strong><br>I/O was a collaboration and communication platform I created in 1997, which eventually spawned a succession of knowledge-management and CRM products for AAA and Pfizer. </p><p class=prose><strong>Dates</strong> 1997 - 2004<br><strong>Status</strong> Retired<br>',
					onStart: function () {$("#drag-io").removeClass("dragshadow"); $("#drag-io").removeClass("front-io");},
					onFinish: function () {$("#drag-io").addClass("back-io");$("#drag-io").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-io', function(){
					$("#drag-io").flippy({ direction:'LEFT', light:0, content:'<span id=goback-io><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-io").removeClass("dragshadow"); $("#drag-io").removeClass("back-io");},
					onFinish: function () {$("#drag-io").addClass("front-io"); $("#drag-io").addClass("dragshadow");
					}
					});   });   });


$(function() {
		$(document).on('click', '#goback-c2', function(){
				$("#drag-c2").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-c2><img src=flipx.png hspace=4 vspace=4></span><p class=prose><span class=cardtitle>Cloud-Two</span><br><strong>Investor</strong><br>Cloud-two is a lab environment for designing and testing alternative cloud implementations, especially methods of efficient neural processing in a cloud architecture.</p> <p class=prose><strong>Dates</strong> 2010 - Current<br><strong>Status</strong> Experimental<br></p> ',
					onStart: function () {$("#drag-c2").removeClass("dragshadow"); $("#drag-c2").removeClass("front-c2");},
					onFinish: function () {$("#drag-c2").addClass("back-c2");$("#drag-c2").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-c2', function(){
					$("#drag-c2").flippy({ direction:'LEFT', light:0, content:'<span id=goback-c2><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-c2").removeClass("dragshadow"); $("#drag-c2").removeClass("back-c2");},
					onFinish: function () {$("#drag-c2").addClass("front-c2"); $("#drag-c2").addClass("dragshadow");
					}
					});   });   });


$(function() {
		$(document).on('click', '#goback-gv', function(){
				$("#drag-gv").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-gv><img src=flipx.png hspace=4 vspace=4></span><p class=prose><span class=cardtitle>General Virtual</span><br><strong>Investor</strong><br>GV is a nameplate for a variety of virtual consulting services. </p><p class=prose><strong>Dates</strong> 2008 - Current<br><strong>Status</strong> Pilot<br>',
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
		$(document).on('click', '#goback-fx', function(){
				$("#drag-fx").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-fx><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>fuxnux</span><br><strong>Editor</strong><br>The fuxnux site will be home to a weekly cartoon.</span><p class=prose><strong>Dates</strong> 2011-Current<br><strong>Status</strong> Pilot<br>',
					onStart: function () {$("#drag-fx").removeClass("dragshadow"); $("#drag-fx").removeClass("front-fx");},
					onFinish: function () {$("#drag-fx").addClass("back-fx");$("#drag-fx").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-fx', function(){
					$("#drag-fx").flippy({ direction:'LEFT', light:0, content:'<span id=goback-fx><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-fx").removeClass("dragshadow"); $("#drag-fx").removeClass("back-fx");},
					onFinish: function () {$("#drag-fx").addClass("front-fx"); $("#drag-fx").addClass("dragshadow");
					}
					});   });   });


$(function() {
		$(document).on('click', '#goback-ww', function(){
				$("#drag-ww").flippy({ direction:'LEFT', color_target : '#CCCCCC', light:0,
					content:'<span id=gofront-ww><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>Watch the Wire</span><br><strong>Dirty Blogger</strong><br>My own personal blog (the name comes from a somg lyric,) it covers mostly science and technology, managemenemt, being an entrepreneur and all that stuff. </span><p class=prose><strong>Dates</strong> 2005 - Current<br><strong>Status</strong> Held<br>',
					onStart: function () {$("#drag-ww").removeClass("dragshadow"); $("#drag-ww").removeClass("front-ww");},
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
				$("#drag-gt").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-gt><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>GorillaTeach</span><br><strong>Investor</strong><br>GorillaTeach aims to provide the world a venue to unite the two most important assets we have: the contemporary living knowledge of our civilization, and the future of our children.  </span><p class=prose><strong>Dates</strong> 2011 - Current<br><strong>Status</strong> Pilot<br>',
					onStart: function () {$("#drag-gt").removeClass("dragshadow"); $("#drag-gt").removeClass("front-gt");},
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
				$("#drag-am").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-am><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>Attendee Management</span><br><strong>Lead Developer</strong><br>AMS was a white-label event series planning system modelled on a university curriculum system. It handled everything from enrollment, course selection, testing, surveying, and specific event planning down to the seating arrangements for 30,000+ users. </span><p class=prose><strong>Dates</strong> 2001 - 2008<br><strong>Status</strong> Retired<br>',
					onStart: function () {$("#drag-am").removeClass("dragshadow"); $("#drag-am").removeClass("front-am");},
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
				$("#drag-tj").flippy({ direction:'LEFT', light:0,
					content:'<span id=gofront-tj><img src=flipx.png hspace=4 vspace=4></span><br><p class=prose><span class=cardtitle>Trincoll Journal</span><br><strong>Editor-In-Chief</strong><br>TJ was the first regularly-published Web magazine, starting in 1993 on NCSA Mosaic. Yes, Mosaic.  </span><p class=prose><strong>Dates</strong> 1993-1996<br><strong>Status</strong> Archived<br>',
					onStart: function () {$("#drag-tj").removeClass("dragshadow"); $("#drag-tj").removeClass("front-tj");},
					onFinish: function () {$("#drag-tj").addClass("back-tj");$("#drag-tj").addClass("dragshadow");}
					});   });   });

$(function() {
		$(document).on('click' ,'#gofront-tj', function(){
					$("#drag-tj").flippy({ direction:'LEFT', light:0, content:'<span id=goback-tj><img src=flip.png  hspace=4 vspace=4></span>',
					onStart: function () {$("#drag-tj").removeClass("dragshadow"); $("#drag-tj").removeClass("back-tj");},
					onFinish: function () {$("#drag-tj").addClass("front-tj"); $("#drag-tj").addClass("dragshadow");
					}
					});   });   });

	$(document).on('click' ,'#menubtn', function() {
		$( "#dialog" ).dialog({
			resizable: false,
			draggable: false,
			width:300,
			show: { effect: 'drop', direction: "up" } ,
			hide: { effect: 'fade', duration: 500 } ,
			position: [625,12]

			 });
	});


</script>



</head>
<body>
     <div class="bigbox">
     <div class="topribbon" style="left:0;top:0;">
     	<div style="float:left;"><img src="innameonly.png"></div>
     <div class="topbutton" id="menubtn"><img src="geartop.png"></div>
     </div>

     </div>





<div id="dialog" title="explore further">
<div id="drop-menu">
<ul>
<li id="clickme"><a href="#"><img src="shuffleit.png" height=25 align="absmiddle"> shuffle the deck</a></li>
<li id="lineme"><a href="#"><img src="straaait.png" height=25 align="absmiddle"> order by date</a></li>
<li><a href="#"><img src="matrix.png" height=25 align="absmiddle"> matrix view</a></li>
<li><a href="#"><img src="boreme.png" height=25 align="absmiddle"> text view</a></li>
<li><a href="#"><img src="about.png" height=25 align="absmiddle"> about the site</a></li>
<li><a href="#"><img src="about.png" height=25 align="absmiddle"> go to my linkedin</a></li>
<li><a href="#"><img src="about.png" height=25 align="absmiddle"> go to my twitter</a></li>
</ul>
</div>
</div>

<div id="set">

<div id="drag-fx" class="dragbase dragshadow front-fx">
<span id=goback-fx><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-gv" class="ui-widget-content dragshadow front-gv">
<span id=goback-gv><img src=flipx.png  hspace=4 vspace=4></span>
</div>

<div id="drag-tw" class="ui-widget-content dragshadow front-tw">
<span id=goback-tw><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-io" class="ui-widget-content dragshadow front-io">
<span id=goback-io><img src=flipx.png  hspace=4 vspace=4></span>
</div>

<div id="drag-sp" class="ui-widget-content dragshadow front-sp">
<span id=goback-sp><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-am" class="ui-widget-content dragshadow front-am">
<span id=goback-am><img src=flipx.png  hspace=4 vspace=4></span>
</div>

<div id="drag-id" class="ui-widget-content dragshadow front-id">
<span id=goback-id><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-tj" class="ui-widget-content dragshadow front-tj">
<span id=goback-tj><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-ww" class="ui-widget-content dragshadow front-ww all-ww ">
<span id=goback-ww><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-c2" class="ui-widget-content dragshadow front-c2">
<span id=goback-c2><img src=flipx.png  hspace=4 vspace=4></span>
</div>

<div id="drag-gt" class="ui-widget-content dragshadow front-gt">
<span id=goback-gt><img src=flipx.png  hspace=4 vspace=4></span>
</div>

<div id="drag-hd" class="ui-widget-content dragshadow front-hd">
<span id=goback-hd><img src=flip.png  hspace=4 vspace=4></span>
</div>

<div id="drag-ff" class="ui-widget-content dragshadow front-ff">
<span id=goback-ff><img src=flip.png  hspace=4 vspace=4></span>
</div>




</div>
<div class="bodyprose" style="position:absolute; top:65px; float:right; left:600px; width:380px;">

<div class="bodyprose" style="position:relative; width:240px; padding:15px; float:right;"><img src="arrow.png"><br><p class="titlemajor">move and flip</p>
<p>These are my major jobs and projects, on cards, spread to the left. You can sort through them, or hit <img src="flip.png" width="16" align="absbottom"> to flip the card for more info...</p>


<div style="clear:both;">
	<span class="titlemajor">or do other stuff...</span><br>
	<div id="clickme" class="divact1" style="clear:left;"><img src="shuffleit.png"><br><span class='titleminor'>shuffle</span><br>yeah, go ahead...</div>
<div id="lineme" class="divact2"><img src="straaait.png"><br><span class='titleminor'>timeline</span><br>old to new</div></div>

</div>
</div>
</div>
    </body>
</html>
