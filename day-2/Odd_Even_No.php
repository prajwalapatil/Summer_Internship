<?php
//DATE : 26/5/2021 TASK-9 Odd_Even Number
?>
<html>
<head>
	<title>
		Odd/Even Number 
	</title>
</head>
<body bgcolor="salmon">
 <form method="post">        
    Enter  Number: <input type="number" name="num"/><br>  
    <button type="submit">Check</button>  
    </form>  
<?php
if($_POST)  
        {  
       
            $num = $_POST['num'];   
            if($num % 2 == 0){  
                echo "The number $num is Even";     
            }else{  
                echo "The number $num is Odd";   
            }  
    }     	
 ?>

</body>
</html>