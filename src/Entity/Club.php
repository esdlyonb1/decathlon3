<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[Table(name:"clubs")]
#[TargetRepository(name: ClubRepository::class)]
class Club
{
    private int $id;
    private string $name;
    private int $sport_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->sport_id;
    }

    /**
     * @param int $sport_id
     */
    public function setSportId(int $sport_id): void
    {
        $this->sport_id = $sport_id;
    }

}