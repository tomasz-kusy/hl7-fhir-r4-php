<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionIntakePerformerType
 *
 * A record of food or fluid that is being consumed by a patient. A NutritionIntake may indicate that the patient may be consuming the food or fluid now or has consumed the food or fluid in the past. The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician. A common scenario where this information is captured is during the history taking process during a patient visit or stay or through an app that tracks food or fluids consumed. The consumption information may come from sources such as the patient's memory, from a nutrition label, or from a clinician documenting observed intake.
 * XSD Type: NutritionIntake.Performer
 */
class NutritionIntakePerformerType extends BackboneElementType
{

    /**
     * Type of performer.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * Who performed the intake.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Gets as function
     *
     * Type of performer.
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
     * Type of performer.
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
     * Who performed the intake.
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
     * Who performed the intake.
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

