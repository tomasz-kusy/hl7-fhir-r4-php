<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ResearchElementType
 *
 * The possible types of research elements (E.g. Population, Exposure, Outcome).If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: ResearchElementType
 */
class ResearchElementType extends ElementType
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

