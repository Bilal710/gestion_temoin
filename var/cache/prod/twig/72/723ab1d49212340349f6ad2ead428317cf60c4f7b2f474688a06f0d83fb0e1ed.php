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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_d409701246286a1688026bb1d8630523bde5a4312d2ed34b0ff30f050f9ed8f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_widget' => [$this, 'block_collection_entry_widget'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'ffform_widget_compound' => [$this, 'block_ffform_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_end', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_errors', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('time_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('file_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('form_row', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('collection_row', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('collection_entry_widget', $context, $blocks);
        // line 216
        echo "
";
        // line 217
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 242
        echo "
";
        // line 243
        $this->displayBlock('form_label', $context, $blocks);
        // line 269
        echo "
";
        // line 271
        echo "
";
        // line 272
        $this->displayBlock('ffform_widget_compound', $context, $blocks);
        // line 308
        echo "
";
        // line 309
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 314
        echo "
";
        // line 315
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 419
        echo "
";
        // line 420
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 423
        echo "
";
        // line 425
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 465
        echo "
";
        // line 466
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 520
        echo "
";
        // line 522
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 525
        echo "
";
        // line 526
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 530
        echo "
";
        // line 532
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 549
        echo "
";
        // line 551
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 569
        echo "
";
        // line 571
        $this->displayBlock('ea_form_row_row', $context, $blocks);
        // line 574
        echo "
";
        // line 575
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 587
        echo "
";
        // line 589
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 636
        echo "
";
        // line 637
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 653
        echo "
";
        // line 654
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 657
        echo "
";
        // line 658
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 720
        echo "
";
        // line 721
        $this->displayBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 788
        echo "
";
        // line 789
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["class" => "global-invalid-feedback"]]);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <div class=\"row\"> ";
        // line 12
        echo "        <input type=\"hidden\" name=\"referrer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", [0 => "referrer"], "method", false, false, false, 12), "html", null, true);
        echo "\">
";
    }

    // line 15
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
            ";
        }
        // line 19
        echo "        </div> ";
        // line 20
        echo "    </form>
";
    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
                echo " invalid-feedback d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 26), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 35
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "")) : ("")))]);
        }
        // line 37
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 38
            echo "        ";
            // line 39
            $context["required"] = false;
        }
        // line 41
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 44
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-inline"))]);
        // line 46
        echo "    ";
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        echo "
";
    }

    // line 49
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 51
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 52
        echo "</div>";
    }

    // line 55
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 57
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 58
        echo "</div>";
    }

    // line 61
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 63
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 64
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 72
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 74
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 74), "")) : ("")) . " form-group")]);
        // line 76
        echo "
    <div class=\"";
        // line 77
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", false, false, false, 77)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", false, false, false, 77)) : ("")))), "html", null, true);
        echo "\">
        <div ";
        // line 78
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 78, $this->getSourceContext());
        }
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_to_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        echo ">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 80
        echo "<div class=\"form-widget\">
                ";
        // line 81
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 81), "prepend_html", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 81), "prepend_html", [], "any", false, false, false, 81), null)) : (null)));
        // line 82
        echo "                ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 82), "append_html", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 82), "append_html", [], "any", false, false, false, 82), null)) : (null)));
        // line 83
        echo "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 84
        echo "
                ";
        // line 85
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 86
        echo "                    ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 87
            echo "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 88), "prepend_html", [], "any", false, false, false, 88);
            echo "</span>
                        </div>
                    ";
        }
        // line 91
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                    ";
        // line 94
        if (($context["has_append_html"] ?? null)) {
            // line 95
            echo "                        <span class=\"input-group-text\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 95), "append_html", [], "any", false, false, false, 95);
            echo "</span>
                    ";
        }
        // line 97
        echo "                    ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 98
        echo "
                ";
        // line 99
        $context["nullable_fields_fqcn"] = [0 => "EasyCorpBundleEasyAdminBundleFieldDateTimeField", 1 => "EasyCorpBundleEasyAdminBundleFieldDateField", 2 => "EasyCorpBundleEasyAdminBundleFieldTimeField"];
        // line 104
        echo "                ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 104), "ea_crud_form", [], "any", false, true, false, 104), "ea_field", [], "any", false, true, false, 104), "fieldFqcn", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 104), "ea_crud_form", [], "any", false, true, false, 104), "ea_field", [], "any", false, true, false, 104), "fieldFqcn", [], "any", false, false, false, 104), false)) : (false)), ($context["nullable_fields_fqcn"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 104), "nullable", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 104), "nullable", [], "any", false, false, false, 104), false)) : (false)))) {
            // line 105
            echo "                    <div class=\"nullable-control\">
                        <label>
                            <input type=\"checkbox\" ";
            // line 107
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                            ";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                        </label>
                    </div>
                ";
        }
        // line 112
        echo "
                ";
        // line 113
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", true, true, false, 113) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", false, false, false, 113)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", false, false, false, 113)) : (false))) {
            // line 114
            echo "                    <small class=\"form-help\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 114), "help", [], "any", false, false, false, 114);
            echo "</small>
                ";
        } elseif ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 115
