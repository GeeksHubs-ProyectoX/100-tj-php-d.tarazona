<?php
namespace FizzBuzz;

class FizzBuzz
{
    public function apply($index)
    {
        $result = '';
        for ($i=1; $i <= $index ; $i++) {
            
            if($i % 5 === 0 && $i % 3 === 0){
                $result .= 'GeeksHubs\n';
                continue;
            }
            
            if($i % 3 === 0){
                $result .= 'Geeks\n';
                continue;
            }

            if($i % 5 === 0){
                $result .= 'Hubs\n';
                continue;
            }

            $result .= $i.'\n';            
        }        

        return $result;
    }
}
