/*! For license information please see asset_js_view_component_Wrapped_vue.XYBZs4ZMQ.js.LICENSE.txt */
(self.webpackChunkpmpr_wp_mod_panel=self.webpackChunkpmpr_wp_mod_panel||[]).push([["asset_js_view_component_Wrapped_vue"],{178:function(e,t,n){"use strict";n.r(t),n.d(t,{default:function(){return o}});var a={functional:!0,name:"PanelWrapped",props:{tag:{default:"div",type:String},wrap:{default:!1,type:Boolean},wrapRoot:{default:!1,type:Boolean}},install(e){this.installed||(e.component("WrappedComponent",this),this.installed=!0)},render(e,t){const{data:n,parent:a,props:p}=t,o=a.$options._base.util.warn,r={...t.slots()};Object.keys(r).forEach((e=>r[e]=[...r[e]]));const l=(e,t)=>{var n;return(n=e.componentOptions||e).children=[].concat(n.children||[],t||[]),n.children.length||(n.children=void 0),e};if(!r.wrapper){const e=[];r.default.forEach(((t,n)=>{if(t.data&&t.data.scopedSlots&&t.data.scopedSlots.wrapper){r.default.splice(n,1);const a=t.data.scopedSlots.wrapper();delete t.data.scopedSlots,e.push(l(t,a))}})),e.length&&(r.wrapper=e)}if(!r.wrapper)return o('You must provide a template slot named "wrapper" for this component to function as intended (e.g. <template v-slot="wrapper">).');if(!r.wrapper.length)return o("You must provide a at least one root component/element inside the wrapper template for this component to function as intended.");if(!p.wrap)return p.wrapRoot||1!==r.default.length?e(p.tag,n,r.default):r.default;const s=l(r.wrapper.shift(),r.default);return p.wrapRoot||r.wrapper.length?e(p.tag,n,[s,...r.wrapper]):s}},p=(0,n(9792).Z)(a,undefined,undefined,!1,null,null,null);p.options.__file="asset/js/view/component/Wrapped.vue";var o=p.exports}}]);