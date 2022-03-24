<?php
class Usuario
{
    private $id;
    private $nome;
    private $email;

    public function getID()
    {
        return $this->id;
    }

    public function getNOME()
    {
        return $this->nome;
    }

    public function getEMAIL()
    {
        return $this->email;
    }

    public function setID($i)
    {
        $this->id = trim($i);
    }

    public function setNOME($j)
    {
        $this->nome = trim($j);
    }

    public function setEMAIL($e)
    {
        $this->email = trim($e);
    }
}

interface UsuarioDAO
{
    public function add(Usuario $u);
    public function findAll();
    public function findById($id);
    public function findByEMAIL($email);
    public function update(Usuario $u);
    public function delete($id);
}
