<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicationKnowledgeRegulatoryType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Regulatory
 */
class MedicationKnowledgeRegulatoryType extends BackboneElementType
{

    /**
     * The authority that is specifying the regulations.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $regulatoryAuthority
     */
    private $regulatoryAuthority = null;

    /**
     * Specifies if changes are allowed when dispensing a medication from a regulatory perspective.
     *
     * @var \TKusy\Hl7Fhir\R4\MedicationKnowledgeSubstitutionType[] $substitution
     */
    private $substitution = null;

    /**
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @var \TKusy\Hl7Fhir\R4\MedicationKnowledgeScheduleType[] $schedule
     */
    private $schedule = null;

    /**
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @var \TKusy\Hl7Fhir\R4\MedicationKnowledgeMaxDispenseType $maxDispense
     */
    private $maxDispense = null;

    /**
     * Gets as regulatoryAuthority
     *
     * The authority that is specifying the regulations.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getRegulatoryAuthority()
    {
        return $this->regulatoryAuthority;
    }

    /**
     * Sets a new regulatoryAuthority
     *
     * The authority that is specifying the regulations.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $regulatoryAuthority
     * @return self
     */
    public function setRegulatoryAuthority(\TKusy\Hl7Fhir\R4\ReferenceType $regulatoryAuthority)
    {
        $this->regulatoryAuthority = $regulatoryAuthority;
        return $this;
    }

    /**
     * Adds as substitution
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory perspective.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MedicationKnowledgeSubstitutionType $substitution
     */
    public function addToSubstitution(\TKusy\Hl7Fhir\R4\MedicationKnowledgeSubstitutionType $substitution)
    {
        $this->substitution[] = $substitution;
        return $this;
    }

    /**
     * isset substitution
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory perspective.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubstitution($index)
    {
        return isset($this->substitution[$index]);
    }

    /**
     * unset substitution
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory perspective.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubstitution($index)
    {
        unset($this->substitution[$index]);
    }

    /**
     * Gets as substitution
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory perspective.
     *
     * @return \TKusy\Hl7Fhir\R4\MedicationKnowledgeSubstitutionType[]
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Sets a new substitution
     *
     * Specifies if changes are allowed when dispensing a medication from a regulatory perspective.
     *
     * @param \TKusy\Hl7Fhir\R4\MedicationKnowledgeSubstitutionType[] $substitution
     * @return self
     */
    public function setSubstitution(array $substitution)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Adds as schedule
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MedicationKnowledgeScheduleType $schedule
     */
    public function addToSchedule(\TKusy\Hl7Fhir\R4\MedicationKnowledgeScheduleType $schedule)
    {
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * isset schedule
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSchedule($index)
    {
        return isset($this->schedule[$index]);
    }

    /**
     * unset schedule
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSchedule($index)
    {
        unset($this->schedule[$index]);
    }

    /**
     * Gets as schedule
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @return \TKusy\Hl7Fhir\R4\MedicationKnowledgeScheduleType[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Specifies the schedule of a medication in jurisdiction.
     *
     * @param \TKusy\Hl7Fhir\R4\MedicationKnowledgeScheduleType[] $schedule
     * @return self
     */
    public function setSchedule(array $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as maxDispense
     *
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @return \TKusy\Hl7Fhir\R4\MedicationKnowledgeMaxDispenseType
     */
    public function getMaxDispense()
    {
        return $this->maxDispense;
    }

    /**
     * Sets a new maxDispense
     *
     * The maximum number of units of the medication that can be dispensed in a period.
     *
     * @param \TKusy\Hl7Fhir\R4\MedicationKnowledgeMaxDispenseType $maxDispense
     * @return self
     */
    public function setMaxDispense(\TKusy\Hl7Fhir\R4\MedicationKnowledgeMaxDispenseType $maxDispense)
    {
        $this->maxDispense = $maxDispense;
        return $this;
    }


}

