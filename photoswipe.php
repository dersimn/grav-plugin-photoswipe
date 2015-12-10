<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;
use \Grav\Common\Grav;
use \Grav\Common\Page\Page;

class PhotoswipePlugin extends Plugin
{
    protected $active = false;

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize configuration
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onPageInitialized' => ['onPageInitialized', 0]
        ]);
    }

    /**
     * Initialize configuration
     */
    public function onPageInitialized()
    {
        $defaults = (array) $this->config->get('plugins.photoswipe');

        /** @var Page $page */
        $page = $this->grav['page'];
        if (isset($page->header()->photoswipe)) {
            $this->config->set('plugins.photoswipe', array_merge($defaults, $page->header()->photoswipe));
        }

        $this->active = $this->config->get('plugins.photoswipe.active');

        if ($this->active) {
            $this->enable([
                'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
            ]);
        }
    }

    /**
     * if enabled on this page, load the JS + CSS theme.
     */
    public function onTwigSiteVariables()
    {
        $config = $this->config->get('plugins.photoswipe');

        $this->grav['assets']
             ->addCss('plugin://photoswipe/external/dist/photoswipe.css')
             ->addCss('plugin://photoswipe/external/dist/default-skin/default-skin.css')
             ->add('jquery', 101)
             ->addJs('plugin://photoswipe/external/dist/photoswipe.min.js')
             ->addJs('plugin://photoswipe/external/dist/photoswipe-ui-default.min.js')
             ->addJs('plugin://photoswipe/js/activate.js');
    }
}