($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", true, true, false, 115) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", false, false, false, 115)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", false, false, false, 115)) : (false))) {
            // line 116
            echo "                    <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 116), "help", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 116), "help_translation_parameters", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 116), "translation_domain", [], "any", false, false, false, 116));
            echo "</small>
                ";
        }
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 120
        echo "</div>
        </div>
    </div>

    ";
        // line 125
        echo "    ";
        if ((null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 125), "ea_crud_form", [], "any", false, true, false, 125), "ea_field", [], "any", false, true, false, 125), "columns", [], "any", true, true, false, 125)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 125), "ea_crud_form", [], "any", false, true, false, 125), "ea_field", [], "any", false, true, false, 125), "columns", [], "any", false, false, false, 125), null)) : (null)))) {
            // line 126
            echo "        <div class=\"flex-fill\"></div>
    ";
        }
    }

    // line 130
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 131))) {
            // line 132
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 133
            echo "    ";
        }
        // line 134
        echo "
    ";
        // line 135
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 137
($context["form"] ?? null), "vars", [], "any", false, false, false, 137), "ea_crud_form", [], "any", false, false, false, 137), "ea_field", [], "any", false, false, false, 137) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 137), "ea_crud_form", [], "any", false, false, false, 137), "ea_field", [], "any", false, false, false, 137), "customOptions", [], "any", false, false, false, 137), "get", [0 => "entryIsComplex"], "method", false, false, false, 137))) ? ("true") : ("false")), "data-allow-add" => ((        // line 138
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 139
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 140
($context["form"] ?? null), "children", [], "any", false, false, false, 140)), "data-form-type-name-placeholder" => ((        // line 141
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141)) : (""))]);
        // line 143
        echo "
    ";
        // line 144
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 147
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "    ";
        // line 150
        echo "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
        // line 151
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_crud_form", [], "any", false, true, false, 151), "ea_field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", true, true, false, 151) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_crud_form", [], "any", false, true, false, 151), "ea_field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", false, false, false, 151)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_crud_form", [], "any", false, true, false, 151), "ea_field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", false, false, false, 151)) : (false)));
        // line 152
        echo "
    <div class=\"ea-form-collection-items\">
        ";
        // line 154
        if (($context["isEmptyCollection"] ?? null)) {
            // line 155
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        } elseif (        // line 156
($context["is_array_field"] ?? null)) {
            // line 157
            echo "            ";
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 159
            echo "            <div class=\"accordion\">
                ";
            // line 160
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
            </div>
        ";
        }
        // line 163
        echo "    </div>

    ";
        // line 165
        if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "prototype", [], "any", true, true, false, 165))) {
            // line 166
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 167
            echo "    ";
        }
        // line 168
        echo "
    ";
        // line 169
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 170
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 177
    public function block_collection_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_crud_form", [], "any", false, true, false, 178), "ea_field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", true, true, false, 178) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_crud_form", [], "any", false, true, false, 178), "ea_field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", false, false, false, 178)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 178), "ea_crud_form", [], "any", false, true, false, 178), "ea_field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", false, false, false, 178)) : (false)));
        // line 179
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_crud_form", [], "any", false, true, false, 179), "ea_field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", [0 => "entryIsComplex"], "method", true, true, false, 179) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_crud_form", [], "any", false, true, false, 179), "ea_field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", [0 => "entryIsComplex"], "method", false, false, false, 179)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 179), "ea_crud_form", [], "any", false, true, false, 179), "ea_field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", [0 => "entryIsComplex"], "method", false, false, false, 179)) : (false));
        // line 180
        echo "    ";
        $context["allows_deleting_items"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "allow_delete", [], "any", true, true, false, 180)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 180), "allow_delete", [], "any", false, false, false, 180), false)) : (false));
        // line 181
        echo "    ";
        $context["render_expanded"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_crud_form", [], "any", false, true, false, 181), "ea_field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", [0 => "renderExpanded"], "method", true, true, false, 181) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_crud_form", [], "any", false, true, false, 181), "ea_field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", [0 => "renderExpanded"], "method", false, false, false, 181)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 181), "ea_crud_form", [], "any", false, true, false, 181), "ea_field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", [0 => "renderExpanded"], "method", false, false, false, 181)) : (false));
        // line 182
        echo "    ";
        ob_start(function () { return ''; });
        // line 183
        echo "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
        echo "\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    ";
        $context["delete_item_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        echo "
    <div class=\"field-collection-item ";
        // line 189
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 190
        if (((array_key_exists("is_array_field", $context)) ? (_twig_default_filter(($context["is_array_field"] ?? null), false)) : (false))) {
            // line 191
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 192
            if (($context["allows_deleting_items"] ?? null)) {
                // line 193
                echo "                ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 195
            echo "        ";
        } else {
            // line 196
            echo "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 198
            echo ((($context["render_expanded"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        ";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null)), "html", null, true);
            echo "
                    </button>

                    ";
            // line 203
            if (($context["allows_deleting_items"] ?? null)) {
                // line 204
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 206
            echo "                </h2>
                <div id=\"";
            // line 207
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\" class=\"accordion-collapse collapse ";
            echo ((($context["render_expanded"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"accordion-body\">
                        ";
            // line 209
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 214
        echo "    </div>
";
    }

    // line 217
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 219
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 220
            echo "            ";
            // line 222
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 223
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 224
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 226
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 226), "prototype", [], "any", true, true, false, 226))) {
                // line 227
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 228
                echo "            ";
            }
            // line 229
            echo "        ";
        }
        // line 230
        echo "
        ";
        // line 231
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 235
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 236
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 236), "css_class", [], "any", true, true, false, 236)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 236), "css_class", [], "any", false, false, false, 236), "")) : ("")), "html", null, true);
        echo "\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 238
        echo "</div>";
    }

    // line 243
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 244
        if ((($context["label"] ?? null) === false)) {
            // line 245
            echo "<label>";
            echo "</label>";
        } else {
            // line 247
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 248
                $context["element"] = "legend";
                // line 249
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 249)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 249), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 251
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 251)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 251), "")) : ("")) . " form-control-label"))]);
            }
            // line 253
            if (($context["required"] ?? null)) {
                // line 254
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 254)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 254), "")) : ("")) . " required"))]);
            }
            // line 256
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 257
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 258
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 259
($context["name"] ?? null), "%id%" =>                     // line 260
($context["id"] ?? null)]);
                } else {
                    // line 263
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 266
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context;
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 266, $this->getSourceContext());
                }
                $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_to_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b;
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 272
    public function block_ffform_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        echo "    ";
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 274
            echo "        ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 275
                echo "            ";
                // line 277
                echo "            ";
                $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
                // line 278
                echo "            ";
                if (($context["isEmptyCollection"] ?? null)) {
                    // line 279
                    echo "                ";
                    $this->displayBlock("empty_collection", $context, $blocks);
                    echo "
            ";
                } else {
                    // line 281
                    echo "                <div class=\"accordion\">
                    ";
                    // line 282
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
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
                        // line 283
                        echo "                        ";
                        $context["accordion_id"] = ((($context["id"] ?? null) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 283));
                        // line 284
                        echo "                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
                        // line 286
                        echo twig_escape_filter($this->env, ($context["accordion_id"] ?? null), "html", null, true);
                        echo "\">
                                    ";
                        // line 287
                        echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                        echo "
                                </button>
                            </h2>
                            <div id=\"";
                        // line 290
                        echo twig_escape_filter($this->env, ($context["accordion_id"] ?? null), "html", null, true);
                        echo "\" class=\"accordion-collapse collapse\">
                                <div class=\"accordion-body\">
                                    ";
                        // line 292
                        $this->displayParentBlock("ffform_widget_compound", $context, $blocks);
                        echo "
                                </div>
                            </div>
                        </div>
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
                    // line 297
                    echo "                </div>
            ";
                }
                // line 299
                echo "
            ";
                // line 300
                if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 300), "prototype", [], "any", true, true, false, 300))) {
                    // line 301
                    echo "                ";
                    $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                     $this->renderBlock("empty_collection", $context, $blocks)]);
                    // line 302
                    echo "            ";
                }
                // line 303
                echo "        ";
            } else {
                // line 304
                echo "            ";
                $this->displayParentBlock("ffform_widget_compound", $context, $blocks);
                echo "
        ";
            }
            // line 306
            echo "    ";
        }
    }

    // line 309
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 310
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 311
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "label/empty"], "method", false, false, false, 311));
        echo "
    </div>
