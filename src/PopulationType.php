<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PopulationType
 *
 * A populatioof people with some set of grouping criteria.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Population
 */
class PopulationType extends BackboneElementType
{

    /**
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $ageRange
     */
    private $ageRange = null;

    /**
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $ageCodeableConcept
     */
    private $ageCodeableConcept = null;

    /**
     * The gender of the specific population.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $gender
     */
    private $gender = null;

    /**
     * Race of the specific population.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $race
     */
    private $race = null;

    /**
     * The existing physiological conditions of the specific population to which this applies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $physiologicalCondition
     */
    private $physiologicalCondition = null;

    /**
     * Gets as ageRange
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * Sets a new ageRange
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $ageRange
     * @return self
     */
    public function setAgeRange(\TKusy\Hl7FhirR4\RangeType $ageRange)
    {
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * Gets as ageCodeableConcept
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAgeCodeableConcept()
    {
        return $this->ageCodeableConcept;
    }

    /**
     * Sets a new ageCodeableConcept
     *
     * The age of the specific population. (choose any one of age*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $ageCodeableConcept
     * @return self
     */
    public function setAgeCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $ageCodeableConcept)
    {
        $this->ageCodeableConcept = $ageCodeableConcept;
        return $this;
    }

    /**
     * Gets as gender
     *
     * The gender of the specific population.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * The gender of the specific population.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $gender
     * @return self
     */
    public function setGender(\TKusy\Hl7FhirR4\CodeableConceptType $gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as race
     *
     * Race of the specific population.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Sets a new race
     *
     * Race of the specific population.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $race
     * @return self
     */
    public function setRace(\TKusy\Hl7FhirR4\CodeableConceptType $race)
    {
        $this->race = $race;
        return $this;
    }

    /**
     * Gets as physiologicalCondition
     *
     * The existing physiological conditions of the specific population to which this applies.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPhysiologicalCondition()
    {
        return $this->physiologicalCondition;
    }

    /**
     * Sets a new physiologicalCondition
     *
     * The existing physiological conditions of the specific population to which this applies.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $physiologicalCondition
     * @return self
     */
    public function setPhysiologicalCondition(\TKusy\Hl7FhirR4\CodeableConceptType $physiologicalCondition)
    {
        $this->physiologicalCondition = $physiologicalCondition;
        return $this;
    }


}

