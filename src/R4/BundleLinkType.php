<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing BundleLinkType
 *
 * A container for a collection of resources.
 * XSD Type: Bundle.Link
 */
class BundleLinkType extends BackboneElementType
{

    /**
     * A name which details the functional use for this link - see [http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1](http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1).
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $relation
     */
    private $relation = null;

    /**
     * The reference details for the link.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $url
     */
    private $url = null;

    /**
     * Gets as relation
     *
     * A name which details the functional use for this link - see [http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1](http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1).
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * A name which details the functional use for this link - see [http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1](http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1).
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $relation
     * @return self
     */
    public function setRelation(\TKusy\Hl7Fhir\R4\StringType $relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * Gets as url
     *
     * The reference details for the link.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * The reference details for the link.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7Fhir\R4\UriType $url)
    {
        $this->url = $url;
        return $this;
    }


}

