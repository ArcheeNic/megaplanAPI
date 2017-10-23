<?php

	namespace Objects\Response\Common;


	use Objects\Standard;

	class Response extends Standard{
		/**
		 * @var Status статус ответа с аттрибутами
		 */
		public $status;
		/**
		 * @var object значения входных параметров (если функция таковые поддерживает)
		 */
		public $params;
		/**
		 * @var object ыходные данные (список или один объект); формат зависит от функции и приводится в ее описании; аттрибут может отсутствовать
		 */
		public $data;
	}