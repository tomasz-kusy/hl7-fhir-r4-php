<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeKineticsType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Kinetics
 */
class MedicationKnowledgeKineticsType extends BackboneElementType
{

    /**
     * The drug concentration measured at certain discrete points in time.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType[] $areaUnderCurve
     */
    private $areaUnderCurve = null;

    /**
     * The median lethal dose of a drug.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType[] $lethalDose50
     */
    private $lethalDose50 = null;

    /**
     * The time required for any specified property (e.g., the concentration of a substance in the body) to decrease by half.
     *
     * @var \TKusy\Hl7FhirR4\DurationType $halfLifePeriod
     */
    private $halfLifePeriod = null;

    /**
     * Adds as areaUnderCurve
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\QuantityType $areaUnderCurve
     */
    public function addToAreaUnderCurve(\TKusy\Hl7FhirR4\QuantityType $areaUnderCurve)
    {
        $this->areaUnderCurve[] = $areaUnderCurve;
        return $this;
    }

    /**
     * isset areaUnderCurve
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAreaUnderCurve($index)
    {
        return isset($this->areaUnderCurve[$index]);
    }

    /**
     * unset areaUnderCurve
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAreaUnderCurve($index)
    {
        unset($this->areaUnderCurve[$index]);
    }

    /**
     * Gets as areaUnderCurve
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType[]
     */
    public function getAreaUnderCurve()
    {
        return $this->areaUnderCurve;
    }

    /**
     * Sets a new areaUnderCurve
     *
     * The drug concentration measured at certain discrete points in time.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType[] $areaUnderCurve
     * @return self
     */
    public function setAreaUnderCurve(array $areaUnderCurve)
    {
        $this->areaUnderCurve = $areaUnderCurve;
        return $this;
    }

    /**
     * Adds as lethalDose50
     *
     * The median lethal dose of a drug.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\QuantityType $lethalDose50
     */
    public function addToLethalDose50(\TKusy\Hl7FhirR4\QuantityType $lethalDose50)
    {
        $this->lethalDose50[] = $lethalDose50;
        return $this;
    }

    /**
     * isset lethalDose50
     *
     * The median lethal dose of a drug.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLethalDose50($index)
    {
        return isset($this->lethalDose50[$index]);
    }

    /**
     * unset lethalDose50
     *
     * The median lethal dose of a drug.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLethalDose50($index)
    {
        unset($this->lethalDose50[$index]);
    }

    /**
     * Gets as lethalDose50
     *
     * The median lethal dose of a drug.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType[]
     */
    public function getLethalDose50()
    {
        return $this->lethalDose50;
    }

    /**
     * Sets a new lethalDose50
     *
     * The median lethal dose of a drug.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType[] $lethalDose50
     * @return self
     */
    public function setLethalDose50(array $lethalDose50)
    {
        $this->lethalDose50 = $lethalDose50;
        return $this;
    }

    /**
     * Gets as halfLifePeriod
     *
     * The time required for any specified property (e.g., the concentration of a substance in the body) to decrease by half.
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getHalfLifePeriod()
    {
        return $this->halfLifePeriod;
    }

    /**
     * Sets a new halfLifePeriod
     *
     * The time required for any specified property (e.g., the concentration of a substance in the body) to decrease by half.
     *
     * @param \TKusy\Hl7FhirR4\DurationType $halfLifePeriod
     * @return self
     */
    public function setHalfLifePeriod(\TKusy\Hl7FhirR4\DurationType $halfLifePeriod)
    {
        $this->halfLifePeriod = $halfLifePeriod;
        return $this;
    }


}

