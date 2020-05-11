<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConceptMapUnmappedType
 *
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 * XSD Type: ConceptMap.Unmapped
 */
class ConceptMapUnmappedType extends BackboneElementType
{

    /**
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     *
     * @var \TKusy\Hl7FhirR4\ConceptMapGroupUnmappedModeType $mode
     */
    private $mode = null;

    /**
     * The fixed code to use when the mode = 'fixed' - all unmapped codes are mapped to a single fixed code.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @var string $display
     */
    private $display = null;

    /**
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $url
     */
    private $url = null;

    /**
     * Gets as mode
     *
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     *
     * @return \TKusy\Hl7FhirR4\ConceptMapGroupUnmappedModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Defines which action to take if there is no match for the source concept in the target system designated for the group. One of 3 actions are possible: use the unmapped code (this is useful when doing a mapping between versions, and only a few codes have changed), use a fixed code (a default code), or alternatively, a reference to a different concept map can be provided (by canonical URL).
     *
     * @param \TKusy\Hl7FhirR4\ConceptMapGroupUnmappedModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7FhirR4\ConceptMapGroupUnmappedModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as code
     *
     * The fixed code to use when the mode = 'fixed' - all unmapped codes are mapped to a single fixed code.
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
     * The fixed code to use when the mode = 'fixed' - all unmapped codes are mapped to a single fixed code.
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
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @return string
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
     * @param string $display
     * @return self
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as url
     *
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * The canonical reference to an additional ConceptMap resource instance to use for mapping if this ConceptMap resource contains no matching mapping for the source concept.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\CanonicalType $url)
    {
        $this->url = $url;
        return $this;
    }


}

