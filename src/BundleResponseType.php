<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BundleResponseType
 *
 * A container for a collection of resources.
 * XSD Type: Bundle.Response
 */
class BundleResponseType extends BackboneElementType
{

    /**
     * The status code returned by processing this entry. The status SHALL start with a 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description associated with the status code.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The location header created by processing this operation, populated if the operation returns a location.
     *
     * @var \TKusy\Hl7FhirR4\UriType $location
     */
    private $location = null;

    /**
     * The Etag for the resource, if the operation for the entry produced a versioned resource (see [Resource Metadata and Versioning](http.html#versioning) and [Managing Resource Contention](http.html#concurrency)).
     *
     * @var string $etag
     */
    private $etag = null;

    /**
     * The date/time that the resource was modified on the server.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $lastModified
     */
    private $lastModified = null;

    /**
     * An OperationOutcome containing hints and warnings produced as part of processing this entry in a batch or transaction.
     *
     * @var \TKusy\Hl7FhirR4\ResourceContainerType $outcome
     */
    private $outcome = null;

    /**
     * Gets as status
     *
     * The status code returned by processing this entry. The status SHALL start with a 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description associated with the status code.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status code returned by processing this entry. The status SHALL start with a 3 digit HTTP code (e.g. 404) and may contain the standard HTTP description associated with the status code.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as location
     *
     * The location header created by processing this operation, populated if the operation returns a location.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location header created by processing this operation, populated if the operation returns a location.
     *
     * @param \TKusy\Hl7FhirR4\UriType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\UriType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as etag
     *
     * The Etag for the resource, if the operation for the entry produced a versioned resource (see [Resource Metadata and Versioning](http.html#versioning) and [Managing Resource Contention](http.html#concurrency)).
     *
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Sets a new etag
     *
     * The Etag for the resource, if the operation for the entry produced a versioned resource (see [Resource Metadata and Versioning](http.html#versioning) and [Managing Resource Contention](http.html#concurrency)).
     *
     * @param string $etag
     * @return self
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
        return $this;
    }

    /**
     * Gets as lastModified
     *
     * The date/time that the resource was modified on the server.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Sets a new lastModified
     *
     * The date/time that the resource was modified on the server.
     *
     * @param \TKusy\Hl7FhirR4\InstantType $lastModified
     * @return self
     */
    public function setLastModified(\TKusy\Hl7FhirR4\InstantType $lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * An OperationOutcome containing hints and warnings produced as part of processing this entry in a batch or transaction.
     *
     * @return \TKusy\Hl7FhirR4\ResourceContainerType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * An OperationOutcome containing hints and warnings produced as part of processing this entry in a batch or transaction.
     *
     * @param \TKusy\Hl7FhirR4\ResourceContainerType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7FhirR4\ResourceContainerType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }


}

