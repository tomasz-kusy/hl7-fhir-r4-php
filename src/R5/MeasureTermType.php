<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureTermType
 *
 * The Measure resource provides the definition of a quality measure.
 * XSD Type: Measure.Term
 */
class MeasureTermType extends BackboneElementType
{

    /**
     * A codeable representation of the defined term.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Provides a definition for the term as used within the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $definition
     */
    private $definition = null;

    /**
     * Gets as code
     *
     * A codeable representation of the defined term.
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
     * A codeable representation of the defined term.
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
     * Gets as definition
     *
     * Provides a definition for the term as used within the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * Provides a definition for the term as used within the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $definition
     * @return self
     */
    public function setDefinition(?\TKusy\Hl7Fhir\R5\MarkdownType $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }


}

