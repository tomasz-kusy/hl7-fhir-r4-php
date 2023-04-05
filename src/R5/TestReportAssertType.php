<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestReportAssertType
 *
 * A summary of information based on the results of executing a TestScript.
 * XSD Type: TestReport.Assert
 */
class TestReportAssertType extends BackboneElementType
{

    /**
     * The result of this assertion.
     *
     * @var \TKusy\Hl7Fhir\R5\TestReportActionResultType $result
     */
    private $result = null;

    /**
     * An explanatory message associated with the result.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $message
     */
    private $message = null;

    /**
     * A link to further details on the result.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $detail
     */
    private $detail = null;

    /**
     * Links or references providing traceability to the testing requirements for this assert.
     *
     * @var \TKusy\Hl7Fhir\R5\TestReportRequirementType[] $requirement
     */
    private $requirement = null;

    /**
     * Gets as result
     *
     * The result of this assertion.
     *
     * @return \TKusy\Hl7Fhir\R5\TestReportActionResultType
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * The result of this assertion.
     *
     * @param \TKusy\Hl7Fhir\R5\TestReportActionResultType $result
     * @return self
     */
    public function setResult(\TKusy\Hl7Fhir\R5\TestReportActionResultType $result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Gets as message
     *
     * An explanatory message associated with the result.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $message
     * @return self
     */
    public function setMessage(?\TKusy\Hl7Fhir\R5\MarkdownType $message = null)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as detail
     *
     * A link to further details on the result.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $detail
     * @return self
     */
    public function setDetail(?\TKusy\Hl7Fhir\R5\StringType $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Adds as requirement
     *
     * Links or references providing traceability to the testing requirements for this assert.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TestReportRequirementType $requirement
     */
    public function addToRequirement(\TKusy\Hl7Fhir\R5\TestReportRequirementType $requirement)
    {
        $this->requirement[] = $requirement;
        return $this;
    }

    /**
     * isset requirement
     *
     * Links or references providing traceability to the testing requirements for this assert.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequirement($index)
    {
        return isset($this->requirement[$index]);
    }

    /**
     * unset requirement
     *
     * Links or references providing traceability to the testing requirements for this assert.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequirement($index)
    {
        unset($this->requirement[$index]);
    }

    /**
     * Gets as requirement
     *
     * Links or references providing traceability to the testing requirements for this assert.
     *
     * @return \TKusy\Hl7Fhir\R5\TestReportRequirementType[]
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Sets a new requirement
     *
     * Links or references providing traceability to the testing requirements for this assert.
     *
     * @param \TKusy\Hl7Fhir\R5\TestReportRequirementType[] $requirement
     * @return self
     */
    public function setRequirement(array $requirement = null)
    {
        $this->requirement = $requirement;
        return $this;
    }


}

