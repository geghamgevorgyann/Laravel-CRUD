<?php

namespace App\Repository;

use App\Models\Persons;

class PersonsRepository
{
    public function index(){
        echo "Persons Repository";
        return Persons::all();
    }

    public function getById($id){
        return Persons::findOrFail($id);
    }

    public function store(array $data){
        return Persons::create($data);
    }

    public function update(array $data, $id){
        return Persons::whereId($id)->update($data);
    }

    public function delete($id){
        Persons::destroy($id);
    }
}
