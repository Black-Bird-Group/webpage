<?php

// Get the request method
$method = $_SERVER['REQUEST_METHOD'];

// Process the request based on the method
switch ($method) {
  case 'GET':
    $indexContent = file_get_contents('/index.md'); // Read the content of the index page file
    $response = array('content' => $indexContent);
    break;

//   case 'POST':
//     // Handle POST request
//     $data = json_decode(file_get_contents('php://input'), true);
//     $response = array('message' => 'This is a POST request', 'data' => $data);
//     break;

  default:
    // Method not supported
    http_response_code(405);
    $response = array('error' => 'Method not supported');
    break;
}

// Set the response headers
header('Content-Type: application/json');

// Send the response
echo json_encode($response);
