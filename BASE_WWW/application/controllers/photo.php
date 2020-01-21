<?php
class photo extends CI_Controller {



		public function __construct(){
			parent::__construct();
		}

		public function DonnerURL($idPhoto, $idPhotographe)
		{
			$dateactuel = time();
			$url = $dateactuel + $idPhoto + $idPhotographe;
			$url = base_convert(strval($url), 10, 32);
			return $url;
 		}

 		public function Redi()
 		{
 			
 		}
}