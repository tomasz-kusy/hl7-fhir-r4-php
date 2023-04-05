<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetDesignationType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Designation
 */
class ValueSetDesignationType extends BackboneElementType
{

    /**
     * The language this designation is defined for.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $language
     */
    private $language = null;

    /**
     * A code that represents types of uses of designations.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $use
     */
    private $use = null;

    /**
     * Additional codes that detail how this designation would be used, if there is more than one use.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $additionalUse
     */
    private $additionalUse = null;

    /**
     * The text value for this designation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Gets as language
     *
     * The language this designation is defined for.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
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
     * @param \TKusy\Hl7Fhir\R5\CodeType $language
     * @return self
     */
    public function setLanguage(?\TKusy\Hl7Fhir\R5\CodeType $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as use
     *
     * A code that represents types of uses of designations.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * A code that represents types of uses of designations.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $use
     * @return self
     */
    public function setUse(?\TKusy\Hl7Fhir\R5\CodingType $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Adds as additionalUse
     *
     * Additional codes that detail how this designation would be used, if there is more than one use.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $additionalUse
     */
    public function addToAdditionalUse(\TKusy\Hl7Fhir\R5\CodingType $additionalUse)
    {
        $this->additionalUse[] = $additionalUse;
        return $this;
    }

    /**
     * isset additionalUse
     *
     * Additional codes that detail how this designation would be used, if there is more than one use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalUse($index)
    {
        return isset($this->additionalUse[$index]);
    }

    /**
     * unset additionalUse
     *
     * Additional codes that detail how this designation would be used, if there is more than one use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalUse($index)
    {
        unset($this->additionalUse[$index]);
    }

    /**
     * Gets as additionalUse
     *
     * Additional codes that detail how this designation would be used, if there is more than one use.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getAdditionalUse()
    {
        return $this->additionalUse;
    }

    /**
     * Sets a new additionalUse
     *
     * Additional codes that detail how this designation would be used, if there is more than one use.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $additionalUse
     * @return self
     */
    public function setAdditionalUse(array $additionalUse = null)
    {
        $this->additionalUse = $additionalUse;
        return $this;
    }

    /**
     * Gets as value
     *
     * The text value for this designation.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

