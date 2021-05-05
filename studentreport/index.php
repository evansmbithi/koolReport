<?php

require_once "../vendor/autoload.php";
require_once "StudentReport.php";

$report = new StudentReport;

$report->run()->render();