";
    }

    // line 315
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 316
        echo "    ";
        $context["force_error"] = true;
        // line 317
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 320
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 321
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 322
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 323
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 324
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 325
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 332
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 333
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 333) &&  !(null === (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["extension_icons"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["extension_icons"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 334
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 337
        echo "
        ";
        // line 338
        ob_start(function () { return ''; });
        // line 339
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 339), "vars", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 342), "vars", [], "any", false, false, false, 342), "id", [], "any", false, false, false, 342), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 344
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 347
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 349), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 352
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 352)) {
            // line 353
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 353), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 355
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 356
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 356), "vars", [], "any", false, false, false, 356), "id", [], "any", false, false, false, 356), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 360
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 361
        echo "    ";
        $context["force_error"] = true;
        // line 362
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 365
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 366
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 366), "formTypeOptions", [], "any", true, true, false, 366)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 366), "formTypeOptions", [], "any", false, false, false, 366), "")) : (""));
        // line 367
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 368
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 369
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 370
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 371
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 371) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 371)))) {
                    // line 372
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 372)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 374
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 376
                echo "                </div>
            ";
            } else {
                // line 378
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 379
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 380
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 381
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 381) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 381)))) {
                    // line 382
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 382)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 384
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 386
                echo "                </a>

                <div id=\"";
                // line 388
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 389
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 389) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 389)))) {
                    // line 390
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 390)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 392
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 394
                echo "                </div>
            ";
            }
            // line 396
            echo "        ";
        }
        // line 397
        echo "
        ";
        // line 398
        ob_start(function () { return ''; });
        // line 399
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 399), "vars", [], "any", false, false, false, 399), "id", [], "any", false, false, false, 399), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 402
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 402), "vars", [], "any", false, false, false, 402), "id", [], "any", false, false, false, 402), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 404
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 407
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 409), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 412
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 412)) {
            // line 413
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 413), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 415
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 416
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 416), "vars", [], "any", false, false, false, 416), "id", [], "any", false, false, false, 416), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 420
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 421
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 425
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 426
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 426)) > 0)) {
            // line 427
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 430
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 431
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 432
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 432)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["tab_config"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["tab_config"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-bs-toggle=\"tab\">";
                // line 433
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 433)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 433), false)) : (false))) {
                    // line 434
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 434), "html", null, true);
                    echo "\"></i>";
                }
                // line 436
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["tab_config"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["label"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 436), "translationDomain", [], "any", false, false, false, 436)), "html", null, true);
                // line 437
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 437) > 0)) {
                    // line 438
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 438)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 439
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 439), "html", null, true);
                    // line 440
                    echo "</span>";
                }
                // line 442
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 445
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 447
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ea_form_tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 448
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["tab_config"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 448)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 448)) ? (_twig_default_filter((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["tab_config"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 449
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 449)) ? (_twig_default_filter((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["tab_config"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["help"] ?? null) : null), false)) : (false))) {
                    // line 450
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 451
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["tab_config"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 451), "translationDomain", [], "any", false, false, false, 451));
                    echo "
                                </div>
                            ";
                }
                // line 454
                echo "
                            ";
                // line 455
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 462
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
    }

    // line 466
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 467
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 467), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 467) || (twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 467) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 468
            echo "        ";
            $context["panel_has_header"] = ((((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 468)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 468), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 468)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 468), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 468)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 468), false)) : (false)));
            // line 469
            echo "
        ";
            // line 470
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 470);
            // line 471
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 471);
            // line 472
            echo "
        <div class=\"";
            // line 473
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 473) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 473)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 473), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"form-panel\">
                ";
            // line 475
            if (($context["panel_has_header"] ?? null)) {
                // line 476
                echo "                    <div class=\"form-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 476)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 476), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        <div class=\"form-panel-title\">
                            <a ";
                // line 478
                if ( !($context["collapsible"] ?? null)) {
                    // line 479
                    echo "                                    href=\"#\" class=\"not-collapsible\"
                               ";
                } else {
                    // line 481
                    echo "                                    href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                                    class=\"form-panel-collapse ";
                    // line 482
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                                    aria-expanded=\"";
                    // line 483
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\"
                               ";
                }
                // line 485
                echo "                            >
                                ";
                // line 486
                if (($context["collapsible"] ?? null)) {
                    // line 487
                    echo "                                    <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                                ";
                }
                // line 489
                echo "
                                ";
                // line 490
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 490)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 490), false)) : (false))) {
                    // line 491
                    echo "                                    <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 491), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 493
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 493);
                echo "
                            </a>

                            ";
                // line 496
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 496)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 496), false)) : (false))) {
                    // line 497
                    echo "                                <div class=\"form-panel-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 497);
                    echo "</div>
                            ";
                }
                // line 499
                echo "                        </div>
                    </div>
                ";
            }
            // line 502
            echo "
                <div id=\"content-";
            // line 503
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"form-panel-body ";
            echo (( !($context["panel_has_header"] ?? null)) ? ("without-header") : (""));
            echo " ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"row\">
                        ";
            // line 505
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 505), "block_prefixes", [], "any", false, false, false, 505)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 505), "ea_crud_form", [], "any", false, false, false, 505), "form_panel", [], "any", false, false, false, 505) == $context["panel_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 506
                echo "                            ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 506), "ea_crud_form", [], "any", false, false, false, 506), "form_tab", [], "any", false, false, false, 506) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 506), "ea_crud_form", [], "any", false, false, false, 506), "form_tab", [], "any", false, false, false, 506) == ($context["tab_name"] ?? null)))) {
                    // line 507
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            ";
                }
                // line 509
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 510
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 515
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 515), "block_prefixes", [], "any", false, false, false, 515)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 515), "ea_crud_form", [], "any", false, false, false, 515), "form_tab", [], "any", false, false, false, 515) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 515), "ea_crud_form", [], "any", false, false, false, 515), "form_tab", [], "any", false, false, false, 515) == ($context["tab_name"] ?? null)))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 516
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 518
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 522
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 523
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 523), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 526
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 527
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 527), "name", [], "any", false, false, false, 527);
        // line 528
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 532
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 533
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 535
($context["form"] ?? null), "vars", [], "any", false, false, false, 535), "ea_crud_form", [], "any", false, false, false, 535), "ea_field", [], "any", false, false, false, 535), "customOptions", [], "any", false, false, false, 535), "get", [0 => "language"], "method", false, false, false, 535), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 536
($context["form"] ?? null), "vars", [], "any", false, false, false, 536), "ea_crud_form", [], "any", false, false, false, 536), "ea_field", [], "any", false, false, false, 536), "customOptions", [], "any", false, false, false, 536), "get", [0 => "tabSize"], "method", false, false, false, 536), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 537
($context["form"] ?? null), "vars", [], "any", false, false, false, 537), "ea_crud_form", [], "any", false, false, false, 537), "ea_field", [], "any", false, false, false, 537), "customOptions", [], "any", false, false, false, 537), "get", [0 => "indentWithTabs"], "method", false, false, false, 537)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 538
($context["form"] ?? null), "vars", [], "any", false, false, false, 538), "ea_crud_form", [], "any", false, false, false, 538), "ea_field", [], "any", false, false, false, 538), "customOptions", [], "any", false, false, false, 538), "get", [0 => "showLineNumbers"], "method", false, false, false, 538)) ? ("true") : ("false"))])]);
        // line 539
        echo "

    ";
        // line 541
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 541), "ea_crud_form", [], "any", false, false, false, 541), "ea_field", [], "any", false, false, false, 541), "customOptions", [], "any", false, false, false, 541), "get", [0 => "numOfRows"], "method", false, false, false, 541);
        // line 542
        echo "    ";
        if ( !(null === ($context["numOfRows"] ?? null))) {
            // line 543
            echo "        <style type=\"text/css\">
            ";
            // line 545
            echo "            #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, twig_round((21 * ($context["numOfRows"] ?? null))), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
    }

    // line 551
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 552
        echo "    ";
        $context["numOfRows"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 552), "ea_crud_form", [], "any", false, true, false, 552), "ea_field", [], "any", false, true, false, 552), "customOptions", [], "any", false, true, false, 552), "get", [0 => "numOfRows"], "method", true, true, false, 552)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 552), "ea_crud_form", [], "any", false, true, false, 552), "ea_field", [], "any", false, true, false, 552), "customOptions", [], "any", false, true, false, 552), "get", [0 => "numOfRows"], "method", false, false, false, 552), 5)) : (5));
        // line 553
        echo "
    ";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none", "class" => "ea-text-editor-content"])]);
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 557
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>

    ";
        // line 560
        if (($context["numOfRows"] ?? null)) {
            // line 561
            echo "        <style type=\"text/css\">
            trix-editor[input=";
            // line 562
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "].trix-content {
                ";
            // line 564
            echo "                min-height: ";
            echo twig_escape_filter($this->env, twig_round((($context["numOfRows"] ?? null) * 21)), "html", null, true);
            echo "px;
            }
        </style>
    ";
        }
    }

    // line 571
    public function block_ea_form_row_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 572
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 572), "row_attr", [], "any", false, false, false, 572), "class", [], "any", false, false, false, 572), "html", null, true);
        echo "\"></div>
