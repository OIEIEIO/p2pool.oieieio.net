Install the GeoIP2 library (geoip2/geoip2).

If not, install it using Composer:
```
composer require geoip2/geoip2
```
/var/www/p2pool.oieieio.net$ tree
```
├── api
│   ├── local
│   │   ├── console
│   │   ├── miner
│   │   ├── p2p
│   │   └── stratum
│   ├── network
│   │   └── stats
│   ├── pool
│   │   ├── blocks
│   │   └── stats
│   └── stats_mod
├── composer.json
├── composer.lock
├── GeoLite2-Country.mmdb
├── geopip.php
├── index.html
├── p2pool.log
├── report.html
├── scripts.js
├── shares.html
├── style.css
└── vendor
    ├── autoload.php
    ├── composer
    │   ├── autoload_classmap.php
    │   ├── autoload_namespaces.php
    │   ├── autoload_psr4.php
    │   ├── autoload_real.php
    │   ├── autoload_static.php
    │   ├── ca-bundle
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── res
    │   │   │   └── cacert.pem
    │   │   └── src
    │   │       └── CaBundle.php
    │   ├── ClassLoader.php
    │   ├── installed.json
    │   ├── installed.php
    │   ├── InstalledVersions.php
    │   ├── LICENSE
    │   └── platform_check.php
    ├── geoip2
    │   └── geoip2
    │       ├── CHANGELOG.md
    │       ├── composer.json
    │       ├── examples
    │       │   └── benchmark.php
    │       ├── LICENSE
    │       ├── README.md
    │       └── src
    │           ├── Database
    │           │   └── Reader.php
    │           ├── Exception
    │           │   ├── AddressNotFoundException.php
    │           │   ├── AuthenticationException.php
    │           │   ├── GeoIp2Exception.php
    │           │   ├── HttpException.php
    │           │   ├── InvalidRequestException.php
    │           │   └── OutOfQueriesException.php
    │           ├── Model
    │           │   ├── AnonymousIp.php
    │           │   ├── Asn.php
    │           │   ├── City.php
    │           │   ├── ConnectionType.php
    │           │   ├── Country.php
    │           │   ├── Domain.php
    │           │   ├── Enterprise.php
    │           │   ├── Insights.php
    │           │   └── Isp.php
    │           ├── ProviderInterface.php
    │           ├── Record
    │           │   ├── AbstractNamedRecord.php
    │           │   ├── AbstractPlaceRecord.php
    │           │   ├── City.php
    │           │   ├── Continent.php
    │           │   ├── Country.php
    │           │   ├── Location.php
    │           │   ├── MaxMind.php
    │           │   ├── Postal.php
    │           │   ├── RepresentedCountry.php
    │           │   ├── Subdivision.php
    │           │   └── Traits.php
    │           ├── Util.php
    │           └── WebService
    │               └── Client.php
    ├── maxmind
    │   └── web-service-common
    │       ├── CHANGELOG.md
    │       ├── composer.json
    │       ├── dev-bin
    │       │   └── release.sh
    │       ├── LICENSE
    │       ├── phpstan.neon
    │       ├── README.md
    │       └── src
    │           ├── Exception
    │           │   ├── AuthenticationException.php
    │           │   ├── HttpException.php
    │           │   ├── InsufficientFundsException.php
    │           │   ├── InvalidInputException.php
    │           │   ├── InvalidRequestException.php
    │           │   ├── IpAddressNotFoundException.php
    │           │   ├── PermissionRequiredException.php
    │           │   └── WebServiceException.php
    │           └── WebService
    │               ├── Client.php
    │               └── Http
    │                   ├── CurlRequest.php
    │                   ├── RequestFactory.php
    │                   └── Request.php
    └── maxmind-db
        └── reader
            ├── autoload.php
            ├── CHANGELOG.md
            ├── composer.json
            ├── ext
            │   ├── config.m4
            │   ├── config.w32
            │   ├── maxminddb.c
            │   ├── php_maxminddb.h
            │   └── tests
            │       ├── 001-load.phpt
            │       ├── 002-final.phpt
            │       └── 003-open-basedir.phpt
            ├── LICENSE
            ├── package.xml
            ├── README.md
            └── src
                └── MaxMind
                    └── Db
                        ├── Reader
                        │   ├── Decoder.php
                        │   ├── InvalidDatabaseException.php
                        │   ├── Metadata.php
                        │   └── Util.php
                        └── Reader.php

33 directories, 106 files
```


