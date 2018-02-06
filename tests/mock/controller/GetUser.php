<?php
/*
 * (c) Anthony Benkhebbab <rewieer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Trucy\Controller\AbstractController;

class GetUser extends AbstractController {
  public $method = "GET";
  public $path = "/user";

  public function handle(Request $request): Response {
    return new Response("This is the list of users");
  }
}