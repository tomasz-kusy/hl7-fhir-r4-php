<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClinicalUseDefinitionInteractionType
 *
 * A single issue - either an indication, contraindication, interaction or an undesirable effect for a medicinal product, medication, device or procedure.
 * XSD Type: ClinicalUseDefinition.Interaction
 */
class ClinicalUseDefinitionInteractionType extends BackboneElementType
{

    /**
     * The specific medication, product, food, substance etc. or laboratory test that interacts.
     *
     * @var \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractantType[] $interactant
     */
    private $interactant = null;

    /**
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction, drug-lab test interaction.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The effect of the interaction, for example "reduced gastric absorption of primary medication".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $effect
     */
    private $effect = null;

    /**
     * The incidence of the interaction, e.g. theoretical, observed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $incidence
     */
    private $incidence = null;

    /**
     * Actions for managing the interaction.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $management
     */
    private $management = null;

    /**
     * Adds as interactant
     *
     * The specific medication, product, food, substance etc. or laboratory test that interacts.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractantType $interactant
     */
    public function addToInteractant(\TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractantType $interactant)
    {
        $this->interactant[] = $interactant;
        return $this;
    }

    /**
     * isset interactant
     *
     * The specific medication, product, food, substance etc. or laboratory test that interacts.
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
     * The specific medication, product, food, substance etc. or laboratory test that interacts.
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
     * The specific medication, product, food, substance etc. or laboratory test that interacts.
     *
     * @return \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractantType[]
     */
    public function getInteractant()
    {
        return $this->interactant;
    }

    /**
     * Sets a new interactant
     *
     * The specific medication, product, food, substance etc. or laboratory test that interacts.
     *
     * @param \TKusy\Hl7Fhir\R5\ClinicalUseDefinitionInteractantType[] $interactant
     * @return self
     */
    public function setInteractant(array $interactant = null)
    {
        $this->interactant = $interactant;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction, drug-lab test interaction.
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
     * The type of the interaction e.g. drug-drug interaction, drug-food interaction, drug-lab test interaction.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as effect
     *
     * The effect of the interaction, for example "reduced gastric absorption of primary medication".
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $effect
     * @return self
     */
    public function setEffect(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $effect = null)
    {
        $this->effect = $effect;
        return $this;
    }

    /**
     * Gets as incidence
     *
     * The incidence of the interaction, e.g. theoretical, observed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $incidence
     * @return self
     */
    public function setIncidence(?\TKusy\Hl7Fhir\R5\CodeableConceptType $incidence = null)
    {
        $this->incidence = $incidence;
        return $this;
    }

    /**
     * Adds as management
     *
     * Actions for managing the interaction.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $management
     */
    public function addToManagement(\TKusy\Hl7Fhir\R5\CodeableConceptType $management)
    {
        $this->management[] = $management;
        return $this;
    }

    /**
     * isset management
     *
     * Actions for managing the interaction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManagement($index)
    {
        return isset($this->management[$index]);
    }

    /**
     * unset management
     *
     * Actions for managing the interaction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManagement($index)
    {
        unset($this->management[$index]);
    }

    /**
     * Gets as management
     *
     * Actions for managing the interaction.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $management
     * @return self
     */
    public function setManagement(array $management = null)
    {
        $this->management = $management;
        return $this;
    }


}

