<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestPlanTestDataType
 *
 * A plan for executing testing on an artifact or specifications.
 * XSD Type: TestPlan.TestData
 */
class TestPlanTestDataType extends BackboneElementType
{

    /**
     * The type of test data description, e.g. 'synthea'.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $type
     */
    private $type = null;

    /**
     * The actual test resources when they exist.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $content
     */
    private $content = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $sourceString
     */
    private $sourceString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $sourceReference
     */
    private $sourceReference = null;

    /**
     * Gets as type
     *
     * The type of test data description, e.g. 'synthea'.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of test data description, e.g. 'synthea'.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodingType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as content
     *
     * The actual test resources when they exist.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The actual test resources when they exist.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $content
     * @return self
     */
    public function setContent(?\TKusy\Hl7Fhir\R5\ReferenceType $content = null)
    {
        $this->content = $content;
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

