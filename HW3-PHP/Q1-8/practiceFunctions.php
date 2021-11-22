<?php
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





?>