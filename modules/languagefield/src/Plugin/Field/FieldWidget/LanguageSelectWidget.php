<?php

namespace Drupal\languagefield\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\languagefield\Plugin\Field\FieldType\LanguageItem;

/**
 * Plugin implementation of the 'language_select' widget.
 *
 * @FieldWidget(
 *   id = "languagefield_select",
 *   label = @Translation("Language select list"),
 *   field_types = {
 *     "language_field",
 *   }
 * )
 */
class LanguageSelectWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    $settings = [
        'format' => ['name' => 'name',],
      ] + parent::defaultSettings();
    return $settings;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $settings = $this->getSettings();

    $element = parent::settingsForm($form, $form_state);

    $element['format'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Display in widget'),
      '#description' => $this->t('Select the elements you want to show. The elements will be concatenated when showing the field.'),
      '#default_value' => $settings['format'],
      '#options' => LanguageItem::_settingsOptions('widget'),
      '#required' => TRUE,
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = parent::settingsSummary();

    $settings = $this->getSettings()['format'];
    $options = LanguageItem::_settingsOptions('widget');

    if (empty($settings)) {
      $summary[] = $this->t('** Not set **');
      return $summary;
    }

    foreach ($settings as $key => $value) {
      switch ($value) {
        case '0':
          // Option is not selected.
          break;
        default:
          $summary[] = isset($options[$value]) ? $options[$value] : '...';
          break;
      }
    }
    return $summary;
  }

  /**
   * @inheritdoc
   *
   * N.B. massageFormValues and $element['#element_validate'] do comparable things.
   */
  public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
    $values = parent::massageFormValues($values, $form, $form_state);

    // Convert the values to real language codes,
    // but ONLY on Entity form, NOT in the 'field settings - default value'.
    $build_info = $form_state->getBuildInfo();
    if (isset($build_info['form_id']) && ($build_info['form_id'] !== 'field_config_edit_form')) {
      foreach ($values as &$value) {
        $value['value'] = LanguageItem::_getLanguageConfigurationValues($value['value']);
      }
    }

    return $values;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    /* @var $item LanguageItem */
    $item = $items[$delta];
    $value = isset($item->value) ? $item->value : NULL;

    $languages = $item->getSettableOptions();

    $element['value'] = [
      '#title' => ($element['#title_display'] == 'invisible') ? NULL : $element['#title'],
      '#description' => $element['#description'],
      // Do not use language_select. It has no advantage, and needs a dependency on core Language module.
      // '#type' => 'language_select',
      '#type' => 'select',
      '#required' => $element['#required'],
      '#options' => $languages,
      '#empty_value' => '',
      '#default_value' => isset($languages[$value]) ? $value : '',
    ];

    return $element;
  }

}
