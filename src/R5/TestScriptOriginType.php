<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\IntegerType $index
     */
    private $index = null;

    /**
     * The type of origin profile the test system supports.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $profile
     */
    private $profile = null;

    /**
     * The explicit url path of the origin server used in this test script.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType $url
     */
    private $url = null;

    /**
     * Gets as index
     *
     * Abstract name given to an origin server in this test script. The name is provided as a number starting at 1.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
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
     * @param \TKusy\Hl7Fhir\R5\IntegerType $index
     * @return self
     */
    public function setIndex(\TKusy\Hl7Fhir\R5\IntegerType $index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * Gets as profile
     *
     * The type of origin profile the test system supports.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
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
     * @param \TKusy\Hl7Fhir\R5\CodingType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7Fhir\R5\CodingType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as url
     *
     * The explicit url path of the origin server used in this test script.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * The explicit url path of the origin server used in this test script.
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $url
     * @return self
     */
    public function setUrl(?\TKusy\Hl7Fhir\R5\UrlType $url = null)
    {
        $this->url = $url;
        return $this;
    }


}

