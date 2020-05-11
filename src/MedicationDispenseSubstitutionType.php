<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationDispenseSubstitutionType
 *
 * Indicates that a medication product is to be or has been dispensed for a named person/patient. This includes a description of the medication product (supply) provided and the instructions for administering the medication. The medication dispense is the result of a pharmacy system responding to a medication order.
 * XSD Type: MedicationDispense.Substitution
 */
class MedicationDispenseSubstitutionType extends BackboneElementType
{

    /**
     * True if the dispenser dispensed a different drug or product from what was prescribed.
     *
     * @var bool $wasSubstituted
     */
    private $wasSubstituted = null;

    /**
     * A code signifying whether a different drug was dispensed from what was prescribed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Indicates the reason for the substitution (or lack of substitution) from what was prescribed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reason
     */
    private $reason = null;

    /**
     * The person or organization that has primary responsibility for the substitution.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $responsibleParty
     */
    private $responsibleParty = null;

    /**
     * Gets as wasSubstituted
     *
     * True if the dispenser dispensed a different drug or product from what was prescribed.
     *
     * @return bool
     */
    public function getWasSubstituted()
    {
        return $this->wasSubstituted;
    }

    /**
     * Sets a new wasSubstituted
     *
     * True if the dispenser dispensed a different drug or product from what was prescribed.
     *
     * @param bool $wasSubstituted
     * @return self
     */
    public function setWasSubstituted($wasSubstituted)
    {
        $this->wasSubstituted = $wasSubstituted;
        return $this;
    }

    /**
     * Gets as type
     *
     * A code signifying whether a different drug was dispensed from what was prescribed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A code signifying whether a different drug was dispensed from what was prescribed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Indicates the reason for the substitution (or lack of substitution) from what was prescribed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reason
     */
    public function addToReason(\TKusy\Hl7FhirR4\CodeableConceptType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * Indicates the reason for the substitution (or lack of substitution) from what was prescribed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * Indicates the reason for the substitution (or lack of substitution) from what was prescribed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * Indicates the reason for the substitution (or lack of substitution) from what was prescribed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Indicates the reason for the substitution (or lack of substitution) from what was prescribed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $reason
     * @return self
     */
    public function setReason(array $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Adds as responsibleParty
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $responsibleParty
     */
    public function addToResponsibleParty(\TKusy\Hl7FhirR4\ReferenceType $responsibleParty)
    {
        $this->responsibleParty[] = $responsibleParty;
        return $this;
    }

    /**
     * isset responsibleParty
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponsibleParty($index)
    {
        return isset($this->responsibleParty[$index]);
    }

    /**
     * unset responsibleParty
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponsibleParty($index)
    {
        unset($this->responsibleParty[$index]);
    }

    /**
     * Gets as responsibleParty
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getResponsibleParty()
    {
        return $this->responsibleParty;
    }

    /**
     * Sets a new responsibleParty
     *
     * The person or organization that has primary responsibility for the substitution.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $responsibleParty
     * @return self
     */
    public function setResponsibleParty(array $responsibleParty)
    {
        $this->responsibleParty = $responsibleParty;
        return $this;
    }


}

