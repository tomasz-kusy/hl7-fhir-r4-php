<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TerminologyCapabilitiesTranslationType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: TerminologyCapabilities.Translation
 */
class TerminologyCapabilitiesTranslationType extends BackboneElementType
{

    /**
     * Whether the client must identify the map.
     *
     * @var bool $needsMap
     */
    private $needsMap = null;

    /**
     * Gets as needsMap
     *
     * Whether the client must identify the map.
     *
     * @return bool
     */
    public function getNeedsMap()
    {
        return $this->needsMap;
    }

    /**
     * Sets a new needsMap
     *
     * Whether the client must identify the map.
     *
     * @param bool $needsMap
     * @return self
     */
    public function setNeedsMap($needsMap)
    {
        $this->needsMap = $needsMap;
        return $this;
    }


}

