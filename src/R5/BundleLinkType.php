<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\LinkRelationTypesType $relation
     */
    private $relation = null;

    /**
     * The reference details for the link.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * Gets as relation
     *
     * A name which details the functional use for this link - see [http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1](http://www.iana.org/assignments/link-relations/link-relations.xhtml#link-relations-1).
     *
     * @return \TKusy\Hl7Fhir\R5\LinkRelationTypesType
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
     * @param \TKusy\Hl7Fhir\R5\LinkRelationTypesType $relation
     * @return self
     */
    public function setRelation(\TKusy\Hl7Fhir\R5\LinkRelationTypesType $relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * Gets as url
     *
     * The reference details for the link.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
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
     * @param \TKusy\Hl7Fhir\R5\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7Fhir\R5\UriType $url)
    {
        $this->url = $url;
        return $this;
    }


}

