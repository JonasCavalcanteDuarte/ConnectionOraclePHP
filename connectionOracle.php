<?php

class Connection
{
    private $db_username = "system";
    private $db_password = "your_password_here";
    private $db = "oci:dbname=your_SID_Oracle_here";
    
    public function Conectar()
    {
        try {
                $base = new PDO($this->db,$this->db_username,$this->db_password);
                
                $query = $base->query("SELECT TO_CHAR(SYSDATE,'DD/MM/YYYY HH24:MI:SS') AS DH FROM DUAL");
                $rows = $query->fetchAll(PDO::FETCH_OBJ);
                var_dump($rows);

                if($base){
                    echo '<br><br>Successful connection!';
                    return $base;
                }
            } catch (PDOException $errorDescription) {
                echo '<br><br>Connection failed: '.$errorDescription->getMessage().'<br>';
                die();
            }
    }
}
?>