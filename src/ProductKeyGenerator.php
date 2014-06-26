<?php
/**
 * @autor <github.com/andrerei>
 */
class ProductKeyGenerator {

	/*
	 * [*]=>a-z
	 * [.]=>0-9
	 * [+]=>a-z and 0-9
	 */

	private $uppercase = true;

	function key($format) {
		$format = str_replace(" ", "", $format);
		$array = str_split($format);

		$n = count($array);
		for ($i = 0; $i < $n; $i++) {
			$array[$i] = $this -> generateChar($array[$i]);
		}
		return implode("", $array);
	}

	private function generateChar($char) {
		$r;

		switch ($char) {
			case '.' :
				$r = rand(0, 9);
				break;
			case '*' :
				$r = $this -> randomChar();
				break;
			case '+' :
				(rand(0, 1)) ? $r = rand(0, 9) : $r = $this -> randomChar();
				break;
			default :
				$r = $char;
		}

		return $r;
	}

	private function randomChar() {
		$Characters = "abcdefghijklmnopqrstuxyvwz";
		$CharNumber = strlen($Characters);

		$index = mt_rand(0, $CharNumber - 1);
		$c = ($this -> uppercase) ? strtoupper($Characters[$index]) : $Characters[$index];
		return $c;
	}

	function uppercase($bool) {
		$this -> uppercase = $bool;
	}

}
