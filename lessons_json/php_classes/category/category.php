<?php
class RootObject
{
	public ?Category $category;

	/** @var Lessons[]|null */
	public ?array $lessons;

	/** @var Dialogues[]|null */
	public ?array $dialogues;

	/** @var Vocabularies[]|null */
	public ?array $vocabularies;

	public ?array $oxfordTests;

	public ?array $reviewLessons;

	/**
	 * @param Lessons[]|null $lessons
	 * @param Dialogues[]|null $dialogues
	 * @param Vocabularies[]|null $vocabularies
	 */
	public function __construct(
		?Category $category,
		?array $lessons,
		?array $dialogues,
		?array $vocabularies,
		?array $oxfordTests,
		?array $reviewLessons
	) {
		$this->category = $category;
		$this->lessons = $lessons;
		$this->dialogues = $dialogues;
		$this->vocabularies = $vocabularies;
		$this->oxfordTests = $oxfordTests;
		$this->reviewLessons = $reviewLessons;
	}

	public function getCategory(): ?Category
	{
		return $this->category;
	}

	/**
	 * @return Lessons[]|null
	 */
	public function getLessons(): ?array
	{
		return $this->lessons;
	}

	/**
	 * @return Dialogues[]|null
	 */
	public function getDialogues(): ?array
	{
		return $this->dialogues;
	}

	/**
	 * @return Vocabularies[]|null
	 */
	public function getVocabularies(): ?array
	{
		return $this->vocabularies;
	}

	public function getOxfordTests(): ?array
	{
		return $this->oxfordTests;
	}

	public function getReviewLessons(): ?array
	{
		return $this->reviewLessons;
	}

	public function setCategory(?Category $category): self
	{
		$this->category = $category;
		return $this;
	}

	/**
	 * @param Lessons[]|null $lessons
	 */
	public function setLessons(?array $lessons): self
	{
		$this->lessons = $lessons;
		return $this;
	}

	/**
	 * @param Dialogues[]|null $dialogues
	 */
	public function setDialogues(?array $dialogues): self
	{
		$this->dialogues = $dialogues;
		return $this;
	}

	/**
	 * @param Vocabularies[]|null $vocabularies
	 */
	public function setVocabularies(?array $vocabularies): self
	{
		$this->vocabularies = $vocabularies;
		return $this;
	}

	public function setOxfordTests(?array $oxfordTests): self
	{
		$this->oxfordTests = $oxfordTests;
		return $this;
	}

	public function setReviewLessons(?array $reviewLessons): self
	{
		$this->reviewLessons = $reviewLessons;
		return $this;
	}
}

class Category
{
	public ?int $id;

	public null $customIndex;

	public ?int $progressType;

	public ?UiModifiers $uiModifiers;

	public null $modifiers;

	public ?string $name;

	public ?int $countLesson;

	public ?int $countDialogue;

	public ?int $countVocabulary;

	public ?int $countOxfordTest;

	public ?int $countReviewLesson;

	/** @var int[]|null */
	public ?array $lessons;

	/** @var int[]|null */
	public ?array $dialogues;

	/** @var int[]|null */
	public ?array $vocabularies;

	public ?array $oxfordTests;

	public ?array $reviewLessons;

	public ?bool $disabled;

	public ?int $countDone;

	public ?float $time;

