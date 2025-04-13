<?php

enum Privileges{
	Guest =[
		"READ"=>"List",
	];
	Customer=[
		"READ"=>"List",
	];
	Admin=[
		"READ"=>"List",
		"INSERT"=>"Add",
		"UPDATE"=>"Update"
		"DELETE"=>"delete"
	];
}
?>