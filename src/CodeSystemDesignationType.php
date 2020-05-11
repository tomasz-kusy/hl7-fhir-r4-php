<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CodeSystemDesignationType
 *
 * The CodeSystem resource is used to declare the existence of and describe a code system or code system supplement and its key properties, and optionally define a part or all of its content.
 * XSD Type: CodeSystem.Designation
 */
class CodeSystemDesignationType extends BackboneElementType
{

    /**
     * The language this designation is defined for.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $language
     */
    private $language = null;

    /**
     * A code that details how this designation would be used.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $use
     */
    private $use = null;

    /**
     * The text value for this designation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $value
     */
    private $value = null;

    /**
     * Gets as language
     *
     * The language this designation is defined for.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The language this designation is defined for.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7FhirR4\CodeType $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as use
     *
     * A code that details how this designation would be used.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * A code that details how this designation would be used.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7FhirR4\CodingType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as value
     *
     * The text value for this designation.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The text value for this designation.
     *
     * @param \TKusy\Hl7FhirR4\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7FhirR4\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

