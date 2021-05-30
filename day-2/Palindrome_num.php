<?php
//DATE : 26/5/2021 TASK-8 Palindrome Number
?>
<html>
<title>Palindrome Number</title>
    <form method="post">        
    Enter a Number: <input type="number" name="num"/><br>  
    <button type="submit">Check</button>  
    </form>  
</html>
 <?php   
        if($_POST)  
        {  
       
            $num = $_POST['num'];  
            $reverse = strrev($num);  
            if($num == $reverse){  
                echo "The number $num is Palindrome";     
            }else{  
                echo "The number $num is not a Palindrome";   
            }  
    }     
?>  