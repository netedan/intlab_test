UserController.php
1. Реализован метод index, отображающий страницу со списком пользователей
2. Реализован метод store, добавляющий нового пользователя в БД
3. Реализован метод show, отображающий страницу с информацией по конкретному пользователю
4. Реализован метод edit, отображающий страницу с формой редактирования
5. Реализован метод update, обновляющий информацию о пользователе в БД
6. Реализован метод delete, удаляющий пользователя из БД

AuthController.php
1. Реализован метод showLoginForm, отображающий страницу с авторизацией
2. Реализован метод login, проводящий простую авторизацию пользователя по email (метод проверяет
вводимый email и сравнивает его с тем, что есть в базе данных. Если почта совпадает - метод отображает 
страницу со списком пользователей, если нет - просит повторить ввод почты)
3. Реализован метод logout.

