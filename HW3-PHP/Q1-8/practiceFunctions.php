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





?>