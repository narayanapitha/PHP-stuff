<?php



class Connection{

	protected static $instance;
	private static $dsn = 'mysql:host=localhost;dbname=test';
	private static $username ='root';
	private static $password = 'root';

	private function __construct(){
		try{
			self::$instance = new PDO (self::$dsn, self::$username, self::$password);
			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		}catch(PDOException $e){
			echo "Mysql Connection Error :" .$e->getMessge();
		}
	}

	public static function getinstance(){
		if(!self::$instance){
			new Connection();
		}
		return self::$instance;
	}
}

class User{
    public $user_id;
    public $mobile;
    public $user_email;

    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['user_id'])) $this->user_id = $data['user_id'];
            
            $this->mobile = $data['mobile'];
            $this->user_email = $data['user_email'];
        }
    }
     public function getemail()
    {
        echo $this->user_email ;
    }

    public function getPh()
    {
        echo $this->mobile;
    }
}



class UserModel{
	public $conn;

	public function __construct(){
		$this->conn = Connection::getinstance();
	}


	public function getUserInfo(){
		
		$userquery= "select * from ht_users";
		$stmt = $this->conn->prepare($userquery);
		$stmt->execute();
		//$stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
		$data = $stmt->fetchAll();

		return $data;
	}

	public function updateUserInfo($mobile,$id){
		
		$userquery= "update ht_users set mobile = :mobile where user_id=:id;";
		$stmt = $this->conn->prepare($userquery);
		$params = array(':mobile'=>$mobile, ':id'=>$id);
		
		$data = $stmt->execute($params);
		if($data){
			return array('status'=>'ok','message'=>'Success');
		}else{
			return array('error'=>'fail' , 'message'=>'something wrong');
		}
	}

	public function deleteUserInfo($id){
		
		$userquery= "delete  from ht_users where user_id=:id;";
		$stmt = $this->conn->prepare($userquery);
		$params = array(':id'=>$id);
		
		$data = $stmt->execute($params);
		if($data){
			return array('status'=>'ok','message'=>'Success');
		}else{
			return array('error'=>'fail' , 'message'=>'something wrong');
		}
	}

}

if(isset($_POST['action']) &&  $_POST['action']== 'update'){
	$data = new UserModel();
	$data = $data->updateUserInfo($_POST['mobile'],$_POST['id']);
	echo json_encode($data);
	exit;
}else if(isset($_POST['action']) && $_POST['action']== 'delete'){
	$data = new UserModel();
	$data = $data->deleteUserInfo($_POST['id']);
	echo json_encode($data);
	exit;
	
}else{
	$data = new UserModel();
	$data = $data->getUserInfo();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>user Id</th>
        <th>Mobile</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
     
        
        <?php

	        foreach ($data as $key => $value) {
	        	# code...
	        	?>
	        	<tr class="table-container" id="<?php echo $value['user_id'];?>">
		        	<td><?php echo $value['user_id'];?></td>
		        	<td>
		        		<p id="mobile_<?php echo $value['user_id'];?>">
		        			<?php echo $value['mobile'];?>
		        		</p>
		        		<p id="mobile_edit_<?php echo $value['user_id'];?>" class="hidden">
		        			<input type="text" id="mobile_data_<?php echo $value['user_id'];?>" name="mobile" value="<?php echo $value['mobile'];?>">
		        		</p>
		        	</td>

		        	<!-- <td><p><?php echo $value['user_email'];?></p></td> -->
		        	<td>
		        		<a class="edit" href="#" id="edit_<?php echo $value['user_id'];?>">
		        			<span class="glyphicon glyphicon-pencil"></span>
		        		</a>
		        		<a class="save hidden" href="#" id="save_<?php echo $value['user_id'];?>">
		        			<span class="glyphicon glyphicon-saved"></span>
		        		</a>
		        	</td>
		        	<td><a href="#" class="delete" id="delete_<?php echo $value['user_id'];?>"> <span class="glyphicon glyphicon-trash"></span></a></td>
		        </tr>
	        	<?php
	        }

        ?>
      
      
    </tbody>
  </table>
</div>


</body>
</html>

