<?php

/* PesFrontBundle:Front:voirNews.html.twig */
class __TwigTemplate_dcdfd63982287f5f46e0fe2ae35503cfb211a7708203cebe4c81aa757f989f20 extends Twig_Template
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
        echo "
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "titre"), "html", null, true);
        echo "</h2>
    <p class=\"text-justify\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "contenu"), "html", null, true);
        echo "</p>
    <p>Par <a href=\"#\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "membre"), "username"), "html", null, true);
        echo "</a> le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "date"), "F jS \\a\\t g:i"), "html", null, true);
        echo "</p>

";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Front:voirNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
