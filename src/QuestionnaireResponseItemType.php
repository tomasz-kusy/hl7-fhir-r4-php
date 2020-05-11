<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing QuestionnaireResponseItemType
 *
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the questionnaire being responded to.
 * XSD Type: QuestionnaireResponse.Item
 */
class QuestionnaireResponseItemType extends BackboneElementType
{

    /**
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     *
     * @var string $linkId
     */
    private $linkId = null;

    /**
     * A reference to an [[[ElementDefinition]]] that provides the details for the item.
     *
     * @var \TKusy\Hl7FhirR4\UriType $definition
     */
    private $definition = null;

    /**
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * The respondent's answer(s) to the question.
     *
     * @var \TKusy\Hl7FhirR4\QuestionnaireResponseAnswerType[] $answer
     */
    private $answer = null;

    /**
     * Questions or sub-groups nested beneath a question or group.
     *
     * @var \TKusy\Hl7FhirR4\QuestionnaireResponseItemType[] $item
     */
    private $item = null;

    /**
     * Gets as linkId
     *
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     *
     * @return string
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * The item from the Questionnaire that corresponds to this item in the QuestionnaireResponse resource.
     *
     * @param string $linkId
     * @return self
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as definition
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the item.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * A reference to an [[[ElementDefinition]]] that provides the details for the item.
     *
     * @param \TKusy\Hl7FhirR4\UriType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7FhirR4\UriType $definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text that is displayed above the contents of the group or as the text of the question being answered.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as answer
     *
     * The respondent's answer(s) to the question.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\QuestionnaireResponseAnswerType $answer
     */
    public function addToAnswer(\TKusy\Hl7FhirR4\QuestionnaireResponseAnswerType $answer)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * isset answer
     *
     * The respondent's answer(s) to the question.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswer($index)
    {
        return isset($this->answer[$index]);
    }

    /**
     * unset answer
     *
     * The respondent's answer(s) to the question.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswer($index)
    {
        unset($this->answer[$index]);
    }

    /**
     * Gets as answer
     *
     * The respondent's answer(s) to the question.
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireResponseAnswerType[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * The respondent's answer(s) to the question.
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireResponseAnswerType[] $answer
     * @return self
     */
    public function setAnswer(array $answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * Adds as item
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\QuestionnaireResponseItemType $item
     */
    public function addToItem(\TKusy\Hl7FhirR4\QuestionnaireResponseItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @return \TKusy\Hl7FhirR4\QuestionnaireResponseItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Questions or sub-groups nested beneath a question or group.
     *
     * @param \TKusy\Hl7FhirR4\QuestionnaireResponseItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }


}

