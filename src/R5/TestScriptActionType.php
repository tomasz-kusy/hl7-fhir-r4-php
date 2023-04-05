<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestScriptActionType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Action
 */
class TestScriptActionType extends BackboneElementType
{

    /**
     * The operation to perform.
     *
     * @var \TKusy\Hl7Fhir\R5\TestScriptOperationType $operation
     */
    private $operation = null;

    /**
     * Evaluates the results of previous operations to determine if the server under test behaves appropriately.
     *
     * @var \TKusy\Hl7Fhir\R5\TestScriptAssertType $assert
     */
    private $assert = null;

    /**
     * Gets as operation
     *
     * The operation to perform.
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
     * The operation to perform.
     *
     * @param \TKusy\Hl7Fhir\R5\TestScriptOperationType $operation
     * @return self
     */
    public function setOperation(?\TKusy\Hl7Fhir\R5\TestScriptOperationType $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as assert
     *
     * Evaluates the results of previous operations to determine if the server under test behaves appropriately.
     *
     * @return \TKusy\Hl7Fhir\R5\TestScriptAssertType
     */
    public function getAssert()
    {
        return $this->assert;
    }

    /**
     * Sets a new assert
     *
     * Evaluates the results of previous operations to determine if the server under test behaves appropriately.
     *
     * @param \TKusy\Hl7Fhir\R5\TestScriptAssertType $assert
     * @return self
     */
    public function setAssert(?\TKusy\Hl7Fhir\R5\TestScriptAssertType $assert = null)
    {
        $this->assert = $assert;
        return $this;
    }


}

