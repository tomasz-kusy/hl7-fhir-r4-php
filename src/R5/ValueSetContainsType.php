<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ValueSetContainsType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [CodeSystem](codesystem.html) definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Contains
 */
class ValueSetContainsType extends BackboneElementType
{

    /**
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $system
     */
    private $system = null;

    /**
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $abstract
     */
    private $abstract = null;

    /**
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data. It might not be known or specified whether a concept is inactive (and it may depend on the context of use).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $inactive
     */
    private $inactive = null;

    /**
     * The version of the code system from this code was taken. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $code
     */
    private $code = null;

    /**
     * The recommended display for this item in the expansion.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $display
     */
    private $display = null;

    /**
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetDesignationType[] $designation
     */
    private $designation = null;

    /**
     * A property value for this concept.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetProperty1Type[] $property
     */
    private $property = null;

    /**
     * Other codes and entries contained under this entry in the hierarchy.
     *
     * @var \TKusy\Hl7Fhir\R5\ValueSetContainsType[] $contains
     */
    private $contains = null;

    /**
     * Gets as system
     *
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * An absolute URI which is the code system in which the code for this item in the expansion is defined.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $system
     * @return self
     */
    public function setSystem(?\TKusy\Hl7Fhir\R5\UriType $system = null)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Gets as abstract
     *
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Sets a new abstract
     *
     * If true, this entry is included in the expansion for navigational purposes, and the user cannot select the code directly as a proper value.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $abstract
     * @return self
     */
    public function setAbstract(?\TKusy\Hl7Fhir\R5\BooleanType $abstract = null)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * Gets as inactive
     *
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data. It might not be known or specified whether a concept is inactive (and it may depend on the context of use).
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
     * If the concept is inactive in the code system that defines it. Inactive codes are those that are no longer to be used, but are maintained by the code system for understanding legacy data. It might not be known or specified whether a concept is inactive (and it may depend on the context of use).
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
     * Gets as version
     *
     * The version of the code system from this code was taken. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the code system from this code was taken. Note that a well-maintained code system does not need the version reported, because the meaning of codes is consistent across versions. However this cannot consistently be assured, and when the meaning is not guaranteed to be consistent, the version SHOULD be exchanged.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as code
     *
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The code for this item in the expansion hierarchy. If this code is missing the entry in the hierarchy is a place holder (abstract) and does not represent a valid code in the value set.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as display
     *
     * The recommended display for this item in the expansion.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * The recommended display for this item in the expansion.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $display
     * @return self
     */
    public function setDisplay(?\TKusy\Hl7Fhir\R5\StringType $display = null)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Adds as designation
     *
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetDesignationType $designation
     */
    public function addToDesignation(\TKusy\Hl7Fhir\R5\ValueSetDesignationType $designation)
    {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * isset designation
     *
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDesignation($index)
    {
        return isset($this->designation[$index]);
    }

    /**
     * unset designation
     *
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDesignation($index)
    {
        unset($this->designation[$index]);
    }

    /**
     * Gets as designation
     *
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetDesignationType[]
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Sets a new designation
     *
     * Additional representations for this item - other languages, aliases, specialized purposes, used for particular purposes, etc. These are relevant when the conditions of the expansion do not fix to a single correct representation.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetDesignationType[] $designation
     * @return self
     */
    public function setDesignation(array $designation = null)
    {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Adds as property
     *
     * A property value for this concept.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetProperty1Type $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\ValueSetProperty1Type $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * A property value for this concept.
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
     * A property value for this concept.
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
     * A property value for this concept.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetProperty1Type[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A property value for this concept.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetProperty1Type[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as contains
     *
     * Other codes and entries contained under this entry in the hierarchy.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ValueSetContainsType $contains
     */
    public function addToContains(\TKusy\Hl7Fhir\R5\ValueSetContainsType $contains)
    {
        $this->contains[] = $contains;
        return $this;
    }

    /**
     * isset contains
     *
     * Other codes and entries contained under this entry in the hierarchy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContains($index)
    {
        return isset($this->contains[$index]);
    }

    /**
     * unset contains
     *
     * Other codes and entries contained under this entry in the hierarchy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContains($index)
    {
        unset($this->contains[$index]);
    }

    /**
     * Gets as contains
     *
     * Other codes and entries contained under this entry in the hierarchy.
     *
     * @return \TKusy\Hl7Fhir\R5\ValueSetContainsType[]
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * Sets a new contains
     *
     * Other codes and entries contained under this entry in the hierarchy.
     *
     * @param \TKusy\Hl7Fhir\R5\ValueSetContainsType[] $contains
     * @return self
     */
    public function setContains(array $contains = null)
    {
        $this->contains = $contains;
        return $this;
    }


}

