<?php
include "db.php";

$sql = "SELECT posts.id, posts.title, posts.content, posts.created_at, users.name AS author 
        FROM posts 
        JOIN users ON posts.author_id = users.id
        ORDER BY posts.created_at DESC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
</head>
<body>

<h2>Blog Posts</h2>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div style="border:1px solid #ddd; padding:10px; margin:15px 0;">
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['content']; ?></p>
        <small>
            Author: <b><?php echo $row['author']; ?></b> |
            Posted on: <?php echo $row['created_at']; ?>
        </small>
    </div>
<?php } ?>

</body>
</html>
