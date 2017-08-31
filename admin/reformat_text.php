<?php


function html2specialchars($str){
    $trans_table = array_flip(get_html_translation_table(HTML_ENTITIES));
    return strtr($str, $trans_table);
}

function convertLatin1ToHtml($str) {
$allEntities = get_html_translation_table(HTML_ENTITIES, ENT_NOQUOTES);
$specialEntities = get_html_translation_table(HTML_SPECIALCHARS, ENT_NOQUOTES);
$noTags = array_diff($allEntities, $specialEntities);
$str = strtr($str, $noTags);
return $str;
}

function unhtmlentities ($string) {
   $trans_tbl =get_html_translation_table (HTML_ENTITIES );
   $trans_tbl =array_flip ($trans_tbl );
   return strtr ($string ,$trans_tbl );
}

function convert_chars_to_entities( $str )
{
    $str = str_replace( 'À', '&#192;', $str );
    $str = str_replace( 'Á', '&#193;', $str );
    $str = str_replace( 'Â', '&#194;', $str );
    $str = str_replace( 'Ã', '&#195;', $str );
    $str = str_replace( 'Ä', '&#196;', $str );
    $str = str_replace( 'Å', '&#197;', $str );
    $str = str_replace( 'Æ', '&#198;', $str );
    $str = str_replace( 'Ç', '&#199;', $str );
    $str = str_replace( 'È', '&#200;', $str );
    $str = str_replace( 'É', '&#201;', $str );
    $str = str_replace( 'Ê', '&#202;', $str );
    $str = str_replace( 'Ë', '&#203;', $str );
    $str = str_replace( 'Ì', '&#204;', $str );
    $str = str_replace( 'Í', '&#205;', $str );
    $str = str_replace( 'Î', '&#206;', $str );
    $str = str_replace( 'Ï', '&#207;', $str );
    $str = str_replace( 'Ð', '&#208;', $str );
    $str = str_replace( 'Ñ', '&#209;', $str );
    $str = str_replace( 'Ò', '&#210;', $str );
    $str = str_replace( 'Ó', '&#211;', $str );
    $str = str_replace( 'Ô', '&#212;', $str );
    $str = str_replace( 'Õ', '&#213;', $str );
    $str = str_replace( 'Ö', '&#214;', $str );
    $str = str_replace( '×', '&#215;', $str );  // Yeah, I know.  But otherwise the gap is confusing.  --Kris
    $str = str_replace( 'Ø', '&#216;', $str );
    $str = str_replace( 'Ù', '&#217;', $str );
    $str = str_replace( 'Ú', '&#218;', $str );
    $str = str_replace( 'Û', '&#219;', $str );
    $str = str_replace( 'Ü', '&#220;', $str );
    $str = str_replace( 'Ý', '&#221;', $str );
    $str = str_replace( 'Þ', '&#222;', $str );
    $str = str_replace( 'ß', '&#223;', $str );
    $str = str_replace( 'à', '&#224;', $str );
    $str = str_replace( 'á', '&#225;', $str );
    $str = str_replace( 'â', '&#226;', $str );
    $str = str_replace( 'ã', '&#227;', $str );
    $str = str_replace( 'ä', '&#228;', $str );
    $str = str_replace( 'å', '&#229;', $str );
    $str = str_replace( 'æ', '&#230;', $str );
    $str = str_replace( 'ç', '&#231;', $str );
    $str = str_replace( 'è', '&#232;', $str );
    $str = str_replace( 'é', '&#233;', $str );
    $str = str_replace( 'ê', '&#234;', $str );
    $str = str_replace( 'ë', '&#235;', $str );
    $str = str_replace( 'ì', '&#236;', $str );
    $str = str_replace( 'í', '&#237;', $str );
    $str = str_replace( 'î', '&#238;', $str );
    $str = str_replace( 'ï', '&#239;', $str );
    $str = str_replace( 'ð', '&#240;', $str );
    $str = str_replace( 'ñ', '&#241;', $str );
    $str = str_replace( 'ò', '&#242;', $str );
    $str = str_replace( 'ó', '&#243;', $str );
    $str = str_replace( 'ô', '&#244;', $str );
    $str = str_replace( 'õ', '&#245;', $str );
    $str = str_replace( 'ö', '&#246;', $str );
    $str = str_replace( '÷', '&#247;', $str );  
    $str = str_replace( 'ø', '&#248;', $str );
    $str = str_replace( 'ù', '&#249;', $str );
    $str = str_replace( 'ú', '&#250;', $str );
    $str = str_replace( 'û', '&#251;', $str );
    $str = str_replace( 'ü', '&#252;', $str );
    $str = str_replace( 'ý', '&#253;', $str );
    $str = str_replace( 'þ', '&#254;', $str );
    $str = str_replace( 'ÿ', '&#255;', $str );
    $str = str_replace( 'ÿ', '&#255;', $str );

	$str = str_replace('Ş',"&#350;",$str);
	$str = str_replace('Ŝ',"&#348;",$str);
	$str = str_replace('ŝ',"&#349;",$str);
	$str = str_replace('Ẋ',"&#7818;",$str);
	$str = str_replace('ẋ',"&#7819;",$str);
	
	$str = str_replace('â€˜',"\'",$str); 
	$str = str_replace('â€œ',"\'",$str);
	$str = str_replace('â€™',"\'",$str);
	$str = str_replace('ị','&#7820;',$str);
	$str = str_replace('ọ','&#7821;',$str);
	$str = str_replace('ụ','&#7822;',$str);
	$str = str_replace('Ị','&#7823;',$str);
	$str = str_replace('Ọ','&#7824;',$str);
	$str = str_replace('Ụ','&#7825;',$str);
	$str = str_replace('ń','&#7826;', $str);
	$str = str_replace('Ń', '&#7827;', $str);
	
	
    return $str;
}


 function keephtml($str){
          //$str = htmlentities($str);
    $str = str_replace( '&#192;', 'À', $str );
    $str = str_replace( '&#193;', 'Á', $str );
    $str = str_replace( '&#194;', 'Â', $str );
    $str = str_replace( '&#195;', 'Ã', $str );
    $str = str_replace( '&#196;', 'Ä', $str );
    $str = str_replace( '&#197;', 'Å', $str );
    $str = str_replace( '&#198;', 'Æ', $str );
    $str = str_replace( '&#199;', 'Ç', $str );
    $str = str_replace( '&#200;', 'È', $str );
    $str = str_replace( '&#201;', 'É', $str );
    $str = str_replace( '&#202;', 'Ê', $str );
    $str = str_replace( '&#203;', 'Ë',  $str );
    $str = str_replace( '&#204;', 'Ì', $str );
    $str = str_replace( '&#205;', 'Í', $str );
    $str = str_replace( '&#206;', 'Î', $str );
    $str = str_replace( '&#207;', 'Ï', $str );
    $str = str_replace( '&#208;', 'Ð', $str );
    $str = str_replace( '&#209;', 'Ñ', $str );
    $str = str_replace( '&#210;', 'Ò', $str );
    $str = str_replace( '&#211;', 'Ó', $str );
    $str = str_replace( '&#212;', 'Ô', $str );
    $str = str_replace( '&#213;', 'Õ', $str );
    $str = str_replace( '&#214;', 'Ö', $str );
    $str = str_replace( '&#215;', '×', $str );  // Yeah, I know.  But otherwise the gap is confusing.  --Kris
    $str = str_replace( '&#216;', 'Ø', $str );
    $str = str_replace( '&#217;', 'Ù', $str );
    $str = str_replace( '&#218;', 'Ú', $str );
    $str = str_replace( '&#219;', 'Û', $str );
    $str = str_replace( '&#220;', 'Ü', $str );
    $str = str_replace( '&#221;', 'Ý', $str );
    $str = str_replace( '&#222;', 'Þ', $str );
    $str = str_replace( '&#223;', 'ß', $str );
    $str = str_replace( '&#224;', 'à', $str );
    $str = str_replace( '&#225;', 'á', $str );
    $str = str_replace( '&#226;', 'â', $str );
    $str = str_replace( '&#227;', 'ã', $str );
    $str = str_replace( '&#228;', 'ä', $str );
    $str = str_replace( '&#229;', 'å', $str );
    $str = str_replace( '&#230;', 'æ', $str );
    $str = str_replace( '&#231;', 'ç', $str );
    $str = str_replace( '&#232;', 'è', $str );
    $str = str_replace( '&#233;', 'é', $str );
    $str = str_replace( '&#234;', 'ê', $str );
    $str = str_replace( '&#235;', 'ë', $str );
    $str = str_replace( '&#236;', 'ì', $str );
    $str = str_replace( '&#237;', 'í', $str );
    $str = str_replace( '&#238;', 'î', $str );
    $str = str_replace( '&#239;', 'ï', $str );
    $str = str_replace( '&#240;', 'ð', $str );
    $str = str_replace( '&#241;', 'ñ', $str );
    $str = str_replace( '&#242;', 'ò', $str );
    $str = str_replace( '&#243;', 'ó', $str );
    $str = str_replace( '&#244;', 'ô', $str );
    $str = str_replace( '&#245;', 'õ', $str );
    $str = str_replace( '&#246;', 'ö', $str );
    $str = str_replace( '&#247;', '÷', $str );  
    $str = str_replace( '&#248;', 'ø', $str );
    $str = str_replace( '&#249;', 'ù', $str );
    $str = str_replace( '&#250;', 'ú', $str );
    $str = str_replace( '&#251;', 'û', $str );
    $str = str_replace( '&#252;', 'ü', $str );
    $str = str_replace( '&#253;', 'ý', $str );
    $str = str_replace( '&#254;', 'þ', $str );
    $str = str_replace( '&#255;', 'ÿ', $str );
    $str = str_replace( '&#255;', 'ÿ', $str );

	$str = str_replace("&#350;",'Ş',$str);
	$str = str_replace("&#348;",'Ŝ',$str);
	$str = str_replace("&#349;",'ŝ',$str);
	$str = str_replace("&#7818;",'Ẋ',$str);
	$str = str_replace("&#7819;",'ẋ',$str);
	
	$str = str_replace("\'",'â€˜',$str); 
	$str = str_replace("\'",'â€œ',$str);
	$str = str_replace("\'",'â€™',$str);
	
	
	$str = str_replace("&#39;","'",$str);
	$str = str_replace('&#7820;', 'ị', $str);
	$str = str_replace('&#7821;', 'ọ', $str);
	$str = str_replace('&#7826;', 'ń', $str);
	$str = str_replace('&#7822;', 'ụ', $str);
	$str = str_replace('&#7823;', 'Ị', $str);
	$str = str_replace('&#7824;', 'Ọ', $str);
	$str = str_replace('&#7827;', 'Ń', $str);
	$str = str_replace('&#7825;', 'Ụ', $str);

    $str = str_replace("&lt;", "<", $str);
	$str = str_replace("&gt;", ">", $str);
	$str = str_replace("&quot;", "'", $str);
	$str = str_replace("&amp;", '&', $str);
	$str = str_replace("&#34;", '"', $str);
   	//$str =  trim(utf8_encode($str)) ;

        $str = iconv("UTF-8", "UTF-8//IGNORE", trim($str));
         return $str;
 }


