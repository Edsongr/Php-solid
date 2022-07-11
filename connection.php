<?php 

require __DIR__ . '/vendor/autoload.php';

interface Db
{
    public function connect($server, $name, $user, $password);
}

class Mysql implements Db
{
    public function connect($server, $name, $user, $password)
    {
        /**
         * Connect with mysql
         */

    }

}

class Connection
{

    public function __construct($server, $name, $user, $password)
    {
        $this->server       = $server;
        $this->name         = $name;
        $this->user         = $user;
        $this->password     = $password;


    }

    public function connect(Db $db)
    {
        $db->connect($this->server, $this->name, $this->user, $this->password);
    }


} 

$conn = new Connect('localhost', 'meuBanco', 'root', '');
$conn->connect(new Mysql);



