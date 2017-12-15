<?php
/*
 * (c) Anthony Benkhebbab <rewieer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace S4Blog;

use S4Blog\DependencyInjection\Compiler\TemplateConfiguratorPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class S4BlogBundle extends Bundle {
  public function build(ContainerBuilder $container) {
    $container->addCompilerPass(new TemplateConfiguratorPass());
  }
}