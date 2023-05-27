<?php
// Handle the POST request for saving the content
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];

    // Save the content to a file or database
    // Example: Saving to a file named "saved_content.txt"
    file_put_contents('saved_content.txt', $content);

    // Send a response if needed
    // Example: Sending a JSON response
    $response = array('status' => 'success', 'message' => 'Content saved successfully');
    echo json_encode($response);
    exit;
}

// Handle the GET request for retrieving the content
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve the content from a file or database
    // Example: Retrieving from a file named "saved_content.txt"
    $content = file_get_contents('saved_content.txt');

    // Send the content as a JSON response
    $response = array('content' => $content);
    echo json_encode($response);
    exit;
}
?>
