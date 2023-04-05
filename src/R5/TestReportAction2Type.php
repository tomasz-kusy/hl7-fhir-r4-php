<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestReportAction2Type
 *
 * A summary of information based on the results of executing a TestScript.
 * XSD Type: TestReport.Action2
 */
class TestReportAction2Type extends BackboneElementType
{

    /**
     * An operation would involve a REST request to a server.
     *
     * @var \TKusy\Hl7Fhir\R5\TestReportOperationType $operation
     */
    private $operation = null;

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
    public function setOperation(\TKusy\Hl7Fhir\R5\TestReportOperationType $operation)
    {
        $this->operation = $operation;
        return $this;
    }


}

