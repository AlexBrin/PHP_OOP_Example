<?php

	// Все то же самое, что и с Hello
	class World extends Word implements mainWord {

		// НО тут мы уже не используем полиморфизма
		public function setWord($word) {
			$this->word = $word;
		}

	}

?>