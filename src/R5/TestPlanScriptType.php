<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestPlanScriptType
 *
 * A plan for executing testing on an artifact or specifications.
 * XSD Type: TestPlan.Script
 */
class TestPlanScriptType extends BackboneElementType
{

    /**
     * The language for the test cases e.g. 'gherkin', 'testscript'.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     */
    private $language = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $sourceString
     */
    private $sourceString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $sourceReference
     */
    private $sourceReference = null;

    /**
     * Gets as language
     *
     * The language for the test cases e.g. 'gherkin', 'testscript'.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The language for the test cases e.g. 'gherkin', 'testscript'.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $language
     * @return self
     */
    public function setLanguage(?\TKusy\Hl7Fhir\R5\CodeableConceptType $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as sourceString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSourceString()
    {
        return $this->sourceString;
    }

    /**
     * Sets a new sourceString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $sourceString
     * @return self
     */
    public function setSourceString(?\TKusy\Hl7Fhir\R5\StringType $sourceString = null)
    {
        $this->sourceString = $sourceString;
        return $this;
    }

    /**
     * Gets as sourceReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * Sets a new sourceReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $sourceReference
     * @return self
     */
    public function setSourceReference(?\TKusy\Hl7Fhir\R5\ReferenceType $sourceReference = null)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }


}

