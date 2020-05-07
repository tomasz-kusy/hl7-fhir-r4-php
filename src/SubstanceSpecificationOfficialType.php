<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceSpecificationOfficialType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Official
 */
class SubstanceSpecificationOfficialType extends BackboneElementType
{

    /**
     * Which authority uses this official name.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $authority
     */
    private $authority = null;

    /**
     * The status of the official name.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $status
     */
    private $status = null;

    /**
     * Date of official name change.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * Gets as authority
     *
     * Which authority uses this official name.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $authority
     * @return self
     */
    public function setAuthority(\TKusy\Hl7FhirR4\CodeableConceptType $authority)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the official name.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the official name.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as date
     *
     * Date of official name change.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date of official name change.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }


}

