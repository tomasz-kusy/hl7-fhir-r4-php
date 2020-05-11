<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ContractAssetType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.Asset
 */
class ContractAssetType extends BackboneElementType
{

    /**
     * Differentiates the kind of the asset .
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $scope
     */
    private $scope = null;

    /**
     * Target entity type about which the term may be concerned.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Associated entities.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $typeReference
     */
    private $typeReference = null;

    /**
     * May be a subtype or part of an offered asset.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $subtype
     */
    private $subtype = null;

    /**
     * Specifies the applicability of the term to an asset resource instance, and instances it refers to orinstances that refer to it, and/or are owned by the offeree.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $relationship
     */
    private $relationship = null;

    /**
     * Circumstance of the asset.
     *
     * @var \TKusy\Hl7FhirR4\ContractContextType[] $context
     */
    private $context = null;

    /**
     * Description of the quality and completeness of the asset that imay be a factor in its valuation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $condition
     */
    private $condition = null;

    /**
     * Type of Asset availability for use or ownership.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $periodType
     */
    private $periodType = null;

    /**
     * Asset relevant contractual time period.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType[] $period
     */
    private $period = null;

    /**
     * Time period of asset use.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType[] $usePeriod
     */
    private $usePeriod = null;

    /**
     * Clause or question text (Prose Object) concerning the asset in a linked form, such as a QuestionnaireResponse used in the formation of the contract.
     *
     * @var \TKusy\Hl7FhirR4\StringType $text
     */
    private $text = null;

    /**
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $linkId
     */
    private $linkId = null;

    /**
     * Response to assets.
     *
     * @var \TKusy\Hl7FhirR4\ContractAnswerType[] $answer
     */
    private $answer = null;

    /**
     * Security labels that protects the asset.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType[] $securityLabelNumber
     */
    private $securityLabelNumber = null;

    /**
     * Contract Valued Item List.
     *
     * @var \TKusy\Hl7FhirR4\ContractValuedItemType[] $valuedItem
     */
    private $valuedItem = null;

