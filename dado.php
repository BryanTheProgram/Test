<html>
<head>
<meta charset="UTF-8">
</head>
<?php
  abstract class Database_Info{
        const    host_name="localhost",
                  db_name="test",
                  db_password="",
                  db_user="root";
      abstract protected function Database_Conn();
    }
    class Conn_to_DB extends Database_Info{
        protected function Database_Conn(){
             try{
        
    $db_conn=new PDO ("mysql:host=parent::host_name; dbname=parent::db_name", parent::db_user, parent::db_password);
        echo "Connesione riuscita";
    }catch(PDOException $e){
        echo "Errore : " . $e->getMessage();
        die();
    }

        }
        public function __construct(){
            $this->Database_Conn();
        }
    }
    
    ?>
<body>
<?php
//Creare una connessione con il db
$db=new Conn_to_DB();

?>
</body>
</html>