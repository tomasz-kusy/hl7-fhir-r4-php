<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstancePolymerType
 *
 * Todo.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubstancePolymer
 */
class SubstancePolymerType extends DomainResourceType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $class
     */
    private $class = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $geometry
     */
    private $geometry = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $copolymerConnectivity
     */
    private $copolymerConnectivity = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType[] $modification
     */
    private $modification = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\SubstancePolymerMonomerSetType[] $monomerSet
     */
    private $monomerSet = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\SubstancePolymerRepeatType[] $repeat
     */
    private $repeat = null;

    /**
     * Gets as class
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $class
     * @return self
     */
    public function setClass(\TKusy\Hl7Fhir\R4\CodeableConceptType $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as geometry
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getGeometry()
    {
        return $this->geometry;
    }

    /**
     * Sets a new geometry
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $geometry
     * @return self
     */
    public function setGeometry(\TKusy\Hl7Fhir\R4\CodeableConceptType $geometry)
    {
        $this->geometry = $geometry;
        return $this;
    }

    /**
     * Adds as copolymerConnectivity
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $copolymerConnectivity
     */
    public function addToCopolymerConnectivity(\TKusy\Hl7Fhir\R4\CodeableConceptType $copolymerConnectivity)
    {
        $this->copolymerConnectivity[] = $copolymerConnectivity;
        return $this;
    }

    /**
     * isset copolymerConnectivity
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCopolymerConnectivity($index)
    {
        return isset($this->copolymerConnectivity[$index]);
    }

    /**
     * unset copolymerConnectivity
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCopolymerConnectivity($index)
    {
        unset($this->copolymerConnectivity[$index]);
    }

    /**
     * Gets as copolymerConnectivity
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getCopolymerConnectivity()
    {
        return $this->copolymerConnectivity;
    }

    /**
     * Sets a new copolymerConnectivity
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $copolymerConnectivity
     * @return self
     */
    public function setCopolymerConnectivity(array $copolymerConnectivity)
    {
        $this->copolymerConnectivity = $copolymerConnectivity;
        return $this;
    }

    /**
     * Adds as modification
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\StringType $modification
     */
    public function addToModification(\TKusy\Hl7Fhir\R4\StringType $modification)
    {
        $this->modification[] = $modification;
        return $this;
    }

    /**
     * isset modification
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModification($index)
    {
        return isset($this->modification[$index]);
    }

    /**
     * unset modification
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModification($index)
    {
        unset($this->modification[$index]);
    }

    /**
     * Gets as modification
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType[]
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * Sets a new modification
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType[] $modification
     * @return self
     */
    public function setModification(array $modification)
    {
        $this->modification = $modification;
        return $this;
    }

    /**
     * Adds as monomerSet
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\SubstancePolymerMonomerSetType $monomerSet
     */
    public function addToMonomerSet(\TKusy\Hl7Fhir\R4\SubstancePolymerMonomerSetType $monomerSet)
    {
        $this->monomerSet[] = $monomerSet;
        return $this;
    }

    /**
     * isset monomerSet
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMonomerSet($index)
    {
        return isset($this->monomerSet[$index]);
    }

    /**
     * unset monomerSet
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMonomerSet($index)
    {
        unset($this->monomerSet[$index]);
    }

    /**
     * Gets as monomerSet
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\SubstancePolymerMonomerSetType[]
     */
    public function getMonomerSet()
    {
        return $this->monomerSet;
    }

    /**
     * Sets a new monomerSet
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\SubstancePolymerMonomerSetType[] $monomerSet
     * @return self
     */
    public function setMonomerSet(array $monomerSet)
    {
        $this->monomerSet = $monomerSet;
        return $this;
    }

    /**
     * Adds as repeat
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\SubstancePolymerRepeatType $repeat
     */
    public function addToRepeat(\TKusy\Hl7Fhir\R4\SubstancePolymerRepeatType $repeat)
    {
        $this->repeat[] = $repeat;
        return $this;
    }

    /**
     * isset repeat
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRepeat($index)
    {
        return isset($this->repeat[$index]);
    }

    /**
     * unset repeat
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRepeat($index)
    {
        unset($this->repeat[$index]);
    }

    /**
     * Gets as repeat
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\SubstancePolymerRepeatType[]
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * Sets a new repeat
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\SubstancePolymerRepeatType[] $repeat
     * @return self
     */
    public function setRepeat(array $repeat)
    {
        $this->repeat = $repeat;
        return $this;
    }


}

