<?php

class CompleteRange
{
    public static function build($arrayNumbers)
    {
        //NEW ARRAY TO FILL
        $newArray = [];
        for ($i = 0; $i < count($arrayNumbers); $i++) {
            //SET CURRENT NUMBER FROM ARRAY
            $currentNumber = $arrayNumbers[$i];
            //SET NEXT NUMBER FROM ARRAY
            $nextNumber = isset($arrayNumbers[$i + 1]) ? $arrayNumbers[$i + 1] : null;

            //CHECK IF NEXT NUMBER IN ARRAY IS NULL
            if (!$nextNumber) {
                if ((count($arrayNumbers) - 1) == $i) {
                    $newArray[] = $currentNumber;
                    break;
                }
                return "El array no es ascendente";
            } else if ($currentNumber == $nextNumber || $currentNumber > $nextNumber) { //CHECK IF ARRAY IS NOT ASC
                return "El array no es ascendente";
            }

            //SET CURRENT NUMBER TO NEW ARRAY
            $newArray[] = $currentNumber;

            //DIFF BETWEEN NEXT AND CURRENT
            $diff = $nextNumber - $currentNumber;
            //CHECK IF IS NECESSARY FILL ARRAY WITH LOST NUMBERS
            if ($diff > 1) {
                for ($j = ($currentNumber + 1); $j < $nextNumber; $j++) {
                    $currentNumberPlus = $j;
                    $newArray[] = $currentNumberPlus;
                }
            }

        }

        //RETURN
        return $newArray;
    }
}

var_dump(CompleteRange::build([55, 58, 60]));
exit;