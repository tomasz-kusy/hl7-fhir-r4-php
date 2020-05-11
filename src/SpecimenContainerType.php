<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SpecimenContainerType
 *
 * A sample to be used for analysis.
 * XSD Type: Specimen.Container
 */
class SpecimenContainerType extends BackboneElementType
{

    /**
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Textual description of the container.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The type of container associated with the specimen (e.g. slide, aliquot, etc.).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The capacity (volume or other measure) the container may contain.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $capacity
     */
    private $capacity = null;

    /**
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $specimenQuantity
     */
    private $specimenQuantity = null;

    /**
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $additiveCodeableConcept
     */
    private $additiveCodeableConcept = null;

    /**
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $additiveReference
     */
    private $additiveReference = null;

    /**
     * Adds as identifier
     *
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
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
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
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
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
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
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
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
     * Id for container. There may be multiple; a manufacturer's bar code, lab assigned identifier, etc. The container ID may differ from the specimen id in some circumstances.
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
     * Gets as description
     *
     * Textual description of the container.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Textual description of the container.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of container associated with the specimen (e.g. slide, aliquot, etc.).
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
     * The type of container associated with the specimen (e.g. slide, aliquot, etc.).
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
     * Gets as capacity
     *
     * The capacity (volume or other measure) the container may contain.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Sets a new capacity
     *
     * The capacity (volume or other measure) the container may contain.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $capacity
     * @return self
     */
    public function setCapacity(\TKusy\Hl7FhirR4\QuantityType $capacity)
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * Gets as specimenQuantity
     *
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getSpecimenQuantity()
    {
        return $this->specimenQuantity;
    }

    /**
     * Sets a new specimenQuantity
     *
     * The quantity of specimen in the container; may be volume, dimensions, or other appropriate measurements, depending on the specimen type.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $specimenQuantity
     * @return self
     */
    public function setSpecimenQuantity(\TKusy\Hl7FhirR4\QuantityType $specimenQuantity)
    {
        $this->specimenQuantity = $specimenQuantity;
        return $this;
    }

    /**
     * Gets as additiveCodeableConcept
     *
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAdditiveCodeableConcept()
    {
        return $this->additiveCodeableConcept;
    }

    /**
     * Sets a new additiveCodeableConcept
     *
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $additiveCodeableConcept
     * @return self
     */
    public function setAdditiveCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $additiveCodeableConcept)
    {
        $this->additiveCodeableConcept = $additiveCodeableConcept;
        return $this;
    }

    /**
     * Gets as additiveReference
     *
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAdditiveReference()
    {
        return $this->additiveReference;
    }

    /**
     * Sets a new additiveReference
     *
     * Introduced substance to preserve, maintain or enhance the specimen. Examples: Formalin, Citrate, EDTA. (choose any one of additive*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $additiveReference
     * @return self
     */
    public function setAdditiveReference(\TKusy\Hl7FhirR4\ReferenceType $additiveReference)
    {
        $this->additiveReference = $additiveReference;
        return $this;
    }


}

