<?php
function renderProfile(array $posts, $user)
{
    ?>
    <div class="main">
        <div class="account">
            <img class="avatar" src=<?php echo "../image/" . $user['profile_image']; ?> alt="аватар">
            <h3 class="name"><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h3>
            <p class="subtitle"> <?php echo $user['about']; ?></p>
            <div class="photo-info">
                <img class="photo-info-icon" src="../image/image16grey.svg" alt="иконка постов">
                <span class="photo-info-text"><?php echo count($posts); //кол-во постов ?> поста</span>
            </div>
        </div>
        <div class="post-area">
            <?php
            foreach ($posts as $post) {
                ?>
                <img src=<?php echo "../image/" . json_decode($post['images'])[0]; ?> class="image" alt="изображение">
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}
?>