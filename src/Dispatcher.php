<?php

namespace Reaktion;

use Reaktion\Functions;

class Dispatcher
{
    public function run($param){
        $functions = new Functions;
        $result = 0;
        switch ($param[1]){
            case "padding":
                if (!isset($param[3])) $param[3] = 1;
                $result = $functions->setLeftPadding($param[2], $param[3]);
                break;
            case "multiplication":
                $file_name = $param[2];
                $content = json_decode(file_get_contents($file_name))->data;
                $result = $functions->getMaximumMultiplication($content);
                break;
        }

        $output = new Output();
        $output->show($result);
    }
}