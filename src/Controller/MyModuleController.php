<?php
/*
* @file
* Contains MyModuleController.
*/

namespace Drupal\my_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * MyModuleController
 */
class MyModuleController extends ControllerBase {
  public function content($page_id = NULL) {
    return array(
      '#theme' => 'my_module_theme',
      '#data' => array(
        'title' =>'Sub Title: ' . $page_id,
        'body' => 'Test page content',
      ),
    );
    throw new NotFoundHttpException();
  }
}
