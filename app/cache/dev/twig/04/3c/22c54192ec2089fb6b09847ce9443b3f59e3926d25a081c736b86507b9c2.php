<?php

/* PesFrontBundle:Courrier:index.html.twig */
class __TwigTemplate_043c22c54192ec2089fb6b09847ce9443b3f59e3926d25a081c736b86507b9c2 extends Twig_Template
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
        <div class=\"panel-heading\">Liste des messages</div>
        <table class=\"table table-bordered\">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Sujet</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courriers"]) ? $context["courriers"] : $this->getContext($context, "courriers")));
        foreach ($context['_seq'] as $context["_key"] => $context["courrier"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courrier"]) ? $context["courrier"] : $this->getContext($context, "courrier")), "nom"), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courrier"]) ? $context["courrier"] : $this->getContext($context, "courrier")), "email"), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courrier"]) ? $context["courrier"] : $this->getContext($context, "courrier")), "sujet"), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            if ($this->getAttribute((isset($context["courrier"]) ? $context["courrier"] : $this->getContext($context, "courrier")), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["courrier"]) ? $context["courrier"] : $this->getContext($context, "courrier")), "date"), "Y/m/d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-info\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pes_courrier_show", array("id" => $this->getAttribute((isset($context["courrier"]) ? $context["courrier"] : $this->getContext($context, "courrier")), "id"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-check\"></span> Consulter
                            </a>

                            <a class=\"btn btn-danger\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pes_courrier_edit", array("id" => $this->getAttribute((isset($context["courrier"]) ? $context["courrier"] : $this->getContext($context, "courrier")), "id"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-trash\"></span> Supprimer
                            </a>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courrier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Courrier:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  77 => 26,  70 => 22,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,);
    }
}
