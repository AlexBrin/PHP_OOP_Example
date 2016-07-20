<?php

	/*
	
		Свойство - это обычная переменная в классе
		Метод - обычная функция в классе
		Отличается от обычных перменных и свойств тем, что имеют модификатор доступа

	*/

	// Просто подключение (инклуды)
	require_once 'word.class.php';
	require_once 'interface.php';
	require_once 'hello.class.php';
	require_once 'world.class.php';

	// В переменных хранятся ссылки на сам объект
	// Тут нет конструкторов
	$word = new Word; // Создаем объект Word в переменной $word
	$hello = new Hello; // Создаем объект Hello в переменной $hello
	$hello->setWord("Hello"); // записываем слово
	$hello->test = "Тестовое свойство"; // Записываем в свойство test свой текст
	$world = new World; // Создаем объект World в переменной $world
	$world->setWord("World"); // записываем слово

	/*

		Классы Hello и World наследуют класс Word и используют интерфейс mainWord
		В классах Hello и World доступны все public и protected свойства и методы

	*/

	// А тут конструктор есть
	require_once 'result.class.php';
	$result = new Result($hello, $world, $word); // передаем данные в конструктор

	// Обычный вывод
	echo $world->test." (Тут ничего нет, так как записали данные в свойство мы в \$hello)<br>";
	echo $hello->test." (А тут уже наши данные)<br><br>";
	echo "Цель: ".$word->getTarget()."<br>"; // Получаем нашу целевую фразу. Можно было вызвать и через $hello, и через $world
	echo $hello->getTarget()."<br>"; // Используем переназначенную функцию в Hello
	echo $world->getTarget()."<br>"; // А тут мы используем фукнцию из родителя класса World - из Word
	/*
		Так как $hello и $world являются разными классами, то и работают с родительской функцией каждый отдельно
	*/
	echo "class Hello, слово: ".$hello->getWord()."<br>";
	echo "class World, слово: ".$world->getWord()."<br><br>";
	echo $result->printResult();

	// Пример инкапсуляции
	// Весь код обрабатывается как единое целое

?>