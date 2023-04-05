<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AppointmentYearlyTemplateType
 *
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * XSD Type: Appointment.YearlyTemplate
 */
class AppointmentYearlyTemplateType extends BackboneElementType
{

    /**
     * Appointment recurs every nth year.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $yearInterval
     */
    private $yearInterval = null;

    /**
     * Gets as yearInterval
     *
     * Appointment recurs every nth year.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getYearInterval()
    {
        return $this->yearInterval;
    }

    /**
     * Sets a new yearInterval
     *
     * Appointment recurs every nth year.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $yearInterval
     * @return self
     */
    public function setYearInterval(\TKusy\Hl7Fhir\R5\PositiveIntType $yearInterval)
    {
        $this->yearInterval = $yearInterval;
        return $this;
    }


}

