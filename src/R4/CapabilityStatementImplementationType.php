<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CapabilityStatementImplementationType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Implementation
 */
class CapabilityStatementImplementationType extends BackboneElementType
{

    /**
     * Information about the specific installation that this capability statement relates to.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $description
     */
    private $description = null;

    /**
     * An absolute base URL for the implementation. This forms the base for REST interfaces as well as the mailbox and document interfaces.
     *
     * @var \TKusy\Hl7Fhir\R4\UrlType $url
     */
    private $url = null;

    /**
     * The organization responsible for the management of the instance and oversight of the data on the server at the specified URL.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $custodian
     */
    private $custodian = null;

    /**
     * Gets as description
     *
     * Information about the specific installation that this capability statement relates to.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Information about the specific installation that this capability statement relates to.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as url
     *
     * An absolute base URL for the implementation. This forms the base for REST interfaces as well as the mailbox and document interfaces.
     *
     * @return \TKusy\Hl7Fhir\R4\UrlType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * An absolute base URL for the implementation. This forms the base for REST interfaces as well as the mailbox and document interfaces.
     *
     * @param \TKusy\Hl7Fhir\R4\UrlType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7Fhir\R4\UrlType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as custodian
     *
     * The organization responsible for the management of the instance and oversight of the data on the server at the specified URL.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * Sets a new custodian
     *
     * The organization responsible for the management of the instance and oversight of the data on the server at the specified URL.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $custodian
     * @return self
     */
    public function setCustodian(\TKusy\Hl7Fhir\R4\ReferenceType $custodian)
    {
        $this->custodian = $custodian;
        return $this;
    }


}

