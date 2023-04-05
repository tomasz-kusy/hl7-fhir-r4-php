<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ProcedureFocalDeviceType
 *
 * An action that is or was performed on or for a patient, practitioner, device, organization, or location. For example, this can be a physical intervention on a patient like an operation, or less invasive like long term services, counseling, or hypnotherapy. This can be a quality or safety inspection for a location, organization, or device. This can be an accreditation procedure on a practitioner for licensing.
 * XSD Type: Procedure.FocalDevice
 */
class ProcedureFocalDeviceType extends BackboneElementType
{

    /**
     * The kind of change that happened to the device during the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $action
     */
    private $action = null;

    /**
     * The device that was manipulated (changed) during the procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $manipulated
     */
    private $manipulated = null;

    /**
     * Gets as action
     *
     * The kind of change that happened to the device during the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * The kind of change that happened to the device during the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $action
     * @return self
     */
    public function setAction(?\TKusy\Hl7Fhir\R5\CodeableConceptType $action = null)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as manipulated
     *
     * The device that was manipulated (changed) during the procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getManipulated()
    {
        return $this->manipulated;
    }

    /**
     * Sets a new manipulated
     *
     * The device that was manipulated (changed) during the procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $manipulated
     * @return self
     */
    public function setManipulated(\TKusy\Hl7Fhir\R5\ReferenceType $manipulated)
    {
        $this->manipulated = $manipulated;
        return $this;
    }


}

