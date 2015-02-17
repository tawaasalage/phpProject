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
                 <td>CONSTRUCTION TYPE</td>
                 <td>
                     
                     <select name="TYPE">
                            <option value="TYPE 1">TYPE 1</option>
                            <option value="TYPE 2">TYPE 2</option>
                            <option value="TYPE 3">TYPE 3</option>
                            <option value="TYPE 4">TYPE 4</option>
                     </select> 
                     
                 </td>
               </tr>
               <tr >
                 <td>TOTAL CONSTRUCTION FLOOR AREA</td>
                 <td><input class="form-control" name="Tconstruction" type="text" /></td>
               </tr>
               <tr>
                 <td>PLAN AREA</td>
                 <td><input class="form-control" name="palnA" type="text" /></td>
               </tr>
               <tr>
                 <td>CONTRACTOR NAME</td>
                 <td><input class="form-control" name="Con_name" type="text" /></td>
               </tr>
               <tr>
                 <td>FOUNDATION TYPE</td>
                 <td><input class="form-control" name="found_type" type="text" /></td>
               </tr>
                <tr>
                 <td>STRUCTURE CONSTRUCTION TECHNIQUE</td>
                 <td>
                     
                     
                     <select name="Structure">
                            <option value="Structure 1">Structure 1</option>
                            <option value="Structure 2">Structure 2</option>
                            <option value="Structure 3">Structure 3</option>
                            <option value="Structure 4">Structure 4</option>
                     </select> 
                     
                 </td>
               </tr>
                <tr>
                 <td>SOIL TYPE</td>
                 <td><input class="form-control" name="soil_type" type="text" /></td>
               </tr>
               <tr>
                 <td></td>
                 <td><button type="submit" class="btn btn-success">Submit</button></td>
               </tr>
           </table> 
        </div>
              </form>
        
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            //session_start();
            //$_SESSION["c7"] =$_POST['type'];
            
            //session_unset();

            // destroy the session
            //session_destroy(); 
            echo $_POST['TYPE']."</br>";
            echo $_POST['Tconstruction']."</br>";
            echo $_POST['palnA']."</br>";
            echo $_POST['Con_name']."</br>";
            echo $_POST['found_type']."</br>";
            echo $_POST['Structure']."</br>";
            echo $_POST['soil_type']."</br>";
           
            
            session_start();
            $_SESSION["c2"] =$_POST['TYPE'];
            $_SESSION["c3"] =$_POST['Tconstruction'];
            $_SESSION["c4"] =$_POST['palnA'];
            $_SESSION["c8"] =$_POST['Con_name'];
            $_SESSION["c5"] =$_POST['found_type'];
            $_SESSION["c6"] =$_POST['Structure'];
            $_SESSION["c7"] =$_POST['soil_type'];
            
            
        }
        ?>
        
    </body>
    
    
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>
