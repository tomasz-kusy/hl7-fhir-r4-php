<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing QuestionnaireItemTypeType
 *
 * Distinguishes groups from questions and display text and indicates data type for questions.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: QuestionnaireItemType
 */
class QuestionnaireItemTypeType extends ElementType
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

