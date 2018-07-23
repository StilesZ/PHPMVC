<?php
namespace fastphp\db;

use mysqli;

/**
 * 数据库操作类。
 * 其$pdo属性为静态属性，所以在页面执行周期内，
 * 只要一次赋值，以后的获取还是首次赋值的内容。
 * 这里就是PDO对象，这样可以确保运行期间只有一个
 * 数据库连接对象，这是一种简单的单例模式
 * Class Db
 */
class Db
{
    private static $pdo = null;
    private static $mysqli = null;

//    function __construct()
//    {
//        $mysqli=new MySQLi(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//    }
    public static function pdo()
    {
        if (self::$pdo !== null) {
            return self::$pdo;
        }
        self::$mysqli=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if (self::$mysqli->connect_error) {
            return die("连接失败: " . self::$mysqli->connect_error);
        }
        return self::$mysqli;
//
//        try {
//            $dsn    = sprintf('mysql:host=%s;dbname=%s;charset=utf8', DB_HOST, DB_NAME);
//            $option = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
//
//            return self::$pdo = new PDO($dsn, DB_USER, DB_PASS, $option);
//
//
//        } catch (PDOException $e) {
//            exit($e->getMessage());
//        }
    }
}