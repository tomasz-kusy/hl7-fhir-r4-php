<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\BooleanType $hierarchical
     */
    private $hierarchical = null;

    /**
     * Whether the server supports paging on expansion.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $paging
     */
    private $paging = null;

    /**
     * True if requests for incomplete expansions are allowed.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $incomplete
     */
    private $incomplete = null;

    /**
     * Supported expansion parameter.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * Documentation about text searching works.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $textFilter
     */
    private $textFilter = null;

    /**
     * Gets as hierarchical
     *
     * Whether the server can return nested value sets.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
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
     * @param \TKusy\Hl7Fhir\R5\BooleanType $hierarchical
     * @return self
     */
    public function setHierarchical(?\TKusy\Hl7Fhir\R5\BooleanType $hierarchical = null)
    {
        $this->hierarchical = $hierarchical;
        return $this;
    }

    /**
     * Gets as paging
     *
     * Whether the server supports paging on expansion.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
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
     * @param \TKusy\Hl7Fhir\R5\BooleanType $paging
     * @return self
     */
    public function setPaging(?\TKusy\Hl7Fhir\R5\BooleanType $paging = null)
    {
        $this->paging = $paging;
        return $this;
    }

    /**
     * Gets as incomplete
     *
     * True if requests for incomplete expansions are allowed.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getIncomplete()
    {
        return $this->incomplete;
    }

    /**
     * Sets a new incomplete
     *
     * True if requests for incomplete expansions are allowed.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $incomplete
     * @return self
     */
    public function setIncomplete(?\TKusy\Hl7Fhir\R5\BooleanType $incomplete = null)
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
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesParameterType $parameter)
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
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesParameterType[]
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
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as textFilter
     *
     * Documentation about text searching works.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $textFilter
     * @return self
     */
    public function setTextFilter(?\TKusy\Hl7Fhir\R5\MarkdownType $textFilter = null)
    {
        $this->textFilter = $textFilter;
        return $this;
    }


}

