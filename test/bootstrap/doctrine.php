<?php 
// test/bootstrap/Doctrine.php
require_once dirname(__FILE__).'/../../../../test/bootstrap/unit.php';
 
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'test', true);
 
new sfDatabaseManager($configuration);
 
Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');