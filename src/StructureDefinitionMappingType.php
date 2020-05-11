<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureDefinitionMappingType
 *
 * A definition of a FHIR structure. This resource is used to describe the underlying resources, data types defined in FHIR, and also for describing extensions and constraints on resources and data types.
 * XSD Type: StructureDefinition.Mapping
 */
class StructureDefinitionMappingType extends BackboneElementType
{

    /**
     * An Internal id that is used to identify this mapping set when specific mappings are made.
     *
     * @var \TKusy\Hl7FhirR4\IdType $identity
     */
    private $identity = null;

    /**
     * An absolute URI that identifies the specification that this mapping is expressed to.
     *
     * @var \TKusy\Hl7FhirR4\UriType $uri
     */
    private $uri = null;

    /**
     * A name for the specification that is being mapped to.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Comments about this mapping, including version notes, issues, scope limitations, and other important notes for usage.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * Gets as identity
     *
     * An Internal id that is used to identify this mapping set when specific mappings are made.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets a new identity
     *
     * An Internal id that is used to identify this mapping set when specific mappings are made.
     *
     * @param \TKusy\Hl7FhirR4\IdType $identity
     * @return self
     */
    public function setIdentity(\TKusy\Hl7FhirR4\IdType $identity)
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * Gets as uri
     *
     * An absolute URI that identifies the specification that this mapping is expressed to.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * An absolute URI that identifies the specification that this mapping is expressed to.
     *
     * @param \TKusy\Hl7FhirR4\UriType $uri
     * @return self
     */
    public function setUri(\TKusy\Hl7FhirR4\UriType $uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as name
     *
     * A name for the specification that is being mapped to.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name for the specification that is being mapped to.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Comments about this mapping, including version notes, issues, scope limitations, and other important notes for usage.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments about this mapping, including version notes, issues, scope limitations, and other important notes for usage.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

