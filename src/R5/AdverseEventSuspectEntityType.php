<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AdverseEventSuspectEntityType
 *
 * An event (i.e. any change to current patient status) that may be related to unintended effects on a patient or research participant. The unintended effects may require additional monitoring, treatment, hospitalization, or may result in death. The AdverseEvent resource also extends to potential or avoided events that could have had such effects. There are two major domains where the AdverseEvent resource is expected to be used. One is in clinical care reported adverse events and the other is in reporting adverse events in clinical research trial management. Adverse events can be reported by healthcare providers, patients, caregivers or by medical products manufacturers. Given the differences between these two concepts, we recommend consulting the domain specific implementation guides when implementing the AdverseEvent Resource. The implementation guides include specific extensions, value sets and constraints.
 * XSD Type: AdverseEvent.SuspectEntity
 */
class AdverseEventSuspectEntityType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $instanceCodeableConcept
     */
    private $instanceCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $instanceReference
     */
    private $instanceReference = null;

    /**
     * Information on the possible cause of the event.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventCausalityType $causality
     */
    private $causality = null;

    /**
     * Gets as instanceCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getInstanceCodeableConcept()
    {
        return $this->instanceCodeableConcept;
    }

    /**
     * Sets a new instanceCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $instanceCodeableConcept
     * @return self
     */
    public function setInstanceCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $instanceCodeableConcept = null)
    {
        $this->instanceCodeableConcept = $instanceCodeableConcept;
        return $this;
    }

    /**
     * Gets as instanceReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getInstanceReference()
    {
        return $this->instanceReference;
    }

    /**
     * Sets a new instanceReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $instanceReference
     * @return self
     */
    public function setInstanceReference(?\TKusy\Hl7Fhir\R5\ReferenceType $instanceReference = null)
    {
        $this->instanceReference = $instanceReference;
        return $this;
    }

    /**
     * Gets as causality
     *
     * Information on the possible cause of the event.
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEventCausalityType
     */
    public function getCausality()
    {
        return $this->causality;
    }

    /**
     * Sets a new causality
     *
     * Information on the possible cause of the event.
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEventCausalityType $causality
     * @return self
     */
    public function setCausality(?\TKusy\Hl7Fhir\R5\AdverseEventCausalityType $causality = null)
    {
        $this->causality = $causality;
        return $this;
    }


}

