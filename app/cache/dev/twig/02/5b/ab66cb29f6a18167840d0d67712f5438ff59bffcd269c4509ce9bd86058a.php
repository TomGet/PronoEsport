<?php

/* PesFrontBundle:Front:accueil.html.twig */
class __TwigTemplate_025bab66cb29f6a18167840d0d67712f5438ff59bffcd269c4509ce9bd86058a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PesFrontBundle::layout.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PesFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">Acceuil</div>
\t<div class=\"panel-body\">
\t\t<h2>Bienvenue sur <p class=\"lead\">Prono E sport</p></h2>
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Front:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
