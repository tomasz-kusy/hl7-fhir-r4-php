<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CoverageClassType
 *
 * Financial instrument which may be used to reimburse or pay for health care products and services. Includes both insurance and self-payment.
 * XSD Type: Coverage.Class
 */
class CoverageClassType extends BackboneElementType
{

    /**
     * The type of classification for which an insurer-specific class label or number and optional name is provided. For example, type may be used to identify a class of coverage or employer group, policy, or plan.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The alphanumeric identifier associated with the insurer issued label.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $value
     */
    private $value = null;

    /**
     * A short description for the class.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Gets as type
     *
     * The type of classification for which an insurer-specific class label or number and optional name is provided. For example, type may be used to identify a class of coverage or employer group, policy, or plan.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of classification for which an insurer-specific class label or number and optional name is provided. For example, type may be used to identify a class of coverage or employer group, policy, or plan.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as value
     *
     * The alphanumeric identifier associated with the insurer issued label.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The alphanumeric identifier associated with the insurer issued label.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\IdentifierType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as name
     *
     * A short description for the class.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A short description for the class.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }


}

