<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CoverageClassType
 *
 * Financial instrument which may be used to reimburse or pay for health care products and services. Includes both insurance and self-payment.
 * XSD Type: Coverage.Class
 */
class CoverageClassType extends BackboneElementType
{

    /**
     * The type of classification for which an insurer-specific class label or number and optional name is provided, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The alphanumeric string value associated with the insurer issued label.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * A short description for the class.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as type
     *
     * The type of classification for which an insurer-specific class label or number and optional name is provided, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of classification for which an insurer-specific class label or number and optional name is provided, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as value
     *
     * The alphanumeric string value associated with the insurer issued label.
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
     * The alphanumeric string value associated with the insurer issued label.
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as name
     *
     * A short description for the class.
     *
     * @return string
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
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

