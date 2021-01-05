--TEST--
xml_parser_get_option() - Test parameter not set
--SKIPIF--
<?php
if (!extension_loaded('xml')) {
    exit('Skip - XML extension not loaded');
}
?>
--FILE--
<?php

$xmlParser = xml_parser_create();

try {
    xml_parser_get_option ($xmlParser, 42);
} catch (ValueError $exception) {
    echo $exception->getMessage() . "\n";
}

?>
--EXPECT--
xml_parser_get_option(): Argument #2 ($option) must be a PHP_XML_OPTION_* constant