	/**
	 * @param int[]|null $lessons
	 * @param int[]|null $dialogues
	 * @param int[]|null $vocabularies
	 */
	public function __construct(
		?int $id,
		null $customIndex,
		?int $progressType,
		?UiModifiers $uiModifiers,
		null $modifiers,
		?string $name,
		?int $countLesson,
		?int $countDialogue,
		?int $countVocabulary,
		?int $countOxfordTest,
		?int $countReviewLesson,
		?array $lessons,
		?array $dialogues,
		?array $vocabularies,
		?array $oxfordTests,
		?array $reviewLessons,
		?bool $disabled,
		?int $countDone,
		?float $time
	) {
		$this->id = $id;
		$this->customIndex = $customIndex;
		$this->progressType = $progressType;
		$this->uiModifiers = $uiModifiers;
		$this->modifiers = $modifiers;
		$this->name = $name;
		$this->countLesson = $countLesson;
		$this->countDialogue = $countDialogue;
		$this->countVocabulary = $countVocabulary;
		$this->countOxfordTest = $countOxfordTest;
		$this->countReviewLesson = $countReviewLesson;
		$this->lessons = $lessons;
		$this->dialogues = $dialogues;
		$this->vocabularies = $vocabularies;
		$this->oxfordTests = $oxfordTests;
		$this->reviewLessons = $reviewLessons;
		$this->disabled = $disabled;
		$this->countDone = $countDone;
		$this->time = $time;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getCustomIndex(): null
	{
		return $this->customIndex;
	}

	public function getProgressType(): ?int
	{
		return $this->progressType;
	}

	public function getUiModifiers(): ?UiModifiers
	{
		return $this->uiModifiers;
	}

	public function getModifiers(): null
	{
		return $this->modifiers;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getCountLesson(): ?int
	{
		return $this->countLesson;
	}

	public function getCountDialogue(): ?int
	{
		return $this->countDialogue;
	}

	public function getCountVocabulary(): ?int
	{
		return $this->countVocabulary;
	}

	public function getCountOxfordTest(): ?int
	{
		return $this->countOxfordTest;
	}

	public function getCountReviewLesson(): ?int
	{
		return $this->countReviewLesson;
	}

	/**
	 * @return int[]|null
	 */
	public function getLessons(): ?array
	{
		return $this->lessons;
	}

	/**
	 * @return int[]|null
	 */
	public function getDialogues(): ?array
	{
		return $this->dialogues;
	}

	/**
	 * @return int[]|null
	 */
	public function getVocabularies(): ?array
	{
		return $this->vocabularies;
	}

	public function getOxfordTests(): ?array
	{
		return $this->oxfordTests;
	}

	public function getReviewLessons(): ?array
	{
		return $this->reviewLessons;
	}

	public function getDisabled(): ?bool
	{
		return $this->disabled;
	}

	public function getCountDone(): ?int
	{
		return $this->countDone;
	}

	public function getTime(): ?float
	{
		return $this->time;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setCustomIndex(null $customIndex): self
	{
		$this->customIndex = $customIndex;
		return $this;
	}

	public function setProgressType(?int $progressType): self
	{
		$this->progressType = $progressType;
		return $this;
	}

	public function setUiModifiers(?UiModifiers $uiModifiers): self
	{
		$this->uiModifiers = $uiModifiers;
		return $this;
	}

	public function setModifiers(null $modifiers): self
	{
		$this->modifiers = $modifiers;
		return $this;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function setCountLesson(?int $countLesson): self
	{
		$this->countLesson = $countLesson;
		return $this;
	}

	public function setCountDialogue(?int $countDialogue): self
	{
		$this->countDialogue = $countDialogue;
		return $this;
	}

	public function setCountVocabulary(?int $countVocabulary): self
	{
		$this->countVocabulary = $countVocabulary;
		return $this;
	}

	public function setCountOxfordTest(?int $countOxfordTest): self
	{
		$this->countOxfordTest = $countOxfordTest;
		return $this;
	}

	public function setCountReviewLesson(?int $countReviewLesson): self
	{
		$this->countReviewLesson = $countReviewLesson;
		return $this;
	}

	/**
	 * @param int[]|null $lessons
	 */
	public function setLessons(?array $lessons): self
	{
		$this->lessons = $lessons;
		return $this;
	}

	/**
	 * @param int[]|null $dialogues
	 */
	public function setDialogues(?array $dialogues): self
	{
		$this->dialogues = $dialogues;
		return $this;
	}

	/**
	 * @param int[]|null $vocabularies
	 */
	public function setVocabularies(?array $vocabularies): self
	{
		$this->vocabularies = $vocabularies;
		return $this;
	}

	public function setOxfordTests(?array $oxfordTests): self
	{
		$this->oxfordTests = $oxfordTests;
		return $this;
	}

	public function setReviewLessons(?array $reviewLessons): self
	{
		$this->reviewLessons = $reviewLessons;
		return $this;
	}

	public function setDisabled(?bool $disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}

	public function setCountDone(?int $countDone): self
	{
		$this->countDone = $countDone;
		return $this;
	}

	public function setTime(?float $time): self
	{
		$this->time = $time;
		return $this;
	}
}

class UiModifiers
{
	public ?bool $learningUnitNamesAndIndex;

	public ?bool $vocabularyRecapSubtitle;

	public function __construct(?bool $learningUnitNamesAndIndex, ?bool $vocabularyRecapSubtitle)
	{
		$this->learningUnitNamesAndIndex = $learningUnitNamesAndIndex;
		$this->vocabularyRecapSubtitle = $vocabularyRecapSubtitle;
	}

	public function getLearningUnitNamesAndIndex(): ?bool
	{
		return $this->learningUnitNamesAndIndex;
	}

	public function getVocabularyRecapSubtitle(): ?bool
	{
		return $this->vocabularyRecapSubtitle;
	}

	public function setLearningUnitNamesAndIndex(?bool $learningUnitNamesAndIndex): self
	{
		$this->learningUnitNamesAndIndex = $learningUnitNamesAndIndex;
		return $this;
	}

	public function setVocabularyRecapSubtitle(?bool $vocabularyRecapSubtitle): self
	{
		$this->vocabularyRecapSubtitle = $vocabularyRecapSubtitle;
		return $this;
	}
}

class Lessons
{
	public ?int $id;

	public ?int $i;

	public ?int $index;

	public ?int $positionIndex;

	public null $unitNumber;

	public ?int $unitType;

	public ?int $unitStyle;

	public ?int $unitScope;

	public ?int $category;

	public ?int $categoryId;

	public ?string $name;

	public ?bool $disabled;

	public ?bool $done;

	public int|bool|null $stars;

	public ?int $countDone;

	public function __construct(
		?int $id,
		?int $i,
		?int $index,
		?int $positionIndex,
		null $unitNumber,
		?int $unitType,
		?int $unitStyle,
		?int $unitScope,
		?int $category,
		?int $categoryId,
		?string $name,
		?bool $disabled,
		?bool $done,
		int|bool|null $stars,
		?int $countDone
	) {
		$this->id = $id;
		$this->i = $i;
		$this->index = $index;
		$this->positionIndex = $positionIndex;
		$this->unitNumber = $unitNumber;
		$this->unitType = $unitType;
		$this->unitStyle = $unitStyle;
		$this->unitScope = $unitScope;
		$this->category = $category;
		$this->categoryId = $categoryId;
		$this->name = $name;
		$this->disabled = $disabled;
		$this->done = $done;
		$this->stars = $stars;
		$this->countDone = $countDone;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getI(): ?int
	{
		return $this->i;
	}

	public function getIndex(): ?int
	{
		return $this->index;
	}

	public function getPositionIndex(): ?int
	{
		return $this->positionIndex;
	}

	public function getUnitNumber(): null
	{
		return $this->unitNumber;
	}

	public function getUnitType(): ?int
	{
		return $this->unitType;
	}

	public function getUnitStyle(): ?int
	{
		return $this->unitStyle;
	}

	public function getUnitScope(): ?int
	{
		return $this->unitScope;
	}

	public function getCategory(): ?int
	{
		return $this->category;
	}

	public function getCategoryId(): ?int
	{
		return $this->categoryId;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getDisabled(): ?bool
	{
		return $this->disabled;
	}

	public function getDone(): ?bool
	{
		return $this->done;
	}

	public function getStars(): int|bool|null
	{
		return $this->stars;
	}

	public function getCountDone(): ?int
	{
		return $this->countDone;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setI(?int $i): self
	{
		$this->i = $i;
		return $this;
	}

	public function setIndex(?int $index): self
	{
		$this->index = $index;
		return $this;
	}

	public function setPositionIndex(?int $positionIndex): self
	{
		$this->positionIndex = $positionIndex;
		return $this;
	}

	public function setUnitNumber(null $unitNumber): self
	{
		$this->unitNumber = $unitNumber;
		return $this;
	}

	public function setUnitType(?int $unitType): self
	{
		$this->unitType = $unitType;
		return $this;
	}

	public function setUnitStyle(?int $unitStyle): self
	{
		$this->unitStyle = $unitStyle;
		return $this;
	}

	public function setUnitScope(?int $unitScope): self
	{
		$this->unitScope = $unitScope;
		return $this;
	}

	public function setCategory(?int $category): self
	{
		$this->category = $category;
		return $this;
	}

	public function setCategoryId(?int $categoryId): self
	{
		$this->categoryId = $categoryId;
		return $this;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function setDisabled(?bool $disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}

	public function setDone(?bool $done): self
	{
		$this->done = $done;
		return $this;
	}

	public function setStars(int|bool|null $stars): self
	{
		$this->stars = $stars;
		return $this;
	}

	public function setCountDone(?int $countDone): self
	{
		$this->countDone = $countDone;
		return $this;
	}
}

class Dialogues
{
	public ?int $id;

	public ?int $i;

	public ?int $index;

	public ?int $positionIndex;

	public ?int $category;

	public ?int $categoryId;

	public ?int $categoryModifiers;

	public ?string $name;

	public ?bool $done;

	public ?bool $disabled;

	public ?int $countItem;

	public ?int $countDone;

	public ?int $countWords;

	public ?int $countPhrases;

	public function __construct(
		?int $id,
		?int $i,
		?int $index,
		?int $positionIndex,
		?int $category,
		?int $categoryId,
		?int $categoryModifiers,
		?string $name,
		?bool $done,
		?bool $disabled,
		?int $countItem,
		?int $countDone,
		?int $countWords,
		?int $countPhrases
	) {
		$this->id = $id;
		$this->i = $i;
		$this->index = $index;
		$this->positionIndex = $positionIndex;
		$this->category = $category;
		$this->categoryId = $categoryId;
		$this->categoryModifiers = $categoryModifiers;
		$this->name = $name;
		$this->done = $done;
		$this->disabled = $disabled;
		$this->countItem = $countItem;
		$this->countDone = $countDone;
		$this->countWords = $countWords;
		$this->countPhrases = $countPhrases;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getI(): ?int
	{
		return $this->i;
	}

	public function getIndex(): ?int
	{
		return $this->index;
	}

	public function getPositionIndex(): ?int
	{
		return $this->positionIndex;
	}

	public function getCategory(): ?int
	{
		return $this->category;
	}

	public function getCategoryId(): ?int
	{
		return $this->categoryId;
	}

	public function getCategoryModifiers(): ?int
	{
		return $this->categoryModifiers;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getDone(): ?bool
	{
		return $this->done;
	}

	public function getDisabled(): ?bool
	{
		return $this->disabled;
	}

	public function getCountItem(): ?int
	{
		return $this->countItem;
	}

	public function getCountDone(): ?int
	{
		return $this->countDone;
	}

	public function getCountWords(): ?int
	{
		return $this->countWords;
	}

	public function getCountPhrases(): ?int
	{
		return $this->countPhrases;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setI(?int $i): self
	{
		$this->i = $i;
		return $this;
	}

	public function setIndex(?int $index): self
	{
		$this->index = $index;
		return $this;
	}

	public function setPositionIndex(?int $positionIndex): self
	{
		$this->positionIndex = $positionIndex;
		return $this;
	}

	public function setCategory(?int $category): self
	{
		$this->category = $category;
		return $this;
	}

	public function setCategoryId(?int $categoryId): self
	{
		$this->categoryId = $categoryId;
		return $this;
	}

	public function setCategoryModifiers(?int $categoryModifiers): self
	{
		$this->categoryModifiers = $categoryModifiers;
		return $this;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function setDone(?bool $done): self
	{
		$this->done = $done;
		return $this;
	}

	public function setDisabled(?bool $disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}

	public function setCountItem(?int $countItem): self
	{
		$this->countItem = $countItem;
		return $this;
	}

	public function setCountDone(?int $countDone): self
	{
		$this->countDone = $countDone;
		return $this;
	}

	public function setCountWords(?int $countWords): self
	{
		$this->countWords = $countWords;
		return $this;
	}

	public function setCountPhrases(?int $countPhrases): self
	{
		$this->countPhrases = $countPhrases;
		return $this;
	}
}

class Vocabularies
{
	public ?int $id;

	public ?int $i;

	public ?int $index;

	public ?int $positionIndex;

	public ?int $category;

	public ?int $categoryId;

	public null $name;

	public ?bool $disabled;

	public ?bool $done;

	public ?int $stars;

	public ?int $countDone;

	public function __construct(
		?int $id,
		?int $i,
		?int $index,
		?int $positionIndex,
		?int $category,
		?int $categoryId,
		null $name,
		?bool $disabled,
		?bool $done,
		?int $stars,
		?int $countDone
	) {
		$this->id = $id;
		$this->i = $i;
		$this->index = $index;
		$this->positionIndex = $positionIndex;
		$this->category = $category;
		$this->categoryId = $categoryId;
		$this->name = $name;
		$this->disabled = $disabled;
		$this->done = $done;
		$this->stars = $stars;
		$this->countDone = $countDone;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getI(): ?int
	{
		return $this->i;
	}

	public function getIndex(): ?int
	{
		return $this->index;
	}

	public function getPositionIndex(): ?int
	{
		return $this->positionIndex;
	}

	public function getCategory(): ?int
	{
		return $this->category;
	}

	public function getCategoryId(): ?int
	{
		return $this->categoryId;
	}

	public function getName(): null
	{
		return $this->name;
	}

	public function getDisabled(): ?bool
	{
		return $this->disabled;
	}

	public function getDone(): ?bool
	{
		return $this->done;
	}

	public function getStars(): ?int
	{
		return $this->stars;
	}

	public function getCountDone(): ?int
	{
		return $this->countDone;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setIclass RootObject
{
	public ?Category $category;

	/** @var Lessons[]|null */
	public ?array $lessons;

	/** @var Dialogues[]|null */
	public ?array $dialogues;

	/** @var Vocabularies[]|null */
	public ?array $vocabularies;

	public ?array $oxfordTests;

	public ?array $reviewLessons;

	/**
	 * @param Lessons[]|null $lessons
	 * @param Dialogues[]|null $dialogues
	 * @param Vocabularies[]|null $vocabularies
	 */
	public function __construct(
		?Category $category,
		?array $lessons,
		?array $dialogues,
		?array $vocabularies,
		?array $oxfordTests,
		?array $reviewLessons
	) {
		$this->category = $category;
		$this->lessons = $lessons;
		$this->dialogues = $dialogues;
		$this->vocabularies = $vocabularies;
		$this->oxfordTests = $oxfordTests;
		$this->reviewLessons = $reviewLessons;
	}

	public function getCategory(): ?Category
	{
		return $this->category;
	}

	/**
	 * @return Lessons[]|null
	 */
	public function getLessons(): ?array
	{
		return $this->lessons;
	}

	/**
	 * @return Dialogues[]|null
	 */
	public function getDialogues(): ?array
	{
		return $this->dialogues;
	}

	/**
	 * @return Vocabularies[]|null
	 */
	public function getVocabularies(): ?array
	{
		return $this->vocabularies;
	}

	public function getOxfordTests(): ?array
	{
		return $this->oxfordTests;
	}

	public function getReviewLessons(): ?array
	{
		return $this->reviewLessons;
	}

	public function setCategory(?Category $category): self
	{
		$this->category = $category;
		return $this;
	}

	/**
	 * @param Lessons[]|null $lessons
	 */
	public function setLessons(?array $lessons): self
	{
		$this->lessons = $lessons;
		return $this;
	}

	/**
	 * @param Dialogues[]|null $dialogues
	 */
	public function setDialogues(?array $dialogues): self
	{
		$this->dialogues = $dialogues;
		return $this;
	}

	/**
	 * @param Vocabularies[]|null $vocabularies
	 */
	public function setVocabularies(?array $vocabularies): self
	{
		$this->vocabularies = $vocabularies;
		return $this;
	}

	public function setOxfordTests(?array $oxfordTests): self
	{
		$this->oxfordTests = $oxfordTests;
		return $this;
	}

	public function setReviewLessons(?array $reviewLessons): self
	{
		$this->reviewLessons = $reviewLessons;
		return $this;
	}
}

class Category
{
	public ?int $id;

	public null $customIndex;

	public ?int $progressType;

	public ?UiModifiers $uiModifiers;

	public null $modifiers;

	public ?string $name;

	public ?int $countLesson;

	public ?int $countDialogue;

	public ?int $countVocabulary;

	public ?int $countOxfordTest;

	public ?int $countReviewLesson;

	/** @var int[]|null */
	public ?array $lessons;

	/** @var int[]|null */
	public ?array $dialogues;

	/** @var int[]|null */
	public ?array $vocabularies;

	public ?array $oxfordTests;

	public ?array $reviewLessons;

	public ?bool $disabled;

	public ?int $countDone;

	public ?float $time;

	/**
	 * @param int[]|null $lessons
	 * @param int[]|null $dialogues
	 * @param int[]|null $vocabularies
	 */
	public function __construct(
		?int $id,
		null $customIndex,
		?int $progressType,
		?UiModifiers $uiModifiers,
		null $modifiers,
		?string $name,
		?int $countLesson,
		?int $countDialogue,
		?int $countVocabulary,
		?int $countOxfordTest,
		?int $countReviewLesson,
		?array $lessons,
		?array $dialogues,
		?array $vocabularies,
		?array $oxfordTests,
		?array $reviewLessons,
		?bool $disabled,
		?int $countDone,
		?float $time
	) {
		$this->id = $id;
		$this->customIndex = $customIndex;
		$this->progressType = $progressType;
		$this->uiModifiers = $uiModifiers;
		$this->modifiers = $modifiers;
		$this->name = $name;
		$this->countLesson = $countLesson;
		$this->countDialogue = $countDialogue;
		$this->countVocabulary = $countVocabulary;
		$this->countOxfordTest = $countOxfordTest;
		$this->countReviewLesson = $countReviewLesson;
		$this->lessons = $lessons;
		$this->dialogues = $dialogues;
		$this->vocabularies = $vocabularies;
		$this->oxfordTests = $oxfordTests;
		$this->reviewLessons = $reviewLessons;
		$this->disabled = $disabled;
		$this->countDone = $countDone;
		$this->time = $time;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getCustomIndex(): null
	{
		return $this->customIndex;
	}

	public function getProgressType(): ?int
	{
		return $this->progressType;
	}

	public function getUiModifiers(): ?UiModifiers
	{
		return $this->uiModifiers;
	}

	public function getModifiers(): null
	{
		return $this->modifiers;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getCountLesson(): ?int
	{
		return $this->countLesson;
	}

	public function getCountDialogue(): ?int
	{
		return $this->countDialogue;
	}

	public function getCountVocabulary(): ?int
	{
		return $this->countVocabulary;
	}

	public function getCountOxfordTest(): ?int
	{
		return $this->countOxfordTest;
	}

	public function getCountReviewLesson(): ?int
	{
		return $this->countReviewLesson;
	}

	/**
	 * @return int[]|null
	 */
	public function getLessons(): ?array
	{
		return $this->lessons;
	}

	/**
	 * @return int[]|null
	 */
	public function getDialogues(): ?array
	{
		return $this->dialogues;
	}

	/**
	 * @return int[]|null
	 */
	public function getVocabularies(): ?array
	{
		return $this->vocabularies;
	}

	public function getOxfordTests(): ?array
	{
		return $this->oxfordTests;
	}

	public function getReviewLessons(): ?array
	{
		return $this->reviewLessons;
	}

	public function getDisabled(): ?bool
	{
		return $this->disabled;
	}

	public function getCountDone(): ?int
	{
		return $this->countDone;
	}

	public function getTime(): ?float
	{
		return $this->time;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setCustomIndex(null $customIndex): self
	{
		$this->customIndex = $customIndex;
		return $this;
	}

	public function setProgressType(?int $progressType): self
	{
		$this->progressType = $progressType;
		return $this;
	}

	public function setUiModifiers(?UiModifiers $uiModifiers): self
	{
		$this->uiModifiers = $uiModifiers;
		return $this;
	}

	public function setModifiers(null $modifiers): self
	{
		$this->modifiers = $modifiers;
		return $this;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function setCountLesson(?int $countLesson): self
	{
		$this->countLesson = $countLesson;
		return $this;
	}

	public function setCountDialogue(?int $countDialogue): self
	{
		$this->countDialogue = $countDialogue;
		return $this;
	}

	public function setCountVocabulary(?int $countVocabulary): self
	{
		$this->countVocabulary = $countVocabulary;
		return $this;
	}

	public function setCountOxfordTest(?int $countOxfordTest): self
	{
		$this->countOxfordTest = $countOxfordTest;
		return $this;
	}

	public function setCountReviewLesson(?int $countReviewLesson): self
	{
		$this->countReviewLesson = $countReviewLesson;
		return $this;
	}

	/**
	 * @param int[]|null $lessons
	 */
	public function setLessons(?array $lessons): self
	{
		$this->lessons = $lessons;
		return $this;
	}

	/**
	 * @param int[]|null $dialogues
	 */
	public function setDialogues(?array $dialogues): self
	{
		$this->dialogues = $dialogues;
		return $this;
	}

	/**
	 * @param int[]|null $vocabularies
	 */
	public function setVocabularies(?array $vocabularies): self
	{
		$this->vocabularies = $vocabularies;
		return $this;
	}

	public function setOxfordTests(?array $oxfordTests): self
	{
		$this->oxfordTests = $oxfordTests;
		return $this;
	}

	public function setReviewLessons(?array $reviewLessons): self
	{
		$this->reviewLessons = $reviewLessons;
		return $this;
	}

	public function setDisabled(?bool $disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}

	public function setCountDone(?int $countDone): self
	{
		$this->countDone = $countDone;
		return $this;
	}

	public function setTime(?float $time): self
	{
		$this->time = $time;
		return $this;
	}
}

class UiModifiers
{
	public ?bool $learningUnitNamesAndIndex;

	public ?bool $vocabularyRecapSubtitle;

	public function __construct(?bool $learningUnitNamesAndIndex, ?bool $vocabularyRecapSubtitle)
	{
		$this->learningUnitNamesAndIndex = $learningUnitNamesAndIndex;
		$this->vocabularyRecapSubtitle = $vocabularyRecapSubtitle;
	}

	public function getLearningUnitNamesAndIndex(): ?bool
	{
		return $this->learningUnitNamesAndIndex;
	}

	public function getVocabularyRecapSubtitle(): ?bool
	{
		return $this->vocabularyRecapSubtitle;
	}

	public function setLearningUnitNamesAndIndex(?bool $learningUnitNamesAndIndex): self
	{
		$this->learningUnitNamesAndIndex = $learningUnitNamesAndIndex;
		return $this;
	}

	public function setVocabularyRecapSubtitle(?bool $vocabularyRecapSubtitle): self
	{
		$this->vocabularyRecapSubtitle = $vocabularyRecapSubtitle;
		return $this;
	}
}

class Lessons
{
	public ?int $id;

	public ?int $i;

	public ?int $index;

	public ?int $positionIndex;

	public null $unitNumber;

	public ?int $unitType;

	public ?int $unitStyle;

	public ?int $unitScope;

	public ?int $category;

	public ?int $categoryId;

	public ?string $name;

	public ?bool $disabled;

	public ?bool $done;

	public int|bool|null $stars;

	public ?int $countDone;

	public function __construct(
		?int $id,
		?int $i,
		?int $index,
		?int $positionIndex,
		null $unitNumber,
		?int $unitType,
		?int $unitStyle,
		?int $unitScope,
		?int $category,
		?int $categoryId,
		?string $name,
		?bool $disabled,
		?bool $done,
		int|bool|null $stars,
		?int $countDone
	) {
		$this->id = $id;
		$this->i = $i;
		$this->index = $index;
		$this->positionIndex = $positionIndex;
		$this->unitNumber = $unitNumber;
		$this->unitType = $unitType;
		$this->unitStyle = $unitStyle;
		$this->unitScope = $unitScope;
		$this->category = $category;
		$this->categoryId = $categoryId;
		$this->name = $name;
		$this->disabled = $disabled;
		$this->done = $done;
		$this->stars = $stars;
		$this->countDone = $countDone;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getI(): ?int
	{
		return $this->i;
	}

	public function getIndex(): ?int
	{
		return $this->index;
	}

	public function getPositionIndex(): ?int
	{
		return $this->positionIndex;
	}

	public function getUnitNumber(): null
	{
		return $this->unitNumber;
	}

	public function getUnitType(): ?int
	{
		return $this->unitType;
	}

	public function getUnitStyle(): ?int
	{
		return $this->unitStyle;
	}

	public function getUnitScope(): ?int
	{
		return $this->unitScope;
	}

	public function getCategory(): ?int
	{
		return $this->category;
	}

	public function getCategoryId(): ?int
	{
		return $this->categoryId;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getDisabled(): ?bool
	{
		return $this->disabled;
	}

	public function getDone(): ?bool
	{
		return $this->done;
	}

	public function getStars(): int|bool|null
	{
		return $this->stars;
	}

	public function getCountDone(): ?int
	{
		return $this->countDone;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setI(?int $i): self
	{
		$this->i = $i;
		return $this;
	}

	public function setIndex(?int $index): self
	{
		$this->index = $index;
		return $this;
	}

	public function setPositionIndex(?int $positionIndex): self
	{
		$this->positionIndex = $positionIndex;
		return $this;
	}

	public function setUnitNumber(null $unitNumber): self
	{
		$this->unitNumber = $unitNumber;
		return $this;
	}

	public function setUnitType(?int $unitType): self
	{
		$this->unitType = $unitType;
		return $this;
	}

	public function setUnitStyle(?int $unitStyle): self
	{
		$this->unitStyle = $unitStyle;
		return $this;
	}

	public function setUnitScope(?int $unitScope): self
	{
		$this->unitScope = $unitScope;
		return $this;
	}

	public function setCategory(?int $category): self
	{
		$this->category = $category;
		return $this;
	}

	public function setCategoryId(?int $categoryId): self
	{
		$this->categoryId = $categoryId;
		return $this;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function setDisabled(?bool $disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}

	public function setDone(?bool $done): self
	{
		$this->done = $done;
		return $this;
	}

	public function setStars(int|bool|null $stars): self
	{
		$this->stars = $stars;
		return $this;
	}

	public function setCountDone(?int $countDone): self
	{
		$this->countDone = $countDone;
		return $this;
	}
}

class Dialogues
{
	public ?int $id;

	public ?int $i;

	public ?int $index;

	public ?int $positionIndex;

	public ?int $category;

	public ?int $categoryId;

	public ?int $categoryModifiers;

	public ?string $name;

	public ?bool $done;

	public ?bool $disabled;

	public ?int $countItem;

	public ?int $countDone;

	public ?int $countWords;

	public ?int $countPhrases;

	public function __construct(
		?int $id,
		?int $i,
		?int $index,
		?int $positionIndex,
		?int $category,
		?int $categoryId,
		?int $categoryModifiers,
		?string $name,
		?bool $done,
		?bool $disabled,
		?int $countItem,
		?int $countDone,
		?int $countWords,
		?int $countPhrases
	) {
		$this->id = $id;
		$this->i = $i;
		$this->index = $index;
		$this->positionIndex = $positionIndex;
		$this->category = $category;
		$this->categoryId = $categoryId;
		$this->categoryModifiers = $categoryModifiers;
		$this->name = $name;
		$this->done = $done;
		$this->disabled = $disabled;
		$this->countItem = $countItem;
		$this->countDone = $countDone;
		$this->countWords = $countWords;
		$this->countPhrases = $countPhrases;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getI(): ?int
	{
		return $this->i;
	}

	public function getIndex(): ?int
	{
		return $this->index;
	}

	public function getPositionIndex(): ?int
	{
		return $this->positionIndex;
	}

	public function getCategory(): ?int
	{
		return $this->category;
	}

	public function getCategoryId(): ?int
	{
		return $this->categoryId;
	}

	public function getCategoryModifiers(): ?int
	{
		return $this->categoryModifiers;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function getDone(): ?bool
	{
		return $this->done;
	}

	public function getDisabled(): ?bool
	{
		return $this->disabled;
	}

	public function getCountItem(): ?int
	{
		return $this->countItem;
	}

	public function getCountDone(): ?int
	{
		return $this->countDone;
	}

	public function getCountWords(): ?int
	{
		return $this->countWords;
	}

	public function getCountPhrases(): ?int
	{
		return $this->countPhrases;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setI(?int $i): self
	{
		$this->i = $i;
		return $this;
	}

	public function setIndex(?int $index): self
	{
		$this->index = $index;
		return $this;
	}

	public function setPositionIndex(?int $positionIndex): self
	{
		$this->positionIndex = $positionIndex;
		return $this;
	}

	public function setCategory(?int $category): self
	{
		$this->category = $category;
		return $this;
	}

	public function setCategoryId(?int $categoryId): self
	{
		$this->categoryId = $categoryId;
		return $this;
	}

	public function setCategoryModifiers(?int $categoryModifiers): self
	{
		$this->categoryModifiers = $categoryModifiers;
		return $this;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function setDone(?bool $done): self
	{
		$this->done = $done;
		return $this;
	}

	public function setDisabled(?bool $disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}

	public function setCountItem(?int $countItem): self
	{
		$this->countItem = $countItem;
		return $this;
	}

	public function setCountDone(?int $countDone): self
	{
		$this->countDone = $countDone;
		return $this;
	}

	public function setCountWords(?int $countWords): self
	{
		$this->countWords = $countWords;
		return $this;
	}

	public function setCountPhrases(?int $countPhrases): self
	{
		$this->countPhrases = $countPhrases;
		return $this;
	}
}

class Vocabularies
{
	public ?int $id;

	public ?int $i;

	public ?int $index;

	public ?int $positionIndex;

	public ?int $category;

	public ?int $categoryId;

	public null $name;

	public ?bool $disabled;

	public ?bool $done;

	public ?int $stars;

	public ?int $countDone;

	public function __construct(
		?int $id,
		?int $i,
		?int $index,
		?int $positionIndex,
		?int $category,
		?int $categoryId,
		null $name,
		?bool $disabled,
		?bool $done,
		?int $stars,
		?int $countDone
	) {
		$this->id = $id;
		$this->i = $i;
		$this->index = $index;
		$this->positionIndex = $positionIndex;
		$this->category = $category;
		$this->categoryId = $categoryId;
		$this->name = $name;
		$this->disabled = $disabled;
		$this->done = $done;
		$this->stars = $stars;
		$this->countDone = $countDone;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getI(): ?int
	{
		return $this->i;
	}

	public function getIndex(): ?int
	{
		return $this->index;
	}

	public function getPositionIndex(): ?int
	{
		return $this->positionIndex;
	}

	public function getCategory(): ?int
	{
		return $this->category;
	}

	public function getCategoryId(): ?int
	{
		return $this->categoryId;
	}

	public function getName(): null
	{
		return $this->name;
	}

	public function getDisabled(): ?bool
	{
		return $this->disabled;
	}

	public function getDone(): ?bool
	{
		return $this->done;
	}

	public function getStars(): ?int
	{
		return $this->stars;
	}

	public function getCountDone(): ?int
	{
		return $this->countDone;
	}

	public function setId(?int $id): self
	{
		$this->id = $id;
		return $this;
	}

	public function setI(?int $i): self
	{
		$this->i = $i;
		return $this;
	}

	public function setIndex(?int $index): self
	{
		$this->index = $index;
		return $this;
	}

	public function setPositionIndex(?int $positionIndex): self
	{
		$this->positionIndex = $positionIndex;
		return $this;
	}

	public function setCategory(?int $category): self
	{
		$this->category = $category;
		return $this;
	}

	public function setCategoryId(?int $categoryId): self
	{
		$this->categoryId = $categoryId;
		return $this;
	}

	public function setName(null $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function setDisabled(?bool $disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}

	public function setDone(?bool $done): self
	{
		$this->done = $done;
		return $this;
	}

	public function setStars(?int $stars): self
	{
		$this->stars = $stars;
		return $this;
	}

	public function setCountDone(?int $countDone): self
	{
		$this->countDone = $countDone;
		return $this;
	}
}(?int $i): self
	{
		$this->i = $i;
		return $this;
	}

	public function setIndex(?int $index): self
	{
		$this->index = $index;
		return $this;
	}

	public function setPositionIndex(?int $positionIndex): self
	{
		$this->positionIndex = $positionIndex;
		return $this;
	}

	public function setCategory(?int $category): self
	{
		$this->category = $category;
		return $this;
	}

	public function setCategoryId(?int $categoryId): self
	{
		$this->categoryId = $categoryId;
		return $this;
	}

	public function setName(null $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function setDisabled(?bool $disabled): self
	{
		$this->disabled = $disabled;
		return $this;
	}

	public function setDone(?bool $done): self
	{
		$this->done = $done;
		return $this;
	}

	public function setStars(?int $stars): self
	{
		$this->stars = $stars;
		return $this;
	}

	public function setCountDone(?int $countDone): self
	{
		$this->countDone = $countDone;
		return $this;
	}
}
?>
