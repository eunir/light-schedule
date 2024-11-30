"use strict";Object.defineProperty(exports,"__esModule",{value:!0});const e={allowNegative:!1,negativeSignAfter:!1,decimalSeparator:",",fixed:!0,fractionDigits:2,prefix:"",suffix:"",thousandsSeparator:".",cursor:"end",allowEmpty:!1};function t(t){return Object.assign(Object.assign({},e),t)}const n="0123456789".split("");function r(e,r){const o=t(r),{beforeFormat:i,afterFormat:l,allowNegative:s,negativeSignAfter:u,fractionDigits:a,decimalSeparator:c,thousandsSeparator:f,fixed:g,prefix:p,suffix:m,cursor:d,allowEmpty:h}=o;if("undefined"==typeof document)return()=>{};const v="string"==typeof e?document.querySelector(e):null!=e?e:null;if(null===v)return()=>{};if(!(v instanceof HTMLInputElement))throw new Error("the element must be an input");const y=g?"0":"_";v.hasAttribute("inputmode")||v.setAttribute("inputmode","numeric");const b=(e,t)=>{v.value=e,v.dispatchEvent(new InputEvent("input")),M(t),O=e,null==l||l(e)},k=p.length,S=[...n,"Backspace",s?"-":""],N=3+c.length+a,w=e=>{var t;return null!==(t=null==e?void 0:e.length)&&void 0!==t?t:v.value.length-m.length},x=e=>e<k,$=e=>m.length>0&&e>w(),E=(e,t=!1,n)=>{let r;const o=[...e];let i=new Array;if(n){[r]=n;const[,e]=n,[t,i]=e,l=o.splice(...e);if("remove"===r&&1===l.length){const[e]=l;e!==c&&e!==f||o.splice(t-1,i)}}let l=N,s=!1,g=0,d=!1;for(let e;e=o.pop();)if("-"!==e)if(e===c&&s&&t){const e=i.indexOf(c);i.splice(e,c.length);const t=i.slice(0,a);t.length<i.length&&(l+=i.length-t.length),i=[c,...t],s=!0}else Number.isNaN(Number(e))||(l-=1,e===y?g+=1:e!==c&&g>0&&(g=0),0===l&&(i.unshift(f),l=3),i.unshift(e),i.length!==a||s||(i.unshift(c),s=!0));else d=!0;return 0!==g&&i.splice(0,g),i.every((e=>e===y))&&"remove"===r&&(d=!1),i.length<=a?i=[y,c,i.join("").padStart(a,y)]:i.length===a+c.length&&i.unshift(y),d&&i[u?"push":"unshift"]("-"),(e=>`${p}${e}${m}`)(i.join(""))},M=e=>{const t=w();let n=[t,t];return"move"===d&&e&&(n="number"==typeof e[1]?[e[0],e[1]]:[e[0],e[0]]),v.setSelectionRange(...n),n};null==i||i(v.value);const j=E(v.value.split(""),!0);let O=j;const A=e=>{var t,n;null==i||i(v.value);const r=w();let o=null!==(t=v.selectionStart)&&void 0!==t?t:r,l=null!==(n=v.selectionEnd)&&void 0!==n?n:r;if(e.ctrlKey&&"a"===e.key)return M([k,r]);if(e.ctrlKey&&"z"===e.key)return b(j);if("move"===d&&("ArrowLeft"===e.key&&o>k||"ArrowRight"===e.key&&o<r))return;if(e.preventDefault(),e.ctrlKey&&"a"===e.key)return M([k,r]);if(!S.includes(e.key))return;const s="Backspace"===e.key;if(x(o)&&([o,l]=M([k])),$(o)&&([o,l]=M([r])),s&&0===o)return;if(h&&s&&v.value.length<=p.length+1)return void b(p);const u=v.value.split(""),a=Math.abs(l-o),c=a>0,f=c?[o,a]:[o-1,1],g=[o,c?a:0,e.key],m=s?"remove":"add",y=E(u,!1,[m,{add:g,remove:f}[m]]);if(!s&&O.length<y.length&&o<w(y))o+=y.length-O.length,l+=y.length-O.length;else if(s&&O.length>y.length&&o>k){const e=O.length-y.length;o=o-e<=k?k:o-e,l=l-e<=k?k:l-e}b(y,[o,l])},L=()=>{if(document.activeElement!==v)return;const e=v.selectionStart,t=v.selectionEnd;if("number"!=typeof e||"number"!=typeof t)return;let n;const r=x(e),o=$(t),i=$(e),l=x(t);(r||o||l||i)&&(n=[r?k:o?w():e,l?k:o?w():t]),n&&M(n)};v.addEventListener("keydown",A),document.addEventListener("selectionchange",L),b(h&&j===`${p}0`?"":j);const T=()=>{v.removeEventListener("keydown",A),document.removeEventListener("selectionchange",L),delete v.removeMask};return Object.defineProperty(v,"removeMask",{value:T,configurable:!0,enumerable:!0,writable:!0}),T}function o(e){if("undefined"==typeof document)return()=>{};const t="string"==typeof e?document.querySelector(e):null!=e?e:null;if(null===t)return()=>{};if(!(t instanceof HTMLInputElement))throw new Error("the element must be an input");return()=>{if("removeMask"in t&&"function"==typeof t.removeMask)return t.removeMask()}}function i(e,n){const{decimalSeparator:r,allowNegative:o}=t(n),i=e=>e.toString().replace(".",r),l=("number"==typeof e?i(e):(e=>{const t=Number(e);return Number.isNaN(t)?e:i(t)})(e)).split("");let s="";const u=o&&l.includes("-");for(let e;e=l.shift();)Number.isNaN(Number(e))||(s+=e),e===r&&(s+=".");return parseFloat(`${u?"-":""}${s}`)}function l(e,t){return(n,r={})=>e(n,Object.assign(Object.assign({},t),r))}function s(e,n){const{fixed:r,prefix:o,suffix:l,fractionDigits:s,thousandsSeparator:u,decimalSeparator:a,allowNegative:c,negativeSignAfter:f}=t(n),g=r?"0":"_",p=e=>`${o}${e}${l}`,m=e=>e.padEnd(s,g),d=e.toString();if(0===d.length)return p(`${g}${a}${m("")}`);let h="";const v=c&&d.includes("-"),y=i(e,n).toString().replace("-",""),[b,k]=y.toString().split("."),S=m(k?k.substring(0,s):""),N=[];for(let e=0;e<b.length;e+=3)N.unshift(b.substring(b.length-e,b.length-e-3));return h=`${N.join(u)}${a}${S}`,v&&(h=f?`${h}-`:`-${h}`),p(h)}const u={setMask:r,removeMask:o,formatToNumber:i,createInstanceOf:l,formatToCurrency:s};exports.createInstanceOf=l,exports.default=u,exports.formatToCurrency=s,exports.formatToNumber=i,exports.removeMask=o,exports.setMask=r;
//# sourceMappingURL=simple-mask-money.cjs.js.map