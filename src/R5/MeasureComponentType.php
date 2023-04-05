<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureComponentType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.Component
 */
class MeasureComponentType extends BackboneElementType
{

    /**
     * An identifier that is unique within the Measure allowing linkage to the equivalent item in a MeasureReport resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * Indicates a meaning for the stratifier component. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The human readable description of this stratifier criteria component.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * An expression that specifies the criteria for this component of the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
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
     * Gets as linkId
     *
     * An identifier that is unique within the Measure allowing linkage to the equivalent item in a MeasureReport resource.
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
     * An identifier that is unique within the Measure allowing linkage to the equivalent item in a MeasureReport resource.
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
     * Indicates a meaning for the stratifier component. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
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
     * Indicates a meaning for the stratifier component. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
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
     * The human readable description of this stratifier criteria component.
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
     * The human readable description of this stratifier criteria component.
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
     * An expression that specifies the criteria for this component of the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
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
     * An expression that specifies the criteria for this component of the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
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


}

