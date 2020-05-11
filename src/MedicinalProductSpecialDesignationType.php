<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductSpecialDesignationType
 *
 * Detailed definition of a medicinal product, typically for uses other than direct patient care (e.g. regulatory use).
 * XSD Type: MedicinalProduct.SpecialDesignation
 */
class MedicinalProductSpecialDesignationType extends BackboneElementType
{

    /**
     * Identifier for the designation, or procedure number.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The type of special designation, e.g. orphan drug, minor use.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The intended use of the product, e.g. prevention, treatment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $intendedUse
     */
    private $intendedUse = null;

    /**
     * Condition for which the medicinal use applies. (choose any one of indication*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $indicationCodeableConcept
     */
    private $indicationCodeableConcept = null;

    /**
     * Condition for which the medicinal use applies. (choose any one of indication*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $indicationReference
     */
    private $indicationReference = null;

    /**
     * For example granted, pending, expired or withdrawn.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * Date when the designation was granted.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * Animal species for which this applies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $species
     */
    private $species = null;

    /**
     * Adds as identifier
     *
     * Identifier for the designation, or procedure number.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Identifier for the designation, or procedure number.
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
     * Identifier for the designation, or procedure number.
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
     * Identifier for the designation, or procedure number.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier for the designation, or procedure number.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of special designation, e.g. orphan drug, minor use.
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
     * The type of special designation, e.g. orphan drug, minor use.
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
     * Gets as intendedUse
     *
     * The intended use of the product, e.g. prevention, treatment.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getIntendedUse()
    {
        return $this->intendedUse;
    }

    /**
     * Sets a new intendedUse
     *
     * The intended use of the product, e.g. prevention, treatment.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $intendedUse
     * @return self
     */
    public function setIntendedUse(\TKusy\Hl7FhirR4\CodeableConceptType $intendedUse)
    {
        $this->intendedUse = $intendedUse;
        return $this;
    }

    /**
     * Gets as indicationCodeableConcept
     *
     * Condition for which the medicinal use applies. (choose any one of indication*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getIndicationCodeableConcept()
    {
        return $this->indicationCodeableConcept;
    }

    /**
     * Sets a new indicationCodeableConcept
     *
     * Condition for which the medicinal use applies. (choose any one of indication*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $indicationCodeableConcept
     * @return self
     */
    public function setIndicationCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $indicationCodeableConcept)
    {
        $this->indicationCodeableConcept = $indicationCodeableConcept;
        return $this;
    }

    /**
     * Gets as indicationReference
     *
     * Condition for which the medicinal use applies. (choose any one of indication*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getIndicationReference()
    {
        return $this->indicationReference;
    }

    /**
     * Sets a new indicationReference
     *
     * Condition for which the medicinal use applies. (choose any one of indication*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $indicationReference
     * @return self
     */
    public function setIndicationReference(\TKusy\Hl7FhirR4\ReferenceType $indicationReference)
    {
        $this->indicationReference = $indicationReference;
        return $this;
    }

    /**
     * Gets as status
     *
     * For example granted, pending, expired or withdrawn.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * For example granted, pending, expired or withdrawn.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as date
     *
     * Date when the designation was granted.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date when the designation was granted.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as species
     *
     * Animal species for which this applies.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Sets a new species
     *
     * Animal species for which this applies.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $species
     * @return self
     */
    public function setSpecies(\TKusy\Hl7FhirR4\CodeableConceptType $species)
    {
        $this->species = $species;
        return $this;
    }


}

