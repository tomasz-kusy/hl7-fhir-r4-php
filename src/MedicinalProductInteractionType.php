<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductInteractionType
 *
 * The interactions of the medicinal product with other medicinal products, or other forms of interactions.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductInteraction
 */
class MedicinalProductInteractionType extends DomainResourceType
{

    /**
     * The medication for which this is a described interaction.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $subject
     */
    private $subject = null;

    /**
     * The interaction described.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The specific medication, food or laboratory test that interacts.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductInteractionInteractantType[] $interactant
     */
    private $interactant = null;

    /**
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction, drug-lab test interaction.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The effect of the interaction, for example "reduced gastric absorption of primary medication".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $effect
     */
    private $effect = null;

    /**
     * The incidence of the interaction, e.g. theoretical, observed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $incidence
     */
    private $incidence = null;

    /**
     * Actions for managing the interaction.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $management
     */
    private $management = null;

    /**
     * Adds as subject
     *
     * The medication for which this is a described interaction.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * The medication for which this is a described interaction.
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
     * The medication for which this is a described interaction.
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
     * The medication for which this is a described interaction.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The medication for which this is a described interaction.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as description
     *
     * The interaction described.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The interaction described.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as interactant
     *
     * The specific medication, food or laboratory test that interacts.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductInteractionInteractantType $interactant
     */
    public function addToInteractant(\TKusy\Hl7FhirR4\MedicinalProductInteractionInteractantType $interactant)
    {
        $this->interactant[] = $interactant;
        return $this;
    }

    /**
     * isset interactant
     *
     * The specific medication, food or laboratory test that interacts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInteractant($index)
    {
        return isset($this->interactant[$index]);
    }

    /**
     * unset interactant
     *
     * The specific medication, food or laboratory test that interacts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInteractant($index)
    {
        unset($this->interactant[$index]);
    }

    /**
     * Gets as interactant
     *
     * The specific medication, food or laboratory test that interacts.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductInteractionInteractantType[]
     */
    public function getInteractant()
    {
        return $this->interactant;
    }

    /**
     * Sets a new interactant
     *
     * The specific medication, food or laboratory test that interacts.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductInteractionInteractantType[] $interactant
     * @return self
     */
    public function setInteractant(array $interactant)
    {
        $this->interactant = $interactant;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction, drug-lab test interaction.
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
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction, drug-lab test interaction.
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
     * Gets as effect
     *
     * The effect of the interaction, for example "reduced gastric absorption of primary medication".
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Sets a new effect
     *
     * The effect of the interaction, for example "reduced gastric absorption of primary medication".
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $effect
     * @return self
     */
    public function setEffect(\TKusy\Hl7FhirR4\CodeableConceptType $effect)
    {
        $this->effect = $effect;
        return $this;
    }

    /**
     * Gets as incidence
     *
     * The incidence of the interaction, e.g. theoretical, observed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getIncidence()
    {
        return $this->incidence;
    }

    /**
     * Sets a new incidence
     *
     * The incidence of the interaction, e.g. theoretical, observed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $incidence
     * @return self
     */
    public function setIncidence(\TKusy\Hl7FhirR4\CodeableConceptType $incidence)
    {
        $this->incidence = $incidence;
        return $this;
    }

    /**
     * Gets as management
     *
     * Actions for managing the interaction.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * Sets a new management
     *
     * Actions for managing the interaction.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $management
     * @return self
     */
    public function setManagement(\TKusy\Hl7FhirR4\CodeableConceptType $management)
    {
        $this->management = $management;
        return $this;
    }


}

