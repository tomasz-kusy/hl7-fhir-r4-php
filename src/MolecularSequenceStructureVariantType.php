<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MolecularSequenceStructureVariantType
 *
 * Raw data describing a biological sequence.
 * XSD Type: MolecularSequence.StructureVariant
 */
class MolecularSequenceStructureVariantType extends BackboneElementType
{

    /**
     * Information about chromosome structure variation DNA change type.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $variantType
     */
    private $variantType = null;

    /**
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @var bool $exact
     */
    private $exact = null;

    /**
     * Length of the variant chromosome.
     *
     * @var \integer $length
     */
    private $length = null;

    /**
     * Structural variant outer.
     *
     * @var \TKusy\Hl7FhirR4\MolecularSequenceOuterType $outer
     */
    private $outer = null;

    /**
     * Structural variant inner.
     *
     * @var \TKusy\Hl7FhirR4\MolecularSequenceInnerType $inner
     */
    private $inner = null;

    /**
     * Gets as variantType
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getVariantType()
    {
        return $this->variantType;
    }

    /**
     * Sets a new variantType
     *
     * Information about chromosome structure variation DNA change type.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $variantType
     * @return self
     */
    public function setVariantType(\TKusy\Hl7FhirR4\CodeableConceptType $variantType)
    {
        $this->variantType = $variantType;
        return $this;
    }

    /**
     * Gets as exact
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @return bool
     */
    public function getExact()
    {
        return $this->exact;
    }

    /**
     * Sets a new exact
     *
     * Used to indicate if the outer and inner start-end values have the same meaning.
     *
     * @param bool $exact
     * @return self
     */
    public function setExact($exact)
    {
        $this->exact = $exact;
        return $this;
    }

    /**
     * Gets as length
     *
     * Length of the variant chromosome.
     *
     * @return \integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * Length of the variant chromosome.
     *
     * @param \integer $length
     * @return self
     */
    public function setLength(\integer $length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as outer
     *
     * Structural variant outer.
     *
     * @return \TKusy\Hl7FhirR4\MolecularSequenceOuterType
     */
    public function getOuter()
    {
        return $this->outer;
    }

    /**
     * Sets a new outer
     *
     * Structural variant outer.
     *
     * @param \TKusy\Hl7FhirR4\MolecularSequenceOuterType $outer
     * @return self
     */
    public function setOuter(\TKusy\Hl7FhirR4\MolecularSequenceOuterType $outer)
    {
        $this->outer = $outer;
        return $this;
    }

    /**
     * Gets as inner
     *
     * Structural variant inner.
     *
     * @return \TKusy\Hl7FhirR4\MolecularSequenceInnerType
     */
    public function getInner()
    {
        return $this->inner;
    }

    /**
     * Sets a new inner
     *
     * Structural variant inner.
     *
     * @param \TKusy\Hl7FhirR4\MolecularSequenceInnerType $inner
     * @return self
     */
    public function setInner(\TKusy\Hl7FhirR4\MolecularSequenceInnerType $inner)
    {
        $this->inner = $inner;
        return $this;
    }


}

