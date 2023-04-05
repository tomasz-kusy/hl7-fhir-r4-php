<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureStratifierType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.Stratifier
 */
class MeasureStratifierType extends BackboneElementType
{

    /**
     * An identifier that is unique within the Measure allowing linkage to the equivalent item in a MeasureReport resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * Indicates a meaning for the stratifier. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The human readable description of this stratifier criteria.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * An expression that specifies the criteria for the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
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
     * A component of the stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureComponentType[] $component
     */
    private $component = null;

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
     * Indicates a meaning for the stratifier. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
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
     * Indicates a meaning for the stratifier. This can be as simple as a unique identifier, or it can establish meaning in a broader context by drawing from a terminology, allowing stratifiers to be correlated across measures.
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
     * The human readable description of this stratifier criteria.
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
     * The human readable description of this stratifier criteria.
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
     * An expression that specifies the criteria for the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
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
     * An expression that specifies the criteria for the stratifier. This is typically the name of an expression defined within a referenced library, but it may also be a path to a stratifier element.
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
     * Adds as component
     *
     * A component of the stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MeasureComponentType $component
     */
    public function addToComponent(\TKusy\Hl7Fhir\R5\MeasureComponentType $component)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * isset component
     *
     * A component of the stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponent($index)
    {
        return isset($this->component[$index]);
    }

    /**
     * unset component
     *
     * A component of the stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponent($index)
    {
        unset($this->component[$index]);
    }

    /**
     * Gets as component
     *
     * A component of the stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureComponentType[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * A component of the stratifier criteria for the measure report, specified as either the name of a valid CQL expression defined within a referenced library or a valid FHIR Resource Path.
     *
     * @param \TKusy\Hl7Fhir\R5\MeasureComponentType[] $component
     * @return self
     */
    public function setComponent(array $component = null)
    {
        $this->component = $component;
        return $this;
    }


}

