<?php

class ChangeString
{
    public static function build($str)
    {
        //ABC...Z
        $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r',
            's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

        //STRING TO ARRAY
        $array = str_split($str);

        //WILL BE FILL IN FOREACH
        $newStr = "";
        foreach ($array as $item) {
            $newItem = $item;
            if (in_array(strtolower($item), $letters)) {
                $newItem = ++$item;
                if (strlen($newItem) > 1) {
                    $newItem = $newItem[0];
                }
            }
            $newStr .= $newItem;
        }

        //RETURN
        return $newStr;
    }
}

echo ChangeString::build("**Casa 52Z");