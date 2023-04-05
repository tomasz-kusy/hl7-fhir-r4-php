<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionOrderType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: NutritionOrder
 */
class NutritionOrderType extends DomainResourceType
{

    /**
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiates
     */
    private $instantiates = null;

    /**
     * A plan or request that is fulfilled in whole or in part by this nutrition order.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A shared identifier common to all nutrition orders that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * The workflow status of the nutrition order/request.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestStatusType $status
     */
    private $status = null;

    /**
     * Indicates the level of authority/intentionality associated with the NutrionOrder and where the request fits into the workflow chain.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestIntentType $intent
     */
    private $intent = null;

    /**
     * Indicates how quickly the Nutrition Order should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * The person or set of individuals who needs the nutrition order for an oral diet, nutritional supplement and/or enteral or formula feeding.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Information to support fulfilling (i.e. dispensing or administering) of the nutrition, for example, patient height and weight).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * The date and time that this nutrition order was requested.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $dateTime
     */
    private $dateTime = null;

    /**
     * The practitioner that holds legal responsibility for ordering the diet, nutritional supplement, or formula feedings.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $orderer
     */
    private $orderer = null;

    /**
     * The specified desired performer of the nutrition order.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $performer
     */
    private $performer = null;

    /**
     * A link to a record of allergies or intolerances which should be included in the nutrition order.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $allergyIntolerance
     */
    private $allergyIntolerance = null;

    /**
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $foodPreferenceModifier
     */
    private $foodPreferenceModifier = null;

    /**
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or Gluten-Free. While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $excludeFoodModifier
     */
    private $excludeFoodModifier = null;

    /**
     * This modifier is used to convey whether a food item is allowed to be brought in by the patient and/or family. If set to true, indicates that the receiving system does not need to supply the food item.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $outsideFoodAllowed
     */
    private $outsideFoodAllowed = null;

    /**
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionOrderOralDietType $oralDiet
     */
    private $oralDiet = null;

    /**
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionOrderSupplementType[] $supplement
     */
    private $supplement = null;

    /**
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or stoma that delivers nutrition distal to the oral cavity.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionOrderEnteralFormulaType $enteralFormula
     */
    private $enteralFormula = null;

    /**
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifiers assigned to this order by the order sender or by the order receiver.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * isset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesCanonical($index)
    {
        return isset($this->instantiatesCanonical[$index]);
    }

    /**
     * unset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesCanonical($index)
    {
        unset($this->instantiatesCanonical[$index]);
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Adds as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7Fhir\R5\UriType $instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * isset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesUri($index)
    {
        return isset($this->instantiatesUri[$index]);
    }

    /**
     * unset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesUri($index)
    {
        unset($this->instantiatesUri[$index]);
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri = null)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Adds as instantiates
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiates
     */
    public function addToInstantiates(\TKusy\Hl7Fhir\R5\UriType $instantiates)
    {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * isset instantiates
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiates($index)
    {
        return isset($this->instantiates[$index]);
    }

    /**
     * unset instantiates
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiates($index)
    {
        unset($this->instantiates[$index]);
    }

    /**
     * Gets as instantiates
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getInstantiates()
    {
        return $this->instantiates;
    }

    /**
     * Sets a new instantiates
     *
     * The URL pointing to a protocol, guideline, orderset or other definition that is adhered to in whole or in part by this NutritionOrder.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $instantiates
     * @return self
     */
    public function setInstantiates(array $instantiates = null)
    {
        $this->instantiates = $instantiates;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this nutrition order.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this nutrition order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this nutrition order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this nutrition order.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this nutrition order.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as groupIdentifier
     *
     * A shared identifier common to all nutrition orders that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

    /**
     * Sets a new groupIdentifier
     *
     * A shared identifier common to all nutrition orders that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier
     * @return self
     */
    public function setGroupIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier = null)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The workflow status of the nutrition order/request.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The workflow status of the nutrition order/request.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\RequestStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Indicates the level of authority/intentionality associated with the NutrionOrder and where the request fits into the workflow chain.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestIntentType
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Sets a new intent
     *
     * Indicates the level of authority/intentionality associated with the NutrionOrder and where the request fits into the workflow chain.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7Fhir\R5\RequestIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the Nutrition Order should be addressed with respect to other requests.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestPriorityType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Indicates how quickly the Nutrition Order should be addressed with respect to other requests.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(?\TKusy\Hl7Fhir\R5\RequestPriorityType $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The person or set of individuals who needs the nutrition order for an oral diet, nutritional supplement and/or enteral or formula feeding.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The person or set of individuals who needs the nutrition order for an oral diet, nutritional supplement and/or enteral or formula feeding.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * An encounter that provides additional information about the healthcare context in which this request is made.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * An encounter that provides additional information about the healthcare context in which this request is made.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Adds as supportingInformation
     *
     * Information to support fulfilling (i.e. dispensing or administering) of the nutrition, for example, patient height and weight).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * isset supportingInformation
     *
     * Information to support fulfilling (i.e. dispensing or administering) of the nutrition, for example, patient height and weight).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInformation($index)
    {
        return isset($this->supportingInformation[$index]);
    }

