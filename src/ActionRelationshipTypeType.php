<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ActionRelationshipTypeType
 *
 * Defines the types of relationships between actions.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: ActionRelationshipType
 */
class ActionRelationshipTypeType extends ElementType
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

