<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EndpointType
 *
 * The technical details of an endpoint that can be used for electronic services, such as for web services providing XDS.b, a REST endpoint for another FHIR server, or a s/Mime email address. This may include any security context information.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Endpoint
 */
class EndpointType extends DomainResourceType
{

    /**
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The endpoint status represents the general expected availability of an endpoint.
     *
     * @var \TKusy\Hl7Fhir\R5\EndpointStatusType $status
     */
    private $status = null;

    /**
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $connectionType
     */
    private $connectionType = null;

    /**
     * A friendly name that this endpoint can be referred to with.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * The description of the endpoint and what it is for (typically used as supplemental information in an endpoint directory describing its usage/purpose).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * The type of environment(s) exposed at this endpoint (dev, prod, test, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $environmentType
     */
    private $environmentType = null;

    /**
     * The organization that manages this endpoint (even if technically another organization is hosting this in the cloud, it is the organization associated with the data).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * Contact details for a human to contact about the endpoint. The primary use of this for system administrator troubleshooting.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType[] $contact
     */
    private $contact = null;

    /**
     * The interval during which the endpoint is expected to be operational.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * The set of payloads that are provided/available at this endpoint.
     *
     * @var \TKusy\Hl7Fhir\R5\EndpointPayloadType[] $payload
     */
    private $payload = null;

    /**
     * The uri that describes the actual end-point to connect to.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType $address
     */
    private $address = null;

    /**
     * Additional headers / information to send as part of the notification.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $header
     */
    private $header = null;

    /**
     * Adds as identifier
     *
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The endpoint status represents the general expected availability of an endpoint.
     *
     * @return \TKusy\Hl7Fhir\R5\EndpointStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The endpoint status represents the general expected availability of an endpoint.
     *
     * @param \TKusy\Hl7Fhir\R5\EndpointStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\EndpointStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as connectionType
     *
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $connectionType
     */
    public function addToConnectionType(\TKusy\Hl7Fhir\R5\CodeableConceptType $connectionType)
    {
        $this->connectionType[] = $connectionType;
        return $this;
    }

    /**
     * isset connectionType
     *
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionType($index)
    {
        return isset($this->connectionType[$index]);
    }

    /**
     * unset connectionType
     *
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionType($index)
    {
        unset($this->connectionType[$index]);
    }

    /**
     * Gets as connectionType
     *
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getConnectionType()
    {
        return $this->connectionType;
    }

    /**
     * Sets a new connectionType
     *
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $connectionType
     * @return self
     */
    public function setConnectionType(array $connectionType)
    {
        $this->connectionType = $connectionType;
        return $this;
    }

    /**
     * Gets as name
     *
     * A friendly name that this endpoint can be referred to with.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A friendly name that this endpoint can be referred to with.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description of the endpoint and what it is for (typically used as supplemental information in an endpoint directory describing its usage/purpose).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description of the endpoint and what it is for (typically used as supplemental information in an endpoint directory describing its usage/purpose).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as environmentType
     *
     * The type of environment(s) exposed at this endpoint (dev, prod, test, etc.).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $environmentType
     */
    public function addToEnvironmentType(\TKusy\Hl7Fhir\R5\CodeableConceptType $environmentType)
    {
        $this->environmentType[] = $environmentType;
        return $this;
    }

    /**
     * isset environmentType
     *
     * The type of environment(s) exposed at this endpoint (dev, prod, test, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvironmentType($index)
    {
        return isset($this->environmentType[$index]);
    }

    /**
     * unset environmentType
     *
     * The type of environment(s) exposed at this endpoint (dev, prod, test, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvironmentType($index)
    {
        unset($this->environmentType[$index]);
    }

    /**
     * Gets as environmentType
     *
     * The type of environment(s) exposed at this endpoint (dev, prod, test, etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getEnvironmentType()
    {
        return $this->environmentType;
    }

    /**
     * Sets a new environmentType
     *
     * The type of environment(s) exposed at this endpoint (dev, prod, test, etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $environmentType
     * @return self
     */
    public function setEnvironmentType(array $environmentType = null)
    {
        $this->environmentType = $environmentType;
        return $this;
    }

    /**
     * Gets as managingOrganization
     *
     * The organization that manages this endpoint (even if technically another organization is hosting this in the cloud, it is the organization associated with the data).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * Sets a new managingOrganization
     *
     * The organization that manages this endpoint (even if technically another organization is hosting this in the cloud, it is the organization associated with the data).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     * @return self
     */
    public function setManagingOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details for a human to contact about the endpoint. The primary use of this for system administrator troubleshooting.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R5\ContactPointType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact details for a human to contact about the endpoint. The primary use of this for system administrator troubleshooting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact details for a human to contact about the endpoint. The primary use of this for system administrator troubleshooting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact details for a human to contact about the endpoint. The primary use of this for system administrator troubleshooting.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactPointType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact details for a human to contact about the endpoint. The primary use of this for system administrator troubleshooting.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactPointType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as period
     *
     * The interval during which the endpoint is expected to be operational.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The interval during which the endpoint is expected to be operational.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as payload
     *
     * The set of payloads that are provided/available at this endpoint.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EndpointPayloadType $payload
     */
    public function addToPayload(\TKusy\Hl7Fhir\R5\EndpointPayloadType $payload)
    {
        $this->payload[] = $payload;
        return $this;
    }

    /**
     * isset payload
     *
     * The set of payloads that are provided/available at this endpoint.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayload($index)
    {
        return isset($this->payload[$index]);
    }

    /**
     * unset payload
     *
     * The set of payloads that are provided/available at this endpoint.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayload($index)
    {
        unset($this->payload[$index]);
    }

    /**
     * Gets as payload
     *
     * The set of payloads that are provided/available at this endpoint.
     *
     * @return \TKusy\Hl7Fhir\R5\EndpointPayloadType[]
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Sets a new payload
     *
     * The set of payloads that are provided/available at this endpoint.
     *
     * @param \TKusy\Hl7Fhir\R5\EndpointPayloadType[] $payload
     * @return self
     */
    public function setPayload(array $payload = null)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * Gets as address
     *
     * The uri that describes the actual end-point to connect to.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The uri that describes the actual end-point to connect to.
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $address
     * @return self
     */
    public function setAddress(\TKusy\Hl7Fhir\R5\UrlType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $header
     */
    public function addToHeader(\TKusy\Hl7Fhir\R5\StringType $header)
    {
        $this->header[] = $header;
        return $this;
    }

    /**
     * isset header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHeader($index)
    {
        return isset($this->header[$index]);
    }

    /**
     * unset header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHeader($index)
    {
        unset($this->header[$index]);
    }

    /**
     * Gets as header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $header
     * @return self
     */
    public function setHeader(array $header = null)
    {
        $this->header = $header;
        return $this;
    }


}

