<!DOCTYPE html>
<html lang = ja>
<head>
<meta charset="UTF-8">

<title>PHPテスト</title>

PHPの勉強をしていきます。

</head>

<body>
<br><br>
<?php 

$scpre = 60;

if ($scpre >= 60) {
	echo "Greate!!!<br />";
	} elseif ($scpre >= 50) {
echo "Good<br />";
} elseif  ($scpre >= 40){
echo "もっと勉強しろ<br />";
}

$a = 5;
$b = 14;

$max = ($a > $b) ? $a : $b;

echo "$max<br/>" ;
 
$domain = 'cn';

echo 'ドメイン:' .$domain.'<br/>';

switch ($domain){
	case 'in':
		echo 'インドのドメイン';
		break;
	case 'cn':
		echo '中国のドメイン';
		break;
	case 'jp':
		echo '日本のドメイン';
		break;
	default:
		print '不明です';
}



?>


</body>
</html>