<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EncounterParticipantType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * XSD Type: Encounter.Participant
 */
class EncounterParticipantType extends BackboneElementType
{

    /**
     * Role of participant in encounter.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     */
    private $type = [
        
    ];

    /**
     * The period of time that the specified participant participated in the encounter. These can overlap or be sub-sets of the overall encounter's period.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Persons involved in the encounter other than the patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $individual
     */
    private $individual = null;

    /**
     * Adds as type
     *
     * Role of participant in encounter.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Role of participant in encounter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * Role of participant in encounter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * Role of participant in encounter.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Role of participant in encounter.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period of time that the specified participant participated in the encounter. These can overlap or be sub-sets of the overall encounter's period.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period of time that the specified participant participated in the encounter. These can overlap or be sub-sets of the overall encounter's period.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as individual
     *
     * Persons involved in the encounter other than the patient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * Sets a new individual
     *
     * Persons involved in the encounter other than the patient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $individual
     * @return self
     */
    public function setIndividual(\TKusy\Hl7FhirR4\ReferenceType $individual)
    {
        $this->individual = $individual;
        return $this;
    }


}

