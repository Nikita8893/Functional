<?php

class Utility
{

    // function for getting string input
    public static function user_string_input()
    {
        fscanf(STDIN, "%s\n", $val);
        //validating user input
        while (!(strlen($val) >= 3) || (is_integer($val))) {
            echo "enter valid string";
            fscanf(STDIN, "%s", $val);
        }
        return $val;
    }

    // function to replace string with user input
    public static function string_replace($val1, $val2, $val3)
    {
        $str = str_replace($val1, $val2, $val3);
        echo $str;
    }

    // function for check whether the number is float
    public static function check_Float($val)
    {
        // checking whether number is numeric and have decimal point
        if (is_numeric($val) && strpos($val, ".")) {
            return true;
        } else {
            return false;
        }
    }

    // function for taking positive integer input from user
    public static function user_integer_input()
    {
        fscanf(STDIN, "%d\n", $val);

        //validation
        while ((!($val > 0)) || (Utility::check_Float($val))) {
            echo "enter positive value";
            $val = Utility::user_integer_input();
        }
        return $val;
    }

    // function for calculating head or tail percentage
    public static function flipcoin($val)
    {
        $heads = 0;
        $tails = 0;

        for ($i = 0; $i < $val; $i++) {
            // for taking random value
            $x = rand(0, 1);
            if ($x < 0.5) {
                //incermenting tail count
                $tails++;
            } else {
                //incrementing head count
                $heads++;
            }
        }

        echo "Percentage of headcount=" . (int) (($heads * 100) / ($heads + $tails)) . "%\n";
        echo "Percentage of headcount=" . (int) (($tails * 100) / ($heads + $tails)) . "%\n";
    }

    //
    public static function check_interger_input()
    {
        fscanf(STDIN, "%s\n", $val);
        // validation for value
        while (($val > 0) || (!is_numeric($val)) || (Utility::check_Float($val))) {
            echo "enter valid number";
            $val = Utility::check_interger_input();
        }
        return $val;
    }

    //function for taking value for year
    //return year
    public static function get_year()
    {
        fscanf(STDIN, "%s\n", $year);
        // validation
        while (Utility::check_Float($year)) {
            echo "enter valid year";
            $year = Utility::get_year();
        }
        return $year;
    }

