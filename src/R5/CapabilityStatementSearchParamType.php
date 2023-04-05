<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CapabilityStatementSearchParamType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server or Client for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.SearchParam
 */
class CapabilityStatementSearchParamType extends BackboneElementType
{

    /**
     * The label used for the search parameter in this particular system's API - i.e. the 'name' portion of the name-value pair that will appear as part of the search URL. This SHOULD be the same as the SearchParameter.code of the defining SearchParameter. However, it can sometimes differ if necessary to disambiguate when a server supports multiple SearchParameters that happen to share the same code.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [SearchParameter.url](searchparameter-definitions.html#SearchParameter.url)). This element SHALL be populated if the search parameter refers to a SearchParameter defined by the FHIR core specification or externally defined IGs.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $definition
     */
    private $definition = null;

    /**
     * The type of value a search parameter refers to, and how the content is interpreted.
     *
     * @var \TKusy\Hl7Fhir\R5\SearchParamTypeType $type
     */
    private $type = null;

    /**
     * This allows documentation of any distinct behaviors about how the search parameter is used. For example, text matching algorithms.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * Gets as name
     *
     * The label used for the search parameter in this particular system's API - i.e. the 'name' portion of the name-value pair that will appear as part of the search URL. This SHOULD be the same as the SearchParameter.code of the defining SearchParameter. However, it can sometimes differ if necessary to disambiguate when a server supports multiple SearchParameters that happen to share the same code.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The label used for the search parameter in this particular system's API - i.e. the 'name' portion of the name-value pair that will appear as part of the search URL. This SHOULD be the same as the SearchParameter.code of the defining SearchParameter. However, it can sometimes differ if necessary to disambiguate when a server supports multiple SearchParameters that happen to share the same code.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as definition
     *
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [SearchParameter.url](searchparameter-definitions.html#SearchParameter.url)). This element SHALL be populated if the search parameter refers to a SearchParameter defined by the FHIR core specification or externally defined IGs.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * An absolute URI that is a formal reference to where this parameter was first defined, so that a client can be confident of the meaning of the search parameter (a reference to [SearchParameter.url](searchparameter-definitions.html#SearchParameter.url)). This element SHALL be populated if the search parameter refers to a SearchParameter defined by the FHIR core specification or externally defined IGs.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $definition
     * @return self
     */
    public function setDefinition(?\TKusy\Hl7Fhir\R5\CanonicalType $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of value a search parameter refers to, and how the content is interpreted.
     *
     * @return \TKusy\Hl7Fhir\R5\SearchParamTypeType
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
     * @param \TKusy\Hl7Fhir\R5\SearchParamTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\SearchParamTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * This allows documentation of any distinct behaviors about how the search parameter is used. For example, text matching algorithms.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(?\TKusy\Hl7Fhir\R5\MarkdownType $documentation = null)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

