"use strict";(self.webpackChunk=self.webpackChunk||[]).push([["ingo-s-demo-together-theme"],{5377:(e,t,s)=>{var o=s(6285);class n extends o.Z{init(){this.addAnimationEffectClassNames()}addAnimationEffectClassNames(){console.log("addAnimationEffectClassNames");const e=document.querySelectorAll(".ingos-cost-group");for(let t=0;t<e.length;t++)e[t].addEventListener("click",this.costGroupEnterHandler)}costGroupEnterHandler(e){if(!e)return;const t=e.currentTarget;console.log("costGroupEnterHandler"),t.classList.add("ingos-active");const s=t.id,o=document.getElementById("ingos-cost-group-contents");if(!o)return;const n=o.querySelector("*[data-for='"+s+"']");n.classList.add("ingos-active");const a=t.querySelector(".ingos-cost-group-bar");a&&a.classList.add("animate__animated","animate__pulse");const r=document.getElementsByClassName("ingos-cost-group");for(let e=0;e<r.length;e++)if(r.item(e)!=t){r.item(e).classList.remove("ingos-active");const t=r.item(e).querySelector(".ingos-cost-group-bar");t&&t.classList.remove("animate__animated","animate__pulse")}var i=document.getElementsByClassName("ingos-cost-group-content");for(let e=0;e<i.length;e++)i.item(e)!=n&&i.item(e).classList.remove("ingos-active")}}window.PluginManager.register("IngoSDemoTogetherTheme",n)}},e=>{e.O(0,["vendor-node","vendor-shared"],(()=>{return t=5377,e(e.s=t);var t}));e.O()}]);