<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>SELECT THE SCOPE OF THE ANALYSIS</h1>
        <div class="container">
        <form action="" method="post">
            <input type="checkbox" name="type" value="Bike">&nbsp;&nbsp;FOUNDATION ONLY<br><br>
            <input type="checkbox" name="type" value="Car">&nbsp;&nbsp;STRUCTURE ONLY<br><br> 
            <input type="checkbox" name="type" value="Car">&nbsp;&nbsp;WHOLE BUILDING<br><br> 
            
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
           
         </div>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            session_start();
            $_SESSION["c7"] =$_POST['type'];
            
            //session_unset();

            // destroy the session
            //session_destroy(); 
        }
        ?>
    </body>
</html>
