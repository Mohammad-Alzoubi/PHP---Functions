<?php
// echo "functions"
?>
<!-- ******************************************** -->

<!-- Answer 1 -->
<?php
    function fact($n){
        $num=$n;
        $sum = 1;
        if ($n > 0) {
            for ($i=$n ; $i > 0 ; $i--) { 
                $sum *= $i;
            }
            echo "factorial $num is: " .$sum ."<br>";
        }else {
            echo "The number is negative ;)";
        }
    }

    fact (10);
?>

<!-- ******************************************** -->
<!-- Answer 2 -->
<?php
echo "***************( 2 )*****************<br>"
?>

<!-- 2. Write a function to check whether a number is prime or not.
Note: A prime number (or a prime) is a natural number greater than 1 that has no
positive divisors other than 1 and itself. -->

<?php
    function prime($x){
        for ($i=2; $i < $x; $i++) { 
            if ($x%$i == 0) {
            return 0;
            }
        }
        return 1;
}

$prim = prime(23);

if ($prim == 0)
echo 'The Number is not  Prime ';
else
echo 'The Number is Prime ';
?>


<!-- ******************************************** -->
<!-- Answer 3 -->
<?php echo "<br>***************( 3 )*****************<br>"?>
<!-- 3. Write a function to reverse a string. -->

<?php
    function reverseS($str){
        return strrev($str);
    }

echo reverseS('123456789');
?>

<!-- ******************************************** -->
<!-- Answer 4 -->
<?php echo "<br>***************( 4 )*****************<br>"?>
<!-- 4. Write a function to sort an string array depending on the alphabetical order . -->

<?php

?>

<!-- ******************************************** -->
<!-- Answer 5 -->
<?php echo "<br>***************( 5 )*****************<br>"?>
<!-- 5. Write a PHP function that checks whether a string is all lowercase. -->

<?php
    function strLower($str){
        for ($i=0; $i < strlen($str) ; $i++) { 
            if (ord($str[$i]) >= 65 && ord($str[$i]) <= 90) {
                return false;
        }
    }
    return true;
}

$x = strLower("mohammad");
if ($x) {
    echo "All string is Lowercase.";
}else echo "the string contan Letter uppercase.";

// echo ord('A');
// echo ord('Z');
?>

<!-- ******************************************** -->
<?php echo "<br>***************( 6 )*****************<br>"?>
<!-- 6.Write a PHP function that checks whether a passed string is a palindrome or
not?
A palindrome is a word, phrase, or sequence that reads the same backward as
forward, e.g., madam or nurses run. -->

<?php
function chech_palindrom($str){
    $str1 = strrev($str);
    if ($str == $str1) {
        echo "The string is a palindrome ($str) ";
        
    }else echo "The string is not a palindrome";
}
chech_palindrom("madam");
?>


<!-- ******************************************** -->
<?php echo "<br>***************( 7 )*****************<br>"?>

<!-- 7. Write a PHP program to find three numbers from an array such that the sum of
three consecutive numbers equal to a given number.
Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16)) -->


<?php
function sum_three_N($arr, $num){
    $count = count($arr) - 2;
    $sum=[];
    for ($x = 0; $x < $count; $x++) {
        if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $num) {
            array_push($sum, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $num ");
        }
    }
    return $sum;
}
print_r(sum_three_N(array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16));
?>