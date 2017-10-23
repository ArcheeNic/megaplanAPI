<?php

	namespace Objects;


	class Standard{
		/**
		 * standart constructor.
		 */
		public function __construct($data=null){
			if($data){
				$this->___completeObject($data);
			}
		}


		/**
		 * @param $data
		 */
		protected function ___completeObject($data){
			if(is_object($data)) $data=(array)$data;
			$vars=$this->___get_class_vars();
			foreach($vars as $k=>$v){
				if(isset($data[ $k ])){
					$this->{$k}=$data[ $k ];
				}
			}
		}

		protected function ___resetObject(){
			$vars=$this->___get_class_vars();
			$this->___completeObject($vars);
		}

		protected function ___get_class_vars(){
			return get_class_vars(get_class($this));
		}
	}