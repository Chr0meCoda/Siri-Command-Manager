<?php
if(isset($_POST["text"])){
$text=$_POST["text"];
$answer=$_POST["answer"];
$random=genRandomString();
$datei = implode("",file("config/route.php"));
$antw = implode("",file("plugins/talk.php"));
$ant=array("<?php","?>","class Talk {","}/**/");
$rep=array("<?php","?>","return array(",");");
$antwort = file_get_contents("data.txt");
$block=str_replace("antwort",$answer,$antwort);
$block=str_replace("name",$random,$block);
$antw=str_replace($ant,"",$antw);
$datei = str_replace($rep,"",$datei);
unlink("config/route.php");
unlink("plugins/talk.php");
$fp = fopen('config/route.php', 'w');
$f2=fopen("plugins/talk.php","w");
fwrite($fp,"<?php \n return array(".$datei.",\n\t'/\b'.'".$text."'.'\b/i' => 'Talk::".$random."' \n ); \n ?>");
fwrite($f2,"<?php \n class Talk { \n".$antw."\n". $block. " \n }/**/ \n?>");
echo "Erfolgreich den Befehl $text hinzugefügt!";
}else{
	echo "<html>
<form action='' method='post'>
<input type=text name='text'>
<input type=text name='answer'>
<input type=submit>
</form>
</html>";
}

function genRandomString() {
    $length = 10;
    $characters = ’0123456789abcdefghijklmnopqrstuvwxyz’;
    $string = ”;    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters))];
    }
    return $string;
}
?>