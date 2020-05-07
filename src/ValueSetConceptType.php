<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ValueSetConceptType
 *
 * A ValueSet resource instance specifies a set of codes drawn from one or more code systems, intended for use in a particular context. Value sets link between [[[CodeSystem]]] definitions and their use in [coded elements](terminologies.html).
 * XSD Type: ValueSet.Concept
 */
class ValueSetConceptType extends BackboneElementType
{

    /**
     * Specifies a code for the concept to be included or excluded.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * The text to display to the user for this concept in the context of this valueset. If no display is provided, then applications using the value set use the display specified for the code by the system.
     *
     * @var \TKusy\Hl7FhirR4\StringType $display
     */
    private $display = null;

    /**
     * Additional representations for this concept when used in this value set - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @var \TKusy\Hl7FhirR4\ValueSetDesignationType[] $designation
     */
    private $designation = [
        
    ];

    /**
     * Gets as code
     *
     * Specifies a code for the concept to be included or excluded.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Specifies a code for the concept to be included or excluded.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as display
     *
     * The text to display to the user for this concept in the context of this valueset. If no display is provided, then applications using the value set use the display specified for the code by the system.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * The text to display to the user for this concept in the context of this valueset. If no display is provided, then applications using the value set use the display specified for the code by the system.
     *
     * @param \TKusy\Hl7FhirR4\StringType $display
     * @return self
     */
    public function setDisplay(\TKusy\Hl7FhirR4\StringType $display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Adds as designation
     *
     * Additional representations for this concept when used in this value set - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ValueSetDesignationType $designation
     */
    public function addToDesignation(\TKusy\Hl7FhirR4\ValueSetDesignationType $designation)
    {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * isset designation
     *
     * Additional representations for this concept when used in this value set - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDesignation($index)
    {
        return isset($this->designation[$index]);
    }

    /**
     * unset designation
     *
     * Additional representations for this concept when used in this value set - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDesignation($index)
    {
        unset($this->designation[$index]);
    }

    /**
     * Gets as designation
     *
     * Additional representations for this concept when used in this value set - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @return \TKusy\Hl7FhirR4\ValueSetDesignationType[]
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Sets a new designation
     *
     * Additional representations for this concept when used in this value set - other languages, aliases, specialized purposes, used for particular purposes, etc.
     *
     * @param \TKusy\Hl7FhirR4\ValueSetDesignationType[] $designation
     * @return self
     */
    public function setDesignation(array $designation)
    {
        $this->designation = $designation;
        return $this;
    }


}

