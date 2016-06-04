<?php

namespace Controllers\Core\Web;

class Pages
{

    public function render()
    {

        return 'Hello World';

    }

    public function returnTrue()
    {

        return true;

    }

    public function returnArray()
    {

        return array('Hello', 'World', 'This', 'Is', 'An', 'Array');

    }
   
    public function sumArray($arr_values){    	
    	
    	$local_array =  array_filter($array_values, function ($value){
    		return is_int($value) ? $value : 0; 
    	 } );
    	return   array_sum($arr_values); 
    	
    }
	
}