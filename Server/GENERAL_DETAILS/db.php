<?php

$db = new PDO('mysql:host=localhost;dbname=Toolkit_Development;charset=utf8', 'root','');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