    //function for checking given year is leap year or not
    //return string
    public static function leapYear($year)
    {
        if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)) {
            return "Leap Year";
        } else {
            return "Not Leap Year";
        }
    }

    //function for taking input for power
    public static function PowOfTwo_input()
    {
        fscanf(STDIN, "%s\n", $num);
        while (!($num >= 0 && $num < 31) || (!(is_numeric($num))) || Utility::check_Float($num)) {
            echo "enter number in range";
            $num = Utility::PowOfTwo_input();
        }
        return $num;
    }

    //function for calculating power of two
    public static function PowOfTwo($num)
    {
        $x = 1;
        for ($y = 0; $y <= $num; $y++) {
            echo "2^" . $y . "=" . $x . "\n";
            $x = $x * 2;
        }
    }

    public static function harmonic_input()
    {
        fscanf(STDIN, "%s\n", $num);
        while (($num == 0) || (Utility::check_Float($num)) || (!(is_numeric($num)))) {
            echo "Enter positive value";
            $num = Utility::harmonic_input();
        }
        return $num;
    }

    //function to get harmonic value for given num
    //and returns series
    public static function harmonicvalue($num)
    {
        $x = 1;
        echo $x . "+";
        for ($y = 2; $y <= $num; $y++) {
            echo "1/" . $y . "+";
            $x = $x + (1 / $y);
        }
        echo "\nThe sum is :: \n";
        return $x;
    }

    // function to get input for finding its factors
    public static function factors_input()
    {
        fscanf(STDIN, "%s\n", $num);
        while (($num == 0) || (Utility::check_Float($num)) || (!(is_numeric($num)))) {
            echo "enter correct number:";
            $num = Utility::factors_input();
        }
        return $num;
    }

    public static function check_prime($num)
    {
        for ($i = 2; $i <= ($num / 2); $i++) {
            if ($num % $i == 0) {
                return "no";
            } else {
                return "yes";
            }

        }
    }

    public static function primefactors($num)
    {
        if ((Utility::check_prime($num)) == "no") {
            echo "prime factors are: \n";
            echo $num;
        } else {
            while ($num % 2 == 0) {
                echo 2, " ";
                $num = $num / 2;
            }

            for ($i = 3; $i * $i <= $num; $i = $i + 2) {
                while ($num % $i == 0) {
                    echo $i, " ";
                    $num = $num / $i;
                }
            }
            if ($num > 2) {
                echo $num;
            }
        }
    }

    public static function primenum($num)
    {
        for ($i = 2; ($i * $i) <= $num; $i++) {
            while ($num % $i == 0) {
                echo $i, " ";
                $num = $num / $i;
            }
        }
        if ($num > 1) {
            echo $num;
        } else {
            echo " ";
        }

    }

    public static function stack_input()
    {
        fscanf(STDIN, "%s\n", $stack);
        while ((Utility::check_Float($stack)) || (!(is_numeric($stack))) || ($stack == 0)) {
            echo "enter valid input";
            $stack = Utility::stack_input();
        }
        return $stack;
    }

    public static function goal_input($stack)
    {
        fscanf(STDIN, "%s\n", $goal);
        while ((Utility::check_Float($goal)) || (!(is_numeric($goal))) || ($goal <= $stack)) {
            echo "enter valid number:";
            $goal = Utility::goal_input($stack);
        }
        return $goal;
    }

    public static function no_of_times()
    {
        fscanf(STDIN, "%s\n", $num);
        while ((Utility::check_Float($num)) || (!(is_numeric($num))) || ($num == 0) || ($num <= 0)) {
            echo "Enter valid number";
            $num = Utility::no_of_times();
        }
        return $num;
    }

    public static function gambler($stack, $goal, $num)
    {
        $win = 0;
        $loss = 0;
        while ($stack > 0 && $goal > $stack && $num > 0) {
            if (mt_rand(0, 1) > 0.5) {
                $win++;
                $stack++;
            } else {
                $loss++;
                $stack--;
            }
            $num--;
        }
        echo "No of win = " . $win . "\n";
        echo "Percentage of win " . (int) (($win * 100) / ($win + $loss)) . "%\n";
        echo "Percentage of loss " . (int) (($loss * 100) / ($win + $loss)) . "%\n";
    }

    public static function coupan_input()
    {
        fscanf(STDIN, "%s\n", $num);
        while ((Utility::check_Float($num)) || (!(is_numeric($num))) || ($num == 0)) {
            echo "enter valid number";
            $num = Utility::coupan_input();
        }
        return $num;
    }

    public static function coupan_Numbers($num)
    {
        $arr = array();
        $i = 1;
        $arr[0] = mt_rand(1 * 10, 10 * 10);
        $count = 1;
        while ((sizeof($arr)) != $num) {
            $d = mt_rand(1 * 10, 10 * 10);
            $count++;
            if (array_search($d, $arr) == false) {
                $arr[$i] = $d;
                $i++;
            }
        }
        echo "Distinct numbers are ";
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . " ";
        }
        echo "\n total no needed to generate distinct coupan are " . $count . "\n";
    }

    public static function row_input()
    {
        fscanf(STDIN, "%s\n", $row);
        while ((Utility::check_Float($row)) || (!(is_numeric($row))) || ($row == 0)) {
            echo " Enter positive value ";
            $row = Utility::row_input();

        }
        return $row;
    }

    public static function col_input()
    {
        fscanf(STDIN, "%s\n", $col);
        while ((Utility::check_Float($col)) || (!(is_numeric($col))) || ($col == 0)) {
            echo " Enter positive value ";
            $col = Utility::row_input();

        }
        return $col;
    }

    public static function array_value($row, $col)
    {
        $count = 0;
        $count1 = 0;
        $arr = array(array());
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                fscanf(STDIN, "%s\n", $num);
                $arr[$i][$j] = $num;
                $count = strlen($arr[$i][$j]);
                if ($count1 < $count) {
                    $count1 = $count;
                }

            }
        }
        $count1 = $count1 + 1;
        echo "Array elements are: \n";
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {

                echo $arr[$i][$j];
                $print = $count1 - strlen($arr[$i][$j]);
                for ($x = 0; $x < $print; $x++) {
                    echo " ";
                }
            }
            echo "\n";
        }
    }

    //function for taking input for array

    public static function integer_input()
    {
        fscanf(STDIN, "%s\n", $num);
        while ((Utility::check_Float($num)) || (!(is_numeric($num))) || ($num == 0)) {
            echo " Enter valid input ";
            $num = Utility::integer_input();
        }
        return $num;
    }

    public static function array_input($num)
    {
        $arr = array($num);
        for ($i = 0; $i < $num; $i++) {
            $value = Utility::integer_input();
            $arr[$i] = $value;
        }
        return $arr;
    }
    // function for finding
    public static function triplets($arr)
    {
        $count = 0;
        for ($i = 0; $i < sizeof($arr); $i++) {
            for ($j = $i + 1; $j < sizeof($arr); $j++) {
                for ($k = $j + 1; $k < sizeof($arr); $k++) {
                    if ($arr[$i] + $arr[$j] + $arr[$k] == 0) {
                        $count++;
                        echo " set of NUmbers " . $arr[$i] . "," . $arr[$j] . "," . $arr[$k] . "\n";
                    }

                }
            }
        }
        echo "Number of triplets found is " . $count . "\n";
    }

    //function for finding distance
    public static function distance($x, $y)
    {
        $d = (($x + $x) + ($y + $y));
        $d = sqrt($d);
        return $d;
    }

    //function to get string input
    public static function get_string()
    {
        fscanf(STDIN, "%s\n", $str);
        return $str;
    }

    // function for permutation of given input string
    public static function permute($str, $first, $last)
    {
        if ($first == $last) {
            echo $str . "\n";
        } else {
            for ($i = $first; $i < $last; $i++) {
                $str = Utility::swap($str, $first, $i);
                Utility::permute($str, $first + 1, $last);
                $str = Utility::swap($str, $first, $i);
            }
        }
    }

    public static function swap($str, $i, $j)
    {
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
        return $str;
    }

    //function for stopwatch
    public static function stopwatch()
    {
        $flag = true;
        while ($flag) {
            echo " Enter 1 to start watch and 0 to stop watch \n";
            fscanf(STDIN, "%s\n", $val);

            while ($val != '0' && $val != '1') {
                echo "enter valid input (either 1 or 0) \n";
                fscanf(STDIN, "%s\n" . $val);

            }
            if ($val == '1') {
                $start = time();
                $flag = true;

            } elseif ($val == '0') {
                $stop = time();
                $flag = false;
            }

        }
        echo "Time elapsed between start and stop is " . ($stop - $start) . "seconds\n";
    }

    // function for finding roots
    public static function Qud_roots($a, $b, $c)
    {
        if ($a == 0) {
            echo "not quadratic equation ";
        } else {
            $delta = ($b * $b) - (4 * $a * $c);
            if ($delta > 0) {
                echo "roots are unequal\n";
                $x = (-$b + sqrt($delta)) / (2 * $a);
                $y = (-$b - sqrt($delta)) / (2 * $a);
                echo "First root is " . $x . "\n";
                echo "second root is " . $y . "\n";
            } else if ($delta == 0) {
                echo "Roots are equal\n";
                $x = (-$b + sqrt($delta)) / (2 * $a);
                echo "Root is " . $x . "\n";
            } else if ($delta < 0) {
                echo "roots are complex \n";
                $x = (-$b / (2 * $a));
                $y = sqrt(-$delta) / (2 * $a);
                echo "first root is" . $x . "+" . $y . "i\n";
                echo "second root is" . $x . "-" . $y . "i\n";

            }
        }
    }

    //function for taking temperature input
    public static function Temperature_input()
    {
        fscanf(STDIN, "%s\n", $temp);
        while (((float) ($temp) > 50) || (!(is_numeric($temp)))) {
            echo " Enter valid temperature ";
            $temp = Utility::Temperature_input();
        }
        return $temp;
    }

    //function for taking speed of wind input
    public static function speed_input()
    {
        fscanf(STDIN, "%s\n", $speed);
        while (((float) ($speed) < 3) || ((float) ($speed) > 120) || (!(is_numeric($speed)))) {
            echo " enter valid input \n";
            $speed = Utility::speed_input();
        }
        return $speed;
    }

    //formula for windchill
    public static function windchill($temp, $speed)
    {
        $result = 35.74 + (0.6215 * $temp) + (0.4275 * $temp - 35.75) * (pow($speed, 0.16));
        return $result;

    }

}
