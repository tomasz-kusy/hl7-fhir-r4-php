<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MessageHeaderSourceType
 *
 * The header for a message exchange that is either requesting or responding to an action. The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * XSD Type: MessageHeader.Source
 */
class MessageHeaderSourceType extends BackboneElementType
{

    /**
     * Human-readable name for the source system.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * May include configuration or other information useful in debugging.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $software
     */
    private $software = null;

    /**
     * Can convey versions of multiple systems in situations where a message passes through multiple hands.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $version
     */
    private $version = null;

    /**
     * An e-mail, phone, website or other contact point to use to resolve issues with message communications.
     *
     * @var \TKusy\Hl7Fhir\R4\ContactPointType $contact
     */
    private $contact = null;

    /**
     * Identifies the routing target to send acknowledgements to.
     *
     * @var \TKusy\Hl7Fhir\R4\UrlType $endpoint
     */
    private $endpoint = null;

    /**
     * Gets as name
     *
     * Human-readable name for the source system.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as software
     *
     * May include configuration or other information useful in debugging.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $software
     * @return self
     */
    public function setSoftware(\TKusy\Hl7Fhir\R4\StringType $software)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Gets as version
     *
     * Can convey versions of multiple systems in situations where a message passes through multiple hands.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $version
     * @return self
     */
    public function setVersion(\TKusy\Hl7Fhir\R4\StringType $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as contact
     *
     * An e-mail, phone, website or other contact point to use to resolve issues with message communications.
     *
     * @return \TKusy\Hl7Fhir\R4\ContactPointType
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
     * @param \TKusy\Hl7Fhir\R4\ContactPointType $contact
     * @return self
     */
    public function setContact(\TKusy\Hl7Fhir\R4\ContactPointType $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as endpoint
     *
     * Identifies the routing target to send acknowledgements to.
     *
     * @return \TKusy\Hl7Fhir\R4\UrlType
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * Identifies the routing target to send acknowledgements to.
     *
     * @param \TKusy\Hl7Fhir\R4\UrlType $endpoint
     * @return self
     */
    public function setEndpoint(\TKusy\Hl7Fhir\R4\UrlType $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }


}

