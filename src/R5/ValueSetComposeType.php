<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetComposeType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Compose
 */
class ValueSetComposeType extends BackboneElementType
{

    /**
     * The Locked Date is the effective date that is used to determine the version of all referenced Code Systems and Value Set Definitions included in the compose that are not already tied to a specific version.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $lockedDate
     */
    private $lockedDate = null;

    /**
     * Whether inactive codes - codes that are not approved for current use - are in the value set. If inactive = true, inactive codes are to be included in the expansion, if inactive = false, the inactive codes will not be included in the expansion. If absent, the behavior is determined by the implementation, or by the applicable $expand parameters (but generally, inactive codes would be expected to be included).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $inactive
     */
    private $inactive = null;

    /**
     * Include one or more codes from a code system or other value set(s).
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetIncludeType[] $include
     */
    private $include = null;

    /**
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetIncludeType[] $exclude
     */
    private $exclude = null;

    /**
     * A property to return in the expansion, if the client doesn't ask for any particular properties. May be either a code from the code system definition (convenient) or a the formal URI that refers to the property. The special value '*' means all properties known to the server.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $property
     */
    private $property = null;

    /**
     * Gets as lockedDate
     *
     * The Locked Date is the effective date that is used to determine the version of all referenced Code Systems and Value Set Definitions included in the compose that are not already tied to a specific version.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    /**
     * Sets a new lockedDate
     *
     * The Locked Date is the effective date that is used to determine the version of all referenced Code Systems and Value Set Definitions included in the compose that are not already tied to a specific version.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $lockedDate
     * @return self
     */
    public function setLockedDate(?\TKusy\Hl7Fhir\R5\DateType $lockedDate = null)
    {
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * Gets as inactive
     *
     * Whether inactive codes - codes that are not approved for current use - are in the value set. If inactive = true, inactive codes are to be included in the expansion, if inactive = false, the inactive codes will not be included in the expansion. If absent, the behavior is determined by the implementation, or by the applicable $expand parameters (but generally, inactive codes would be expected to be included).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * Sets a new inactive
     *
     * Whether inactive codes - codes that are not approved for current use - are in the value set. If inactive = true, inactive codes are to be included in the expansion, if inactive = false, the inactive codes will not be included in the expansion. If absent, the behavior is determined by the implementation, or by the applicable $expand parameters (but generally, inactive codes would be expected to be included).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $inactive
     * @return self
     */
    public function setInactive(?\TKusy\Hl7Fhir\R5\BooleanType $inactive = null)
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * Adds as include
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetIncludeType $include
     */
    public function addToInclude(\TKusy\Hl7Fhir\R5\ValueSetIncludeType $include)
    {
        $this->include[] = $include;
        return $this;
    }

    /**
     * isset include
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInclude($index)
    {
        return isset($this->include[$index]);
    }

    /**
     * unset include
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInclude($index)
    {
        unset($this->include[$index]);
    }

    /**
     * Gets as include
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetIncludeType[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * Include one or more codes from a code system or other value set(s).
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetIncludeType[] $include
     * @return self
     */
    public function setInclude(array $include)
    {
        $this->include = $include;
        return $this;
    }

    /**
     * Adds as exclude
     *
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetIncludeType $exclude
     */
    public function addToExclude(\TKusy\Hl7Fhir\R5\ValueSetIncludeType $exclude)
    {
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * isset exclude
     *
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExclude($index)
    {
        return isset($this->exclude[$index]);
    }

    /**
     * unset exclude
     *
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExclude($index)
    {
        unset($this->exclude[$index]);
    }

    /**
     * Gets as exclude
     *
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetIncludeType[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Sets a new exclude
     *
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetIncludeType[] $exclude
     * @return self
     */
    public function setExclude(array $exclude = null)
    {
        $this->exclude = $exclude;
        return $this;
    }

    /**
     * Adds as property
     *
     * A property to return in the expansion, if the client doesn't ask for any particular properties. May be either a code from the code system definition (convenient) or a the formal URI that refers to the property. The special value '*' means all properties known to the server.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\StringType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * A property to return in the expansion, if the client doesn't ask for any particular properties. May be either a code from the code system definition (convenient) or a the formal URI that refers to the property. The special value '*' means all properties known to the server.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * A property to return in the expansion, if the client doesn't ask for any particular properties. May be either a code from the code system definition (convenient) or a the formal URI that refers to the property. The special value '*' means all properties known to the server.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * A property to return in the expansion, if the client doesn't ask for any particular properties. May be either a code from the code system definition (convenient) or a the formal URI that refers to the property. The special value '*' means all properties known to the server.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A property to return in the expansion, if the client doesn't ask for any particular properties. May be either a code from the code system definition (convenient) or a the formal URI that refers to the property. The special value '*' means all properties known to the server.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }


}

