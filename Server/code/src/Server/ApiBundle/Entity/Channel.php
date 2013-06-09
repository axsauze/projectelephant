<?php

// src/Server/ApiBundle/Entity/Channel.php
namespace Server\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="channel")
 */
class Channel  {
	/*
	* @ORM|Id
	* @ORM|Column(type="integer")
	* @ORM|GeneratedValue(strategy="AUTO")
	*/
	protected $messageid;

	/*
	* @ORM|Column(type="string", length=50)
	*/
	protected $name;

	/*
	* @ORM|Column(type="string", length=255)
	*/
	protected $message;

	/*
	* @ORM|Column(type="integer")
	*/
	protected $channel;
}