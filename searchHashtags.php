<?php
require_once("./connect.php"); // 載入 PDO 物件
if (isset($_GET['q'])) {
  $query = $_GET['q'];

  try {
    // 查詢相似的 Hash Tag
    $sql = "SELECT name FROM hashtags WHERE name LIKE :query LIMIT 10";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':query', '%' .$query .'%', PDO::PARAM_STR);
    $stmt->execute();

    $hashtags = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

    // 返回 JSON 格式的結果
    header('Content-Type: application/json');
    echo json_encode($hashtags);
  } catch (PDOException $e) {
    // 處理錯誤
    echo 'Database error: ' . $e->getMessage();
  }
}