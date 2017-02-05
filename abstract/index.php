<?php
abstract class Person

	{
	public $fname;

	public $lname;

	public $dob;

	abstract protected
	function write_info();
	}

class employee extends Person

	{
	public $empNum;

	public $DOFJOIN;

	public

	function write_info()
		{
		echo "writing . $this->fname . 's info <br />";
		}
	}

class student extends Person

	{
	public $styNum;

	public $courceName;

	public

	function write_info()
		{
		echo "writing . $this->fname . 's info ";
		}
	}

$personA = new employee();
$personB = new student();
$personA->fname = "srinivas";
$personB->fname = "Kandukuri";
echo $personA->write_info();
echo $personB->write_info();
