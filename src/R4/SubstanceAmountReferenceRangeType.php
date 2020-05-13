<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstanceAmountReferenceRangeType
 *
 * Chemical substances are a single substance type whose primary defining element is the molecular structure. Chemical substances shall be defined on the basis of their complete covalent molecular structure; the presence of a salt (counter-ion) and/or solvates (water, alcohols) is also captured. Purity, grade, physical form or particle size are not taken into account in the definition of a chemical substance or in the assignment of a Substance ID.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: SubstanceAmount.ReferenceRange
 */
class SubstanceAmountReferenceRangeType extends BackboneElementType
{

    /**
     * Lower limit possible or expected.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $lowLimit
     */
    private $lowLimit = null;

    /**
     * Upper limit possible or expected.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $highLimit
     */
    private $highLimit = null;

    /**
     * Gets as lowLimit
     *
     * Lower limit possible or expected.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getLowLimit()
    {
        return $this->lowLimit;
    }

    /**
     * Sets a new lowLimit
     *
     * Lower limit possible or expected.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $lowLimit
     * @return self
     */
    public function setLowLimit(\TKusy\Hl7Fhir\R4\QuantityType $lowLimit)
    {
        $this->lowLimit = $lowLimit;
        return $this;
    }

    /**
     * Gets as highLimit
     *
     * Upper limit possible or expected.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getHighLimit()
    {
        return $this->highLimit;
    }

    /**
     * Sets a new highLimit
     *
     * Upper limit possible or expected.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $highLimit
     * @return self
     */
    public function setHighLimit(\TKusy\Hl7Fhir\R4\QuantityType $highLimit)
    {
        $this->highLimit = $highLimit;
        return $this;
    }


}

