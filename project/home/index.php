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
                <img class="icon" src="../image/Home40black.svg" alt="иконка Домашняя страница">
            </a>
            <img class="icon" src="../image/Plus_40_black.svg" alt="иконка плюс">

            <a href=<?php echo '../profile' ?>>
                <img class="icon" src="../image/Profile_40_black.svg" alt="иконка профиль">
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
            //$users = getUsers();  
            //$users = array_values($users);
            //$posts = getPosts();
            //$posts = array_values($posts);
            
            foreach ($posts as $post) {
                //json
                $user_data = $users[array_search($post["user_id"], array_column($users, "user_id"))];
                //mysql
                //$user_data = $users[array_search($post["user_id"]+1, array_column($users, "user_id"))];
            
                //получаем пользователя из поста и ищем его данные из массива пользователей
                renderPost($post, $user_data);
            }
            ?>
        </div>
</body>

</html>