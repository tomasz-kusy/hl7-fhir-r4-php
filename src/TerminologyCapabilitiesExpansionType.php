<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesExpansionType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Expansion
 */
class TerminologyCapabilitiesExpansionType extends BackboneElementType
{

    /**
     * Whether the server can return nested value sets.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $hierarchical
     */
    private $hierarchical = null;

    /**
     * Whether the server supports paging on expansion.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $paging
     */
    private $paging = null;

    /**
     * Allow request for incomplete expansions?
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $incomplete
     */
    private $incomplete = null;

    /**
     * Supported expansion parameter.
     *
     * @var \TKusy\Hl7FhirR4\TerminologyCapabilitiesParameterType[] $parameter
     */
    private $parameter = [
        
    ];

    /**
     * Documentation about text searching works.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $textFilter
     */
    private $textFilter = null;

    /**
     * Gets as hierarchical
     *
     * Whether the server can return nested value sets.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getHierarchical()
    {
        return $this->hierarchical;
    }

    /**
     * Sets a new hierarchical
     *
     * Whether the server can return nested value sets.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $hierarchical
     * @return self
     */
    public function setHierarchical(\TKusy\Hl7FhirR4\BooleanType $hierarchical)
    {
        $this->hierarchical = $hierarchical;
        return $this;
    }

    /**
     * Gets as paging
     *
     * Whether the server supports paging on expansion.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getPaging()
    {
        return $this->paging;
    }

    /**
     * Sets a new paging
     *
     * Whether the server supports paging on expansion.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $paging
     * @return self
     */
    public function setPaging(\TKusy\Hl7FhirR4\BooleanType $paging)
    {
        $this->paging = $paging;
        return $this;
    }

    /**
     * Gets as incomplete
     *
     * Allow request for incomplete expansions?
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getIncomplete()
    {
        return $this->incomplete;
    }

    /**
     * Sets a new incomplete
     *
     * Allow request for incomplete expansions?
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $incomplete
     * @return self
     */
    public function setIncomplete(\TKusy\Hl7FhirR4\BooleanType $incomplete)
    {
        $this->incomplete = $incomplete;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Supported expansion parameter.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TerminologyCapabilitiesParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7FhirR4\TerminologyCapabilitiesParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * Supported expansion parameter.
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
     * Supported expansion parameter.
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
     * Supported expansion parameter.
     *
     * @return \TKusy\Hl7FhirR4\TerminologyCapabilitiesParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * Supported expansion parameter.
     *
     * @param \TKusy\Hl7FhirR4\TerminologyCapabilitiesParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as textFilter
     *
     * Documentation about text searching works.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getTextFilter()
    {
        return $this->textFilter;
    }

    /**
     * Sets a new textFilter
     *
     * Documentation about text searching works.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $textFilter
     * @return self
     */
    public function setTextFilter(\TKusy\Hl7FhirR4\MarkdownType $textFilter)
    {
        $this->textFilter = $textFilter;
        return $this;
    }


}

