!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e="undefined"!=typeof globalThis?globalThis:e||self).SimpleMaskMoney=t()}(this,(function(){"use strict";const e={allowNegative:!1,negativeSignAfter:!1,decimalSeparator:",",fixed:!0,fractionDigits:2,prefix:"",suffix:"",thousandsSeparator:".",cursor:"end",allowEmpty:!1};function t(t){return Object.assign(Object.assign({},e),t)}const n="0123456789".split("");return function(e,l){const r=t(l),{beforeFormat:i,afterFormat:o,allowNegative:s,negativeSignAfter:u,fractionDigits:a,decimalSeparator:c,thousandsSeparator:f,fixed:d,prefix:h,suffix:g,cursor:p,allowEmpty:m}=r;if("undefined"==typeof document)return()=>{};const v="string"==typeof e?document.querySelector(e):null!=e?e:null;if(null===v)return()=>{};if(!(v instanceof HTMLInputElement))throw new Error("the element must be an input");const y=d?"0":"_";v.hasAttribute("inputmode")||v.setAttribute("inputmode","numeric");const b=(e,t)=>{v.value=e,v.dispatchEvent(new InputEvent("input")),L(t),N=e,null==o||o(e)},k=h.length,w=[...n,"Backspace",s?"-":""],E=3+c.length+a,S=e=>{var t;return null!==(t=null==e?void 0:e.length)&&void 0!==t?t:v.value.length-g.length},x=e=>e<k,A=e=>g.length>0&&e>S(),j=(e,t=!1,n)=>{let l;const r=[...e];let i=new Array;if(n){[l]=n;const[,e]=n,[t,i]=e,o=r.splice(...e);if("remove"===l&&1===o.length){const[e]=o;e!==c&&e!==f||r.splice(t-1,i)}}let o=E,s=!1,d=0,p=!1;for(let e;e=r.pop();)if("-"!==e)if(e===c&&s&&t){const e=i.indexOf(c);i.splice(e,c.length);const t=i.slice(0,a);t.length<i.length&&(o+=i.length-t.length),i=[c,...t],s=!0}else Number.isNaN(Number(e))||(o-=1,e===y?d+=1:e!==c&&d>0&&(d=0),0===o&&(i.unshift(f),o=3),i.unshift(e),i.length!==a||s||(i.unshift(c),s=!0));else p=!0;return 0!==d&&i.splice(0,d),i.every((e=>e===y))&&"remove"===l&&(p=!1),i.length<=a?i=[y,c,i.join("").padStart(a,y)]:i.length===a+c.length&&i.unshift(y),p&&i[u?"push":"unshift"]("-"),(e=>`${h}${e}${g}`)(i.join(""))},L=e=>{const t=S();let n=[t,t];return"move"===p&&e&&(n="number"==typeof e[1]?[e[0],e[1]]:[e[0],e[0]]),v.setSelectionRange(...n),n};null==i||i(v.value);const M=j(v.value.split(""),!0);let N=M;const O=e=>{var t,n;null==i||i(v.value);const l=S();let r=null!==(t=v.selectionStart)&&void 0!==t?t:l,o=null!==(n=v.selectionEnd)&&void 0!==n?n:l;if(e.ctrlKey&&"a"===e.key)return L([k,l]);if(e.ctrlKey&&"z"===e.key)return b(M);if("move"===p&&("ArrowLeft"===e.key&&r>k||"ArrowRight"===e.key&&r<l))return;if(e.preventDefault(),e.ctrlKey&&"a"===e.key)return L([k,l]);if(!w.includes(e.key))return;const s="Backspace"===e.key;if(x(r)&&([r,o]=L([k])),A(r)&&([r,o]=L([l])),s&&0===r)return;if(m&&s&&v.value.length<=h.length+1)return void b(h);const u=v.value.split(""),a=Math.abs(o-r),c=a>0,f=c?[r,a]:[r-1,1],d=[r,c?a:0,e.key],g=s?"remove":"add",y=j(u,!1,[g,{add:d,remove:f}[g]]);if(!s&&N.length<y.length&&r<S(y))r+=y.length-N.length,o+=y.length-N.length;else if(s&&N.length>y.length&&r>k){const e=N.length-y.length;r=r-e<=k?k:r-e,o=o-e<=k?k:o-e}b(y,[r,o])},$=()=>{if(document.activeElement!==v)return;const e=v.selectionStart,t=v.selectionEnd;if("number"!=typeof e||"number"!=typeof t)return;let n;const l=x(e),r=A(t),i=A(e),o=x(t);(l||r||o||i)&&(n=[l?k:r?S():e,o?k:r?S():t]),n&&L(n)};v.addEventListener("keydown",O),document.addEventListener("selectionchange",$),b(m&&M===`${h}0`?"":M);const D=()=>{v.removeEventListener("keydown",O),document.removeEventListener("selectionchange",$),delete v.removeMask};return Object.defineProperty(v,"removeMask",{value:D,configurable:!0,enumerable:!0,writable:!0}),D}}));
//# sourceMappingURL=set-mask.umd.js.map