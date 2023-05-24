<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);
  $content = $data['content'];
  $timestamp = $data['timestamp'];
  file_put_contents('data.txt', $content);
  echo json_encode(['status' => 'success']);
} else {
  $content = file_get_contents('data.txt');
  echo json_encode(['content' => $content]);
}
?>