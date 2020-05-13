<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ProcedurePerformerType
 *
 * An action that is or was performed on or for a patient. This can be a physical intervention like an operation, or less invasive like long term services, counseling, or hypnotherapy.
 * XSD Type: Procedure.Performer
 */
class ProcedurePerformerType extends BackboneElementType
{

    /**
     * Distinguishes the type of involvement of the performer in the procedure. For example, surgeon, anaesthetist, endoscopist.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $function
     */
    private $function = null;

    /**
     * The practitioner who was involved in the procedure.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $actor
     */
    private $actor = null;

    /**
     * The organization the device or practitioner was acting on behalf of.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf
     */
    private $onBehalfOf = null;

    /**
     * Gets as function
     *
     * Distinguishes the type of involvement of the performer in the procedure. For example, surgeon, anaesthetist, endoscopist.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $function
     * @return self
     */
    public function setFunction(\TKusy\Hl7Fhir\R4\CodeableConceptType $function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Gets as actor
     *
     * The practitioner who was involved in the procedure.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * The practitioner who was involved in the procedure.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $actor
     * @return self
     */
    public function setActor(\TKusy\Hl7Fhir\R4\ReferenceType $actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Gets as onBehalfOf
     *
     * The organization the device or practitioner was acting on behalf of.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * Sets a new onBehalfOf
     *
     * The organization the device or practitioner was acting on behalf of.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf
     * @return self
     */
    public function setOnBehalfOf(\TKusy\Hl7Fhir\R4\ReferenceType $onBehalfOf)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }


}

