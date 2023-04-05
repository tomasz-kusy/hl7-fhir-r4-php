<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestPlanTestRunType
 *
 * A plan for executing testing on an artifact or specifications.
 * XSD Type: TestPlan.TestRun
 */
class TestPlanTestRunType extends BackboneElementType
{

    /**
     * The narrative description of the tests.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $narrative
     */
    private $narrative = null;

    /**
     * The test cases in a structured language e.g. gherkin, Postman, or FHIR TestScript.
     *
     * @var \TKusy\Hl7Fhir\R5\TestPlanScriptType $script
     */
    private $script = null;

    /**
     * Gets as narrative
     *
     * The narrative description of the tests.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getNarrative()
    {
        return $this->narrative;
    }

    /**
     * Sets a new narrative
     *
     * The narrative description of the tests.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $narrative
     * @return self
     */
    public function setNarrative(?\TKusy\Hl7Fhir\R5\MarkdownType $narrative = null)
    {
        $this->narrative = $narrative;
        return $this;
    }

    /**
     * Gets as script
     *
     * The test cases in a structured language e.g. gherkin, Postman, or FHIR TestScript.
     *
     * @return \TKusy\Hl7Fhir\R5\TestPlanScriptType
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Sets a new script
     *
     * The test cases in a structured language e.g. gherkin, Postman, or FHIR TestScript.
     *
     * @param \TKusy\Hl7Fhir\R5\TestPlanScriptType $script
     * @return self
     */
    public function setScript(?\TKusy\Hl7Fhir\R5\TestPlanScriptType $script = null)
    {
        $this->script = $script;
        return $this;
    }


}

