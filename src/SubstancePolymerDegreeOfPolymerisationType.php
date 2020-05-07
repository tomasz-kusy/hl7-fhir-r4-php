<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstancePolymerDegreeOfPolymerisationType
 *
 * Todo.
 * XSD Type: SubstancePolymer.DegreeOfPolymerisation
 */
class SubstancePolymerDegreeOfPolymerisationType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $degree
     */
    private $degree = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceAmountType $amount
     */
    private $amount = null;

    /**
     * Gets as degree
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets a new degree
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $degree
     * @return self
     */
    public function setDegree(\TKusy\Hl7FhirR4\CodeableConceptType $degree)
    {
        $this->degree = $degree;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceAmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceAmountType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7FhirR4\SubstanceAmountType $amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

