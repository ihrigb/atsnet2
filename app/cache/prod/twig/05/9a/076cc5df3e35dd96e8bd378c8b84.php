<?php

/* AtemschutzCoreBundle:User:fromAtsgt.html.twig */
class __TwigTemplate_059a076cc5df3e35dd96e8bd378c8b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtemschutzCoreBundle:User:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'moduleTitle' => array($this, 'block_moduleTitle'),
            'moduleActions' => array($this, 'block_moduleActions'),
            'moduleBody' => array($this, 'block_moduleBody'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AtemschutzCoreBundle:User:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Login für ";
        echo twig_escape_filter($this->env, (isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "html", null, true);
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_moduleTitle($context, array $blocks = array())
    {
        echo "Neuer Benutzer";
    }

    // line 15
    public function block_moduleActions($context, array $blocks = array())
    {
        // line 16
        echo "<ul class=\"inline\">
\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atemschutzgeraetetraeger_show", array("id" => $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getId", array(), "method"), "_format" => "html")), "html", null, true);
        echo "\">Abbrechen</a>
</ul>
";
    }

    // line 21
    public function block_moduleBody($context, array $blocks = array())
    {
        // line 22
        $this->env->loadTemplate("AtemschutzCoreBundle:User:form.html.twig")->display($context);
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AtemschutzCoreBundle:User:fromAtsgt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 100,  286 => 99,  280 => 95,  274 => 94,  269 => 91,  262 => 87,  255 => 85,  253 => 84,  243 => 80,  230 => 72,  228 => 71,  225 => 70,  222 => 69,  216 => 67,  210 => 65,  195 => 58,  180 => 53,  178 => 52,  175 => 51,  157 => 48,  148 => 46,  37 => 8,  96 => 26,  74 => 22,  191 => 70,  185 => 66,  134 => 42,  97 => 31,  83 => 20,  77 => 25,  65 => 20,  63 => 17,  58 => 15,  34 => 7,  76 => 25,  59 => 17,  53 => 5,  23 => 2,  239 => 107,  207 => 64,  197 => 97,  194 => 71,  155 => 67,  152 => 66,  150 => 49,  137 => 43,  131 => 55,  129 => 41,  118 => 38,  104 => 32,  100 => 35,  90 => 27,  81 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 105,  294 => 101,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 86,  252 => 80,  247 => 81,  241 => 77,  235 => 75,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 59,  143 => 45,  140 => 59,  132 => 51,  128 => 49,  119 => 38,  111 => 34,  107 => 33,  71 => 21,  177 => 65,  165 => 64,  160 => 49,  139 => 50,  135 => 57,  126 => 40,  114 => 42,  84 => 24,  70 => 21,  67 => 25,  61 => 16,  47 => 12,  98 => 28,  93 => 27,  88 => 22,  78 => 22,  40 => 9,  94 => 22,  89 => 22,  85 => 25,  79 => 26,  75 => 22,  68 => 24,  56 => 15,  50 => 16,  27 => 4,  201 => 60,  196 => 90,  183 => 54,  171 => 81,  166 => 71,  163 => 70,  158 => 54,  156 => 58,  151 => 57,  142 => 44,  138 => 43,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 37,  105 => 33,  101 => 31,  91 => 31,  69 => 21,  62 => 17,  49 => 16,  43 => 10,  32 => 7,  28 => 8,  87 => 20,  72 => 20,  66 => 19,  55 => 18,  44 => 10,  41 => 9,  25 => 3,  21 => 2,  46 => 11,  35 => 7,  31 => 7,  29 => 7,  38 => 9,  26 => 6,  24 => 7,  22 => 5,  19 => 1,  209 => 82,  203 => 76,  199 => 72,  193 => 73,  189 => 56,  187 => 55,  182 => 66,  176 => 64,  173 => 60,  168 => 66,  164 => 59,  162 => 55,  154 => 54,  149 => 51,  147 => 58,  144 => 61,  141 => 44,  133 => 42,  130 => 41,  125 => 40,  122 => 39,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 30,  92 => 33,  86 => 25,  82 => 22,  80 => 26,  73 => 22,  64 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 13,  45 => 11,  42 => 10,  39 => 9,  36 => 11,  33 => 7,  30 => 9,);
    }
}
