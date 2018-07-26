<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author NUR
 */

require_once 'core/init.php';


class User{


	private $username;
	private $password;
        private $_pdo;
	public function __construct($username, $password){

		$this->username = $username;
		$this->password = $password;
                    }
                public function AuthenticateStudent(){
		$this->_pdo = 
		//alter your code on the line below according to your databasename.students
		$query ="SELECT * FROM login WHERE username=? AND password=?";
		
		$run_query->execute([$this->user_id,$this->user_id]);

		//if no student is found
		if($run_query->rowCount()<1){

			echo "<script>alert('RegNo or Email Not Found')</script>";
			echo "<script>window.open('../studentloginPage.php','_self')</script>";

			}else{

					if($row = $run_query->fetch(PDO::FETCH_ASSOC)){

						//get the password from db
						$pass=password_verify($this->user_pass,$row['password']);


						if($pass==false){

										//echo some error and open the login window
									echo "<script>alert('Password Incorrect')</script>";
									echo "<script>window.open('../studentloginPage.php','_self')</script>";
							}elseif($pass==true){

								$_SESSION['StudentName']=$row['name'];
								$_SESSION['regNo']=$row['regNo'];
								$_SESSION['email']=$row['email'];
								
							header("Location: ../index.php?msg=logged in Successfully");
							}
					}

			}

	}
}

if(isset($_POST['submit'])){


	$userName=$_POST['emailusername'];
	$userPass=$_POST['password'];

	$StudentSession = new StudentLodin($userName,$userPass);

	$StudentSession->AuthenticateStudent();

}