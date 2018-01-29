<?php


namespace Jim;


class Controller
{
	protected $Request;

	 function __construct()
	 {
	 	$this->Request = $_REQUEST;
	 }

}