";
    }

    // line 575
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 576
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 576), "icon", [], "any", true, true, false, 576)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 576), "icon", [], "any", false, false, false, 576), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 576), "label", [], "any", true, true, false, 576)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 576), "label", [], "any", false, false, false, 576), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 576), "css_class", [], "any", true, true, false, 576)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 576), "css_class", [], "any", false, false, false, 576), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 578
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 578), "icon", [], "any", true, true, false, 578)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 578), "icon", [], "any", false, false, false, 578), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 578), "icon", [], "any", false, false, false, 578), "html", null, true);
            echo "\"></i>";
        }
        // line 579
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 579), "label", [], "any", true, true, false, 579)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 579), "label", [], "any", false, false, false, 579), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 579), "label", [], "any", true, true, false, 579)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 579), "label", [], "any", false, false, false, 579), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 579), "translationDomain", [], "any", false, false, false, 579));
        }
        echo "</span>
        </h2>

        ";
        // line 582
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 582), "help", [], "any", true, true, false, 582)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 582), "help", [], "any", false, false, false, 582), false)) : (false))) {
            // line 583
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 583), "help", [], "any", false, false, false, 583), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 583), "translationDomain", [], "any", false, false, false, 583));
            echo "</p>
        ";
        }
        // line 585
        echo "    </div>
