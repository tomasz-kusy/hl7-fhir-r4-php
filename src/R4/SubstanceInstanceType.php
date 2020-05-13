<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceInstanceType
 *
 * A homogeneous material with a definite composition.
 * XSD Type: Substance.Instance
 */
class SubstanceInstanceType extends BackboneElementType
{

    /**
     * Identifier associated with the package/container (usually a label affixed directly).
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * When the substance is no longer valid to use. For some substances, a single arbitrary date is used for expiry.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $expiry
     */
    private $expiry = null;

    /**
     * The amount of the substance.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Gets as identifier
     *
     * Identifier associated with the package/container (usually a label affixed directly).
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier associated with the package/container (usually a label affixed directly).
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as expiry
     *
     * When the substance is no longer valid to use. For some substances, a single arbitrary date is used for expiry.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Sets a new expiry
     *
     * When the substance is no longer valid to use. For some substances, a single arbitrary date is used for expiry.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $expiry
     * @return self
     */
    public function setExpiry(\TKusy\Hl7Fhir\R4\DateTimeType $expiry)
    {
        $this->expiry = $expiry;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount of the substance.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount of the substance.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7Fhir\R4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

