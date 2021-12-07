/*! For license information please see asset_js_view_component_Modal_vue.QJkkc7oV7.js.LICENSE.txt */
(self.webpackChunkpmpr_wp_pkg_panel=self.webpackChunkpmpr_wp_pkg_panel||[]).push([["asset_js_view_component_Modal_vue"],{6594:function(e,o,t){"use strict";t.r(o),t.d(o,{default:function(){return a}});var n=function(){var e=this,o=e.$createElement,t=e._self._c||o;return t("div",[e.button?t("b-button",e._b({directives:[{name:"b-modal",rawName:"v-b-modal",value:e.id,expression:"id"}],ref:e.id},"b-button",e.button,!1),[e._v("\n    "+e._s(e.button.title)+"\n  ")]):e._e(),e._v(" "),t("b-modal",e._b({attrs:{id:e.id,"no-close-on-backdrop":e.loading,"no-close-on-esc":e.loading},on:{show:function(o){return e.onShow(o)},hide:function(o){return e.onHide(o)}},scopedSlots:e._u([{key:"modal-header",fn:function(o){var n=o.close;return[e.hasSlot("header")||!e.title&&!e.description?e._e():[t("PanelCellHeader",{attrs:{title:e.title,desc:e.description}}),e._v(" "),t("PanelOverlay",{directives:[{name:"show",rawName:"v-show",value:e.loading,expression:"loading"}]})],e._v(" "),e._t("header"),e._v(" "),t("span",{attrs:{role:"button"},on:{click:n}},[t("PanelIcon",{attrs:{icon:"fontawesome/xmark",color:"dark"}})],1)]}}],null,!0)},"b-modal",e.modal,!1),[e._v(" "),e._t("body",null,{close:e.hideModal})],2)],1)};n._withStripped=!0;var i={name:"PanelModal",props:{id:String,title:String,modal:{type:Object,default:{centered:!0}},button:{type:Object,default:null},description:String,loading:{type:Boolean,default:!1}},mounted(){this.$hook.on("modal:hide",(e=>{e===this.id&&this.hideModal()})),this.$hook.on("modal:show",(e=>{e===this.id&&this.showModal()}))},beforeDestroy(){this.$hook.off("modal:",!0)},methods:{onShow(e){this.$emit("modal-show",e)},onHide(e){this.$emit("modal-hide",e)},hideModal(){this.$root.$emit("bv::hide::modal",this.id)},showModal(){this.$root.$emit("bv::show::modal",this.id)}}},l=(0,t(9792).Z)(i,n,[],!1,null,null,null);l.options.__file="asset/js/view/component/Modal.vue";var a=l.exports}}]);