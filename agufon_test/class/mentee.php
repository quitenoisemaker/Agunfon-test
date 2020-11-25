<?php

//class to get all mentee in form select
class Mentee extends Db{

	public function getMentee(){
           
            $sql = "SELECT * FROM mentee";
            $stmt=$this->connect()->query($sql);
				while ($row=$stmt->fetch()){
                $name= $row['name'];
                echo "<option value='$name'>$name</option>";
            }   
        }

}