<html>
<head>
    <title>top 10 students</title>
</head>
<body>
<h1>Top 10 students</h1>

<style>
    .cssHeader {
        background-color: #e9ffe8;
    }

    .cssItem {
        background-color: #fdffe8;
    }

    .page_break {
        page-break-before: always;
    }
</style>

<?php
/*
\koolreport\widgets\koolphp\Table::create(array(
   "dataSource"=>$this->dataStore("result")
));
*/

use \koolreport\widgets\koolphp\Table;

Table::create([
        "dataSource"=>$this->dataStore("result"),
        "cssClass" =>array(
                "th"=>"cssHeader",
                "tr"=>"cssItem",
                "table"=>"table table-bordered table-striped",
        ),
        "columns"=>array(
            "NAME",
            "COURSE"
        )
]);

?>
</body>
</html>