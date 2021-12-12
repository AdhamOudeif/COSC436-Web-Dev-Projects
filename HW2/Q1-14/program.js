//Problems 1 - 14 

/* Submission of Adham Oudeif and Hussein Mohsin - Fall 2021 - COSC 436 */

//#1
/* Write a function named middle that finds the middle value of three numbers. The function 
takes three numbers as parameters and returns the middle value. The middle value means the 
value that is greater than the smallest value and less than the largest value. */

function middle(x, y, z) {
    var mid;
    mid = (x > y && x < z) || (x < y && x > z) ? x :
        mid = (y > x && y < z) || (y < x && y > z) ? y :
            mid = z


    return mid;
}

middle(2, 1, 3);

//#2
/*Write a function named factors that finds the factors of a number. The function takes a 
number as a parameter and returns a string. The string contains the factors separated by commas 
and spaces. The factors include 1 and the number. The number is a positive integer.*/

function factors(x) {
    var arr = [];
    for (var i = x; i > 0; i--) {
        var add = x % i;
        if (add === 0) {
            arr.push(i);
        }
    }

    return arr.toString();
}

factors(12);

//#3
/* Write a function named tax that computes the tax according to the following tax rules. The 
tax depends on the income and the marital status. If single and income is less than 30000 then tax 
rate is 20%. If single and income is greater or equal to 30000 then tax rate is 25%. If married and 
income is less than 50000 then tax rate is 10%. If married and income is greater or equal to 
50000 then tax rate is 15%. The function takes the income and the marital status as parameters 
and returns the tax amount. The income is a positive number. The status is a string single or 
married in lower or upper case. */

function tax(status, income) {
    var taxRate;
    let x = income;
    if (status.toLowerCase() == "s") {
        switch (true) {
            case x < 30000:
                taxRate = 0.2;
                break;
            case x >= 30000:
                taxRate = 0.25;
                break;

        }
    } else if (status.toLowerCase() == "m") {
        switch (true) {
            case x < 50000:
                taxRate = 0.1;
                break;
            case x >= 50000:
                taxRate = 0.15;
                break;
        }
    } else {
        return "Please select appropriate option!";
    }
    return (x * taxRate);
}
let stat = "M";
let income2 = 35000;
tax(stat, income2);

//#4
/*Write a function named stdDev that computes the standard deviation of a set of numbers. 
The  function  takes  the  numbers  as  a  variable  number  of  parameters  and  returns  the  standard 
deviation.  The  standard  deviation  of  n  numbers  x1,  x2  .  .  .  xn  is  the  square  root  of 
[((x1-m)2  +  (x2-m)2  +  .  .  .    +  (xn-m)2)/n]  where  m  is  the  average  of  the 
numbers. If there are less than two numbers the standard deviation is 0.*/

function stdDev() {
    if (arguments.length < 2) { return 0; }
    var sum = 0;
    var sum2 = 0;
    for (var i = 0; i < arguments.length; i++) {
        sum = sum + arguments[i];
    }
    var mean = (sum / arguments.length);
    for (var j = 0; j < arguments.length; j++) {
        sum2 = sum2 + Math.pow((arguments[j] - mean), 2);
    }

    var stdDevation = Math.sqrt(sum2 / arguments.length);

    return stdDevation;
}

stdDev(1, 2, 3);

//#5
/* Write a function named compoundInterest that computes the compound interest. If p 
amount is invested for n years with interest rate r and the money is compounded annually then 
the final amount will be p(1 + r/100)n . The function takes initial amount p, interest rate r 
which  is  between  0  and  100,  and  the  number  of  years  n  as  parameters  and  returns  the  final 
amount. The parameter values are all positive. */

function compoundInterest(p, r, n) {
    var calculation = p * Math.pow((1 + (r / 100)), n);
    return calculation;
}

compoundInterest(2000, 80, 5);

