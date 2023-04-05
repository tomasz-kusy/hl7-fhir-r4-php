<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationRequestSubstitutionType
 *
 * An order or request for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to generalize the use across inpatient and outpatient settings, including care plans, etc., and to harmonize with workflow patterns.
 * XSD Type: MedicationRequest.Substitution
 */
class MedicationRequestSubstitutionType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $allowedBoolean
     */
    private $allowedBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $allowedCodeableConcept
     */
    private $allowedCodeableConcept = null;

    /**
     * Indicates the reason for the substitution, or why substitution must or must not be performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    private $reason = null;

    /**
     * Gets as allowedBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAllowedBoolean()
    {
        return $this->allowedBoolean;
    }

    /**
     * Sets a new allowedBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $allowedBoolean
     * @return self
     */
    public function setAllowedBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $allowedBoolean = null)
    {
        $this->allowedBoolean = $allowedBoolean;
        return $this;
    }

    /**
     * Gets as allowedCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAllowedCodeableConcept()
    {
        return $this->allowedCodeableConcept;
    }

    /**
     * Sets a new allowedCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $allowedCodeableConcept
     * @return self
     */
    public function setAllowedCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $allowedCodeableConcept = null)
    {
        $this->allowedCodeableConcept = $allowedCodeableConcept;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Indicates the reason for the substitution, or why substitution must or must not be performed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }


}

