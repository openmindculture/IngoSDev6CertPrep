"use strict";(self.webpackChunk=self.webpackChunk||[]).push([["ingo-s-demo-together-theme"],{5377:(e,t,s)=>{var o=s(6285);class n extends o.Z{init(){console.log("init method in class IngoSDemoTogetherTheme"),this.addAnimationEffectClassNames()}addAnimationEffectClassNames(){console.log("addAnimationEffectClassNames");const e=document.querySelectorAll(".ingos-cost-group");for(let t=0;t<=e.length;t++)console.log(`processing animatableElements[${t}]`),e[t].addEventListener("click",this.costGroupEnterHandler)}costGroupEnterHandler(e){if(!e)return;console.log("costGroupEnterHandler"),e.classList.add("ingos-active");const t=e.id,s=document.getElementById("ingos-cost-group-contents").querySelector("*[data-for='"+t+"']");s.classList.add("ingos-active");const o=e.querySelector(".ingos-cost-group-bar");o&&o.classList.add("animate__animated","animate__pulse");const n=document.getElementsByClassName("ingos-cost-group");for(let t=0;t<n.length;t++)if(n.item(t)!=e){n.item(t).classList.remove("ingos-active");const e=n.item(t).querySelector(".ingos-cost-group-bar");e&&e.classList.remove("animate__animated","animate__pulse")}var a=document.getElementsByClassName("ingos-cost-group-content");for(let e=0;e<a.length;e++)a.item(e)!=s&&a.item(e).classList.remove("ingos-active")}}console.log("main.js in theme plugin");console.log("implicit string assigned using const to verify if Shopware has a default transpilation"),console.log("after REALLY renaming main.js to main.ts");window.PluginManager.register("IngoSDemoTogetherTheme",n)}},e=>{e.O(0,["vendor-node","vendor-shared"],(()=>{return t=5377,e(e.s=t);var t}));e.O()}]);