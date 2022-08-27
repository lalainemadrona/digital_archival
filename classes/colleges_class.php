<?php
// Handles data logic  
   class Colleges extends Database{

         protected function addCollege($college){
            $stmt = $this->connect()->prepare("INSERT INTO colleges (college) VALUES (?)");
            
            if(!$stmt->execute(array($college))){
              $stmt = null;
              header("location: ../create.php?error=stmtfailed");
              exit();
            }
            
            $stmt = null;
         }

         protected function checkCollegeExists($college){
            $stmt = $this->connect()->prepare("SELECT LOWER (college) FROM colleges WHERE college = ? ");
           
            if(!$stmt->execute([strtolower($college)])){
               $stmt = null;
               header("location: ../index.php?error=stmtfailed");
               exit();          
            }

            global $resultCheck;

            if($stmt->rowCount() > 0){
               $resultCheck = false;
            }
            else{
               $resultCheck = true;
            }
            return $resultCheck;
            $stmt = null;
         }

         protected function getColleges(){
            $stmt = $this->connect()->prepare("SELECT * FROM colleges");
            
            if(!$stmt->execute()){
               $stmt = null;
               header("location: index.php?error=stmtfailed");
               exit();
            }

            if ($stmt->rowCount() == 0){
               $stmt = null;
               header("location: ../index.php?error=nocollegerecords");
               exit();
            }
            
            $colleges = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if ($stmt->rowCount() > 0){
               return $colleges;
            }

            $stmt = null;
         }

         protected function getCollege($college_id){
            $stmt = $this->connect()->prepare("SELECT * FROM colleges WHERE college_id = ?");
            
            if(!$stmt->execute([$college_id])){
               // echo "Oops! Something went wrong. Please try again later.";
               $stmt = null;
               header("location: ../index.php?error=stmtfailed");
               exit();
            }

            if ($stmt->rowCount() == 0){
               $stmt = null;
               header("location: ../index.php?error=nocollegerecordsfound");
               exit();
            }

            $college = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0){
               return $college;
            }

            $stmt = null;

            // $stmt->execute([$college_id]);
            // $college = $stmt->fetch(PDO::FETCH_ASSOC);
            // $total = $stmt->rowCount();

            // if($total > 0){
            //    return $college;
            // }
            // else{
            //    return false;
            // } 
         }
         
         protected function updateCollege(){

         }

         protected function deleteCollege(){

         }
         
   }
?>