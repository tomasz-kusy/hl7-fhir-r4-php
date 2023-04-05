<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing QuestionnaireItemType
 *
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.
 * XSD Type: Questionnaire.Item
 */
class QuestionnaireItemType extends BackboneElementType
{

    /**
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $linkId
     */
    private $linkId = null;

    /**
     * This element is a URI that refers to an [ElementDefinition](elementdefinition.html) or to an [ObservationDefinition](observationdefinition.html) that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in [Comments](questionnaire.html#definition), below.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $definition
     */
    private $definition = null;

    /**
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $code
     */
    private $code = null;

    /**
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $prefix
     */
    private $prefix = null;

    /**
     * The name of a section, the text of a question or text content for a display item.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $text
     */
    private $text = null;

    /**
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, Coding, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireItemTypeType $type
     */
    private $type = null;

    /**
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireEnableWhenType[] $enableWhen
     */
    private $enableWhen = null;

    /**
     * Controls how multiple enableWhen values are interpreted - whether all or any must be true.
     *
     * @var \TKusy\Hl7Fhir\R5\EnableWhenBehaviorType $enableBehavior
     */
    private $enableBehavior = null;

    /**
     * Indicates if and how items that are disabled (because enableWhen evaluates to 'false') should be displayed.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireItemDisabledDisplayType $disabledDisplay
     */
    private $disabledDisplay = null;

    /**
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse. If false, the item may be skipped when answering the questionnaire.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $required
     */
    private $required = null;

    /**
     * An indication, if true, that a QuestionnaireResponse for this item may include multiple answers associated with a single instance of this item (for question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $repeats
     */
    private $repeats = null;

    /**
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $readOnly
     */
    private $readOnly = null;

    /**
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $maxLength
     */
    private $maxLength = null;

    /**
     * For items that have a defined set of allowed answers (via answerOption or answerValueSet), indicates whether values *other* than those specified can be selected.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireAnswerConstraintType $answerConstraint
     */
    private $answerConstraint = null;

    /**
     * A reference to a value set containing a list of values representing permitted answers for a question.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $answerValueSet
     */
    private $answerValueSet = null;

    /**
     * One of the permitted answers for the question.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireAnswerOptionType[] $answerOption
     */
    private $answerOption = null;

    /**
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireInitialType[] $initial
     */
    private $initial = null;

    /**
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @var \TKusy\Hl7Fhir\R5\QuestionnaireItemType[] $item
     */
    private $item = null;

