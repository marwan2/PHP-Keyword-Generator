<?php

class Keywords
{
	public static function generateKeywords($str)
    {
        $min_word_length = 3;
        $avoid = ['the','to','i','am','is','are','he','she','a','an','here','there','can','could','were','has','have','had','been','welcome','of','home','&nbsp;','&ldquo;','words','into','this','there'];
        $strip_arr = ["," ,"." ,";" ,":", "\"", "'", "“","”","(",")", "!","?"];

        $str_clean = str_replace( $strip_arr, "", $str);
        $str_arr = explode(' ', $str_clean);
        $clean_arr = [];
        foreach($str_arr as $word)
        {
            if(strlen($word) > $min_word_length)
            {
                $word = strtolower($word);
                if(!in_array($word, $avoid)) {
                    $clean_arr[] = $word;
                }
            }
        }

        return implode(',', $clean_arr);
    }
}