# Release Notes for Craft CMS 3.7

### Added
- Added the “Reduce focus visibility” user preference. ([#7790](https://github.com/craftcms/cms/issues/7790))
- The Entries index page now has “Create a new entry before” and “Create a new entry after” actions for entries within Structure sections. ([#870](https://github.com/craftcms/cms/issues/870))
- Edit Entry pages now treat unpublished drafts similarly to published entries, rather than drafts. ([#7899](https://github.com/craftcms/cms/pull/7899))
- Edit Entry pages no longer appear to create a draft when the Current revision is edited within Live Preview. Unsaved changes are now stored within a “provisional draft”, which is mostly hidden from the author. ([#7899](https://github.com/craftcms/cms/pull/7899))
- Date fields now have a “Show Time Zone” setting, allowing authors to choose which time zone the date is set to, rather than using the system time zone.
- Matrix fields can now be set to custom propagation methods, based on a propagation key template. ([#7610](https://github.com/craftcms/cms/issues/7610))
- Added a “Refresh” button to Live Preview, for preview targets whose “Auto-refresh” (formerly “Refresh”) setting is disabled.
- Added the `siteSettingsId` element query and GraphQL API query parameter for all elements.
- Added the `preferSites` GraphQL API query argument for all elements. ([#8006](https://github.com/craftcms/cms/pull/8006))
- Added the `ancestors`, `descendants`, `drafts`, draftCreator`, `revisions`, `currentRevision`, and `revisionCreator` field to entry queries when using GraphQL API. ([#7950]((https://github.com/craftcms/cms/issues/7950)))
- Added the `setGraphqlDatesToSystemTimeZone` config setting. ([#8016](https://github.com/craftcms/cms/pull/8016))
- Added the `revAssetUrls` config setting. ([#7847](https://github.com/craftcms/cms/issues/7847))
- Added `craft\base\Element::EVENT_DEFINE_IS_DELETABLE`.
- Added `craft\base\Element::EVENT_DEFINE_IS_EDITABLE`. ([#8023](https://github.com/craftcms/cms/issues/8023))
- Added `craft\base\Element::EVENT_DEFINE_METADATA`.
- Added `craft\base\Element::EVENT_DEFINE_META_FIELDS_HTML`.
- Added `craft\base\Element::EVENT_DEFINE_SIDEBAR_HTML`.
- Added `craft\base\Element::cpEditUrl()`, which should be overridden rather than `getCpEditUrl()`.
- Added `craft\base\Element::isDeletable()`.
- Added `craft\base\Element::isEditable()`.
- Added `craft\base\Element::metaFieldsHtml()`.
- Added `craft\base\Element::metadata()`.
- Added `craft\base\Element::slugFieldHtml()`.
- Added `craft\base\ElementInterface::getCanonical()`.
- Added `craft\base\ElementInterface::getCanonicalId()`.
- Added `craft\base\ElementInterface::getIsCanonical()`.
- Added `craft\base\ElementInterface::getIsDerivative()`.
- Added `craft\base\ElementInterface::getIsProvisionalDraft()`.
- Added `craft\base\ElementInterface::getMetadata()`.
- Added `craft\base\ElementInterface::getModifiedAttributes()`.
- Added `craft\base\ElementInterface::getModifiedFields()`.
- Added `craft\base\ElementInterface::getOutdatedAttributes()`.
- Added `craft\base\ElementInterface::getOutdatedFields()`.
- Added `craft\base\ElementInterface::getParentUri()`. ([#7932](https://github.com/craftcms/cms/issues/7932))
- Added `craft\base\ElementInterface::getSidebarHtml()`.
- Added `craft\base\ElementInterface::isAttributeModified()`.
- Added `craft\base\ElementInterface::isAttributeOutdated()`.
- Added `craft\base\ElementInterface::isFieldModified()`.
- Added `craft\base\ElementInterface::isFieldOutdated()`.
- Added `craft\base\ElementInterface::mergeCanonicalChanges()`.
- Added `craft\base\ElementInterface::setCanonical()`.
- Added `craft\base\ElementInterface::setCanonicalId()`.
- Added `craft\base\ElementTrait::$dateLastMerged`.
- Added `craft\base\ElementTrait::$isProvisionalDraft`.
- Added `craft\base\ElementTrait::$mergingCanonicalChanges`.
- Added `craft\base\ElementTrait::$updatingFromDerivative`.
- Added `craft\base\FieldInterface::copyValue()`.
- Added `craft\base\FieldInterface::getStatus()`.
- Added `craft\base\FieldTrait::$columnSuffix`.
- Added `craft\console\ControllerTrait::checkRootUser()`.
- Added `craft\console\controllers\ResaveController::resaveElements()`.
- Added `craft\elements\User::EVENT_DEFINE_FRIENDLY_NAME`. ([#8027](https://github.com/craftcms/cms/issues/8027))
- Added `craft\elements\User::EVENT_DEFINE_NAME`. ([#8027](https://github.com/craftcms/cms/issues/8027))
- Added `craft\elements\User::setFriendlyName()`.
- Added `craft\elements\User::setName()`.
- Added `craft\elements\db\ElementQuery::provisionalDrafts()`.
- Added `craft\events\DefineHtmlEvent`.
- Added `craft\events\DefineMetadataEvent`.
- Added `craft\events\DefineValueEvent`.
- Added `craft\events\DraftEvent::$provisional`.
- Added `craft\fields\Matrix::$propagationKeyFormat`.
- Added `craft\fields\Matrix::PROPAGATION_METHOD_CUSTOM`.
- Added `craft\helpers\Cp::dateTimeFieldHtml()`.
- Added `craft\helpers\Cp::editElementTitles()`.
- Added `craft\helpers\Cp::elementSelectFieldHtml()`.
- Added `craft\helpers\Cp::metadataHtml()`.
- Added `craft\helpers\Db::batch()` and `each()`, which can be used instead of `craft\db\Query::batch()` and `each()`, to execute batched SQL queries over a new, unbuffered database connection (if using MySQL). ([#7338](https://github.com/craftcms/cms/issues/7338))
- Added `craft\helpers\ElementHelper::fieldColumn()`.
- Added `craft\helpers\ElementHelper::fieldColumnFromField()`.
- Added `craft\helpers\ElementHelper::isDraft()`.
- Added `craft\helpers\ElementHelper::isRevision()`.
- Added `craft\helpers\Html::parseTagAttribute()`.
- Added `craft\models\FieldLayout::$reservedAttributes`.
- Added `craft\services\Elements::EVENT_AFTER_MERGE_CANONICAL_CHANGES`.
- Added `craft\services\Elements::EVENT_BEFORE_MERGE_CANONICAL_CHANGES`.
- Added `craft\services\Elements::mergeCanonicalChanges()`.
- Added `craft\services\Elements::updateCanonicalElement()`.
- Added `craft\services\Matrix::mergeCanonicalChanges()`.
- Added `craft\web\Request::checkIfActionRequest()`.
- Added `craft\web\View::clearCssBuffer()`.
- Added `craft\web\View::clearScriptBuffer()`.
- Added `craft\web\View::startCssBuffer()`.
- Added `craft\web\View::startScriptBuffer()`.
- Added `craft\web\twig\variables\Cp::getTimeZoneOptions()`.
- Added the `timeZone` and `timeZoneField` macros to the `_includes/forms.html` control panel template.
- Added the `Craft.Slideout` JavaScript class.
- Added the `Craft.Tabs` JavaScript class.
- Added the `Craft.setFocusWithin()` JavaScript method.
- Added the `Craft.trapFocusWithin()` JavaScript method.

### Changed
- Changes from an entry’s Current revision are now automatically merged into drafts upon visiting drafts’ edit pages.
- When changes from an entry’s Current revision are merged into a draft, Matrix field changes are now merged on a per-block basis. ([#5503](https://github.com/craftcms/cms/issues/5503), [#7710](https://github.com/craftcms/cms/pull/7710))
- Inline element editors now use slideouts rather than HUDs, and include the element’s fully-rendered field layout (including tabs and custom UI elements), meta fields (Slug, Post Date, etc.) and metadata, plus a link to open the element’s dedicated edit page in a new browser tab. ([#8017](https://github.com/craftcms/cms/pull/8017))
- The “Publish draft” button has been relabelled to “Apply draft”.
- Matrix blocks now retain their original IDs and UIDs when a draft is published. ([#7710](https://github.com/craftcms/cms/pull/7710))
- Improved the styling of field status indicators.
- Field status indicators now appear immediately after a field’s value is changed and saved successfully to a draft.
- Improved the design and accessibility of tabs in the control panel. ([#7299](https://github.com/craftcms/cms/issues/7299))
- Improved the UI of the Time Zone input in Settings → General.
- Tag field layouts now include the Title field, allowing its placement and label to be customized.
- Custom fields with a custom translation method are no longer labelled as translatable if the translation key is an empty string. ([#7647](https://github.com/craftcms/cms/issues/7647))
- Category and tag groups no longer validate if their field layout contains a field called `group`. ([#2797](https://github.com/craftcms/cms/issues/2797))
- Entry types no longer validate if their field layout contains a field called `author`, `section`, or `type`. ([#2797](https://github.com/craftcms/cms/issues/2797))
- Volumes no longer validate if their field layout contains a field called `folder` or `volume`. ([#2797](https://github.com/craftcms/cms/issues/2797))
- The user field layout no longer validates if it contains a field called `groups` or `photo`. ([#2797](https://github.com/craftcms/cms/issues/2797))
- The `resave/entries` command now has a `--provisional-drafts` option.
- `resave/*` commands now have a `--queue` option. ([#8040](https://github.com/craftcms/cms/issues/8040))
- Entries no longer support Live Preview if the `autosaveDrafts` config setting is disabled.
- Most text areas in the control panel will now submit the closest form when <kbd>Ctrl</kbd>/<kbd>Command</kbd> + <kbd>Return</kbd> is pressed. ([#7999](https://github.com/craftcms/cms/issues/7999))
- The `defaultCpLanguage` config setting no longer affects console requests. ([#7747](https://github.com/craftcms/cms/issues/7747))
- The `{% cache %}` tag now stores any JavaScript or CSS code registered with `{% js %}`, `{% script %}`, and `{% css %}` tags. ([#7758](https://github.com/craftcms/cms/issues/7758))
- The `date()` Twig function now supports arrays with `date` and/or `time` keys. ([#7681](https://github.com/craftcms/cms/issues/7681))
- Custom field column names now include a random string, preventing column name conflicts when deploying multiple project config changes at once. ([#6922](https://github.com/craftcms/cms/issues/6922))
- Custom fields can now store data across multiple columns in the `content` table.
- Channel and Structure sections’ initial entry types are now named “Default” by default. ([#7078](https://github.com/craftcms/cms/issues/7078))
- Entries can now be eager-loaded with `revisions`.
- Console commands now show a confirmation prompt when executed as the root user. ([#7955](https://github.com/craftcms/cms/issues/7955))
- Project config component UID/name mappings are now stored in the project config itself, making them portable across environments. ([#7709](https://github.com/craftcms/cms/issues/7709))
- Validation errors in the control panel are now parsed for Markdown syntax. ([#8008](https://github.com/craftcms/cms/issues/8008))
- Renamed the `enableGraphQlCaching` config setting to `enableGraphqlCaching`. (The old name still works but is deprecated.)
- Admin tables can now include linked buttons in the toolbar.
- Admin tables can now include single action buttons.
- Admin tables now support separators in menu button lists.
- `craft\base\Element::__set()` now detects whether a custom field value is being set, and if so, passes the value through `setFieldValue()`. ([#7726](https://github.com/craftcms/cms/issues/7726))
- `craft\base\Element::getCpEditUrl()` now includes a `draftId`/`revisionId` query string param in the returned URL if the element is a draft or revision. ([#7832](https://github.com/craftcms/cms/issues/7832))
- `craft\base\FieldInterface::getContentColumnType()` can now return an array, if the field stores content across multiple columns.
- `craft\helpers\Cp::elementHtml()` now has a `$single` argument.
- `craft\services\AssetTransforms::normalizeTransform()` now accepts transform configs arrays that specify a base transform which should be extended, via a `transform` key set to the stored transform’s handle. ([#7892](https://github.com/craftcms/cms/issues/7892))
- `craft\services\Users::saveLayout()` now has a `$runValidation` argument, which is `true` by default.
- `craft\web\View::clearJsBuffer()` now has a `$combine` argument.
- `craft\web\View::namespaceInputs()` now accepts a callback function for the first argument, which simplifies the process of setting and resetting the registered namespace before and after generating the to-be-namespaced HTML.
- Updated Garnish to 0.1.46.

### Deprecated
- Deprecated `craft\base\Element::ATTR_STATUS_CONFLICTED`.
- Deprecated `craft\base\Element::getFieldStatus()`.
- Deprecated `craft\base\Element::getSourceId()`. `getCanonicalId()` should be used instead.
- Deprecated `craft\base\Element::getSourceUid()`. `getCanonical()->uid` should be used instead.
- Deprecated `craft\base\VolumeInterface::folderExists()`. `directoryExists()` should be used instead.
- Deprecated `craft\behaviors\BaseRevisionBehavior::$sourceId`. `craft\base\ElementInterface::getCanonicalId()` should be used instead.
- Deprecated `craft\behaviors\DraftBehavior::$dateLastMerged`. `craft\base\ElementTrait::$dateLastMerged` should be used instead.
- Deprecated `craft\behaviors\DraftBehavior::$mergingChanges`. `craft\base\ElementTrait::$mergingCanonicalChanges` should be used instead.
- Deprecated `craft\behaviors\DraftBehavior::$trackChanges`.
- Deprecated `craft\behaviors\DraftBehavior::getOutdatedAttributes()`. `craft\base\ElementInterface::getOutdatedAttributes()` should be used instead.
- Deprecated `craft\behaviors\DraftBehavior::getOutdatedFields()`. `craft\base\ElementInterface::getOutdatedFields()` should be used instead.
- Deprecated `craft\behaviors\DraftBehavior::isAttributeModified()`. `craft\base\ElementInterface::isAttributeModified()` should be used instead.
- Deprecated `craft\behaviors\DraftBehavior::isAttributeOutdated()`. `craft\base\ElementInterface::isAttributeOutdated()` should be used instead.
- Deprecated `craft\behaviors\DraftBehavior::isFieldModified()`. `craft\base\ElementInterface::isFieldModified()` should be used instead.
- Deprecated `craft\behaviors\DraftBehavior::isFieldOutdated()`. `craft\base\ElementInterface::isFieldOutdated()` should be used instead.
- Deprecated `craft\console\controllers\ResaveController::saveElements()`. `resaveElements()` should be used instead.
- Deprecated `craft\elements\Asset::KIND_FLASH`.
- Deprecated `craft\services\Content::getContentRow()`.
- Deprecated `craft\services\Content::populateElementContent()`.
- Deprecated `craft\services\Drafts::EVENT_AFTER_MERGE_SOURCE_CHANGES`.
- Deprecated `craft\services\Drafts::EVENT_BEFORE_MERGE_SOURCE_CHANGES`.
- Deprecated `craft\services\Drafts::mergeSourceChanges()`.

### Removed
- Removed support for the “Flash” file kind. ([#7626](https://github.com/craftcms/cms/issues/7626))

### Fixed
- Fixed a bug where Craft would place the `beginBody()` tag incorrectly if a template’s `<body>` tag had attribute values that included `>` characters. ([#7779](https://github.com/craftcms/cms/issues/7779))
- Fixed a bug where updated attributes and fields weren’t getting tracked when publishing a draft or reverting an entry to a revision. 
- Fixed a bug where it wasn’t easily possible to submit forms to controller actions from Live Preview pages. ([#7885](https://github.com/craftcms/cms/issues/7885))

### Security
- The default `allowedFileExtensions` config setting value no longer includes `xml`.