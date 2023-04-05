<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ProcedurePerformerType
 *
 * An action that is or was performed on or for a patient, practitioner, device, organization, or location. For example, this can be a physical intervention on a patient like an operation, or less invasive like long term services, counseling, or hypnotherapy. This can be a quality or safety inspection for a location, organization, or device. This can be an accreditation procedure on a practitioner for licensing.
 * XSD Type: Procedure.Performer
 */
class ProcedurePerformerType extends BackboneElementType
{

    /**
     * Distinguishes the type of involvement of the performer in the procedure. For example, surgeon, anaesthetist, endoscopist.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * Indicates who or what performed the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * The Organization the Patient, RelatedPerson, Device, CareTeam, and HealthcareService was acting on behalf of.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf
     */
    private $onBehalfOf = null;

    /**
     * Time period during which the performer performed the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as function
     *
     * Distinguishes the type of involvement of the performer in the procedure. For example, surgeon, anaesthetist, endoscopist.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * Distinguishes the type of involvement of the performer in the procedure. For example, surgeon, anaesthetist, endoscopist.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     * @return self
     */
    public function setFunction(?\TKusy\Hl7Fhir\R5\CodeableConceptType $function = null)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Gets as actor
     *
     * Indicates who or what performed the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * Indicates who or what performed the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actor
     * @return self
     */
    public function setActor(\TKusy\Hl7Fhir\R5\ReferenceType $actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Gets as onBehalfOf
     *
     * The Organization the Patient, RelatedPerson, Device, CareTeam, and HealthcareService was acting on behalf of.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * Sets a new onBehalfOf
     *
     * The Organization the Patient, RelatedPerson, Device, CareTeam, and HealthcareService was acting on behalf of.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf
     * @return self
     */
    public function setOnBehalfOf(?\TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf = null)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * Gets as period
     *
     * Time period during which the performer performed the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Time period during which the performer performed the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }


}

