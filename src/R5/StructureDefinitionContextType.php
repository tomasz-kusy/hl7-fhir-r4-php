<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing StructureDefinitionContextType
 *
 * A definition of a FHIR structure. This resource is used to describe the underlying resources, data types defined in FHIR, and also for describing extensions and constraints on resources and data types.
 * XSD Type: StructureDefinition.Context
 */
class StructureDefinitionContextType extends BackboneElementType
{

    /**
     * Defines how to interpret the expression that defines what the context of the extension is.
     *
     * @var \TKusy\Hl7Fhir\R5\ExtensionContextTypeType $type
     */
    private $type = null;

    /**
     * An expression that defines where an extension can be used in resources.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $expression
     */
    private $expression = null;

    /**
     * Gets as type
     *
     * Defines how to interpret the expression that defines what the context of the extension is.
     *
     * @return \TKusy\Hl7Fhir\R5\ExtensionContextTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Defines how to interpret the expression that defines what the context of the extension is.
     *
     * @param \TKusy\Hl7Fhir\R5\ExtensionContextTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\ExtensionContextTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as expression
     *
     * An expression that defines where an extension can be used in resources.
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
     * An expression that defines where an extension can be used in resources.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $expression
     * @return self
     */
    public function setExpression(\TKusy\Hl7Fhir\R5\StringType $expression)
    {
        $this->expression = $expression;
        return $this;
    }


}

