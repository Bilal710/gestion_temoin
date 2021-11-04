<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_0b3774d6f4aabfbc78aacb9216b31497d4f0f7b02c82088f9a1537a6a175cddd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_8b3581464ed6988ce874d0c117f2c5399700eae1894f97a2d372a455d3669ea9"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    <title>";
        // line 15
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

    ";
        // line 17
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 38
        echo "
    ";
        // line 39
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 39), "textDirection", [], "any", false, false, false, 39))) {
            // line 40
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 48
        echo "</head>

";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 288
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 17
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 21
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", false, false, false, 22)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssAssets", [], "any", false, false, false, 22)) : ([]))], false);
        echo "
        ";
        // line 23
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "webpackEncoreAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
    ";
    }

    // line 26
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 27)), "html", null, true);
        echo "\">
    ";
    }

    // line 30
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 34
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 35), "jsAssets", [], "any", false, false, false, 35)) : ([]))], false);
        echo "
        ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "webpackEncoreAssets", [], "any", false, false, false, 36)) : ([]))], false);
        echo "
    ";
    }

    // line 43
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "headContents", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "headContents", [], "any", false, false, false, 44)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 44), "headContents", [], "any", false, false, false, 44)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 45
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    ";
    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    ";
        // line 52
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 278
        echo "
    ";
        // line 279
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 280
        echo "
    ";
        // line 281
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 286
        echo "    </body>
