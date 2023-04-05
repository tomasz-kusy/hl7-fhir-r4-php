<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExplanationOfBenefitProcedureType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.Procedure
 */
class ExplanationOfBenefitProcedureType extends BackboneElementType
{

    /**
     * A number to uniquely identify procedure entries.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * When the condition was observed or the relative ranking.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Date and optionally time the procedure was performed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $procedureCodeableConcept
     */
    private $procedureCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $procedureReference
     */
    private $procedureReference = null;

    /**
     * Unique Device Identifiers associated with this line item.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $udi
     */
    private $udi = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify procedure entries.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A number to uniquely identify procedure entries.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R5\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Adds as type
     *
     * When the condition was observed or the relative ranking.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * When the condition was observed or the relative ranking.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * When the condition was observed or the relative ranking.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * When the condition was observed or the relative ranking.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * When the condition was observed or the relative ranking.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as date
     *
     * Date and optionally time the procedure was performed.
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
     * Date and optionally time the procedure was performed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as procedureCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getProcedureCodeableConcept()
    {
        return $this->procedureCodeableConcept;
    }

    /**
     * Sets a new procedureCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $procedureCodeableConcept
     * @return self
     */
    public function setProcedureCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $procedureCodeableConcept = null)
    {
        $this->procedureCodeableConcept = $procedureCodeableConcept;
        return $this;
    }

    /**
     * Gets as procedureReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getProcedureReference()
    {
        return $this->procedureReference;
    }

    /**
     * Sets a new procedureReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $procedureReference
     * @return self
     */
    public function setProcedureReference(?\TKusy\Hl7Fhir\R5\ReferenceType $procedureReference = null)
    {
        $this->procedureReference = $procedureReference;
        return $this;
    }

    /**
     * Adds as udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $udi
     */
    public function addToUdi(\TKusy\Hl7Fhir\R5\ReferenceType $udi)
    {
        $this->udi[] = $udi;
        return $this;
    }

    /**
     * isset udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUdi($index)
    {
        return isset($this->udi[$index]);
    }

    /**
     * unset udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUdi($index)
    {
        unset($this->udi[$index]);
    }

    /**
     * Gets as udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * Sets a new udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $udi
     * @return self
     */
    public function setUdi(array $udi = null)
    {
        $this->udi = $udi;
        return $this;
    }


}

