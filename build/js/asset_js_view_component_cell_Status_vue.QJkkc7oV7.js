/*! For license information please see asset_js_view_component_cell_Status_vue.QJkkc7oV7.js.LICENSE.txt */
(self.webpackChunkpmpr_wp_pkg_panel=self.webpackChunkpmpr_wp_pkg_panel||[]).push([["asset_js_view_component_cell_Status_vue"],{6758:function(t,e,s){"use strict";s.r(e),s.d(e,{default:function(){return r}});var l=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{class:t.getClasses,attrs:{"data-status":"status-"+t.status}},[s("span",[t._v(t._s(t.title))])])};l._withStripped=!0;const a={failed:"danger",pending:"default",refunded:"secondary","on-hold":"warning",completed:"success",cancelled:"gray",processing:"info"};var n={name:"PanelCellStatus",props:{size:{type:String,default:"lg"},light:{type:Boolean,default:!0},title:String,status:{type:String,default:"pending"},statuses:{type:Object,default:a},textColor:"",classes:String,rounded:!1},computed:{getClasses(){let t=`label font-weight-bold label-inline label-${this.getColor} label-${this.size}`;return this.rounded&&(t+=" rounded-0"),this.classes&&(t+=` ${this.classes}`),this.textColor&&(t+=` text-${this.textColor}`),t},getColor(){let t={...a,...this.statuses}[this.status];return this.$helper.$isEmpty(t)&&(t="primary"),this.light&&(t="light-"+t),t}}},i=(0,s(9792).Z)(n,l,[],!1,null,null,null);i.options.__file="asset/js/view/component/cell/Status.vue";var r=i.exports}}]);