<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptMetadataType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Metadata
 */
class TestScriptMetadataType extends BackboneElementType
{

    /**
     * A link to the FHIR specification that this test is covering.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptLinkType[] $link
     */
    private $link = [
        
    ];

    /**
     * Capabilities that must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @var \TKusy\Hl7FhirR4\TestScriptCapabilityType[] $capability
     */
    private $capability = [
        
    ];

    /**
     * Adds as link
     *
     * A link to the FHIR specification that this test is covering.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptLinkType $link
     */
    public function addToLink(\TKusy\Hl7FhirR4\TestScriptLinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * A link to the FHIR specification that this test is covering.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * A link to the FHIR specification that this test is covering.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * A link to the FHIR specification that this test is covering.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptLinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * A link to the FHIR specification that this test is covering.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptLinkType[] $link
     * @return self
     */
    public function setLink(array $link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Adds as capability
     *
     * Capabilities that must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TestScriptCapabilityType $capability
     */
    public function addToCapability(\TKusy\Hl7FhirR4\TestScriptCapabilityType $capability)
    {
        $this->capability[] = $capability;
        return $this;
    }

    /**
     * isset capability
     *
     * Capabilities that must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCapability($index)
    {
        return isset($this->capability[$index]);
    }

    /**
     * unset capability
     *
     * Capabilities that must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCapability($index)
    {
        unset($this->capability[$index]);
    }

    /**
     * Gets as capability
     *
     * Capabilities that must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @return \TKusy\Hl7FhirR4\TestScriptCapabilityType[]
     */
    public function getCapability()
    {
        return $this->capability;
    }

    /**
     * Sets a new capability
     *
     * Capabilities that must exist and are assumed to function correctly on the FHIR server being tested.
     *
     * @param \TKusy\Hl7FhirR4\TestScriptCapabilityType[] $capability
     * @return self
     */
    public function setCapability(array $capability)
    {
        $this->capability = $capability;
        return $this;
    }


}

