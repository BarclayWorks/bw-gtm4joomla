<?php
/**
 * @package     GTM4Joomla
 * @subpackage  System Plugin
 * @author      Originally by Martijn van Vreeden <info@analyticsforjoomla.com>
 * @maintainer  Gary Barclay <gary@barclay.works> (Community Fork)
 * @copyright   2019 Analytics for Joomla, 2024+ Barclay.works
 * @license     GNU General Public License version 2 or later
 * @version     0.7
 */

defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;
use Joomla\CMS\Application\CMSApplication;

class PlgSystemGtm4joomla extends CMSPlugin
{
	public function onAfterRender()
	{
		$app = Factory::getApplication();

		if ($app->isClient('administrator') || $app->input->get('format', 'html') !== 'html') {
			return;
		}

		$tagmanagerId = $this->params->get('tagmanager_id', '');

		if (empty($tagmanagerId)) {
			return;
		}

		$body = $app->getBody();

		$headScript = '
<!-- Start GTM for Joomla by Analytics for Joomla -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,\'script\',\'dataLayer\',\'' . $tagmanagerId . '\');</script>
<!-- End GTM for Joomla by Analytics for Joomla -->
';

		$body = str_replace('</head>', $headScript . '</head>', $body);

		$noscriptFrame = '
<!-- Start GTM for Joomla by Analytics for Joomla -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . $tagmanagerId . '"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End GTM for Joomla by Analytics for Joomla -->';

		$body = preg_replace('/(<body[^>]*>)/i', '$1' . $noscriptFrame, $body, 1);

		$app->setBody($body);

		return true;
	}
}