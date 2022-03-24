<?php

use UsuarioDaoMysql as GlobalUsuarioDaoMysql;

require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(Usuario $u)
    {
        $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email) VALUES(:nome, :email)");
        $sql->bindValue(':nome', $u->getNOME());
        $sql->bindValue(':email', $u->getEMAIL());
        $sql->execute();

        $u->setID($this->pdo->lastInsertId());
        return $u;
    }
    public function findAll()
    {
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) {
                $u = new Usuario();
                $u->setID($item['id']);
                $u->setNOME($item['nome']);
                $u->setEMAIL($item['email']);

                $array[] = $u;
            }
        }

        return $array;
    }
    public function findById($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $u = new Usuario();
            $u->setID($data['id']);
            $u->setNOME($data['nome']);
            $u->setEMAIL($data['email']);

            return $u;
        } else {
            return false;
        }
    }
    public function update(Usuario $u)
    {

        $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :name, email= :email WHERE id = :id");
        $sql->bindValue(":id", $u->getNOME());
        $sql->bindValue(":name", $u->getNOME());
        $sql->bindValue(":email", $u->getNOME());
        $sql->execute();
    }
    public function delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    public function findByEMAIL($email)
    {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $u = new Usuario();
            $u->setID($data['id']);
            $u->setNOME($data['nome']);
            $u->setEMAIL($data['email']);

            return $u;
        } else {
            return false;
        }
    }
}
