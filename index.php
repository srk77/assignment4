<?php

$obj = new main();

class main
{

// private $html; 

public function __construct()
{

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24"; 
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo htmlTags::breakLine();

echo htmlTags::headingThree("Replace String Example");
$date = stringOperation::stringReplace('-','/',$date);
echo $date;
echo htmlTags::breakLine();


echo htmlTags::headingThree("Compare String Example");
echo stringOperation::stringCompare($date,$tar);
echo htmlTags::breakLine();

echo htmlTags::headingThree("Word Count Example");
echo stringOperation::stringWordcount($date);
echo htmlTags::breakLine();

echo htmlTags::headingThree("Find Position Example:");
echo stringOperation::printPositions($date, "/");
echo htmlTags::breakLine();

echo htmlTags::headingThree("String Length Example");
echo stringOperation::stringLength($date);
echo htmlTags::breakLine();

echo htmlTags::headingThree("ASCII Value Example");
echo stringOperation::stringASCII('2');
echo htmlTags::breakLine();

echo htmlTags::headingThree("Last two characters of the string are: ");
echo stringOperation::stringCharacter($date,8);
echo htmlTags::breakLine();

echo htmlTags::headingThree("String into Array Example:");
echo stringOperation::stringExplode("/",$date);
echo htmlTags::breakLine();

echo htmlTags::headingThree("Check Leap Year using foreach:");
echo arrayLeapYear::arrayForeach($year); 
echo htmlTags::breakLine();

echo htmlTags::headingThree("Check Leap Year using For Loop:");
echo arrayLeapYear::arrayIf($year);

echo htmlTags::breakLine();
}
 }

  class stringOperation
  {

   static public function stringReplace($src,$target,$str)
    {
      $str = str_replace($src,$target,$str);
        return $str;
    }

  static public function stringCompare($string1,$string2)
   {
     if($string1==$string2)
       {
         echo "Oops";
       }
        else if($string1>$string2)
       {
         return "The Future";
       }
     else if($string1<$string2)
      {
         return "The Past";
	   }
    }

	     static public function printPositions($date, $val)
	      {
	        return strpos($date, $val);

    	   }
	    static public function stringWordcount($string1)
	     {
                return str_word_count($string1);
	       }

	 static public function stringLength($string1)
		  {
		    return strlen($string1);
	     }

	      static public function stringASCII($string1)
	      {
	         return ord($string1);
	      }

	   static public function stringCharacter($string1,$value)
	    {
	      return substr($string1,$value);
	      }

     static public function stringExplode($value,$string1)
	     {

	   $arr = explode($value,$string1);
           foreach($arr as $a)
           echo $a."\r";
             }

      }

	class arrayLeapYear 
	{
         static public function arrayForeach($years)
		{
		foreach($years as $year)
	        { 
	         arrayLeapYear::checkLeapYear($year);
	       }
	         }
		   static public function arrayIf($years)
   	   {
	   for($i=0; $i<count($years); $i++)
	   {
	   arrayLeapYear::checkLeapYear($years[$i]);
          }
       }
	   static public function checkLeapYear($year)
	   {
	   $val = ( ($year % 4 == 0) and ($year % 100 != 0) or ($year % 400 == 0) );
	   $str = '';
	   switch ($val) 
	   {
		   case 1:
			   echo 'True'."\r";
			   break;
			   default:
			   echo 'False'."\r";
			   break;
		   }
	   }
	   }
	   class htmlTags
             {
	     static public function horizontalRule() 
	      {
	             return '<hr>';
	         }
		     static public function headingOne($text) 
		         {
				       return '<h1>' . $text . '</h1>';
	         }
	     static public function headingThree($text)
	        {
	       return '<h3>' .$text . '</h1>';
            }
	    static  public  function  breakLine()
																			           {
																				        return
																					'<br>';
																					    }
																					    }
																					    ?>


