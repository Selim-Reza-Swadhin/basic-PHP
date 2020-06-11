<?php
include('inc/header.php');

// create query

$query = 'SELECT * FROM tbl_post';

// get result

$result = mysqli_query($conn,$query);

// fetch data

//$post = mysqli_fetch_assoc($result);

//var_dump($posts);

// free result from memory

//mysqli_free_result($result);

// close conn

mysqli_close($conn);

?>

<div class="container">
    <h1>Posts</h1>
    <?php while($post = mysqli_fetch_assoc($result)) : ?>
    <div class="well">
        <h3>
            <?php echo $post['title']; ?>
        </h3>
        <small>Created on
            <?php echo $post['date']; ?> by
            <?php echo $post['author']; ?></small>
        <p style="text-align: justify">
            <?php echo $post['body']; ?>
        </p>
        <a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
    </div>
    <?php endwhile; ?>
</div>
<?php var_dump('ROOT_URL'); ?>
<?php include('inc/footer.php'); ?>