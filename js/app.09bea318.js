(function(t){function e(e){for(var r,o,i=e[0],s=e[1],u=e[2],f=0,p=[];f<i.length;f++)o=i[f],Object.prototype.hasOwnProperty.call(a,o)&&a[o]&&p.push(a[o][0]),a[o]=0;for(r in s)Object.prototype.hasOwnProperty.call(s,r)&&(t[r]=s[r]);l&&l(e);while(p.length)p.shift()();return c.push.apply(c,u||[]),n()}function n(){for(var t,e=0;e<c.length;e++){for(var n=c[e],r=!0,i=1;i<n.length;i++){var s=n[i];0!==a[s]&&(r=!1)}r&&(c.splice(e--,1),t=o(o.s=n[0]))}return t}var r={},a={app:0},c=[];function o(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=t,o.c=r,o.d=function(t,e,n){o.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},o.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)o.d(n,r,function(e){return t[e]}.bind(null,r));return n},o.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return o.d(e,"a",e),e},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},o.p="";var i=window["webpackJsonp"]=window["webpackJsonp"]||[],s=i.push.bind(i);i.push=e,i=i.slice();for(var u=0;u<i.length;u++)e(i[u]);var l=s;c.push([0,"chunk-vendors"]),n()})({0:function(t,e,n){t.exports=n("56d7")},"034f":function(t,e,n){"use strict";n("85ec")},"56d7":function(t,e,n){"use strict";n.r(e);n("e260"),n("e6cf"),n("cca6"),n("a79d");var r=n("2b0e"),a=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{attrs:{id:"app"}},[r("img",{attrs:{alt:"Vue logo",src:n("cf05")}}),r("HelloWorld")],1)},c=[],o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"main-container"},[n("div",{staticClass:"top-bar"},[n("div",{staticClass:"left"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.countryName,expression:"countryName"}],attrs:{type:"text",placeholder:"請輸入國家名稱"},domProps:{value:t.countryName},on:{input:function(e){e.target.composing||(t.countryName=e.target.value)}}}),n("span",{staticClass:"sort",on:{click:function(e){t.isReverse=!t.isReverse}}},[t._v(t._s(t.isReverse?"反序":"正序")),n("span",{class:["triangle",{"is-reverse":t.isReverse}]})])]),n("div",{staticClass:"page-box"},[n("button",{on:{click:function(e){return t.changePage("prev")}}},[t._v("PREV")]),n("span",[t._v(t._s(this.currentPage)+" / "+t._s(this.totalPage))]),n("button",{on:{click:function(e){return t.changePage("next")}}},[t._v("NEXT")])])]),n("table",[t._m(0),t.isLoading?n("tbody",[t._m(1)]):0===t.filterSearch.length?n("tbody",[t._m(2)]):n("tbody",t._l(t.filterSearch.slice(t.pageStart,t.pageStart+t.pageSize),(function(e,r){return n("tr",{key:r},[n("td",{staticClass:"flag"},[t._v(t._s(e.flag))]),n("td",{staticClass:"link",on:{click:function(n){return t.getPop(e)}}},[t._v(t._s(e.name))]),n("td",{staticClass:"text-center"},[t._v(t._s(e.cca2))]),n("td",{staticClass:"text-center"},[t._v(t._s(e.cca3))]),n("td",[t._v(t._s(e.native))]),n("td",[n("ul",t._l(e.altSpellings,(function(e,r){return n("li",{key:r},[t._v(" "+t._s(e)+" ")])})),0)]),n("td",{staticClass:"text-center"},[t._v(t._s(e.idd))])])})),0)]),n("PopModel",{attrs:{country:t.currentCountry},on:{close:t.closePop}})],1)},i=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("thead",[n("tr",[n("th",[t._v("國旗")]),n("th",[t._v("國家名稱")]),n("th",[t._v("２位國家代碼")]),n("th",[t._v("3位國家代碼")]),n("th",[t._v("母語名稱")]),n("th",[t._v("替代國家名稱")]),n("th",[t._v("國際電話區號")])])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("tr",[n("td",{staticClass:"text-center h-100",attrs:{colspan:"7"}},[t._v("加載中...")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("tr",[n("td",{staticClass:"text-center h-100",attrs:{colspan:"7"}},[t._v("無符合資料...")])])}],s=(n("4e82"),n("4de4"),n("d3b7"),n("caad"),n("2532"),n("b0c0"),n("159b"),n("b64b"),function(){var t=this,e=t.$createElement,n=t._self._c||e;return t.country?n("div",{staticClass:"pop"},[n("div",{staticClass:"mask",on:{click:function(e){return t.close()}}}),n("div",{staticClass:"pop-box"},[n("div",{staticClass:"flag"},[t._v(t._s(t.country.flag))]),n("div",{staticClass:"table-box"},[n("table",[n("tr",[n("td",[t._v("國家名稱")]),n("td",[t._v(t._s(t.country.name))])]),n("tr",[n("td",[t._v("2位國家代碼(cca2)")]),n("td",[t._v(t._s(t.country.cca2))])]),n("tr",[n("td",[t._v("3位國家代碼(cca3)")]),n("td",[t._v(t._s(t.country.cca3))])]),n("tr",[n("td",[t._v("母語名稱")]),n("td",[t._v(t._s(t.country.native))])]),n("tr",[n("td",[t._v("替代國家名稱")]),n("td",[n("ul",t._l(t.country.altSpellings,(function(e,r){return n("li",{key:r},[t._v(" "+t._s(e)+" ")])})),0)])]),n("tr",[n("td",[t._v("國際區碼")]),n("td",[t._v(t._s(t.country.idd))])])])])])]):t._e()}),u=[],l={name:"PopModel",props:{country:Object,default:null},data:function(){return{countryList:[],countryName:"",isReverse:!1,pageSize:25,currentPage:1,isLoading:!0}},methods:{close:function(){this.$emit("close")}}},f=l,p=(n("ffd6"),n("2877")),d=Object(p["a"])(f,s,u,!1,null,"3b7a09cb",null),v=d.exports,g={name:"HelloWorld",components:{PopModel:v},data:function(){return{countryList:[],List:[],countryName:"",currentCountry:null,isReverse:!1,pageSize:25,currentPage:1,isLoading:!0}},created:function(){var t=this,e=this;console.log(e),e.$http.get("https://restcountries.com/v3.1/all").then((function(e){e.data&&(t.getList(e.data),t.isLoading=!1,console.log("22",t.countryList))}))},computed:{filterSearch:function(){var t=this,e=this;return e.isReverse?e.countryList.filter((function(t){return e.getName(t.name).includes(e.countryName)})).sort((function(t,n){var r=e.getName(t.name).toUpperCase(),a=e.getName(n.name).toUpperCase();return r<a?-1:r>a?1:0})).reverse():e.countryList.filter((function(e){return e.name.includes(t.countryName)})).sort((function(t,n){var r=e.getName(t.name).toUpperCase(),a=e.getName(n.name).toUpperCase();return r<a?-1:r>a?1:0}))},pageStart:function(){return(this.currentPage-1)*this.pageSize},totalPage:function(){return Math.ceil(this.filterSearch.length/this.pageSize)}},methods:{getList:function(t){var e=this,n=this;t.forEach((function(t){e.countryList.push({flag:t.flag,name:n.getName(t.name),cca2:t.cca2,cca3:t.cca3,native:n.getNativeName(t.name,t.languages),idd:t.idd.root,altSpellings:t.altSpellings})}))},getName:function(t){return t.official?t.official:"/"},getNativeName:function(t,e){if(e){var n=Object.keys(e),r=n[0];if(t.nativeName[r])return t.nativeName[r].official}return"/"},changePage:function(t){if("prev"===t){if(this.currentPage>1)return this.currentPage--}else if(this.currentPage<this.totalPage)return this.currentPage++},getPop:function(t){this.currentCountry=t},closePop:function(){this.currentCountry=null}}},_=g,h=(n("e639"),Object(p["a"])(_,o,i,!1,null,"c0d375e8",null)),m=h.exports,y={name:"App",components:{HelloWorld:m}},b=y,P=(n("034f"),Object(p["a"])(b,a,c,!1,null,null,null)),C=P.exports,N=n("bc3a"),x=n.n(N),S=n("130e");r["a"].use(S["a"],x.a),r["a"].config.productionTip=!1,new r["a"]({render:function(t){return t(C)}}).$mount("#app")},"85ec":function(t,e,n){},af56:function(t,e,n){},cf05:function(t,e,n){t.exports=n.p+"img/logo.82b9c7a5.png"},e639:function(t,e,n){"use strict";n("e94e")},e94e:function(t,e,n){},ffd6:function(t,e,n){"use strict";n("af56")}});