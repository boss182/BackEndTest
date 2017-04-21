<?php

/* detail.html */
class __TwigTemplate_31c731017bd105154b72a4f0a30f733e45d0e2fa694c08ed9210c88b88f4a97a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"> 
    <title>Developer SAC</title>
    <!-- Bootstrap core CSS -->
    <link href=\"../assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"../assets/css/narrow-jumbotron.css\" rel=\"stylesheet\">
  </head>

  <body>

    <div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills float-right\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"../\">Employees <span class=\"sr-only\">(current)</span></a>
            </li>          
          </ul>
        </nav>
        <h3 class=\"text-muted\">Developer SAC</h3>
      </div>

      <div class=\"jumbotron\">
        <h3>Employee Detail</h3>

\t\t<div class=\"row\">
\t\t\t<div style=\"text-align:right;font-weight:bold\" class=\"col-4\">Name:</div>
\t\t\t<div style=\"text-align:left\" class=\"col-8\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "name", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div style=\"text-align:right;font-weight:bold\" class=\"col-4\">Email:</div>
\t\t\t<div style=\"text-align:left\" class=\"col-8\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "email", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div style=\"text-align:right;font-weight:bold\" class=\"col-4\">Phone:</div>
\t\t\t<div style=\"text-align:left\" class=\"col-8\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "phone", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div style=\"text-align:right;font-weight:bold\" class=\"col-4\">Address:</div>
\t\t\t<div style=\"text-align:left\" class=\"col-8\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "address", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div style=\"text-align:right;font-weight:bold\" class=\"col-4\">Position:</div>
\t\t\t<div style=\"text-align:left\" class=\"col-8\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "position", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div style=\"text-align:right;font-weight:bold\" class=\"col-4\">Salary:</div>
\t\t\t<div style=\"text-align:left\" class=\"col-8\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "salary", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div style=\"text-align:right;font-weight:bold\" class=\"col-4\">Skills:</div>
\t\t\t<div style=\"text-align:left\" class=\"col-8\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["employee"]) ? $context["employee"] : null), "skills", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 59
            echo "\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "skill", array()), "html", null, true);
            echo "</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
   
      </div>

     
      <footer class=\"footer\">
        <p>&copy; Gianfranco Oliva 2017</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../assets/js/ie10-viewport-bug-workaround.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 61,  100 => 59,  96 => 58,  87 => 52,  80 => 48,  73 => 44,  66 => 40,  59 => 36,  52 => 32,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "detail.html", "/home/besendne/public_html/BackEndTest/EmployeesApplication/templates/detail.html");
    }
}
