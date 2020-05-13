<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ContractSecurityLabelType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.SecurityLabel
 */
class ContractSecurityLabelType extends BackboneElementType
{

    /**
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @var \TKusy\Hl7Fhir\R4\UnsignedIntType[] $number
     */
    private $number = null;

    /**
     * Security label privacy tag that species the level of confidentiality protection required for this term and/or term elements.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $classification
     */
    private $classification = null;

    /**
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType[] $category
     */
    private $category = null;

    /**
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType[] $control
     */
    private $control = null;

    /**
     * Adds as number
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType $number
     */
    public function addToNumber(\TKusy\Hl7Fhir\R4\UnsignedIntType $number)
    {
        $this->number[] = $number;
        return $this;
    }

    /**
     * isset number
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNumber($index)
    {
        return isset($this->number[$index]);
    }

    /**
     * unset number
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNumber($index)
    {
        unset($this->number[$index]);
    }

    /**
     * Gets as number
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @return \TKusy\Hl7Fhir\R4\UnsignedIntType[]
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Number used to link this term or term element to the applicable Security Label.
     *
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType[] $number
     * @return self
     */
    public function setNumber(array $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as classification
     *
     * Security label privacy tag that species the level of confidentiality protection required for this term and/or term elements.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Security label privacy tag that species the level of confidentiality protection required for this term and/or term elements.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType $classification
     * @return self
     */
    public function setClassification(\TKusy\Hl7Fhir\R4\CodingType $classification)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Adds as category
     *
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodingType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R4\CodingType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Security label privacy tag that species the applicable privacy and security policies governing this term and/or term elements.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as control
     *
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodingType $control
     */
    public function addToControl(\TKusy\Hl7Fhir\R4\CodingType $control)
    {
        $this->control[] = $control;
        return $this;
    }

    /**
     * isset control
     *
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControl($index)
    {
        return isset($this->control[$index]);
    }

    /**
     * unset control
     *
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControl($index)
    {
        unset($this->control[$index]);
    }

    /**
     * Gets as control
     *
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType[]
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Sets a new control
     *
     * Security label privacy tag that species the manner in which term and/or term elements are to be protected.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType[] $control
     * @return self
     */
    public function setControl(array $control)
    {
        $this->control = $control;
        return $this;
    }


}

