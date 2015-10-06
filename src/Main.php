<?php namespace Raybird\Morning;

class Main {

	 private $version = '0.0.2';

	public function __construct () {
        //echo "this is main $this->version";
    }

    public function getVersion () {
    	return $this->version;
    }
}