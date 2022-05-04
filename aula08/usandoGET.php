<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html> 
   <head> 
      <title>Método GET</title> 
   </head> 
   <body> 
      <form action="" method="get"> 
	  Digite um numero: 
	  <input type="text" name="number" /><br />    
	  <input type="submit" name="submit" value="testar" /> 
      </form> 
      <?php 
         $n = $_GET["number"]; 
         echo $n; 
      ?> 
   </body> 
</html>
