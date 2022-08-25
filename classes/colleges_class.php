<?php
// Handles data logic
  
  class Colleges extends Database{

        protected function addCollege($college){
         $stmt = $this->connect()->prepare("INSERT INTO colleges (college) VALUES (?)");
         if(!$stmt->execute(array($college))){
              // echo "Oops! Something went wrong. Please try again later.";
              $stmt = null;
              header("location: ../create.php?error=stmtfailed");
              exit();
         }
         $stmt = null;
        }

        protected function getColleges(){

            $stmt = $this->connect()->prepare("SELECT * FROM colleges");
            $stmt->execute();
            $colleges = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $total = $stmt->rowCount();

            if($total > 0){
               return $colleges;
            }
            else{
               return false;
            } 
        }    
}
?>
