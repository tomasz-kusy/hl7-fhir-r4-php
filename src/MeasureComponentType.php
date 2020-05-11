<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MeasureComponentType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.Component
 */
class MeasureComponentType extends BackboneElementType
{

    /**
     * Indicates a meaning for the stratifier component. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The human readable description of this stratifier criteria component.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * An expression that specifies the criteria for this component of the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
     *
     * @var \TKusy\Hl7FhirR4\ExpressionType $criteria
     */
    private $criteria = null;

    /**
     * Gets as code
     *
     * Indicates a meaning for the stratifier component. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
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
     * Indicates a meaning for the stratifier component. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
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
     * The human readable description of this stratifier criteria component.
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
     * The human readable description of this stratifier criteria component.
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
     * An expression that specifies the criteria for this component of the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
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
     * An expression that specifies the criteria for this component of the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
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

