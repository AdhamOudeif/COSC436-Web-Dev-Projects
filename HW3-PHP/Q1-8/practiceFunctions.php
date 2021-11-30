<?php
/* 1.Write a function named factors that finds the factors of a number. The function takes a 
number as a parameter and returns a string. The string contains the factors separated by commas 
and spaces. The factors include 1 and the number. The number is a positive integer.*/

function factors($num){
    $factors = '';
    for($i = $num; $i > 0; $i--){
        $add = $num % $i;
        if ($add === 0){
            $factors = "$factors$i, ";
        }
    }
    return $factors;
}
echo factors(48);

/* 2. Write a function named tax that computes the tax according to the following tax rules. The 
tax depends on the income and the marital status. If single and income is less than 30000 then tax 
rate is 20%. If single and income is greater or equal to 30000 then tax rate is 25%. If married and 
income is less than 50000 then tax rate is 10%. If married and income is greater or equal to 
50000 then tax rate is 15%. The function takes the income and the marital status as parameters 
and returns the tax amount. The income is a positive number. The status is a string single or 
married in lower or upper case. */
function tax($status, $income){
    $taxRate=0;
    $x = $income;
    
    if(strtolower($status) == "s"){
        switch(true){
              case $x < 30000:
                $taxRate = 0.2;
                break;
            case $x >= 30000:
                $taxRate = 0.25;
                break;
        }
    }
        else if(strtolower($status) == "m"){
        switch (true) {
            case $x < 50000:
                $taxRate = 0.1;
                break;
            case $x >= 50000:
                $taxRate = 0.15;
                break;
        }
    }else {
        return "Please select appropriate option!";
    }
    return ($x * $taxRate);
}

$stat = "M";
$income2 = 35000;
$results= tax($stat, $income2);
echo $results;

/*3. Write a function named stdDev that computes the standard deviation of a set of numbers. 
The function takes the numbers in an array parameter and returns the standard deviation. The 
standard  deviation  of  n  numbers  x1, x2 . . . xn  is  the  square  root  of  [((x1-m)2 + 
(x2-m)2 + . . .  + (xn-m)2)/n] where m is the average of the numbers. If there are 
less than two numbers the standard deviation is 0.
*/ 
function stdDev($numArray) {
    if (count($numArray) < 2){
        return 0;
    }
    $sum1 = 0;
    $sum2 = 0;

    for($i = 0; $i < count($numArray); $i++){
        $sum1 = $sum1 + $numArray[$i];
    }

    $mean = ($sum1 / count($numArray));
    
    for($i = 0; $i < count($numArray); $i++){
        $sum2 = $sum2 + pow(($numArray[$i] - $mean), 2);
    }

    $stdDevation = sqrt($sum2 / count($numArray));

    return $stdDevation;
}



/* 4. Write a function named compoundInterest that computes the compound interest. If p 
amount is invested for n years with interest rate r and the money is compounded annually then 
the final amount will be p(1 + r/100)n . The function takes initial amount p, interest rate r 
which  is  between  0  and  100,  and  the  number  of  years  n  as  parameters  and  returns  the  final 
amount. The parameter values are all positive. */


function compoundInterest($p, $r, $n) {
    $calculation = $p * pow((1 + ($r / 100)), $n);
    return $calculation;
}

$interestcalc = compoundInterest(2000, 80, 5);
echo $interestcalc;

/*5. Write a function named createIdPassword that takes a last name and a first name as 
parameters and returns an associative array containing an id and a password. The id is the first 
letter of the first name followed by the last name. The password is the first letter of the first name 
followed by the last letter of the first name followed by the first three letters of the last name 
followed by the length of the first name followed by the length of the last name. Both id and 
password  are  all  upper  case.  For  example  if  the  first  name  is  John  and  the  last  name  is 
Maxwell then the id is JMAXWELL and the password is JNMAX47. The returned associative 
array has two keys namely id and password, and their values are set to the id and password that 
are created.*/


function createIdPassword($fname, $lname){
    $id = $fname[0] . $lname;
    $pw = $fname[0] . $fname[strlen($fname)-1] . substr($lname, 0, 3). strlen($fname). strlen($lname);

    $login = array("id" => strtoupper($id),  
                   "password" => strtoupper($pw));

    return $login;
}
$test = createIdPassword('John', 'Maxwell');

foreach ($test as $key=>$value) 
  { 
      echo "key is $key "; 
      echo "value is $value \n"; 
  } 

/* 6. Write a function named removeDuplicates that takes an array of strings as parameter and 
returns a duplicate free array. The calling/parameter array does not change. The unique strings of 
the calling array are placed in a newly created array and it is returned. For example if the calling 
array  is  [tree, cat, box, cat, dog, tree, tree]  then  the    returned  array  is 
[tree, cat, box, dog]. */

function unique($a) {
    $arr = array();
    for ($i = 0; $i < count($a); $i++) {
        if (!in_array(($a[$i]),$arr)) {
            array_push($arr,$a[$i]);
        }
    }
    return $arr;
}

$arr2 = array("tree", "cat", "box", "cat", "dog", "tree", "tree");

$uniArr = unique($arr2);
print_r($uniArr);

/* 7. Write a class called Student. The class has two private data members called name and gpa. 
The class has a constructor that takes a name and a gpa and set them to the data members of the 
class. The class getName, getGpa, setName, and setGpa methods that get and set name 
and gpa. The class has isHonors method which returns true/false depending on whether 
gpa is above or below 3. */


class Student{
    private $name;
    private $gpa;
    
    public function __construct($name, $gpa){
        $this->name = $name; 
        $this->gpa = $gpa; 
    }
    
    public function setName($name) 
     { 
         $this->name = $name; 
     } 
 
     public function setGpa($gpa) 
     { 
         $this->gpa = $gpa; 
     } 
 
     public function getName() 
     { 
         return $this->name; 
     } 
 
     public function getGpa() 
     { 
         return $this->gpa; 
     }
     
     public function isHonors(){
         return (($this->gpa > 3) ? 'TRUE' : 'FALSE');
     }
}

$result = new Student("oudeif", 4);
print $result->getName();
print $result->isHonors(); 

/*8. 
Write a function named university that takes a string as a parameter and decides whether 
it is a valid university id. The university id format is E-0xxy-9yyx. Write a method named 
phone that takes a string as a parameter and decides whether it is a valid phone number with 
area code 313 or 248 or 734. The phone number format is xxx-xxx-xxxx. Here x is a digit 
and y is a lower case letter. These functions return true/false. The code must be based on 
regular expressions.
*/
function university($id) {
    $test = 'False';
    if (preg_match("/^E-0\d{2}[a-z]{1}-9[a-z]{2}\d{1}$/i", $id)) {
        $test = 'TRUE';
    }
    return $test;
}
function phone($num) {
    $test = 'False';
    if (preg_match("/^\d{3}-\d{3}-\d{4}$/i", $num)) {
        $numArr = explode('-', $num);
        if ($numArr[0] == '313' || $numArr[0] == '248' || $numArr[0] == '734') {
            $test = 'True';
        }
    }
    return $test;
}
phone('313-502-2006');
university('E-055G-9GG5');
