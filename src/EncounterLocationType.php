<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EncounterLocationType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * XSD Type: Encounter.Location
 */
class EncounterLocationType extends BackboneElementType
{

    /**
     * The location where the encounter takes place.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * The status of the participants' presence at the specified location during the period specified. If the participant is no longer at the location, then the period will have an end date/time.
     *
     * @var \TKusy\Hl7FhirR4\EncounterLocationStatusType $status
     */
    private $status = null;

    /**
     * This will be used to specify the required levels (bed/ward/room/etc.) desired to be recorded to simplify either messaging or query.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $physicalType
     */
    private $physicalType = null;

    /**
     * Time period during which the patient was present at the location.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as location
     *
     * The location where the encounter takes place.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location where the encounter takes place.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the participants' presence at the specified location during the period specified. If the participant is no longer at the location, then the period will have an end date/time.
     *
     * @return \TKusy\Hl7FhirR4\EncounterLocationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the participants' presence at the specified location during the period specified. If the participant is no longer at the location, then the period will have an end date/time.
     *
     * @param \TKusy\Hl7FhirR4\EncounterLocationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\EncounterLocationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as physicalType
     *
     * This will be used to specify the required levels (bed/ward/room/etc.) desired to be recorded to simplify either messaging or query.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPhysicalType()
    {
        return $this->physicalType;
    }

    /**
     * Sets a new physicalType
     *
     * This will be used to specify the required levels (bed/ward/room/etc.) desired to be recorded to simplify either messaging or query.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $physicalType
     * @return self
     */
    public function setPhysicalType(\TKusy\Hl7FhirR4\CodeableConceptType $physicalType)
    {
        $this->physicalType = $physicalType;
        return $this;
    }

    /**
     * Gets as period
     *
     * Time period during which the patient was present at the location.
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
     * Time period during which the patient was present at the location.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

