<?php

	namespace ArcheeNic\MegaplanAPI\libs\Contractor;

	use ArcheeNic\MegaplanAPI\libs\abstracted;
	use ArcheeNic\MegaplanAPI\ExceptionMegaplan;

	class Card extends abstracted{
		/**
		 * @var array|null
		 */
		protected $RequestedFields;

		/**
		 * @var integer|null
		 */
		protected $Id;

		/**
		 * @return mixed
		 */
		protected function getRequestedFields(){
			return $this->RequestedFields;
		}

		/**
		 * @param array|null $RequestedFields
		 *
		 * @return card
		 */
		public function setRequestedFields($RequestedFields){
			$this->RequestedFields=$RequestedFields;

			return $this;
		}

		/**
		 * @return integer|null
		 */
		protected function getId(){
			return $this->Id;
		}

		/**
		 * @param integer|null $Id
		 *
		 * @return card
		 */
		public function setId($Id){
			$this->Id=$Id;

			return $this;
		}

		protected function run_process(){
			if(!$this->getId()) throw new ExceptionMegaplan('undefined ID');

			$params=['Id'=>$this->getId()];
			if(!empty($RequestedFields)) $params['RequestedFields']=$RequestedFields;
			$response=$this->Client->get('/BumsCrmApiV01/Contractor/card.api',$params);
			if(is_string($response)){
				$responseJson=json_decode($response);
				if(!is_null($response)) $response=$responseJson;
			}
			return $response;
		}

		protected function reset_process(){
			$this->setRequestedFields(null)->setId(null);
		}
	}