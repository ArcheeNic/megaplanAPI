<?php

	namespace ArcheeNic\MegaplanAPI\libs\Contractor;

	use ArcheeNic\MegaplanAPI\libs\abstracted;

	class ListFields extends abstracted{
		/**
		 * @return \Objects\Response\Contractor\listFields[]|null
		 */
		public function run(){
			$response=parent::run(); // TODO: Change the autogenerated stub
			if($response!==null){
				return $response->Fields;
			}
		}

		function run_process(){
			return $this->Client->get('/BumsCrmApiV01/Contractor/listFields.api');
		}

		protected function reset_process(){
			// TODO: Implement reset_process() method.
		}

	}