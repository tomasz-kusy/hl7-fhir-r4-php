<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ImmunizationReactionType
 *
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 * XSD Type: Immunization.Reaction
 */
class ImmunizationReactionType extends BackboneElementType
{

    /**
     * Date of reaction to the immunization.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $date
     */
    private $date = null;

    /**
     * Details of the reaction.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $detail
     */
    private $detail = null;

    /**
     * Self-reported indicator.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $reported
     */
    private $reported = null;

    /**
     * Gets as date
     *
     * Date of reaction to the immunization.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date of reaction to the immunization.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7Fhir\R4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as detail
     *
     * Details of the reaction.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Details of the reaction.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $detail
     * @return self
     */
    public function setDetail(\TKusy\Hl7Fhir\R4\ReferenceType $detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Gets as reported
     *
     * Self-reported indicator.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getReported()
    {
        return $this->reported;
    }

    /**
     * Sets a new reported
     *
     * Self-reported indicator.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $reported
     * @return self
     */
    public function setReported(\TKusy\Hl7Fhir\R4\BooleanType $reported)
    {
        $this->reported = $reported;
        return $this;
    }


}