";
    }

    // line 589
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 590
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 590), "query", [], "any", false, true, false, 590), "get", [0 => "filters"], "method", true, true, false, 590)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 590), "query", [], "any", false, true, false, 590), "get", [0 => "filters"], "method", false, false, false, 590), [])) : ([])));
        // line 591
        echo "
    ";
        // line 592
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 593
            echo "        <div class=\"col-12\">
            <div class=\"filter-field ";
            // line 594
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 594)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 594)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 594), "name", [], "any", false, false, false, 594), "html", null, true);
            echo "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 595
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 595), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 596
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 596), "name", [], "any", false, false, false, 596), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 597
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 597), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 597), "name", [], "any", false, false, false, 597), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 597), "html", null, true);
            echo "\">
                        ";
            // line 598
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 598), "label", [], "any", true, true, false, 598)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 598), "label", [], "any", false, false, false, 598), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 598), "name", [], "any", false, false, false, 598)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 598), "name", [], "any", false, false, false, 598)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 598), "translationDomain", [], "any", false, false, false, 598)), "html", null, true);
            echo "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 601
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 601), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 601), "name", [], "any", false, false, false, 601), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 601), "html", null, true);
            echo "\">
                    <div class=\"form-widget my-2\">
                        ";
            // line 603
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                    </div>
                </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 609
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach((filterCheckbox) => {
            filterCheckbox.addEventListener('change', () => {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        document.querySelector('form#";
        // line 624
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 624), "id", [], "any", false, false, false, 624), "html", null, true);
        echo "').addEventListener('change', (event) => {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            const filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>
";
    }

    // line 637
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 638
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 639
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 639), 'row');
        echo "
        ";
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 640), 'row');
        echo "
        <div id=\"wrapper_";
        // line 641
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 641), "vars", [], "any", false, false, false, 641), "id", [], "any", false, false, false, 641), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 641), "vars", [], "any", false, false, false, 641), "value", [], "any", false, false, false, 641) != "between")) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 642
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 642), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 645
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 645), "vars", [], "any", false, false, false, 645), "id", [], "any", false, false, false, 645), "html", null, true);
        echo "').addEventListener('change', (event) => {
                const input = document.querySelector('#wrapper_";
        // line 646
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 646), "vars", [], "any", false, false, false, 646), "id", [], "any", false, false, false, 646), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 651
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 654
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 655
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 658
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 659
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 661
        $context["placeholder"] = "";
        // line 662
        echo "            ";
        $context["title"] = "";
        // line 663
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 664
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 665
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 666
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 667
                echo "                ";
            } else {
                // line 668
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 668);
                // line 669
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 669));
                // line 670
                echo "                ";
            }
            // line 671
            echo "            ";
        }
        // line 672
        echo "            <div class=\"custom-file\">
                ";
        // line 673
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 673), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 673), "vars", [], "any", false, false, false, 673), "attr", [], "any", false, false, false, 673), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "style" => "display: none"])]);
        echo "
                ";
        // line 674
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 674), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        echo "
            </div>
            <div class=\"input-group-text\" ";
        // line 676
        if (twig_test_empty(($context["currentFiles"] ?? null))) {
            echo "style=\"display: none\"";
        }
        echo ">";
        // line 677
        if (($context["currentFiles"] ?? null)) {
            // line 678
            if (($context["multiple"] ?? null)) {
                // line 679
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 679)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 681
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 681)), "html", null, true);
                echo "
                    ";
            }
        }
        // line 684
        if (($context["allow_delete"] ?? null)) {
            // line 685
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 685), "vars", [], "any", false, false, false, 685), "id", [], "any", false, false, false, 685), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 689
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 689), "vars", [], "any", false, false, false, 689), "id", [], "any", false, false, false, 689), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 694
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 695
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 698
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 699
                echo "                        <tr>
                            <td>
                                ";
                // line 701
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 701))), "html", null, true);
                    echo "\">";
                }
                // line 702
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 702)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 703
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 703), "html", null, true);
                echo "
                                    </span>
                                    .ea-fileupload .input-group .btn ";
                // line 705
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 706
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 707
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 707)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 710
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 714
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 715
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 715), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 717
        echo "    </div>
    ";
        // line 718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 718), 'errors');
        echo "
