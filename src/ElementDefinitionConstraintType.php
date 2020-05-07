<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ElementDefinitionConstraintType
 *
 * Captures constraints on each element within the resource, profile, or extension.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: ElementDefinition.Constraint
 */
class ElementDefinitionConstraintType extends BackboneElementType
{

    /**
     * Allows identification of which elements have their cardinalities impacted by the constraint. Will not be referenced for constraints that do not affect cardinality.
     *
     * @var \TKusy\Hl7FhirR4\IdType $key
     */
    private $key = null;

    /**
     * Description of why this constraint is necessary or appropriate.
     *
     * @var \TKusy\Hl7FhirR4\StringType $requirements
     */
    private $requirements = null;

    /**
     * Identifies the impact constraint violation has on the conformance of the instance.
     *
     * @var \TKusy\Hl7FhirR4\ConstraintSeverityType $severity
     */
    private $severity = null;

    /**
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     *
     * @var \TKusy\Hl7FhirR4\StringType $human
     */
    private $human = null;

    /**
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see if this constraint is met.
     *
     * @var \TKusy\Hl7FhirR4\StringType $expression
     */
    private $expression = null;

    /**
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     *
     * @var \TKusy\Hl7FhirR4\StringType $xpath
     */
    private $xpath = null;

    /**
     * A reference to the original source of the constraint, for traceability purposes.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $source
     */
    private $source = null;

    /**
     * Gets as key
     *
     * Allows identification of which elements have their cardinalities impacted by the constraint. Will not be referenced for constraints that do not affect cardinality.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * Allows identification of which elements have their cardinalities impacted by the constraint. Will not be referenced for constraints that do not affect cardinality.
     *
     * @param \TKusy\Hl7FhirR4\IdType $key
     * @return self
     */
    public function setKey(\TKusy\Hl7FhirR4\IdType $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Gets as requirements
     *
     * Description of why this constraint is necessary or appropriate.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Sets a new requirements
     *
     * Description of why this constraint is necessary or appropriate.
     *
     * @param \TKusy\Hl7FhirR4\StringType $requirements
     * @return self
     */
    public function setRequirements(\TKusy\Hl7FhirR4\StringType $requirements)
    {
        $this->requirements = $requirements;
        return $this;
    }

    /**
     * Gets as severity
     *
     * Identifies the impact constraint violation has on the conformance of the instance.
     *
     * @return \TKusy\Hl7FhirR4\ConstraintSeverityType
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Identifies the impact constraint violation has on the conformance of the instance.
     *
     * @param \TKusy\Hl7FhirR4\ConstraintSeverityType $severity
     * @return self
     */
    public function setSeverity(\TKusy\Hl7FhirR4\ConstraintSeverityType $severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as human
     *
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getHuman()
    {
        return $this->human;
    }

    /**
     * Sets a new human
     *
     * Text that can be used to describe the constraint in messages identifying that the constraint has been violated.
     *
     * @param \TKusy\Hl7FhirR4\StringType $human
     * @return self
     */
    public function setHuman(\TKusy\Hl7FhirR4\StringType $human)
    {
        $this->human = $human;
        return $this;
    }

    /**
     * Gets as expression
     *
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see if this constraint is met.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * A [FHIRPath](fhirpath.html) expression of constraint that can be executed to see if this constraint is met.
     *
     * @param \TKusy\Hl7FhirR4\StringType $expression
     * @return self
     */
    public function setExpression(\TKusy\Hl7FhirR4\StringType $expression)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Gets as xpath
     *
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * Sets a new xpath
     *
     * An XPath expression of constraint that can be executed to see if this constraint is met.
     *
     * @param \TKusy\Hl7FhirR4\StringType $xpath
     * @return self
     */
    public function setXpath(\TKusy\Hl7FhirR4\StringType $xpath)
    {
        $this->xpath = $xpath;
        return $this;
    }

    /**
     * Gets as source
     *
     * A reference to the original source of the constraint, for traceability purposes.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * A reference to the original source of the constraint, for traceability purposes.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7FhirR4\CanonicalType $source)
    {
        $this->source = $source;
        return $this;
    }


}

