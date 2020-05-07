<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CoverageEligibilityRequestDiagnosisType
 *
 * The CoverageEligibilityRequest provides patient and insurance coverage information to an insurer for them to respond, in the form of an CoverageEligibilityResponse, with information regarding whether the stated coverage is valid and in-force and optionally to provide the insurance details of the policy.
 * XSD Type: CoverageEligibilityRequest.Diagnosis
 */
class CoverageEligibilityRequestDiagnosisType extends BackboneElementType
{

    /**
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $diagnosisCodeableConcept
     */
    private $diagnosisCodeableConcept = null;

    /**
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $diagnosisReference
     */
    private $diagnosisReference = null;

    /**
     * Gets as diagnosisCodeableConcept
     *
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDiagnosisCodeableConcept()
    {
        return $this->diagnosisCodeableConcept;
    }

    /**
     * Sets a new diagnosisCodeableConcept
     *
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $diagnosisCodeableConcept
     * @return self
     */
    public function setDiagnosisCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $diagnosisCodeableConcept)
    {
        $this->diagnosisCodeableConcept = $diagnosisCodeableConcept;
        return $this;
    }

    /**
     * Gets as diagnosisReference
     *
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDiagnosisReference()
    {
        return $this->diagnosisReference;
    }

    /**
     * Sets a new diagnosisReference
     *
     * The nature of illness or problem in a coded form or as a reference to an external defined Condition. (choose any one of diagnosis*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $diagnosisReference
     * @return self
     */
    public function setDiagnosisReference(\TKusy\Hl7FhirR4\ReferenceType $diagnosisReference)
    {
        $this->diagnosisReference = $diagnosisReference;
        return $this;
    }


}

