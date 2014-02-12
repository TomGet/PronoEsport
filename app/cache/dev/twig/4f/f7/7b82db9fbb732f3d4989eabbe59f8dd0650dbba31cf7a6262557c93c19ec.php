<?php

/* PesFrontBundle:Competition:index.html.twig */
class __TwigTemplate_4ff77b82db9fbb732f3d4989eabbe59f8dd0650dbba31cf7a6262557c93c19ec extends Twig_Template
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
    <div class=\"panel-heading\">Liste des matchs</div>
    <table class=\"table table-bordered\">
        <tr>
            <th>Nom</th>
            <th>Date d'jout</th>
            <th>Date du match</th>
            <th>Resultat</th>
            <th>Actions</th>
        </tr>
        <tbody>
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ajout")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ajout"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resultat"), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group\">
                        <a class=\"btn btn-info\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-check\"></span>
                        </a>
                        <a class=\"btn btn-warning\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competition_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-edit\"></span>
                        </a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
    <div class=\"panel-body\">
        <a class=\"btn btn-primary\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("competition_new");
        echo "\">
            <span class=\"glyphicon glyphicon-plus\"></span> Ajouter un match
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle:Competition:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  92 => 33,  79 => 26,  73 => 23,  67 => 20,  61 => 19,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,);
    }
}
