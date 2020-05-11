<?php

namespace TKusy\Hl7FhirR4;

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
     * @var string $name
     */
    private $name = null;

    /**
     * May include configuration or other information useful in debugging.
     *
     * @var string $software
     */
    private $software = null;

    /**
     * Can convey versions of multiple systems in situations where a message passes through multiple hands.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * An e-mail, phone, website or other contact point to use to resolve issues with message communications.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType $contact
     */
    private $contact = null;

    /**
     * Identifies the routing target to send acknowledgements to.
     *
     * @var \TKusy\Hl7FhirR4\UrlType $endpoint
     */
    private $endpoint = null;

    /**
     * Gets as name
     *
     * Human-readable name for the source system.
     *
     * @return string
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
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as software
     *
     * May include configuration or other information useful in debugging.
     *
     * @return string
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
     * @param string $software
     * @return self
     */
    public function setSoftware($software)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Gets as version
     *
     * Can convey versions of multiple systems in situations where a message passes through multiple hands.
     *
     * @return string
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
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as contact
     *
     * An e-mail, phone, website or other contact point to use to resolve issues with message communications.
     *
     * @return \TKusy\Hl7FhirR4\ContactPointType
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
     * @param \TKusy\Hl7FhirR4\ContactPointType $contact
     * @return self
     */
    public function setContact(\TKusy\Hl7FhirR4\ContactPointType $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as endpoint
     *
     * Identifies the routing target to send acknowledgements to.
     *
     * @return \TKusy\Hl7FhirR4\UrlType
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
     * @param \TKusy\Hl7FhirR4\UrlType $endpoint
     * @return self
     */
    public function setEndpoint(\TKusy\Hl7FhirR4\UrlType $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }


}

