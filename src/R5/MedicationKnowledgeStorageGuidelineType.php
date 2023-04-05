<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgeStorageGuidelineType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.StorageGuideline
 */
class MedicationKnowledgeStorageGuidelineType extends BackboneElementType
{

    /**
     * Reference to additional information about the storage guidelines.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $reference
     */
    private $reference = null;

    /**
     * Additional notes about the storage.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Duration that the medication remains stable if the environmentalSetting is respected.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $stabilityDuration
     */
    private $stabilityDuration = null;

    /**
     * Describes a setting/value on the environment for the adequate storage of the medication and other substances. Environment settings may involve temperature, humidity, or exposure to light.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeEnvironmentalSettingType[] $environmentalSetting
     */
    private $environmentalSetting = null;

    /**
     * Gets as reference
     *
     * Reference to additional information about the storage guidelines.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Reference to additional information about the storage guidelines.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $reference
     * @return self
     */
    public function setReference(?\TKusy\Hl7Fhir\R5\UriType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Adds as note
     *
     * Additional notes about the storage.
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
     * Additional notes about the storage.
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
     * Additional notes about the storage.
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
     * Additional notes about the storage.
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
     * Additional notes about the storage.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as stabilityDuration
     *
     * Duration that the medication remains stable if the environmentalSetting is respected.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getStabilityDuration()
    {
        return $this->stabilityDuration;
    }

    /**
     * Sets a new stabilityDuration
     *
     * Duration that the medication remains stable if the environmentalSetting is respected.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $stabilityDuration
     * @return self
     */
    public function setStabilityDuration(?\TKusy\Hl7Fhir\R5\DurationType $stabilityDuration = null)
    {
        $this->stabilityDuration = $stabilityDuration;
        return $this;
    }

    /**
     * Adds as environmentalSetting
     *
     * Describes a setting/value on the environment for the adequate storage of the medication and other substances. Environment settings may involve temperature, humidity, or exposure to light.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeEnvironmentalSettingType $environmentalSetting
     */
    public function addToEnvironmentalSetting(\TKusy\Hl7Fhir\R5\MedicationKnowledgeEnvironmentalSettingType $environmentalSetting)
    {
        $this->environmentalSetting[] = $environmentalSetting;
        return $this;
    }

    /**
     * isset environmentalSetting
     *
     * Describes a setting/value on the environment for the adequate storage of the medication and other substances. Environment settings may involve temperature, humidity, or exposure to light.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvironmentalSetting($index)
    {
        return isset($this->environmentalSetting[$index]);
    }

    /**
     * unset environmentalSetting
     *
     * Describes a setting/value on the environment for the adequate storage of the medication and other substances. Environment settings may involve temperature, humidity, or exposure to light.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvironmentalSetting($index)
    {
        unset($this->environmentalSetting[$index]);
    }

    /**
     * Gets as environmentalSetting
     *
     * Describes a setting/value on the environment for the adequate storage of the medication and other substances. Environment settings may involve temperature, humidity, or exposure to light.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeEnvironmentalSettingType[]
     */
    public function getEnvironmentalSetting()
    {
        return $this->environmentalSetting;
    }

    /**
     * Sets a new environmentalSetting
     *
     * Describes a setting/value on the environment for the adequate storage of the medication and other substances. Environment settings may involve temperature, humidity, or exposure to light.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeEnvironmentalSettingType[] $environmentalSetting
     * @return self
     */
    public function setEnvironmentalSetting(array $environmentalSetting = null)
    {
        $this->environmentalSetting = $environmentalSetting;
        return $this;
    }


}

