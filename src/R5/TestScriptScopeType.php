<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestScriptScopeType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Scope
 */
class TestScriptScopeType extends BackboneElementType
{

    /**
     * The specific conformance artifact being tested. The canonical reference can be version-specific.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $artifact
     */
    private $artifact = null;

    /**
     * The expectation of whether the test must pass for the system to be considered conformant with the artifact: required - all tests are expected to pass, optional - all test are expected to pass but non-pass status may be allowed, strict - all tests are expected to pass and warnings are treated as a failure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $conformance
     */
    private $conformance = null;

    /**
     * The phase of testing for this artifact: unit - development / implementation phase, integration - internal system to system phase, production - live system to system phase (Note, this may involve pii/phi data).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $phase
     */
    private $phase = null;

    /**
     * Gets as artifact
     *
     * The specific conformance artifact being tested. The canonical reference can be version-specific.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    /**
     * Sets a new artifact
     *
     * The specific conformance artifact being tested. The canonical reference can be version-specific.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $artifact
     * @return self
     */
    public function setArtifact(\TKusy\Hl7Fhir\R5\CanonicalType $artifact)
    {
        $this->artifact = $artifact;
        return $this;
    }

    /**
     * Gets as conformance
     *
     * The expectation of whether the test must pass for the system to be considered conformant with the artifact: required - all tests are expected to pass, optional - all test are expected to pass but non-pass status may be allowed, strict - all tests are expected to pass and warnings are treated as a failure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getConformance()
    {
        return $this->conformance;
    }

    /**
     * Sets a new conformance
     *
     * The expectation of whether the test must pass for the system to be considered conformant with the artifact: required - all tests are expected to pass, optional - all test are expected to pass but non-pass status may be allowed, strict - all tests are expected to pass and warnings are treated as a failure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $conformance
     * @return self
     */
    public function setConformance(?\TKusy\Hl7Fhir\R5\CodeableConceptType $conformance = null)
    {
        $this->conformance = $conformance;
        return $this;
    }

    /**
     * Gets as phase
     *
     * The phase of testing for this artifact: unit - development / implementation phase, integration - internal system to system phase, production - live system to system phase (Note, this may involve pii/phi data).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Sets a new phase
     *
     * The phase of testing for this artifact: unit - development / implementation phase, integration - internal system to system phase, production - live system to system phase (Note, this may involve pii/phi data).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $phase
     * @return self
     */
    public function setPhase(?\TKusy\Hl7Fhir\R5\CodeableConceptType $phase = null)
    {
        $this->phase = $phase;
        return $this;
    }


}

