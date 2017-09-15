
<?php if (!isFrameworkAll()) { ?>
    <h2 id="nextsteps-aurelia-datagrid"><img style="vertical-align: middle" src="/images/aurelia_small.png" height="25px"/> Next Steps</h2>
<?php } ?>

<h2 id="ng2markup">Creating Grids with Markup</h2>

<p>You can create Grids either programatically (with pure JavaScript/Typescript/Components), or declare them via declaratively with markup.</p>
<p>The above section details how to specify the Grid itself. To declare columns you can specify them as follows:</p>

<h3 id="column-definition">Column Definition</h3>
<snippet>
&lt;ag-grid-column header-name="Name" field="name" width.bind="150" pinned.bind="true"&gt;&lt;/ag-grid-column&gt;</snippet>

<p>This example declares a simple Column Definition, specifying header name, field and width.</p>

<h3 id="setting-column-properties">Setting Column Properties</h3>
<p>There are some simple rules you should follow when setting column properties via Markup:</p>
<snippet>
// string value
property-name="String Value"
property-name="'String Value'"
property-name="${Interpolated Value}"

// boolean value
property-name.bind="true|false"
property-name.bind="{{Interpolated Value}}"
property-name.bind="functionCallReturningABoolean()"

// numeric value
property-name="Numeric Value"
property-name.bind="functionCallReturningANumber()"

// function value
property-name.bind="functionName"
property-name.bind="functionCallReturningAFunction()"</snippet>

<h4 id="setting-a-class-or-a-complex-value">Setting a Class or a Complex Value:</h4>
<p>You can set a Class or a Complex property in the following way:</p>
<snippet>
// return a Class definition for a Filter
filter.bind="getSkillFilter()"

private getSkillFilter():any {
    return SkillFilter;
}

// return an Object for filterParams
filter-params.bind.bind="getCountryFilterParams()"

private getCountryFilterParams():any {
    return {
        cellRenderer: this.countryCellRenderer,
        cellHeight: 20
    }
}</snippet>

<h3 id="grouped-column-definition">Grouped Column Definition</h3>
<p>To specify a Grouped Column, you can nest a column defintion:</p>
<snippet>
&lt;ag-grid-column header-name="IT Skills"&gt;
&lt;ag-grid-column header-name="Skills" width.bind="125" suppress-sorting.bind="true" cell-renderer.bind="skillsCellRenderer" filter.bind="getSkillFilter()"&gt;&lt;/ag-grid-column&gt;
&lt;ag-grid-column header-name="Proficiency" field="proficiency" width.bind="120"
                cell-renderer.bind="percentCellRenderer" filter.bind="getProficiencyFilter()"&gt;&lt;/ag-grid-column&gt;
&lt;/ag-grid-column&gt;</snippet>
<p>In this example we have a parent Column of "IT Skills", with two child columns.</p>

<h2 id="cell-rendering-cell-editing-using-aurelia">Cell Rendering & Cell Editing using Aurelia</h2>

<p>
    It is possible to build
    <a href="../javascript-grid-cell-rendering-components/#aureliaCellRendering">cell renderer's</a>,
    <a href="../javascript-grid-cell-editing/#aureliaCellEditing">cell editors</a> and
    <a href="../javascript-grid-filtering/#aureliaFiltering">filters</a> using Aurelia. Doing each of these
    is explained in the section on each.
</p>

<p>
    Although it is possible to use Aurelia for your customisations of ag-Grid, it is not necessary. The grid
    will happily work with both Aurelia and non-Aurelia portions (eg cell renderer's in Aurelia or normal JavaScript).
    If you do use Aurelia, be aware that you are adding an extra layer of indirection into ag-Grid. ag-Grid's
    internal framework is already highly tuned to work incredibly fast and does not require Aurelia or anything
    else to make it faster. If you are looking for a lightning fast grid, even if you are using Aurelia and
    the ag-grid-aurelia component, consider using plain ag-Grid Components (as explained on the pages for
    rendering etc) inside ag-Grid instead of creating Aurelia counterparts.
</p>

<?php
$framework_enterprise = 'import {GridOptions} from "ag-grid";
import "ag-grid-enterprise/main";

...other dependencies';

include '../javascript-grid-getting-started/ag-grid-enterprise-framework.php'
?>

<h2 id="next-steps">Next Steps...</h2>

<p>
    Now you can go to <a href="../javascript-grid-interfacing-overview/">interfacing</a>
    to learn about accessing all the features of the grid.
</p>
