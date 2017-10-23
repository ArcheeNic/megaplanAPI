<?php

	namespace ArcheeNic\MegaplanAPI\Builder;

	use ArcheeNic\MegaplanAPI\libs\Contractor as libsContractor;

	class Contractor extends Abstracted{
		function card($id){
			return (new libsContractor\Card($this->Client))->setId($id);
		}
		function listing(){
			return (new libsContractor\Listing($this->Client));
		}
		function getFields(){
			return (new libsContractor\ListFields($this->Client));
		}
	}