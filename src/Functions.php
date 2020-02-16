<?php
namespace Reaktion;

class Functions
{
    /**
     * @param $string
     * @param int $num
     * @return mixed
     */
    public function setLeftPadding($string, int $num = 1)
    {
        if ($num == 0) $num = 1;
        $result = str_replace('\n', '\n'.str_repeat(" ", $num), $string);
        return $result;
    }

    public function getMaximumMultiplication($array)
    {
        $first = $second = 0;
        $first = max($array);
        $k_first = array_search($first, $array);
        $array2 = $array;
        unset($array2[$k_first]);
        $second = max($array2);
        return $first * $second;
    }
}