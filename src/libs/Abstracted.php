<?php

	namespace ArcheeNic\MegaplanAPI\libs;

	use ArcheeNic\MegaplanAPI\ExceptionMegaplan;
	use Megaplan\SimpleClient\Client;

	abstract class Abstracted{
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
				return $response;
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
		abstract protected function run_process();
		abstract protected function reset_process();
	}