";
    }

    // line 721
    public function block_TODO_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 722
        echo "    ";
        $context["placeholder"] = "";
        // line 723
        echo "    ";
        $context["title"] = "";
        // line 724
        echo "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 725
        echo "    ";
        if (($context["currentFiles"] ?? null)) {
            // line 726
            echo "        ";
            if (($context["multiple"] ?? null)) {
                // line 727
                echo "            ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 728
                echo "        ";
            } else {
                // line 729
                echo "            ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 729);
                // line 730
                echo "            ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 730));
                // line 731
                echo "        ";
            }
            // line 732
            echo "    ";
        }
        // line 733
        echo "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 736
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), "vars", [], "any", false, false, false, 736), "attr", [], "any", false, false, false, 736), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        echo "

            ";
        // line 738
        if (($context["currentFiles"] ?? null)) {
            // line 739
            echo "                <span class=\"input-group-text\">
                    ";
            // line 740
            if (($context["multiple"] ?? null)) {
                // line 741
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 741)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 743
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 743)), "html", null, true);
                echo "
                    ";
            }
            // line 745
            echo "                </span>
            ";
        }
        // line 747
        echo "
            ";
        // line 748
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 749
            echo "                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            ";
        }
        // line 753
        echo "
            ";
        // line 754
        if (($context["currentFiles"] ?? null)) {
            // line 755
            echo "                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            ";
        }
        // line 759
        echo "        </div>

        ";
        // line 761
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 762
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 765
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 766
                echo "                        <tr>
                            <td>
                                ";
                // line 768
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 768))), "html", null, true);
                    echo "\">";
                }
                // line 769
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 769)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 770
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 770), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 772
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 773
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 774
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 774)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 777
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 781
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 782
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 782), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 784
        echo "    </div>

    ";
        // line 786
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 786), 'errors');
        echo "
