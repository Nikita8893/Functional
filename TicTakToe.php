<?php
require_once 'Utility.php';

class tictaktoe
{
    public static $board = array(array());
    public static $$player = 1;

    public static $isempty=true;

    // function to initialize array
    function initBoard()
    {
        echo "TicTakToe Game\n\n ";
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                self::$board[$i][$j];
            }
        }    
        echo "$player is X ";
    }

    //function to display board with current value of x and y
    function DisplayBoard()
    {
        $count=0;
        for($i=0;$i<3;$i++)
        {
            echo "-----------------------";
            echo "||";
        for($j=0;$j<3;$j++)
        {
            if(self::$board[$i][$j]==0)
            {
                $count++;
                echo " O |";

            }
           else if(self::$board[$i][$j]==1)
            {
                $count++;
                echo " X |";
            }
            else
           {
             echo "  |";
           }
        }
        echo "\n";
        if($count==9)
        {
            self::$isempty==false;
        }
        echo "---------------\n";
        }

     }
    function win()
    {
        return ((self::$board[0][0]+ self::$board[0][1] + self::$board[0][2] == $player*3) ||
        (self::$board[1][0]+ self::$board[1][1] + self::$board[1][2] == $player*3) ||
        (self::$board[2][0]+ self::$board[2][1] + self::$board[2][2] == $player*3)||
        (self::$board[0][0]+ self::$board[1][0] + self::$board[2][0] == $player*3)||
        (self::$board[0][1]+ self::$board[1][1] + self::$board[2][1] == $player*3)||
        (self::$board[0][2]+ self::$board[1][2] + self::$board[2][2] == $player*3)||
        (self::$board[0][0]+ self::$board[1][1] + self::$board[2][2] == $player*3)||
        (self::$board[2][0]+ self::$board[1][1] + self::$board[0][2] == $player*3)
        );
    }
     function putValue()
     {
         $i;$j;
     } 


}



?>