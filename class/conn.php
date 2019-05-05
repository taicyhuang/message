<?php

class dbcon 
{
    protected $dbhost;
    protected $dbuser;
    protected $dbpass;
    protected $dbname;

    public function __construct($dbhost,$dbuser,$dbpass,$dbname)
    {
        $this->dbhost=$dbhost;
        $this->dbuser=$dbuser;
        $this->dbpass=$dbpass;
        $this->dbname=$dbname;

        $dbh=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(mysqli_connect_errno())
        {
            echo "連接有錯";
            return false;
        }
        else
        {
            return $dbh;
        }
    }

    public function insert()
    {
        
        // echo $dbh;

    }
}







?>