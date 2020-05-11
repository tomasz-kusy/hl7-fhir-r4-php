<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TestScriptOriginType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Origin
 */
class TestScriptOriginType extends BackboneElementType
{

    /**
     * Abstract name given to an origin server in this test script. The name is provided as a number starting at 1.
     *
     * @var \integer $index
     */
    private $index = null;

    /**
     * The type of origin profile the test system supports.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $profile
     */
    private $profile = null;

    /**
     * Gets as index
     *
     * Abstract name given to an origin server in this test script. The name is provided as a number starting at 1.
     *
     * @return \integer
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * Abstract name given to an origin server in this test script. The name is provided as a number starting at 1.
     *
     * @param \integer $index
     * @return self
     */
    public function setIndex(\integer $index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * Gets as profile
     *
     * The type of origin profile the test system supports.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * The type of origin profile the test system supports.
     *
     * @param \TKusy\Hl7FhirR4\CodingType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7FhirR4\CodingType $profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

