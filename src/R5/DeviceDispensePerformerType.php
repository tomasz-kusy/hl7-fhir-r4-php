<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDispensePerformerType
 *
 * A record of dispensation of a device - i.e., assigning a device to a patient, or to a professional for their use.
 * XSD Type: DeviceDispense.Performer
 */
class DeviceDispensePerformerType extends BackboneElementType
{

    /**
     * Distinguishes the type of performer in the dispense. For example, date enterer, packager, final checker.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * The device, practitioner, etc. who performed the action. It should be assumed that the actor is the dispenser of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Gets as function
     *
     * Distinguishes the type of performer in the dispense. For example, date enterer, packager, final checker.
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
     * Distinguishes the type of performer in the dispense. For example, date enterer, packager, final checker.
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
     * The device, practitioner, etc. who performed the action. It should be assumed that the actor is the dispenser of the device.
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
     * The device, practitioner, etc. who performed the action. It should be assumed that the actor is the dispenser of the device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actor
     * @return self
     */
    public function setActor(\TKusy\Hl7Fhir\R5\ReferenceType $actor)
    {
        $this->actor = $actor;
        return $this;
    }


}

