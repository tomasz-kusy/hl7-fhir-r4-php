<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestPlanDependencyType
 *
 * A plan for executing testing on an artifact or specifications.
 * XSD Type: TestPlan.Dependency
 */
class TestPlanDependencyType extends BackboneElementType
{

    /**
     * A textual description of the criterium - what is needed for the dependency to be considered met.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Predecessor test plans - those that are expected to be successfully performed as a dependency for the execution of this test plan.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $predecessor
     */
    private $predecessor = null;

    /**
     * Gets as description
     *
     * A textual description of the criterium - what is needed for the dependency to be considered met.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A textual description of the criterium - what is needed for the dependency to be considered met.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as predecessor
     *
     * Predecessor test plans - those that are expected to be successfully performed as a dependency for the execution of this test plan.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPredecessor()
    {
        return $this->predecessor;
    }

    /**
     * Sets a new predecessor
     *
     * Predecessor test plans - those that are expected to be successfully performed as a dependency for the execution of this test plan.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $predecessor
     * @return self
     */
    public function setPredecessor(?\TKusy\Hl7Fhir\R5\ReferenceType $predecessor = null)
    {
        $this->predecessor = $predecessor;
        return $this;
    }


}

