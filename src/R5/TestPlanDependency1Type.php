<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestPlanDependency1Type
 *
 * A plan for executing testing on an artifact or specifications.
 * XSD Type: TestPlan.Dependency1
 */
class TestPlanDependency1Type extends BackboneElementType
{

    /**
     * Description of the criteria.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Link to predecessor test plans.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $predecessor
     */
    private $predecessor = null;

    /**
     * Gets as description
     *
     * Description of the criteria.
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
     * Description of the criteria.
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
     * Link to predecessor test plans.
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
     * Link to predecessor test plans.
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