";
    }

    // line 51
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        <script>
            document.body.classList.add(
                'ea-content-width-' + (localStorage.getItem('ea/content/width') || '";
        // line 55
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)) : ("normal")))), "html", null, true);
        echo "'),
                'ea-sidebar-width-' + (localStorage.getItem('ea/sidebar/width') || '";
        // line 56
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)) : ("normal")))), "html", null, true);
        echo "')
            );
        </script>
    ";
    }

    // line 61
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        ob_start(function () { return ''; });
        // line 67
        echo "            ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 67), "avatarUrl", [], "any", false, false, false, 67))) {
            // line 68
            echo "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
            // line 71
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 71))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
        } else {
            // line 75
            echo "                <img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 75), "avatarUrl", [], "any", false, false, false, 75), "html", null, true);
            echo "\" />
            ";
        }
        // line 77
        echo "        ";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "
        ";
        // line 79
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 80
        echo "
        ";
        // line 81
        ob_start(function () { return ''; });
        // line 82
        echo "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
        // line 84
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        <span class=\"user-name\">";
        // line 87
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 87))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87))), "html", null, true);
        echo "</span>
                    </div>
                </li>
                <li><hr class=\"dropdown-divider\"></li>

                ";
        // line 92
        $this->displayBlock('user_menu', $context, $blocks);
        // line 110
        echo "            </ul>
        ";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        echo "
        <div class=\"wrapper\">
            ";
        // line 114
        $this->displayBlock('wrapper', $context, $blocks);
        // line 276
        echo "        </div>
    ";
    }

    // line 62
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 63));
        echo "
        ";
    }

    // line 92
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 93), "items", [], "any", false, false, false, 93)) > 0)) {
            // line 94
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 94), "items", [], "any", false, false, false, 94));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "                            <li>
                                ";
                // line 96
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 96) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 96))) {
                    // line 97
                    echo "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 98
$context["item"], "isMenuSection", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 99), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 99), "html", null, true);
                    echo "\"
                                       target=\"";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 100), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 100), "html", null, true);
                    echo "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 102
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 102))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 102), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 103
                    echo "                                        <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 103), "html", null, true);
                    echo "</span>
                                    </a>
                                ";
                }
                // line 106
                echo "                            </li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                    ";
        }
        // line 109
        echo "                ";
    }

    // line 114
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                <div class=\"responsive-header\">
                    ";
        // line 116
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 143
        echo "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 147
        $this->displayBlock('sidebar', $context, $blocks);
        // line 169
        echo "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 175
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 175)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 175), "isSearchEnabled", [], "any", false, false, false, 175));
        // line 176
        echo "                    <aside class=\"content-top ";
        echo ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
                        ";
        // line 177
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 227
        echo "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 230
        $this->displayBlock('content', $context, $blocks);
        // line 271
        echo "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
    }

    // line 116
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate\">
                            ";
        // line 122
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 127
        echo "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 129
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 133
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 133), "avatarDisplayed", [], "any", false, false, false, 133)) {
            // line 134
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            echo "
                                ";
        } else {
            // line 136
            echo "                                    <i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 136))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
                                ";
        }
        // line 138
        echo "                            </a>

                            ";
        // line 140
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                        </div>
                    ";
    }

    // line 122
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "                                <a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 123)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 123));
        echo "\">
                                    ";
        // line 124
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 124);
        echo "
                                </a>
                            ";
    }

    // line 147
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                            <header class=\"main-header\">
                                ";
        // line 149
        $this->displayBlock('header', $context, $blocks);
        // line 163
        echo "                            </header>

                            ";
        // line 165
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 168
        echo "                        ";
    }

    // line 149
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 151
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 161
        echo "                                </nav>
                                ";
    }

    // line 151
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                                        <div id=\"header-logo\">
                                            ";
        // line 153
        $this->displayBlock('header_logo', $context, $blocks);
        // line 159
        echo "                                        </div>
                                    ";
    }

    // line 153
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "                                                <a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 154)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 154));
        echo "\">
                                                    <span class=\"logo-custom\">";
        // line 155
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 155);
        echo "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
    }

    // line 165
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 166));
        echo "
                            ";
    }

    // line 177
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "                            <div class=\"content-search\">
                                ";
        // line 179
        if (($context["has_search"] ?? null)) {
            // line 180
            echo "                                    ";
            $this->displayBlock('search', $context, $blocks);
            // line 209
            echo "                                ";
        }
        // line 210
        echo "                            </div>

                            <div class=\"navbar-custom-menu\">
                                ";
        // line 213
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 225
        echo "                            </div>
                        ";
    }

    // line 180
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 183
        $this->displayBlock('search_form', $context, $blocks);
        // line 207
        echo "                                        </form>
                                    ";
    }

    // line 183
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo "                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 185), "query", [], "any", false, false, false, 185), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 185), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 186), "query", [], "any", false, false, false, 186), "get", [0 => "menuIndex"], "method", false, false, false, 186), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 187), "query", [], "any", false, false, false, 187), "get", [0 => "submenuIndex"], "method", false, false, false, 187), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">
                                                <input type=\"hidden\" name=\"signature\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unsetAll", [], "method", false, false, false, 189), "setAction", [0 => "index"], "method", false, false, false, 189), "setController", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 189), "query", [], "any", false, false, false, 189), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 189)], "method", false, false, false, 189), "getSignature", [], "method", false, false, false, 189), "html", null, true);
        echo "\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 195), "get", [0 => "query"], "method", false, false, false, 195), "html", null, true);
        echo "\">
                                                            <input class=\"form-control ";
        // line 196
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 196), "get", [0 => "query"], "method", false, false, false, 196))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 196), "get", [0 => "query"], "method", true, true, false, 196) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 196), "get", [0 => "query"], "method", false, false, false, 196)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 196), "get", [0 => "query"], "method", false, false, false, 196), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 196), "translationParameters", [], "any", false, false, false, 196), "EasyAdminBundle"), "html", null, true);
        echo "\" spellcheck=\"false\" autocorrect=\"false\" onInput=\"this.parentNode.dataset.value=this.value\">
                                                        </label>

                                                        ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 199), "get", [0 => "query"], "method", false, false, false, 199)) {
            // line 200
            echo "                                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 200), "html", null, true);
            echo "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 204
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 213
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "                                    <div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 216
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "
                                            ";
        // line 217
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 217), "isNameDisplayed", [], "any", false, false, false, 217)) {
            // line 218
            echo "                                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 218), "name", [], "any", false, false, false, 218), "html", null, true);
            echo "</span>
                                            ";
        }
        // line 220
        echo "                                        </a>

                                        ";
        // line 222
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                                    </div>
                                ";
    }

    // line 230
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "                            <article class=\"content\">
                                ";
        // line 232
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 256
        echo "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 258
        $this->displayBlock('main', $context, $blocks);
        // line 259
        echo "                                </section>

                                ";
        // line 261
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 269
        echo "                            </article>
                        ";
    }

    // line 232
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        echo "                                    ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 233), "helpMessage", [], "any", true, true, false, 233) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 233), "helpMessage", [], "any", false, false, false, 233)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 233), "helpMessage", [], "any", false, false, false, 233)) : ("")));
        // line 234
        echo "                                    <section class=\"content-header\">
                                        ";
        // line 235
        $this->displayBlock('content_header', $context, $blocks);
        // line 254
        echo "                                    </section>
                                ";
    }

    // line 235
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 236
        echo "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 238
        $this->displayBlock('content_title', $context, $blocks);
        // line 239
        echo "
                                                    ";
        // line 240
        $this->displayBlock('content_help', $context, $blocks);
        // line 247
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 250
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 253
        echo "                                        ";
    }

    // line 238
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 240
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 241
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 242
            echo "                                                            <span class=\"content-header-help\">
                                                            <i class=\"far fa-question-circle\" data-bs-toggle=\"tooltip\" title=\"";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 243), "helpMessage", [], "any", false, false, false, 243), "html_attr");
            echo "\"></i>
                                                        </span>
                                                        ";
        }
        // line 246
        echo "                                                    ";
    }

    // line 250
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 251
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 258
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 261
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 262
        echo "                                    ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 263
        echo "                                    ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 264
            echo "                                        <section class=\"content-footer\">
                                            ";
            // line 265
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                        </section>
                                    ";
        }
        // line 268
        echo "                                ";
    }

    // line 279
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 281
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 282
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 282), "bodyContents", [], "any", true, true, false, 282) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 282), "bodyContents", [], "any", false, false, false, 282)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 282), "bodyContents", [], "any", false, false, false, 282)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 283
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  985 => 285,  976 => 283,  971 => 282,  967 => 281,  961 => 279,  957 => 268,  951 => 265,  948 => 264,  945 => 263,  942 => 262,  938 => 261,  932 => 258,  920 => 251,  916 => 250,  912 => 246,  906 => 243,  903 => 242,  900 => 241,  896 => 240,  890 => 238,  886 => 253,  884 => 250,  879 => 247,  877 => 240,  874 => 239,  872 => 238,  868 => 236,  864 => 235,  859 => 254,  857 => 235,  854 => 234,  851 => 233,  847 => 232,  842 => 269,  840 => 261,  836 => 259,  834 => 258,  830 => 256,  828 => 232,  825 => 231,  821 => 230,  814 => 222,  810 => 220,  804 => 218,  802 => 217,  798 => 216,  792 => 214,  788 => 213,  782 => 204,  774 => 200,  772 => 199,  762 => 196,  758 => 195,  749 => 189,  744 => 187,  740 => 186,  736 => 185,  733 => 184,  729 => 183,  724 => 207,  722 => 183,  718 => 181,  714 => 180,  709 => 225,  707 => 213,  702 => 210,  699 => 209,  696 => 180,  694 => 179,  691 => 178,  687 => 177,  680 => 166,  676 => 165,  668 => 155,  661 => 154,  657 => 153,  652 => 159,  650 => 153,  647 => 152,  643 => 151,  638 => 161,  636 => 151,  633 => 150,  629 => 149,  625 => 168,  623 => 165,  619 => 163,  617 => 149,  614 => 148,  610 => 147,  603 => 124,  596 => 123,  592 => 122,  585 => 140,  581 => 138,  575 => 136,  569 => 134,  566 => 133,  561 => 129,  557 => 127,  555 => 122,  548 => 117,  544 => 116,  536 => 271,  534 => 230,  529 => 227,  527 => 177,  522 => 176,  520 => 175,  512 => 169,  510 => 147,  504 => 143,  502 => 116,  499 => 115,  495 => 114,  491 => 109,  488 => 108,  473 => 106,  466 => 103,  460 => 102,  453 => 100,  446 => 99,  444 => 98,  441 => 97,  439 => 96,  436 => 95,  418 => 94,  415 => 93,  411 => 92,  404 => 63,  400 => 62,  395 => 276,  393 => 114,  389 => 112,  385 => 110,  383 => 92,  375 => 87,  371 => 86,  366 => 84,  362 => 82,  360 => 81,  357 => 80,  355 => 79,  352 => 78,  349 => 77,  343 => 75,  336 => 71,  331 => 68,  328 => 67,  326 => 66,  323 => 65,  320 => 62,  316 => 61,  308 => 56,  304 => 55,  300 => 53,  296 => 52,  285 => 51,  280 => 286,  278 => 281,  275 => 280,  273 => 279,  270 => 278,  268 => 61,  265 => 60,  263 => 52,  256 => 51,  252 => 50,  248 => 47,  239 => 45,  234 => 44,  230 => 43,  224 => 36,  219 => 35,  215 => 34,  208 => 31,  204 => 30,  197 => 27,  193 => 26,  187 => 23,  182 => 22,  178 => 21,  171 => 18,  167 => 17,  160 => 15,  151 => 8,  147 => 7,  142 => 288,  140 => 50,  136 => 48,  134 => 43,  131 => 42,  125 => 40,  123 => 39,  120 => 38,  118 => 34,  115 => 33,  113 => 30,  110 => 29,  108 => 26,  105 => 25,  103 => 21,  100 => 20,  98 => 17,  93 => 15,  90 => 14,  88 => 7,  81 => 5,  77 => 3,  75 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/home/yacoubou/Bureau/roixdepaix/vendor/easycorp/easyadmin-bundle/src/Resources/views/layout.html.twig");
    }
}
