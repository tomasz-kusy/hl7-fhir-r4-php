<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isDerived
     */
    private $isDerived = null;

    /**
     * The kind of specimen conditioned for testing expected by lab.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The preference for this type of conditioned specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenContainedPreferenceType $preference
     */
    private $preference = null;

    /**
     * The specimen's container.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenDefinitionContainerType $container
     */
    private $container = null;

    /**
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $requirement
     */
    private $requirement = null;

    /**
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $retentionTime
     */
    private $retentionTime = null;

    /**
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $singleUse
     */
    private $singleUse = null;

    /**
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $rejectionCriterion
     */
    private $rejectionCriterion = null;

    /**
     * Set of instructions for preservation/transport of the specimen at a defined temperature interval, prior the testing process.
     *
     * @var \TKusy\Hl7Fhir\R5\SpecimenDefinitionHandlingType[] $handling
     */
    private $handling = null;

    /**
     * Where the specimen will be tested: e.g., lab, sector, device or any combination of these.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $testingDestination
     */
    private $testingDestination = null;

    /**
     * Gets as isDerived
     *
     * Primary of secondary specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
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
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isDerived
     * @return self
     */
    public function setIsDerived(?\TKusy\Hl7Fhir\R5\BooleanType $isDerived = null)
    {
        $this->isDerived = $isDerived;
        return $this;
    }

    /**
     * Gets as type
     *
     * The kind of specimen conditioned for testing expected by lab.
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
     * The kind of specimen conditioned for testing expected by lab.
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
     * Gets as preference
     *
     * The preference for this type of conditioned specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenContainedPreferenceType
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
     * @param \TKusy\Hl7Fhir\R5\SpecimenContainedPreferenceType $preference
     * @return self
     */
    public function setPreference(\TKusy\Hl7Fhir\R5\SpecimenContainedPreferenceType $preference)
    {
        $this->preference = $preference;
        return $this;
    }

    /**
     * Gets as container
     *
     * The specimen's container.
     *
     * @return \TKusy\Hl7Fhir\R5\SpecimenDefinitionContainerType
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
     * @param \TKusy\Hl7Fhir\R5\SpecimenDefinitionContainerType $container
     * @return self
     */
    public function setContainer(?\TKusy\Hl7Fhir\R5\SpecimenDefinitionContainerType $container = null)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * Gets as requirement
     *
     * Requirements for delivery and special handling of this kind of conditioned specimen.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $requirement
     * @return self
     */
    public function setRequirement(?\TKusy\Hl7Fhir\R5\MarkdownType $requirement = null)
    {
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * Gets as retentionTime
     *
     * The usual time that a specimen of this kind is retained after the ordered tests are completed, for the purpose of additional testing.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
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
     * @param \TKusy\Hl7Fhir\R5\DurationType $retentionTime
     * @return self
     */
    public function setRetentionTime(?\TKusy\Hl7Fhir\R5\DurationType $retentionTime = null)
    {
        $this->retentionTime = $retentionTime;
        return $this;
    }

    /**
     * Gets as singleUse
     *
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getSingleUse()
    {
        return $this->singleUse;
    }

    /**
     * Sets a new singleUse
     *
     * Specimen can be used by only one test or panel if the value is "true".
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $singleUse
     * @return self
     */
    public function setSingleUse(?\TKusy\Hl7Fhir\R5\BooleanType $singleUse = null)
    {
        $this->singleUse = $singleUse;
        return $this;
    }

    /**
     * Adds as rejectionCriterion
     *
     * Criterion for rejection of the specimen in its container by the laboratory.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $rejectionCriterion
     */
    public function addToRejectionCriterion(\TKusy\Hl7Fhir\R5\CodeableConceptType $rejectionCriterion)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $rejectionCriterion
     * @return self
     */
    public function setRejectionCriterion(array $rejectionCriterion = null)
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
     * @param \TKusy\Hl7Fhir\R5\SpecimenDefinitionHandlingType $handling
     */
    public function addToHandling(\TKusy\Hl7Fhir\R5\SpecimenDefinitionHandlingType $handling)
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
     * @return \TKusy\Hl7Fhir\R5\SpecimenDefinitionHandlingType[]
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
     * @param \TKusy\Hl7Fhir\R5\SpecimenDefinitionHandlingType[] $handling
     * @return self
     */
    public function setHandling(array $handling = null)
    {
        $this->handling = $handling;
        return $this;
    }

    /**
     * Adds as testingDestination
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination of these.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $testingDestination
     */
    public function addToTestingDestination(\TKusy\Hl7Fhir\R5\CodeableConceptType $testingDestination)
    {
        $this->testingDestination[] = $testingDestination;
        return $this;
    }

    /**
     * isset testingDestination
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination of these.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTestingDestination($index)
    {
        return isset($this->testingDestination[$index]);
    }

    /**
     * unset testingDestination
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination of these.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTestingDestination($index)
    {
        unset($this->testingDestination[$index]);
    }

    /**
     * Gets as testingDestination
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination of these.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getTestingDestination()
    {
        return $this->testingDestination;
    }

    /**
     * Sets a new testingDestination
     *
     * Where the specimen will be tested: e.g., lab, sector, device or any combination of these.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $testingDestination
     * @return self
     */
    public function setTestingDestination(array $testingDestination = null)
    {
        $this->testingDestination = $testingDestination;
        return $this;
    }


}

