<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EncounterHistoryLocationType
 *
 * A record of significant events/milestones key data throughout the history of an Encounter, often tracked for specific purposes such as billing.
 * XSD Type: EncounterHistory.Location
 */
class EncounterHistoryLocationType extends BackboneElementType
{

    /**
     * The location where the encounter takes place.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * This will be used to specify the required levels (bed/ward/room/etc.) desired to be recorded to simplify either messaging or query.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $form
     */
    private $form = null;

    /**
     * Gets as location
     *
     * The location where the encounter takes place.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location where the encounter takes place.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7Fhir\R5\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as form
     *
     * This will be used to specify the required levels (bed/ward/room/etc.) desired to be recorded to simplify either messaging or query.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * This will be used to specify the required levels (bed/ward/room/etc.) desired to be recorded to simplify either messaging or query.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $form
     * @return self
     */
    public function setForm(?\TKusy\Hl7Fhir\R5\CodeableConceptType $form = null)
    {
        $this->form = $form;
        return $this;
    }


}

