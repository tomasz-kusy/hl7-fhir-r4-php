<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClinicalUseDefinitionType
 *
 * A single issue - either an indication, contraindication, interaction or an undesirable effect for a medicinal product, medication, device or procedure.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ClinicalUseDefinition
 */
class ClinicalUseDefinitionType extends DomainResourceType
{

    /**
     * Business identifier for this issue.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * indication | contraindication | interaction | undesirable-effect | warning.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionTypeType $type
     */
    private $type = null;

    /**
     * A categorisation of the issue, primarily for dividing warnings into subject heading areas such as "Pregnancy and Lactation", "Overdose", "Effects on Ability to Drive and Use Machines".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * The medication, product, substance, device, procedure etc. for which this is an indication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     */
    private $subject = null;

    /**
     * Whether this is a current issue or one that has been retired etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * Specifics for when this is a contraindication.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionContraindicationType $contraindication
     */
    private $contraindication = null;

    /**
     * Specifics for when this is an indication.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionIndicationType $indication
     */
    private $indication = null;

    /**
     * Specifics for when this is an interaction.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractionType $interaction
     */
    private $interaction = null;

    /**
     * The population group to which this applies.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $population
     */
    private $population = null;

    /**
     * Logic used by the clinical use definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $library
     */
    private $library = null;

    /**
     * Describe the possible undesirable effects (negative outcomes) from the use of the medicinal product as treatment.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionUndesirableEffectType $undesirableEffect
     */
    private $undesirableEffect = null;

    /**
     * A critical piece of information about environmental, health or physical risks or hazards that serve as caution to the user. For example 'Do not operate heavy machinery', 'May cause drowsiness', or 'Get medical advice/attention if you feel unwell'.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionWarningType $warning
     */
    private $warning = null;

    /**
     * Adds as identifier
     *
     * Business identifier for this issue.
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
     * Business identifier for this issue.
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
     * Business identifier for this issue.
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
     * Business identifier for this issue.
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
     * Business identifier for this issue.
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
     * Gets as type
     *
     * indication | contraindication | interaction | undesirable-effect | warning.
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * indication | contraindication | interaction | undesirable-effect | warning.
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\ClinicalUseDefinitionTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as category
     *
     * A categorisation of the issue, primarily for dividing warnings into subject heading areas such as "Pregnancy and Lactation", "Overdose", "Effects on Ability to Drive and Use Machines".
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A categorisation of the issue, primarily for dividing warnings into subject heading areas such as "Pregnancy and Lactation", "Overdose", "Effects on Ability to Drive and Use Machines".
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
     * A categorisation of the issue, primarily for dividing warnings into subject heading areas such as "Pregnancy and Lactation", "Overdose", "Effects on Ability to Drive and Use Machines".
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
     * A categorisation of the issue, primarily for dividing warnings into subject heading areas such as "Pregnancy and Lactation", "Overdose", "Effects on Ability to Drive and Use Machines".
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A categorisation of the issue, primarily for dividing warnings into subject heading areas such as "Pregnancy and Lactation", "Overdose", "Effects on Ability to Drive and Use Machines".
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as subject
     *
     * The medication, product, substance, device, procedure etc. for which this is an indication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * The medication, product, substance, device, procedure etc. for which this is an indication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * The medication, product, substance, device, procedure etc. for which this is an indication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * The medication, product, substance, device, procedure etc. for which this is an indication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The medication, product, substance, device, procedure etc. for which this is an indication.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as status
     *
     * Whether this is a current issue or one that has been retired etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Whether this is a current issue or one that has been retired etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as contraindication
     *
     * Specifics for when this is a contraindication.
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionContraindicationType
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * Sets a new contraindication
     *
     * Specifics for when this is a contraindication.
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionContraindicationType $contraindication
     * @return self
     */
    public function setContraindication(?\TKusy\Hl7Fhir\R5\ClinicalUseDefinitionContraindicationType $contraindication = null)
    {
        $this->contraindication = $contraindication;
        return $this;
    }

