<?php
// Controls data
    class CollegeContr extends Colleges{
        
        private $college;

        public function __construct($college)
        {
            $this->college = $college;
        }

        public function handleRequest(){
            if($this->emptyInput() == true){
                header("location: create.php?error=emptyinputfields&college=$this->college");
                exit();
            }

            if($this->existingCollege() == true){
                header("location: create.php?error=collegealreadyexists&college=$this->college");
                exit();
            }

            $this->addCollege($this->college);
        }

        public function emptyInput(){
            global $result;
            if(empty($this->college)){
                $result = true;
            }
            else{
                $result = false;
            }
            return $result;
        }

        private function existingCollege(){
            global $result;
    
            if(!$this->checkCollegeExists($this->college)){
                $result = true;
            }
            else{
                $result = false;
            }
            return $result;
        }
    }

?>