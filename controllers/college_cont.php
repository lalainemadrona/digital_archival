<?php
// Controls data
    class CollegeView extends College{
        public function showColleges($college){
            $results = $this->getCollege($college);
            echo "College: ".$results[0]['college']."College_id:".$results[0]['college_id'];   
        }
    }

?>