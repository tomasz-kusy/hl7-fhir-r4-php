<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EndpointType
 *
 * The technical details of an endpoint that can be used for electronic services, such as for web services providing XDS.b or a REST endpoint for another FHIR server. This may include any security context information.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Endpoint
 */
class EndpointType extends DomainResourceType
{

    /**
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * active | suspended | error | off | test.
     *
     * @var \TKusy\Hl7FhirR4\EndpointStatusType $status
     */
    private $status = null;

    /**
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     *
     * @var \TKusy\Hl7FhirR4\CodingType $connectionType
     */
    private $connectionType = null;

    /**
     * A friendly name that this endpoint can be referred to with.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * The organization that manages this endpoint (even if technically another organization is hosting this in the cloud, it is the organization associated with the data).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $contact
     */
    private $contact = null;

    /**
     * The interval during which the endpoint is expected to be operational.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $payloadType
     */
    private $payloadType = null;

    /**
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @var \TKusy\Hl7FhirR4\CodeType[] $payloadMimeType
     */
    private $payloadMimeType = null;

    /**
     * The uri that describes the actual end-point to connect to.
     *
     * @var \TKusy\Hl7FhirR4\UrlType $address
     */
    private $address = null;

    /**
     * Additional headers / information to send as part of the notification.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $header
     */
    private $header = null;

    /**
     * Adds as identifier
     *
     * Identifier for the organization that is used to identify the endpoint across multiple disparate systems.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * active | suspended | error | off | test.
     *
     * @return \TKusy\Hl7FhirR4\EndpointStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * active | suspended | error | off | test.
     *
     * @param \TKusy\Hl7FhirR4\EndpointStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\EndpointStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as connectionType
     *
     * A coded value that represents the technical details of the usage of this endpoint, such as what WSDLs should be used in what way. (e.g. XDS.b/DICOM/cds-hook).
     *
     * @return \TKusy\Hl7FhirR4\CodingType
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
     * @param \TKusy\Hl7FhirR4\CodingType $connectionType
     * @return self
     */
    public function setConnectionType(\TKusy\Hl7FhirR4\CodingType $connectionType)
    {
        $this->connectionType = $connectionType;
        return $this;
    }

    /**
     * Gets as name
     *
     * A friendly name that this endpoint can be referred to with.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as managingOrganization
     *
     * The organization that manages this endpoint (even if technically another organization is hosting this in the cloud, it is the organization associated with the data).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $managingOrganization
     * @return self
     */
    public function setManagingOrganization(\TKusy\Hl7FhirR4\ReferenceType $managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContactPointType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\ContactPointType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
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
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
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
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @return \TKusy\Hl7FhirR4\ContactPointType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @param \TKusy\Hl7FhirR4\ContactPointType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as period
     *
     * The interval during which the endpoint is expected to be operational.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
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
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as payloadType
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $payloadType
     */
    public function addToPayloadType(\TKusy\Hl7FhirR4\CodeableConceptType $payloadType)
    {
        $this->payloadType[] = $payloadType;
        return $this;
    }

    /**
     * isset payloadType
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayloadType($index)
    {
        return isset($this->payloadType[$index]);
    }

    /**
     * unset payloadType
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayloadType($index)
    {
        unset($this->payloadType[$index]);
    }

    /**
     * Gets as payloadType
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getPayloadType()
    {
        return $this->payloadType;
    }

    /**
     * Sets a new payloadType
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $payloadType
     * @return self
     */
    public function setPayloadType(array $payloadType)
    {
        $this->payloadType = $payloadType;
        return $this;
    }

    /**
     * Adds as payloadMimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeType $payloadMimeType
     */
    public function addToPayloadMimeType(\TKusy\Hl7FhirR4\CodeType $payloadMimeType)
    {
        $this->payloadMimeType[] = $payloadMimeType;
        return $this;
    }

    /**
     * isset payloadMimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayloadMimeType($index)
    {
        return isset($this->payloadMimeType[$index]);
    }

    /**
     * unset payloadMimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayloadMimeType($index)
    {
        unset($this->payloadMimeType[$index]);
    }

    /**
     * Gets as payloadMimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @return \TKusy\Hl7FhirR4\CodeType[]
     */
    public function getPayloadMimeType()
    {
        return $this->payloadMimeType;
    }

    /**
     * Sets a new payloadMimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @param \TKusy\Hl7FhirR4\CodeType[] $payloadMimeType
     * @return self
     */
    public function setPayloadMimeType(array $payloadMimeType)
    {
        $this->payloadMimeType = $payloadMimeType;
        return $this;
    }

    /**
     * Gets as address
     *
     * The uri that describes the actual end-point to connect to.
     *
     * @return \TKusy\Hl7FhirR4\UrlType
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
     * @param \TKusy\Hl7FhirR4\UrlType $address
     * @return self
     */
    public function setAddress(\TKusy\Hl7FhirR4\UrlType $address)
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
     * @param \TKusy\Hl7FhirR4\StringType $header
     */
    public function addToHeader(\TKusy\Hl7FhirR4\StringType $header)
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
     * @return \TKusy\Hl7FhirR4\StringType[]
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
     * @param \TKusy\Hl7FhirR4\StringType[] $header
     * @return self
     */
    public function setHeader(array $header)
    {
        $this->header = $header;
        return $this;
    }


}

