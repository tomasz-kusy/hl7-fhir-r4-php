<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExpressionType
 *
 * A expression that is evaluated in a specified context and returns a value. The context of use of the expression must specify the context in which the expression is evaluated, and how the result of the expression is used.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Expression
 */
class ExpressionType extends DataTypeType
{

    /**
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * A short name assigned to the expression to allow for multiple reuse of the expression in the context where it is defined.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $name
     */
    private $name = null;

    /**
     * The media type of the language for the expression.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $language
     */
    private $language = null;

    /**
     * An expression in the specified language that returns a value.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $expression
     */
    private $expression = null;

    /**
     * A URI that defines where the expression is found.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $reference
     */
    private $reference = null;

    /**
     * Gets as description
     *
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as name
     *
     * A short name assigned to the expression to allow for multiple reuse of the expression in the context where it is defined.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A short name assigned to the expression to allow for multiple reuse of the expression in the context where it is defined.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\CodeType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as language
     *
     * The media type of the language for the expression.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The media type of the language for the expression.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $language
     * @return self
     */
    public function setLanguage(?\TKusy\Hl7Fhir\R5\CodeType $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as expression
     *
     * An expression in the specified language that returns a value.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * An expression in the specified language that returns a value.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $expression
     * @return self
     */
    public function setExpression(?\TKusy\Hl7Fhir\R5\StringType $expression = null)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Gets as reference
     *
     * A URI that defines where the expression is found.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A URI that defines where the expression is found.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $reference
     * @return self
     */
    public function setReference(?\TKusy\Hl7Fhir\R5\UriType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }


}

