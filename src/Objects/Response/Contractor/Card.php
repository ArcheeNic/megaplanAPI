<?php

	namespace Objects\Response\Contractor;

	use Objects\Standard;

	class Card extends Standard{
		/**
		 * @var integer Идентификатор клиента
		 */
		public $Id;
		/**
		 * @var object(Id,Name) Тип клиента
		 */
		public $Type;
		/**
		 * @var string Тип организации (company или person)
		 */
		public $PersonType;
		/**
		 * @var string Вид деятельности
		 */
		public $ActivityType;
		/**
		 * @var string Канал привлечения
		 */
		public $AdvertisingWay;
		/**
		 * @var date День рождения/Дата основания
		 */
		public $Birthday;
		/**
		 * @var string Описание
		 */
		public $Description;
		/**
		 * @var string Почта
		 */
		public $Email;
		/**
		 * @var string Номер ICQ
		 */
		public $Icq;
		/**
		 * @var string Адрес в Фейсбуке
		 */
		public $Facebook;
		/**
		 * @var string Джаббер
		 */
		public $Jabber;
		/**
		 * @var string Адреса
		 */
		public $Locations;
		/**
		 * @var string Имя или название
		 */
		public $Name;
		/**
		 * @var string ИД, созданный при синхронизации с интернет магазином
		 */
		public $GUID;
		/**
		 * @var string Предпочтительный вид связи
		 */
		public $PreferTransport;
		/**
		 * @var [object(Id,Name)] Ответственные
		 */
		public $Responsibles;
		/**
		 * @var [object(Id,Name)] Ответственные клиенты
		 */
		public $ResponsibleContractors;
		/**
		 * @var string Сайт
		 */
		public $Site;
		/**
		 * @var string Скайп
		 */
		public $Skype;
		/**
		 * @var object(Id,Name) Статус
		 */
		public $Status;
		/**
		 * @var date Дата создания
		 */
		public $TimeCreated;
		/**
		 * @var date Дата изменения
		 */
		public $TimeUpdated;
		/**
		 * @var string Твиттер
		 */
		public $Twitter;
	}

?>

