<?php

/* list.html */
class __TwigTemplate_05d4f8c72665a5ee3e5fba037df0af02a42ecd35caee836751c17083b12d9eaf extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"> 
    <title>Developer SAC</title>
    <!-- Bootstrap core CSS -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"assets/css/narrow-jumbotron.css\" rel=\"stylesheet\">
  </head>

  <body>

    <div class=\"container\">

      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills float-right\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"http://besend.net/BackEndTest/EmployeesApplication/public/\">Employees <span class=\"sr-only\">(current)</span></a>
            </li>          
          </ul>
        </nav>
        <h3 class=\"text-muted\">Developer SAC</h3>
      </div>

      <div class=\"jumbotron\">
        <h3>Search Employee</h3>

\t\t<form action=\"search\" method=\"GET\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"email\">Find by email:</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Search</button>
\t\t</form>

\t</div>

      <div class=\"row marketing\">

      \t<table class=\"table\">
\t\t\t<thead class=\"thead-inverse\">
\t\t\t\t<th>Name</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Position</th>
\t\t\t\t<th>Salary</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 53
            echo "\t\t\t\t\t<tr>
\t\t\t\t        <td><a href=\"employee/";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "position", array()), "html", null, true);
            echo "</td>
\t\t\t\t        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "salary", array()), "html", null, true);
            echo "</td>\t\t\t      
\t\t\t\t\t</tr>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t</tbody>
\t\t</table>
      </div>

      <footer class=\"footer\">
        <p>&copy; Gianfranco Oliva 2017</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"assets/js/ie10-viewport-bug-workaround.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  96 => 57,  92 => 56,  88 => 55,  82 => 54,  79 => 53,  75 => 52,  55 => 35,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list.html", "/home/besendne/public_html/BackEndTest/EmployeesApplication/templates/list.html");
    }
}
