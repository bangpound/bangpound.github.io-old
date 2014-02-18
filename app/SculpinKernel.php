<?php

class SculpinKernel extends \Sculpin\Bundle\SculpinBundle\HttpKernel\AbstractKernel
{
    /**
     * {@inheritdoc}
     */
    protected function getAdditionalSculpinBundles()
    {
        return array(
           'Mavimo\Sculpin\Bundle\EditorBundle\SculpinEditorBundle',
           'Bangpound\Sculpin\Bundle\OEmbedBundle\SculpinOEmbedBundle'
        );
    }
}
