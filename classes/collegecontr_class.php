<?php
// Controls data
    class CollegeContr extends Colleges{
    private $college;

    public function __construct($college)
    {
        $this->college = $college;
    }

    public function setCollege(){
        if($this->emptyInput() == false){
            header("location: create.php?error=emptyinputfields&college=$this->college");
            exit();
        }

        $this->addCollege($this->college);
    }

    public function emptyInput(){
        global $result;
         if(empty($this->college)){
             $result = false;
         }
         else{
             $result = true;
         }
         return $result;
    }
    }

?>