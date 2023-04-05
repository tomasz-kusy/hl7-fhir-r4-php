<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RequestOrchestrationInputType
 *
 * A set of related requests that can be used to capture intended activities that have inter-dependencies such as "give this medication after that one".
 * XSD Type: RequestOrchestration.Input
 */
class RequestOrchestrationInputType extends BackboneElementType
{

    /**
     * A human-readable label for the data requirement used to label data flows in BPMN or similar diagrams. Also provides a human readable label when rendering the data requirement that conveys its purpose to human readers.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * Defines the data that is to be provided as input to the action.
     *
     * @var \TKusy\Hl7Fhir\R5\DataRequirementType $requirement
     */
    private $requirement = null;

    /**
     * Points to an existing input or output element that provides data to this input.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $relatedData
     */
    private $relatedData = null;

    /**
     * Gets as title
     *
     * A human-readable label for the data requirement used to label data flows in BPMN or similar diagrams. Also provides a human readable label when rendering the data requirement that conveys its purpose to human readers.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A human-readable label for the data requirement used to label data flows in BPMN or similar diagrams. Also provides a human readable label when rendering the data requirement that conveys its purpose to human readers.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as requirement
     *
     * Defines the data that is to be provided as input to the action.
     *
     * @return \TKusy\Hl7Fhir\R5\DataRequirementType
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Sets a new requirement
     *
     * Defines the data that is to be provided as input to the action.
     *
     * @param \TKusy\Hl7Fhir\R5\DataRequirementType $requirement
     * @return self
     */
    public function setRequirement(?\TKusy\Hl7Fhir\R5\DataRequirementType $requirement = null)
    {
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * Gets as relatedData
     *
     * Points to an existing input or output element that provides data to this input.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getRelatedData()
    {
        return $this->relatedData;
    }

    /**
     * Sets a new relatedData
     *
     * Points to an existing input or output element that provides data to this input.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $relatedData
     * @return self
     */
    public function setRelatedData(?\TKusy\Hl7Fhir\R5\IdType $relatedData = null)
    {
        $this->relatedData = $relatedData;
        return $this;
    }


}

