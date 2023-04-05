<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ImplementationGuidePageType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Page
 */
class ImplementationGuidePageType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\UrlType $sourceUrl
     */
    private $sourceUrl = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $sourceString
     */
    private $sourceString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $sourceMarkdown
     */
    private $sourceMarkdown = null;

    /**
     * The url by which the page should be known when published.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType $name
     */
    private $name = null;

    /**
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A code that indicates how the page is generated.
     *
     * @var \TKusy\Hl7Fhir\R5\GuidePageGenerationType $generation
     */
    private $generation = null;

    /**
     * Nested Pages/Sections under this page.
     *
     * @var \TKusy\Hl7Fhir\R5\ImplementationGuidePageType[] $page
     */
    private $page = null;

    /**
     * Gets as sourceUrl
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    /**
     * Sets a new sourceUrl
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $sourceUrl
     * @return self
     */
    public function setSourceUrl(?\TKusy\Hl7Fhir\R5\UrlType $sourceUrl = null)
    {
        $this->sourceUrl = $sourceUrl;
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
     * Gets as sourceMarkdown
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getSourceMarkdown()
    {
        return $this->sourceMarkdown;
    }

    /**
     * Sets a new sourceMarkdown
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $sourceMarkdown
     * @return self
     */
    public function setSourceMarkdown(?\TKusy\Hl7Fhir\R5\MarkdownType $sourceMarkdown = null)
    {
        $this->sourceMarkdown = $sourceMarkdown;
        return $this;
    }

    /**
     * Gets as name
     *
     * The url by which the page should be known when published.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The url by which the page should be known when published.
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\UrlType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
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
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7Fhir\R5\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as generation
     *
     * A code that indicates how the page is generated.
     *
     * @return \TKusy\Hl7Fhir\R5\GuidePageGenerationType
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Sets a new generation
     *
     * A code that indicates how the page is generated.
     *
     * @param \TKusy\Hl7Fhir\R5\GuidePageGenerationType $generation
     * @return self
     */
    public function setGeneration(\TKusy\Hl7Fhir\R5\GuidePageGenerationType $generation)
    {
        $this->generation = $generation;
        return $this;
    }

    /**
     * Adds as page
     *
     * Nested Pages/Sections under this page.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuidePageType $page
     */
    public function addToPage(\TKusy\Hl7Fhir\R5\ImplementationGuidePageType $page)
    {
        $this->page[] = $page;
        return $this;
    }

    /**
     * isset page
     *
     * Nested Pages/Sections under this page.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPage($index)
    {
        return isset($this->page[$index]);
    }

    /**
     * unset page
     *
     * Nested Pages/Sections under this page.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPage($index)
    {
        unset($this->page[$index]);
    }

    /**
     * Gets as page
     *
     * Nested Pages/Sections under this page.
     *
     * @return \TKusy\Hl7Fhir\R5\ImplementationGuidePageType[]
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets a new page
     *
     * Nested Pages/Sections under this page.
     *
     * @param \TKusy\Hl7Fhir\R5\ImplementationGuidePageType[] $page
     * @return self
     */
    public function setPage(array $page = null)
    {
        $this->page = $page;
        return $this;
    }


}

