<?php

include '../app/Database/sqlStatment.php';

include '../app/Models/commenMthodesModel.php';

class headerData
{
    use commenMthodesModel;

    private $model;

    public function __construct()
    {
        $this->db = new sqlStatment() ;
        $this->table = 'menu';
    }

     public function index()
    {
        return $this->db->All($this->table);
    }
}