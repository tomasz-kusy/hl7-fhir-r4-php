<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ObservationDefinitionQualifiedIntervalType
 *
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 * XSD Type: ObservationDefinition.QualifiedInterval
 */
class ObservationDefinitionQualifiedIntervalType extends BackboneElementType
{

    /**
     * The category of interval of values for continuous or ordinal observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7FhirR4\ObservationRangeCategoryType $category
     */
    private $category = null;

    /**
     * The low and high values determining the interval. There may be only one of the two.
     *
     * @var \TKusy\Hl7FhirR4\RangeType $range
     */
    private $range = null;

    /**
     * Codes to indicate the health context the range applies to. For example, the normal or therapeutic range.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $context
     */
    private $context = null;

    /**
     * Codes to indicate the target population this reference range applies to.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $appliesTo
     */
    private $appliesTo = null;

    /**
     * Sex of the population the range applies to.
     *
     * @var \TKusy\Hl7FhirR4\AdministrativeGenderType $gender
     */
    private $gender = null;

    /**
     * The age at which this reference range is applicable. This is a neonatal age (e.g. number of weeks at term) if the meaning says so.
     *
     * @var \TKusy\Hl7FhirR4\RangeType $age
     */
    private $age = null;

    /**
     * The gestational age to which this reference range is applicable, in the context of pregnancy.
     *
     * @var \TKusy\Hl7FhirR4\RangeType $gestationalAge
     */
    private $gestationalAge = null;

    /**
     * Text based condition for which the reference range is valid.
     *
     * @var \TKusy\Hl7FhirR4\StringType $condition
     */
    private $condition = null;

    /**
     * Gets as category
     *
     * The category of interval of values for continuous or ordinal observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7FhirR4\ObservationRangeCategoryType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * The category of interval of values for continuous or ordinal observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7FhirR4\ObservationRangeCategoryType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\ObservationRangeCategoryType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as range
     *
     * The low and high values determining the interval. There may be only one of the two.
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * The low and high values determining the interval. There may be only one of the two.
     *
     * @param \TKusy\Hl7FhirR4\RangeType $range
     * @return self
     */
    public function setRange(\TKusy\Hl7FhirR4\RangeType $range)
    {
        $this->range = $range;
        return $this;
    }

    /**
     * Gets as context
     *
     * Codes to indicate the health context the range applies to. For example, the normal or therapeutic range.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Codes to indicate the health context the range applies to. For example, the normal or therapeutic range.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7FhirR4\CodeableConceptType $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Adds as appliesTo
     *
     * Codes to indicate the target population this reference range applies to.
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
     * Codes to indicate the target population this reference range applies to.
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
     * Codes to indicate the target population this reference range applies to.
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
     * Codes to indicate the target population this reference range applies to.
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
     * Codes to indicate the target population this reference range applies to.
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
     * Gets as gender
     *
     * Sex of the population the range applies to.
     *
     * @return \TKusy\Hl7FhirR4\AdministrativeGenderType
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Sex of the population the range applies to.
     *
     * @param \TKusy\Hl7FhirR4\AdministrativeGenderType $gender
     * @return self
     */
    public function setGender(\TKusy\Hl7FhirR4\AdministrativeGenderType $gender)
    {
        $this->gender = $gender;
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
     * Gets as gestationalAge
     *
     * The gestational age to which this reference range is applicable, in the context of pregnancy.
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getGestationalAge()
    {
        return $this->gestationalAge;
    }

    /**
     * Sets a new gestationalAge
     *
     * The gestational age to which this reference range is applicable, in the context of pregnancy.
     *
     * @param \TKusy\Hl7FhirR4\RangeType $gestationalAge
     * @return self
     */
    public function setGestationalAge(\TKusy\Hl7FhirR4\RangeType $gestationalAge)
    {
        $this->gestationalAge = $gestationalAge;
        return $this;
    }

    /**
     * Gets as condition
     *
     * Text based condition for which the reference range is valid.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * Text based condition for which the reference range is valid.
     *
     * @param \TKusy\Hl7FhirR4\StringType $condition
     * @return self
     */
    public function setCondition(\TKusy\Hl7FhirR4\StringType $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

