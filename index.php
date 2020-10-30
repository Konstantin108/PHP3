<?php

class SquareSize
{
	public $height = '';
	public $width = '';
	public $arr = [];

	public function multiply()
	{
		return $this->height * $this->width;
	}

	public function getArray()
	{
		$n =  $this->multiply();

		for($i = 1; $i <= $n; $i++){
			$this->arr[] = $i + 1;
		}

	}

	public function getHeight()
	{
			$h = $this->height;
			$array = $this->arr;
			for($k = 0; $k < count($array); $k++){
				for($j = 1; $j <= $h; $j++){
				echo $j;
			}
		}

	}
}

$squareSize = new SquareSize();
$squareSize->height = 5;
$squareSize->width = 3;
$squareSize->multiply();
$squareSize->getArray();
$squareSize->getHeight();

// class GetArray extends SquareSize
// {
// 	public $lengthOfArr;

// 	public function __construct($height, $width, $resultOfMultiply, $lengthOfArr)
// 	{
// 		$this->lengthOfArr = $lengthOfArr;
// 		parent::__construct($height, $width, $resultOfMultiply);
// 	}


// 	public function display()
// 	{
// 		echo $this->lengthOfArr;
// 	}
// }

