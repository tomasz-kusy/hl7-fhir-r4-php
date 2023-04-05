<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConceptMapUnmappedType
 *
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 * XSD Type: ConceptMap.Unmapped
 */
class ConceptMapUnmappedType extends BackboneElementType
{

    /**
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped source code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapGroupUnmappedModeType $mode
     */
    private $mode = null;

    /**
     * The fixed code to use when the mode = 'fixed' - all unmapped codes are mapped to a single fixed code.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $code
     */
    private $code = null;

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $display
     */
    private $display = null;

    /**
     * The set of fixed codes to use when the mode = 'fixed' - all unmapped codes are mapped to each of the fixed codes.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     */
    private $valueSet = null;

    /**
     * The default relationship value to apply between the source and target concepts when the source code is unmapped and the mode is 'fixed' or 'use-source-code'.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapRelationshipType $relationship
     */
    private $relationship = null;

    /**
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $otherMap
     */
    private $otherMap = null;

    /**
     * Gets as mode
     *
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped source code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapGroupUnmappedModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped source code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapGroupUnmappedModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R5\ConceptMapGroupUnmappedModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as code
     *
     * The fixed code to use when the mode = 'fixed' - all unmapped codes are mapped to a single fixed code.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The fixed code to use when the mode = 'fixed' - all unmapped codes are mapped to a single fixed code.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as display
     *
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $display
     * @return self
     */
    public function setDisplay(?\TKusy\Hl7Fhir\R5\StringType $display = null)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as valueSet
     *
     * The set of fixed codes to use when the mode = 'fixed' - all unmapped codes are mapped to each of the fixed codes.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * The set of fixed codes to use when the mode = 'fixed' - all unmapped codes are mapped to each of the fixed codes.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     * @return self
     */
    public function setValueSet(?\TKusy\Hl7Fhir\R5\CanonicalType $valueSet = null)
    {
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * The default relationship value to apply between the source and target concepts when the source code is unmapped and the mode is 'fixed' or 'use-source-code'.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapRelationshipType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * The default relationship value to apply between the source and target concepts when the source code is unmapped and the mode is 'fixed' or 'use-source-code'.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapRelationshipType $relationship
     * @return self
     */
    public function setRelationship(?\TKusy\Hl7Fhir\R5\ConceptMapRelationshipType $relationship = null)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as otherMap
     *
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getOtherMap()
    {
        return $this->otherMap;
    }

    /**
     * Sets a new otherMap
     *
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $otherMap
     * @return self
     */
    public function setOtherMap(?\TKusy\Hl7Fhir\R5\CanonicalType $otherMap = null)
    {
        $this->otherMap = $otherMap;
        return $this;
    }


}

