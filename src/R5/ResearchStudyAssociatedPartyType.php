<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResearchStudyAssociatedPartyType
 *
 * A scientific study of nature that sometimes includes processes involved in health and disease. For example, clinical trials are research studies that involve people. These studies may be related to new ways to screen, prevent, diagnose, and treat disease. They may also study certain outcomes and certain groups of people by looking at data collected in the past or future.
 * XSD Type: ResearchStudy.AssociatedParty
 */
class ResearchStudyAssociatedPartyType extends BackboneElementType
{

    /**
     * Name of associated party.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Type of association.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Identifies the start date and the end date of the associated party in the role.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType[] $period
     */
    private $period = null;

    /**
     * A categorization other than role for the associated party.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     */
    private $classifier = null;

    /**
     * Individual or organization associated with study (use practitionerRole to specify their organisation).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $party
     */
    private $party = null;

    /**
     * Gets as name
     *
     * Name of associated party.
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
     * Name of associated party.
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
     * Gets as role
     *
     * Type of association.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Type of association.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7Fhir\R5\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as period
     *
     * Identifies the start date and the end date of the associated party in the role.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    public function addToPeriod(\TKusy\Hl7Fhir\R5\PeriodType $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * Identifies the start date and the end date of the associated party in the role.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * Identifies the start date and the end date of the associated party in the role.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * Identifies the start date and the end date of the associated party in the role.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Identifies the start date and the end date of the associated party in the role.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType[] $period
     * @return self
     */
    public function setPeriod(array $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as classifier
     *
     * A categorization other than role for the associated party.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $classifier
     */
    public function addToClassifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $classifier)
    {
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * isset classifier
     *
     * A categorization other than role for the associated party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifier($index)
    {
        return isset($this->classifier[$index]);
    }

    /**
     * unset classifier
     *
     * A categorization other than role for the associated party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifier($index)
    {
        unset($this->classifier[$index]);
    }

    /**
     * Gets as classifier
     *
     * A categorization other than role for the associated party.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClassifier()
    {
        return $this->classifier;
    }

    /**
     * Sets a new classifier
     *
     * A categorization other than role for the associated party.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     * @return self
     */
    public function setClassifier(array $classifier = null)
    {
        $this->classifier = $classifier;
        return $this;
    }

    /**
     * Gets as party
     *
     * Individual or organization associated with study (use practitionerRole to specify their organisation).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * Individual or organization associated with study (use practitionerRole to specify their organisation).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $party
     * @return self
     */
    public function setParty(?\TKusy\Hl7Fhir\R5\ReferenceType $party = null)
    {
        $this->party = $party;
        return $this;
    }


}

