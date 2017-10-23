<?php

	namespace Objects\Response\Common;


	class Attache{
		/**
		 * @var string Имя файла вложения
		 */
		public $Name;
		/**
		 * @var string Запрос для получения файла вложения по API
		 */
		public $Url;
		/**
		 * @var string Системное имя файла вложения, используется при удалении.
		 */
		public $FileName;
		/**
		 * @var date Дата создания файла вложения
		 */
		public $TimeCreated;
		/**
		 * @var integer Размер файла вложения, кб
		 */
		public $ize;
	}