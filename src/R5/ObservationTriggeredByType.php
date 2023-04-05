<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ObservationTriggeredByType
 *
 * Measurements and simple assertions made about a patient, device or other subject.
 * XSD Type: Observation.TriggeredBy
 */
class ObservationTriggeredByType extends BackboneElementType
{

    /**
     * Reference to the triggering observation.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $observation
     */
    private $observation = null;

    /**
     * The type of trigger.
     * Reflex | Repeat | Re-run.
     *
     * @var \TKusy\Hl7Fhir\R5\TriggeredBytypeType $type
     */
    private $type = null;

    /**
     * Provides the reason why this observation was performed as a result of the observation(s) referenced.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $reason
     */
    private $reason = null;

    /**
     * Gets as observation
     *
     * Reference to the triggering observation.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Sets a new observation
     *
     * Reference to the triggering observation.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $observation
     * @return self
     */
    public function setObservation(\TKusy\Hl7Fhir\R5\ReferenceType $observation)
    {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of trigger.
     * Reflex | Repeat | Re-run.
     *
     * @return \TKusy\Hl7Fhir\R5\TriggeredBytypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of trigger.
     * Reflex | Repeat | Re-run.
     *
     * @param \TKusy\Hl7Fhir\R5\TriggeredBytypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\TriggeredBytypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Provides the reason why this observation was performed as a result of the observation(s) referenced.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Provides the reason why this observation was performed as a result of the observation(s) referenced.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\StringType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }


}

