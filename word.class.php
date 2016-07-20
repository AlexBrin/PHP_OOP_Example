<?php

	class Word {
		// Перечисляем свойства:
		protected $target = "Hello, World",
							$word;
		public    $glue = ', '; // так как переменная публична нам не нужно делать функции для получения этой переменной
		public    $test;

		// А вот $target и $word являются protected свойствами
		// Поэтому нужно делать так (перечисляем методы):
		public function getTarget() {
			return $this->target;
		}

		public function getWord() {
			return $this->word;
		}

	}

?>