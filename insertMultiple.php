<?php

//object-oriented
$conn->multi_query($sql);

//procedural
mysqli_multi_query($conn, $sql);