    /**
     * Gets as indication
     *
     * Specifics for when this is an indication.
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionIndicationType
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Sets a new indication
     *
     * Specifics for when this is an indication.
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionIndicationType $indication
     * @return self
     */
    public function setIndication(?\TKusy\Hl7Fhir\R5\ClinicalUseDefinitionIndicationType $indication = null)
    {
        $this->indication = $indication;
        return $this;
    }

    /**
     * Gets as interaction
     *
     * Specifics for when this is an interaction.
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractionType
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Sets a new interaction
     *
     * Specifics for when this is an interaction.
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractionType $interaction
     * @return self
     */
    public function setInteraction(?\TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractionType $interaction = null)
    {
        $this->interaction = $interaction;
        return $this;
    }

    /**
     * Adds as population
     *
     * The population group to which this applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $population
     */
    public function addToPopulation(\TKusy\Hl7Fhir\R5\ReferenceType $population)
    {
        $this->population[] = $population;
        return $this;
    }

    /**
     * isset population
     *
     * The population group to which this applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPopulation($index)
    {
        return isset($this->population[$index]);
    }

    /**
     * unset population
     *
     * The population group to which this applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPopulation($index)
    {
        unset($this->population[$index]);
    }

    /**
     * Gets as population
     *
     * The population group to which this applies.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Sets a new population
     *
     * The population group to which this applies.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $population
     * @return self
     */
    public function setPopulation(array $population = null)
    {
        $this->population = $population;
        return $this;
    }

    /**
     * Adds as library
     *
     * Logic used by the clinical use definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $library
     */
    public function addToLibrary(\TKusy\Hl7Fhir\R5\CanonicalType $library)
    {
        $this->library[] = $library;
        return $this;
    }

    /**
     * isset library
     *
     * Logic used by the clinical use definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLibrary($index)
    {
        return isset($this->library[$index]);
    }

    /**
     * unset library
     *
     * Logic used by the clinical use definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLibrary($index)
    {
        unset($this->library[$index]);
    }

    /**
     * Gets as library
     *
     * Logic used by the clinical use definition.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * Sets a new library
     *
     * Logic used by the clinical use definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $library
     * @return self
     */
    public function setLibrary(array $library = null)
    {
        $this->library = $library;
        return $this;
    }

    /**
     * Gets as undesirableEffect
     *
     * Describe the possible undesirable effects (negative outcomes) from the use of the medicinal product as treatment.
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionUndesirableEffectType
     */
    public function getUndesirableEffect()
    {
        return $this->undesirableEffect;
    }

    /**
     * Sets a new undesirableEffect
     *
     * Describe the possible undesirable effects (negative outcomes) from the use of the medicinal product as treatment.
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionUndesirableEffectType $undesirableEffect
     * @return self
     */
    public function setUndesirableEffect(?\TKusy\Hl7Fhir\R5\ClinicalUseDefinitionUndesirableEffectType $undesirableEffect = null)
    {
        $this->undesirableEffect = $undesirableEffect;
        return $this;
    }

    /**
     * Gets as warning
     *
     * A critical piece of information about environmental, health or physical risks or hazards that serve as caution to the user. For example 'Do not operate heavy machinery', 'May cause drowsiness', or 'Get medical advice/attention if you feel unwell'.
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionWarningType
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Sets a new warning
     *
     * A critical piece of information about environmental, health or physical risks or hazards that serve as caution to the user. For example 'Do not operate heavy machinery', 'May cause drowsiness', or 'Get medical advice/attention if you feel unwell'.
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionWarningType $warning
     * @return self
     */
    public function setWarning(?\TKusy\Hl7Fhir\R5\ClinicalUseDefinitionWarningType $warning = null)
    {
        $this->warning = $warning;
        return $this;
    }


}

