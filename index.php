<?php
/**
 * 
 */
$apiTemplateSet1=[
		"/api/items/%id%/%name%",
		"/api/items/%id%/%role%",
		"/api/items/%id%/%salary%"];
class User
{
	public $name ;
	public $id ;
	public $role ;
	public $salary ;



	function __construct($name,$id,$role,$salary)
	{
		$this->name = $name;
		$this->id = $id;
		$this->role = $role;
		$this->salary = $salary;
	}



	public function getApiPath($user,$apiTemplateSet1)
	{
	 	$repl = array('%id%','%name%','%role%','%salary%' );

	 	$userInfo = array($user->id, $user->name, $user->role, $user->salary);

		$apiTemplate = str_replace($repl, $userInfo, $apiTemplateSet1);
	 	
 
	   return $apiTemplate;
	}

}

$user = new User('John Dow','20','QA','100');

$user->getApiPath($user,$apiTemplateSet1);

