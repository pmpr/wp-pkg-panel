/*! For license information please see asset_js_view_component_cell_Action_vue.QJkkc7oV7.js.LICENSE.txt */
(self.webpackChunkpmpr_wp_pkg_panel=self.webpackChunkpmpr_wp_pkg_panel||[]).push([["asset_js_view_component_cell_Action_vue"],{3127:function(e,t,r){"use strict";r.r(t),r.d(t,{default:function(){return n}});var i=function(){var e=this,t=e.$createElement;return(e._self._c||t)("b-button",e._b({},"b-button",e.prepare,!1),[e._v("\n  "+e._s(e.getText)+"\n")])};i._withStripped=!0;var s={name:"PanelCellAction",props:{id:0,link:null,path:null,name:null,icon:null,text:null,target:null,disabled:!1,color:{type:String,default:"light-primary"}},computed:{prepare(){let e={id:`${this.name}-${this.id}`,size:"sm",class:`action-${this.name}`,variant:this.getColor,disabled:this.disabled},t=this.getLink;return t?e.href=t:e.target=this.target,e},hasLink(){return this.link||this.path},getLink(){let e=this.link;if(!e){let t=this.path,r=this.id;switch(this.name){case"show":e=this.$router.resolve({path:`${t}/${r}`}).href;break;case"delete":e="#";break;case"list":e=this.$router.resolve({path:t}).href;break;case"add":e=this.$router.resolve({path:`${t}/add`}).href;break;case"edit":e=this.$router.resolve({path:`${t}/${r}/edit`,params:{id:r}}).href;break;default:let i={};i=r?{path:`${t}/${r}/${this.name}`,params:{id:r}}:{path:`${t}/${this.name}`},e=this.$router.resolve(i).href}}return e},getColor(){let e=this.color;if(!e){e={add:"success",show:"info",list:"primary",edit:"warning",delete:"danger"}[this.name]}return e},getText(){let e=this.text;return e||(e=this.translate(`column.action.${this.name}`)),e}}},a=(0,r(9792).Z)(s,i,[],!1,null,null,null);a.options.__file="asset/js/view/component/cell/Action.vue";var n=a.exports}}]);