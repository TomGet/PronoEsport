<?php

/* PesFrontBundle:Front:lastNews.html.twig */
class __TwigTemplate_7cd212746ad42dad58c928a2d0a506abf1c034381664041df932c955b43cf1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">Dernières news</div>
    <ul class=\"list-group\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesNews"]) ? $context["lesNews"] : $this->getContext($context, "lesNews")));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 5
            echo "            <li class=\"list-group-item\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pes_front_voir_news", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "titre"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Front:lastNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  24 => 4,  19 => 1,  70 => 16,  63 => 9,  60 => 8,  53 => 17,  51 => 16,  44 => 11,  42 => 9,  38 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
