<?php

/**
* @file
* Contains \Drupal\my_module\Form\ConfigFormMyModule.
*/
namespace   Drupal\my_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Component\Utility\SafeMarkup;

/**
 * ConfigFormMyModule
 */
class ConfigFormMyModule extends ConfigFormBase {
  /**
   * {@inheritdoc}.
   */
  // Method that renders form id.

  public function getFormId() {
    return 'configform_my_module_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    $config = $this->config('configform_my_module.settings');

    $form['email'] = array(
      '#type' => 'email',
      '#title' => $this->t('Your .com email address.'),
      '#default_value' => $config->get('email_address'),
    );

    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Title'),
      '#required' => TRUE
    );

    $form['body'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Body'),
      '#rows' => 5,
      '#required' => TRUE,
    );

    return $form;
  }

  /**
   * {@inheritdoc}.
   */
  protected function getEditableConfigNames() {
    return ['configform_my_module.settings'];
  }
}
