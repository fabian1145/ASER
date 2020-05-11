<?php
  include_once 'includes/dbh.inc.php';
?>
<html>
    <head>

    </head>
<body>
<?php
    $sql = "SELECT * FROM `users` WHERE 1";
    $result = MySQLi_query($conn, $sql);
    $resultCheck = MySQLi_num_rows($result);

    if($resultCheck > 0) {
        while ($row = MySQLi_fetch_assoc($result)) {
            echo $row['userName'];
        }
    }
?>
</body>
</html>