USE blog;

CREATE TABLE `post` (
    `post_id` INT UNSIGNED AUTO_INCREMENT,
    `user_id` INT UNSIGNED,
    `like` INT UNSIGNED,
    `content` MEDIUMTEXT,
    `images` TEXT,
    `posted_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`post_id`)
);

CREATE TABLE `user` (
    `user_id` INT UNSIGNED AUTO_INCREMENT,
    `first_name` VARCHAR(200),
    `last_name` VARCHAR(200),
    `profile_image` VARCHAR(200),
    `about` VARCHAR(200),
    PRIMARY KEY (`user_id`)
);

/*
запуск mysql
    mysql -u root

использование бд
    USE blog;

показать все таблицы
    SHOW TABLES;

показать конкретную таблицу 
    SELECT * FROM post;
    SELECT * FROM user;

вставка в таблицу
    *файлы posts.sql, users.sql*

удаление таблицы
    DROP TABLE post;
    DROP TABLE user;

создание таблиц
    файл table.sql
*/