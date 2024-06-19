(()=>{"use strict";const e=window.wc.blocksCheckout,t=window.wc.wcBlocksSharedHocs,n=window.React,i=window.wp.element,o=window.wp.i18n,c=window.wc.wcSettings,{optinDefaultText:r,gdprHeadline:s,gdprFields:a,gdprStatus:l}=(0,c.getSetting)("mailchimp-newsletter_data",""),m={text:{type:"string",default:r},gdprHeadline:{type:"string",default:s},gdpr:{type:"array",default:a},gdprStatus:{type:"string",default:l}},d=JSON.parse('{"apiVersion":2,"name":"woocommerce/mailchimp-newsletter-subscription","version":"1.0.0","title":"Mailchimp Newsletter!","category":"woocommerce","description":"Adds a newsletter subscription checkbox to the checkout.","supports":{"html":true,"align":false,"multiple":false,"reusable":false},"parent":["woocommerce/checkout-contact-information-block"],"attributes":{"lock":{"type":"object","default":{"remove":true,"move":true}}},"textdomain":"mailchimp-woocommerce","editorStyle":"file:../../../build/style-newsletter-block.css"}');(0,e.registerCheckoutBlock)({metadata:d,component:(0,t.withFilteredAttributes)(m)((({cart:t,extensions:c,text:r,gdprHeadline:s,gdprStatus:a,gdpr:l,checkoutExtensionData:m})=>{let d={};l&&l.length&&l.forEach((e=>{d[e.marketing_permission_id]=!1}));const p="check"===a,[u,w]=(0,i.useState)(p),[h]=(0,i.useState)({}),{setExtensionData:g}=m;return(0,i.useEffect)((()=>{g("mailchimp-newsletter","optin",u)}),[u,g]),(0,n.createElement)("div",{className:"wc-block-components-checkout-step__container"},(0,n.createElement)("div",{style:{display:"hide"===a?"none":""},className:"wc-block-components-checkout-step__content"},(0,n.createElement)(e.CheckboxControl,{id:"subscribe-to-newsletter",checked:u,onChange:w},(0,n.createElement)("span",{dangerouslySetInnerHTML:{__html:r}})),l&&l.length?(0,o.__)(s,"mailchimp-for-woocommerce"):"",l&&l.length?l.map((t=>(0,n.createElement)(e.CheckboxControl,{id:"gdpr_"+t.marketing_permission_id,checked:h[t.marketing_permission_id],onChange:e=>{h[t.marketing_permission_id]=!h[t.marketing_permission_id],g("mailchimp-newsletter","gdprFields",h)}},(0,n.createElement)("span",{dangerouslySetInnerHTML:{__html:t.text}})))):""))}))})})();