<?php
$likeCountFile = 'like_count.txt';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['likes'])) {
    // Get the current like count from the file
    $currentLikes = file_get_contents($likeCountFile);
    
    // Increment the like count
    $updatedLikes = intval($_POST['likes']);

    // Update the like count in the file
    file_put_contents($likeCountFile, $updatedLikes);

    // Return the updated like count
    echo $updatedLikes;
} else {
    // Return an error or handle the request appropriately
    echo "Error: Invalid request";
}
?>
