<?php
function renderPost(array $post, $user)
{ 
    ?>
    <div class="post">
        <div class="post__title">
            <div class="user">
                <img class="user__avatar" src=<?php echo "../image/" . $user['profile_image']; ?> alt="аватарка">
                <!-- переходим на профиль с id пользователя -->
                <a class="user__name" href=<?php echo '../profile?id=' . $user['user_id'] ?>>
                    <?php echo $user['first_name'] . " " . $user['last_name'] ?>
                </a>
            </div>
        </div>
        <img class="post__photo" src=<?php echo "../image/" . json_decode($post['images'])[0]; ?>>
        <!-- json преобразуем в массив фотографий и берем первую т.к. нет дизайна для нескольких фотографий-->
        <div class="post__like-button">
            <span>❤️</span>
            <span class="post__like-text"><?php echo $post['like']; ?></span>
        </div>
        <p class="post__text"><?php echo $post['content']; ?> </p>
        <p class="post__time"><?php echo $post['posted_at']; ?></p>
    </div>
    <?php
}
?>