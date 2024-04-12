<?php

namespace JQMock;

class JQMock {

    public function __construct()
    {  
    }

    public static function execForPath($path, $query) {

        $command = "bash -c \"cat $path | jq $query\"";
    
        $output = [];
    
        exec($command, $output);
    
        return $output;
    
    }

}


