<?php
require('header.php');

class Post
{
    public int $likes = 0;
    public array $comments = [];
    private string $author;

    public function aumentarLike()
    {
        $this->likes++;
    }

    public function __construct($qtLikes = 0)
    {
        $this->likes = $qtLikes;
    }

    public function setAuthor($nome)
    {
        $this->author = ucfirst($nome);
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

$post1 = new Post(10);
//$post1 -> likes = 3;
$post1->aumentarLike();
$post1->setAuthor('nathan');

echo "POST 1: " . $post1->likes . "<br/>Author: " . $post1->getAuthor() . "<br/>";