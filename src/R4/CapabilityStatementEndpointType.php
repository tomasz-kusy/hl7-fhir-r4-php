<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CapabilityStatementEndpointType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Endpoint
 */
class CapabilityStatementEndpointType extends BackboneElementType
{

    /**
     * A list of the messaging transport protocol(s) identifiers, supported by this endpoint.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $protocol
     */
    private $protocol = null;

    /**
     * The network address of the endpoint. For solutions that do not use network addresses for routing, it can be just an identifier.
     *
     * @var \TKusy\Hl7Fhir\R4\UrlType $address
     */
    private $address = null;

    /**
     * Gets as protocol
     *
     * A list of the messaging transport protocol(s) identifiers, supported by this endpoint.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Sets a new protocol
     *
     * A list of the messaging transport protocol(s) identifiers, supported by this endpoint.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType $protocol
     * @return self
     */
    public function setProtocol(\TKusy\Hl7Fhir\R4\CodingType $protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Gets as address
     *
     * The network address of the endpoint. For solutions that do not use network addresses for routing, it can be just an identifier.
     *
     * @return \TKusy\Hl7Fhir\R4\UrlType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The network address of the endpoint. For solutions that do not use network addresses for routing, it can be just an identifier.
     *
     * @param \TKusy\Hl7Fhir\R4\UrlType $address
     * @return self
     */
    public function setAddress(\TKusy\Hl7Fhir\R4\UrlType $address)
    {
        $this->address = $address;
        return $this;
    }


}

