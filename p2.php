<?php   


$word = 1;
$number = False;
$symbol = False;
$caps = False;

$word = $_POST[numWords];

if (strcasecmp($_POST[number], "True") == 0)
	     $number = True;

if (strcasecmp($_POST[symbol], "True") == 0)
       $symbol = True;
       
if (strcasecmp($_POST[caps], "True") == 0)
       $caps = True;        
       
              

$dictionary = Array(
   'edit',
   'mango',
   'refrigerator',
   'simply',
   'spring',
   'represent',
   'influence',
   'neutral',
   'scribe',
   'represent',
   'blissfully',
   'dummying',
   'more',
   'taggard',
   'crawling',
   'number',
   'books',
   'clipping',
   'refining',
   'disfiguration',
   'comfort'
   
   );  //21 words in dictionary
   
$wordCount = 21;

//Generate words 

$index =  rand (0, $wordCount-1);
       $password = $dictionary[$index];

for ($i = 1; $i < $word; $i++)
       {
               
               $newIndex = rand (0, $wordCount-1);
               $nextWord = $dictionary[$newIndex];
               $password.= '-' ;
               $password .= $nextWord;
       }

if ($number)
{
       $randNum = rand(0, 99);
       $num = strval($randNum);
       $password.= $num;
}

if($symbol)
       $password.= '@' ;
       
if($caps)
       $password = ucfirst($password) ;
 
echo $password;
