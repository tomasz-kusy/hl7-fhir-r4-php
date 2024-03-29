<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BundleType
 *
 * A container for a collection of resources.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Bundle
 */
class BundleType extends ResourceType
{

    /**
     * A persistent identifier for the bundle that won't change as a bundle is copied from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\BundleTypeType $type
     */
    private $type = null;

    /**
     * The date/time that the bundle was assembled - i.e. when the resources were placed in the bundle.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $timestamp
     */
    private $timestamp = null;

    /**
     * If a set of search matches, this is the (potentially estimated) total number of entries of type 'match' across all pages in the search. It does not include search.mode = 'include' or 'outcome' entries and it does not provide a count of the number of entries in the Bundle.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $total
     */
    private $total = null;

    /**
     * A series of links that provide context to this bundle.
     *
     * @var \TKusy\Hl7Fhir\R5\BundleLinkType[] $link
     */
    private $link = null;

    /**
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     *
     * @var \TKusy\Hl7Fhir\R5\BundleEntryType[] $entry
     */
    private $entry = null;

    /**
     * Digital Signature - base64 encoded. XML-DSig or a JWS.
     *
     * @var \TKusy\Hl7Fhir\R5\SignatureType $signature
     */
    private $signature = null;

    /**
     * Captures issues and warnings that relate to the construction of the Bundle and the content within it.
     *
     * @var \TKusy\Hl7Fhir\R5\ResourceContainerType $issues
     */
    private $issues = null;

    /**
     * Gets as identifier
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied from server to server.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A persistent identifier for the bundle that won't change as a bundle is copied from server to server.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @return \TKusy\Hl7Fhir\R5\BundleTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates the purpose of this bundle - how it is intended to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\BundleTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\BundleTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as timestamp
     *
     * The date/time that the bundle was assembled - i.e. when the resources were placed in the bundle.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * The date/time that the bundle was assembled - i.e. when the resources were placed in the bundle.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $timestamp
     * @return self
     */
    public function setTimestamp(?\TKusy\Hl7Fhir\R5\InstantType $timestamp = null)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Gets as total
     *
     * If a set of search matches, this is the (potentially estimated) total number of entries of type 'match' across all pages in the search. It does not include search.mode = 'include' or 'outcome' entries and it does not provide a count of the number of entries in the Bundle.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * If a set of search matches, this is the (potentially estimated) total number of entries of type 'match' across all pages in the search. It does not include search.mode = 'include' or 'outcome' entries and it does not provide a count of the number of entries in the Bundle.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $total
     * @return self
     */
    public function setTotal(?\TKusy\Hl7Fhir\R5\UnsignedIntType $total = null)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Adds as link
     *
     * A series of links that provide context to this bundle.
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
     * A series of links that provide context to this bundle.
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
     * A series of links that provide context to this bundle.
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
     * A series of links that provide context to this bundle.
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
     * A series of links that provide context to this bundle.
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
     * Adds as entry
     *
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\BundleEntryType $entry
     */
    public function addToEntry(\TKusy\Hl7Fhir\R5\BundleEntryType $entry)
    {
        $this->entry[] = $entry;
        return $this;
    }

    /**
     * isset entry
     *
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntry($index)
    {
        return isset($this->entry[$index]);
    }

    /**
     * unset entry
     *
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntry($index)
    {
        unset($this->entry[$index]);
    }

    /**
     * Gets as entry
     *
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     *
     * @return \TKusy\Hl7Fhir\R5\BundleEntryType[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Sets a new entry
     *
     * An entry in a bundle resource - will either contain a resource or information about a resource (transactions and history only).
     *
     * @param \TKusy\Hl7Fhir\R5\BundleEntryType[] $entry
     * @return self
     */
    public function setEntry(array $entry = null)
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * Gets as signature
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWS.
     *
     * @return \TKusy\Hl7Fhir\R5\SignatureType
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * Digital Signature - base64 encoded. XML-DSig or a JWS.
     *
     * @param \TKusy\Hl7Fhir\R5\SignatureType $signature
     * @return self
     */
    public function setSignature(?\TKusy\Hl7Fhir\R5\SignatureType $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as issues
     *
     * Captures issues and warnings that relate to the construction of the Bundle and the content within it.
     *
     * @return \TKusy\Hl7Fhir\R5\ResourceContainerType
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Sets a new issues
     *
     * Captures issues and warnings that relate to the construction of the Bundle and the content within it.
     *
     * @param \TKusy\Hl7Fhir\R5\ResourceContainerType $issues
     * @return self
     */
    public function setIssues(?\TKusy\Hl7Fhir\R5\ResourceContainerType $issues = null)
    {
        $this->issues = $issues;
        return $this;
    }


}

