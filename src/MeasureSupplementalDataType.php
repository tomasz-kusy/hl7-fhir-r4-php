<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MeasureSupplementalDataType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.SupplementalData
 */
class MeasureSupplementalDataType extends BackboneElementType
{

    /**
     * Indicates a meaning for the supplemental data. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing supplemental data to be correlated across measures.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $usage
     */
    private $usage = null;

    /**
     * The human readable description of this supplemental data.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The criteria for the supplemental data. This is typically the name of a valid expression defined within a referenced library, but it may also be a path to a specific data element. The criteria defines the data to be returned for this element.
     *
     * @var \TKusy\Hl7FhirR4\ExpressionType $criteria
     */
    private $criteria = null;

    /**
     * Gets as code
     *
     * Indicates a meaning for the supplemental data. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing supplemental data to be correlated across measures.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Indicates a meaning for the supplemental data. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing supplemental data to be correlated across measures.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as usage
     *
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $usage
     */
    public function addToUsage(\TKusy\Hl7FhirR4\CodeableConceptType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsage($index)
    {
        return isset($this->usage[$index]);
    }

    /**
     * unset usage
     *
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsage($index)
    {
        unset($this->usage[$index]);
    }

    /**
     * Gets as usage
     *
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * An indicator of the intended usage for the supplemental data element. Supplemental data indicates the data is additional information requested to augment the measure information. Risk adjustment factor indicates the data is additional information used to calculate risk adjustment factors when applying a risk model to the measure calculation.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $usage
     * @return self
     */
    public function setUsage(array $usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as description
     *
     * The human readable description of this supplemental data.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The human readable description of this supplemental data.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as criteria
     *
     * The criteria for the supplemental data. This is typically the name of a valid expression defined within a referenced library, but it may also be a path to a specific data element. The criteria defines the data to be returned for this element.
     *
     * @return \TKusy\Hl7FhirR4\ExpressionType
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Sets a new criteria
     *
     * The criteria for the supplemental data. This is typically the name of a valid expression defined within a referenced library, but it may also be a path to a specific data element. The criteria defines the data to be returned for this element.
     *
     * @param \TKusy\Hl7FhirR4\ExpressionType $criteria
     * @return self
     */
    public function setCriteria(\TKusy\Hl7FhirR4\ExpressionType $criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }


}

