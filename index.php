<!DOCTYPE html>
<?php
error_reporting(E_ALL);
?>
<head>
<meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" name="viewport">
<meta content="telephone=no" name="format-detection">
<meta content="address=no" name="format-detection">
<meta http-equiv="content-type" content="text/html; charset=UTF8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="x5-page-mode" content="app">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="apple-touch-icon-precomposed" href="./wordlist.png">
<!-- iPhone 6 -->
<link href="splash_screen.png" media="(device-width: 375px) and (device-height: 667px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

<!-- iPhone 6+ Portrait -->
<link href="splash_screen.png" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image">

<!-- iPhone 6+ Landscape -->
<link href="splash_screen.png" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image">
<title>Mylist</title>
</head>
<style>
	
		body{
			text-shadow:0 1px 0 #fff;
			background-image:url("/wordlist/png.png");
			font-family:"微软雅黑", Calibri, Arial;
		}
		.box{
			background-color:rgba(255,255,255,0.2);
			border: 1px solid #cc9933;
			position:relative;
			box-shadow: 0 1px 5px rgba(0,0,0,0.5);
			border-radius:5px;
			width:calc(85% - 8px);
			height: auto;
			padding: 8px;
			margin: 3px;
			font-size:1.3em;
			font-family:"微软雅黑", Calibri, Arial;
			margin-top: 18px;
			margin-left:calc(7.5% - 4px);
			text-align: center;
			color:#694200;
			overflow:hidden;
			
			transition: background-color 0.8s;
			-moz-transition: background-color 0.8s;	/* Firefox 4 */
			-webkit-transition: background-color 0.8s;	/* Safari 和 Chrome */
			-o-transition: background-color 0.8s;	/* Opera */
		}
		
		.marking{
			position:absolute;
			right:0;
			top:0;
			display:block;
			width:70px;
			height:70px;
			background:url('/wordlist/marked@3x.png') no-repeat;
			background-size:70px 70px;
			opacity:0;
			
			transition: opacity 0.8s;
			-moz-transition: opacity 0.8s;	/* Firefox 4 */
			-webkit-transition: opacity 0.8s;	/* Safari 和 Chrome */
			-o-transition: opacity 0.8s;	/* Opera */
		}
		
		.ele0{
			background-color:rgba(0,180,255,0.1);
			border: 1px solid #3b6373;
			box-shadow: 0 1px 5px rgba(0,0,0,0.5);
			border-radius:16px;
			height: auto;
			margin: 3px;
			font-size:0.8em;
			font-family:"微软雅黑", Calibri, Arial;
			text-align: center;
			color:#694200;
			display:inline-block;
			padding:0 10px 0 10px;
		}
        .ele1{
			background-color:rgba(255, 0, 0, 0.1);
			border: 1px solid #AD2222;
			box-shadow: 0 1px 5px rgba(0,0,0,0.5);
			border-radius:16px;
			height: auto;
			margin: 3px;
			font-size:0.8em;
			font-family:"微软雅黑", Calibri, Arial;
			text-align: center;
			color:#694200;
			display:inline-block;
			padding:0 10px 0 10px;
		}
        .ele2{
			background-color:rgba(43, 190, 73, 0.1);
			border: 1px solid #3B734B;
			box-shadow: 0 1px 5px rgba(0,0,0,0.5);
			border-radius:16px;
			height: auto;
			margin: 3px;
			font-size:0.8em;
			font-family:"微软雅黑", Calibri, Arial;
			text-align: center;
			color:#694200;
			display:inline-block;
			padding:0 10px 0 10px;
		}
        .ele3{
			background-color:rgba(255, 173, 0, 0.1);
			border: 1px solid #9E7902;
			box-shadow: 0 1px 5px rgba(0,0,0,0.5);
			border-radius:16px;
			height: auto;
			margin: 3px;
			font-size:0.8em;
			font-family:"微软雅黑", Calibri, Arial;
			text-align: center;
			color:#694200;
			display:inline-block;
			padding:0 10px 0 10px;
		}
		.rm{
		 background-color:rgba(0,0,0,0.2);
			border: 1px solid #3b6373;
			box-shadow: 0 1px 5px rgba(0,0,0,0.5);
			border-radius:16px;
			height: auto;
			font-size:0.8em;
			font-family:"微软雅黑", Calibri, Arial;
			text-align: center;
			color:#694200;
			display:inline-block;
			padding:0 5px 0 5px;
			margin: 2px 0 2px 10px;
			color: !important white;
			text-decoration:!important none;
			text-shadow:-1px -1px 1px rgba(0,0,0,0.5);
		}
		.rm a:link{
		text-decoration:none;
		color:white
		}
		.rm a:visited{
				text-decoration:none;
		  color:white
		}
        .title{
			text-align:center;
			text-shadow: 0 0 10px #fff;
			font-size: 1.5em;
			line-height: 60px;
			font-family:"微软雅黑", Calibri, Arial;
			font-weight:100;
			color:white;
			position:fixed;
			top:0;
			left:0;
			width:100%;
			height:60px;
			box-shadow:0 0 20px #000;
			background-color:#2a7913;
			background-image:-webkit-gradient(linear, left top, left bottom, from(#8fc430), to(#2a7913));
			margin:0;
			padding:0;
		}
		body{
			margin:0;
			padding:0;
			margin-top:80px;
			margin-bottom:90px;
		}
		.footer{
			text-align:center;
			text-shadow: 0 0 10px #fff;
			font-size: 1.5em;
			
			font-family:"微软雅黑", Calibri, Arial;
			font-weight:100;
			color:white;
			position:fixed;
			top:calc(100% - 100px);
			left:0;
			width:100%;
			height:100px;
			line-height: 130px;
			/*
				box-shadow:0 0 20px #000;
				background-color:#2a7913;
			*/
			background-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,0)), to(rgba(0,0,0,0.8)));
			margin:0;
			padding:0;
		}
	</style>

