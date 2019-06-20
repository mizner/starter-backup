<?php

namespace Core\Models\Blocks;

use Core\Models\Blocks;
use Core\Utils\Fields;

class CallToAction extends RegisterBlock
{
    /**
     * @const VIEW
     * @note Should be Uppercase, no spaces, no dashes (e.g. CallToAction), used for filenames and slugs
     */
    const VIEW = 'CallToAction';

    public static function init()
    {

        $acf    = new Fields();
        $fields = [
            $acf->tab_general,
            $acf->heading,
            $acf->subheading,
            $acf->image,
            $acf->content,
            $acf->link,
            $acf->tab_advanced,
        ];

        parent::register([
            'easy_enqueues' => ['script', 'style'],
            'view'          => self::VIEW,
            'label'         => __('Custom - Call To Action', 'core'),
            'description'   => __('The CTA Block', 'core'),
            'icon'          => 'laptop', // http://aalmiray.github.io/ikonli/cheat-sheet-dashicons.html
            'keywords'      => ['cta', 'custom'],
            'fields'        => $fields,
        ]);
    }
}