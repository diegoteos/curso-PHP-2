<?php

class Book
{
    // PROPIEDADES son las caracteristicas de los objetos




    // METODOS: definen el comportamiento de nuestros objetos
    // Metodos: ¿Que es lo que puede hacer nuestro objeto?
    // metodo constructor
    public function __construct(
        public string $titulo,
        public string $autor,
        public float $precio,
        public int $stok,
        public int $id
    )

    public function getInfo()
    {
        // Escribir lo que este metodo hara
        $info = "<b> $this->title</b><br/>";

        return $info;
    }
}


// instancia de la clase Book
$book1 = new Book(
    'Mi vida es linda',
    'Diego Teos.',
    299.90,
    150,
    1
);


$book2 = new Book(
    'Mi vida es linda',
    'Diego Teos.',
    299.90,
    150,
    1
);


echo $book1->titulo;




