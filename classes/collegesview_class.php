<?php
    class CollegesView extends Colleges{
        
        public function showCollege($college){
            $results = $this->getCollege($college);
            echo "College: ".$results['0']['college']."<br>"."College_id: ".$results['0']['college_id'];
        }
    }
?>