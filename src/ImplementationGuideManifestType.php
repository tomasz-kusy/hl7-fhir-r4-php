<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImplementationGuideManifestType
 *
 * A set of rules of how a particular interoperability or standards problem is solved - typically through the use of FHIR resources. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 * XSD Type: ImplementationGuide.Manifest
 */
class ImplementationGuideManifestType extends BackboneElementType
{

    /**
     * A pointer to official web page, PDF or other rendering of the implementation guide.
     *
     * @var \TKusy\Hl7FhirR4\UrlType $rendering
     */
    private $rendering = null;

    /**
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @var \TKusy\Hl7FhirR4\ImplementationGuideResource1Type[] $resource
     */
    private $resource = [
        
    ];

    /**
     * Information about a page within the IG.
     *
     * @var \TKusy\Hl7FhirR4\ImplementationGuidePage1Type[] $page
     */
    private $page = [
        
    ];

    /**
     * Indicates a relative path to an image that exists within the IG.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $image
     */
    private $image = [
        
    ];

    /**
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $other
     */
    private $other = [
        
    ];

    /**
     * Gets as rendering
     *
     * A pointer to official web page, PDF or other rendering of the implementation guide.
     *
     * @return \TKusy\Hl7FhirR4\UrlType
     */
    public function getRendering()
    {
        return $this->rendering;
    }

    /**
     * Sets a new rendering
     *
     * A pointer to official web page, PDF or other rendering of the implementation guide.
     *
     * @param \TKusy\Hl7FhirR4\UrlType $rendering
     * @return self
     */
    public function setRendering(\TKusy\Hl7FhirR4\UrlType $rendering)
    {
        $this->rendering = $rendering;
        return $this;
    }

    /**
     * Adds as resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImplementationGuideResource1Type $resource
     */
    public function addToResource(\TKusy\Hl7FhirR4\ImplementationGuideResource1Type $resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * isset resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResource($index)
    {
        return isset($this->resource[$index]);
    }

    /**
     * unset resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResource($index)
    {
        unset($this->resource[$index]);
    }

    /**
     * Gets as resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @return \TKusy\Hl7FhirR4\ImplementationGuideResource1Type[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * A resource that is part of the implementation guide. Conformance resources (value set, structure definition, capability statements etc.) are obvious candidates for inclusion, but any kind of resource can be included as an example resource.
     *
     * @param \TKusy\Hl7FhirR4\ImplementationGuideResource1Type[] $resource
     * @return self
     */
    public function setResource(array $resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Adds as page
     *
     * Information about a page within the IG.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ImplementationGuidePage1Type $page
     */
    public function addToPage(\TKusy\Hl7FhirR4\ImplementationGuidePage1Type $page)
    {
        $this->page[] = $page;
        return $this;
    }

    /**
     * isset page
     *
     * Information about a page within the IG.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPage($index)
    {
        return isset($this->page[$index]);
    }

    /**
     * unset page
     *
     * Information about a page within the IG.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPage($index)
    {
        unset($this->page[$index]);
    }

    /**
     * Gets as page
     *
     * Information about a page within the IG.
     *
     * @return \TKusy\Hl7FhirR4\ImplementationGuidePage1Type[]
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets a new page
     *
     * Information about a page within the IG.
     *
     * @param \TKusy\Hl7FhirR4\ImplementationGuidePage1Type[] $page
     * @return self
     */
    public function setPage(array $page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * Adds as image
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $image
     */
    public function addToImage(\TKusy\Hl7FhirR4\StringType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * Indicates a relative path to an image that exists within the IG.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $image
     * @return self
     */
    public function setImage(array $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Adds as other
     *
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $other
     */
    public function addToOther(\TKusy\Hl7FhirR4\StringType $other)
    {
        $this->other[] = $other;
        return $this;
    }

    /**
     * isset other
     *
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOther($index)
    {
        return isset($this->other[$index]);
    }

    /**
     * unset other
     *
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOther($index)
    {
        unset($this->other[$index]);
    }

    /**
     * Gets as other
     *
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * Indicates the relative path of an additional non-page, non-image file that is part of the IG - e.g. zip, jar and similar files that could be the target of a hyperlink in a derived IG.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $other
     * @return self
     */
    public function setOther(array $other)
    {
        $this->other = $other;
        return $this;
    }


}

