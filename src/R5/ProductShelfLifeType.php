<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ProductShelfLifeType
 *
 * The shelf-life and storage information for a medicinal product item or container can be described using this class.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: ProductShelfLife
 */
class ProductShelfLifeType extends BackboneTypeType
{

    /**
     * This describes the shelf life, taking into account various scenarios such as shelf life of the packaged Medicinal Product itself, shelf life after transformation where necessary and shelf life after the first opening of a bottle, etc. The shelf life type shall be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $periodDuration
     */
    private $periodDuration = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $periodString
     */
    private $periodString = null;

    /**
     * Special precautions for storage, if any, can be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialPrecautionsForStorage
     */
    private $specialPrecautionsForStorage = null;

    /**
     * Gets as type
     *
     * This describes the shelf life, taking into account various scenarios such as shelf life of the packaged Medicinal Product itself, shelf life after transformation where necessary and shelf life after the first opening of a bottle, etc. The shelf life type shall be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
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
     * This describes the shelf life, taking into account various scenarios such as shelf life of the packaged Medicinal Product itself, shelf life after transformation where necessary and shelf life after the first opening of a bottle, etc. The shelf life type shall be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as periodDuration
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getPeriodDuration()
    {
        return $this->periodDuration;
    }

    /**
     * Sets a new periodDuration
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $periodDuration
     * @return self
     */
    public function setPeriodDuration(?\TKusy\Hl7Fhir\R5\DurationType $periodDuration = null)
    {
        $this->periodDuration = $periodDuration;
        return $this;
    }

    /**
     * Gets as periodString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPeriodString()
    {
        return $this->periodString;
    }

    /**
     * Sets a new periodString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $periodString
     * @return self
     */
    public function setPeriodString(?\TKusy\Hl7Fhir\R5\StringType $periodString = null)
    {
        $this->periodString = $periodString;
        return $this;
    }

    /**
     * Adds as specialPrecautionsForStorage
     *
     * Special precautions for storage, if any, can be specified using an appropriate controlled vocabulary The controlled term and the controlled term identifier shall be specified.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specialPrecautionsForStorage
     */
    public function addToSpecialPrecautionsForStorage(\TKusy\Hl7Fhir\R5\CodeableConceptType $specialPrecautionsForStorage)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialPrecautionsForStorage
     * @return self
     */
    public function setSpecialPrecautionsForStorage(array $specialPrecautionsForStorage = null)
    {
        $this->specialPrecautionsForStorage = $specialPrecautionsForStorage;
        return $this;
    }


}

