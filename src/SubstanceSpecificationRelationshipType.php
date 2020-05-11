<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceSpecificationRelationshipType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceSpecification.Relationship
 */
class SubstanceSpecificationRelationshipType extends BackboneElementType
{

    /**
     * A pointer to another substance, as a resource or just a representational code. (choose any one of substance*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $substanceReference
     */
    private $substanceReference = null;

    /**
     * A pointer to another substance, as a resource or just a representational code. (choose any one of substance*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $substanceCodeableConcept
     */
    private $substanceCodeableConcept = null;

    /**
     * For example "salt to parent", "active moiety", "starting material".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $relationship
     */
    private $relationship = null;

    /**
     * For example where an enzyme strongly bonds with a particular substance, this is a defining relationship for that enzyme, out of several possible substance relationships.
     *
     * @var bool $isDefining
     */
    private $isDefining = null;

    /**
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $amountQuantity
     */
    private $amountQuantity = null;

    /**
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $amountRange
     */
    private $amountRange = null;

    /**
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $amountRatio
     */
    private $amountRatio = null;

    /**
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @var string $amountString
     */
    private $amountString = null;

    /**
     * For use when the numeric.
     *
     * @var \TKusy\Hl7FhirR4\RatioType $amountRatioLowLimit
     */
    private $amountRatioLowLimit = null;

    /**
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $amountType
     */
    private $amountType = null;

    /**
     * Supporting literature.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as substanceReference
     *
     * A pointer to another substance, as a resource or just a representational code. (choose any one of substance*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubstanceReference()
    {
        return $this->substanceReference;
    }

    /**
     * Sets a new substanceReference
     *
     * A pointer to another substance, as a resource or just a representational code. (choose any one of substance*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $substanceReference
     * @return self
     */
    public function setSubstanceReference(\TKusy\Hl7FhirR4\ReferenceType $substanceReference)
    {
        $this->substanceReference = $substanceReference;
        return $this;
    }

    /**
     * Gets as substanceCodeableConcept
     *
     * A pointer to another substance, as a resource or just a representational code. (choose any one of substance*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSubstanceCodeableConcept()
    {
        return $this->substanceCodeableConcept;
    }

    /**
     * Sets a new substanceCodeableConcept
     *
     * A pointer to another substance, as a resource or just a representational code. (choose any one of substance*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $substanceCodeableConcept
     * @return self
     */
    public function setSubstanceCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $substanceCodeableConcept)
    {
        $this->substanceCodeableConcept = $substanceCodeableConcept;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * For example "salt to parent", "active moiety", "starting material".
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * For example "salt to parent", "active moiety", "starting material".
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7FhirR4\CodeableConceptType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as isDefining
     *
     * For example where an enzyme strongly bonds with a particular substance, this is a defining relationship for that enzyme, out of several possible substance relationships.
     *
     * @return bool
     */
    public function getIsDefining()
    {
        return $this->isDefining;
    }

    /**
     * Sets a new isDefining
     *
     * For example where an enzyme strongly bonds with a particular substance, this is a defining relationship for that enzyme, out of several possible substance relationships.
     *
     * @param bool $isDefining
     * @return self
     */
    public function setIsDefining($isDefining)
    {
        $this->isDefining = $isDefining;
        return $this;
    }

    /**
     * Gets as amountQuantity
     *
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }

    /**
     * Sets a new amountQuantity
     *
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $amountQuantity
     * @return self
     */
    public function setAmountQuantity(\TKusy\Hl7FhirR4\QuantityType $amountQuantity)
    {
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * Gets as amountRange
     *
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getAmountRange()
    {
        return $this->amountRange;
    }

    /**
     * Sets a new amountRange
     *
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $amountRange
     * @return self
     */
    public function setAmountRange(\TKusy\Hl7FhirR4\RangeType $amountRange)
    {
        $this->amountRange = $amountRange;
        return $this;
    }

    /**
     * Gets as amountRatio
     *
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getAmountRatio()
    {
        return $this->amountRatio;
    }

    /**
     * Sets a new amountRatio
     *
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $amountRatio
     * @return self
     */
    public function setAmountRatio(\TKusy\Hl7FhirR4\RatioType $amountRatio)
    {
        $this->amountRatio = $amountRatio;
        return $this;
    }

    /**
     * Gets as amountString
     *
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @return string
     */
    public function getAmountString()
    {
        return $this->amountString;
    }

    /**
     * Sets a new amountString
     *
     * A numeric factor for the relationship, for instance to express that the salt of a substance has some percentage of the active substance in relation to some other. (choose any one of amount*, but only one)
     *
     * @param string $amountString
     * @return self
     */
    public function setAmountString($amountString)
    {
        $this->amountString = $amountString;
        return $this;
    }

    /**
     * Gets as amountRatioLowLimit
     *
     * For use when the numeric.
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getAmountRatioLowLimit()
    {
        return $this->amountRatioLowLimit;
    }

    /**
     * Sets a new amountRatioLowLimit
     *
     * For use when the numeric.
     *
     * @param \TKusy\Hl7FhirR4\RatioType $amountRatioLowLimit
     * @return self
     */
    public function setAmountRatioLowLimit(\TKusy\Hl7FhirR4\RatioType $amountRatioLowLimit)
    {
        $this->amountRatioLowLimit = $amountRatioLowLimit;
        return $this;
    }

    /**
     * Gets as amountType
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAmountType()
    {
        return $this->amountType;
    }

    /**
     * Sets a new amountType
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $amountType
     * @return self
     */
    public function setAmountType(\TKusy\Hl7FhirR4\CodeableConceptType $amountType)
    {
        $this->amountType = $amountType;
        return $this;
    }

    /**
     * Adds as source
     *
     * Supporting literature.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7FhirR4\ReferenceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Supporting literature.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * Supporting literature.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * Supporting literature.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Supporting literature.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }


}