    /**
     * unset supportingInformation
     *
     * Information to support fulfilling (i.e. dispensing or administering) of the nutrition, for example, patient height and weight).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInformation($index)
    {
        unset($this->supportingInformation[$index]);
    }

    /**
     * Gets as supportingInformation
     *
     * Information to support fulfilling (i.e. dispensing or administering) of the nutrition, for example, patient height and weight).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Information to support fulfilling (i.e. dispensing or administering) of the nutrition, for example, patient height and weight).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation = null)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Gets as dateTime
     *
     * The date and time that this nutrition order was requested.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * The date and time that this nutrition order was requested.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $dateTime
     * @return self
     */
    public function setDateTime(\TKusy\Hl7Fhir\R5\DateTimeType $dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Gets as orderer
     *
     * The practitioner that holds legal responsibility for ordering the diet, nutritional supplement, or formula feedings.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOrderer()
    {
        return $this->orderer;
    }

    /**
     * Sets a new orderer
     *
     * The practitioner that holds legal responsibility for ordering the diet, nutritional supplement, or formula feedings.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $orderer
     * @return self
     */
    public function setOrderer(?\TKusy\Hl7Fhir\R5\ReferenceType $orderer = null)
    {
        $this->orderer = $orderer;
        return $this;
    }

    /**
     * Adds as performer
     *
     * The specified desired performer of the nutrition order.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\CodeableReferenceType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * The specified desired performer of the nutrition order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformer($index)
    {
        return isset($this->performer[$index]);
    }

    /**
     * unset performer
     *
     * The specified desired performer of the nutrition order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformer($index)
    {
        unset($this->performer[$index]);
    }

    /**
     * Gets as performer
     *
     * The specified desired performer of the nutrition order.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The specified desired performer of the nutrition order.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as allergyIntolerance
     *
     * A link to a record of allergies or intolerances which should be included in the nutrition order.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $allergyIntolerance
     */
    public function addToAllergyIntolerance(\TKusy\Hl7Fhir\R5\ReferenceType $allergyIntolerance)
    {
        $this->allergyIntolerance[] = $allergyIntolerance;
        return $this;
    }

    /**
     * isset allergyIntolerance
     *
     * A link to a record of allergies or intolerances which should be included in the nutrition order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllergyIntolerance($index)
    {
        return isset($this->allergyIntolerance[$index]);
    }

    /**
     * unset allergyIntolerance
     *
     * A link to a record of allergies or intolerances which should be included in the nutrition order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllergyIntolerance($index)
    {
        unset($this->allergyIntolerance[$index]);
    }

    /**
     * Gets as allergyIntolerance
     *
     * A link to a record of allergies or intolerances which should be included in the nutrition order.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAllergyIntolerance()
    {
        return $this->allergyIntolerance;
    }

    /**
     * Sets a new allergyIntolerance
     *
     * A link to a record of allergies or intolerances which should be included in the nutrition order.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $allergyIntolerance
     * @return self
     */
    public function setAllergyIntolerance(array $allergyIntolerance = null)
    {
        $this->allergyIntolerance = $allergyIntolerance;
        return $this;
    }

    /**
     * Adds as foodPreferenceModifier
     *
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $foodPreferenceModifier
     */
    public function addToFoodPreferenceModifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $foodPreferenceModifier)
    {
        $this->foodPreferenceModifier[] = $foodPreferenceModifier;
        return $this;
    }

    /**
     * isset foodPreferenceModifier
     *
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFoodPreferenceModifier($index)
    {
        return isset($this->foodPreferenceModifier[$index]);
    }

    /**
     * unset foodPreferenceModifier
     *
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFoodPreferenceModifier($index)
    {
        unset($this->foodPreferenceModifier[$index]);
    }

    /**
     * Gets as foodPreferenceModifier
     *
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getFoodPreferenceModifier()
    {
        return $this->foodPreferenceModifier;
    }

    /**
     * Sets a new foodPreferenceModifier
     *
     * This modifier is used to convey order-specific modifiers about the type of food that should be given. These can be derived from patient allergies, intolerances, or preferences such as Halal, Vegan or Kosher. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $foodPreferenceModifier
     * @return self
     */
    public function setFoodPreferenceModifier(array $foodPreferenceModifier = null)
    {
        $this->foodPreferenceModifier = $foodPreferenceModifier;
        return $this;
    }

