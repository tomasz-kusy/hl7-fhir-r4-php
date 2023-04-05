<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing VirtualServiceDetailType
 *
 * Virtual Service Contact Details.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: VirtualServiceDetail
 */
class VirtualServiceDetailType extends DataTypeType
{

    /**
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR technology, WhatsApp).
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $channelType
     */
    private $channelType = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UrlType $addressUrl
     */
    private $addressUrl = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $addressString
     */
    private $addressString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ContactPointType $addressContactPoint
     */
    private $addressContactPoint = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ExtendedContactDetailType $addressExtendedContactDetail
     */
    private $addressExtendedContactDetail = null;

    /**
     * Address to see alternative connection details.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType[] $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Maximum number of participants supported by the virtual service.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $maxParticipants
     */
    private $maxParticipants = null;

    /**
     * Session Key required by the virtual service.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $sessionKey
     */
    private $sessionKey = null;

    /**
     * Gets as channelType
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR technology, WhatsApp).
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * Sets a new channelType
     *
     * The type of virtual service to connect to (i.e. Teams, Zoom, Specific VMR technology, WhatsApp).
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $channelType
     * @return self
     */
    public function setChannelType(?\TKusy\Hl7Fhir\R5\CodingType $channelType = null)
    {
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * Gets as addressUrl
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getAddressUrl()
    {
        return $this->addressUrl;
    }

    /**
     * Sets a new addressUrl
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $addressUrl
     * @return self
     */
    public function setAddressUrl(?\TKusy\Hl7Fhir\R5\UrlType $addressUrl = null)
    {
        $this->addressUrl = $addressUrl;
        return $this;
    }

    /**
     * Gets as addressString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAddressString()
    {
        return $this->addressString;
    }

    /**
     * Sets a new addressString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $addressString
     * @return self
     */
    public function setAddressString(?\TKusy\Hl7Fhir\R5\StringType $addressString = null)
    {
        $this->addressString = $addressString;
        return $this;
    }

    /**
     * Gets as addressContactPoint
     *
     * @return \TKusy\Hl7Fhir\R5\ContactPointType
     */
    public function getAddressContactPoint()
    {
        return $this->addressContactPoint;
    }

    /**
     * Sets a new addressContactPoint
     *
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $addressContactPoint
     * @return self
     */
    public function setAddressContactPoint(?\TKusy\Hl7Fhir\R5\ContactPointType $addressContactPoint = null)
    {
        $this->addressContactPoint = $addressContactPoint;
        return $this;
    }

    /**
     * Gets as addressExtendedContactDetail
     *
     * @return \TKusy\Hl7Fhir\R5\ExtendedContactDetailType
     */
    public function getAddressExtendedContactDetail()
    {
        return $this->addressExtendedContactDetail;
    }

    /**
     * Sets a new addressExtendedContactDetail
     *
     * @param \TKusy\Hl7Fhir\R5\ExtendedContactDetailType $addressExtendedContactDetail
     * @return self
     */
    public function setAddressExtendedContactDetail(?\TKusy\Hl7Fhir\R5\ExtendedContactDetailType $addressExtendedContactDetail = null)
    {
        $this->addressExtendedContactDetail = $addressExtendedContactDetail;
        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * Address to see alternative connection details.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UrlType $additionalInfo
     */
    public function addToAdditionalInfo(\TKusy\Hl7Fhir\R5\UrlType $additionalInfo)
    {
        $this->additionalInfo[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfo
     *
     * Address to see alternative connection details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInfo($index)
    {
        return isset($this->additionalInfo[$index]);
    }

    /**
     * unset additionalInfo
     *
     * Address to see alternative connection details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInfo($index)
    {
        unset($this->additionalInfo[$index]);
    }

    /**
     * Gets as additionalInfo
     *
     * Address to see alternative connection details.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType[]
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Address to see alternative connection details.
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType[] $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo = null)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    /**
     * Gets as maxParticipants
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getMaxParticipants()
    {
        return $this->maxParticipants;
    }

    /**
     * Sets a new maxParticipants
     *
     * Maximum number of participants supported by the virtual service.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $maxParticipants
     * @return self
     */
    public function setMaxParticipants(?\TKusy\Hl7Fhir\R5\PositiveIntType $maxParticipants = null)
    {
        $this->maxParticipants = $maxParticipants;
        return $this;
    }

    /**
     * Gets as sessionKey
     *
     * Session Key required by the virtual service.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSessionKey()
    {
        return $this->sessionKey;
    }

    /**
     * Sets a new sessionKey
     *
     * Session Key required by the virtual service.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $sessionKey
     * @return self
     */
    public function setSessionKey(?\TKusy\Hl7Fhir\R5\StringType $sessionKey = null)
    {
        $this->sessionKey = $sessionKey;
        return $this;
    }


}