    /**
     * Gets as linkId
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the equivalent item in a QuestionnaireResponse resource.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $linkId
     * @return self
     */
    public function setLinkId(\TKusy\Hl7Fhir\R5\StringType $linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as definition
     *
     * This element is a URI that refers to an [ElementDefinition](elementdefinition.html) or to an [ObservationDefinition](observationdefinition.html) that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in [Comments](questionnaire.html#definition), below.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * This element is a URI that refers to an [ElementDefinition](elementdefinition.html) or to an [ObservationDefinition](observationdefinition.html) that provides information about this item, including information that might otherwise be included in the instance of the Questionnaire resource. A detailed description of the construction of the URI is shown in [Comments](questionnaire.html#definition), below.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $definition
     * @return self
     */
    public function setDefinition(?\TKusy\Hl7Fhir\R5\UriType $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Adds as code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R5\CodingType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A terminology code that corresponds to this group or question (e.g. a code from LOINC, which defines many questions and answers).
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $code
     * @return self
     */
    public function setCode(array $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as prefix
     *
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets a new prefix
     *
     * A short label for a particular group, question or set of display text within the questionnaire used for reference by the individual completing the questionnaire.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $prefix
     * @return self
     */
    public function setPrefix(?\TKusy\Hl7Fhir\R5\StringType $prefix = null)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Gets as text
     *
     * The name of a section, the text of a question or text content for a display item.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The name of a section, the text of a question or text content for a display item.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $text
     * @return self
     */
    public function setText(?\TKusy\Hl7Fhir\R5\StringType $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, Coding, etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireItemTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of questionnaire item this is - whether text for display, a grouping of other items or a particular type of data to be captured (string, integer, Coding, etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireItemTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\QuestionnaireItemTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireEnableWhenType $enableWhen
     */
    public function addToEnableWhen(\TKusy\Hl7Fhir\R5\QuestionnaireEnableWhenType $enableWhen)
    {
        $this->enableWhen[] = $enableWhen;
        return $this;
    }

    /**
     * isset enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnableWhen($index)
    {
        return isset($this->enableWhen[$index]);
    }

    /**
     * unset enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnableWhen($index)
    {
        unset($this->enableWhen[$index]);
    }

    /**
     * Gets as enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireEnableWhenType[]
     */
    public function getEnableWhen()
    {
        return $this->enableWhen;
    }

    /**
     * Sets a new enableWhen
     *
     * A constraint indicating that this item should only be enabled (displayed/allow answers to be captured) when the specified condition is true.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireEnableWhenType[] $enableWhen
     * @return self
     */
    public function setEnableWhen(array $enableWhen = null)
    {
        $this->enableWhen = $enableWhen;
        return $this;
    }

    /**
     * Gets as enableBehavior
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any must be true.
     *
     * @return \TKusy\Hl7Fhir\R5\EnableWhenBehaviorType
     */
    public function getEnableBehavior()
    {
        return $this->enableBehavior;
    }

    /**
     * Sets a new enableBehavior
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any must be true.
     *
     * @param \TKusy\Hl7Fhir\R5\EnableWhenBehaviorType $enableBehavior
     * @return self
     */
    public function setEnableBehavior(?\TKusy\Hl7Fhir\R5\EnableWhenBehaviorType $enableBehavior = null)
    {
        $this->enableBehavior = $enableBehavior;
        return $this;
    }

    /**
     * Gets as disabledDisplay
     *
     * Indicates if and how items that are disabled (because enableWhen evaluates to 'false') should be displayed.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireItemDisabledDisplayType
     */
    public function getDisabledDisplay()
    {
        return $this->disabledDisplay;
    }

    /**
     * Sets a new disabledDisplay
     *
     * Indicates if and how items that are disabled (because enableWhen evaluates to 'false') should be displayed.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireItemDisabledDisplayType $disabledDisplay
     * @return self
     */
    public function setDisabledDisplay(?\TKusy\Hl7Fhir\R5\QuestionnaireItemDisabledDisplayType $disabledDisplay = null)
    {
        $this->disabledDisplay = $disabledDisplay;
        return $this;
    }

    /**
     * Gets as required
     *
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse. If false, the item may be skipped when answering the questionnaire.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * An indication, if true, that the item must be present in a "completed" QuestionnaireResponse. If false, the item may be skipped when answering the questionnaire.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $required
     * @return self
     */
    public function setRequired(?\TKusy\Hl7Fhir\R5\BooleanType $required = null)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Gets as repeats
     *
     * An indication, if true, that a QuestionnaireResponse for this item may include multiple answers associated with a single instance of this item (for question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getRepeats()
    {
        return $this->repeats;
    }

    /**
     * Sets a new repeats
     *
     * An indication, if true, that a QuestionnaireResponse for this item may include multiple answers associated with a single instance of this item (for question-type items) or multiple repetitions of the item (for group-type items).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $repeats
     * @return self
     */
    public function setRepeats(?\TKusy\Hl7Fhir\R5\BooleanType $repeats = null)
    {
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * Gets as readOnly
     *
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * Sets a new readOnly
     *
     * An indication, when true, that the value cannot be changed by a human respondent to the Questionnaire.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $readOnly
     * @return self
     */
    public function setReadOnly(?\TKusy\Hl7Fhir\R5\BooleanType $readOnly = null)
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * Gets as maxLength
     *
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Sets a new maxLength
     *
     * The maximum number of characters that are permitted in the answer to be considered a "valid" QuestionnaireResponse.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $maxLength
     * @return self
     */
    public function setMaxLength(?\TKusy\Hl7Fhir\R5\IntegerType $maxLength = null)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * Gets as answerConstraint
     *
     * For items that have a defined set of allowed answers (via answerOption or answerValueSet), indicates whether values *other* than those specified can be selected.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireAnswerConstraintType
     */
    public function getAnswerConstraint()
    {
        return $this->answerConstraint;
    }

    /**
     * Sets a new answerConstraint
     *
     * For items that have a defined set of allowed answers (via answerOption or answerValueSet), indicates whether values *other* than those specified can be selected.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireAnswerConstraintType $answerConstraint
     * @return self
     */
    public function setAnswerConstraint(?\TKusy\Hl7Fhir\R5\QuestionnaireAnswerConstraintType $answerConstraint = null)
    {
        $this->answerConstraint = $answerConstraint;
        return $this;
    }

    /**
     * Gets as answerValueSet
     *
     * A reference to a value set containing a list of values representing permitted answers for a question.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getAnswerValueSet()
    {
        return $this->answerValueSet;
    }

    /**
     * Sets a new answerValueSet
     *
     * A reference to a value set containing a list of values representing permitted answers for a question.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $answerValueSet
     * @return self
     */
    public function setAnswerValueSet(?\TKusy\Hl7Fhir\R5\CanonicalType $answerValueSet = null)
    {
        $this->answerValueSet = $answerValueSet;
        return $this;
    }

    /**
     * Adds as answerOption
     *
     * One of the permitted answers for the question.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireAnswerOptionType $answerOption
     */
    public function addToAnswerOption(\TKusy\Hl7Fhir\R5\QuestionnaireAnswerOptionType $answerOption)
    {
        $this->answerOption[] = $answerOption;
        return $this;
    }

    /**
     * isset answerOption
     *
     * One of the permitted answers for the question.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswerOption($index)
    {
        return isset($this->answerOption[$index]);
    }

    /**
     * unset answerOption
     *
     * One of the permitted answers for the question.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswerOption($index)
    {
        unset($this->answerOption[$index]);
    }

    /**
     * Gets as answerOption
     *
     * One of the permitted answers for the question.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireAnswerOptionType[]
     */
    public function getAnswerOption()
    {
        return $this->answerOption;
    }

    /**
     * Sets a new answerOption
     *
     * One of the permitted answers for the question.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireAnswerOptionType[] $answerOption
     * @return self
     */
    public function setAnswerOption(array $answerOption = null)
    {
        $this->answerOption = $answerOption;
        return $this;
    }

    /**
     * Adds as initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireInitialType $initial
     */
    public function addToInitial(\TKusy\Hl7Fhir\R5\QuestionnaireInitialType $initial)
    {
        $this->initial[] = $initial;
        return $this;
    }

    /**
     * isset initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInitial($index)
    {
        return isset($this->initial[$index]);
    }

    /**
     * unset initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInitial($index)
    {
        unset($this->initial[$index]);
    }

    /**
     * Gets as initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireInitialType[]
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * Sets a new initial
     *
     * One or more values that should be pre-populated in the answer when initially rendering the questionnaire for user input.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireInitialType[] $initial
     * @return self
     */
    public function setInitial(array $initial = null)
    {
        $this->initial = $initial;
        return $this;
    }

    /**
     * Adds as item
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\QuestionnaireItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Text, questions and other groups to be nested beneath a question or group.
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
     * Text, questions and other groups to be nested beneath a question or group.
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
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return \TKusy\Hl7Fhir\R5\QuestionnaireItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @param \TKusy\Hl7Fhir\R5\QuestionnaireItemType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }


}

