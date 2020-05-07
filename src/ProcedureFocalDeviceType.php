<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ProcedureFocalDeviceType
 *
 * An action that is or was performed on or for a patient. This can be a physical intervention like an operation, or less invasive like long term services, counseling, or hypnotherapy.
 * XSD Type: Procedure.FocalDevice
 */
class ProcedureFocalDeviceType extends BackboneElementType
{

    /**
     * The kind of change that happened to the device during the procedure.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $action
     */
    private $action = null;

    /**
     * The device that was manipulated (changed) during the procedure.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $manipulated
     */
    private $manipulated = null;

    /**
     * Gets as action
     *
     * The kind of change that happened to the device during the procedure.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $action
     * @return self
     */
    public function setAction(\TKusy\Hl7FhirR4\CodeableConceptType $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as manipulated
     *
     * The device that was manipulated (changed) during the procedure.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $manipulated
     * @return self
     */
    public function setManipulated(\TKusy\Hl7FhirR4\ReferenceType $manipulated)
    {
        $this->manipulated = $manipulated;
        return $this;
    }


}

