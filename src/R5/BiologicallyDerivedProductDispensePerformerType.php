<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BiologicallyDerivedProductDispensePerformerType
 *
 * This resource reflects an instance of a biologically derived product dispense. The supply or dispense of a biologically derived product from the supply organization or department (e.g. hospital transfusion laboratory) to the clinical team responsible for clinical application.
 * XSD Type: BiologicallyDerivedProductDispense.Performer
 */
class BiologicallyDerivedProductDispensePerformerType extends BackboneElementType
{

    /**
     * Identifies the function of the performer during the dispense.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * Identifies the person responsible for the action.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Gets as function
     *
     * Identifies the function of the performer during the dispense.
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
     * Identifies the function of the performer during the dispense.
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
     * Identifies the person responsible for the action.
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
     * Identifies the person responsible for the action.
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

