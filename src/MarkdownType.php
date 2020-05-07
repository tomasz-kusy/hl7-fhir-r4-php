<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MarkdownType
 *
 * A string that may contain Github Flavored Markdown syntax for optional processing by a mark down presentation engineSystems are not required to have markdown support, so the text should be readable without markdown processing. The markdown syntax is GFM - see https://github.github.com/gfm/If the element is present, it must have either a @value, an @id referenced from the Narrative, or extensions
 * XSD Type: markdown
 */
class MarkdownType extends ElementType
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