<style>
	.li{
		width:calc(100% -20px);
		color:black;
		
		font-family:"微软雅黑", Calibri, Arial;
		text-align: center;
		background-color:rgba(255,255,255,0.3);
		box-shadow: #000 0 0 10px ;
		border:1px solid #000;
		display:block;
		padding:5px 0 5px 0;
		margin:10px 30px 10px 30px;
		height:50px;
		line-height:50px;
		border-radius: 4px;
		text-shadow: 1px 1px 0px rgba(255, 255, 255, 1);
		text-decoration: none;
	}
	.box a{
		text-decoration: none;
		color:#694200;
	}
	.content{
		padding:0;
		margin:0;
		margin-bottom:-5px;
		width:calc(100% - 100px);
		display:inline-block;
		overflow:hidden;
		text-overflow:ellipsis;
	}
	.prono{
		color:gray;
		margin-left:5px;
	}
	ul {
		list-style-type : none;
		padding-left:10px;
	}
	ul.meaning{
		transition: opacity 1s;
		-moz-transition: opacity 1s;	/* Firefox 4 */
		-webkit-transition: opacity 1s;	/* Safari 和 Chrome */
		-o-transition: opacity 1s;	/* Opera */
		opacity: 0.08;
	}
	.mean{
		font-size:16px;
		margin-left:5px;
	}
	
	.box hr{
		margin-bottom:0;
	}
	
	.btn{
		display: inline-block;
		height:30px;
		line-height: 30px;
		width: 48%;
		margin:0;
		padding:0;
		text-align:center;
	}

	.btn.known{
		border-right: solid 1px rgba(0,0,0,0.3);
	}
	.btn.unknown{
		float:right;
	}
	.mask{
		position:fixed;
		left:0;
		top:0;
		display:none;
		width:100%;
		height:100%;
		background-color:black;
		opacity:0;
		transition: opacity 0.7s;
		-moz-transition: opacity 0.7s;	/* Firefox 4 */
		-webkit-transition: opacity 0.7s;	/* Safari 和 Chrome */
		-o-transition: opacity 0.7s;	/* Opera */
	}
	
	.drawer{
		position: fixed;
		/*display:none;*/
		top:100%;
		width:100%;
		height:50%;
		background-color:white;
		box-shadow: 0 -10px 50px rgba(0,0,0,1);
		opacity:0;
		transition: top cubic-bezier(0, 0, 0.2, 1) 0.4s,opacity 0.4s;
		-moz-transition: top cubic-bezier(0, 0, 0.2, 1) 0.4s,opacity 0.4s;	/* Firefox 4 */
		-webkit-transition: top cubic-bezier(0, 0, 0.2, 1) 0.4s,opacity 0.4s;	/* Safari 和 Chrome */
		-o-transition: top cubic-bezier(0, 0, 0.2, 1) 0.4s,opacity 0.4s;	/* Opera */
		/*trans_in:  cubic-bezier(0, 0, 0.2, 1) */
		/*trans_out: cubic-bezier(0.55, 0.06, 0.68, 0.19) */
		font-size:20px;
	}
	.drawer hr{
		margin-bottom:0px;
	}
	.prompt{
		display:block;
		margin:30px;
		padding-top:40px;
	}
	
	.drawer.btn{
		height:100%;
		line-height:100%;
	}
</style>

