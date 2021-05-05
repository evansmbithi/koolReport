<?php

class StudentReport extends \koolreport\KoolReport{

    use \koolreport\clients\Bootstrap;  //styling the report

    //Create settings()
    protected function settings()
    {
        return array(
            "dataSources"=>array(
                "jspstud"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=jspstud",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                )
            )
        );
    }

    //setup report
    protected function setup()
    {
        //gets top 10 students
        $this->src("jspstud")
            ->query("
                SELECT student.sname `NAME`, 
                course.coursename `COURSE`
                FROM student
                JOIN course ON student.course = course.id
                GROUP BY student.sname 
                ORDER BY course.coursename
                LIMIT 10
                
            ")
            ->pipe($this->dataStore("result"));
    }
}

