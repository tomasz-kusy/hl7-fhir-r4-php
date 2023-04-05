<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DiagnosticReportSupportingInfoType
 *
 * The findings and interpretation of diagnostic tests performed on patients, groups of patients, products, substances, devices, and locations, and/or specimens derived from these. The report includes clinical context such as requesting provider information, and some mix of atomic results, images, textual and coded interpretations, and formatted representation of diagnostic reports. The report also includes non-clinical context such as batch analysis and stability reporting of products and substances.
 * XSD Type: DiagnosticReport.SupportingInfo
 */
class DiagnosticReportSupportingInfoType extends BackboneElementType
{

    /**
     * The code value for the role of the supporting information in the diagnostic report.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The reference for the supporting information in the diagnostic report.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Gets as type
     *
     * The code value for the role of the supporting information in the diagnostic report.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The code value for the role of the supporting information in the diagnostic report.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as reference
     *
     * The reference for the supporting information in the diagnostic report.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * The reference for the supporting information in the diagnostic report.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7Fhir\R5\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

