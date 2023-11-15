<?php

// buat kelas manager dengan properti nama dan function sayHello
class manager
{
    var string $nama;
    
    function sayHello(string $name): void
    {
        echo "Hi $name, namaku $this->nama" . PHP_EOL;
    }
}

// buat kelas VicePresident dengan extends manager
class vicePresident extends manager
{
    var string $alamat;
    
    function sayHello(string $alamat): void
    {
        echo "alamatku di, $this->alamat" . PHP_EOL;
    }
}
