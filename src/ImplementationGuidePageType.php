<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImplementationGuidePageType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Page
 */
class ImplementationGuidePageType extends BackboneElementType
{

    /**
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\UrlType $nameUrl
     */
    private $nameUrl = null;

    /**
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $nameReference
     */
    private $nameReference = null;

    /**
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * A code that indicates how the page is generated.
     *
     * @var \TKusy\Hl7FhirR4\GuidePageGenerationType $generation
     */
    private $generation = null;

    /**
     * Nested Pages/Sections under this page.
     *
     * @var \TKusy\Hl7FhirR4\ImplementationGuidePageType[] $page
     */
    private $page = null;

    /**
     * Gets as nameUrl
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\UrlType
     */
    public function getNameUrl()
    {
        return $this->nameUrl;
    }

    /**
     * Sets a new nameUrl
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\UrlType $nameUrl
     * @return self
     */
    public function setNameUrl(\TKusy\Hl7FhirR4\UrlType $nameUrl)
    {
        $this->nameUrl = $nameUrl;
        return $this;
    }

    /**
     * Gets as nameReference
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getNameReference()
    {
        return $this->nameReference;
    }

    /**
     * Sets a new nameReference
     *
     * The source address for the page. (choose any one of name*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $nameReference
     * @return self
     */
    public function setNameReference(\TKusy\Hl7FhirR4\ReferenceType $nameReference)
    {
        $this->nameReference = $nameReference;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short title used to represent this page in navigational structures such as table of contents, bread crumbs, etc.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7FhirR4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as generation
     *
     * A code that indicates how the page is generated.
     *
     * @return \TKusy\Hl7FhirR4\GuidePageGenerationType
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
     * @param \TKusy\Hl7FhirR4\GuidePageGenerationType $generation
     * @return self
     */
    public function setGeneration(\TKusy\Hl7FhirR4\GuidePageGenerationType $generation)
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
     * @param \TKusy\Hl7FhirR4\ImplementationGuidePageType $page
     */
    public function addToPage(\TKusy\Hl7FhirR4\ImplementationGuidePageType $page)
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
     * @return \TKusy\Hl7FhirR4\ImplementationGuidePageType[]
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
     * @param \TKusy\Hl7FhirR4\ImplementationGuidePageType[] $page
     * @return self
     */
    public function setPage(array $page)
    {
        $this->page = $page;
        return $this;
    }


}

