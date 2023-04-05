<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClinicalImpressionFindingType
 *
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter, but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.
 * XSD Type: ClinicalImpression.Finding
 */
class ClinicalImpressionFindingType extends BackboneElementType
{

    /**
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     */
    private $item = null;

    /**
     * Which investigations support finding or diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $basis
     */
    private $basis = null;

    /**
     * Gets as item
     *
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Specific text, code or reference for finding or diagnosis, which may include ruled-out or resolved conditions.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     * @return self
     */
    public function setItem(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as basis
     *
     * Which investigations support finding or diagnosis.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $basis
     * @return self
     */
    public function setBasis(?\TKusy\Hl7Fhir\R5\StringType $basis = null)
    {
        $this->basis = $basis;
        return $this;
    }


}

