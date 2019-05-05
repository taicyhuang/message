<?php
// require_once "./dbconfig.php";
class db
{
    public $host="localhost";
    public $dbuser="webber";
    public $dbpass="webber0052";
    public $dbname="message";
    // public $charset="utf8";
    public $result;//存取方式 function {$this->$result}

    //建構式、預處理連線
    function __construct()
    {
       $this->sql_connect();
       $this->sql_database();
       $this->set_db_encode();
    }

    //設定連線
    function sql_connect()
    {
        return @mysqli_connect($this->host,$this->dbuser,$this->dbpass);
    }

    //選擇資料庫
    function sql_database()
    {
        return @mysql_select_db($this->database);
    }

    //選擇資料庫語系
    function set_db_encode()
    {
        return mysql_query("SET NAMES 'utf8'");
    }

    //主要使用方法
    function query($sql_string)
    {
        $result = mysql_query($sql_string); //資料庫物件???

        $query= new db_query($result); //物件轉array
        return $result;
    }
}

//資料庫物件轉陣列
class db_query
{
    private $result;

    function __construct($result)
    {
        $this->result = $result;//DB查詢->db_query->$result
    }

    function result()
    {
        $query = array();
        if($this->result !=false)
        {
            while($row = mysql_fetch_object($this->result))
            {
                $query[]=$row;
            }
            return $query;
        }
        return false;
    }
}



?>