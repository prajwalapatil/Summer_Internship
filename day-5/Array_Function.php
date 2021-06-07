<?php 
//DATE : 31/5/2021 TASK-3 All Array Function Demontration
//count ()
echo "Count() Function : ";
$arr = array('one','two','three','four','five');
echo "Number Of Elements= ";
echo count($arr); 
?>
</br>
<?php 
//array_count_values ()
echo "</br>array_count_values() Function : ";
$arr = array("C","php","C","android","php","java");
 $newarr = array_count_values($arr);
 echo " array_count_values :";
foreach ($newarr as $key => $value)
 { echo "<br/>$key - <strong>$value</strong> "; } ?>
</br>
<?php
//array_sum ()
echo "</br>array_sum() Function : ";
$myarray = array(1,2,3,4,5);
echo " Sum Of Array Elements :";
echo array_sum($myarray); ?> 
</br>
<?php
//array_product ()
echo "</br>array_product() Function : ";
$myarray = array(1,2,3,4,5); 
echo " Product Of Array Elements :";
echo array_product($myarray); 
?> 
</br>

<?php
//array_reverse ()
echo "</br>array_reverse() Function : ";
 $arr = array('c', 'c++', 'java', 'android', 'php');
 $revarr = array_reverse($arr); 
 echo " Reverse of Array Elements :";
 print_r($revarr);
 ?>
 </br>
<?php 
//in_array ( ) 
echo "</br>in_array() Function : ";
$arr = array('c', 'c++', 'java', 'android', 'php'); 
$temp = in_array('php',$arr); 
echo " number of times  php in Array =";
echo $temp; 
?>
</br>
<?php 
//array_rand ( )
echo "</br>array_rand() Function : ";
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);
echo " array_rand=$indexofarray";
 ?>
 </br>
<?php 
//Select multiple keys at random
echo "</br>Select multiple keys at random using array_rand() Function : ";
$arr = array('c', 'c++', 'java', 'android', 'php');
 $indexofarray = array_rand($arr,2);
foreach ($indexofarray as $key => $value) 
{ echo "<br />$key - <strong>" . $arr[$value] . "</strong>"; }
?>
</br>
<?php 
//array_unique ( )
echo "</br>array_unique() Function : ";
$arr = array('c', 'c++','android', 'java', 'android', 'php'); 
print_r(array_unique($arr)); 
?>
</br>
 
<?php
//array_merge ( ) 
echo "</br>array_merge() Function : ";
 $arr1 = array('c','c++','android','java','php'); 
 $arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
 print_r($NewArr); 
 ?>
 </br>

<?php 
//array_search ( )
echo "</br>array_search() Function : ";
$myarr = array('c', 'c++','android', 'java', 'php'); 
$check = array_search('android', $myarr);
 echo $check; // Return Index 
 ?>
</br>
<?php
//range ( )
echo "</br>range() Function : ";
 $arr = range("11", "20");
 foreach($arr as $key => $value)
 { echo "<br /> $key - $value "; }
 ?>
</br>
<?php
//sort ( )
echo "</br>sort() Function : ";
 $arr = array(80,60,50,40,8,74);
 sort($arr); print_r($arr);
 ?>
</br>
<?php
//rsort ( )
echo "</br>rsort() Function : ";
 $arr = array(80,60,50,40,8,74);
 rsort($arr);
 print_r($arr);
 ?>
 </br>
 <?php 
 //asort ( )
 echo "</br>asort() Function : ";
 $arr = array(80,60,50,40,8,74);
 asort($arr);
 print_r($arr);
 ?>
</br>
<?php 
//ksort ( )(Key Sort)
echo "</br>ksort() Function : ";
$arr = array( "Banana" => "Yellow", "Apple" => "Red", "Mango" => "Green");
 ksort($arr);
 foreach ($arr as $key => $value) 
 { echo "<br />$key - $value "; }
 ?>
</br>
<?php
//krsort ( ) Key Reverse Sort
echo "</br>krsort() Function : ";
$arr = array( "Banana" => "Yellow", "Apple" => "Red", "Mango" => "Green");
 krsort($arr); 
 foreach ($arr as $key => $value) 
 { echo "<br />$key - $value "; }
 ?>
</br>
<?php 
//shuffle ( )
echo "</br>shuffle() Function : ";
$myArray = array("Football", "Baseball", "Hockey", "Tennis", "Boxing");
 echo shuffle($myArray); 

?>
</br>
<?php
//array_key_exists ( )
echo "</br>array_key_exists() Function : ";
 $arr = array("a" => "apple", "b" => "banana");
 echo array_key_exists('a',$arr);
 ?>
</br>
<?php 
//array_change_key_case()
echo "</br>array_change_key_case() Function : ";
$arr = array( "Banana" => "Yellow", "Apple" => "Red", "Mango" => "Green");
 $uppercase = array_change_key_case($arr,CASE_UPPER);
 print_r($uppercase); 
 ?>
</br>
<?php 
//array_combine()
echo "</br>array_combine() Function : ";
$arr1 = array("Banana" , "Apple" , "Mango"); $arr2 = array("Yellow","Red", "Green");
 $NewVar = array_combine($arr1, $arr2);
 print_r($NewVar); 
 ?>
</br>
<?php 
//end ()
echo "</br>end() Function : ";
$myarr = array('c', 'c++','android', 'java', 'php'); 
echo end($myarr); 
?>
</br>
<?php 
//compact()
echo "</br>compact() Function : ";
$name = "akash";
 $subject = "php";
 $arr = compact("name", "subject");
 print_r($arr); 
 ?>
</br>
<?php 
//array_flip()
echo "</br>array_flip() Function : ";
$arr = array("a" => "akash", "b" => "banana", "c" => "computer"); 
$fliparray = array_flip($arr);
 print_r($fliparray); 
 ?>
</br>
<?php
//array_diff()
echo "</br>array_diff() Function : ";
 $a=array("akash","c","c++","java","php","android");
 $b=array("akash","c","java","php"); 
 $diff = array_diff($a, $b); 
 print_r($diff); 
 ?>
</br>
<?php 
//array_intersect()
echo "</br>array_intersect() Function : ";
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
 $arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2)); 
?>
</br>
<?php
//array_values ( )
echo "</br>rsort() Function : ";
 $arr = array("i"=>"c","want"=>"c++","learn"=>"php");
 $myarr = array_values($arr);
 foreach($myarr as $key => $value)
 { echo " <br />$key - $value"; } 
 ?>
</br>
<?php 
//array_push()
echo "</br>array_push() Function : ";
$a=array("c","c++");
 array_push($a,"java","php");
 print_r($a);
 ?>
</br>
<?php 
//array_pop()
echo "</br>array_pop() Function : ";
$a = array("c", "c++", "Java", "PHP", "ASP"); 
array_pop($a); 
 ?>
 </br>
<?php
//explode() 
echo "</br>explode() Function : ";
 $mystring = "I Love PHP Language"; 
 $arr =  explode(" ",$mystring);
 print_r($arr); 
 ?>
 </br>
 <?php 
 //implode() 
 echo "</br>implode() Function : ";
 $arr = array("i","love","php","language"); 
 $mystring = implode(" ", $arr); 
 echo $mystring;
 ?>
</br>

