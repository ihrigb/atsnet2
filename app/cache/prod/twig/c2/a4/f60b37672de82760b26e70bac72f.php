<?php

/* AtemschutzNachweisBundle:Atemschutzgeraetetraeger:index.html.twig */
class __TwigTemplate_c2a4f60b37672de82760b26e70bac72f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AtemschutzNachweisBundle:Atemschutzgeraetetraeger:base.html.twig");

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
        return "AtemschutzNachweisBundle:Atemschutzgeraetetraeger:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56595eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56595eb_0") : $this->env->getExtension('assets')->getAssetUrl("css/56595eb_style_1.css");
            // line 15
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        } else {
            // asset "56595eb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56595eb") : $this->env->getExtension('assets')->getAssetUrl("css/56595eb.css");
            echo "\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        }
        unset($context["asset_url"]);
    }

    // line 19
    public function block_moduleTitle($context, array $blocks = array())
    {
        echo "Übersicht";
    }

    // line 21
    public function block_moduleActions($context, array $blocks = array())
    {
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_NACHWEIS_MANAGER")) {
            // line 23
            echo "<ul class=\"inline\">
\t<li><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("atemschutzgeraetetraeger_new");
            echo "\">Neuer Atemschutzgeräteträger</a>
</ul>
";
        }
    }

    // line 29
    public function block_moduleBody($context, array $blocks = array())
    {
        // line 30
        echo "
";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["atemschutzgeraetetraegers"]) ? $context["atemschutzgeraetetraegers"] : null)) == 0)) {
            // line 32
            echo "<em>Keine Atemschutzgeräteträger angelegt.</em>
";
        } else {
            // line 34
            echo "<table id=\"atsgt_table\" class=\"tablesorter\">
\t<thead>
\t\t<tr>
\t\t\t<th>Nachname<img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/sortable_blank.png"), "html", null, true);
            echo "\" />
\t\t\t<th>Vorname<img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/sortable_blank.png"), "html", null, true);
            echo "\" />
\t\t\t<th>Geburtstag<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/sortable_blank.png"), "html", null, true);
            echo "\" />
\t\t\t<th>Organisation<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/sortable_blank.png"), "html", null, true);
            echo "\" />
\t\t\t<th>Aktiv
\t\t\t<th>
\t<tbody>
\t\t";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["atemschutzgeraetetraegers"]) ? $context["atemschutzgeraetetraegers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["atemschutzgeraetetraeger"]) {
                // line 45
                echo "\t\t<tr>
\t\t\t<td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getLastname", array(), "method"), "html", null, true);
                echo "
\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getFirstname", array(), "method"), "html", null, true);
                echo "
\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getBirthdateFormatted", array(), "method"), "html", null, true);
                echo "
\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getOrganisation", array(), "method"), "html", null, true);
                echo "
\t\t\t<td>
\t\t\t\t<ul class=\"action_menu\">
\t\t\t\t\t<li><a class=\"status\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atemschutzgeraetetraeger_status", array("id" => $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getId", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
                // line 53
                if (($this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getIsActive", array(), "method") == true)) {
                    // line 54
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/icons/16x16/tick.png"), "html", null, true);
                    echo "\" alt=\"Ja\" />
\t\t\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/icons/16x16/delete.png"), "html", null, true);
                    echo "\" alt=\"Nein\" />
\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t</ul>\t
\t\t\t<td>
\t\t\t\t<ul class=\"action_menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/icons/16x16/gear.png"), "html", null, true);
                echo "\" alt=\"Optionen\" />
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atemschutzgeraetetraeger_show", array("id" => $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getId", array(), "method"), "_format" => "html")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/icons/16x16/search.png"), "html", null, true);
                echo "\" alt=\"Details\" />
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atemschutzgeraetetraeger_show", array("id" => $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getId", array(), "method"), "_format" => "pdf")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/icons/16x16/pdf.png"), "html", null, true);
                echo "\" alt=\"Details\" />
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atemschutzgeraetetraeger_edit", array("id" => $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getId", array(), "method"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/icons/16x16/edit.png"), "html", null, true);
                echo "\" alt=\"Bearbeiten\" />
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                // line 84
                if ($this->env->getExtension('security')->isGranted("ROLE_NACHWEIS_ADMIN")) {
                    // line 85
                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"delete_confirm\" href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("atemschutzgeraetetraeger_delete", array("id" => $this->getAttribute((isset($context["atemschutzgeraetetraeger"]) ? $context["atemschutzgeraetetraeger"] : null), "getId", array(), "method"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/atemschutzcore/images/icons/16x16/delete.png"), "html", null, true);
                    echo "\" alt=\"Löschen\" />
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t</ul>
\t\t\t\t</ul>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atemschutzgeraetetraeger'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "</table>
";
        }
    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t";
        // line 100
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "59bad1b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_59bad1b_0") : $this->env->getExtension('assets')->getAssetUrl("js/59bad1b_jquery.tablesorter.min_1.js");
            // line 104
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "59bad1b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_59bad1b_1") : $this->env->getExtension('assets')->getAssetUrl("js/59bad1b_atemschutzgeraetetraeger.index_2.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "59bad1b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_59bad1b") : $this->env->getExtension('assets')->getAssetUrl("js/59bad1b.js");
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "AtemschutzNachweisBundle:Atemschutzgeraetetraeger:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 99,  217 => 84,  211 => 81,  200 => 76,  671 => 267,  667 => 263,  662 => 262,  659 => 261,  653 => 257,  642 => 255,  639 => 254,  631 => 251,  624 => 247,  620 => 246,  617 => 245,  614 => 244,  607 => 240,  603 => 239,  600 => 238,  598 => 237,  592 => 234,  588 => 233,  580 => 228,  576 => 227,  568 => 222,  560 => 217,  556 => 216,  552 => 215,  548 => 214,  545 => 213,  541 => 212,  535 => 209,  531 => 208,  527 => 207,  523 => 206,  518 => 203,  514 => 201,  512 => 200,  506 => 196,  495 => 194,  492 => 193,  486 => 192,  481 => 189,  470 => 184,  467 => 183,  465 => 182,  459 => 179,  455 => 178,  452 => 177,  445 => 173,  441 => 172,  438 => 171,  436 => 170,  429 => 166,  421 => 161,  417 => 160,  404 => 157,  392 => 153,  390 => 152,  383 => 150,  380 => 149,  376 => 147,  369 => 144,  361 => 142,  351 => 136,  349 => 135,  343 => 131,  340 => 130,  336 => 128,  330 => 127,  326 => 125,  320 => 123,  318 => 122,  313 => 121,  307 => 119,  301 => 117,  292 => 114,  287 => 111,  284 => 110,  270 => 105,  257 => 101,  251 => 99,  245 => 97,  240 => 95,  236 => 94,  231 => 91,  223 => 87,  219 => 85,  213 => 83,  204 => 79,  192 => 75,  181 => 71,  172 => 67,  108 => 32,  124 => 46,  113 => 40,  308 => 123,  304 => 119,  299 => 116,  296 => 115,  290 => 113,  275 => 109,  272 => 108,  266 => 107,  259 => 104,  248 => 98,  244 => 97,  237 => 93,  233 => 91,  226 => 87,  206 => 77,  202 => 76,  198 => 77,  190 => 67,  174 => 67,  153 => 60,  146 => 57,  179 => 70,  170 => 66,  167 => 64,  161 => 60,  145 => 52,  110 => 38,  20 => 4,  289 => 100,  286 => 111,  280 => 108,  274 => 107,  269 => 91,  262 => 102,  255 => 100,  253 => 84,  243 => 96,  230 => 72,  228 => 71,  225 => 88,  222 => 86,  216 => 67,  210 => 65,  195 => 58,  180 => 61,  178 => 52,  175 => 68,  157 => 48,  148 => 46,  37 => 8,  96 => 30,  74 => 22,  191 => 70,  185 => 70,  134 => 51,  97 => 32,  83 => 24,  77 => 18,  65 => 19,  63 => 18,  58 => 16,  34 => 7,  76 => 22,  59 => 16,  53 => 5,  23 => 5,  239 => 107,  207 => 80,  197 => 97,  194 => 74,  155 => 67,  152 => 66,  150 => 52,  137 => 43,  131 => 46,  129 => 45,  118 => 40,  104 => 31,  100 => 32,  90 => 24,  81 => 24,  480 => 162,  474 => 185,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 162,  413 => 159,  409 => 158,  407 => 131,  402 => 130,  398 => 155,  393 => 126,  387 => 151,  384 => 121,  381 => 120,  379 => 119,  374 => 146,  368 => 112,  365 => 143,  362 => 110,  360 => 109,  355 => 138,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 105,  294 => 101,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 103,  258 => 86,  252 => 80,  247 => 98,  241 => 94,  235 => 75,  229 => 90,  224 => 71,  220 => 70,  214 => 82,  208 => 78,  169 => 59,  143 => 45,  140 => 48,  132 => 46,  128 => 48,  119 => 38,  111 => 34,  107 => 35,  71 => 21,  177 => 65,  165 => 58,  160 => 55,  139 => 49,  135 => 55,  126 => 43,  114 => 39,  84 => 26,  70 => 21,  67 => 19,  61 => 16,  47 => 11,  98 => 28,  93 => 28,  88 => 27,  78 => 23,  40 => 9,  94 => 29,  89 => 29,  85 => 25,  79 => 26,  75 => 22,  68 => 20,  56 => 15,  50 => 13,  27 => 7,  201 => 60,  196 => 75,  183 => 91,  171 => 81,  166 => 65,  163 => 70,  158 => 62,  156 => 54,  151 => 59,  142 => 44,  138 => 56,  136 => 47,  123 => 47,  121 => 38,  117 => 41,  115 => 37,  105 => 33,  101 => 34,  91 => 34,  69 => 21,  62 => 17,  49 => 16,  43 => 10,  32 => 7,  28 => 8,  87 => 23,  72 => 22,  66 => 17,  55 => 18,  44 => 10,  41 => 9,  25 => 3,  21 => 2,  46 => 11,  35 => 9,  31 => 7,  29 => 6,  38 => 9,  26 => 6,  24 => 6,  22 => 5,  19 => 4,  209 => 81,  203 => 76,  199 => 72,  193 => 73,  189 => 71,  187 => 66,  182 => 66,  176 => 68,  173 => 60,  168 => 58,  164 => 59,  162 => 56,  154 => 53,  149 => 53,  147 => 58,  144 => 49,  141 => 44,  133 => 42,  130 => 41,  125 => 44,  122 => 45,  116 => 42,  112 => 42,  109 => 39,  106 => 37,  103 => 34,  99 => 30,  95 => 31,  92 => 30,  86 => 25,  82 => 20,  80 => 26,  73 => 21,  64 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 15,  48 => 13,  45 => 12,  42 => 10,  39 => 9,  36 => 11,  33 => 7,  30 => 7,);
    }
}
