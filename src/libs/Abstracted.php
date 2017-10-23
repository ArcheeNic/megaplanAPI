<?php

	namespace ArcheeNic\MegaplanAPI\libs;

	use ArcheeNic\MegaplanAPI\ExceptionMegaplan;
	use Megaplan\SimpleClient\Client;
	use Objects\Response\Common\Response;
	use Objects\Response\Common\Status;

	abstract class Abstracted{
		/**
		 * Статус. Сбрасывается перед каждым Run
		 * @var Status|null
		 */
		protected $status;

		/**
		 * @return null|Status
		 */
		public function getStatus(){
			return $this->status;
		}


		/**
		 * @var Client $Client
		 */
		protected $Client;

		public function __construct(Client $Client){
			$this->Client=$Client;
		}

		/**
		 * Обратиться к мегаплану
		 * @return mixed
		 */
		public function run(){
			try{
				$response=$this->run_process();
				$this->reset_process();
				$this->status=$response->status;
				if($response->status->code=='ok'){
					return $response->data;
				}else{
					return null;
				}
			}catch(ExceptionMegaplan $e){

			}
		}

		/**
		 * Сбросить все ранее указанные setter`ы
		 */
		public function reset(){
			try{
				$this->reset_process();
			}catch(ExceptionMegaplan $e){

			}
		}

		/**
		 * @return Response
		 */
		abstract protected function run_process();
		abstract protected function reset_process();
	}