//#6
/* 
Write a function that takes a character as a parameter and returns its type. The possible types 
are upper, lower, digit, and other. Upper means an upper case letter. Lower means a 
lower case letter. Digit means a numerical digit. Other means all other characters. The return 
value is a string in lower case. Regular expressions cannot be used. 
*/


function determine(p) {
    if (!isNaN(p * 1)) {
        return "Digit";
    } else if (p.toLowerCase() == p.toUpperCase()) {
        return "Other";
    }
    else if (p === p.toLowerCase()) {
        return "Lower";
    } else if (p === p.toUpperCase()) {
        return "Upper";
    }
}

determine("1");

/* 7. Write a function named createIdPassword that takes a last name and a first name as 
parameters and returns an object containing an id and a password. The id is the first letter of the 
first name followed by the last name. The password is the first letter of the first name followed 
by the last letter of the first name followed by the first three letters of the last name followed by 
the length of the first name followed by the length of the last name. Both id and password are all 
upper case. For example if the first name is John and the last name is Maxwell then the id is 
JMAXWELL and the password is JNMAX47. The returned object has two properties namely id 
and password, and their values are set to the id and password that are created. */

function userGen(fname, lname) {
    let id = fname.charAt(0) + lname;
    let pass = fname.charAt(0) + fname.charAt(fname.length - 1) + lname.substring(0, 3) + fname.length + lname.length;
    return id.toUpperCase() + " " + pass.toUpperCase();
}

userGen("John", "Maxwell");

/* 8. Write a function named removeDuplicates that takes an array of strings as parameter and 
returns a duplicate free array. The calling/parameter array does not change. The unique strings of 
the calling array are placed in a newly created array and it is returned. For example if the calling 
array  is  [tree, cat, box, cat, dog, tree, tree]  then  the    returned  array  is 
[tree, cat, box, dog]. */

function unique(a) {
    var arr = [];
    for (var i = 0; i < a.length; i++) {
        if (arr.indexOf(a[i]) == -1) {
            arr.push(a[i]);
        }
    }
    return arr;
}

let arr2 = ["tree", "cat", "box", "cat", "dog", "tree", "tree"];

unique(arr2);

/* 9. Write a function named mySort that takes three arrays and sort/rearrange them in parallel. 
The  three  arrays  contain  information  about  students.  The  first  array  contains  last  names.  The 
second array contains gpa's. The third array contains zip codes. The sorting is performed in the 
ascending order of last names. The function changes the calling/parameter arrays. Built in sorting 
methods cannot be used. Write custom code using selection sort algorithm. */

function mySort(arr1, arr2, arr3) {
    let n = arr1.length;

    for (let i = 0; i < n; i++) {
        // Finding the smallest number in the subarray
        let min = i;
        for (let j = i + 1; j < n; j++) {
            if (arr1[j].charAt(0) < arr1[min].charAt(0)) {
                min = j;
            }
        }
        if (min != i) {
            // Swapping the elements
            let tmp = arr1[i];
            arr1[i] = arr1[min];
            arr1[min] = tmp;

            let tmp2 = arr2[i];
            arr2[i] = arr2[min];
            arr2[min] = tmp2;

            let tmp3 = arr3[i];
            arr3[i] = arr3[min];
            arr3[min] = tmp3;
        }
    }
    return arr1 + "\n" + arr2 + "\n " + arr3;
}
let lastnames = ["Oudeif", "Mohsin", "Dane", "Mick", "Hakim"];
let gpas = ["3.5", "3.7", "3.7", "2.0", "3.0"];
let zipcodes = ["48197", "48108", "48198", "48199", "30005"];
mySort(lastnames, gpas, zipcodes);

/* 10. Write a function named myReverse that takes a line of words as a paramter, reverses the 
order of words, reverses the order of characters in every other word, and returns the result. The 
input and the output are strings. The words are separated by single spaces in the input and the 
output. For example if the line of words is tree is big green then the result is neerg 
big si tree. */

