<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing GraphDefinitionNodeType
 *
 * A formal computable definition of a graph of resources - that is, a coherent set of resources that form a graph by following references. The Graph Definition resource defines a set and makes rules about the set.
 * XSD Type: GraphDefinition.Node
 */
class GraphDefinitionNodeType extends BackboneElementType
{

    /**
     * Internal ID of node - target for link references.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $nodeId
     */
    private $nodeId = null;

    /**
     * Information about why this node is of interest in this graph definition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * Type of resource this link refers to.
     *
     * @var \TKusy\Hl7Fhir\R5\VersionIndependentResourceTypesAllType $type
     */
    private $type = null;

    /**
     * Profile for the target resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $profile
     */
    private $profile = null;

    /**
     * Gets as nodeId
     *
     * Internal ID of node - target for link references.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * Sets a new nodeId
     *
     * Internal ID of node - target for link references.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $nodeId
     * @return self
     */
    public function setNodeId(\TKusy\Hl7Fhir\R5\IdType $nodeId)
    {
        $this->nodeId = $nodeId;
        return $this;
    }

    /**
     * Gets as description
     *
     * Information about why this node is of interest in this graph definition.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Information about why this node is of interest in this graph definition.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of resource this link refers to.
     *
     * @return \TKusy\Hl7Fhir\R5\VersionIndependentResourceTypesAllType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of resource this link refers to.
     *
     * @param \TKusy\Hl7Fhir\R5\VersionIndependentResourceTypesAllType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\VersionIndependentResourceTypesAllType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as profile
     *
     * Profile for the target resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Profile for the target resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $profile
     * @return self
     */
    public function setProfile(?\TKusy\Hl7Fhir\R5\CanonicalType $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }


}

