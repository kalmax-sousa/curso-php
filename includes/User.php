<?php
require_once('Person.php');
class User extends Person {
    public $login;

    function __construct($name, $age, $login)
    {
        $this->login = $login;
        echo "Usuário criado!<br>";
        parent::__construct($name, $age);
    }

    function __destruct()
    {
        echo "Usuário diz: Tchau!<br>";
        parent::__destruct();
    }

    public function show()
    {
        echo "@{$this->login}: ";
        parent::show();

    }
}