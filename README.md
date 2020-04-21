Установка: 
<br>
1. ``git clode https://github.com/Eroha186/magneexTest``
2. ``composer install``
3. ``cp .env.example .env`` - делаем копию файла конфигурации для окружения
4. В файле ``.env`` настраиваем доступ к базе данных и почтовую конфигурацию
5. ``php artisan key:generate`` - созданем ключ приложения
6. ``php artisan migrate`` - делаем миграцию в базу данных
7. ``php artisan db:seed`` - заполняем данными ранее созданные таблицы
8. ``npm run prod`` - собираем клиентскую часть приложения
<br>
<br>

Система готова для использования. 
