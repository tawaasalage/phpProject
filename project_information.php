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
        <form method="POST" action="">
        <div class="container">
            <table  >
               <tr>
                 <td>BUILDING USE</td>
                 <td>
                     
                         <select name="combo">
                            <option value="Building 1">Building 1</option>
                            <option value="Building 2">Building 2</option>
                            <option value="Building 3">Building 3</option>
                            <option value="Building 4">Building 4</option>
                          </select> 
                 </td>
               </tr>
               <tr >
                 <td>HEIGHT OF THE BUILDING</td>
                 <td><input class="form-control" name="height" type="text" /></td>
               </tr>
               <tr>
                 <td>LOCATION OF THE BUILDING</td>
                 <td><input class="form-control" name="location" type="text" /></td>
               </tr>
               <tr>
                 <td>NUMBER OF FLOORS</td>
                 <td><input class="form-control" name="nofloors" type="text" /></td>
               </tr>
               <tr>
                 <td>CREDIT CRITERIA</td>
                 <td><input class="form-control" name="creditcri" type="text" /></td>
               </tr>
               <tr>
                 <td></td>
                 <td><button type="submit" class="btn btn-success">Submit</button></td>
               </tr>
           </table> 
            </form>
        </div>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            //session_start();
            //$_SESSION["c7"] =$_POST['type'];
            
            //session_unset();

            // destroy the session
            //session_destroy(); 
            echo $_POST['combo']."</br>";
            echo $_POST['height']."</br>";
            echo $_POST['location']."</br>";
            echo $_POST['nofloors']."</br>";
            echo $_POST['creditcri']."</br>";
           
            session_start();
            $_SESSION["c10"] =$_POST['combo'];
            $_SESSION["c11"] =$_POST['height'];
            $_SESSION["c12"] =$_POST['location'];
            $_SESSION["c13"] =$_POST['nofloors'];
            $_SESSION["c14"] =$_POST['creditcri'];
            
            
        }
        ?>
        
    </body>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>
