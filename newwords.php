<?php
	$xml=simplexml_load_file("./lists/dictstore");
	$original=fopen("./lists/list_orig","r") or exit("Unable to open file!");
	$origlist=array();
	$z=0;
	while(!feof($original)){
		$origlist[$z]=trim(fgets($original));
		$z++;
	}
	fclose($original);

	$newwords=array();
	for($i=0;$i<10;$i++){
		$newwords[$i]=$origlist[rand(0,count($origlist))];
	}

	for($k=0;$k<count($newwords);$k++){
		$search=$xml->xpath("/dictionary/key[@name='".$newwords[$k]."']");
		if ($search){
			//print_r($search);
			$word=$search[0];
			$name=$word->attributes()->name;
			$pronounce=$word->pronounce;
			$mean=$word->means->meaning;
			$s_mean="";
			$div_id="newword_" . rand(0,999999);
			print_r('<div id="' . $div_id . '" class="box" style="text-align:left;padding-top:20px">');
			print_r('<div id="mark_' . $div_id . '" class="marking">&nbsp;</div>');
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
			print('<div id="btns_' . $div_id . '"><hr />');
			print_r('	<span class="btn known" onclick="k(\'' . $div_id . '\',\'' . $name . '\');">I know</span>');
			print_r('	<span class="btn unknown" onclick="dk(\'' . $div_id . '\',\'' . $name . '\');">I don\'t know</span>');
			print("</div>");
			print("</div>\n");
		}else{
			$div_id="newword_" . rand(0,999999);
			print_r('<div id="' . $div_id . '" class="box" style="text-align:left;padding-top:20px">');
			print_r('<div id="mark_' . $div_id . '" class="marking">&nbsp;</div>');
			print_r('<div class="ele'. ($k%3) . '" style="font-size:30px;border-radius:50px;padding:0 20px;">'. $newwords[$k] .'</div>');
			print_r('<ul class="meaning" onclick="show(this);">');
			print("No meanings avaliable.");
			print('</ul>');
			print('<div id="btns_' . $div_id . '"><hr />');
			print_r('	<span class="btn known" onclick="k(\'' . $div_id . '\',\'' . $name . '\');">I know</span>');
			print_r('	<span class="btn unknown" onclick="dk(\'' . $div_id . '\',\'' . $name . '\');">I don\'t know</span>');
			print("</div>");
			print("</div>\n");
		}
	}

?>
