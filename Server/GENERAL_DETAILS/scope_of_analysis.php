<?php
//$result=$_POST['type'];

$_SESSION["favcolor"] =$_POST['type'];


require_once './db.php';

global $db;

//selectAll($db);
//insertARow($db);

//echo json_encode(array('tbl' => $data));


function selectAll($db) {
    $stmt = $db->prepare("SELECT * FROM MyGuests");

    $data = array();


    $stmt->execute();


    $news = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if (!empty($news)) 
    {

            foreach ($news as $item) 
            {
             /*   array_push($data, array(
                    'firstname' => $item['firstname'],
                    'lastname' => $item['lastname']
                ));*/

                $Fname=$item['firstname'];
                $Lname=$item['lastname'];
                echo $Fname." ".$Lname."</br>";
            }

    }
}


function insertARow($db) {
    
    $stmt = $db->prepare("insert into MyGuests (firstname,lastname) values ('asd','zxc')");
    $stmt->execute();
	
    echo "Success";
}

?>