<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TestReportParticipantType
 *
 * A summary of information based on the results of executing a TestScript.
 * XSD Type: TestReport.Participant
 */
class TestReportParticipantType extends BackboneElementType
{

    /**
     * The type of participant.
     *
     * @var \TKusy\Hl7Fhir\R5\TestReportParticipantTypeType $type
     */
    private $type = null;

    /**
     * The uri of the participant. An absolute URL is preferred.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $uri
     */
    private $uri = null;

    /**
     * The display name of the participant.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $display
     */
    private $display = null;

    /**
     * Gets as type
     *
     * The type of participant.
     *
     * @return \TKusy\Hl7Fhir\R5\TestReportParticipantTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of participant.
     *
     * @param \TKusy\Hl7Fhir\R5\TestReportParticipantTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\TestReportParticipantTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as uri
     *
     * The uri of the participant. An absolute URL is preferred.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * The uri of the participant. An absolute URL is preferred.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $uri
     * @return self
     */
    public function setUri(\TKusy\Hl7Fhir\R5\UriType $uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as display
     *
     * The display name of the participant.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * The display name of the participant.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $display
     * @return self
     */
    public function setDisplay(?\TKusy\Hl7Fhir\R5\StringType $display = null)
    {
        $this->display = $display;
        return $this;
    }


}

