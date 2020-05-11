<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AuditEventDetailType
 *
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 * XSD Type: AuditEvent.Detail
 */
class AuditEventDetailType extends BackboneElementType
{

    /**
     * The type of extra detail provided in the value.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @var string $valueString
     */
    private $valueString = null;

    /**
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary
     */
    private $valueBase64Binary = null;

    /**
     * Gets as type
     *
     * The type of extra detail provided in the value.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of extra detail provided in the value.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @return string
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @param string $valueString
     * @return self
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueBase64Binary
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\Base64BinaryType
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * Sets a new valueBase64Binary
     *
     * The value of the extra detail. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary
     * @return self
     */
    public function setValueBase64Binary(\TKusy\Hl7FhirR4\Base64BinaryType $valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
        return $this;
    }


}

