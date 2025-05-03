<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Домашняя страница</title>
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="page">
        <div class="slidebar">
            <a href=<?php echo '../home' ?>>
                <img class="slidebar__icon" src="../image/Home40black.svg" alt="иконка Домашняя страница"><!--переименовать -->
            </a>
            <img class="slidebar__icon" src="../image/Plus_40_black.svg" alt="иконка плюс">

            <a href=<?php echo '../profile' ?>>
                <img class="slidebar__icon" src="../image/Profile_40_black.svg" alt="иконка профиль">
            </a>
        </div>
        <div class="main">
            <?php
            require_once 'post.php';
            require_once 'script.php';
            //json
            $users_json = file_get_contents("../data/json/users.json", true);
            $users = json_decode($users_json, true);
            $posts_json = file_get_contents("../data/json/posts.json", true);
            $posts = json_decode($posts_json, true);

            //mysql
            $users = getUsers();
            $users = array_values($users);
            $posts = getPosts();
            $posts = array_values($posts);

            foreach ($posts as $post) {
                $user_data = $users[array_search($post["user_id"], array_column($users, "user_id"))];
                //получаем пользователя из поста и ищем его данные из массива пользователей
                if (isset($_GET['user_id'])) {
                    $userId = 1;
                    if (is_numeric($_GET['user_id'])) {
                        $userId = $_GET['user_id'];
                    }
                    if ($user_data['user_id'] == $userId) {
                        renderPost($post, $user_data);
                    }
                } else {
                    renderPost($post, $user_data);
                }
            }
            ?>
        </div>
</body>

</html>