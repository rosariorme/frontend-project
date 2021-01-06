/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};
var opts = {};
var resources = [
];
var symbols = {
"stage": {
    version: "3.0.0",
    minimumCompatibleVersion: "3.0.0",
    build: "3.0.0.322",
    baseState: "Base State",
    scaleToFit: "none",
    centerStage: "none",
    initialState: "Base State",
    gpuAccelerate: false,
    resizeInstances: false,
    content: {
            dom: [
            {
                id: 'MIQ-logo-darkbg',
                type: 'image',
                rect: ['0px', '0','80px','400px','auto', 'auto'],
                clip: ['rect(0px 80px 80px 0px)'],
                fill: ["rgba(0,0,0,0)",im+"MIQ-logo-darkbg.png",'0px','0px']
            }],
            symbolInstances: [

            ]
        },
    states: {
        "Base State": {
            "${_Stage}": [
                ["color", "background-color", 'rgba(255,255,255,0.00)'],
                ["style", "overflow", 'hidden'],
                ["style", "height", '80px'],
                ["style", "width", '80px']
            ],
            "${_MIQ-logo-darkbg}": [
                ["style", "background-position", [0,-80], {valueTemplate:'@@0@@px @@1@@px'} ],
                ["style", "clip", [0,80,80,0], {valueTemplate:'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'} ]
            ]
        }
    },
    timelines: {
        "Default Timeline": {
            fromState: "Base State",
            toState: "",
            duration: 667,
            autoPlay: true,
            labels: {
                "start": 0
            },
            timeline: [
                { id: "eid1", tween: [ "style", "${_MIQ-logo-darkbg}", "background-position", [0,-80], { valueTemplate: '@@0@@px @@1@@px', fromValue: [0,-80]}], position: 0, duration: 0 },
                { id: "eid2", tween: [ "style", "${_MIQ-logo-darkbg}", "background-position", [0,-160], { valueTemplate: '@@0@@px @@1@@px', fromValue: [0,-80]}], position: 83, duration: 0 },
                { id: "eid3", tween: [ "style", "${_MIQ-logo-darkbg}", "background-position", [0,-240], { valueTemplate: '@@0@@px @@1@@px', fromValue: [0,-160]}], position: 167, duration: 0 },
                { id: "eid4", tween: [ "style", "${_MIQ-logo-darkbg}", "background-position", [0,-320], { valueTemplate: '@@0@@px @@1@@px', fromValue: [0,-240]}], position: 250, duration: 0 },
                { id: "eid5", tween: [ "style", "${_MIQ-logo-darkbg}", "background-position", [0,-240], { valueTemplate: '@@0@@px @@1@@px', fromValue: [0,-320]}], position: 333, duration: 0 },
                { id: "eid6", tween: [ "style", "${_MIQ-logo-darkbg}", "background-position", [0,-160], { valueTemplate: '@@0@@px @@1@@px', fromValue: [0,-240]}], position: 417, duration: 0 },
                { id: "eid7", tween: [ "style", "${_MIQ-logo-darkbg}", "background-position", [0,-80], { valueTemplate: '@@0@@px @@1@@px', fromValue: [0,-160]}], position: 500, duration: 0 },
                { id: "eid8", tween: [ "style", "${_MIQ-logo-darkbg}", "background-position", [0,0], { valueTemplate: '@@0@@px @@1@@px', fromValue: [0,-80]}], position: 583, duration: 0 }            ]
        }
    }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources, opts);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-32763180");
