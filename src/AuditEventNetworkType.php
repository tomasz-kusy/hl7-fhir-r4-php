<?php

namespace TKusy\Hl7FhirR4;

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
     * @var string $address
     */
    private $address = null;

    /**
     * An identifier for the type of network access point that originated the audit event.
     *
     * @var \TKusy\Hl7FhirR4\AuditEventAgentNetworkTypeType $type
     */
    private $type = null;

    /**
     * Gets as address
     *
     * An identifier for the network access point of the user device for the audit event.
     *
     * @return string
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
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as type
     *
     * An identifier for the type of network access point that originated the audit event.
     *
     * @return \TKusy\Hl7FhirR4\AuditEventAgentNetworkTypeType
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
     * @param \TKusy\Hl7FhirR4\AuditEventAgentNetworkTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\AuditEventAgentNetworkTypeType $type)
    {
        $this->type = $type;
        return $this;
    }


}

