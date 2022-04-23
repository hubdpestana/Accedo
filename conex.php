<?php
class conex extends mysqli
{
    public function __construct()
    {
        @parent::__construct(
            "localhost",
            "root",
            "root123",
            "pokemon",
            3306
        );
    }
    public function  test()
    {
        return  $this->host_info;
    }
}
