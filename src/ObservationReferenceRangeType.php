<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ObservationReferenceRangeType
 *
 * Measurements and simple assertions made about a patient, device or other subject.
 * XSD Type: Observation.ReferenceRange
 */
class ObservationReferenceRangeType extends BackboneElementType
{

    /**
     * The value of the low bound of the reference range. The low bound of the reference range endpoint is inclusive of the value (e.g. reference range is >=5 - <=9). If the low bound is omitted, it is assumed to be meaningless (e.g. reference range is <=2.3).
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $low
     */
    private $low = null;

    /**
     * The value of the high bound of the reference range. The high bound of the reference range endpoint is inclusive of the value (e.g. reference range is >=5 - <=9). If the high bound is omitted, it is assumed to be meaningless (e.g. reference range is >= 2.3).
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $high
     */
    private $high = null;

    /**
     * Codes to indicate the what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Codes to indicate the target population this reference range applies to. For example, a reference range may be based on the normal population or a particular sex or race. Multiple `appliesTo` are interpreted as an "AND" of the target populations. For example, to represent a target population of African American females, both a code of female and a code for African American would be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $appliesTo
     */
    private $appliesTo = [
        
    ];

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     *
     * @var \TKusy\Hl7FhirR4\RangeType $age
     */
    private $age = null;

    /**
     * Text based reference range in an observation which may be used when a quantitative range is not appropriate for an observation. An example would be a reference value of "Negative" or a list or table of "normals".
     *
     * @var \TKusy\Hl7FhirR4\StringType $text
     */
    private $text = null;

    /**
     * Gets as low
     *
     * The value of the low bound of the reference range. The low bound of the reference range endpoint is inclusive of the value (e.g. reference range is >=5 - <=9). If the low bound is omitted, it is assumed to be meaningless (e.g. reference range is <=2.3).
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Sets a new low
     *
     * The value of the low bound of the reference range. The low bound of the reference range endpoint is inclusive of the value (e.g. reference range is >=5 - <=9). If the low bound is omitted, it is assumed to be meaningless (e.g. reference range is <=2.3).
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $low
     * @return self
     */
    public function setLow(\TKusy\Hl7FhirR4\QuantityType $low)
    {
        $this->low = $low;
        return $this;
    }

    /**
     * Gets as high
     *
     * The value of the high bound of the reference range. The high bound of the reference range endpoint is inclusive of the value (e.g. reference range is >=5 - <=9). If the high bound is omitted, it is assumed to be meaningless (e.g. reference range is >= 2.3).
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * Sets a new high
     *
     * The value of the high bound of the reference range. The high bound of the reference range endpoint is inclusive of the value (e.g. reference range is >=5 - <=9). If the high bound is omitted, it is assumed to be meaningless (e.g. reference range is >= 2.3).
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $high
     * @return self
     */
    public function setHigh(\TKusy\Hl7FhirR4\QuantityType $high)
    {
        $this->high = $high;
        return $this;
    }

    /**
     * Gets as type
     *
     * Codes to indicate the what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Codes to indicate the what part of the targeted reference population it applies to. For example, the normal or therapeutic range.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as appliesTo
     *
     * Codes to indicate the target population this reference range applies to. For example, a reference range may be based on the normal population or a particular sex or race. Multiple `appliesTo` are interpreted as an "AND" of the target populations. For example, to represent a target population of African American females, both a code of female and a code for African American would be used.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $appliesTo
     */
    public function addToAppliesTo(\TKusy\Hl7FhirR4\CodeableConceptType $appliesTo)
    {
        $this->appliesTo[] = $appliesTo;
        return $this;
    }

    /**
     * isset appliesTo
     *
     * Codes to indicate the target population this reference range applies to. For example, a reference range may be based on the normal population or a particular sex or race. Multiple `appliesTo` are interpreted as an "AND" of the target populations. For example, to represent a target population of African American females, both a code of female and a code for African American would be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAppliesTo($index)
    {
        return isset($this->appliesTo[$index]);
    }

    /**
     * unset appliesTo
     *
     * Codes to indicate the target population this reference range applies to. For example, a reference range may be based on the normal population or a particular sex or race. Multiple `appliesTo` are interpreted as an "AND" of the target populations. For example, to represent a target population of African American females, both a code of female and a code for African American would be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAppliesTo($index)
    {
        unset($this->appliesTo[$index]);
    }

    /**
     * Gets as appliesTo
     *
     * Codes to indicate the target population this reference range applies to. For example, a reference range may be based on the normal population or a particular sex or race. Multiple `appliesTo` are interpreted as an "AND" of the target populations. For example, to represent a target population of African American females, both a code of female and a code for African American would be used.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getAppliesTo()
    {
        return $this->appliesTo;
    }

    /**
     * Sets a new appliesTo
     *
     * Codes to indicate the target population this reference range applies to. For example, a reference range may be based on the normal population or a particular sex or race. Multiple `appliesTo` are interpreted as an "AND" of the target populations. For example, to represent a target population of African American females, both a code of female and a code for African American would be used.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $appliesTo
     * @return self
     */
    public function setAppliesTo(array $appliesTo)
    {
        $this->appliesTo = $appliesTo;
        return $this;
    }

    /**
     * Gets as age
     *
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     *
     * @param \TKusy\Hl7FhirR4\RangeType $age
     * @return self
     */
    public function setAge(\TKusy\Hl7FhirR4\RangeType $age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text based reference range in an observation which may be used when a quantitative range is not appropriate for an observation. An example would be a reference value of "Negative" or a list or table of "normals".
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
     * Text based reference range in an observation which may be used when a quantitative range is not appropriate for an observation. An example would be a reference value of "Negative" or a list or table of "normals".
     *
     * @param \TKusy\Hl7FhirR4\StringType $text
     * @return self
     */
    public function setText(\TKusy\Hl7FhirR4\StringType $text)
    {
        $this->text = $text;
        return $this;
    }


}

