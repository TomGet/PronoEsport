<?php

/* PesFrontBundle:Front:listeCompetitions.html.twig */
class __TwigTemplate_28fbb5dd0a15b2aa77b0b0ef182cda3b52d244045de272e3b88b7dfec7639790 extends Twig_Template
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
\t<div class=\"panel-heading\">Liste des matchs</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"list-group\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) ? $context["competitions"] : $this->getContext($context, "competitions")));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 9
            echo "            <li class=\"list-group-item\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pes_front_voir_competition", array("id" => $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "nom"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</ul>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Front:listeCompetitions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  44 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
