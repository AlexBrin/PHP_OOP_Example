<?php
	
	// класс наследует класс Word и перенял все его public и protected функции (методы) и переменные (свойства)
	class Hello extends Word implements mainWord {

		// Пример полиморфизма
		// Переназначение функции из класс Word
		// Функция переназначена ТОЛЬКО в данном классе
		public function getTarget() {
			return "Полиморфизм. Цель: ".$this->target; // а вот переменная все так же унаследована у Word
		}

		public function setWord($word) {
			$this->word = $word;
		}

	}

?>