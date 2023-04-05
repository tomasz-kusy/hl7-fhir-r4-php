<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceReportSubjectType
 *
 * The EvidenceReport Resource is a specialized container for a collection of resources and codeable concepts, adapted to support compositions of Evidence, EvidenceVariable, and Citation resources and related concepts.
 * XSD Type: EvidenceReport.Subject
 */
class EvidenceReportSubjectType extends BackboneElementType
{

    /**
     * Characteristic.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceReportCharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Used for general notes and annotations not coded elsewhere.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as characteristic
     *
     * Characteristic.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportCharacteristicType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R5\EvidenceReportCharacteristicType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * Characteristic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristic($index)
    {
        return isset($this->characteristic[$index]);
    }

    /**
     * unset characteristic
     *
     * Characteristic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristic($index)
    {
        unset($this->characteristic[$index]);
    }

    /**
     * Gets as characteristic
     *
     * Characteristic.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceReportCharacteristicType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * Characteristic.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportCharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic = null)
    {
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Adds as note
     *
     * Used for general notes and annotations not coded elsewhere.
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
     * Used for general notes and annotations not coded elsewhere.
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
     * Used for general notes and annotations not coded elsewhere.
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
     * Used for general notes and annotations not coded elsewhere.
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
     * Used for general notes and annotations not coded elsewhere.
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