    /**
     * Adds as excludeFoodModifier
     *
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or Gluten-Free. While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $excludeFoodModifier
     */
    public function addToExcludeFoodModifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $excludeFoodModifier)
    {
        $this->excludeFoodModifier[] = $excludeFoodModifier;
        return $this;
    }

    /**
     * isset excludeFoodModifier
     *
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or Gluten-Free. While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludeFoodModifier($index)
    {
        return isset($this->excludeFoodModifier[$index]);
    }

    /**
     * unset excludeFoodModifier
     *
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or Gluten-Free. While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludeFoodModifier($index)
    {
        unset($this->excludeFoodModifier[$index]);
    }

    /**
     * Gets as excludeFoodModifier
     *
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or Gluten-Free. While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getExcludeFoodModifier()
    {
        return $this->excludeFoodModifier;
    }

    /**
     * Sets a new excludeFoodModifier
     *
     * This modifier is used to convey Order-specific modifier about the type of oral food or oral fluids that should not be given. These can be derived from patient allergies, intolerances, or preferences such as No Red Meat, No Soy or No Wheat or Gluten-Free. While it should not be necessary to repeat allergy or intolerance information captured in the referenced AllergyIntolerance resource in the excludeFoodModifier, this element may be used to convey additional specificity related to foods that should be eliminated from the patient’s diet for any reason. This modifier applies to the entire nutrition order inclusive of the oral diet, nutritional supplements and enteral formula feedings.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $excludeFoodModifier
     * @return self
     */
    public function setExcludeFoodModifier(array $excludeFoodModifier = null)
    {
        $this->excludeFoodModifier = $excludeFoodModifier;
        return $this;
    }

    /**
     * Gets as outsideFoodAllowed
     *
     * This modifier is used to convey whether a food item is allowed to be brought in by the patient and/or family. If set to true, indicates that the receiving system does not need to supply the food item.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getOutsideFoodAllowed()
    {
        return $this->outsideFoodAllowed;
    }

    /**
     * Sets a new outsideFoodAllowed
     *
     * This modifier is used to convey whether a food item is allowed to be brought in by the patient and/or family. If set to true, indicates that the receiving system does not need to supply the food item.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $outsideFoodAllowed
     * @return self
     */
    public function setOutsideFoodAllowed(?\TKusy\Hl7Fhir\R5\BooleanType $outsideFoodAllowed = null)
    {
        $this->outsideFoodAllowed = $outsideFoodAllowed;
        return $this;
    }

    /**
     * Gets as oralDiet
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionOrderOralDietType
     */
    public function getOralDiet()
    {
        return $this->oralDiet;
    }

    /**
     * Sets a new oralDiet
     *
     * Diet given orally in contrast to enteral (tube) feeding.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderOralDietType $oralDiet
     * @return self
     */
    public function setOralDiet(?\TKusy\Hl7Fhir\R5\NutritionOrderOralDietType $oralDiet = null)
    {
        $this->oralDiet = $oralDiet;
        return $this;
    }

    /**
     * Adds as supplement
     *
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderSupplementType $supplement
     */
    public function addToSupplement(\TKusy\Hl7Fhir\R5\NutritionOrderSupplementType $supplement)
    {
        $this->supplement[] = $supplement;
        return $this;
    }

    /**
     * isset supplement
     *
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplement($index)
    {
        return isset($this->supplement[$index]);
    }

    /**
     * unset supplement
     *
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplement($index)
    {
        unset($this->supplement[$index]);
    }

    /**
     * Gets as supplement
     *
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionOrderSupplementType[]
     */
    public function getSupplement()
    {
        return $this->supplement;
    }

    /**
     * Sets a new supplement
     *
     * Oral nutritional products given in order to add further nutritional value to the patient's diet.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderSupplementType[] $supplement
     * @return self
     */
    public function setSupplement(array $supplement = null)
    {
        $this->supplement = $supplement;
        return $this;
    }

    /**
     * Gets as enteralFormula
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or stoma that delivers nutrition distal to the oral cavity.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionOrderEnteralFormulaType
     */
    public function getEnteralFormula()
    {
        return $this->enteralFormula;
    }

    /**
     * Sets a new enteralFormula
     *
     * Feeding provided through the gastrointestinal tract via a tube, catheter, or stoma that delivers nutrition distal to the oral cavity.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderEnteralFormulaType $enteralFormula
     * @return self
     */
    public function setEnteralFormula(?\TKusy\Hl7Fhir\R5\NutritionOrderEnteralFormulaType $enteralFormula = null)
    {
        $this->enteralFormula = $enteralFormula;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Comments made about the {{title}} by the requester, performer, subject or other participants.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

