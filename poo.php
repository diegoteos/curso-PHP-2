<?php

// Clase: modelo o plantilla para crear objetos basados en ellas
class Persona
{

    // creamos un metodo publico  metodo = funcion
    public function imprimeNombre()
    {
        echo "Mi nombre es Juanito Perez";
    }
}

// Hacemos una instancia de la clase persona.  
// Creamos un objeto que no es mas que colocar una variable y la igualamos con la instancia
//$objPersona = new Persona();

// El objeto $objPersona puede llamar los metodos (funciones) que tiene la clase
//$objPersona->imprimeNombre();

//echo "<br/><br/><br/>";

// PRACTICA
// Creo mi clase
class miChucho
{
    // Creo un metodo que recibe el nombre de mi chucho
    public function nombreDeMiChucho($nombre)
    {
        // El metodo imprime el nombre de mi chucho
        echo "Yo tengo un chucho que se llama " . $nombre . " y es muy jugueton";
    }
}

//$nombre = new miChucho();
///$nombre->nombreDeMiChucho("Canelo ojos claros");
