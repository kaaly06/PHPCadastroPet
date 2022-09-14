<?php

class PetModel
{
    public $id, $nome, $data_nascimento, $raca, $porte;

    public function save()
    {
        include 'DAO/PetDAO.php';

        $dao = new PetDAO();

        if($this->id == null)
        {
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/PetDAO.php';

        $dao = new PetDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/PetDAO.php';
        $dao = new PetDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PetModel();
    }

    public function delete(int $id)
    {
        include 'DAO/PetDAO.php';

        $dao = new PetDAO();

        $dao->delete($id);
    }
}
