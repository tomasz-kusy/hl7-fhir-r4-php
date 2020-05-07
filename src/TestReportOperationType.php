<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestReportOperationType
 *
 * A summary of information based on the results of executing a TestScript.
 * XSD Type: TestReport.Operation
 */
class TestReportOperationType extends BackboneElementType
{

    /**
     * The result of this operation.
     *
     * @var \TKusy\Hl7FhirR4\TestReportActionResultType $result
     */
    private $result = null;

    /**
     * An explanatory message associated with the result.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $message
     */
    private $message = null;

    /**
     * A link to further details on the result.
     *
     * @var \TKusy\Hl7FhirR4\UriType $detail
     */
    private $detail = null;

    /**
     * Gets as result
     *
     * The result of this operation.
     *
     * @return \TKusy\Hl7FhirR4\TestReportActionResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * The result of this operation.
     *
     * @param \TKusy\Hl7FhirR4\TestReportActionResultType $result
     * @return self
     */
    public function setResult(\TKusy\Hl7FhirR4\TestReportActionResultType $result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Gets as message
     *
     * An explanatory message associated with the result.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * An explanatory message associated with the result.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $message
     * @return self
     */
    public function setMessage(\TKusy\Hl7FhirR4\MarkdownType $message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as detail
     *
     * A link to further details on the result.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * A link to further details on the result.
     *
     * @param \TKusy\Hl7FhirR4\UriType $detail
     * @return self
     */
    public function setDetail(\TKusy\Hl7FhirR4\UriType $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

