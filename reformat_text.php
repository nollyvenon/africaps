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
          $str = str_replace('Ş',"&#350;",$str);
          $str = str_replace('Ŝ',"&#348;",$str);
          $str = str_replace('ŝ',"&#349;",$str);
          $str = str_replace('Ẋ',"&#7818;",$str);
          $str = str_replace('ẋ',"&#7819;",$str);
		  
		  $str = str_replace('â€˜',"‘",$str); 
		  $str = str_replace('â€œ','“',$str);
		  $str = str_replace('â€™','’',$str);
	//$str = utf8_decode($str);
    return $str;
}

 function keephtml($str){
          //$str = htmlentities($str);
          $str = str_replace("&lt;","<",$str);
          $str = str_replace("&gt;",">",$str);
          $str = str_replace("&quot;","'",$str);
          $str = str_replace("&amp;",'&',$str);
          $str = str_replace("&#350;",'Ş',$str);
          $str = str_replace("&#348;",'Ŝ',$str);
          $str = str_replace("&#349;",'ŝ',$str);
          $str = str_replace("&#7818;",'Ẋ',$str);
          $str = str_replace("&#7819;",'ẋ',$str);
          $str = str_replace("&#192;",'À',$str);
          $str = str_replace('â€™',"'",$str);
          $str = str_replace('Ã¢â¬â¢',"'",$str);
         $str =  trim(utf8_encode($str)) ;

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