<?php
$action = $_GET['action'] ?? $_POST['action'] ?? null;

header('Content-Type: application/json');
if ($action && function_exists($action)) {
    $result = $action();
    echo json_encode($result);
    exit;
}

echo json_encode(['success' => false, 'message' => 'Function not found']);