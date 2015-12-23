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
<!--script src="jquery/js/jquery.ui.touch-punch.min.js"></script-->


<!--[if IE]><script src="jquery/js/excanvas.js"></script><![endif]-->



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
	
	
	.ui-dialog {
	border:0; 
  -moz-box-shadow:    2px 2px 9px 3px #333;
  -webkit-box-shadow: 2px 2px 9px 3px #333;
  box-shadow:         2px 3px 9px 3px #333;
}

	.matrixsheet {
	border:0; 
  -moz-box-shadow:    2px 2px 9px 3px #333;
  -webkit-box-shadow: 2px 2px 9px 3px #333;
  box-shadow:         2px 3px 9px 3px #333;
  position:relative;width: 900px; top: 90px;background: none repeat scroll 0% 0% rgb(255, 255, 255); z-index: 99; margin: auto; height: 400px;
}

.ui-widget-content {
	font-family: Lucida Grande, Helvetica; font-size: 14pt;
}

img {
border:0}

a{
outline: none;
  -moz-outline-style: none;}

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


.prose {
	font-size:8pt;
	color:#444;
	margin: 2px 10px 2px 10px;
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

.front-ub { border:0; background:#222 url('ub.png') no-repeat left top !important; color:#fff !important; }
.back-ub { border:0; background:#DDD url('f2.png') no-repeat left top !important; color:#000 !important;}



#drag-ff { width: 220px; height: 220px; background-size:220px !important; position:absolute !important; top:236px; left:410px; }

#drag-tw { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:91px; left:282px; }
		
#drag-hd { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:169px; left:330px; }

#drag-sp { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:65px; left:75px; }

#drag-io { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:100px; left:5px;}
		
#drag-id { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:127px; left:45px;}
		
#drag-tj { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:282px; left:37px;}
		
#drag-gv { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:272px; left:33px;}
		
#drag-c2 { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:243px; left:193px;}
		
#drag-ww { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:190px; left:110px;}
		
#drag-am { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:252px; left:17px;}
		
#drag-gt { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:124px; left:275px;}

#drag-ub { width: 220px; height: 220px;  background-size:220px !important; position:absolute !important; top:254px; left:285px;}


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



}

.icoico {
	
	height:61px;
	width:65px;
	 align:baseline;
	}

	</style>
<script>

	$(function() {
     $( "#dialog" ).dialog({ 
     	dialogClass: "noTitleStuff",
			resizable: false,
			draggable: false,
			autoOpen: false,
			width:300,
			height: 420,
			show: { effect: 'fade', duration: 500 } ,
			hide: { effect: 'fade', duration: 500 } ,
			position: { 
			    my: 'right top',
			    at: 'right top',
			    of: $('#menubtn'),
			    offset: '-20 5'
			  },
			  
			 
			 });
});


	$(document).on('click' ,'#menubtn', function() {
		$( "#dialog" ).dialog("open");
	});
	
	$(document).on('click' ,'#closeme', function() {
		$( "#dialog" ).dialog("close");
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
<div style="text-align:center;width:275px;height:22px">matrix view</div><br>
<div id="drop-menu" >
<ul>
<li id="clickme"><a href="#"><img src="shuffleit.png" height=24 align="absmiddle" > card view</a></li>
<li><a href="#"><img src="boreme.png" height=24 align="absmiddle"> text view</a></li>
<li><a href="#"><img src="boreme.png" height=24 align="absmiddle"> about the site</a></li>
</ul>

<p>
<a href="#"><img src="linkedin.png" class='icoico'></a> 
<a href="#"><img src="twitter.png" class='icoico'></a>
<a href="#"><img src="google.png" class='icoico'></a> 
<a href="#" id="closeme"><img src="close.png"  class='icoico'></a> 
 </P>

</div> </div>

<div class="matrixsheet"">


<table width="200" border="1">
  <tr>
    <td>item</td>
    <td>industry focus</td>
    <td>users</td>
    <td>engineerng</td>
    <td>product management<td>
    <td>mobility</td>
    <td>cloud</td>
    <td>transaction</td>
    <td>social</td>
    <td>LAMP</td>
    <td>Windows</td>
    <td>Infra</td>
  </tr>
  <tr>
    <td>Here'sDinner</td>
    <td>under 5,000 users</td>
    <td>logistics</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <br>
	

	</div>

</div>
</div>
</div>
    </body>
</html>

