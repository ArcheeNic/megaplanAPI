<?php

	namespace ArcheeNic\MegaplanAPI\Builder;

	use Megaplan\SimpleClient\Client;

	abstract class Abstracted{
		/**
		 * @var Client $Client
		 */
		protected $Client;

		public function __construct(Client $Client){
			$this->Client=$Client;
		}
	}