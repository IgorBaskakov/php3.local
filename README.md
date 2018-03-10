#Курс «PHP-3: Повышение квалификации»

_lesson 1._ https://github.com/IgorBaskakov/php3.local/tree/v1.3

_lesson 2._ https://github.com/IgorBaskakov/php3.local/tree/v2.1

_lesson 3._ https://github.com/IgorBaskakov/php3.local/tree/v3.1

Класс User находится в .\protected\Models\User.php

Тесты для проверки функции класса User располагаются в .\tests\Models\UserTest.php. 
В тестах я проверяю 8 ситуаций с различными наборами данных.

Консольная команда для отправки писем находится в .\protected\Commands\EmailSender.php

Подсчет посетителей сайта реализовано в компоненте Counter в файле .\protected\Components\Counter.php 

_lesson 4._ https://github.com/IgorBaskakov/php3.local/tree/v4.1

Первое и второе задание выполнено в файле .\memoryArray.php

В третьем задание исследовал объект $this в контроллере Index в методе actionDefault 
.\protected\Controllers\Index.php

Четвертое задание смотреть в файле .\memoryLoop.php

_lesson 5._ https://github.com/IgorBaskakov/php3.local/tree/v5.1

1.1 Новый класс описан в файле .\protected\Components\MyMailer.php
1.3 Тест для метода validateEmail класса MyMailer описан в файле .\tests\Components\MyMailerTest.php

2.1 Класс User описан в файле .\protected\Models\User.php
2.4 Переписал метод getFullName класса User, а также и тесты к этому методу в соответствии с внесенными изменениями

3. В файле .\protected\Commands\PrintUser.php описано еще одно применение Reflection API. Через рефлексию мы проеряем: 
реализует ли класс интерфейс Iterable, чтобы иметь возможность проитерироваться по свойствам объекта этого класса   
   

