<?php

require_once "Database/Connection.php";

$handle = fopen("data/GeoIPCountryWhois.csv", "r");
if ($handle) {
    $statement = Connection::getConnection()->prepare('
            INSERT INTO geolite
            (
              `ip_start`,
              `ip_end`,
              `ip_num_start`,
              `ip_num_end`,
              `country_iso`,
              `country`
            )
            VALUES (
              :ip_start,
              :ip_end,
              :ip_num_start,
              :ip_num_end,
              :country_iso,
              :country
            )'
    );

    while (($line = fgets($handle)) !== false) {
        $row = explode(',', trim($line));

        $ipStart = trim($row[0], '"');
        $ipEnd = trim($row[1], '"');
        $ipNumStart = trim($row[2], '"');
        $ipNumEnd = trim($row[3], '"');
        $countryIso = trim($row[4], '"');
        $country = trim($row[5], '"');

        $statement->bindParam("ip_start", $ipStart);
        $statement->bindParam("ip_end", $ipEnd);
        $statement->bindParam("ip_num_start", $ipNumStart);
        $statement->bindParam("ip_num_end", $ipNumEnd);
        $statement->bindParam("country_iso", $countryIso);
        $statement->bindParam("country", $country);

        $statement->execute();
    }

    fclose($handle);
} else {
    // error opening the file.
}