<?php

$bulk = new MongoDB\Driver\BulkWrite;

$bulk->delete(['Pid'=>intval($Pid)], ['limit' => 1]);

