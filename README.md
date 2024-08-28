Установка и запуск.

1.Клонируйте репозиторий:
git clone https://github.com/zuerrr/Test
cd your-project

2.Запустите Docker контейнеры:
docker-compose up -d

3.Выполните миграции и сидеры:
docker-compose exec app php artisan migrate --seed

4.Импортируйте коллекцию Postman:
Создайте папку postman в корне вашего проекта.
Найдите папку Postman с файлом Test.postman_collection.json.
Поместите Test.postman_collection.json в папку postman.

5.Тестирование эндпоинтов:
Откройте Postman и выполните запросы из импортированной коллекции.
