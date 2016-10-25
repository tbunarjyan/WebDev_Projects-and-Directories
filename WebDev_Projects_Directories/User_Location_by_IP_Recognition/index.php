<?php

require_once "Database/Connection.php";

$ipAddress = $_SERVER['REMOTE_ADDR'];
$ipAddressNum = ip2long($ipAddress);

$statement = Connection::getConnection()->prepare('
    SELECT
      `country`
    FROM
      geolite
   WHERE
      :ip_num >= ip_num_start
      AND
      :ip_num <= ip_num_end
');
$statement->bindParam('ip_num', $ipAddressNum);

$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetch();
$country = $result['country'];

echo "<h1 style='text-align: center; font-size: 1000%; margin-top: 10%;'>" . $ipAddress . "</h1>";
echo "<h1 style='text-align: center; font-size: 1000%; margin-top: 10%;'>" . $country . "</h1>";