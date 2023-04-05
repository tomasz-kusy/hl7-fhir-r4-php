<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing OperationDefinitionReferencedFromType
 *
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 * XSD Type: OperationDefinition.ReferencedFrom
 */
class OperationDefinitionReferencedFromType extends BackboneElementType
{

    /**
     * The name of the parameter or dot-separated path of parameter names pointing to the resource parameter that is expected to contain a reference to this resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $source
     */
    private $source = null;

    /**
     * The id of the element in the referencing resource that is expected to resolve to this resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $sourceId
     */
    private $sourceId = null;

    /**
     * Gets as source
     *
     * The name of the parameter or dot-separated path of parameter names pointing to the resource parameter that is expected to contain a reference to this resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The name of the parameter or dot-separated path of parameter names pointing to the resource parameter that is expected to contain a reference to this resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7Fhir\R5\StringType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as sourceId
     *
     * The id of the element in the referencing resource that is expected to resolve to this resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Sets a new sourceId
     *
     * The id of the element in the referencing resource that is expected to resolve to this resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $sourceId
     * @return self
     */
    public function setSourceId(?\TKusy\Hl7Fhir\R5\StringType $sourceId = null)
    {
        $this->sourceId = $sourceId;
        return $this;
    }


}

