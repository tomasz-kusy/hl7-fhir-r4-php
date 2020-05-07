<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RepositoryType
 *
 * Type for access of external URI.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: repositoryType
 */
class RepositoryType extends ElementType
{

    /**
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

