<?php

class ChangeString
{
    public static function build($str)
    {
        //SET ARRAY LETTERS
        $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r',
            's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

        //STRING TO ARRAY
        $array = str_split($str);

        //WILL BE FILL IN FOREACH
        $newStr = "";
        foreach ($array as $item) {
            //SET SAME VALUE WHEN IS NOT A LETTER
            $newItem = $item;
            //CHECK IF CHARACTER IS IN ARRAY LETTERS
            if (in_array(strtolower($item), $letters)) {
                //ONLY FOR N -> Ñ
                if (strtolower($item) == "n") {
                    $newItem = ctype_lower($item) ? "ñ" : "Ñ";
                } else {
                    //SET NEXT LETTER
                    $newItem = ++$item;
                    //ONLY FOR Z -> A
                    if (strlen($newItem) > 1) {
                        $newItem = $newItem[0];
                    }
                }
            }
            //FILL THE NEW STRING
            $newStr .= $newItem;
        }

        //RETURN NEW STRING
        return $newStr;
    }
}

echo ChangeString::build("**nasa 52Z");