<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceDefinitionRelationshipType
 *
 * The detailed description of a substance, typically at a level beyond what is used for prescribing.
 * XSD Type: SubstanceDefinition.Relationship
 */
class SubstanceDefinitionRelationshipType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $substanceDefinitionReference
     */
    private $substanceDefinitionReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $substanceDefinitionCodeableConcept
     */
    private $substanceDefinitionCodeableConcept = null;

    /**
     * For example "salt to parent", "active moiety", "starting material", "polymorph", "impurity of".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * For example where an enzyme strongly bonds with a particular substance, this is a defining relationship for that enzyme, out of several possible substance relationships.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isDefining
     */
    private $isDefining = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $amountQuantity
     */
    private $amountQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $amountRatio
     */
    private $amountRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $amountString
     */
    private $amountString = null;

    /**
     * For use when the numeric has an uncertain range.
     *
     * @var \TKusy\Hl7Fhir\R5\RatioType $ratioHighLimitAmount
     */
    private $ratioHighLimitAmount = null;

    /**
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $comparator
     */
    private $comparator = null;

    /**
     * Supporting literature.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as substanceDefinitionReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubstanceDefinitionReference()
    {
        return $this->substanceDefinitionReference;
    }

    /**
     * Sets a new substanceDefinitionReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $substanceDefinitionReference
     * @return self
     */
    public function setSubstanceDefinitionReference(?\TKusy\Hl7Fhir\R5\ReferenceType $substanceDefinitionReference = null)
    {
        $this->substanceDefinitionReference = $substanceDefinitionReference;
        return $this;
    }

    /**
     * Gets as substanceDefinitionCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubstanceDefinitionCodeableConcept()
    {
        return $this->substanceDefinitionCodeableConcept;
    }

    /**
     * Sets a new substanceDefinitionCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $substanceDefinitionCodeableConcept
     * @return self
     */
    public function setSubstanceDefinitionCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $substanceDefinitionCodeableConcept = null)
    {
        $this->substanceDefinitionCodeableConcept = $substanceDefinitionCodeableConcept;
        return $this;
    }

    /**
     * Gets as type
     *
     * For example "salt to parent", "active moiety", "starting material", "polymorph", "impurity of".
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
     * For example "salt to parent", "active moiety", "starting material", "polymorph", "impurity of".
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as isDefining
     *
     * For example where an enzyme strongly bonds with a particular substance, this is a defining relationship for that enzyme, out of several possible substance relationships.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
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
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isDefining
     * @return self
     */
    public function setIsDefining(?\TKusy\Hl7Fhir\R5\BooleanType $isDefining = null)
    {
        $this->isDefining = $isDefining;
        return $this;
    }

    /**
     * Gets as amountQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getAmountQuantity()
    {
        return $this->amountQuantity;
    }

    /**
     * Sets a new amountQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $amountQuantity
     * @return self
     */
    public function setAmountQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $amountQuantity = null)
    {
        $this->amountQuantity = $amountQuantity;
        return $this;
    }

    /**
     * Gets as amountRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getAmountRatio()
    {
        return $this->amountRatio;
    }

    /**
     * Sets a new amountRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $amountRatio
     * @return self
     */
    public function setAmountRatio(?\TKusy\Hl7Fhir\R5\RatioType $amountRatio = null)
    {
        $this->amountRatio = $amountRatio;
        return $this;
    }

    /**
     * Gets as amountString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAmountString()
    {
        return $this->amountString;
    }

    /**
     * Sets a new amountString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $amountString
     * @return self
     */
    public function setAmountString(?\TKusy\Hl7Fhir\R5\StringType $amountString = null)
    {
        $this->amountString = $amountString;
        return $this;
    }

    /**
     * Gets as ratioHighLimitAmount
     *
     * For use when the numeric has an uncertain range.
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getRatioHighLimitAmount()
    {
        return $this->ratioHighLimitAmount;
    }

    /**
     * Sets a new ratioHighLimitAmount
     *
     * For use when the numeric has an uncertain range.
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $ratioHighLimitAmount
     * @return self
     */
    public function setRatioHighLimitAmount(?\TKusy\Hl7Fhir\R5\RatioType $ratioHighLimitAmount = null)
    {
        $this->ratioHighLimitAmount = $ratioHighLimitAmount;
        return $this;
    }

    /**
     * Gets as comparator
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * Sets a new comparator
     *
     * An operator for the amount, for example "average", "approximately", "less than".
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $comparator
     * @return self
     */
    public function setComparator(?\TKusy\Hl7Fhir\R5\CodeableConceptType $comparator = null)
    {
        $this->comparator = $comparator;
        return $this;
    }

    /**
     * Adds as source
     *
     * Supporting literature.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7Fhir\R5\ReferenceType $source)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source = null)
    {
        $this->source = $source;
        return $this;
    }


}

