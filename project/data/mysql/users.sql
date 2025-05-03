USE blog;

INSERT INTO
    `user` (
        `first_name`,
        `last_name`,
        `profile_image`,
        `about`
    )
VALUES (
        'Ваня',
        'Денисов',
        'photo_big.png',
        'Привет! Я системный аналитик в ACME :) Тут моя жизнь только для самых классных!'
    ),
    (
        'Лиза',
        'Дёмина',
        'liza_big.jpeg',
        ''
    );