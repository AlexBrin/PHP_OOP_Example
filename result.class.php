<?php

	class Result {
		private $hello, $world; // Объявляем private свойтсва
		/*

			private свойства и методы доступны ТОЛЬКО в данном классе. Они не наследуются и вызвать их из вне никак нельзя

		*/

		// Наш конструктор
		// Вызывается при "записи" в переменную
		public function __construct($hello, $world, $word) {
			$this->hello = $hello;
			$this->world = $world;
			$this->word = $word;
		}

		// Выводим результат
		public function printResult() {
			// Склеиваем строки
			$result = $this->hello->getWord(); // То, что мы писали в index.php на 21 строке
			$result .= $this->word->glue; // Public свойство в классе Word
			/*

				На самом деле добавлять сюда $word нет необходимости (я сделал это для примера), так как свойство $glue является публичным. Следовательно, $hello и $world так же унаследовали $glue и можно было сделать так:
				$result .= $this->hello->glue;
				или так:
				$result .= $this->world->glue;

			*/
			$result .= $this->world->getWord(); // То, что мы писали в index.php на 23 строке
			// Тут точно так же. Метод getTarget можно было вызвать и из $hello, и из $world:
			// $this->hello->getTarget()
			if($result != $this->word->getTarget())
				return "Результат неверный"; // Если наш результат не совпадает с нашей целью - возвращаем это
			return $result; // иначе просто отдадим результат
		}

	}

?>