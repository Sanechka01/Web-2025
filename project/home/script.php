<?php
/*
$connection = connectDatabase();
$postId = savePostToDatabase($connection, [
    "user_id" => 1,
    "title" => "Новый пост",
    "subtitle" => "Новый подзаголовок",
    "content" => "Lore  m ipsum, dolor sit amet consectetur adipisicing elit. Natus, repellat eveniet temporibus rerum totam deserunt perspiciatis molestiae pariatur aperiam reprehenderit explicabo quia neque id eaque, eius corporis, similique sed dignissimos!",
    "likes_count" => 11,
]);

$post = findPostInDatabase($connection, $postId);


var_dump($post);
*/

function connectDatabase(): PDO
{
    $dsn = 'mysql:host=127.0.0.1;dbname=blog';
    $user = 'Sasha@localhost';
    $password = 'password';
    return new PDO($dsn, $user, $password);
}
function getPosts(): ?array
{
    //подключились к базе данных, 
    $database = connectDatabase();
    // сделали запрос для получения постов в формате json, 
    $posts_json = $database->query("SELECT * FROM post");
    // обработали и получили массив постов
    $posts = $posts_json->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}
function getUsers(): ?array
{
    return connectDatabase()->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
}

/*function savePostToDatabase(PDO $connection, array $postParams): int
{
    $query = <<<SQL
        INSERT INTO 
            post (
                user_id, 
                title, 
                subtitle, 
                content, 
                likes_count
            )
        VALUES (
            :user_id,
            :title,
            :subtitle,
            :content,
            :likes_count
        )
    SQL;
    $statement = $connection->prepare($query);
    $statement->execute([
        ':user_id' => $postParams['user_id'],
        ':title' => $postParams['title'],
        ':subtitle' => $postParams['subtitle'],
        ':content' => $postParams['content'],
        ':likes_count' => $postParams['likes_count'],
    ]);
    return (int) $connection->lastInsertId();
}

function findPostInDatabase(PDO $connection, int $id): ?array
{
    $query = <<<SQL
        SELECT
            id,
            user_id, 
            title, 
            subtitle, 
            content, 
            posted_at,
            likes_count
        FROM post
        WHERE id = $id    
    SQL;
    $statement = $connection->query($query);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row ?: null;
}*/