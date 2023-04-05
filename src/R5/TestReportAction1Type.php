<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestReportAction1Type
 *
 * A summary of information based on the results of executing a TestScript.
 * XSD Type: TestReport.Action1
 */
class TestReportAction1Type extends BackboneElementType
{

    /**
     * An operation would involve a REST request to a server.
     *
     * @var \TKusy\Hl7Fhir\R5\TestReportOperationType $operation
     */
    private $operation = null;

    /**
     * The results of the assertion performed on the previous operations.
     *
     * @var \TKusy\Hl7Fhir\R5\TestReportAssertType $assert
     */
    private $assert = null;

    /**
     * Gets as operation
     *
     * An operation would involve a REST request to a server.
     *
     * @return \TKusy\Hl7Fhir\R5\TestReportOperationType
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * An operation would involve a REST request to a server.
     *
     * @param \TKusy\Hl7Fhir\R5\TestReportOperationType $operation
     * @return self
     */
    public function setOperation(?\TKusy\Hl7Fhir\R5\TestReportOperationType $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as assert
     *
     * The results of the assertion performed on the previous operations.
     *
     * @return \TKusy\Hl7Fhir\R5\TestReportAssertType
     */
    public function getAssert()
    {
        return $this->assert;
    }

    /**
     * Sets a new assert
     *
     * The results of the assertion performed on the previous operations.
     *
     * @param \TKusy\Hl7Fhir\R5\TestReportAssertType $assert
     * @return self
     */
    public function setAssert(?\TKusy\Hl7Fhir\R5\TestReportAssertType $assert = null)
    {
        $this->assert = $assert;
        return $this;
    }


}

