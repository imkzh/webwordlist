<?php
	$xml=simplexml_load_file("./lists/dictstore");
	$mylist=fopen("./lists/myhardlist","r") or exit("Unable to open file!");
	
	$wordlist=array();
	$z=0;
	while(!feof($mylist)){
		$wordlist[$z]=trim(fgets($mylist));
		$z++;
	}
	fclose($mylist);
	
	$items=array();
	for($i=0;$i<10;$i++){
		$items[$i]=$wordlist[rand(0,count($wordlist))];
	}
	
	for($k=0;$k<count($items);$k++){
		//print_r("/dictionary/key[@name='" . $items[$k] . "']"."<br />");
		$search=$xml->xpath("/dictionary/key[@name='".$items[$k]."']");
		if($search){
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
			print("No meanings avaliable.");
			print_r('</ul>');
			print("</div>\n");
		}
	}
?>
