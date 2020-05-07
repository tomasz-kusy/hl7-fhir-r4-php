<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptAction1Type
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Action1
 */
class TestScriptAction1Type extends BackboneElementType
{

    /**
     * An operation would involve a REST request to a server.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptOperationType $operation
     */
    private $operation = null;

    /**
     * Evaluates the results of previous operations to determine if the server under test behaves appropriately.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptAssertType $assert
     */
    private $assert = null;

    /**
     * Gets as operation
     *
     * An operation would involve a REST request to a server.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptOperationType
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
     * @param \TKusy\Hl7FhirR4\TestScriptOperationType $operation
     * @return self
     */
    public function setOperation(\TKusy\Hl7FhirR4\TestScriptOperationType $operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as assert
     *
     * Evaluates the results of previous operations to determine if the server under test behaves appropriately.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptAssertType
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
     * @param \TKusy\Hl7FhirR4\TestScriptAssertType $assert
     * @return self
     */
    public function setAssert(\TKusy\Hl7FhirR4\TestScriptAssertType $assert)
    {
        $this->assert = $assert;
        return $this;
    }


}

