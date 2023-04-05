<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstancePolymerType
 *
 * Properties of a substance specific to it being a polymer.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubstancePolymer
 */
class SubstancePolymerType extends DomainResourceType
{

    /**
     * A business idenfier for this polymer, but typically this is handled by a SubstanceDefinition identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Overall type of the polymer.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $class
     */
    private $class = null;

    /**
     * Polymer geometry, e.g. linear, branched, cross-linked, network or dendritic.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $geometry
     */
    private $geometry = null;

    /**
     * Descrtibes the copolymer sequence type (polymer connectivity).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $copolymerConnectivity
     */
    private $copolymerConnectivity = null;

    /**
     * Todo - this is intended to connect to a repeating full modification structure, also used by Protein and Nucleic Acid . String is just a placeholder.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $modification
     */
    private $modification = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstancePolymerMonomerSetType[] $monomerSet
     */
    private $monomerSet = null;

    /**
     * Specifies and quantifies the repeated units and their configuration.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstancePolymerRepeatType[] $repeat
     */
    private $repeat = null;

    /**
     * Gets as identifier
     *
     * A business idenfier for this polymer, but typically this is handled by a SubstanceDefinition identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A business idenfier for this polymer, but typically this is handled by a SubstanceDefinition identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as class
     *
     * Overall type of the polymer.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * Overall type of the polymer.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $class
     * @return self
     */
    public function setClass(?\TKusy\Hl7Fhir\R5\CodeableConceptType $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as geometry
     *
     * Polymer geometry, e.g. linear, branched, cross-linked, network or dendritic.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getGeometry()
    {
        return $this->geometry;
    }

    /**
     * Sets a new geometry
     *
     * Polymer geometry, e.g. linear, branched, cross-linked, network or dendritic.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $geometry
     * @return self
     */
    public function setGeometry(?\TKusy\Hl7Fhir\R5\CodeableConceptType $geometry = null)
    {
        $this->geometry = $geometry;
        return $this;
    }

    /**
     * Adds as copolymerConnectivity
     *
     * Descrtibes the copolymer sequence type (polymer connectivity).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $copolymerConnectivity
     */
    public function addToCopolymerConnectivity(\TKusy\Hl7Fhir\R5\CodeableConceptType $copolymerConnectivity)
    {
        $this->copolymerConnectivity[] = $copolymerConnectivity;
        return $this;
    }

    /**
     * isset copolymerConnectivity
     *
     * Descrtibes the copolymer sequence type (polymer connectivity).
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
     * Descrtibes the copolymer sequence type (polymer connectivity).
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
     * Descrtibes the copolymer sequence type (polymer connectivity).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCopolymerConnectivity()
    {
        return $this->copolymerConnectivity;
    }

    /**
     * Sets a new copolymerConnectivity
     *
     * Descrtibes the copolymer sequence type (polymer connectivity).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $copolymerConnectivity
     * @return self
     */
    public function setCopolymerConnectivity(array $copolymerConnectivity = null)
    {
        $this->copolymerConnectivity = $copolymerConnectivity;
        return $this;
    }

    /**
     * Gets as modification
     *
     * Todo - this is intended to connect to a repeating full modification structure, also used by Protein and Nucleic Acid . String is just a placeholder.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * Sets a new modification
     *
     * Todo - this is intended to connect to a repeating full modification structure, also used by Protein and Nucleic Acid . String is just a placeholder.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $modification
     * @return self
     */
    public function setModification(?\TKusy\Hl7Fhir\R5\StringType $modification = null)
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
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerMonomerSetType $monomerSet
     */
    public function addToMonomerSet(\TKusy\Hl7Fhir\R5\SubstancePolymerMonomerSetType $monomerSet)
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
     * @return \TKusy\Hl7Fhir\R5\SubstancePolymerMonomerSetType[]
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
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerMonomerSetType[] $monomerSet
     * @return self
     */
    public function setMonomerSet(array $monomerSet = null)
    {
        $this->monomerSet = $monomerSet;
        return $this;
    }

    /**
     * Adds as repeat
     *
     * Specifies and quantifies the repeated units and their configuration.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerRepeatType $repeat
     */
    public function addToRepeat(\TKusy\Hl7Fhir\R5\SubstancePolymerRepeatType $repeat)
    {
        $this->repeat[] = $repeat;
        return $this;
    }

    /**
     * isset repeat
     *
     * Specifies and quantifies the repeated units and their configuration.
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
     * Specifies and quantifies the repeated units and their configuration.
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
     * Specifies and quantifies the repeated units and their configuration.
     *
     * @return \TKusy\Hl7Fhir\R5\SubstancePolymerRepeatType[]
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * Sets a new repeat
     *
     * Specifies and quantifies the repeated units and their configuration.
     *
     * @param \TKusy\Hl7Fhir\R5\SubstancePolymerRepeatType[] $repeat
     * @return self
     */
    public function setRepeat(array $repeat = null)
    {
        $this->repeat = $repeat;
        return $this;
    }


}

