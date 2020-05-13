<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing IdentifierType
 *
 * An identifier - identifies some entity uniquely and unambiguously. Typically this is used for business identifiers.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Identifier
 */
class IdentifierType extends ElementType
{

    /**
     * The purpose of this identifier.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierUseType $use
     */
    private $use = null;

    /**
     * A coded type for the identifier that can be used to determine which identifier to use for a specific purpose.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Establishes the namespace for the value - that is, a URL that describes a set values that are unique.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $system
     */
    private $system = null;

    /**
     * The portion of the identifier typically relevant to the user and which is unique within the context of the system.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $value
     */
    private $value = null;

    /**
     * Time period during which identifier is/was valid for use.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Organization that issued/manages the identifier.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $assigner
     */
    private $assigner = null;

    /**
     * Gets as use
     *
     * The purpose of this identifier.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierUseType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * The purpose of this identifier.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierUseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7Fhir\R4\IdentifierUseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as type
     *
     * A coded type for the identifier that can be used to determine which identifier to use for a specific purpose.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A coded type for the identifier that can be used to determine which identifier to use for a specific purpose.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as system
     *
     * Establishes the namespace for the value - that is, a URL that describes a set values that are unique.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * Establishes the namespace for the value - that is, a URL that describes a set values that are unique.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $system
     * @return self
     */
    public function setSystem(\TKusy\Hl7Fhir\R4\UriType $system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Gets as value
     *
     * The portion of the identifier typically relevant to the user and which is unique within the context of the system.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The portion of the identifier typically relevant to the user and which is unique within the context of the system.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R4\StringType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as period
     *
     * Time period during which identifier is/was valid for use.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Time period during which identifier is/was valid for use.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as assigner
     *
     * Organization that issued/manages the identifier.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getAssigner()
    {
        return $this->assigner;
    }

    /**
     * Sets a new assigner
     *
     * Organization that issued/manages the identifier.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $assigner
     * @return self
     */
    public function setAssigner(\TKusy\Hl7Fhir\R4\ReferenceType $assigner)
    {
        $this->assigner = $assigner;
        return $this;
    }


}

