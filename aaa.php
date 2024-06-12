<!DOCTYPE html>
<html>
<head>
    <title>PHP Azure DB Connection</title>
</head>
<body>
    <h1>Azure Database Connection Test</h1>
    <?php
    // データベース接続情報
    $host = 'momo-mysql.mysql.database.azure.com';
    $db = 'momoDataBase';
    $user = 'momouzer';
    $pass = 'Admintest1';
    $charset = 'utf8mb4';

    // データベース接続
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        echo "<p>接続に成功しました！</p>";
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    ?>
</body>
</html>
