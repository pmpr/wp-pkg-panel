/*! For license information please see asset_js_view_component_card_Card_vue.QJkkc7oV7.js.LICENSE.txt */
(self.webpackChunkpmpr_wp_pkg_panel=self.webpackChunkpmpr_wp_pkg_panel||[]).push([["asset_js_view_component_card_Card_vue"],{5679:function(t,e,a){"use strict";a.r(e),a.d(e,{default:function(){return i}});var s=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",t._b({staticClass:"card card-custom"},"div",t.getValue(t.attrs,"container"),!1),[t.has_header?a("div",t._b({staticClass:"card-header"},"div",t.getValue(t.attrs,"header",{class:"py-3"}),!1),[t.getTitle||t.getDescription?a("PanelCellHeader",t._b({staticClass:"card-title",attrs:{title:t.getTitle,desc:t.getDescription,attrs:{title:t.getValue(t.attrs,"label"),desc:t.getValue(t.attrs,"description")}}},"PanelCellHeader",t.getValue(t.attrs,"title",{class:"align-items-start flex-column"}),!1)):t._e(),t._v(" "),t.$slots.toolbar?a("div",t._b({staticClass:"card-toolbar"},"div",t.getValue(t.attrs,"toolbar"),!1),[t._t("toolbar")],2):t._e()],1):t._e(),t._v(" "),t.$slots.body?a("div",t._b({staticClass:"card-body"},"div",t.getValue(t.attrs,"body"),!1),[t._t("body")],2):t._e(),t._v(" "),t.$slots.footer?a("div",t._b({staticClass:"card-footer"},"div",t.getValue(t.attrs,"footer"),!1),[t._t("footer")],2):t._e(),t._v(" "),a("PanelOverlay",{directives:[{name:"show",rawName:"v-show",value:t.loading,expression:"loading"}]})],1)};s._withStripped=!0;var r={name:"PanelCard",props:{attrs:Object,has_header:{type:Boolean,default:!0},title:{type:[String,Boolean],default:""},description:{type:[String,Boolean],default:""},loading:{type:Boolean,default:!1}},computed:{getTitle(){let t=this.title;return t||(t="string"==typeof t?this.currentRouteTitle():""),t},getDescription(){let t=this.description;return t||(t="string"==typeof t?this.currentRouteDescription():""),t}}},l=(0,a(9792).Z)(r,s,[],!1,null,null,null);l.options.__file="asset/js/view/component/card/Card.vue";var i=l.exports}}]);