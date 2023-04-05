<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * If true, indicates the resource is an example instance.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isExample
     */
    private $isExample = null;

    /**
     * If present, indicates profile(s) the instance is valid against.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $profile
     */
    private $profile = null;

    /**
     * The relative path for primary page for this resource within the IG.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType $relativePath
     */
    private $relativePath = null;

    /**
     * Gets as reference
     *
     * Where this resource is found.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7Fhir\R5\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as isExample
     *
     * If true, indicates the resource is an example instance.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getIsExample()
    {
        return $this->isExample;
    }

    /**
     * Sets a new isExample
     *
     * If true, indicates the resource is an example instance.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isExample
     * @return self
     */
    public function setIsExample(?\TKusy\Hl7Fhir\R5\BooleanType $isExample = null)
    {
        $this->isExample = $isExample;
        return $this;
    }

    /**
     * Adds as profile
     *
     * If present, indicates profile(s) the instance is valid against.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $profile
     */
    public function addToProfile(\TKusy\Hl7Fhir\R5\CanonicalType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * If present, indicates profile(s) the instance is valid against.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * If present, indicates profile(s) the instance is valid against.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * If present, indicates profile(s) the instance is valid against.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * If present, indicates profile(s) the instance is valid against.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $profile
     * @return self
     */
    public function setProfile(array $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as relativePath
     *
     * The relative path for primary page for this resource within the IG.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
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
     * @param \TKusy\Hl7Fhir\R5\UrlType $relativePath
     * @return self
     */
    public function setRelativePath(?\TKusy\Hl7Fhir\R5\UrlType $relativePath = null)
    {
        $this->relativePath = $relativePath;
        return $this;
    }


}

