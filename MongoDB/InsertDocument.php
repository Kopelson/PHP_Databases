<?php

$bulk = new MongoDB\Driver\Bulkwrite;

$id = $bulk->INSERT($newPerson);

