<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DiagnosticReportMediaType
 *
 * The findings and interpretation of diagnostic tests performed on patients, groups of patients, products, substances, devices, and locations, and/or specimens derived from these. The report includes clinical context such as requesting provider information, and some mix of atomic results, images, textual and coded interpretations, and formatted representation of diagnostic reports. The report also includes non-clinical context such as batch analysis and stability reporting of products and substances.
 * XSD Type: DiagnosticReport.Media
 */
class DiagnosticReportMediaType extends BackboneElementType
{

    /**
     * A comment about the image or data. Typically, this is used to provide an explanation for why the image or data is included, or to draw the viewer's attention to important features.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $comment
     */
    private $comment = null;

    /**
     * Reference to the image or data source.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $link
     */
    private $link = null;

    /**
     * Gets as comment
     *
     * A comment about the image or data. Typically, this is used to provide an explanation for why the image or data is included, or to draw the viewer's attention to important features.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A comment about the image or data. Typically, this is used to provide an explanation for why the image or data is included, or to draw the viewer's attention to important features.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $comment
     * @return self
     */
    public function setComment(?\TKusy\Hl7Fhir\R5\StringType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as link
     *
     * Reference to the image or data source.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Reference to the image or data source.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $link
     * @return self
     */
    public function setLink(\TKusy\Hl7Fhir\R5\ReferenceType $link)
    {
        $this->link = $link;
        return $this;
    }


}

