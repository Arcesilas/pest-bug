<?php

declare(strict_types=1);

namespace Example;

class Example
{
    private mixed $value = null;
    
    private mixed $default = null;
    
    private bool $required = true;
    
    public function optional(mixed $default): self
    {
        $this->default = $default;
        $this->required = false;
        return $this;
    }
    
    public function isRequired(): bool
    {
        return $this->required;
    }
    
    public function getValue(): mixed
    {
        return $this->value ?? $this->default;
    }
}
