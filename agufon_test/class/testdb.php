<?php
@session_start();
class Testdb extends Db{

	//getting mentee details
	public function getUsers(){
		$sql="SELECT * FROM mentee WHERE email='$_SESSION[user_email]'";
		$stmt=$this->connect()->query($sql);
		while ($row=$stmt->fetch()) {
			echo $row['name'];
		}
	}

//getting all mentors attached to a mentee
	public function getMentor(){

		$sql="SELECT * FROM mentee WHERE email='$_SESSION[user_email]'";
		$stmt=$this->connect()->query($sql);
		while ($row=$stmt->fetch()) {
			$mentee_name= $row['name'];
		}

		$sql="SELECT * FROM mentor WHERE mentee='$mentee_name'";
		$stmt=$this->connect()->query($sql);
		while ($row=$stmt->fetch()) {
			$name= $row['name'];
			echo "<ul><li> $name</li> </ul>";
		}
	}

			//insert into mentee table
	public function setUsersStmt($name, $email, $password){
		$sql="INSERT INTO mentee(name, email, password) VALUES (?, ?, ?)";
		$stmt=$this->connect()->prepare($sql);
		$query=$stmt->execute([$name, $email, $password]);
			if ($query) {

				echo "<script>alert('Success')</script>";
				echo "<script>window.open('../mentee_dashboard','_self')</script>";
			}else{
				echo "error";
			}
			}

			//insert into mentor table
	public function setMentor( $mentee, $name, $email, $password){
		$sql="INSERT INTO mentor(mentee, name, email, password) VALUES (?, ?, ?, ?)";
		$stmt=$this->connect()->prepare($sql);
		$query=$stmt->execute([$mentee, $name, $email, $password]);
			if ($query) {

				echo "<script>alert('Success')</script>";
				echo "<script>window.open('../mentor_dashboard','_self')</script>";
			}else{
				echo "<script>alert('Error')</script>";
			}
			}


			//Mentee login
	public function logMentee( $email, $password){
		$sql="SELECT * FROM mentee WHERE email='$_SESSION[user_email]'";
		$stmt=$this->connect()->query($sql);
		while ($row=$stmt->fetch()) {
			$password2= $row['password'];
		}
		if ($password == $password2) {	
                echo "<script>alert('Login Successful')</script>";
          		echo "<script>window.open('../mentee_dashboard','_self')</script>";
          
      }elseif($password !=$password2){
          echo "<script>alert('Password is wrong')</script>";
           echo "<script>window.open('../index','_self')</script>";
      }
			}


}