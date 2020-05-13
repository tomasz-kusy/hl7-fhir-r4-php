<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicationKnowledgeScheduleType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Schedule
 */
class MedicationKnowledgeScheduleType extends BackboneElementType
{

    /**
     * Specifies the specific drug schedule.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $schedule
     */
    private $schedule = null;

    /**
     * Gets as schedule
     *
     * Specifies the specific drug schedule.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Specifies the specific drug schedule.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $schedule
     * @return self
     */
    public function setSchedule(\TKusy\Hl7Fhir\R4\CodeableConceptType $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }


}

