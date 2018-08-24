<?php

class ClearPar
{
    public static function build($str)
    {
        $cleanString = "";
        //SEARCH '()' AND PUSH IN MULTI ARRAY
        preg_match_all('/\(\)/', $str, $matches, PREG_OFFSET_CAPTURE);

        if (count($matches[0]) > 0) {
            //FILL STRING WITH EVERY MATCH
            foreach ($matches[0] as $key => $value)
                $cleanString .= substr($str, $value[1], 2);
        }

        return $cleanString == "" ? "No posee parentesis" : $cleanString;
    }
}

var_dump(ClearPar::build("((())"));
exit;