<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptCapabilityType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Capability
 */
class TestScriptCapabilityType extends BackboneElementType
{

    /**
     * Whether or not the test execution will require the given capabilities of the server in order for this test script to execute.
     *
     * @var bool $required
     */
    private $required = null;

    /**
     * Whether or not the test execution will validate the given capabilities of the server in order for this test script to execute.
     *
     * @var bool $validated
     */
    private $validated = null;

    /**
     * Description of the capabilities that this test script is requiring the server to support.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Which origin server these requirements apply to.
     *
     * @var \integer[] $origin
     */
    private $origin = null;

    /**
     * Which server these requirements apply to.
     *
     * @var \integer $destination
     */
    private $destination = null;

    /**
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $link
     */
    private $link = null;

    /**
     * Minimum capabilities required of server for test script to execute successfully. If server does not meet at a minimum the referenced capability statement, then all tests in this script are skipped.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $capabilities
     */
    private $capabilities = null;

    /**
     * Gets as required
     *
     * Whether or not the test execution will require the given capabilities of the server in order for this test script to execute.
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * Whether or not the test execution will require the given capabilities of the server in order for this test script to execute.
     *
     * @param bool $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Gets as validated
     *
     * Whether or not the test execution will validate the given capabilities of the server in order for this test script to execute.
     *
     * @return bool
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Sets a new validated
     *
     * Whether or not the test execution will validate the given capabilities of the server in order for this test script to execute.
     *
     * @param bool $validated
     * @return self
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the capabilities that this test script is requiring the server to support.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the capabilities that this test script is requiring the server to support.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as origin
     *
     * Which origin server these requirements apply to.
     *
     * @return self
     * @param \integer $origin
     */
    public function addToOrigin(\integer $origin)
    {
        $this->origin[] = $origin;
        return $this;
    }

    /**
     * isset origin
     *
     * Which origin server these requirements apply to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrigin($index)
    {
        return isset($this->origin[$index]);
    }

    /**
     * unset origin
     *
     * Which origin server these requirements apply to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrigin($index)
    {
        unset($this->origin[$index]);
    }

    /**
     * Gets as origin
     *
     * Which origin server these requirements apply to.
     *
     * @return \integer[]
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * Which origin server these requirements apply to.
     *
     * @param \integer[] $origin
     * @return self
     */
    public function setOrigin(array $origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Which server these requirements apply to.
     *
     * @return \integer
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Which server these requirements apply to.
     *
     * @param \integer $destination
     * @return self
     */
    public function setDestination(\integer $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Adds as link
     *
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UriType $link
     */
    public function addToLink(\TKusy\Hl7FhirR4\UriType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
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
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
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
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     *
     * @return \TKusy\Hl7FhirR4\UriType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Links to the FHIR specification that describes this interaction and the resources involved in more detail.
     *
     * @param \TKusy\Hl7FhirR4\UriType[] $link
     * @return self
     */
    public function setLink(array $link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Gets as capabilities
     *
     * Minimum capabilities required of server for test script to execute successfully. If server does not meet at a minimum the referenced capability statement, then all tests in this script are skipped.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * Sets a new capabilities
     *
     * Minimum capabilities required of server for test script to execute successfully. If server does not meet at a minimum the referenced capability statement, then all tests in this script are skipped.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $capabilities
     * @return self
     */
    public function setCapabilities(\TKusy\Hl7FhirR4\CanonicalType $capabilities)
    {
        $this->capabilities = $capabilities;
        return $this;
    }


}

