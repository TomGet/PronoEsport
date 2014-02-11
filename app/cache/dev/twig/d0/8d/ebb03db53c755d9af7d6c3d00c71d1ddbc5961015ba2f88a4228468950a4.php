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
        echo "
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "nom"), "html", null, true);
        echo "</h2>
    <p class=\"text-justify\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "typeCompetition"), "libelle"), "html", null, true);
        echo "</p>
    <p>le ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "date"), "F jS \\a\\t g:i", "Europe/Paris"), "html", null, true);
        echo "</p>
    <p>Ajouté le ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["competition"]) ? $context["competition"] : $this->getContext($context, "competition")), "ajout"), "F jS \\a\\t g:i"), "html", null, true);
        echo "</p>

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
        return array (  100 => 29,  90 => 25,  76 => 20,  58 => 14,  84 => 37,  34 => 5,  104 => 30,  65 => 8,  77 => 26,  70 => 10,  53 => 11,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 26,  63 => 15,  59 => 21,  38 => 6,  94 => 26,  89 => 20,  85 => 25,  75 => 14,  68 => 9,  56 => 29,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 23,  78 => 21,  46 => 8,  27 => 4,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 24,  62 => 15,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 24,  47 => 9,  40 => 8,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 44,  108 => 31,  101 => 32,  98 => 31,  96 => 27,  83 => 19,  74 => 30,  66 => 16,  55 => 13,  52 => 15,  50 => 14,  43 => 8,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 46,  95 => 28,  92 => 42,  86 => 24,  82 => 22,  80 => 21,  73 => 25,  64 => 17,  60 => 22,  57 => 18,  54 => 10,  51 => 22,  48 => 19,  45 => 11,  42 => 7,  39 => 10,  36 => 7,  33 => 4,  30 => 7,);
    }
}
