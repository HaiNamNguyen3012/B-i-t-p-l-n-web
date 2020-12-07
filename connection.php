# connection.php</br>

<?php
class DB // kết nối với database
{
    private static $instance = NULl;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO('mysql:host=localhost;port=3307;dbname=phong_tro', 'root', ''); // PDO: PHP Data Objects
          self::$instance->exec("SET NAMES 'utf8'");      // trước '::' sẽ là tên một class, phía sau sẽ là một biến của class ấy. class có thể là self, static, parent
        } catch (PDOException $ex) {    // theo mình hiểu sẽ 'self' sẽ giống như this trong java 
          die($ex->getMessage());       // "SET NAMES 'utf8'" để gửi thêm mấy từ dị như 'ñ' or 'ö'
        }
      }
      return self::$instance;
    }
}



?>

### connection.php</br>
