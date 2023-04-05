<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestScriptAction2Type
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Action2
 */
class TestScriptAction2Type extends BackboneElementType
{

    /**
     * An operation would involve a REST request to a server.
     *
     * @var \TKusy\Hl7Fhir\R5\TestScriptOperationType $operation
     */
    private $operation = null;

    /**
     * Gets as operation
     *
     * An operation would involve a REST request to a server.
     *
     * @return \TKusy\Hl7Fhir\R5\TestScriptOperationType
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
     * @param \TKusy\Hl7Fhir\R5\TestScriptOperationType $operation
     * @return self
     */
    public function setOperation(\TKusy\Hl7Fhir\R5\TestScriptOperationType $operation)
    {
        $this->operation = $operation;
        return $this;
    }


}

