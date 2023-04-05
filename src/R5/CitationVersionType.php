<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationVersionType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.Version
 */
class CitationVersionType extends BackboneElementType
{

    /**
     * The version number or other version identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Citation for the main version of the cited artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $baseCitation
     */
    private $baseCitation = null;

    /**
     * Gets as value
     *
     * The version number or other version identifier.
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
     * The version number or other version identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as baseCitation
     *
     * Citation for the main version of the cited artifact.
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
     * Citation for the main version of the cited artifact.
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

