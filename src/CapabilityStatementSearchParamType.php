<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CapabilityStatementSearchParamType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.SearchParam
 */
class CapabilityStatementSearchParamType extends BackboneElementType
{

    /**
     * The name of the search parameter used in the interface.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [[[SearchParameter.url]]]). This element SHALL be populated if the search parameter refers to a SearchParameter defined by the FHIR core specification or externally defined IGs.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $definition
     */
    private $definition = null;

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     *
     * @var \TKusy\Hl7FhirR4\SearchParamType $type
     */
    private $type = null;

    /**
     * This allows documentation of any distinct behaviors about how the search parameter is used. For example, text matching algorithms.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * Gets as name
     *
     * The name of the search parameter used in the interface.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the search parameter used in the interface.
     *
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as definition
     *
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [[[SearchParameter.url]]]). This element SHALL be populated if the search parameter refers to a SearchParameter defined by the FHIR core specification or externally defined IGs.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [[[SearchParameter.url]]]). This element SHALL be populated if the search parameter refers to a SearchParameter defined by the FHIR core specification or externally defined IGs.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7FhirR4\CanonicalType $definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of value a search parameter refers to, and how the content is interpreted.
     *
     * @return \TKusy\Hl7FhirR4\SearchParamType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of value a search parameter refers to, and how the content is interpreted.
     *
     * @param \TKusy\Hl7FhirR4\SearchParamType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\SearchParamType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * This allows documentation of any distinct behaviors about how the search parameter is used. For example, text matching algorithms.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * This allows documentation of any distinct behaviors about how the search parameter is used. For example, text matching algorithms.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7FhirR4\MarkdownType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

