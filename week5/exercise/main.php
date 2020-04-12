<?php
require_once 'Page.php';

$webpage = new Page('My page', 2020, 'My copyright');

$webpage->addContent('aloalo');

$page = $webpage->get();

echo ($page);
