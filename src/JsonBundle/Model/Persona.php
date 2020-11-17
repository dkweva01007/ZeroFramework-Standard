<?php

declare(strict_types=1);

namespace JsonBundle\Model;

class Persona {
    private int $id;
    
    private string $name;
    
    private Arcana $arcana;
    
    function __construct(int $id, string $name, Arcana $arcana) {
        $this->id = $id;
        $this->name = $name;
        $this->arcana = $arcana;
    }

    function getId(): int {
        return $this->id;
    }

    function getName(): string {
        return $this->name;
    }

    function getArcana(): Arcana {
        return $this->arcana;
    }

    function setName(string $name): void {
        $this->name = $name;
    }

    function setArcana(Arcana $arcana): void {
        $this->arcana = $arcana;
    }


}
