<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ClinicalImpressionFindingType
 *
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter, but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.
 * XSD Type: ClinicalImpression.Finding
 */
class ClinicalImpressionFindingType extends BackboneElementType
{

    /**
     * Specific text or code for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * Specific reference for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $itemReference
     */
    private $itemReference = null;

    /**
     * Which investigations support finding or diagnosis.
     *
     * @var \TKusy\Hl7FhirR4\StringType $basis
     */
    private $basis = null;

    /**
     * Gets as itemCodeableConcept
     *
     * Specific text or code for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Sets a new itemCodeableConcept
     *
     * Specific text or code for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept
     * @return self
     */
    public function setItemCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $itemCodeableConcept)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * Gets as itemReference
     *
     * Specific reference for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * Specific reference for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $itemReference
     * @return self
     */
    public function setItemReference(\TKusy\Hl7FhirR4\ReferenceType $itemReference)
    {
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Gets as basis
     *
     * Which investigations support finding or diagnosis.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Sets a new basis
     *
     * Which investigations support finding or diagnosis.
     *
     * @param \TKusy\Hl7FhirR4\StringType $basis
     * @return self
     */
    public function setBasis(\TKusy\Hl7FhirR4\StringType $basis)
    {
        $this->basis = $basis;
        return $this;
    }


}

