<?php

$query = new MongoDB\Driver\Query([]);

$cursor = $manager->executeQuery("PersonalDB.Person", $query);

