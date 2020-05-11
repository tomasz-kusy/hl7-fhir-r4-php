<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ValueSetComposeType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [[[CodeSystem]]] definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Compose
 */
class ValueSetComposeType extends BackboneElementType
{

    /**
     * The Locked Date is the effective date that is used to determine the version of all referenced Code Systems and Value Set Definitions included in the compose that are not already tied to a specific version.
     *
     * @var \TKusy\Hl7FhirR4\DateType $lockedDate
     */
    private $lockedDate = null;

    /**
     * Whether inactive codes - codes that are not approved for current use - are in the value set. If inactive = true, inactive codes are to be included in the expansion, if inactive = false, the inactive codes will not be included in the expansion. If absent, the behavior is determined by the implementation, or by the applicable $expand parameters (but generally, inactive codes would be expected to be included).
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $inactive
     */
    private $inactive = null;

    /**
     * Include one or more codes from a code system or other value set(s).
     *
     * @var \TKusy\Hl7FhirR4\ValueSetIncludeType[] $include
     */
    private $include = null;

    /**
     * Exclude one or more codes from the value set based on code system filters and/or other value sets.
     *
     * @var \TKusy\Hl7FhirR4\ValueSetIncludeType[] $exclude
     */
    private $exclude = null;

    /**
     * Gets as lockedDate
     *
     * The Locked Date is the effective date that is used to determine the version of all referenced Code Systems and Value Set Definitions included in the compose that are not already tied to a specific version.
     *
     * @return \TKusy\Hl7FhirR4\DateType
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
     * @param \TKusy\Hl7FhirR4\DateType $lockedDate
     * @return self
     */
    public function setLockedDate(\TKusy\Hl7FhirR4\DateType $lockedDate)
    {
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * Gets as inactive
     *
     * Whether inactive codes - codes that are not approved for current use - are in the value set. If inactive = true, inactive codes are to be included in the expansion, if inactive = false, the inactive codes will not be included in the expansion. If absent, the behavior is determined by the implementation, or by the applicable $expand parameters (but generally, inactive codes would be expected to be included).
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
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
     * @param \TKusy\Hl7FhirR4\BooleanType $inactive
     * @return self
     */
    public function setInactive(\TKusy\Hl7FhirR4\BooleanType $inactive)
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
     * @param \TKusy\Hl7FhirR4\ValueSetIncludeType $include
     */
    public function addToInclude(\TKusy\Hl7FhirR4\ValueSetIncludeType $include)
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
     * @return \TKusy\Hl7FhirR4\ValueSetIncludeType[]
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
     * @param \TKusy\Hl7FhirR4\ValueSetIncludeType[] $include
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
     * @param \TKusy\Hl7FhirR4\ValueSetIncludeType $exclude
     */
    public function addToExclude(\TKusy\Hl7FhirR4\ValueSetIncludeType $exclude)
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
     * @return \TKusy\Hl7FhirR4\ValueSetIncludeType[]
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
     * @param \TKusy\Hl7FhirR4\ValueSetIncludeType[] $exclude
     * @return self
     */
    public function setExclude(array $exclude)
    {
        $this->exclude = $exclude;
        return $this;
    }


}

