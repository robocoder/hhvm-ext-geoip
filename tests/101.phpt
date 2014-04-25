--TEST--
Checking geoip_continent_code_by_name
--SKIPIF--
<?php if (!extension_loaded("geoip") || !geoip_db_avail(GEOIP_COUNTRY_EDITION)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

var_dump(geoip_continent_code_by_name(null));
var_dump(geoip_continent_code_by_name(''));
var_dump(geoip_continent_code_by_name('127.0.0.1'));
var_dump(geoip_continent_code_by_name('localhost'));
var_dump(geoip_continent_code_by_name('128.100.132.238'));
var_dump(geoip_continent_code_by_name('www.utoronto.ca'));

?>
--EXPECTF--
Notice: geoip_continent_code_by_name(): Host  not found in %s
bool(false)

Notice: geoip_continent_code_by_name(): Host  not found in %s
bool(false)

Notice: geoip_continent_code_by_name(): Host %s not found in %s
bool(false)

Notice: geoip_continent_code_by_name(): Host %s not found in %s
bool(false)
string(2) "NA"
string(2) "NA"