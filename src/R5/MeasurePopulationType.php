<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasurePopulationType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.Population
 */
class MeasurePopulationType extends BackboneElementType
{

    /**
     * An identifier that is unique within the Measure allowing linkage to the equivalent population in a MeasureReport resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * The type of population criteria.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The human readable description of this population criteria.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * An expression that specifies the criteria for the population, typically the name of an expression in a library.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $criteria
     */
    private $criteria = null;

    /**
     * A Group resource that defines this population as a set of characteristics.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $groupDefinition
     */
    private $groupDefinition = null;

    /**
     * The id of a population element in this measure that provides the input for this population criteria. In most cases, the scoring structure of the measure implies specific relationships (e.g. the Numerator uses the Denominator as the source in a proportion scoring). In some cases, however, multiple possible choices exist and must be resolved explicitly. For example in a ratio measure with multiple initial populations, the denominator must specify which population should be used as the starting point.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $inputPopulationId
     */
    private $inputPopulationId = null;

    /**
     * Specifies which method should be used to aggregate measure observation values. For most scoring types, this is implied by scoring (e.g. a proportion measure counts members of the populations). For continuous variables, however, this information must be specified to ensure correct calculation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $aggregateMethod
     */
    private $aggregateMethod = null;

    /**
     * Gets as linkId
     *
     * An identifier that is unique within the Measure allowing linkage to the equivalent population in a MeasureReport resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * An identifier that is unique within the Measure allowing linkage to the equivalent population in a MeasureReport resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $linkId
     * @return self
     */
    public function setLinkId(?\TKusy\Hl7Fhir\R5\StringType $linkId = null)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as code
     *
     * The type of population criteria.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as description
     *
     * The human readable description of this population criteria.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as criteria
     *
     * An expression that specifies the criteria for the population, typically the name of an expression in a library.
     *
     * @return \TKusy\Hl7Fhir\R5\ExpressionType
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
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $criteria
     * @return self
     */
    public function setCriteria(?\TKusy\Hl7Fhir\R5\ExpressionType $criteria = null)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Gets as groupDefinition
     *
     * A Group resource that defines this population as a set of characteristics.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getGroupDefinition()
    {
        return $this->groupDefinition;
    }

    /**
     * Sets a new groupDefinition
     *
     * A Group resource that defines this population as a set of characteristics.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $groupDefinition
     * @return self
     */
    public function setGroupDefinition(?\TKusy\Hl7Fhir\R5\ReferenceType $groupDefinition = null)
    {
        $this->groupDefinition = $groupDefinition;
        return $this;
    }

    /**
     * Gets as inputPopulationId
     *
     * The id of a population element in this measure that provides the input for this population criteria. In most cases, the scoring structure of the measure implies specific relationships (e.g. the Numerator uses the Denominator as the source in a proportion scoring). In some cases, however, multiple possible choices exist and must be resolved explicitly. For example in a ratio measure with multiple initial populations, the denominator must specify which population should be used as the starting point.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getInputPopulationId()
    {
        return $this->inputPopulationId;
    }

    /**
     * Sets a new inputPopulationId
     *
     * The id of a population element in this measure that provides the input for this population criteria. In most cases, the scoring structure of the measure implies specific relationships (e.g. the Numerator uses the Denominator as the source in a proportion scoring). In some cases, however, multiple possible choices exist and must be resolved explicitly. For example in a ratio measure with multiple initial populations, the denominator must specify which population should be used as the starting point.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $inputPopulationId
     * @return self
     */
    public function setInputPopulationId(?\TKusy\Hl7Fhir\R5\StringType $inputPopulationId = null)
    {
        $this->inputPopulationId = $inputPopulationId;
        return $this;
    }

    /**
     * Gets as aggregateMethod
     *
     * Specifies which method should be used to aggregate measure observation values. For most scoring types, this is implied by scoring (e.g. a proportion measure counts members of the populations). For continuous variables, however, this information must be specified to ensure correct calculation.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAggregateMethod()
    {
        return $this->aggregateMethod;
    }

    /**
     * Sets a new aggregateMethod
     *
     * Specifies which method should be used to aggregate measure observation values. For most scoring types, this is implied by scoring (e.g. a proportion measure counts members of the populations). For continuous variables, however, this information must be specified to ensure correct calculation.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $aggregateMethod
     * @return self
     */
    public function setAggregateMethod(?\TKusy\Hl7Fhir\R5\CodeableConceptType $aggregateMethod = null)
    {
        $this->aggregateMethod = $aggregateMethod;
        return $this;
    }


}