    /**
     * Gets as scope
     *
     * Differentiates the kind of the asset .
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * Differentiates the kind of the asset .
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $scope
     * @return self
     */
    public function setScope(\TKusy\Hl7FhirR4\CodeableConceptType $scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Adds as type
     *
     * Target entity type about which the term may be concerned.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Target entity type about which the term may be concerned.
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
     * Target entity type about which the term may be concerned.
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
     * Target entity type about which the term may be concerned.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Target entity type about which the term may be concerned.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as typeReference
     *
     * Associated entities.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $typeReference
     */
    public function addToTypeReference(\TKusy\Hl7FhirR4\ReferenceType $typeReference)
    {
        $this->typeReference[] = $typeReference;
        return $this;
    }

    /**
     * isset typeReference
     *
     * Associated entities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTypeReference($index)
    {
        return isset($this->typeReference[$index]);
    }

    /**
     * unset typeReference
     *
     * Associated entities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTypeReference($index)
    {
        unset($this->typeReference[$index]);
    }

    /**
     * Gets as typeReference
     *
     * Associated entities.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getTypeReference()
    {
        return $this->typeReference;
    }

    /**
     * Sets a new typeReference
     *
     * Associated entities.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $typeReference
     * @return self
     */
    public function setTypeReference(array $typeReference)
    {
        $this->typeReference = $typeReference;
        return $this;
    }

    /**
     * Adds as subtype
     *
     * May be a subtype or part of an offered asset.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $subtype
     */
    public function addToSubtype(\TKusy\Hl7FhirR4\CodeableConceptType $subtype)
    {
        $this->subtype[] = $subtype;
        return $this;
    }

    /**
     * isset subtype
     *
     * May be a subtype or part of an offered asset.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubtype($index)
    {
        return isset($this->subtype[$index]);
    }

    /**
     * unset subtype
     *
     * May be a subtype or part of an offered asset.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubtype($index)
    {
        unset($this->subtype[$index]);
    }

    /**
     * Gets as subtype
     *
     * May be a subtype or part of an offered asset.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Sets a new subtype
     *
     * May be a subtype or part of an offered asset.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $subtype
     * @return self
     */
    public function setSubtype(array $subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * Specifies the applicability of the term to an asset resource instance, and instances it refers to orinstances that refer to it, and/or are owned by the offeree.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * Specifies the applicability of the term to an asset resource instance, and instances it refers to orinstances that refer to it, and/or are owned by the offeree.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7FhirR4\CodingType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Adds as context
     *
     * Circumstance of the asset.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContractContextType $context
     */
    public function addToContext(\TKusy\Hl7FhirR4\ContractContextType $context)
    {
        $this->context[] = $context;
        return $this;
    }

    /**
     * isset context
     *
     * Circumstance of the asset.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContext($index)
    {
        return isset($this->context[$index]);
    }

    /**
     * unset context
     *
     * Circumstance of the asset.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContext($index)
    {
        unset($this->context[$index]);
    }

    /**
     * Gets as context
     *
     * Circumstance of the asset.
     *
     * @return \TKusy\Hl7FhirR4\ContractContextType[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Circumstance of the asset.
     *
     * @param \TKusy\Hl7FhirR4\ContractContextType[] $context
     * @return self
     */
    public function setContext(array $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Gets as condition
     *
     * Description of the quality and completeness of the asset that imay be a factor in its valuation.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * Description of the quality and completeness of the asset that imay be a factor in its valuation.
     *
     * @param \TKusy\Hl7FhirR4\StringType $condition
     * @return self
     */
    public function setCondition(\TKusy\Hl7FhirR4\StringType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as periodType
     *
     * Type of Asset availability for use or ownership.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $periodType
     */
    public function addToPeriodType(\TKusy\Hl7FhirR4\CodeableConceptType $periodType)
    {
        $this->periodType[] = $periodType;
        return $this;
    }

    /**
     * isset periodType
     *
     * Type of Asset availability for use or ownership.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriodType($index)
    {
        return isset($this->periodType[$index]);
    }

    /**
     * unset periodType
     *
     * Type of Asset availability for use or ownership.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriodType($index)
    {
        unset($this->periodType[$index]);
    }

    /**
     * Gets as periodType
     *
     * Type of Asset availability for use or ownership.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getPeriodType()
    {
        return $this->periodType;
    }

    /**
     * Sets a new periodType
     *
     * Type of Asset availability for use or ownership.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $periodType
     * @return self
     */
    public function setPeriodType(array $periodType)
    {
        $this->periodType = $periodType;
        return $this;
    }

    /**
     * Adds as period
     *
     * Asset relevant contractual time period.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     */
    public function addToPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * Asset relevant contractual time period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * Asset relevant contractual time period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * Asset relevant contractual time period.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Asset relevant contractual time period.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType[] $period
     * @return self
     */
    public function setPeriod(array $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as usePeriod
     *
     * Time period of asset use.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PeriodType $usePeriod
     */
    public function addToUsePeriod(\TKusy\Hl7FhirR4\PeriodType $usePeriod)
    {
        $this->usePeriod[] = $usePeriod;
        return $this;
    }

    /**
     * isset usePeriod
     *
     * Time period of asset use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsePeriod($index)
    {
        return isset($this->usePeriod[$index]);
    }

    /**
     * unset usePeriod
     *
     * Time period of asset use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsePeriod($index)
    {
        unset($this->usePeriod[$index]);
    }

    /**
     * Gets as usePeriod
     *
     * Time period of asset use.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType[]
     */
    public function getUsePeriod()
    {
        return $this->usePeriod;
    }

    /**
     * Sets a new usePeriod
     *
     * Time period of asset use.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType[] $usePeriod
     * @return self
     */
    public function setUsePeriod(array $usePeriod)
    {
        $this->usePeriod = $usePeriod;
        return $this;
    }

    /**
     * Gets as text
     *
     * Clause or question text (Prose Object) concerning the asset in a linked form, such as a QuestionnaireResponse used in the formation of the contract.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Clause or question text (Prose Object) concerning the asset in a linked form, such as a QuestionnaireResponse used in the formation of the contract.
     *
     * @param \TKusy\Hl7FhirR4\StringType $text
     * @return self
     */
    public function setText(\TKusy\Hl7FhirR4\StringType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as linkId
     *
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $linkId
     */
    public function addToLinkId(\TKusy\Hl7FhirR4\StringType $linkId)
    {
        $this->linkId[] = $linkId;
        return $this;
    }

    /**
     * isset linkId
     *
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkId($index)
    {
        return isset($this->linkId[$index]);
    }

    /**
     * unset linkId
     *
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkId($index)
    {
        unset($this->linkId[$index]);
    }

    /**
     * Gets as linkId
     *
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * Id [identifier??] of the clause or question text about the asset in the referenced form or QuestionnaireResponse.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $linkId
     * @return self
     */
    public function setLinkId(array $linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Adds as answer
     *
     * Response to assets.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContractAnswerType $answer
     */
    public function addToAnswer(\TKusy\Hl7FhirR4\ContractAnswerType $answer)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * isset answer
     *
     * Response to assets.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswer($index)
    {
        return isset($this->answer[$index]);
    }

    /**
     * unset answer
     *
     * Response to assets.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswer($index)
    {
        unset($this->answer[$index]);
    }

    /**
     * Gets as answer
     *
     * Response to assets.
     *
     * @return \TKusy\Hl7FhirR4\ContractAnswerType[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * Response to assets.
     *
     * @param \TKusy\Hl7FhirR4\ContractAnswerType[] $answer
     * @return self
     */
    public function setAnswer(array $answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * Adds as securityLabelNumber
     *
     * Security labels that protects the asset.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $securityLabelNumber
     */
    public function addToSecurityLabelNumber(\TKusy\Hl7FhirR4\UnsignedIntType $securityLabelNumber)
    {
        $this->securityLabelNumber[] = $securityLabelNumber;
        return $this;
    }

    /**
     * isset securityLabelNumber
     *
     * Security labels that protects the asset.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityLabelNumber($index)
    {
        return isset($this->securityLabelNumber[$index]);
    }

    /**
     * unset securityLabelNumber
     *
     * Security labels that protects the asset.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityLabelNumber($index)
    {
        unset($this->securityLabelNumber[$index]);
    }

    /**
     * Gets as securityLabelNumber
     *
     * Security labels that protects the asset.
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * Sets a new securityLabelNumber
     *
     * Security labels that protects the asset.
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType[] $securityLabelNumber
     * @return self
     */
    public function setSecurityLabelNumber(array $securityLabelNumber)
    {
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }

    /**
     * Adds as valuedItem
     *
     * Contract Valued Item List.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContractValuedItemType $valuedItem
     */
    public function addToValuedItem(\TKusy\Hl7FhirR4\ContractValuedItemType $valuedItem)
    {
        $this->valuedItem[] = $valuedItem;
        return $this;
    }

    /**
     * isset valuedItem
     *
     * Contract Valued Item List.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValuedItem($index)
    {
        return isset($this->valuedItem[$index]);
    }

    /**
     * unset valuedItem
     *
     * Contract Valued Item List.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValuedItem($index)
    {
        unset($this->valuedItem[$index]);
    }

    /**
     * Gets as valuedItem
     *
     * Contract Valued Item List.
     *
     * @return \TKusy\Hl7FhirR4\ContractValuedItemType[]
     */
    public function getValuedItem()
    {
        return $this->valuedItem;
    }

    /**
     * Sets a new valuedItem
     *
     * Contract Valued Item List.
     *
     * @param \TKusy\Hl7FhirR4\ContractValuedItemType[] $valuedItem
     * @return self
     */
    public function setValuedItem(array $valuedItem)
    {
        $this->valuedItem = $valuedItem;
        return $this;
    }


}

