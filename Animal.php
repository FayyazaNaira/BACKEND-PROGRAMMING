<?php

class Animal{
    public $fauna;
   
    public function __construct($data)
    {
        $this->fauna = $data;
    }


    public function index(){
        foreach($this->fauna as $satwa){
            echo $satwa;
        }
    }

    public  function store($data){
        array_push($this->fauna, $data);
    }

    public function update($index, $data){
        $this->fauna[$index] = $data;
    }

    public function destroy($index){
        unset($this->fauna[$index]);
    }
}


$animal = new Animal(['Ayam','Ikan']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('Burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";





