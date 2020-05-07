<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing HumanNameType
 *
 * A human's name with the ability to identify parts and usage.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: HumanName
 */
class HumanNameType extends ElementType
{

    /**
     * Identifies the purpose for this name.
     *
     * @var \TKusy\Hl7FhirR4\NameUseType $use
     */
    private $use = null;

    /**
     * Specifies the entire name as it should be displayed e.g. on an application UI. This may be provided instead of or as well as the specific parts.
     *
     * @var \TKusy\Hl7FhirR4\StringType $text
     */
    private $text = null;

    /**
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     *
     * @var \TKusy\Hl7FhirR4\StringType $family
     */
    private $family = null;

    /**
     * Given name.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $given
     */
    private $given = [
        
    ];

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $prefix
     */
    private $prefix = [
        
    ];

    /**
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $suffix
     */
    private $suffix = [
        
    ];

    /**
     * Indicates the period of time when this name was valid for the named person.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as use
     *
     * Identifies the purpose for this name.
     *
     * @return \TKusy\Hl7FhirR4\NameUseType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * Identifies the purpose for this name.
     *
     * @param \TKusy\Hl7FhirR4\NameUseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7FhirR4\NameUseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as text
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI. This may be provided instead of or as well as the specific parts.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Specifies the entire name as it should be displayed e.g. on an application UI. This may be provided instead of or as well as the specific parts.
     *
     * @param \TKusy\Hl7FhirR4\StringType $text
     * @return self
     */
    public function setText(\TKusy\Hl7FhirR4\StringType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as family
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Sets a new family
     *
     * The part of a name that links to the genealogy. In some cultures (e.g. Eritrea) the family name of a son is the first name of his father.
     *
     * @param \TKusy\Hl7FhirR4\StringType $family
     * @return self
     */
    public function setFamily(\TKusy\Hl7FhirR4\StringType $family)
    {
        $this->family = $family;
        return $this;
    }

    /**
     * Adds as given
     *
     * Given name.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $given
     */
    public function addToGiven(\TKusy\Hl7FhirR4\StringType $given)
    {
        $this->given[] = $given;
        return $this;
    }

    /**
     * isset given
     *
     * Given name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGiven($index)
    {
        return isset($this->given[$index]);
    }

    /**
     * unset given
     *
     * Given name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGiven($index)
    {
        unset($this->given[$index]);
    }

    /**
     * Gets as given
     *
     * Given name.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getGiven()
    {
        return $this->given;
    }

    /**
     * Sets a new given
     *
     * Given name.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $given
     * @return self
     */
    public function setGiven(array $given)
    {
        $this->given = $given;
        return $this;
    }

    /**
     * Adds as prefix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $prefix
     */
    public function addToPrefix(\TKusy\Hl7FhirR4\StringType $prefix)
    {
        $this->prefix[] = $prefix;
        return $this;
    }

    /**
     * isset prefix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrefix($index)
    {
        return isset($this->prefix[$index]);
    }

    /**
     * unset prefix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrefix($index)
    {
        unset($this->prefix[$index]);
    }

    /**
     * Gets as prefix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets a new prefix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the start of the name.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $prefix
     * @return self
     */
    public function setPrefix(array $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Adds as suffix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $suffix
     */
    public function addToSuffix(\TKusy\Hl7FhirR4\StringType $suffix)
    {
        $this->suffix[] = $suffix;
        return $this;
    }

    /**
     * isset suffix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuffix($index)
    {
        return isset($this->suffix[$index]);
    }

    /**
     * unset suffix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuffix($index)
    {
        unset($this->suffix[$index]);
    }

    /**
     * Gets as suffix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Sets a new suffix
     *
     * Part of the name that is acquired as a title due to academic, legal, employment or nobility status, etc. and that appears at the end of the name.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $suffix
     * @return self
     */
    public function setSuffix(array $suffix)
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * Gets as period
     *
     * Indicates the period of time when this name was valid for the named person.
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
     * Indicates the period of time when this name was valid for the named person.
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

