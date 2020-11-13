<?php

	class UserModel extends DataBase{

		public function Login($data){
			$sql = "SELECT * FROM users WHERE `username` = '".$data['username']."' AND `password` = '".$data['password']."' AND `status`= '1'";
			$result = false;
			if($this->db->query($sql)){
				$result = $this->db->query($sql)->Fetch(PDO::FETCH_ASSOC);
			}
			return json_encode($result);			
		}
		public function InsertNewUser($data){
			// INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `avatar`, `status`, `active`, `email`, `phone`, `address`, `created_time`, `updated_time`) VALUES (NULL, 'Admin', '123', 'Tien Nguyen', '', '1', b'1', 'admin01@gmail.com', '0979081574', '13 Thanh Vinh 8, Đà Nẵng', '0', '0');
			$sql = "INSERT INTO users VALUES('','".$data['userName']."','".$data['password']."','".$data['fullName']."','".$data['birthday']."','','".$data['email']."','".$data['phone']."','".$data['address']."','".time()."','')";
			$result = false;
			if($this->db -> exec($sql)){
				$result = true;
			}
			return json_encode($result);
		} 

		public function CheckUsername($name){
			$sql = "SELECT * FROM `users` WHERE `userName` = '".$name."'";
			$rows = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
			echo "<pre>";
			print_r($rows);
			echo "</pre>";
			$result = false;
			if(count($rows) > 0){
				$result = true;
			}
			return json_encode($result);
		}  

	}	   		

 ?>       