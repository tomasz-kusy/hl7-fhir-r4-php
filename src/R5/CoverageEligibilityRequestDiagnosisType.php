<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CoverageEligibilityRequestDiagnosisType
 *
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 * XSD Type: CoverageEligibilityRequest.Diagnosis
 */
class CoverageEligibilityRequestDiagnosisType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisCodeableConcept
     */
    private $diagnosisCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $diagnosisReference
     */
    private $diagnosisReference = null;

    /**
     * Gets as diagnosisCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDiagnosisCodeableConcept()
    {
        return $this->diagnosisCodeableConcept;
    }

    /**
     * Sets a new diagnosisCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisCodeableConcept
     * @return self
     */
    public function setDiagnosisCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisCodeableConcept = null)
    {
        $this->diagnosisCodeableConcept = $diagnosisCodeableConcept;
        return $this;
    }

    /**
     * Gets as diagnosisReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDiagnosisReference()
    {
        return $this->diagnosisReference;
    }

    /**
     * Sets a new diagnosisReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $diagnosisReference
     * @return self
     */
    public function setDiagnosisReference(?\TKusy\Hl7Fhir\R5\ReferenceType $diagnosisReference = null)
    {
        $this->diagnosisReference = $diagnosisReference;
        return $this;
    }


}

