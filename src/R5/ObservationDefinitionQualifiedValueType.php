<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ObservationDefinitionQualifiedValueType
 *
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 * XSD Type: ObservationDefinition.QualifiedValue
 */
class ObservationDefinitionQualifiedValueType extends BackboneElementType
{

    /**
     * A concept defining the context for this set of qualified values.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $context
     */
    private $context = null;

    /**
     * The target population this set of qualified values applies to.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $appliesTo
     */
    private $appliesTo = null;

    /**
     * The gender this set of qualified values applies to.
     *
     * @var \TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender
     */
    private $gender = null;

    /**
     * The age range this set of qualified values applies to.
     *
     * @var \TKusy\Hl7Fhir\R5\RangeType $age
     */
    private $age = null;

    /**
     * The gestational age this set of qualified values applies to.
     *
     * @var \TKusy\Hl7Fhir\R5\RangeType $gestationalAge
     */
    private $gestationalAge = null;

    /**
     * Text based condition for which the the set of qualified values is valid.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $condition
     */
    private $condition = null;

    /**
     * The category of range of values for continuous or ordinal observations that match the criteria of this set of qualified values.
     *
     * @var \TKusy\Hl7Fhir\R5\ObservationRangeCategoryType $rangeCategory
     */
    private $rangeCategory = null;

    /**
     * The range of values defined for continuous or ordinal observations that match the criteria of this set of qualified values.
     *
     * @var \TKusy\Hl7Fhir\R5\RangeType $range
     */
    private $range = null;

    /**
     * The set of valid coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $validCodedValueSet
     */
    private $validCodedValueSet = null;

    /**
     * The set of normal coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $normalCodedValueSet
     */
    private $normalCodedValueSet = null;

    /**
     * The set of abnormal coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $abnormalCodedValueSet
     */
    private $abnormalCodedValueSet = null;

    /**
     * The set of critical coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $criticalCodedValueSet
     */
    private $criticalCodedValueSet = null;

