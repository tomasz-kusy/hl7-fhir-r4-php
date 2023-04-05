<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationAdministrationPerformerType
 *
 * Describes the event of a patient consuming or otherwise being administered a medication. This may be as simple as swallowing a tablet or it may be a long running infusion. Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * XSD Type: MedicationAdministration.Performer
 */
class MedicationAdministrationPerformerType extends BackboneElementType
{

    /**
     * Distinguishes the type of involvement of the performer in the medication administration.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * Indicates who or what performed the medication administration.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $actor
     */
    private $actor = null;

    /**
     * Gets as function
     *
     * Distinguishes the type of involvement of the performer in the medication administration.
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
     * Distinguishes the type of involvement of the performer in the medication administration.
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
     * Indicates who or what performed the medication administration.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * Indicates who or what performed the medication administration.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $actor
     * @return self
     */
    public function setActor(\TKusy\Hl7Fhir\R5\CodeableReferenceType $actor)
    {
        $this->actor = $actor;
        return $this;
    }


}

