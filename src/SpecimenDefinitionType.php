<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SpecimenDefinitionType
 *
 * A kind of specimen with associated set of requirements.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SpecimenDefinition
 */
class SpecimenDefinitionType extends DomainResourceType
{

    /**
     * A business identifier associated with the kind of specimen.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * The kind of material to be collected.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $typeCollected
     */
    private $typeCollected = null;

    /**
     * Preparation of the patient for specimen collection.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $patientPreparation
     */
    private $patientPreparation = [
        
    ];

    /**
     * Time aspect of specimen collection (duration or offset).
     *
     * @var \TKusy\Hl7FhirR4\StringType $timeAspect
     */
    private $timeAspect = null;

    /**
     * The action to be performed for collecting the specimen.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $collection
     */
    private $collection = [
        
    ];

    /**
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @var \TKusy\Hl7FhirR4\SpecimenDefinitionTypeTestedType[] $typeTested
     */
    private $typeTested = [
        
    ];

    /**
     * Gets as identifier
     *
     * A business identifier associated with the kind of specimen.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A business identifier associated with the kind of specimen.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as typeCollected
     *
     * The kind of material to be collected.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getTypeCollected()
    {
        return $this->typeCollected;
    }

    /**
     * Sets a new typeCollected
     *
     * The kind of material to be collected.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $typeCollected
     * @return self
     */
    public function setTypeCollected(\TKusy\Hl7FhirR4\CodeableConceptType $typeCollected)
    {
        $this->typeCollected = $typeCollected;
        return $this;
    }

    /**
     * Adds as patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $patientPreparation
     */
    public function addToPatientPreparation(\TKusy\Hl7FhirR4\CodeableConceptType $patientPreparation)
    {
        $this->patientPreparation[] = $patientPreparation;
        return $this;
    }

    /**
     * isset patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPatientPreparation($index)
    {
        return isset($this->patientPreparation[$index]);
    }

    /**
     * unset patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPatientPreparation($index)
    {
        unset($this->patientPreparation[$index]);
    }

    /**
     * Gets as patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getPatientPreparation()
    {
        return $this->patientPreparation;
    }

    /**
     * Sets a new patientPreparation
     *
     * Preparation of the patient for specimen collection.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $patientPreparation
     * @return self
     */
    public function setPatientPreparation(array $patientPreparation)
    {
        $this->patientPreparation = $patientPreparation;
        return $this;
    }

    /**
     * Gets as timeAspect
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getTimeAspect()
    {
        return $this->timeAspect;
    }

    /**
     * Sets a new timeAspect
     *
     * Time aspect of specimen collection (duration or offset).
     *
     * @param \TKusy\Hl7FhirR4\StringType $timeAspect
     * @return self
     */
    public function setTimeAspect(\TKusy\Hl7FhirR4\StringType $timeAspect)
    {
        $this->timeAspect = $timeAspect;
        return $this;
    }

    /**
     * Adds as collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $collection
     */
    public function addToCollection(\TKusy\Hl7FhirR4\CodeableConceptType $collection)
    {
        $this->collection[] = $collection;
        return $this;
    }

    /**
     * isset collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollection($index)
    {
        return isset($this->collection[$index]);
    }

    /**
     * unset collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollection($index)
    {
        unset($this->collection[$index]);
    }

    /**
     * Gets as collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Sets a new collection
     *
     * The action to be performed for collecting the specimen.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $collection
     * @return self
     */
    public function setCollection(array $collection)
    {
        $this->collection = $collection;
        return $this;
    }

    /**
     * Adds as typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SpecimenDefinitionTypeTestedType $typeTested
     */
    public function addToTypeTested(\TKusy\Hl7FhirR4\SpecimenDefinitionTypeTestedType $typeTested)
    {
        $this->typeTested[] = $typeTested;
        return $this;
    }

    /**
     * isset typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTypeTested($index)
    {
        return isset($this->typeTested[$index]);
    }

    /**
     * unset typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTypeTested($index)
    {
        unset($this->typeTested[$index]);
    }

    /**
     * Gets as typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @return \TKusy\Hl7FhirR4\SpecimenDefinitionTypeTestedType[]
     */
    public function getTypeTested()
    {
        return $this->typeTested;
    }

    /**
     * Sets a new typeTested
     *
     * Specimen conditioned in a container as expected by the testing laboratory.
     *
     * @param \TKusy\Hl7FhirR4\SpecimenDefinitionTypeTestedType[] $typeTested
     * @return self
     */
    public function setTypeTested(array $typeTested)
    {
        $this->typeTested = $typeTested;
        return $this;
    }


}

