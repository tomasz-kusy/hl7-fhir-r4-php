<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResearchStudyComparisonGroupType
 *
 * A scientific study of nature that sometimes includes processes involved in health and disease. For example, clinical trials are research studies that involve people. These studies may be related to new ways to screen, prevent, diagnose, and treat disease. They may also study certain outcomes and certain groups of people by looking at data collected in the past or future.
 * XSD Type: ResearchStudy.ComparisonGroup
 */
class ResearchStudyComparisonGroupType extends BackboneElementType
{

    /**
     * Allows the comparisonGroup for the study and the comparisonGroup for the subject to be linked easily.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $linkId
     */
    private $linkId = null;

    /**
     * Unique, human-readable label for this comparisonGroup of the study.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Categorization of study comparisonGroup, e.g. experimental, active comparator, placebo comparater.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A succinct description of the path through the study that would be followed by a subject adhering to this comparisonGroup.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Interventions or exposures in this comparisonGroup or cohort.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $intendedExposure
     */
    private $intendedExposure = null;

    /**
     * Group of participants who were enrolled in study comparisonGroup.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $observedGroup
     */
    private $observedGroup = null;

    /**
     * Gets as linkId
     *
     * Allows the comparisonGroup for the study and the comparisonGroup for the subject to be linked easily.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * Allows the comparisonGroup for the study and the comparisonGroup for the subject to be linked easily.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $linkId
     * @return self
     */
    public function setLinkId(?\TKusy\Hl7Fhir\R5\IdType $linkId = null)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as name
     *
     * Unique, human-readable label for this comparisonGroup of the study.
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
     * Unique, human-readable label for this comparisonGroup of the study.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * Categorization of study comparisonGroup, e.g. experimental, active comparator, placebo comparater.
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
     * Categorization of study comparisonGroup, e.g. experimental, active comparator, placebo comparater.
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
     * Gets as description
     *
     * A succinct description of the path through the study that would be followed by a subject adhering to this comparisonGroup.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A succinct description of the path through the study that would be followed by a subject adhering to this comparisonGroup.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as intendedExposure
     *
     * Interventions or exposures in this comparisonGroup or cohort.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $intendedExposure
     */
    public function addToIntendedExposure(\TKusy\Hl7Fhir\R5\ReferenceType $intendedExposure)
    {
        $this->intendedExposure[] = $intendedExposure;
        return $this;
    }

    /**
     * isset intendedExposure
     *
     * Interventions or exposures in this comparisonGroup or cohort.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntendedExposure($index)
    {
        return isset($this->intendedExposure[$index]);
    }

    /**
     * unset intendedExposure
     *
     * Interventions or exposures in this comparisonGroup or cohort.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntendedExposure($index)
    {
        unset($this->intendedExposure[$index]);
    }

    /**
     * Gets as intendedExposure
     *
     * Interventions or exposures in this comparisonGroup or cohort.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getIntendedExposure()
    {
        return $this->intendedExposure;
    }

    /**
     * Sets a new intendedExposure
     *
     * Interventions or exposures in this comparisonGroup or cohort.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $intendedExposure
     * @return self
     */
    public function setIntendedExposure(array $intendedExposure = null)
    {
        $this->intendedExposure = $intendedExposure;
        return $this;
    }

    /**
     * Gets as observedGroup
     *
     * Group of participants who were enrolled in study comparisonGroup.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getObservedGroup()
    {
        return $this->observedGroup;
    }

    /**
     * Sets a new observedGroup
     *
     * Group of participants who were enrolled in study comparisonGroup.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $observedGroup
     * @return self
     */
    public function setObservedGroup(?\TKusy\Hl7Fhir\R5\ReferenceType $observedGroup = null)
    {
        $this->observedGroup = $observedGroup;
        return $this;
    }


}

