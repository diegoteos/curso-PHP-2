<?php

class Book
{
    // PROPIEDADES son las caracteristicas de los objetos




    // METODOS: definen el comportamiento de nuestros objetos
    // Metodos: ¿Que es lo que puede hacer nuestro objeto?
    // metodo constructor
    public function __construct(
        private string $titulo,
        private string $autor,
        private float $precio,
        private int $stok,
        private int $id
    ) 
    {}

    public function getInfo()
    {
        // Escribir lo que este metodo hara
        $info = "<b> {$this->titulo} </b> escrito por: <i> $this->autor </i> <br/>
        precio: {$this->precio} <br/>
        ID: {$this->id} <br/>
        ";
        if ($this->stok >= 10) {
            $info .= "Existencias:  <spam style='color: green'>  {$this->stok} </spam><br/> ";
        } elseif ($this->stok >= 1 && $this->stok < 10) {
            $info .= "Pocas existencias:  <spam style='color: orange'>  {$this->stok} </spam><br/> ";
        }
        else {
            $info .= "Existencias:  <spam style='color: red'> {$this->stok} </spam><br/> ";
        }
        
        return $info;
    }
}


// instancia de la clase Book
$book1 = new Book(
    'Mi vida es linda',
    'Diego Teos.',
    299.90,
    $a = random_int(0, 30),
    1
);

// Le cambiamos precio si las propiedades son publicas
//$book1->precio = 0.00;

echo $book1->getInfo();

$book2 = new Book(
    'Mi vida es linda',
    'Diego Teos.',
    249.90,
    $a = random_int(0, 30),
    2
);


echo '<br/><br/>';
echo $book2->getInfo();




