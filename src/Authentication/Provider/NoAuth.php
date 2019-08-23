<?php

namespace Drupal\no_auth\Authentication\Provider;

use Drupal\Core\Authentication\AuthenticationProviderInterface;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class NoAuth.
 *
 * @package Drupal\no_auth\Authentication\Provider
 */
class NoAuth implements AuthenticationProviderInterface {

  /**
   * {@inheritdoc}
   */
  public function applies(Request $request) {
    if ($request->query->has('_format') && $request->query->has('_no-auth')) {
      return TRUE;
    }

    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function authenticate(Request $request) {
    return User::getAnonymousUser();
  }

}
