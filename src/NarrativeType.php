<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing NarrativeType
 *
 * A human-readable summary of the resource conveying the essential clinical and business information for the resource.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: Narrative
 */
class NarrativeType extends ElementType
{

    /**
     * The status of the narrative - whether it's entirely generated (from just the defined data or the extensions too), or whether a human authored it and it may contain additional data.
     *
     * @var \TKusy\Hl7FhirR4\NarrativeStatusType $status
     */
    private $status = null;

    /**
     * The actual narrative content, a stripped down version of XHTML.
     *
     * @var \TKusy\W3cXhtml\Div $div
     */
    private $div = null;

    /**
     * Gets as status
     *
     * The status of the narrative - whether it's entirely generated (from just the defined data or the extensions too), or whether a human authored it and it may contain additional data.
     *
     * @return \TKusy\Hl7FhirR4\NarrativeStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the narrative - whether it's entirely generated (from just the defined data or the extensions too), or whether a human authored it and it may contain additional data.
     *
     * @param \TKusy\Hl7FhirR4\NarrativeStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\NarrativeStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as div
     *
     * The actual narrative content, a stripped down version of XHTML.
     *
     * @return \TKusy\W3cXhtml\Div
     */
    public function getDiv()
    {
        return $this->div;
    }

    /**
     * Sets a new div
     *
     * The actual narrative content, a stripped down version of XHTML.
     *
     * @param \TKusy\W3cXhtml\Div $div
     * @return self
     */
    public function setDiv(\TKusy\W3cXhtml\Div $div)
    {
        $this->div = $div;
        return $this;
    }


}

