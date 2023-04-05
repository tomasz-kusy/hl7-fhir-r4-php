<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MessageHeaderSourceType
 *
 * The header for a message exchange that is either requesting or responding to an action. The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * XSD Type: MessageHeader.Source
 */
class MessageHeaderSourceType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\UrlType $endpointUrl
     */
    private $endpointUrl = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $endpointReference
     */
    private $endpointReference = null;

    /**
     * Human-readable name for the source system.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * May include configuration or other information useful in debugging.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $software
     */
    private $software = null;

    /**
     * Can convey versions of multiple systems in situations where a message passes through multiple hands.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * An e-mail, phone, website or other contact point to use to resolve issues with message communications.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType $contact
     */
    private $contact = null;

    /**
     * Gets as endpointUrl
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getEndpointUrl()
    {
        return $this->endpointUrl;
    }

    /**
     * Sets a new endpointUrl
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $endpointUrl
     * @return self
     */
    public function setEndpointUrl(?\TKusy\Hl7Fhir\R5\UrlType $endpointUrl = null)
    {
        $this->endpointUrl = $endpointUrl;
        return $this;
    }

    /**
     * Gets as endpointReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEndpointReference()
    {
        return $this->endpointReference;
    }

    /**
     * Sets a new endpointReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $endpointReference
     * @return self
     */
    public function setEndpointReference(?\TKusy\Hl7Fhir\R5\ReferenceType $endpointReference = null)
    {
        $this->endpointReference = $endpointReference;
        return $this;
    }

    /**
     * Gets as name
     *
     * Human-readable name for the source system.
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
     * Human-readable name for the source system.
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
     * Gets as software
     *
     * May include configuration or other information useful in debugging.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Sets a new software
     *
     * May include configuration or other information useful in debugging.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $software
     * @return self
     */
    public function setSoftware(?\TKusy\Hl7Fhir\R5\StringType $software = null)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Gets as version
     *
     * Can convey versions of multiple systems in situations where a message passes through multiple hands.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Can convey versions of multiple systems in situations where a message passes through multiple hands.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as contact
     *
     * An e-mail, phone, website or other contact point to use to resolve issues with message communications.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactPointType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * An e-mail, phone, website or other contact point to use to resolve issues with message communications.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $contact
     * @return self
     */
    public function setContact(?\TKusy\Hl7Fhir\R5\ContactPointType $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }


}

