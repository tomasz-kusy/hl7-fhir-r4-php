<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionOfficialType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceDefinition.Official
 */
class SubstanceDefinitionOfficialType extends BackboneElementType
{

    /**
     * Which authority uses this official name.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $authority
     */
    private $authority = null;

    /**
     * The status of the official name, for example 'draft', 'active', 'retired'.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * Date of the official name change.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * Gets as authority
     *
     * Which authority uses this official name.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Sets a new authority
     *
     * Which authority uses this official name.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $authority
     * @return self
     */
    public function setAuthority(?\TKusy\Hl7Fhir\R5\CodeableConceptType $authority = null)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the official name, for example 'draft', 'active', 'retired'.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the official name, for example 'draft', 'active', 'retired'.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as date
     *
     * Date of the official name change.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date of the official name change.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }


}

