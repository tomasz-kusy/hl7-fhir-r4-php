<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing NamingSystemUniqueIdType
 *
 * A curated namespace that issues unique symbols within that namespace for the identification of concepts, people, devices, etc. Represents a "System" used within the Identifier and Coding data types.
 * XSD Type: NamingSystem.UniqueId
 */
class NamingSystemUniqueIdType extends BackboneElementType
{

    /**
     * Identifies the unique identifier scheme used for this particular identifier.
     *
     * @var \TKusy\Hl7FhirR4\NamingSystemIdentifierTypeType $type
     */
    private $type = null;

    /**
     * The string that should be sent over the wire to identify the code system or identifier system.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Indicates whether this identifier is the "preferred" identifier of this type.
     *
     * @var bool $preferred
     */
    private $preferred = null;

    /**
     * Notes about the past or intended usage of this identifier.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system. Outside of this window, the identifier might be non-deterministic.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as type
     *
     * Identifies the unique identifier scheme used for this particular identifier.
     *
     * @return \TKusy\Hl7FhirR4\NamingSystemIdentifierTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the unique identifier scheme used for this particular identifier.
     *
     * @param \TKusy\Hl7FhirR4\NamingSystemIdentifierTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\NamingSystemIdentifierTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as value
     *
     * The string that should be sent over the wire to identify the code system or identifier system.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The string that should be sent over the wire to identify the code system or identifier system.
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as preferred
     *
     * Indicates whether this identifier is the "preferred" identifier of this type.
     *
     * @return bool
     */
    public function getPreferred()
    {
        return $this->preferred;
    }

    /**
     * Sets a new preferred
     *
     * Indicates whether this identifier is the "preferred" identifier of this type.
     *
     * @param bool $preferred
     * @return self
     */
    public function setPreferred($preferred)
    {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Notes about the past or intended usage of this identifier.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Notes about the past or intended usage of this identifier.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as period
     *
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system. Outside of this window, the identifier might be non-deterministic.
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
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system. Outside of this window, the identifier might be non-deterministic.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

