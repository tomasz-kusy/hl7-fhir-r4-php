<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResearchStudyRecruitmentType
 *
 * A scientific study of nature that sometimes includes processes involved in health and disease. For example, clinical trials are research studies that involve people. These studies may be related to new ways to screen, prevent, diagnose, and treat disease. They may also study certain outcomes and certain groups of people by looking at data collected in the past or future.
 * XSD Type: ResearchStudy.Recruitment
 */
class ResearchStudyRecruitmentType extends BackboneElementType
{

    /**
     * Estimated total number of participants to be enrolled.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $targetNumber
     */
    private $targetNumber = null;

    /**
     * Actual total number of participants enrolled in study.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $actualNumber
     */
    private $actualNumber = null;

    /**
     * Inclusion and exclusion criteria.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $eligibility
     */
    private $eligibility = null;

    /**
     * Group of participants who were enrolled in study.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actualGroup
     */
    private $actualGroup = null;

    /**
     * Gets as targetNumber
     *
     * Estimated total number of participants to be enrolled.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getTargetNumber()
    {
        return $this->targetNumber;
    }

    /**
     * Sets a new targetNumber
     *
     * Estimated total number of participants to be enrolled.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $targetNumber
     * @return self
     */
    public function setTargetNumber(?\TKusy\Hl7Fhir\R5\UnsignedIntType $targetNumber = null)
    {
        $this->targetNumber = $targetNumber;
        return $this;
    }

    /**
     * Gets as actualNumber
     *
     * Actual total number of participants enrolled in study.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getActualNumber()
    {
        return $this->actualNumber;
    }

    /**
     * Sets a new actualNumber
     *
     * Actual total number of participants enrolled in study.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $actualNumber
     * @return self
     */
    public function setActualNumber(?\TKusy\Hl7Fhir\R5\UnsignedIntType $actualNumber = null)
    {
        $this->actualNumber = $actualNumber;
        return $this;
    }

    /**
     * Gets as eligibility
     *
     * Inclusion and exclusion criteria.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }

    /**
     * Sets a new eligibility
     *
     * Inclusion and exclusion criteria.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $eligibility
     * @return self
     */
    public function setEligibility(?\TKusy\Hl7Fhir\R5\ReferenceType $eligibility = null)
    {
        $this->eligibility = $eligibility;
        return $this;
    }

    /**
     * Gets as actualGroup
     *
     * Group of participants who were enrolled in study.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getActualGroup()
    {
        return $this->actualGroup;
    }

    /**
     * Sets a new actualGroup
     *
     * Group of participants who were enrolled in study.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actualGroup
     * @return self
     */
    public function setActualGroup(?\TKusy\Hl7Fhir\R5\ReferenceType $actualGroup = null)
    {
        $this->actualGroup = $actualGroup;
        return $this;
    }


}

