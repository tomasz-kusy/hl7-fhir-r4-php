<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionProductInstanceType
 *
 * A food or supplement that is consumed by patients.
 * XSD Type: NutritionProduct.Instance
 */
class NutritionProductInstanceType extends BackboneElementType
{

    /**
     * The amount of items or instances that the resource considers, for instance when referring to 2 identical units together.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The identifier for the physical instance, typically a serial number or manufacturer number.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The name for the specific product.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * The identification of the batch or lot of the product.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $lotNumber
     */
    private $lotNumber = null;

    /**
     * The time after which the product is no longer expected to be in proper condition, or its use is not advised or not allowed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $expiry
     */
    private $expiry = null;

    /**
     * The time after which the product is no longer expected to be in proper condition, or its use is not advised or not allowed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $useBy
     */
    private $useBy = null;

    /**
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent
     */
    private $biologicalSourceEvent = null;

    /**
     * Gets as quantity
     *
     * The amount of items or instances that the resource considers, for instance when referring to 2 identical units together.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount of items or instances that the resource considers, for instance when referring to 2 identical units together.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * The identifier for the physical instance, typically a serial number or manufacturer number.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * The identifier for the physical instance, typically a serial number or manufacturer number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * The identifier for the physical instance, typically a serial number or manufacturer number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * The identifier for the physical instance, typically a serial number or manufacturer number.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The identifier for the physical instance, typically a serial number or manufacturer number.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name for the specific product.
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
     * The name for the specific product.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as lotNumber
     *
     * The identification of the batch or lot of the product.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Sets a new lotNumber
     *
     * The identification of the batch or lot of the product.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $lotNumber
     * @return self
     */
    public function setLotNumber(?\TKusy\Hl7Fhir\R5\StringType $lotNumber = null)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Gets as expiry
     *
     * The time after which the product is no longer expected to be in proper condition, or its use is not advised or not allowed.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Sets a new expiry
     *
     * The time after which the product is no longer expected to be in proper condition, or its use is not advised or not allowed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $expiry
     * @return self
     */
    public function setExpiry(?\TKusy\Hl7Fhir\R5\DateTimeType $expiry = null)
    {
        $this->expiry = $expiry;
        return $this;
    }

    /**
     * Gets as useBy
     *
     * The time after which the product is no longer expected to be in proper condition, or its use is not advised or not allowed.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getUseBy()
    {
        return $this->useBy;
    }

    /**
     * Sets a new useBy
     *
     * The time after which the product is no longer expected to be in proper condition, or its use is not advised or not allowed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $useBy
     * @return self
     */
    public function setUseBy(?\TKusy\Hl7Fhir\R5\DateTimeType $useBy = null)
    {
        $this->useBy = $useBy;
        return $this;
    }

    /**
     * Gets as biologicalSourceEvent
     *
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getBiologicalSourceEvent()
    {
        return $this->biologicalSourceEvent;
    }

    /**
     * Sets a new biologicalSourceEvent
     *
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent
     * @return self
     */
    public function setBiologicalSourceEvent(?\TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent = null)
    {
        $this->biologicalSourceEvent = $biologicalSourceEvent;
        return $this;
    }


}

