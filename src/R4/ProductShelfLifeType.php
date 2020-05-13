<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ProductShelfLifeType
 *
 * The shelf-life and storage information for a medicinal product item or container can be described using this class.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ProductShelfLife
 */
class ProductShelfLifeType extends BackboneElementType
{

    /**
     * Unique identifier for the packaged Medicinal Product.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * This describes the shelf life, taking into account various scenarios such as shelf life of the packaged Medicinal Product itself, shelf life after transformation where necessary and shelf life after the first opening of a bottle, etc. The shelf life type shall be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The shelf life time period can be specified using a numerical value for the period of time and its unit of time measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $period
     */
    private $period = null;

    /**
     * Special precautions for storage, if any, can be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $specialPrecautionsForStorage
     */
    private $specialPrecautionsForStorage = null;

    /**
     * Gets as identifier
     *
     * Unique identifier for the packaged Medicinal Product.
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
     * Unique identifier for the packaged Medicinal Product.
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
     * Gets as type
     *
     * This describes the shelf life, taking into account various scenarios such as shelf life of the packaged Medicinal Product itself, shelf life after transformation where necessary and shelf life after the first opening of a bottle, etc. The shelf life type shall be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
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
     * This describes the shelf life, taking into account various scenarios such as shelf life of the packaged Medicinal Product itself, shelf life after transformation where necessary and shelf life after the first opening of a bottle, etc. The shelf life type shall be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
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
     * Gets as period
     *
     * The shelf life time period can be specified using a numerical value for the period of time and its unit of time measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The shelf life time period can be specified using a numerical value for the period of time and its unit of time measurement The unit of measurement shall be specified in accordance with ISO 11240 and the resulting terminology The symbol and the symbol identifier shall be used.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\QuantityType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as specialPrecautionsForStorage
     *
     * Special precautions for storage, if any, can be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $specialPrecautionsForStorage
     */
    public function addToSpecialPrecautionsForStorage(\TKusy\Hl7Fhir\R4\CodeableConceptType $specialPrecautionsForStorage)
    {
        $this->specialPrecautionsForStorage[] = $specialPrecautionsForStorage;
        return $this;
    }

    /**
     * isset specialPrecautionsForStorage
     *
     * Special precautions for storage, if any, can be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialPrecautionsForStorage($index)
    {
        return isset($this->specialPrecautionsForStorage[$index]);
    }

    /**
     * unset specialPrecautionsForStorage
     *
     * Special precautions for storage, if any, can be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialPrecautionsForStorage($index)
    {
        unset($this->specialPrecautionsForStorage[$index]);
    }

    /**
     * Gets as specialPrecautionsForStorage
     *
     * Special precautions for storage, if any, can be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getSpecialPrecautionsForStorage()
    {
        return $this->specialPrecautionsForStorage;
    }

    /**
     * Sets a new specialPrecautionsForStorage
     *
     * Special precautions for storage, if any, can be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $specialPrecautionsForStorage
     * @return self
     */
    public function setSpecialPrecautionsForStorage(array $specialPrecautionsForStorage)
    {
        $this->specialPrecautionsForStorage = $specialPrecautionsForStorage;
        return $this;
    }


}

