<?php

namespace Drupal\reports\Controller;

use Drupal\Core\Controller\ControllerBase;

class ReportsController extends ControllerBase {
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('This is the Reports page.'),
    ];
  }
}
