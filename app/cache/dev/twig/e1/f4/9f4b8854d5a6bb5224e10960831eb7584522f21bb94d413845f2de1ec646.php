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
            'asideleft' => array($this, 'block_asideleft'),
            'section' => array($this, 'block_section'),
            'asideright' => array($this, 'block_asideright'),
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
        $this->displayBlock('asideleft', $context, $blocks);
        // line 11
        echo "        </div>
\t\t
\t\t<div class=\"col-md-8\">
\t\t\t";
        // line 14
        $this->displayBlock('section', $context, $blocks);
        // line 15
        echo "\t\t</div>
        
\t\t<div class=\"col-md-2\">
            ";
        // line 18
        $this->displayBlock('asideright', $context, $blocks);
        // line 21
        echo "        </div>
    </div>
";
    }

    // line 8
    public function block_asideleft($context, array $blocks = array())
    {
        // line 9
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PesFrontBundle:front:lastNews", array("nombre" => 5)));
        echo "
            ";
    }

    // line 14
    public function block_section($context, array $blocks = array())
    {
    }

    // line 18
    public function block_asideright($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PesFrontBundle:front:plannedCompetitions", array("nombre" => 5)));
        echo "
            ";
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
        return array (  83 => 19,  80 => 18,  75 => 14,  68 => 9,  65 => 8,  59 => 21,  52 => 15,  50 => 14,  43 => 8,  39 => 6,  37 => 5,  34 => 4,  64 => 17,  57 => 18,  53 => 12,  49 => 11,  45 => 11,  40 => 8,  36 => 7,  31 => 3,  28 => 3,);
    }
}
