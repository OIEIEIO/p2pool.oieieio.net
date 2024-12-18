<?php
require 'vendor/autoload.php';

use GeoIp2\Database\Reader;

header('Content-Type: application/json');

// Path to your GeoLite2-Country.mmdb file
$databaseFile = __DIR__ . '/GeoLite2-Country.mmdb';

// Get the IP from query parameters (e.g., ?ip=8.8.8.8)
$ip = $_GET['ip'] ?? '';

if (filter_var($ip, FILTER_VALIDATE_IP)) {
    try {
        $reader = new Reader($databaseFile);
        $record = $reader->country($ip);

        echo json_encode([
            'ip' => $ip,
            'country' => $record->country->name,
        ]);
    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Invalid IP address']);
}
?>
