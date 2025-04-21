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