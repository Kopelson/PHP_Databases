<?php

$bulk = new MongoDB\Driver\BulkWrite;

$bulk->update(['id'=>112],
['$set' => ["Firstname" => $firstname]],
['multi'=>false, 'upsert' => false]
);