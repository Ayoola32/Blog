<?php
// Confirm if the get requset is set
if (isset($_GET['p_id'])) {
    $get_post_id = $_GET['p_id'];
    

    // Post delete
    $delete_post_query = "DELETE FROM posts WHERE post_id = ?";
    $stmt_delete_post = mysqli_prepare($connection, $delete_post_query);
    mysqli_stmt_bind_param($stmt_delete_post, 'i', $get_post_id);
    if (!mysqli_stmt_execute($stmt_delete_post)) {
        die("Failed to delete post: " . mysqli_error($connection));
    }
    mysqli_stmt_close($stmt_delete_post);
    
    // Redirect or refresh to avoid re-execution on reload
    header("Location: posts.php");
    exit();
    
    
}