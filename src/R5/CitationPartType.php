<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationPartType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Part
 */
class CitationPartType extends BackboneElementType
{

    /**
     * The kind of component.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The specification of the component.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * The citation for the full article or artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $baseCitation
     */
    private $baseCitation = null;

    /**
     * Gets as type
     *
     * The kind of component.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The kind of component.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as value
     *
     * The specification of the component.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The specification of the component.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(?\TKusy\Hl7Fhir\R5\StringType $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as baseCitation
     *
     * The citation for the full article or artifact.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getBaseCitation()
    {
        return $this->baseCitation;
    }

    /**
     * Sets a new baseCitation
     *
     * The citation for the full article or artifact.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $baseCitation
     * @return self
     */
    public function setBaseCitation(?\TKusy\Hl7Fhir\R5\ReferenceType $baseCitation = null)
    {
        $this->baseCitation = $baseCitation;
        return $this;
    }


}

