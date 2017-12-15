<?php
/*
 * (c) Anthony Benkhebbab <rewieer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace S4Blog\Core\Template;


interface TemplateConfigurationInterface {
  public function configure(array $data);
  public static function getIdentifier() : string;
  public function render() : string;
}