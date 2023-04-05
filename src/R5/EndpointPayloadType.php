<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EndpointPayloadType
 *
 * The technical details of an endpoint that can be used for electronic services, such as for web services providing XDS.b, a REST endpoint for another FHIR server, or a s/Mime email address. This may include any security context information.
 * XSD Type: Endpoint.Payload
 */
class EndpointPayloadType extends BackboneElementType
{

    /**
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType[] $mimeType
     */
    private $mimeType = null;

    /**
     * Adds as type
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The payload type describes the acceptable content that can be communicated on the endpoint.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as mimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeType $mimeType
     */
    public function addToMimeType(\TKusy\Hl7Fhir\R5\CodeType $mimeType)
    {
        $this->mimeType[] = $mimeType;
        return $this;
    }

    /**
     * isset mimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMimeType($index)
    {
        return isset($this->mimeType[$index]);
    }

    /**
     * unset mimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMimeType($index)
    {
        unset($this->mimeType[$index]);
    }

    /**
     * Gets as mimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType[]
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Sets a new mimeType
     *
     * The mime type to send the payload in - e.g. application/fhir+xml, application/fhir+json. If the mime type is not specified, then the sender could send any content (including no content depending on the connectionType).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType[] $mimeType
     * @return self
     */
    public function setMimeType(array $mimeType = null)
    {
        $this->mimeType = $mimeType;
        return $this;
    }


}

