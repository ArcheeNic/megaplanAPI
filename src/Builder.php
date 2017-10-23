<?php

	namespace ArcheeNic\MegaplanAPI;

	use ArcheeNic\MegaplanAPI\Builder\Contractor;
	use Megaplan\SimpleClient\Client;

	/**
	 * Class Builder
	 * @package ArcheeNic\MegaplanAPI
	 */
	class Builder{

		/**
		 * @var Client
		 */
		protected $Client;
		/**
		 * Builder constructor.
		 */

		/**
		 * @var Contractor $contractor;
		 */
		public $contractor;

		public function __construct($host,$login,$pass){
			$this->Client=(new Client($host))->auth($login,$pass);
			$this->contractor=new Contractor($this->Client);
		}
	}