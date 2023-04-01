

<form method="post" action=""> 
<input type="text" name="data" placeholder="Text To Encrypt" />
<input type="text" name="key" placeholder="Enter Key" />
<input type="submit" name="enter" />



</form><?php

function encrypt($text,$key,$iv,$bit_check) {
$text_num =str_split($text,$bit_check);
$text_num = $bit_check-strlen($text_num[count($text_num)-1]);
for ($i=0;$i<$text_num; $i++) {$text = $text . chr($text_num);}
$cipher = mcrypt_module_open(MCRYPT_TRIPLEDES,'','cbc','');
mcrypt_generic_init($cipher, $key, $iv);
$decrypted = mcrypt_generic($cipher,$text);
mcrypt_generic_deinit($cipher);
return base64_encode($decrypted);
}

function decrypt($encrypted_text,$key,$iv,$bit_check){
$cipher = mcrypt_module_open(MCRYPT_TRIPLEDES,'','cbc','');
mcrypt_generic_init($cipher, $key, $iv);
$decrypted = mdecrypt_generic($cipher,base64_decode($encrypted_text));
mcrypt_generic_deinit($cipher);
$last_char=substr($decrypted,-1);
for($i=0;$i<$bit_check-1; $i++){
    if(chr($i)==$last_char){
        
        
        
        $decrypted=substr($decrypted,0,strlen($decrypted)-$i);
        break;
    }
}
return $decrypted;
}

if(isset($_POST['enter']))
{
$key = $_POST['key'];// 24 bit Key
$iv = "fYfhHeDm";// 8 bit IV
$input = $_POST['data'];// text to encrypt
$bit_check=8;// bit amount for diff algor.

//$str= encrypt($input,$key,$iv,$bit_check);
//echo "Start: $input - Excrypted: $str - Decrypted: ".decrypt($str,$key,$iv,$bit_check);



		$enc=encrypt($input,$key,$iv,$bit_check);

$dec=decrypt($enc,$key,$iv,$bit_check);

echo "Enc : $enc <br>";
echo "Dec : $dec <br>";
}
?>