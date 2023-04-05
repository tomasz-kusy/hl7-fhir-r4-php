<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\NamingSystemIdentifierTypeType $type
     */
    private $type = null;

    /**
     * The string that should be sent over the wire to identify the code system or identifier system.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Indicates whether this identifier is the "preferred" identifier of this type.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $preferred
     */
    private $preferred = null;

    /**
     * Notes about the past or intended usage of this identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $comment
     */
    private $comment = null;

    /**
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system. Outside of this window, the identifier might be non-deterministic.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Indicates whether this identifier ie endorsed by the official owner of the associated naming system.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $authoritative
     */
    private $authoritative = null;

    /**
     * Gets as type
     *
     * Identifies the unique identifier scheme used for this particular identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\NamingSystemIdentifierTypeType
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
     * @param \TKusy\Hl7Fhir\R5\NamingSystemIdentifierTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\NamingSystemIdentifierTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as value
     *
     * The string that should be sent over the wire to identify the code system or identifier system.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as preferred
     *
     * Indicates whether this identifier is the "preferred" identifier of this type.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
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
     * @param \TKusy\Hl7Fhir\R5\BooleanType $preferred
     * @return self
     */
    public function setPreferred(?\TKusy\Hl7Fhir\R5\BooleanType $preferred = null)
    {
        $this->preferred = $preferred;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Notes about the past or intended usage of this identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $comment
     * @return self
     */
    public function setComment(?\TKusy\Hl7Fhir\R5\StringType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as period
     *
     * Identifies the period of time over which this identifier is considered appropriate to refer to the naming system. Outside of this window, the identifier might be non-deterministic.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
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
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as authoritative
     *
     * Indicates whether this identifier ie endorsed by the official owner of the associated naming system.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAuthoritative()
    {
        return $this->authoritative;
    }

    /**
     * Sets a new authoritative
     *
     * Indicates whether this identifier ie endorsed by the official owner of the associated naming system.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $authoritative
     * @return self
     */
    public function setAuthoritative(?\TKusy\Hl7Fhir\R5\BooleanType $authoritative = null)
    {
        $this->authoritative = $authoritative;
        return $this;
    }


}

