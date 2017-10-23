<?php

	namespace Objects\Response\Common;


	class Status{
		/**
		 * @var string код ответа (ok или error);
		 */
		public $code;
		/**
		 * @var string текстовое описание статуса (например, суть ошибки).
		 */
		public $message;
	}