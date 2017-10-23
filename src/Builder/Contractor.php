<?php

	namespace ArcheeNic\MegaplanAPI\Builder;

	use ArcheeNic\MegaplanAPI\libs\Contractor as libsContractor;

	class Contractor extends Abstracted{
		/**
		 * Карточка клиента
		 * @param $id
		 *
		 * @return libsContractor\Card
		 */
		function card($id){
			return (new libsContractor\Card($this->Client))->setId($id);
		}

		/**
		 * Список клиентов
		 * @return libsContractor\Listing
		 */
		function listing(){
			return (new libsContractor\Listing($this->Client));
		}

		/**
		 * Список полей клиента
		 * @return libsContractor\ListFields
		 */
		function listFields(){
			return (new libsContractor\ListFields($this->Client));
		}
	}