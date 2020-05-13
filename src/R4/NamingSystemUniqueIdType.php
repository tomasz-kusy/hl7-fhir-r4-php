<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\NamingSystemIdentifierTypeType $type
     */
    private $type = null;

    /**
     * The string that should be sent over the wire to identify the code system or identifier system.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $value
     */
    private $value = null;

    /**
     * Indicates whether this identifier is the "preferred" identifier of this type.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $preferred
     */
    private $preferred = null;

    /**
     * Notes about the past or intended usage of this identifier.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $comment
     */
    private $comment = null;

    /**
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system. Outside of this window, the identifier might be non-deterministic.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as type
     *
     * Identifies the unique identifier scheme used for this particular identifier.
     *
     * @return \TKusy\Hl7Fhir\R4\NamingSystemIdentifierTypeType
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
     * @param \TKusy\Hl7Fhir\R4\NamingSystemIdentifierTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\NamingSystemIdentifierTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as value
     *
     * The string that should be sent over the wire to identify the code system or identifier system.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R4\StringType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as preferred
     *
     * Indicates whether this identifier is the "preferred" identifier of this type.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
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
     * @param \TKusy\Hl7Fhir\R4\BooleanType $preferred
     * @return self
     */
    public function setPreferred(\TKusy\Hl7Fhir\R4\BooleanType $preferred)
    {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Notes about the past or intended usage of this identifier.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7Fhir\R4\StringType $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as period
     *
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system. Outside of this window, the identifier might be non-deterministic.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
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
     * @param \TKusy\Hl7Fhir\R4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

