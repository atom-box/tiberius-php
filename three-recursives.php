<?php
// Solve the following three problems recursively

/*
  /$$    
 /$$$$    
|_  $$    
  | $$    
  | $$    
  | $$    
 /$$$$$$  
|______/  
        
Given a string, return recursively a "cleaned" string where adjacent chars that 
are the same have been reduced to a single char. So "yyzzza" yields "yza".
*/

function stringClean($s){
    // todo FAIL DELIBERATELY NOT CHECK THE FINAL CHAR, RETURN IT NO MATTER WHAT todo
    $i = 0;
    $recentChar = [''];
    while (strlen($s) > $i){
        $recentChar[] = substr($s, $i, 1);
        // Set flag to T/F  and unload left side of queue
        $justSaw = ( array_shift($recentChar) ===  substr($s, $i, 1));
        if($justSaw){
            $i++;
            continue;
        } else {
            echo ("Looking at: ".substr($s, $i, 1)."\n");
            $i++;
        }
        // IF YOU JUST SAW THIS A MINUTE AGO 
        //     i++;
        // IF THIS IS UNFAMILIAR, RETURN JUST IT
        // $i++;
    }

}

echo(stringClean("yyzzza")."\n"); // "yza"
echo(stringClean("abbbcdd")."\n"); // "abcd"
echo(stringClean("Hello")."\n"); // "Helo"
          
/*          
  /$$$$$$ 
 /$$__  $$
|__/  \ $$
  /$$$$$$/
 /$$____/ 
| $$      
| $$$$$$$$
|________/
          
          
          
  /$$$$$$ 
 /$$__  $$
|__/  \ $$
   /$$$$$/
  |___  $$
 /$$  \ $$
|  $$$$$$/
 \______/ 
        
 */