<script>
	function $(n){
		return document.getElementById(n);
	}

	function show(e){
		e.style.opacity=Math.abs(1-e.style.opacity)+0.05;
	}
	
	function removeword(id){
		$(id).style.display="none";
	}
	
	function ajax_query(url){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
	
	function hideDrawer(){
		/*trans_in:  cubic-bezier(0, 0, 0.2, 1) */
		/*trans_out: cubic-bezier(0.55, 0.06, 0.68, 0.19) */
		
		document.getElementById('drawer').style.transitionTimingFunction="cubic-bezier(0.55, 0.06, 0.68, 0.19)";
		document.getElementById('mask').style.opacity="0";
		document.getElementById('mask').style.display="none";
		document.getElementById('drawer').style.top="100%";
		document.getElementById('drawer').style.opacity="0";
	}
	
	function prompt(ele,w,m,f){
	
		document.getElementById('drawer').style.transitionTimingFunction="cubic-bezier(0, 0, 0.2, 1)";
		document.getElementById('mask').style.opacity="0";
		document.getElementById('mask').style.display="block";
		//document.getElementById('drawer').style.display="block";
		document.getElementById('drawer').style.top="100%";
		document.getElementById('drawer').style.top="50%";
		document.getElementById('drawer').style.opacity="1";
		$('promptword').innerText=w;
		if (m=='k')
			$('promptmode').innerText='known';
		else
			$('promptmode').innerText='unknown';
		$('mask').onclick=function(){
			hideDrawer();
		}
		$('drawer_btnYes').onclick=function(){
			ajax_query('/wordlist/markword.php?'+ 'word=' + w + "&" + f );
			
			if(m=='k'){
				removeword(ele);
			}else{
				$(ele).style.backgroundColor="rgba(255,180,0,0.1)";
				$("btns_"+ele).style.display="none";
				$("mark_" + ele).style.opacity="1";
			}
			hideDrawer();
		};
		$('drawer_btnNo').onclick=function(){
			hideDrawer();
		};	
	}
	
	function k(ele,w){
		prompt(ele,w,'k','from=o&to=e');
	}
	
	function dk(ele,w){
		prompt(ele,w,'d','from=o&to=h');
	}
	
	function fetchnew(){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","/wordlist/newwords.php?r="+Math.random(),true);
		
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$("newwords").innerHTML+=xmlhttp.responseText;
			}
		};
		xmlhttp.send();
	}
	
	function fetchhardlist(){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","/wordlist/hardlistwords.php?r="+Math.random(),true);
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$("hardlist").innerHTML=xmlhttp.responseText;
			}
		};
		xmlhttp.send();
	}
</script>

<div id='faketitle' class="title">
	<div style="padding-top:7px;color:white !important;text-decoration:none !important;"><span onclick="window.location='./';">Wordlist</span></div>
</div>

<div class="box">Recite those Marked as Hard<hr /><span onclick="fetchhardlist();">Get another Group of words.</span></div>
<div id="hardlist">
<?php
$xml=simplexml_load_file("./lists/dictstore");
$mylist=fopen("./lists/myhardlist","r") or exit("Unable to open file!");
$original=fopen("./lists/list_orig","r") or exit("Unable to open file!");

$wordlist=array();
$z=0;
while(!feof($mylist)){
	$wordlist[$z]=trim(fgets($mylist));
	$z++;
}
fclose($mylist);

$origlist=array();
$z=0;
while(!feof($original)){
	$origlist[$z]=trim(fgets($original));
	$z++;
}
fclose($original);

$items=array();
for($i=0;$i<10;$i++){
	$items[$i]=$wordlist[rand(0,count($wordlist))];
}

$newwords=array();
for($i=0;$i<10;$i++){
	$newwords[$i]=$origlist[rand(0,count($origlist))];
}

