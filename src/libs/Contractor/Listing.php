<?php

	namespace ArcheeNic\MegaplanAPI\libs\Contractor;

	use ArcheeNic\MegaplanAPI\libs\abstracted;

	class Listing extends abstracted{
		//region Getters or Setters
		/**
		 * @return int|null
		 */
		protected function getFilterId(){
			return $this->FilterId;
		}

		/**
		 * @param int|null $FilterId
		 *
		 * @return listing
		 */
		public function setFilterId($FilterId){
			$this->FilterId=$FilterId;

			return $this;
		}

		/**
		 * @return int|null
		 */
		protected function getLimit(){
			return $this->Limit;
		}

		/**
		 * @param int|null $Limit
		 *
		 * @return listing
		 */
		public function setLimit($Limit){
			$this->Limit=$Limit;

			return $this;
		}

		/**
		 * @return int|null
		 */
		protected function getOffset(){
			return $this->Offset;
		}

		/**
		 * @param int|null $Offset
		 *
		 * @return listing
		 */
		public function setOffset($Offset){
			$this->Offset=$Offset;

			return $this;
		}

		/**
		 * @return null|string
		 */
		protected function getQs(){
			return $this->qs;
		}

		/**
		 * @param null|string $qs
		 *
		 * @return listing
		 */
		public function setQs($qs){
			$this->qs=$qs;

			return $this;
		}

		/**
		 * @return null|string
		 */
		protected function getPhone(){
			return $this->Phone;
		}

		/**
		 * @param null|string $Phone
		 *
		 * @return listing
		 */
		public function setPhone($Phone){
			$this->Phone=$Phone;

			return $this;
		}

		/**
		 * @return array|null
		 */
		protected function getModel(){
			return $this->Model;
		}

		/**
		 * @param array|null $Model
		 *
		 * @return listing
		 */
		public function setModel($Model){
			$this->Model=$Model;

			return $this;
		}

		/**
		 * @return bool|null
		 */
		protected function getDroppedOnly(){
			return $this->DroppedOnly;
		}

		/**
		 * @param bool|null $DroppedOnly
		 *
		 * @return listing
		 */
		public function setDroppedOnly($DroppedOnly){
			$this->DroppedOnly=$DroppedOnly;

			return $this;
		}
		//endregion

		/**
		 * @var null|integer
		 */
		protected $FilterId;
		/**
		 * @var null|integer
		 */
		protected $Limit;
		/**
		 * @var null|integer
		 */
		protected $Offset;
		/**
		 * @var null|string
		 */
		protected $qs;
		/**
		 * @var null|string
		 */
		protected $Phone;
		/**
		 * @var null|array
		 */
		protected $Model;
		/**
		 * @var null|boolean
		 */
		protected $DroppedOnly;

		protected function run_process(){
			return $this->Client->get('/BumsCrmApiV01/Contractor/list.api');
		}

		/**
		 * Сбрасывает настройки
		 * @return $this
		 */
		protected function reset_process(){
			return $this->setDroppedOnly(null)->setFilterId(null)->setLimit(null)->setModel(null)->setOffset(null)->setPhone(null)->setQs(null);
		}
	}