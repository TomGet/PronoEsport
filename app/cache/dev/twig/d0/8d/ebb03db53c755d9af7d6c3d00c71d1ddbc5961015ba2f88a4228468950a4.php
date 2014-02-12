<?php

/* PesFrontBundle:Front:voirCompetition.html.twig */
class __TwigTemplate_d08debb03db53c755d9af7d6c3d00c71d1ddbc5961015ba2f88a4228468950a4 extends Twig_Template
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
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Fiche Match</div>
        <div class=\"panel-body\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "nom"), "html", null, true);
        echo "</h2> <span class=\"lead\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "typeCompetition"), "libelle"), "html", null, true);
        echo "</span>
            <p>le ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "date"), "F jS \\a\\t g:i", "Europe/Paris"), "html", null, true);
        echo "</p>
            <p>Ajouté le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "ajout"), "F jS \\a\\t g:i"), "html", null, true);
        echo "</p>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Front:voirCompetition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  42 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
