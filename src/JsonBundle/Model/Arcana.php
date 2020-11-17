<?php

declare(strict_types=1);

namespace JsonBundle\Model;

class Arcana {
    private int $id;
    
    private string $name;
    
    function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    function getId(): int {
        return $this->id;
    }

    function getName(): string {
        return $this->name;
    }

    function setName(string $name): void {
        $this->name = $name;
    }

}
