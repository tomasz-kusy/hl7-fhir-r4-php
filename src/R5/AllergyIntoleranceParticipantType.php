<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AllergyIntoleranceParticipantType
 *
 * Risk of harmful or undesirable physiological response which is specific to an individual and associated with exposure to a substance.
 * XSD Type: AllergyIntolerance.Participant
 */
class AllergyIntoleranceParticipantType extends BackboneElementType
{

    /**
     * Distinguishes the type of involvement of the actor in the activities related to the allergy or intolerance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * Indicates who or what participated in the activities related to the allergy or intolerance.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Gets as function
     *
     * Distinguishes the type of involvement of the actor in the activities related to the allergy or intolerance.
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
     * Distinguishes the type of involvement of the actor in the activities related to the allergy or intolerance.
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
     * Indicates who or what participated in the activities related to the allergy or intolerance.
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
     * Indicates who or what participated in the activities related to the allergy or intolerance.
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

