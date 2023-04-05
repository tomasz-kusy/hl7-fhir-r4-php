<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AdverseEventContributingFactorType
 *
 * An event (i.e. any change to current patient status) that may be related to unintended effects on a patient or research participant. The unintended effects may require additional monitoring, treatment, hospitalization, or may result in death. The AdverseEvent resource also extends to potential or avoided events that could have had such effects. There are two major domains where the AdverseEvent resource is expected to be used. One is in clinical care reported adverse events and the other is in reporting adverse events in clinical research trial management. Adverse events can be reported by healthcare providers, patients, caregivers or by medical products manufacturers. Given the differences between these two concepts, we recommend consulting the domain specific implementation guides when implementing the AdverseEvent Resource. The implementation guides include specific extensions, value sets and constraints.
 * XSD Type: AdverseEvent.ContributingFactor
 */
class AdverseEventContributingFactorType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $itemReference
     */
    private $itemReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * Gets as itemReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $itemReference
     * @return self
     */
    public function setItemReference(?\TKusy\Hl7Fhir\R5\ReferenceType $itemReference = null)
    {
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Gets as itemCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Sets a new itemCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept
     * @return self
     */
    public function setItemCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $itemCodeableConcept = null)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }


}