$start_time=microtime(true);
for($k=0;$k<count($items);$k++){
	//print_r("/dictionary/key[@name='" . $items[$k] . "']"."<br />");
	$search=$xml->xpath("/dictionary/key[@name='".$items[$k]."']");
	if ($search){
		//print_r($search);
		$word=$search[0];
		$name=$word->attributes()->name;
		$pronounce=$word->pronounce;
		$mean=$word->means->meaning;
		$s_mean="";
		print_r('<div class="box" style="text-align:left;padding-top:20px">');
		print_r('<div class="ele'. ($k%3) . '" style="font-size:30px;border-radius:50px;padding:0 20px;">'. $name .'</div>');
		print_r('<span class="prono">/' . $pronounce . '/</span><hr />');
		print_r('<ul class="meaning" onclick="show(this);">');
		//print_r($mean);
		for($j=0;$j<count($mean);$j++){
			$m=$mean[$j];
			//print_r($m);
			//print_r("<br />");
			$cate=$m->attributes()->cate;
			$s_mean=$s_mean."<li><span class='ele3'>".$cate."</span><span class='mean'>" . $m . "</span></li>";
		}
		print_r($s_mean);
		print_r('</ul>');
		print("</div>\n");
	}else{
		print_r('<div class="box" style="text-align:left;padding-top:20px">');
		print_r('<div class="ele'. ($k%3) . '" style="font-size:30px;border-radius:50px;padding:0 20px;">'. $items[$k] .'</div>');
		print_r('<ul class="meaning" onclick="show(this);">');
		print_r('No meanings avaliable.');
		print_r('</ul>');
		print("</div>\n");
	}
	
}
?>
</div>
<div class="box">And Mark new words!<hr /><span onclick="fetchnew();">Load More</span></div>
<div id="newwords">
	<?php
		for($k=0;$k<count($newwords);$k++){
			$search=$xml->xpath("/dictionary/key[@name='".$newwords[$k]."']");
			if ($search){
				//print_r($search);
				$word=$search[0];
				$name=$word->attributes()->name;
				$pronounce=$word->pronounce;
				$mean=$word->means->meaning;
				$s_mean="";
				print_r('<div id="word_' . $k . '" class="box" style="text-align:left;padding-top:20px">');
				print_r('<div id="mark_word_' . $k . '" class="marking">&nbsp;</div>');
				print_r('<div class="ele'. ($k%3) . '" style="font-size:30px;border-radius:50px;padding:0 20px;">'. $name .'</div>');
				print_r('<span class="prono">/' . $pronounce . '/</span><hr />');
				print_r('<ul class="meaning" onclick="show(this);">');
				//print_r($mean);
				for($j=0;$j<count($mean);$j++){
					$m=$mean[$j];
					//print_r($m);
					//print_r("<br />");
					$cate=$m->attributes()->cate;
					$s_mean=$s_mean."<li><span class='ele3'>".$cate."</span><span class='mean'>" . $m . "</span></li>";
				}
				print_r($s_mean);
				print('</ul>');
				print('<div id="btns_word_' . $k . '">');
				print_r('<hr />');
				print_r('	<span class="btn known" onclick="k(\'word_' . $k . '\',\'' . $name . '\');">I know</span>');
				print_r('	<span class="btn unknown" onclick="dk(\'word_' . $k . '\',\'' . $name . '\');">I don\'t know</span>');
				print('</div>');
				print("</div>\n");
			}else{
				print_r('<div id="word_' . $k . '" class="box" style="text-align:left;padding-top:20px">');
				print_r('<div id="mark_word_' . $k . '" class="marking">&nbsp;</div>');
				print_r('<div class="ele'. ($k%3) . '" style="font-size:30px;border-radius:50px;padding:0 20px;">'. $newwords[$k] .'</div>');
				print_r('<span class="prono">/' . $pronounce . '/</span><hr />');
				print_r('<ul class="meaning" onclick="show(this);">');
				print("No meanings avaliable.");
				print('</ul>');
				print('<div id="btns_word_' . $k . '"><hr />');
				print_r('	<span class="btn known" onclick="k(\'word_' . $k . '\',\'' . $newwords[$k] . '\');">I know</span>');
				print_r('	<span class="btn unknown" onclick="dk(\'word_' . $k . '\',\'' . $newwords[$k] . '\');">I don\'t know</span>');
				print('</div>');
				print("</div>\n");
			}
		}
	?>
</div>
<?php
	$now = microtime(true);
	print("<div class='box' style='color:gray;font-size:12px;'>Page Processed in:".($now-$start_time)."sec");
	print("<hr />There are totally ".count($wordlist)." words in you hardlist</div>");
?>

<div class="title" style="">
	<div style="padding-top:7px;color:white !important;text-decoration:none !important;">
	<span onclick="window.location='./';">Wordlist</span></div>
	<div style="display:block;position:absolute;right:0;top:0;height:60px;width:60px;background:url('/wordlist/rightarrow.png') no-repeat center;background-size:40px 40px;">
	</div>
</div>
<script>
$("faketitle").style.display="none";
</script>
<!--<div class="footer">
	欢迎来到My List 
</div>-->

<div class="mask" id="mask">&nbsp;</div>


<div class="drawer" id="drawer">
	<span class="prompt">Are you sure to mark <div class="ele3" id="promptword">Word</div> as <span id='promptmode'>known</span>? </span><br />
	
	<div style="display:block;width:100%;height:70px;left:0;position:absolute;bottom:0%;">
		<hr />
		<span class="btn unknown" style="height:70px;line-height:70px;color:red;" id="drawer_btnYes" > Yes</span>
		<span class="btn known" style="height:70px;line-height:70px;color:#0099ff;" id="drawer_btnNo" > No</span>
	</div>
</div>

