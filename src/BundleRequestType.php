<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BundleRequestType
 *
 * A container for a collection of resources.
 * XSD Type: Bundle.Request
 */
class BundleRequestType extends BackboneElementType
{

    /**
     * In a transaction or batch, this is the HTTP action to be executed for this entry. In a history bundle, this indicates the HTTP action that occurred.
     *
     * @var \TKusy\Hl7FhirR4\HTTPVerbType $method
     */
    private $method = null;

    /**
     * The URL for this entry, relative to the root (the address to which the request is posted).
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     *
     * @var \TKusy\Hl7FhirR4\StringType $ifNoneMatch
     */
    private $ifNoneMatch = null;

    /**
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     *
     * @var \TKusy\Hl7FhirR4\InstantType $ifModifiedSince
     */
    private $ifModifiedSince = null;

    /**
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @var \TKusy\Hl7FhirR4\StringType $ifMatch
     */
    private $ifMatch = null;

    /**
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     *
     * @var \TKusy\Hl7FhirR4\StringType $ifNoneExist
     */
    private $ifNoneExist = null;

    /**
     * Gets as method
     *
     * In a transaction or batch, this is the HTTP action to be executed for this entry. In a history bundle, this indicates the HTTP action that occurred.
     *
     * @return \TKusy\Hl7FhirR4\HTTPVerbType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * In a transaction or batch, this is the HTTP action to be executed for this entry. In a history bundle, this indicates the HTTP action that occurred.
     *
     * @param \TKusy\Hl7FhirR4\HTTPVerbType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\HTTPVerbType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as url
     *
     * The URL for this entry, relative to the root (the address to which the request is posted).
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * The URL for this entry, relative to the root (the address to which the request is posted).
     *
     * @param \TKusy\Hl7FhirR4\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as ifNoneMatch
     *
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getIfNoneMatch()
    {
        return $this->ifNoneMatch;
    }

    /**
     * Sets a new ifNoneMatch
     *
     * If the ETag values match, return a 304 Not Modified status. See the API documentation for ["Conditional Read"](http.html#cread).
     *
     * @param \TKusy\Hl7FhirR4\StringType $ifNoneMatch
     * @return self
     */
    public function setIfNoneMatch(\TKusy\Hl7FhirR4\StringType $ifNoneMatch)
    {
        $this->ifNoneMatch = $ifNoneMatch;
        return $this;
    }

    /**
     * Gets as ifModifiedSince
     *
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getIfModifiedSince()
    {
        return $this->ifModifiedSince;
    }

    /**
     * Sets a new ifModifiedSince
     *
     * Only perform the operation if the last updated date matches. See the API documentation for ["Conditional Read"](http.html#cread).
     *
     * @param \TKusy\Hl7FhirR4\InstantType $ifModifiedSince
     * @return self
     */
    public function setIfModifiedSince(\TKusy\Hl7FhirR4\InstantType $ifModifiedSince)
    {
        $this->ifModifiedSince = $ifModifiedSince;
        return $this;
    }

    /**
     * Gets as ifMatch
     *
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getIfMatch()
    {
        return $this->ifMatch;
    }

    /**
     * Sets a new ifMatch
     *
     * Only perform the operation if the Etag value matches. For more information, see the API section ["Managing Resource Contention"](http.html#concurrency).
     *
     * @param \TKusy\Hl7FhirR4\StringType $ifMatch
     * @return self
     */
    public function setIfMatch(\TKusy\Hl7FhirR4\StringType $ifMatch)
    {
        $this->ifMatch = $ifMatch;
        return $this;
    }

    /**
     * Gets as ifNoneExist
     *
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getIfNoneExist()
    {
        return $this->ifNoneExist;
    }

    /**
     * Sets a new ifNoneExist
     *
     * Instruct the server not to perform the create if a specified resource already exists. For further information, see the API documentation for ["Conditional Create"](http.html#ccreate). This is just the query portion of the URL - what follows the "?" (not including the "?").
     *
     * @param \TKusy\Hl7FhirR4\StringType $ifNoneExist
     * @return self
     */
    public function setIfNoneExist(\TKusy\Hl7FhirR4\StringType $ifNoneExist)
    {
        $this->ifNoneExist = $ifNoneExist;
        return $this;
    }


}

