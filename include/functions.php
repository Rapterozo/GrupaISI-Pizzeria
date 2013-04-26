<?
######################
######################
##POMOCNICZE FUNKCJE##
######################
######################

function box($string, $rodzaj)
{
$box = '
<div style="width:600px;">
<div style="border-right:#F60 1px solid; width:50px; float:left; background-image:url(./images/'.$rodzaj.'.gif); background-repeat:no-repeat; background-position:left; line-height:60px;">&nbsp;</div>
<div style="float:left; padding-left:10px;min-height:60px; line-height:60px;font-weight:bold; text-decoration:underline;">'.$string.'</div>
</div>
';
return $box;
}

function make_pass($haslo,$kod,$today){
		return md5(sha1($haslo.'i+d][jj2'.$kod.'%wd45a$^'.$today));
}
function email($adresat, $tresc, $tytul){

	$header = 	"From: xx@xx.pl \nContent-Type:".
			' text/plain;charset="iso-8859-2"'.
			"\nContent-Transfer-Encoding: 8bit";
	if (mail($adresat, $tytul, $tresc, $header))
		return true;
	else
		return false;
}
?>