    /**
     * Gets as context
     *
     * A concept defining the context for this set of qualified values.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * A concept defining the context for this set of qualified values.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $context
     * @return self
     */
    public function setContext(?\TKusy\Hl7Fhir\R5\CodeableConceptType $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Adds as appliesTo
     *
     * The target population this set of qualified values applies to.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $appliesTo
     */
    public function addToAppliesTo(\TKusy\Hl7Fhir\R5\CodeableConceptType $appliesTo)
    {
        $this->appliesTo[] = $appliesTo;
        return $this;
    }

    /**
     * isset appliesTo
     *
     * The target population this set of qualified values applies to.
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
     * The target population this set of qualified values applies to.
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
     * The target population this set of qualified values applies to.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getAppliesTo()
    {
        return $this->appliesTo;
    }

    /**
     * Sets a new appliesTo
     *
     * The target population this set of qualified values applies to.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $appliesTo
     * @return self
     */
    public function setAppliesTo(array $appliesTo = null)
    {
        $this->appliesTo = $appliesTo;
        return $this;
    }

    /**
     * Gets as gender
     *
     * The gender this set of qualified values applies to.
     *
     * @return \TKusy\Hl7Fhir\R5\AdministrativeGenderType
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * The gender this set of qualified values applies to.
     *
     * @param \TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender
     * @return self
     */
    public function setGender(?\TKusy\Hl7Fhir\R5\AdministrativeGenderType $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as age
     *
     * The age range this set of qualified values applies to.
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * The age range this set of qualified values applies to.
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $age
     * @return self
     */
    public function setAge(?\TKusy\Hl7Fhir\R5\RangeType $age = null)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as gestationalAge
     *
     * The gestational age this set of qualified values applies to.
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getGestationalAge()
    {
        return $this->gestationalAge;
    }

    /**
     * Sets a new gestationalAge
     *
     * The gestational age this set of qualified values applies to.
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $gestationalAge
     * @return self
     */
    public function setGestationalAge(?\TKusy\Hl7Fhir\R5\RangeType $gestationalAge = null)
    {
        $this->gestationalAge = $gestationalAge;
        return $this;
    }

    /**
     * Gets as condition
     *
     * Text based condition for which the the set of qualified values is valid.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * Text based condition for which the the set of qualified values is valid.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $condition
     * @return self
     */
    public function setCondition(?\TKusy\Hl7Fhir\R5\StringType $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as rangeCategory
     *
     * The category of range of values for continuous or ordinal observations that match the criteria of this set of qualified values.
     *
     * @return \TKusy\Hl7Fhir\R5\ObservationRangeCategoryType
     */
    public function getRangeCategory()
    {
        return $this->rangeCategory;
    }

    /**
     * Sets a new rangeCategory
     *
     * The category of range of values for continuous or ordinal observations that match the criteria of this set of qualified values.
     *
     * @param \TKusy\Hl7Fhir\R5\ObservationRangeCategoryType $rangeCategory
     * @return self
     */
    public function setRangeCategory(?\TKusy\Hl7Fhir\R5\ObservationRangeCategoryType $rangeCategory = null)
    {
        $this->rangeCategory = $rangeCategory;
        return $this;
    }

    /**
     * Gets as range
     *
     * The range of values defined for continuous or ordinal observations that match the criteria of this set of qualified values.
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * The range of values defined for continuous or ordinal observations that match the criteria of this set of qualified values.
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $range
     * @return self
     */
    public function setRange(?\TKusy\Hl7Fhir\R5\RangeType $range = null)
    {
        $this->range = $range;
        return $this;
    }

    /**
     * Gets as validCodedValueSet
     *
     * The set of valid coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getValidCodedValueSet()
    {
        return $this->validCodedValueSet;
    }

    /**
     * Sets a new validCodedValueSet
     *
     * The set of valid coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $validCodedValueSet
     * @return self
     */
    public function setValidCodedValueSet(?\TKusy\Hl7Fhir\R5\CanonicalType $validCodedValueSet = null)
    {
        $this->validCodedValueSet = $validCodedValueSet;
        return $this;
    }

    /**
     * Gets as normalCodedValueSet
     *
     * The set of normal coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getNormalCodedValueSet()
    {
        return $this->normalCodedValueSet;
    }

    /**
     * Sets a new normalCodedValueSet
     *
     * The set of normal coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $normalCodedValueSet
     * @return self
     */
    public function setNormalCodedValueSet(?\TKusy\Hl7Fhir\R5\CanonicalType $normalCodedValueSet = null)
    {
        $this->normalCodedValueSet = $normalCodedValueSet;
        return $this;
    }

    /**
     * Gets as abnormalCodedValueSet
     *
     * The set of abnormal coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getAbnormalCodedValueSet()
    {
        return $this->abnormalCodedValueSet;
    }

    /**
     * Sets a new abnormalCodedValueSet
     *
     * The set of abnormal coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $abnormalCodedValueSet
     * @return self
     */
    public function setAbnormalCodedValueSet(?\TKusy\Hl7Fhir\R5\CanonicalType $abnormalCodedValueSet = null)
    {
        $this->abnormalCodedValueSet = $abnormalCodedValueSet;
        return $this;
    }

    /**
     * Gets as criticalCodedValueSet
     *
     * The set of critical coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getCriticalCodedValueSet()
    {
        return $this->criticalCodedValueSet;
    }

    /**
     * Sets a new criticalCodedValueSet
     *
     * The set of critical coded results for qualitative observations that match the criteria of this set of qualified values.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $criticalCodedValueSet
     * @return self
     */
    public function setCriticalCodedValueSet(?\TKusy\Hl7Fhir\R5\CanonicalType $criticalCodedValueSet = null)
    {
        $this->criticalCodedValueSet = $criticalCodedValueSet;
        return $this;
    }


}

