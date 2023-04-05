<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\BundleLinkType[] $link
     */
    private $link = null;

    /**
     * The Absolute URL for the resource. Except for transactions and batches, each entry in a Bundle must have a fullUrl. The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. Even when not required, fullUrl MAY be set to a urn:uuid to allow referencing entries in a transaction. The fullUrl can be an arbitrary URI and is not limited to urn:uuid, urn:oid, http, and https. The fullUrl element SHALL have a value except when: 
     * * invoking a create
     * * invoking or responding to an operation where the body is not a single identified resource
     * * invoking or returning the results of a search or history operation.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $fullUrl
     */
    private $fullUrl = null;

    /**
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type. This is allowed to be a Parameters resource if and only if it is referenced by something else within the Bundle that provides context/meaning.
     *
     * @var \TKusy\Hl7Fhir\R5\ResourceContainerType $resource
     */
    private $resource = null;

    /**
     * Information about the search process that lead to the creation of this entry.
     *
     * @var \TKusy\Hl7Fhir\R5\BundleSearchType $search
     */
    private $search = null;

    /**
     * Additional information about how this entry should be processed as part of a transaction or batch. For history, it shows how the entry was processed to create the version contained in the entry.
     *
     * @var \TKusy\Hl7Fhir\R5\BundleRequestType $request
     */
    private $request = null;

    /**
     * Indicates the results of processing the corresponding 'request' entry in the batch or transaction being responded to or what the results of an operation where when returning history.
     *
     * @var \TKusy\Hl7Fhir\R5\BundleResponseType $response
     */
    private $response = null;

    /**
     * Adds as link
     *
     * A series of links that provide context to this entry.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\BundleLinkType $link
     */
    public function addToLink(\TKusy\Hl7Fhir\R5\BundleLinkType $link)
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
     * @return \TKusy\Hl7Fhir\R5\BundleLinkType[]
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
     * @param \TKusy\Hl7Fhir\R5\BundleLinkType[] $link
     * @return self
     */
    public function setLink(array $link = null)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Gets as fullUrl
     *
     * The Absolute URL for the resource. Except for transactions and batches, each entry in a Bundle must have a fullUrl. The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. Even when not required, fullUrl MAY be set to a urn:uuid to allow referencing entries in a transaction. The fullUrl can be an arbitrary URI and is not limited to urn:uuid, urn:oid, http, and https. The fullUrl element SHALL have a value except when: 
     * * invoking a create
     * * invoking or responding to an operation where the body is not a single identified resource
     * * invoking or returning the results of a search or history operation.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getFullUrl()
    {
        return $this->fullUrl;
    }

    /**
     * Sets a new fullUrl
     *
     * The Absolute URL for the resource. Except for transactions and batches, each entry in a Bundle must have a fullUrl. The fullUrl SHALL NOT disagree with the id in the resource - i.e. if the fullUrl is not a urn:uuid, the URL shall be version-independent URL consistent with the Resource.id. The fullUrl is a version independent reference to the resource. Even when not required, fullUrl MAY be set to a urn:uuid to allow referencing entries in a transaction. The fullUrl can be an arbitrary URI and is not limited to urn:uuid, urn:oid, http, and https. The fullUrl element SHALL have a value except when: 
     * * invoking a create
     * * invoking or responding to an operation where the body is not a single identified resource
     * * invoking or returning the results of a search or history operation.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $fullUrl
     * @return self
     */
    public function setFullUrl(?\TKusy\Hl7Fhir\R5\UriType $fullUrl = null)
    {
        $this->fullUrl = $fullUrl;
        return $this;
    }

    /**
     * Gets as resource
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type. This is allowed to be a Parameters resource if and only if it is referenced by something else within the Bundle that provides context/meaning.
     *
     * @return \TKusy\Hl7Fhir\R5\ResourceContainerType
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The Resource for the entry. The purpose/meaning of the resource is determined by the Bundle.type. This is allowed to be a Parameters resource if and only if it is referenced by something else within the Bundle that provides context/meaning.
     *
     * @param \TKusy\Hl7Fhir\R5\ResourceContainerType $resource
     * @return self
     */
    public function setResource(?\TKusy\Hl7Fhir\R5\ResourceContainerType $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as search
     *
     * Information about the search process that lead to the creation of this entry.
     *
     * @return \TKusy\Hl7Fhir\R5\BundleSearchType
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
     * @param \TKusy\Hl7Fhir\R5\BundleSearchType $search
     * @return self
     */
    public function setSearch(?\TKusy\Hl7Fhir\R5\BundleSearchType $search = null)
    {
        $this->search = $search;
        return $this;
    }

    /**
     * Gets as request
     *
     * Additional information about how this entry should be processed as part of a transaction or batch. For history, it shows how the entry was processed to create the version contained in the entry.
     *
     * @return \TKusy\Hl7Fhir\R5\BundleRequestType
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
     * @param \TKusy\Hl7Fhir\R5\BundleRequestType $request
     * @return self
     */
    public function setRequest(?\TKusy\Hl7Fhir\R5\BundleRequestType $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as response
     *
     * Indicates the results of processing the corresponding 'request' entry in the batch or transaction being responded to or what the results of an operation where when returning history.
     *
     * @return \TKusy\Hl7Fhir\R5\BundleResponseType
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
     * @param \TKusy\Hl7Fhir\R5\BundleResponseType $response
     * @return self
     */
    public function setResponse(?\TKusy\Hl7Fhir\R5\BundleResponseType $response = null)
    {
        $this->response = $response;
        return $this;
    }


}

