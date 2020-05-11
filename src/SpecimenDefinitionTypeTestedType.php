<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SpecimenDefinitionTypeTestedType
 *
 * A kind of specimen with associated set of requirements.
 * XSD Type: SpecimenDefinition.TypeTested
 */
class SpecimenDefinitionTypeTestedType extends BackboneElementType
{

    /**
     * Primary of secondary specimen.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $isDerived
     */
    private $isDerived = null;

    /**
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The preference for this type of conditioned specimen.
     *
     * @var \TKusy\Hl7FhirR4\SpecimenContainedPreferenceType $preference
     */
    private $preference = null;

    /**
     * The specimen's container.
     *
     * @var \TKusy\Hl7FhirR4\SpecimenDefinitionContainerType $container
     */
    private $container = null;

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     *
     * @var \TKusy\Hl7FhirR4\StringType $requirement
     */
    private $requirement = null;

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     *
     * @var \TKusy\Hl7FhirR4\DurationType $retentionTime
     */
    private $retentionTime = null;

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $rejectionCriterion
     */
    private $rejectionCriterion = null;

    /**
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     *
     * @var \TKusy\Hl7FhirR4\SpecimenDefinitionHandlingType[] $handling
     */
    private $handling = null;

    /**
     * Gets as isDerived
     *
     * Primary of secondary specimen.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getIsDerived()
    {
        return $this->isDerived;
    }

    /**
     * Sets a new isDerived
     *
     * Primary of secondary specimen.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $isDerived
     * @return self
     */
    public function setIsDerived(\TKusy\Hl7FhirR4\BooleanType $isDerived)
    {
        $this->isDerived = $isDerived;
        return $this;
    }

    /**
     * Gets as type
     *
     * The kind of specimen conditioned for testing expected by lab.
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
     * The kind of specimen conditioned for testing expected by lab.
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
     * Gets as preference
     *
     * The preference for this type of conditioned specimen.
     *
     * @return \TKusy\Hl7FhirR4\SpecimenContainedPreferenceType
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * Sets a new preference
     *
     * The preference for this type of conditioned specimen.
     *
     * @param \TKusy\Hl7FhirR4\SpecimenContainedPreferenceType $preference
     * @return self
     */
    public function setPreference(\TKusy\Hl7FhirR4\SpecimenContainedPreferenceType $preference)
    {
        $this->preference = $preference;
        return $this;
    }

    /**
     * Gets as container
     *
     * The specimen's container.
     *
     * @return \TKusy\Hl7FhirR4\SpecimenDefinitionContainerType
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Sets a new container
     *
     * The specimen's container.
     *
     * @param \TKusy\Hl7FhirR4\SpecimenDefinitionContainerType $container
     * @return self
     */
    public function setContainer(\TKusy\Hl7FhirR4\SpecimenDefinitionContainerType $container)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * Gets as requirement
     *
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Sets a new requirement
     *
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     *
     * @param \TKusy\Hl7FhirR4\StringType $requirement
     * @return self
     */
    public function setRequirement(\TKusy\Hl7FhirR4\StringType $requirement)
    {
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * Gets as retentionTime
     *
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getRetentionTime()
    {
        return $this->retentionTime;
    }

    /**
     * Sets a new retentionTime
     *
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     *
     * @param \TKusy\Hl7FhirR4\DurationType $retentionTime
     * @return self
     */
    public function setRetentionTime(\TKusy\Hl7FhirR4\DurationType $retentionTime)
    {
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * Adds as rejectionCriterion
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $rejectionCriterion
     */
    public function addToRejectionCriterion(\TKusy\Hl7FhirR4\CodeableConceptType $rejectionCriterion)
    {
        $this->rejectionCriterion[] = $rejectionCriterion;
        return $this;
    }

    /**
     * isset rejectionCriterion
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectionCriterion($index)
    {
        return isset($this->rejectionCriterion[$index]);
    }

    /**
     * unset rejectionCriterion
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectionCriterion($index)
    {
        unset($this->rejectionCriterion[$index]);
    }

    /**
     * Gets as rejectionCriterion
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getRejectionCriterion()
    {
        return $this->rejectionCriterion;
    }

    /**
     * Sets a new rejectionCriterion
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $rejectionCriterion
     * @return self
     */
    public function setRejectionCriterion(array $rejectionCriterion)
    {
        $this->rejectionCriterion = $rejectionCriterion;
        return $this;
    }

    /**
     * Adds as handling
     *
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SpecimenDefinitionHandlingType $handling
     */
    public function addToHandling(\TKusy\Hl7FhirR4\SpecimenDefinitionHandlingType $handling)
    {
        $this->handling[] = $handling;
        return $this;
    }

    /**
     * isset handling
     *
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandling($index)
    {
        return isset($this->handling[$index]);
    }

    /**
     * unset handling
     *
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandling($index)
    {
        unset($this->handling[$index]);
    }

    /**
     * Gets as handling
     *
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     *
     * @return \TKusy\Hl7FhirR4\SpecimenDefinitionHandlingType[]
     */
    public function getHandling()
    {
        return $this->handling;
    }

    /**
     * Sets a new handling
     *
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     *
     * @param \TKusy\Hl7FhirR4\SpecimenDefinitionHandlingType[] $handling
     * @return self
     */
    public function setHandling(array $handling)
    {
        $this->handling = $handling;
        return $this;
    }


}

