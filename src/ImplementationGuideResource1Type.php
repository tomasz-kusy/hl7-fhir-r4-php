<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImplementationGuideResource1Type
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Resource1
 */
class ImplementationGuideResource1Type extends BackboneElementType
{

    /**
     * Where this resource is found.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $reference
     */
    private $reference = null;

    /**
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $exampleBoolean
     */
    private $exampleBoolean = null;

    /**
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $exampleCanonical
     */
    private $exampleCanonical = null;

    /**
     * The relative path for primary page for this resource within the IG.
     *
     * @var \TKusy\Hl7FhirR4\UrlType $relativePath
     */
    private $relativePath = null;

    /**
     * Gets as reference
     *
     * Where this resource is found.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Where this resource is found.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7FhirR4\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as exampleBoolean
     *
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }

    /**
     * Sets a new exampleBoolean
     *
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $exampleBoolean
     * @return self
     */
    public function setExampleBoolean(\TKusy\Hl7FhirR4\BooleanType $exampleBoolean)
    {
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * Gets as exampleCanonical
     *
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getExampleCanonical()
    {
        return $this->exampleCanonical;
    }

    /**
     * Sets a new exampleCanonical
     *
     * If true or a reference, indicates the resource is an example instance. If a reference is present, indicates that the example is an example of the specified profile. (choose any one of example*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $exampleCanonical
     * @return self
     */
    public function setExampleCanonical(\TKusy\Hl7FhirR4\CanonicalType $exampleCanonical)
    {
        $this->exampleCanonical = $exampleCanonical;
        return $this;
    }

    /**
     * Gets as relativePath
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @return \TKusy\Hl7FhirR4\UrlType
     */
    public function getRelativePath()
    {
        return $this->relativePath;
    }

    /**
     * Sets a new relativePath
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @param \TKusy\Hl7FhirR4\UrlType $relativePath
     * @return self
     */
    public function setRelativePath(\TKusy\Hl7FhirR4\UrlType $relativePath)
    {
        $this->relativePath = $relativePath;
        return $this;
    }


}

