<?php
class photo extends CI_Controller {



		public function __construct(){
			parent::__construct();
		}

		public function DonnerURL($idPhotographe)
		{
			$dateactuel = time();
			$url = $dateactuel + $idPhotographe;
			$url = base_convert(strval($url), 10, 32);
			return $url;
 		}

 		public function Redi()
 		{
 			
 		}
}