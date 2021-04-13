<?php
namespace pdik\signhost\DTO;

use pdik\signhost\DTO\verification;
use JsonSerializable;

class PhoneNumberVerification extends Verification implements JsonSerializable {
	/** @var string */
	public $Number;

	/**
	 * @param string $number
	 */
	function __construct($number) {
		parent::__construct("PhoneNumber");
		$this->Number = $number;
	}

	function jsonSerialize() {
		return array_filter(array(
			"Type"   => $this->Type,
			"Number" => $this->Number,
		));
	}
}
