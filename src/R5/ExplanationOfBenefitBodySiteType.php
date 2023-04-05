<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExplanationOfBenefitBodySiteType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.BodySite
 */
class ExplanationOfBenefitBodySiteType extends BackboneElementType
{

    /**
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $site
     */
    private $site = null;

    /**
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subSite
     */
    private $subSite = null;

    /**
     * Adds as site
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $site
     */
    public function addToSite(\TKusy\Hl7Fhir\R5\CodeableReferenceType $site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * isset site
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSite($index)
    {
        return isset($this->site[$index]);
    }

    /**
     * unset site
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSite($index)
    {
        unset($this->site[$index]);
    }

    /**
     * Gets as site
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Physical service site on the patient (limb, tooth, etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Adds as subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subSite
     */
    public function addToSubSite(\TKusy\Hl7Fhir\R5\CodeableConceptType $subSite)
    {
        $this->subSite[] = $subSite;
        return $this;
    }

    /**
     * isset subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubSite($index)
    {
        return isset($this->subSite[$index]);
    }

    /**
     * unset subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubSite($index)
    {
        unset($this->subSite[$index]);
    }

    /**
     * Gets as subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSubSite()
    {
        return $this->subSite;
    }

    /**
     * Sets a new subSite
     *
     * A region or surface of the bodySite, e.g. limb region or tooth surface(s).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subSite
     * @return self
     */
    public function setSubSite(array $subSite = null)
    {
        $this->subSite = $subSite;
        return $this;
    }


}

