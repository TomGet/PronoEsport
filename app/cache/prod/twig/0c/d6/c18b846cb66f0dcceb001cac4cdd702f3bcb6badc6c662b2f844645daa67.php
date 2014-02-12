<?php

/* PesFrontBundle::navbar.html.twig */
class __TwigTemplate_0cd6c18b846cb66f0dcceb001cac4cdd702f3bcb6badc6c662b2f844645daa67 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-inverse\" role=\"navigation\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("pes_front_acceuil");
        echo "\">PronoEsport</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method") == "pes_front_acceuil")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pes_front_acceuil");
        echo "\">Acceuil</a></li>
                <li ";
        // line 19
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method") == "pes_front_liste_competitions")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pes_front_liste_competitions");
        echo "\">Liste des matchs</a></li>
                <li ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method") == "pes_courrier_new")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pes_courrier_new");
        echo "\">Contact</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class=\"navbar-form navbar-left\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "PesFrontBundle::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  32 => 12,  19 => 1,  96 => 27,  91 => 24,  88 => 23,  77 => 12,  73 => 11,  70 => 10,  67 => 9,  61 => 7,  56 => 29,  53 => 23,  41 => 18,  35 => 8,  23 => 1,  80 => 18,  75 => 14,  68 => 9,  65 => 8,  57 => 20,  52 => 15,  50 => 14,  43 => 8,  39 => 9,  37 => 5,  34 => 4,  83 => 22,  74 => 19,  69 => 18,  63 => 15,  59 => 21,  55 => 13,  51 => 22,  45 => 11,  40 => 8,  36 => 7,  31 => 7,  28 => 3,);
    }
}
