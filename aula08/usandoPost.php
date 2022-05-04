<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html> 
   <head> 
      <title>Método POST</title> 
   </head> 
   <body> 
      <form action="" method="post"> 
	  Digite um numero: 
	  <input type="number" name="number" /><br />    
	  <input type="submit" name="submit" value="testar" /> 
      </form> 
      <?php 
         $n = $_POST["number"]; 
         echo $n; 
      ?> 
   </body> 
</html>

