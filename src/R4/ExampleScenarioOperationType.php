<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ExampleScenarioOperationType
 *
 * Example of workflow instance.
 * XSD Type: ExampleScenario.Operation
 */
class ExampleScenarioOperationType extends BackboneElementType
{

    /**
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $number
     */
    private $number = null;

    /**
     * The type of operation - CRUD.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $type
     */
    private $type = null;

    /**
     * The human-friendly name of the interaction.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * Who starts the transaction.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $initiator
     */
    private $initiator = null;

    /**
     * Who receives the transaction.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $receiver
     */
    private $receiver = null;

    /**
     * A comment to be inserted in the diagram.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $description
     */
    private $description = null;

    /**
     * Whether the initiator is deactivated right after the transaction.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $initiatorActive
     */
    private $initiatorActive = null;

    /**
     * Whether the receiver is deactivated right after the transaction.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $receiverActive
     */
    private $receiverActive = null;

    /**
     * Each resource instance used by the initiator.
     *
     * @var \TKusy\Hl7Fhir\R4\ExampleScenarioContainedInstanceType $request
     */
    private $request = null;

    /**
     * Each resource instance used by the responder.
     *
     * @var \TKusy\Hl7Fhir\R4\ExampleScenarioContainedInstanceType $response
     */
    private $response = null;

    /**
     * Gets as number
     *
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $number
     * @return self
     */
    public function setNumber(\TKusy\Hl7Fhir\R4\StringType $number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of operation - CRUD.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of operation - CRUD.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\StringType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * The human-friendly name of the interaction.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The human-friendly name of the interaction.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as initiator
     *
     * Who starts the transaction.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * Sets a new initiator
     *
     * Who starts the transaction.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $initiator
     * @return self
     */
    public function setInitiator(\TKusy\Hl7Fhir\R4\StringType $initiator)
    {
        $this->initiator = $initiator;
        return $this;
    }

    /**
     * Gets as receiver
     *
     * Who receives the transaction.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets a new receiver
     *
     * Who receives the transaction.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $receiver
     * @return self
     */
    public function setReceiver(\TKusy\Hl7Fhir\R4\StringType $receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Gets as description
     *
     * A comment to be inserted in the diagram.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A comment to be inserted in the diagram.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as initiatorActive
     *
     * Whether the initiator is deactivated right after the transaction.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getInitiatorActive()
    {
        return $this->initiatorActive;
    }

    /**
     * Sets a new initiatorActive
     *
     * Whether the initiator is deactivated right after the transaction.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $initiatorActive
     * @return self
     */
    public function setInitiatorActive(\TKusy\Hl7Fhir\R4\BooleanType $initiatorActive)
    {
        $this->initiatorActive = $initiatorActive;
        return $this;
    }

    /**
     * Gets as receiverActive
     *
     * Whether the receiver is deactivated right after the transaction.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getReceiverActive()
    {
        return $this->receiverActive;
    }

    /**
     * Sets a new receiverActive
     *
     * Whether the receiver is deactivated right after the transaction.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $receiverActive
     * @return self
     */
    public function setReceiverActive(\TKusy\Hl7Fhir\R4\BooleanType $receiverActive)
    {
        $this->receiverActive = $receiverActive;
        return $this;
    }

    /**
     * Gets as request
     *
     * Each resource instance used by the initiator.
     *
     * @return \TKusy\Hl7Fhir\R4\ExampleScenarioContainedInstanceType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * Each resource instance used by the initiator.
     *
     * @param \TKusy\Hl7Fhir\R4\ExampleScenarioContainedInstanceType $request
     * @return self
     */
    public function setRequest(\TKusy\Hl7Fhir\R4\ExampleScenarioContainedInstanceType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as response
     *
     * Each resource instance used by the responder.
     *
     * @return \TKusy\Hl7Fhir\R4\ExampleScenarioContainedInstanceType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * Each resource instance used by the responder.
     *
     * @param \TKusy\Hl7Fhir\R4\ExampleScenarioContainedInstanceType $response
     * @return self
     */
    public function setResponse(\TKusy\Hl7Fhir\R4\ExampleScenarioContainedInstanceType $response)
    {
        $this->response = $response;
        return $this;
    }


}

