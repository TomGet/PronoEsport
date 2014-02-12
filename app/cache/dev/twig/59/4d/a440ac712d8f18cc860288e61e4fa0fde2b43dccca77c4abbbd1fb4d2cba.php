<?php

/* PesFrontBundle:Courrier:show.html.twig */
class __TwigTemplate_594da440ac712d8f18cc860288e61e4fa0fde2b43dccca77c4abbbd1fb4d2cba extends Twig_Template
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
        <div class=\"panel-heading\">Courrier</div>
        <div class=\"panel-body\">
            <p><span class=\"text-muted\">Nom : </span>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</p>
            <p><span class=\"text-muted\">Email : </span>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
        echo "</p>
            <p><span class=\"text-muted\">Sujet : </span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sujet"), "html", null, true);
        echo "</p>
            <p class=\"text-muted\">Message : </p>
            <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "corps"), "html", null, true);
        echo "</p>
            <p>Le ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>

            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pes_courrier_list");
        echo "\">
                        Back to the list
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pes_courrier_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                        Edit
                    </a>
                </li>
                <li>";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Courrier:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  68 => 21,  60 => 16,  53 => 12,  49 => 11,  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
