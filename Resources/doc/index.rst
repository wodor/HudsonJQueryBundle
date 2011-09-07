==================
HudsonJQueryBundle
==================

Add bundle
----------


::

    git submodule add git://github.com/dbykadorov/HudsonJQueryBundle.git src/Hudson/JQueryBundle

Init bundle
-----------

::

    // app/autoload.php

    $loader->registerNamespaces(array(
        // ...
        'Hudson' => __DIR__ . '/../src',
    ));

   // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Hudson\JQueryBundle\HudsonJQueryBundle(),
        );
    // ...
    }

Don't forget to install assets:

::

    php app/console assets:install

Use bundle
----------

Only jQuery:

::

    {% include 'HudsonJQueryBundle::_jQuery.html.twig' %}

jQuery with UI:

::

    {% include 'HudsonJQueryBundle::_jQueryUI.html.twig' %}

jQuery with UI and custom UI CSS:

::

    {% include 'HudsonJQueryBundle::_jQueryUI.html.twig' with {'customCss': 'path/to/the/yours/custom/ui/css'} %}