";
    }

    // line 789
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 790
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 792
($context["form"] ?? null), "parent", [], "any", false, false, false, 792), "children", [], "any", false, false, false, 792)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["target"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 792), "id", [], "any", false, false, false, 792)]);
        // line 794
        echo "
    <div class=\"input-group\">
        ";
        // line 796
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2267 => 796,  2263 => 794,  2261 => 792,  2259 => 790,  2255 => 789,  2249 => 786,  2245 => 784,  2239 => 782,  2236 => 781,  2230 => 777,  2221 => 774,  2218 => 773,  2214 => 772,  2209 => 770,  2204 => 769,  2198 => 768,  2194 => 766,  2190 => 765,  2185 => 762,  2183 => 761,  2179 => 759,  2173 => 755,  2171 => 754,  2168 => 753,  2162 => 749,  2160 => 748,  2157 => 747,  2153 => 745,  2147 => 743,  2141 => 741,  2139 => 740,  2136 => 739,  2134 => 738,  2129 => 736,  2124 => 733,  2121 => 732,  2118 => 731,  2115 => 730,  2112 => 729,  2109 => 728,  2106 => 727,  2103 => 726,  2100 => 725,  2097 => 724,  2094 => 723,  2091 => 722,  2087 => 721,  2081 => 718,  2078 => 717,  2072 => 715,  2069 => 714,  2063 => 710,  2054 => 707,  2051 => 706,  2047 => 705,  2042 => 703,  2037 => 702,  2031 => 701,  2027 => 699,  2023 => 698,  2018 => 695,  2016 => 694,  2007 => 689,  1995 => 685,  1993 => 684,  1986 => 681,  1980 => 679,  1978 => 678,  1976 => 677,  1971 => 676,  1966 => 674,  1962 => 673,  1959 => 672,  1956 => 671,  1953 => 670,  1950 => 669,  1947 => 668,  1944 => 667,  1941 => 666,  1938 => 665,  1935 => 664,  1932 => 663,  1929 => 662,  1927 => 661,  1923 => 659,  1919 => 658,  1912 => 655,  1908 => 654,  1904 => 651,  1897 => 646,  1893 => 645,  1887 => 642,  1879 => 641,  1875 => 640,  1871 => 639,  1868 => 638,  1864 => 637,  1848 => 624,  1831 => 609,  1811 => 603,  1800 => 601,  1794 => 598,  1786 => 597,  1780 => 596,  1776 => 595,  1764 => 594,  1761 => 593,  1744 => 592,  1741 => 591,  1738 => 590,  1734 => 589,  1729 => 585,  1723 => 583,  1721 => 582,  1712 => 579,  1706 => 578,  1698 => 576,  1694 => 575,  1687 => 572,  1683 => 571,  1673 => 564,  1669 => 562,  1666 => 561,  1664 => 560,  1658 => 557,  1652 => 554,  1649 => 553,  1646 => 552,  1642 => 551,  1631 => 545,  1628 => 543,  1625 => 542,  1623 => 541,  1619 => 539,  1617 => 538,  1616 => 537,  1615 => 536,  1614 => 535,  1612 => 533,  1608 => 532,  1601 => 528,  1598 => 527,  1594 => 526,  1587 => 523,  1583 => 522,  1575 => 518,  1566 => 516,  1561 => 515,  1552 => 510,  1546 => 509,  1540 => 507,  1537 => 506,  1533 => 505,  1522 => 503,  1519 => 502,  1514 => 499,  1508 => 497,  1506 => 496,  1499 => 493,  1493 => 491,  1491 => 490,  1488 => 489,  1484 => 487,  1482 => 486,  1479 => 485,  1472 => 483,  1468 => 482,  1463 => 481,  1459 => 479,  1457 => 478,  1449 => 476,  1447 => 475,  1442 => 473,  1439 => 472,  1436 => 471,  1434 => 470,  1431 => 469,  1428 => 468,  1422 => 467,  1418 => 466,  1410 => 462,  1404 => 458,  1387 => 455,  1384 => 454,  1378 => 451,  1375 => 450,  1373 => 449,  1362 => 448,  1345 => 447,  1341 => 445,  1333 => 442,  1330 => 440,  1328 => 439,  1324 => 438,  1322 => 437,  1320 => 436,  1315 => 434,  1313 => 433,  1304 => 432,  1301 => 431,  1297 => 430,  1292 => 427,  1289 => 426,  1285 => 425,  1278 => 421,  1274 => 420,  1267 => 416,  1264 => 415,  1258 => 413,  1256 => 412,  1250 => 409,  1246 => 408,  1243 => 407,  1239 => 404,  1234 => 402,  1227 => 399,  1225 => 398,  1222 => 397,  1219 => 396,  1215 => 394,  1209 => 392,  1203 => 390,  1201 => 389,  1197 => 388,  1193 => 386,  1187 => 384,  1181 => 382,  1179 => 381,  1175 => 380,  1172 => 379,  1169 => 378,  1165 => 376,  1159 => 374,  1153 => 372,  1151 => 371,  1148 => 370,  1145 => 369,  1143 => 368,  1140 => 367,  1137 => 366,  1133 => 365,  1126 => 362,  1123 => 361,  1119 => 360,  1112 => 356,  1109 => 355,  1103 => 353,  1101 => 352,  1095 => 349,  1091 => 348,  1088 => 347,  1084 => 344,  1079 => 342,  1072 => 339,  1070 => 338,  1067 => 337,  1061 => 334,  1057 => 333,  1052 => 332,  1049 => 325,  1046 => 324,  1043 => 323,  1041 => 322,  1038 => 321,  1034 => 320,  1027 => 317,  1024 => 316,  1020 => 315,  1013 => 311,  1010 => 310,  1006 => 309,  1001 => 306,  995 => 304,  992 => 303,  989 => 302,  986 => 301,  984 => 300,  981 => 299,  977 => 297,  958 => 292,  953 => 290,  947 => 287,  943 => 286,  939 => 284,  936 => 283,  919 => 282,  916 => 281,  910 => 279,  907 => 278,  904 => 277,  902 => 275,  899 => 274,  896 => 273,  892 => 272,  870 => 266,  866 => 263,  863 => 260,  862 => 259,  861 => 258,  859 => 257,  857 => 256,  854 => 254,  852 => 253,  849 => 251,  846 => 249,  844 => 248,  842 => 247,  838 => 245,  836 => 244,  832 => 243,  828 => 238,  826 => 237,  820 => 236,  816 => 235,  809 => 231,  806 => 230,  803 => 229,  800 => 228,  797 => 227,  794 => 226,  788 => 224,  785 => 223,  782 => 222,  780 => 220,  778 => 219,  775 => 218,  771 => 217,  766 => 214,  758 => 209,  751 => 207,  748 => 206,  742 => 204,  740 => 203,  734 => 200,  727 => 198,  723 => 196,  720 => 195,  714 => 193,  712 => 192,  707 => 191,  705 => 190,  701 => 189,  698 => 188,  691 => 184,  688 => 183,  685 => 182,  682 => 181,  679 => 180,  676 => 179,  673 => 178,  669 => 177,  661 => 172,  657 => 170,  655 => 169,  652 => 168,  649 => 167,  646 => 166,  644 => 165,  640 => 163,  634 => 160,  631 => 159,  625 => 157,  623 => 156,  618 => 155,  616 => 154,  612 => 152,  609 => 151,  606 => 150,  604 => 148,  600 => 147,  594 => 144,  591 => 143,  589 => 141,  588 => 140,  587 => 139,  586 => 138,  585 => 137,  584 => 135,  581 => 134,  578 => 133,  575 => 132,  572 => 131,  568 => 130,  562 => 126,  559 => 125,  553 => 120,  551 => 119,  545 => 116,  543 => 115,  538 => 114,  536 => 113,  533 => 112,  526 => 108,  520 => 107,  516 => 105,  513 => 104,  511 => 99,  508 => 98,  503 => 97,  497 => 95,  495 => 94,  490 => 92,  487 => 91,  481 => 88,  478 => 87,  475 => 86,  471 => 85,  468 => 84,  465 => 83,  462 => 82,  460 => 81,  457 => 80,  455 => 79,  444 => 78,  440 => 77,  437 => 76,  435 => 74,  433 => 73,  429 => 72,  424 => 66,  421 => 64,  419 => 63,  417 => 62,  413 => 61,  409 => 58,  407 => 57,  405 => 56,  401 => 55,  397 => 52,  395 => 51,  393 => 50,  389 => 49,  382 => 46,  379 => 45,  375 => 44,  371 => 41,  368 => 39,  366 => 38,  364 => 37,  361 => 35,  359 => 34,  355 => 33,  350 => 28,  339 => 26,  334 => 25,  331 => 24,  327 => 23,  322 => 20,  320 => 19,  314 => 17,  311 => 16,  307 => 15,  300 => 12,  295 => 9,  292 => 8,  286 => 6,  283 => 5,  279 => 4,  275 => 789,  272 => 788,  270 => 721,  267 => 720,  265 => 658,  262 => 657,  260 => 654,  257 => 653,  255 => 637,  252 => 636,  250 => 589,  247 => 587,  245 => 575,  242 => 574,  240 => 571,  237 => 569,  235 => 551,  232 => 549,  230 => 532,  227 => 530,  225 => 526,  222 => 525,  220 => 522,  217 => 520,  215 => 466,  212 => 465,  210 => 425,  207 => 423,  205 => 420,  202 => 419,  200 => 365,  197 => 364,  195 => 360,  192 => 359,  190 => 320,  187 => 319,  185 => 315,  182 => 314,  180 => 309,  177 => 308,  175 => 272,  172 => 271,  169 => 269,  167 => 243,  164 => 242,  161 => 240,  159 => 235,  156 => 234,  154 => 217,  151 => 216,  149 => 177,  146 => 176,  144 => 147,  141 => 146,  139 => 130,  136 => 129,  134 => 72,  131 => 71,  128 => 69,  126 => 61,  123 => 60,  121 => 55,  118 => 54,  116 => 49,  113 => 48,  111 => 44,  108 => 43,  106 => 33,  103 => 32,  100 => 30,  98 => 23,  95 => 22,  93 => 15,  90 => 14,  88 => 4,  85 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/home/yacoubou/Bureau/roixdepaix/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/form_theme.html.twig");
    }
}
