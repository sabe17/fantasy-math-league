<?php 
class User {
	public $firstName;
	public $lastName;
	public $section;
	public $team;

	public function __construct(){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->section = $section;
		$this->team = $team;
	}

	public function explain($firstName,$lastName,$section,$team){
		echo "NAME: ".$this->firstName.$this->lastName;
		echo "SECTION: ".$this->section;
		echo "TEAM: ".$this->team;
	}

}

$tyrone = new User('tryrone','bigguns','krulewich','sam');
$tyrone->explain();

?>









