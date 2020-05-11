<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BundleEntryType
 *
 * A container for a collection of resources.
 * XSD Type: Bundle.Entry
 */
class BundleEntryType extends BackboneElementType
{

    /**
     * A series of links that provide context to this entry.
     *
     * @var \TKusy\Hl7FhirR4\BundleLinkType[] $link
     */
    private $link = null;

    /**
     * The Absolute URL for the resource. The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
     * * fullUrl can be empty on a POST (although it does not need to when specifying a temporary id for reference in the bundle)
     * * Results from operations might involve resources that are not identified.
     *
     * @var \TKusy\Hl7FhirR4\UriType $fullUrl
     */
    private $fullUrl = null;

    /**
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type.
     *
     * @var \TKusy\Hl7FhirR4\ResourceContainerType $resource
     */
    private $resource = null;

    /**
     * Information about the search process that lead to the creation of this entry.
     *
     * @var \TKusy\Hl7FhirR4\BundleSearchType $search
     */
    private $search = null;

    /**
     * Additional information about how this entry should be processed as part of a transaction or batch. For history, it shows how the entry was processed to create the version contained in the entry.
     *
     * @var \TKusy\Hl7FhirR4\BundleRequestType $request
     */
    private $request = null;

    /**
     * Indicates the results of processing the corresponding 'request' entry in the batch or transaction being responded to or what the results of an operation where when returning history.
     *
     * @var \TKusy\Hl7FhirR4\BundleResponseType $response
     */
    private $response = null;

    /**
     * Adds as link
     *
     * A series of links that provide context to this entry.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\BundleLinkType $link
     */
    public function addToLink(\TKusy\Hl7FhirR4\BundleLinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * A series of links that provide context to this entry.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * A series of links that provide context to this entry.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * A series of links that provide context to this entry.
     *
     * @return \TKusy\Hl7FhirR4\BundleLinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * A series of links that provide context to this entry.
     *
     * @param \TKusy\Hl7FhirR4\BundleLinkType[] $link
     * @return self
     */
    public function setLink(array $link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Gets as fullUrl
     *
     * The Absolute URL for the resource. The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
     * * fullUrl can be empty on a POST (although it does not need to when specifying a temporary id for reference in the bundle)
     * * Results from operations might involve resources that are not identified.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getFullUrl()
    {
        return $this->fullUrl;
    }

    /**
     * Sets a new fullUrl
     *
     * The Absolute URL for the resource. The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. The fullUrl element SHALL have a value except that: 
     * * fullUrl can be empty on a POST (although it does not need to when specifying a temporary id for reference in the bundle)
     * * Results from operations might involve resources that are not identified.
     *
     * @param \TKusy\Hl7FhirR4\UriType $fullUrl
     * @return self
     */
    public function setFullUrl(\TKusy\Hl7FhirR4\UriType $fullUrl)
    {
        $this->fullUrl = $fullUrl;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type.
     *
     * @return \TKusy\Hl7FhirR4\ResourceContainerType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type.
     *
     * @param \TKusy\Hl7FhirR4\ResourceContainerType $resource
     * @return self
     */
    public function setResource(\TKusy\Hl7FhirR4\ResourceContainerType $resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as search
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @return \TKusy\Hl7FhirR4\BundleSearchType
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Sets a new search
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @param \TKusy\Hl7FhirR4\BundleSearchType $search
     * @return self
     */
    public function setSearch(\TKusy\Hl7FhirR4\BundleSearchType $search)
    {
        $this->search = $search;
        return $this;
    }

    /**
     * Gets as request
     *
     * Additional information about how this entry should be processed as part of a transaction or batch. For history, it shows how the entry was processed to create the version contained in the entry.
     *
     * @return \TKusy\Hl7FhirR4\BundleRequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * Additional information about how this entry should be processed as part of a transaction or batch. For history, it shows how the entry was processed to create the version contained in the entry.
     *
     * @param \TKusy\Hl7FhirR4\BundleRequestType $request
     * @return self
     */
    public function setRequest(\TKusy\Hl7FhirR4\BundleRequestType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as response
     *
     * Indicates the results of processing the corresponding 'request' entry in the batch or transaction being responded to or what the results of an operation where when returning history.
     *
     * @return \TKusy\Hl7FhirR4\BundleResponseType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * Indicates the results of processing the corresponding 'request' entry in the batch or transaction being responded to or what the results of an operation where when returning history.
     *
     * @param \TKusy\Hl7FhirR4\BundleResponseType $response
     * @return self
     */
    public function setResponse(\TKusy\Hl7FhirR4\BundleResponseType $response)
    {
        $this->response = $response;
        return $this;
    }


}

