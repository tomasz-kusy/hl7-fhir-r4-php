<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExampleScenarioOperationType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Operation
 */
class ExampleScenarioOperationType extends BackboneElementType
{

    /**
     * The standardized type of action (FHIR or otherwise).
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $type
     */
    private $type = null;

    /**
     * A short descriptive label the step to be used in tables or diagrams.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The system that invokes the action/transmits the data.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $initiator
     */
    private $initiator = null;

    /**
     * The system on which the action is invoked/receives the data.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $receiver
     */
    private $receiver = null;

    /**
     * An explanation of what the operation represents and what it does.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * If false, the initiator is deactivated right after the operation.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $initiatorActive
     */
    private $initiatorActive = null;

    /**
     * If false, the receiver is deactivated right after the operation.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $receiverActive
     */
    private $receiverActive = null;

    /**
     * A reference to the instance that is transmitted from requester to receiver as part of the invocation of the operation.
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType $request
     */
    private $request = null;

    /**
     * A reference to the instance that is transmitted from receiver to requester as part of the operation's synchronous response (if any).
     *
     * @var \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType $response
     */
    private $response = null;

    /**
     * Gets as type
     *
     * The standardized type of action (FHIR or otherwise).
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The standardized type of action (FHIR or otherwise).
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodingType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short descriptive label the step to be used in tables or diagrams.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short descriptive label the step to be used in tables or diagrams.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7Fhir\R5\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as initiator
     *
     * The system that invokes the action/transmits the data.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * Sets a new initiator
     *
     * The system that invokes the action/transmits the data.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $initiator
     * @return self
     */
    public function setInitiator(?\TKusy\Hl7Fhir\R5\StringType $initiator = null)
    {
        $this->initiator = $initiator;
        return $this;
    }

    /**
     * Gets as receiver
     *
     * The system on which the action is invoked/receives the data.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets a new receiver
     *
     * The system on which the action is invoked/receives the data.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $receiver
     * @return self
     */
    public function setReceiver(?\TKusy\Hl7Fhir\R5\StringType $receiver = null)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Gets as description
     *
     * An explanation of what the operation represents and what it does.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * An explanation of what the operation represents and what it does.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as initiatorActive
     *
     * If false, the initiator is deactivated right after the operation.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getInitiatorActive()
    {
        return $this->initiatorActive;
    }

    /**
     * Sets a new initiatorActive
     *
     * If false, the initiator is deactivated right after the operation.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $initiatorActive
     * @return self
     */
    public function setInitiatorActive(?\TKusy\Hl7Fhir\R5\BooleanType $initiatorActive = null)
    {
        $this->initiatorActive = $initiatorActive;
        return $this;
    }

    /**
     * Gets as receiverActive
     *
     * If false, the receiver is deactivated right after the operation.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getReceiverActive()
    {
        return $this->receiverActive;
    }

    /**
     * Sets a new receiverActive
     *
     * If false, the receiver is deactivated right after the operation.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $receiverActive
     * @return self
     */
    public function setReceiverActive(?\TKusy\Hl7Fhir\R5\BooleanType $receiverActive = null)
    {
        $this->receiverActive = $receiverActive;
        return $this;
    }

    /**
     * Gets as request
     *
     * A reference to the instance that is transmitted from requester to receiver as part of the invocation of the operation.
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * A reference to the instance that is transmitted from requester to receiver as part of the invocation of the operation.
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType $request
     * @return self
     */
    public function setRequest(?\TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as response
     *
     * A reference to the instance that is transmitted from receiver to requester as part of the operation's synchronous response (if any).
     *
     * @return \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * A reference to the instance that is transmitted from receiver to requester as part of the operation's synchronous response (if any).
     *
     * @param \TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType $response
     * @return self
     */
    public function setResponse(?\TKusy\Hl7Fhir\R5\ExampleScenarioContainedInstanceType $response = null)
    {
        $this->response = $response;
        return $this;
    }


}

