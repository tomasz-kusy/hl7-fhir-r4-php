<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationRequestSubstitutionType
 *
 * An order or request for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to generalize the use across inpatient and outpatient settings, including care plans, etc., and to harmonize with workflow patterns.
 * XSD Type: MedicationRequest.Substitution
 */
class MedicationRequestSubstitutionType extends BackboneElementType
{

    /**
     * True if the prescriber allows a different drug to be dispensed from what was prescribed. (choose any one of allowed*, but only one)
     *
     * @var bool $allowedBoolean
     */
    private $allowedBoolean = null;

    /**
     * True if the prescriber allows a different drug to be dispensed from what was prescribed. (choose any one of allowed*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $allowedCodeableConcept
     */
    private $allowedCodeableConcept = null;

    /**
     * Indicates the reason for the substitution, or why substitution must or must not be performed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $reason
     */
    private $reason = null;

    /**
     * Gets as allowedBoolean
     *
     * True if the prescriber allows a different drug to be dispensed from what was prescribed. (choose any one of allowed*, but only one)
     *
     * @return bool
     */
    public function getAllowedBoolean()
    {
        return $this->allowedBoolean;
    }

    /**
     * Sets a new allowedBoolean
     *
     * True if the prescriber allows a different drug to be dispensed from what was prescribed. (choose any one of allowed*, but only one)
     *
     * @param bool $allowedBoolean
     * @return self
     */
    public function setAllowedBoolean($allowedBoolean)
    {
        $this->allowedBoolean = $allowedBoolean;
        return $this;
    }

    /**
     * Gets as allowedCodeableConcept
     *
     * True if the prescriber allows a different drug to be dispensed from what was prescribed. (choose any one of allowed*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAllowedCodeableConcept()
    {
        return $this->allowedCodeableConcept;
    }

    /**
     * Sets a new allowedCodeableConcept
     *
     * True if the prescriber allows a different drug to be dispensed from what was prescribed. (choose any one of allowed*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $allowedCodeableConcept
     * @return self
     */
    public function setAllowedCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $allowedCodeableConcept)
    {
        $this->allowedCodeableConcept = $allowedCodeableConcept;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Indicates the reason for the substitution, or why substitution must or must not be performed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Indicates the reason for the substitution, or why substitution must or must not be performed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reason
     * @return self
     */
    public function setReason(\TKusy\Hl7FhirR4\CodeableConceptType $reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

