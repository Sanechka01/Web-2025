<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    //json
    $users_json = file_get_contents("../data/json/users.json", true);
    $users = json_decode($users_json, true);
    $posts_json = file_get_contents("../data/json/posts.json", true);
    $posts = json_decode($posts_json, true);

    //mysql
    // require_once '../home/script.php';
    // $users = getUsers();
    //$users = array_values($users);
    //$posts = getPosts();
    // $posts = array_values($posts);
    

    $id = 1;

    if (isset($_GET['id'])) {
        if (is_numeric($_GET['id'])) { //является ли айди числом
            $id = $_GET['id'];
        }
    }
    foreach ($users as $user) {
        if ($user['user_id'] == $id) {
            $user_data = $user;
        }
    }
    $user_posts = array_filter($posts, function ($post) use ($id) {
        return $post['user_id'] == $id;
    });
    $user_posts = array_values($user_posts);
    ?>
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
        <?php
        require_once 'profile.php';
        renderProfile($user_posts, $user_data);
        ?>
    </div>
</body>

</html>