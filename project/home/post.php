<?php
function renderPost(array $post, $user)
{ //Эта функция отвечает за отображение отдельного поста
    ?>
    <div class="post">
        <div class="title">
            <div class="user-info">
                <img class="avatar" src=<?php echo "../image/" . $user['profile_image']; ?> alt="аватарка">
                <!-- переходим на профиль с id пользователя -->
                <a class="profile-name" href=<?php echo '../profile?id=' . $user['user_id'] ?>>
                    <?php echo $user['first_name'] . " " . $user['last_name'] ?>
                </a>
            </div>
        </div>
        <img class="photo" src=<?php echo "../image/" . json_decode($post['images'])[0]; ?>>
        <!-- json преобразуем в массив фотографий и берем первую т.к. нет дизайна для нескольких фотографий-->
        <!-- массив фотографий сказал сделать Керим!!! -->
        <div class="like-button">
            <span>❤️</span>
            <span class="like-text"><?php echo $post['like']; ?></span>
        </div>
        <p class="text"><?php echo $post['content']; ?> </p>
        <p class="time"><?php echo $post['posted_at']; ?></p>
    </div>
    <?php
}
?>