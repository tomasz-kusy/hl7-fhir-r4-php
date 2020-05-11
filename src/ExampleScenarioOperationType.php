<?php

namespace TKusy\Hl7FhirR4;

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
     * @var string $number
     */
    private $number = null;

    /**
     * The type of operation - CRUD.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The human-friendly name of the interaction.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Who starts the transaction.
     *
     * @var string $initiator
     */
    private $initiator = null;

    /**
     * Who receives the transaction.
     *
     * @var string $receiver
     */
    private $receiver = null;

    /**
     * A comment to be inserted in the diagram.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * Whether the initiator is deactivated right after the transaction.
     *
     * @var bool $initiatorActive
     */
    private $initiatorActive = null;

    /**
     * Whether the receiver is deactivated right after the transaction.
     *
     * @var bool $receiverActive
     */
    private $receiverActive = null;

    /**
     * Each resource instance used by the initiator.
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType $request
     */
    private $request = null;

    /**
     * Each resource instance used by the responder.
     *
     * @var \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType $response
     */
    private $response = null;

    /**
     * Gets as number
     *
     * The sequential number of the interaction, e.g. 1.2.5.
     *
     * @return string
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
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of operation - CRUD.
     *
     * @return string
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
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * The human-friendly name of the interaction.
     *
     * @return string
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
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as initiator
     *
     * Who starts the transaction.
     *
     * @return string
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
     * @param string $initiator
     * @return self
     */
    public function setInitiator($initiator)
    {
        $this->initiator = $initiator;
        return $this;
    }

    /**
     * Gets as receiver
     *
     * Who receives the transaction.
     *
     * @return string
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
     * @param string $receiver
     * @return self
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Gets as description
     *
     * A comment to be inserted in the diagram.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
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
     * @param \TKusy\Hl7FhirR4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as initiatorActive
     *
     * Whether the initiator is deactivated right after the transaction.
     *
     * @return bool
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
     * @param bool $initiatorActive
     * @return self
     */
    public function setInitiatorActive($initiatorActive)
    {
        $this->initiatorActive = $initiatorActive;
        return $this;
    }

    /**
     * Gets as receiverActive
     *
     * Whether the receiver is deactivated right after the transaction.
     *
     * @return bool
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
     * @param bool $receiverActive
     * @return self
     */
    public function setReceiverActive($receiverActive)
    {
        $this->receiverActive = $receiverActive;
        return $this;
    }

    /**
     * Gets as request
     *
     * Each resource instance used by the initiator.
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType
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
     * @param \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType $request
     * @return self
     */
    public function setRequest(\TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as response
     *
     * Each resource instance used by the responder.
     *
     * @return \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType
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
     * @param \TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType $response
     * @return self
     */
    public function setResponse(\TKusy\Hl7FhirR4\ExampleScenarioContainedInstanceType $response)
    {
        $this->response = $response;
        return $this;
    }


}

