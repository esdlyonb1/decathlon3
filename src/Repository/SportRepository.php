<?php

namespace App\Repository;


use App\Entity\Sport;
use Core\Attributes\TargetEntity;

#[TargetEntity(name: Sport::class)]
class SportRepository extends \Core\Repository\Repository
{

    public function save(Sport $sport):void
    {
        $query = $this->pdo->prepare("INSERT INTO $this->tableName SET name = :name, description = :description, accessory = :accessory");
        $query->execute([
            "name"=>$sport->getName(),
            "description"=>$sport->getDescription(),
            "accessory"=>$sport->getAccessory(),
        ]);

    }

    public function edit(Sport $sport):void
    {
        $query = $this->pdo->prepare("UPDATE $this->tableName SET name = :name, description = :description, accessory = :accessory WHERE id=:id");
        $query->execute([
            "id"=>$sport->getId(),
            "name"=>$sport->getName(),
            "description"=>$sport->getDescription(),
            "accessory"=>$sport->getAccessory(),
        ]);

    }




}