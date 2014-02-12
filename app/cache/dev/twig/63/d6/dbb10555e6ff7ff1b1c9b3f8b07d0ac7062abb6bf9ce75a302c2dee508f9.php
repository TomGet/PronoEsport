<?php

/* PesFrontBundle:Competition:show.html.twig */
class __TwigTemplate_63d6dbb10555e6ff7ff1b1c9b3f8b07d0ac7062abb6bf9ce75a302c2dee508f9 extends Twig_Template
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
    <div class=\"panel-heading\">Fiche Match</div>
    <div class=\"panel-body\">

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ajout</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ajout"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resultat</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resultat"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("competition");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
    </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Competition:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 44,  87 => 40,  79 => 35,  69 => 28,  62 => 24,  55 => 20,  48 => 16,  41 => 12,  31 => 4,  28 => 3,);
    }
}
