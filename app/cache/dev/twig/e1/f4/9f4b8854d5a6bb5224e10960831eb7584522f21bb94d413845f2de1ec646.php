<?php

/* PesFrontBundle::layout.html.twig */
class __TwigTemplate_e1f49f4b8854d5a6bb5224e10960831eb7584522f21bb94d413845f2de1ec646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container-fluid\">
        ";
        // line 5
        $this->env->loadTemplate("PesFrontBundle::navbar.html.twig")->display($context);
        // line 6
        echo "
        <div class=\"col-md-2\">
            ";
        // line 8
        $this->displayBlock('aside', $context, $blocks);
        // line 11
        echo "        </div>
        <div class=\"col-md-10\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Acceuil</div>
                <div class=\"panel-body\">
                    ";
        // line 16
        $this->displayBlock('section', $context, $blocks);
        // line 17
        echo "                </div>
            </div>
        </div>
";
    }

    // line 8
    public function block_aside($context, array $blocks = array())
    {
        // line 9
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PesFrontBundle:front:lastNews", array("nombre" => 3)));
        echo "
            ";
    }

    // line 16
    public function block_section($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PesFrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  63 => 9,  60 => 8,  53 => 17,  51 => 16,  44 => 11,  42 => 8,  38 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
