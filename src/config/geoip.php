<?php

return array(
    // Set database to false/null or empty when you want to use API calls
    'databases' => array(
        'city'    => 'GeoLite2-City.mmdb',
        'country' => 'GeoLite2-Country.mmdb',
    ),

    // Location to store .mmdb files
    'storage_path' => '',

    // User authentication
    'user_id'     => 999999,
    'license_key' => '000000000000',

    // String Product IDs with optional filenames
    'products' => array(
        'GeoLite2-City' => 'GeoLite2-City.mmdb',
        'GeoLite2-Country',
    ),

    // RFC 5735 Special Use IPv4 Addresses
    'localhost_addresses' => array(
        '0.0.0.0/8',
        '10.0.0.0/8',
        '127.0.0.0/8',
        '169.254.0.0/16',
        '172.16.0.0/12',
        '192.0.0.0/24',
        '192.0.2.0/24',
        '192.88.99.0/24',
        '192.168.0.0/16',
        '198.18.0.0/15',
        '198.51.100.0/24',
        '203.0.113.0/24',
        '224.0.0.0/4',
        '240.0.0.0/4',
        '255.255.255.255/32',
    ),

    // Replace this raw data with your own location
    'localhost_raw_data' => array(
        'continent' => array(
            'code' => 'EU',
            'geoname_id' => 6255148,
            'names' => array('en' => 'Europe'),
        ),
        'country' => array(
            'geoname_id' => 3057568,
            'iso_code' => 'SK',
            'names' => array('en' => 'Slovakia'),
        ),
        'registered_country' => array(
            'geoname_id' => 3057568,
            'iso_code' => 'SK',
            'names' => array('en' => 'Slovakia'),
        ),
        'traits' => array(
            'ip_address' => '127.0.0.1',
        ),
    ),
);
