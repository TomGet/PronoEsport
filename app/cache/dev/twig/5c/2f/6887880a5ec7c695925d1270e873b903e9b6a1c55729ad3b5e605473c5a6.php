<?php

/* PesFrontBundle:Tournoi:show.html.twig */
class __TwigTemplate_5c2f6887880a5ec7c695925d1270e873b903e9b6a1c55729ad3b5e605473c5a6 extends Twig_Template
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
        <div class=\"panel-heading\">Fiche tournoi</div>
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
                    <th>Site</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "site"), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>

            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pes_tournoi_list");
        echo "\">
                        Back to the list
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pes_tournoi_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                        Edit
                    </a>
                </li>
                <li>";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Tournoi:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  73 => 32,  65 => 27,  55 => 20,  48 => 16,  41 => 12,  31 => 4,  28 => 3,);
    }
}
