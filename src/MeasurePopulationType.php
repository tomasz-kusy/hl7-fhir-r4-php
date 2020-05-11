<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MeasurePopulationType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.Population
 */
class MeasurePopulationType extends BackboneElementType
{

    /**
     * The type of population criteria.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The human readable description of this population criteria.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * An expression that specifies the criteria for the population, typically the name of an expression in a library.
     *
     * @var \TKusy\Hl7FhirR4\ExpressionType $criteria
     */
    private $criteria = null;

    /**
     * Gets as code
     *
     * The type of population criteria.
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
     * The type of population criteria.
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
     * Gets as description
     *
     * The human readable description of this population criteria.
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
     * The human readable description of this population criteria.
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
     * An expression that specifies the criteria for the population, typically the name of an expression in a library.
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
     * An expression that specifies the criteria for the population, typically the name of an expression in a library.
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

