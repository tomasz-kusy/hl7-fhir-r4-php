<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationDispensePerformerType
 *
 * Indicates that a medication product is to be or has been dispensed for a named person/patient. This includes a description of the medication product (supply) provided and the instructions for administering the medication. The medication dispense is the result of a pharmacy system responding to a medication order.
 * XSD Type: MedicationDispense.Performer
 */
class MedicationDispensePerformerType extends BackboneElementType
{

    /**
     * Distinguishes the type of performer in the dispense. For example, date enterer, packager, final checker.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $function
     */
    private $function = null;

    /**
     * The device, practitioner, etc. who performed the action. It should be assumed that the actor is the dispenser of the medication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Gets as function
     *
     * Distinguishes the type of performer in the dispense. For example, date enterer, packager, final checker.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $function
     * @return self
     */
    public function setFunction(\TKusy\Hl7FhirR4\CodeableConceptType $function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Gets as actor
     *
     * The device, practitioner, etc. who performed the action. It should be assumed that the actor is the dispenser of the medication.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * The device, practitioner, etc. who performed the action. It should be assumed that the actor is the dispenser of the medication.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $actor
     * @return self
     */
    public function setActor(\TKusy\Hl7FhirR4\ReferenceType $actor)
    {
        $this->actor = $actor;
        return $this;
    }


}

