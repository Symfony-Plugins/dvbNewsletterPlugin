<?php 
require_once dirname(__FILE__).'/../bootstrap/doctrine.php';

$t = new lime_test(4);

$language = new dvbNewsletterLanguage();

dvbNewsletterLanguage::setDefaultCulture('en');

$language->setId('en');
$t->is('English', (string)$language);

$language->setId('it');
$t->is('Italian', (string)$language);

dvbNewsletterLanguage::setDefaultCulture('it');
$t->is('italiano', (string)$language);

$language->setId('en');
$t->is('inglese', (string)$language);