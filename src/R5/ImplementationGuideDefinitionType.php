<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImplementationGuideDefinitionType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Definition
 */
class ImplementationGuideDefinitionType extends BackboneElementType
{

    /**
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @var \TKusy\Hl7Fhir\R5\ImplementationGuideGroupingType[] $grouping
     */
    private $grouping = null;

    /**
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ImplementationGuideResourceType[] $resource
     */
    private $resource = null;

    /**
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     *
     * @var \TKusy\Hl7Fhir\R5\ImplementationGuidePageType $page
     */
    private $page = null;

    /**
     * A set of parameters that defines how the implementation guide is built. The parameters are defined by the relevant tools that build the implementation guides.
     *
     * @var \TKusy\Hl7Fhir\R5\ImplementationGuideParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * A template for building resources.
     *
     * @var \TKusy\Hl7Fhir\R5\ImplementationGuideTemplateType[] $template
     */
    private $template = null;

    /**
     * Adds as grouping
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuideGroupingType $grouping
     */
    public function addToGrouping(\TKusy\Hl7Fhir\R5\ImplementationGuideGroupingType $grouping)
    {
        $this->grouping[] = $grouping;
        return $this;
    }

    /**
     * isset grouping
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGrouping($index)
    {
        return isset($this->grouping[$index]);
    }

    /**
     * unset grouping
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGrouping($index)
    {
        unset($this->grouping[$index]);
    }

    /**
     * Gets as grouping
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @return \TKusy\Hl7Fhir\R5\ImplementationGuideGroupingType[]
     */
    public function getGrouping()
    {
        return $this->grouping;
    }

    /**
     * Sets a new grouping
     *
     * A logical group of resources. Logical groups can be used when building pages.
     *
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuideGroupingType[] $grouping
     * @return self
     */
    public function setGrouping(array $grouping = null)
    {
        $this->grouping = $grouping;
        return $this;
    }

    /**
     * Adds as resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuideResourceType $resource
     */
    public function addToResource(\TKusy\Hl7Fhir\R5\ImplementationGuideResourceType $resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * isset resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResource($index)
    {
        return isset($this->resource[$index]);
    }

    /**
     * unset resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResource($index)
    {
        unset($this->resource[$index]);
    }

    /**
     * Gets as resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ImplementationGuideResourceType[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuideResourceType[] $resource
     * @return self
     */
    public function setResource(array $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as page
     *
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     *
     * @return \TKusy\Hl7Fhir\R5\ImplementationGuidePageType
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets a new page
     *
     * A page / section in the implementation guide. The root page is the implementation guide home page.
     *
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuidePageType $page
     * @return self
     */
    public function setPage(?\TKusy\Hl7Fhir\R5\ImplementationGuidePageType $page = null)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * A set of parameters that defines how the implementation guide is built. The parameters are defined by the relevant tools that build the implementation guides.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuideParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\ImplementationGuideParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * A set of parameters that defines how the implementation guide is built. The parameters are defined by the relevant tools that build the implementation guides.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * A set of parameters that defines how the implementation guide is built. The parameters are defined by the relevant tools that build the implementation guides.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * A set of parameters that defines how the implementation guide is built. The parameters are defined by the relevant tools that build the implementation guides.
     *
     * @return \TKusy\Hl7Fhir\R5\ImplementationGuideParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * A set of parameters that defines how the implementation guide is built. The parameters are defined by the relevant tools that build the implementation guides.
     *
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuideParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Adds as template
     *
     * A template for building resources.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuideTemplateType $template
     */
    public function addToTemplate(\TKusy\Hl7Fhir\R5\ImplementationGuideTemplateType $template)
    {
        $this->template[] = $template;
        return $this;
    }

    /**
     * isset template
     *
     * A template for building resources.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTemplate($index)
    {
        return isset($this->template[$index]);
    }

    /**
     * unset template
     *
     * A template for building resources.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTemplate($index)
    {
        unset($this->template[$index]);
    }

    /**
     * Gets as template
     *
     * A template for building resources.
     *
     * @return \TKusy\Hl7Fhir\R5\ImplementationGuideTemplateType[]
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * A template for building resources.
     *
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuideTemplateType[] $template
     * @return self
     */
    public function setTemplate(array $template = null)
    {
        $this->template = $template;
        return $this;
    }


}

