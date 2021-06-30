<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function isSubSequence(Request $request) 
        { 
            
                $str2 = $request->str2; 
                
                $num = $request->num;
                         
                $strr=array();
                $strr=$request->get('str');           
              
              //  echo $str2."<br/>";  //print virus comp.
             
                foreach($strr as $str1)
                {
                     $m = strlen($str1); 
                     $n = strlen($str2); 
                    if ($m == 0) return "Composition Require"; 
                    if ($n == 0) return "Composition Require"; 

                        $i=0;
                        $j=0;

                        while($i<$m && $j<$n)
                            {
                             if($str1[$i]==$str2[$j])
                                {
                                    $i++;
                                }

                             if($m===$i)
                                {
                                    print "POSITIVE";
                                                                    
                                    
                                }
                                $j++;
                                
                             }
                             print "NEGATIVE";
                
                                echo "<br/>";
                                
                            }
            
        }   
} 
  



