<?php
	$word = $_GET["word"];
	$from = $_GET["from"];
	$to = $_GET["to"];
	
	if($from == $to){exit('fail: "from" and "to" should not be equal.');}
	
	switch ($from){
		case "e":
			$from='./lists/myeasylist';
		break;
		case "h":
			$from='./lists/myhardlist';
		break;
		case "g":
			$from='./lists/mygotlist';
		break;
		case "o":
			$from='./lists/list_orig';
		break;
		default:
		exit("fail: argument 'from' out of range.");
	} 
	
	switch ($to){
		case "e":
			$to='./lists/myeasylist';
			break;
		case "h":
			$to='./lists/myhardlist';
		break;
		case "g":
			$to='./lists/mygotlist';
		break;	
		case "o":
			$to='./lists/list_orig';
		break;	
		default:
		exit("fail: argument 'to' out of range.");
	} 
	
	//print("moveing word:" . $word . "<br />");
	//print("from: " . $from."<br />");
	//print("to: " . $to."<br />");

	if ((strlen($word)>0 and strlen($word)<25)) {
		$mylist=fopen($from,"r") or exit("fail: open fail.");
		$wordlist=array();
		$z=0;
		while(!feof($mylist)){
			$wordlist[$z]=trim(fgets($mylist));
			$z++;
		}
		fclose($mylist);
		$mylist=fopen($from,"w") or exit("fail: open fail.");
		$z=0;
		$wordfound=0;
		for($z=0;$z<count($wordlist);$z++){
			if($wordlist[$z]!=$word and $wordlist!=""){
				if($z<(count($wordlist)-1)){
					fwrite($mylist, $wordlist[$z]."\n");
				}else{
					fwrite($mylist, $wordlist[$z]);
				}
			}else{
				if ($wordlist[$z]==$word){
					$wordfound++;
				}
			}
		}
		fclose($mylist);
		
		if ($wordfound>0){
			$mylist=fopen($to,"a");
			fwrite($mylist, $word."\n");
			fclose($mylist);
			print("done!");
		}else{
			print("fail: word not found.");
		}
	}else{
		exit("fail: argument out of range.");
	}
?>
