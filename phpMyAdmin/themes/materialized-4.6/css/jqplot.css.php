<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for jqplot
 * for the pmahomme theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage materialized-4.6
 */

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}
?>

/* jqPlot */

/*rules for the plot target div.  These will be cascaded down to all plot elements according to css rules*/
.jqplot-target {
    position: relative;
    color: #222222;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 1em;
/*    height: 300px;
    width: 590px;*/
}

/*rules applied to all axes*/
.jqplot-axis {
    font-size: 0.75em;
}

.jqplot-xaxis {
    margin-top: 10px;
}

.jqplot-x2axis {
    margin-bottom: 10px;
}

.jqplot-yaxis {
    margin-<?php echo $right; ?>: 10px;
}

.jqplot-y2axis, .jqplot-y3axis, .jqplot-y4axis, .jqplot-y5axis, .jqplot-y6axis, .jqplot-y7axis, .jqplot-y8axis, .jqplot-y9axis, .jqplot-yMidAxis {
    margin-left: 10px;
    margin-right: 10px;
}

/*rules applied to all axis tick divs*/
.jqplot-axis-tick, .jqplot-xaxis-tick, .jqplot-yaxis-tick, .jqplot-x2axis-tick, .jqplot-y2axis-tick, .jqplot-y3axis-tick, .jqplot-y4axis-tick, .jqplot-y5axis-tick, .jqplot-y6axis-tick, .jqplot-y7axis-tick, .jqplot-y8axis-tick, .jqplot-y9axis-tick, .jqplot-yMidAxis-tick {
    position: absolute;
    white-space: pre;
}


.jqplot-xaxis-tick {
    top: 0;
    /* initial position untill tick is drawn in proper place */
    <?php echo $left; ?>: 15px;
    vertical-align: top;
}

.jqplot-x2axis-tick {
    bottom: 0;
    /* initial position untill tick is drawn in proper place */
    <?php echo $left; ?>: 15px;
    vertical-align: bottom;
}

.jqplot-yaxis-tick {
    <?php echo $right; ?>: 0px;
    /* initial position untill tick is drawn in proper place */
    top: 15px;
    text-align: <?php echo $right; ?>;
}

.jqplot-yaxis-tick.jqplot-breakTick {
    <?php echo $right; ?>: -20px;
    margin-<?php echo $right; ?>: 0;
    padding:1px 5px 1px;
    z-index: 2;
    font-size: 1.5em;
}

.jqplot-y2axis-tick, .jqplot-y3axis-tick, .jqplot-y4axis-tick, .jqplot-y5axis-tick, .jqplot-y6axis-tick, .jqplot-y7axis-tick, .jqplot-y8axis-tick, .jqplot-y9axis-tick {
    <?php echo $left; ?>: 0px;
    /* initial position untill tick is drawn in proper place */
    top: 15px;
/*    padding-left: 10px;*/
/*    padding-right: 15px;*/
    text-align: <?php echo $left; ?>;
}

.jqplot-yMidAxis-tick {
    text-align: center;
    white-space: nowrap;
}

.jqplot-xaxis-label {
    margin-top: 10px;
    font-size: 11pt;
    position: absolute;
}

.jqplot-x2axis-label {
    margin-bottom: 10px;
    font-size: 11pt;
    position: absolute;
}

.jqplot-yaxis-label {
    margin-right: 10px;
/*    text-align: center;*/
    font-size: 11pt;
    position: absolute;
}

.jqplot-yMidAxis-label {
    font-size: 11pt;
    position: absolute;
}

.jqplot-y2axis-label, .jqplot-y3axis-label, .jqplot-y4axis-label, .jqplot-y5axis-label, .jqplot-y6axis-label, .jqplot-y7axis-label, .jqplot-y8axis-label, .jqplot-y9axis-label {
/*    text-align: center;*/
    font-size: 11pt;
    margin-<?php echo $left; ?>: 10px;
    position: absolute;
}

.jqplot-meterGauge-tick {
    font-size: 0.75em;
    color: #999999;
}

.jqplot-meterGauge-label {
    font-size: 1em;
    color: #999999;
}

table.jqplot-table-legend {
    margin-top: 12px;
    margin-bottom: 12px;
    margin-left: 12px;
    margin-right: 12px;
}

table.jqplot-table-legend, table.jqplot-cursor-legend {
    background-color: rgba(255,255,255,0.6);
    border: 1px solid #cccccc;
    position: absolute;
    font-size: 0.75em;
}

td.jqplot-table-legend {
    vertical-align: middle;
}

/*
These rules could be used instead of assigning
element styles and relying on js object properties.
*/

/*
td.jqplot-table-legend-swatch {
    padding-top: 0.5em;
    text-align: center;
}

tr.jqplot-table-legend:first td.jqplot-table-legend-swatch {
    padding-top: 0px;
}
*/

td.jqplot-seriesToggle:hover, td.jqplot-seriesToggle:active {
    cursor: pointer;
}

.jqplot-table-legend .jqplot-series-hidden {
    text-decoration: line-through;
}

div.jqplot-table-legend-swatch-outline {
    border: 1px solid #cccccc;
    padding: 1px;
}

div.jqplot-table-legend-swatch {
    width: 0;
    height: 0;
    border-top-width: 5px;
    border-bottom-width: 5px;
    border-left-width: 6px;
    border-right-width: 6px;
    border-top-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-right-style: solid;
}

.jqplot-title {
    top: 0;
    <?php echo $left; ?>: 0px;
    padding-bottom: 0.5em;
    font-size: 1.2em;
}

table.jqplot-cursor-tooltip {
    border: 1px solid #cccccc;
    font-size: 0.75em;
}


.jqplot-cursor-tooltip {
    border: 1px solid #cccccc;
    font-size: 0.75em;
    white-space: nowrap;
    background: rgba(208,208,208,0.5);
    padding: 1px;
}

.jqplot-highlighter-tooltip, .jqplot-canvasOverlay-tooltip {
    border: 1px solid #cccccc;
    font-size: 0.75em;
    white-space: nowrap;
    background: rgba(208,208,208,0.5);
    padding: 1px;
}

.jqplot-point-label {
    font-size: 0.75em;
    z-index: 2;
}

td.jqplot-cursor-legend-swatch {
    vertical-align: middle;
    text-align: center;
}

div.jqplot-cursor-legend-swatch {
    width: 1.2em;
    height: 0.7em;
}

.jqplot-error {
/*   Styles added to the plot target container when there is an error go here.*/
    text-align: center;
}

.jqplot-error-message {
/*    Styling of the custom error message div goes here.*/
    position: relative;
    top: 46%;
    display: inline-block;
}

div.jqplot-bubble-label {
    font-size: 0.8em;
/*    background: rgba(90%, 90%, 90%, 0.15);*/
    padding-left: 2px;
    padding-right: 2px;
    color: rgb(20%, 20%, 20%);
}

div.jqplot-bubble-label.jqplot-bubble-label-highlight {
    background: rgba(90%, 90%, 90%, 0.7);
}

div.jqplot-noData-container {
    text-align: center;
    background-color: rgba(96%, 96%, 96%, 0.3);
}
