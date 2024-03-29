<?php

namespace App\Repository;

use App\Entity\Club;
use App\Entity\Sport;
use Core\Attributes\TargetEntity;

#[TargetEntity(name: Club::class)]
class ClubRepository extends \Core\Repository\Repository
{

    public function findBySport(Sport $sport):array
    {
        $query = $this->pdo->prepare("SELECT * FROM $this->tableName WHERE sport_id = :sport_id");

        $query->execute([
            "sport_id"=>$sport->getId()
        ]);


        $items = $query->fetchAll(\PDO::FETCH_CLASS,get_class(new $this->targetEntity()));

        return $items;
    }
}