function myReverse(lineOfWords) {
    let stringArray = lineOfWords.split(" ");
    let reversedOrder = "";
    for (let i = stringArray.length - 1; i >= 0; i--) {
        if (i % 2 !== 0) {
            let newWord = "";
            for (let j = stringArray[i].length; j >= 0; j--) {
                newWord = newWord + stringArray[i].charAt(j);
            }
            stringArray[i] = newWord;
        }
        reversedOrder = reversedOrder + " " + stringArray[i];
    }

    return reversedOrder;
}

myReverse("tree is big green");

/* 11. Write a function named ApplyFunctionToArray that takes a function f and an array p 
as parameters. The f is a function that takes a number as a parameter and returns a number as 
output. The p is an array of numbers. The function calls f on each element of p and replaces the 
element with the output of f. For example if f is a square function then all the values in p will 
be squared. The function changes the calling/parameter array.  */

function f(n) {
    return n * 2;
}

function applyFunctionToArray(f, p) {
    for (let j = 0; j < p.length; j++) {
        let temp = f(p[j]);
        p[j] = temp;
    }
    return p;
}

function myFunction() {
    var a = applyFunctionToArray(f, [1, 2, 4, 6]);
    document.getElementById("myID").innerHTML = a;
}

/* 12. Write a class called Student. The class has two properties called name and gpa. The class 
has a constructor that takes a name and a gpa and set them to the properties of the class. The 
class getName, getGpa, setName, and setGpa methods that get and set name and gpa. The 
class has isHonors method which returns true/false depending on whether gpa is above 
or below 3. The class has toString method that returns a string containing name and gpa. */

class Student {
    constructor(name, gpa) {
        this.name = name;
        this.gpa = gpa;
    }

    setGpa(gpa) {
        this.gpa = gpa;
    }

    getGpa() {
        return this.gpa;
    }

    setName(name) {
        this.name = name;
    }

    getName() {
        return this.name;
    }

    isHonors() {
        return ((this.gpa > 3) ? 'TRUE' : 'FALSE');
    }

    toString() {
        return this.name + " " + this.gpa;
    }

}

let adham = new Student("oudeif", 4);
console.log(adham);
console.log(adham.toString());
console.log(adham.isHonors());


/* 13. Write a function named university that takes a string as a parameter and decides whether 
it is a valid university id. The university id format is E-0xxy-9yyx. Write a method named 
phone that takes a string as a parameter and decides whether it is a valid phone number with 
area code 313 or 248 or 734. The phone number format is xxx-xxx-xxxx. Here x is a digit 
and y is a lower case letter. These functions return true/false. The code must be based on 
regular expressions.  */

function university(id) {
    let test = "invalid";
    if (id.search(/^E-0\d{2}[a-z]{1}-9[a-z]{2}\d{1}$/) === 0) {
        test = "valid"
    }
    return test;
}
function phone(num) {
    let test = "invalid";
    if (num.search(/^\d{3}-\d{3}-\d{4}$/) === 0) {
        numArr = num.split("-")
        if (numArr[0] == '313' || numArr[0] == '248' || numArr[0] == '734') {
            test = "valid";
        }
    }
    return test;
}
/* 14. Write a function named fullName that takes a string as a parameter and decides whether it 
is a full name of a person. The full name format is Prefix First M. Last. Prefix is Mr, 
Mrs, or Ms. First is the first name that begins in upper case letter followed by one or more lower 
case letters with a total length of at least two. M is the middle initial which is a single upper case 
letter. Last is the last name which has the same format as the first name. There is a dot after the 
middle initial. There is one space between prefix, first name, middle initial, and last name. The 
function returns true/false. The code must be based on regular expressions. */

function firstName(name) {
    let test = 'false';
    if (name.search(/^M(r|s|rs) [A-Z][a-z]+ [A-Z]. [A-Z][a-z]+$/) === 0) {
        test = 'true'
    }
    return test;
}

