<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImagingSelectionPerformerType
 *
 * A selection of DICOM SOP instances and/or frames within a single Study and Series. This might include additional specifics such as an image region, an Observation UID or a Segmentation Number, allowing linkage to an Observation Resource or transferring this information along with the ImagingStudy Resource.
 * XSD Type: ImagingSelection.Performer
 */
class ImagingSelectionPerformerType extends BackboneElementType
{

    /**
     * Distinguishes the type of involvement of the performer.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    private $function = null;

    /**
     * Author – human or machine.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Gets as function
     *
     * Distinguishes the type of involvement of the performer.
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
     * Distinguishes the type of involvement of the performer.
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
     * Author – human or machine.
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
     * Author – human or machine.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actor
     * @return self
     */
    public function setActor(?\TKusy\Hl7Fhir\R5\ReferenceType $actor = null)
    {
        $this->actor = $actor;
        return $this;
    }


}

