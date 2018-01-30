<?php
namespace Jim;

require 'Model.php';

class Task extends Model
{
	protected $table = 'tasks';
	protected $id;
	protected $subject;
	protected $description;
	protected $complete;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * @return mixed
	 */
	public function getSubject()
	{
		return $this->subject;
	}

	/**
	 * @param mixed $subject
	 */
	public function setSubject($subject)
	{
		$this->subject = $subject;
	}

	/**
	 * @return mixed
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getComplete()
	{
		return $this->complete;
	}

	/**
	 * @param mixed $complete
	 */
	public function setComplete($complete)
	{
		$this->complete = $complete;
	}

}