function reformat_text($s_text) {
    try {

        $s_text = str_replace("’", "'", $s_text);
         $s_text = str_replace("–", "-", $s_text);
          $s_text = str_replace("&#350;",'Ş',$s_text);
          $s_text = str_replace("&#7818;",'Ẋ',$s_text);
          $s_text = str_replace("&#7819;",'ẋ',$s_text);
         //$s_text = str_replace("&", "n", $s_text);
        $s_text =  trim(utf8_encode($s_text)) ;

        $s_text = iconv("UTF-8", "UTF-8//IGNORE", trim($s_text));

        return trim($s_text);
        
        
    } catch (Exception $eX) {
        return $s_text;
    }
}




function remove_accent($str)
{
  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
  return str_replace($a, $b, $str);
}

function post_slug($str)
{
  return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),
  array('', ' ', ''), remove_accent($str)));
} 

function leading_zero( $aNumber, $intPart, $floatPart=NULL, $dec_point=NULL, $thousands_sep=NULL) { 
//Note: The $thousands_sep has no real function because it will be "disturbed" by plain leading zeros -> the main goal of the function
 $formattedNumber = $aNumber;
 if (!is_null($floatPart)) { //without 3rd parameters the "float part" of the float shouldn't be touched
   $formattedNumber = number_format($formattedNumber, $floatPart, $dec_point, $thousands_sep);
   }
 //if ($intPart > floor(log10($formattedNumber)))
   $formattedNumber = str_repeat("0",($intPart + -1 - floor(log10($formattedNumber)))).$formattedNumber;
 return $formattedNumber;
 }

function madSafety($string)
{
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}


function xml_entities($string) {
    return strtr(
        $string, 
        array(
            "<" => "&lt;",
            ">" => "&gt;",
            '"' => "&quot;",
            "'" => "&apos;",
            "&" => "&amp;",
        )
    );
}

?>