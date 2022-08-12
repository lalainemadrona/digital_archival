<?php
// Handles data logic
  
  class Colleges extends Database{

        protected function getCollege($college){
          // $sql = "SELECT * FROM colleges WHERE college = ?";
          // $stmt = $this->connect()->prepare($sql);
          // $stmt->execute([$college]);

          // $results = $stmt->fetchAll();
          // return $results;
            $stmt = $this->connect()->prepare("SELECT * FROM colleges WHERE college = ?");
            
            if(!$stmt->execute(array($college))){
                // echo "Oops! Something went wrong. Please try again later.";
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
           }
           if ($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../index.php?error=nocollegerecordswerefound");
                exit();
           }
           if ($stmt->rowCount() > 0){
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                // return $results;
           }
           return $results;
           $stmt = null;
        }    
}
?>
