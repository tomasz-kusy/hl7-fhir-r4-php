<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceReportRelatesToType
 *
 * The EvidenceReport Resource is a specialized container for a collection of resources and codeable concepts, adapted to support compositions of Evidence, EvidenceVariable, and Citation resources and related concepts.
 * XSD Type: EvidenceReport.RelatesTo
 */
class EvidenceReportRelatesToType extends BackboneElementType
{

    /**
     * The type of relationship that this composition has with anther composition or document.
     *
     * @var \TKusy\Hl7Fhir\R5\ReportRelationshipTypeType $code
     */
    private $code = null;

    /**
     * The target composition/document of this relationship.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceReportTargetType $target
     */
    private $target = null;

    /**
     * Gets as code
     *
     * The type of relationship that this composition has with anther composition or document.
     *
     * @return \TKusy\Hl7Fhir\R5\ReportRelationshipTypeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The type of relationship that this composition has with anther composition or document.
     *
     * @param \TKusy\Hl7Fhir\R5\ReportRelationshipTypeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\ReportRelationshipTypeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as target
     *
     * The target composition/document of this relationship.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceReportTargetType
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * The target composition/document of this relationship.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceReportTargetType $target
     * @return self
     */
    public function setTarget(\TKusy\Hl7Fhir\R5\EvidenceReportTargetType $target)
    {
        $this->target = $target;
        return $this;
    }


}

