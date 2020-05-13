<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing AuditEventNetworkType
 *
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 * XSD Type: AuditEvent.Network
 */
class AuditEventNetworkType extends BackboneElementType
{

    /**
     * An identifier for the network access point of the user device for the audit event.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $address
     */
    private $address = null;

    /**
     * An identifier for the type of network access point that originated the audit event.
     *
     * @var \TKusy\Hl7Fhir\R4\AuditEventAgentNetworkTypeType $type
     */
    private $type = null;

    /**
     * Gets as address
     *
     * An identifier for the network access point of the user device for the audit event.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * An identifier for the network access point of the user device for the audit event.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $address
     * @return self
     */
    public function setAddress(\TKusy\Hl7Fhir\R4\StringType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as type
     *
     * An identifier for the type of network access point that originated the audit event.
     *
     * @return \TKusy\Hl7Fhir\R4\AuditEventAgentNetworkTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * An identifier for the type of network access point that originated the audit event.
     *
     * @param \TKusy\Hl7Fhir\R4\AuditEventAgentNetworkTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\AuditEventAgentNetworkTypeType $type)
    {
        $this->type = $type;
        return $this;
    }


}

