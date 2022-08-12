<?php
// Controls data
    class CollegeContr extends Colleges{
        private $college;
        
        public function __construct($college){
            $this->college = $college;
        }

        public function handleRequests(){
            if($this->emptyColleges() == false){
                header("location: ../index.php?error=collegenotfoundordidnotexist");
                exit();
            }
                $this->getCollege($this->college);
        }

        public function emptyColleges(){
            if(empty($this->college)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

        // public function showColleges($college){
        //     // $results = $this->getCollege($college);
        //     // echo "College: ".$results[0]['college']."College_id:".$results[0]['college_id'];   
        // }
    }

?>