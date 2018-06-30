/**
 * MiuDom - Bylar
 * @returns {MiuDom}
 * @constructor
 */
function MiuDom() {
    document.Do = this;

    /**
     *
     * @param nodes
     * @param decFunction
     * @returns {*}
     */
    this.f = function (nodes,decFunction){
        return  (new ( function(nodes,decFunction,result) {
            this.fun = function(nodes,decFunction,result){
                var t;
                t = 0;
                while (t < nodes.length) {
                    if (decFunction(nodes[t])) {
                        result.concat([nodes[t]]);
                    } else if (nodes[t].hasChildNodes()) {
                        result = this.fun(nodes[t].childNodes,decFunction,result).resultBody
                    } else {}
                    t++;
                }
                return {resultBody:result,fun: this.fun};
            };
            this.fun(nodes,decFunction,result);
        })(nodes,decFunction,[])).resultBody;
    };
    this.t = function (nodeObject) {
        /****************************************
         *      Attribute Light Tool            *
         ****************************************/
        nodeObject.sa                   = function (attName, attValue) {
            this.setAttribute(attName, attValue);
            return this;
        };
        nodeObject.ga                   = function (attName) {
            return this.getAttribute(attName);
        };
        nodeObject.ra                   = function (attName) {
            nodeObject.removeAttribute(attName);
            return nodeObject;
        };
        /****************************************
         *           Move Light Tool            *
         ****************************************/
        nodeObject.m = {};
        nodeObject.m.rm             = function () {
            return nodeObject.remove();
        };
        nodeObject.m.to             = function (fatherNodeObject, floorNumber) {
            fatherNodeObject.insertBefore(nodeObject, fatherNodeObject.childNodes[floorNumber]);
            return nodeObject;
        };
        nodeObject.m.dep            = function (fatherNodeObject) {
            fatherNodeObject.appendChild(nodeObject);
            return nodeObject;
        };
        nodeObject.m.top            = function (fatherNodeObject) {
            return nodeObject.m.to(fatherNodeObject, 0)
        };
        /****************************************
         *          Class Light Tool            *
         ****************************************/
        nodeObject.s = {};
        nodeObject.s.set                = function (classNames) {
            return nodeObject.sa('class', classNames);
        };
        nodeObject.s.add                = function (className) {
            return nodeObject.sa('class', (nodeObject.ga('class')?nodeObject.ga('class') + ' ':'') + className);
        };
        nodeObject.s.rm                 = function (className) {
            var classArr = nodeObject.ga('class').split(' ');
            var newClasses = '';
            for (var i = 0; i < classArr.length; i++) {
                newClasses = (classArr[i] == className) ? newClasses : (newClasses + ' ' + classArr[i]);
            }
            return nodeObject.sa('class', newClasses);
        };
        nodeObject.s.is                 = function (className) {
            var classArr = nodeObject.ga('class').split(' ');
            var newClasses = 0;
            //console.log(classArr);
            for (var i = 0; i < classArr.length; i++) {

                newClasses += (classArr[i] == className) ? 1 : 0;
            }
            return (newClasses >= 1);
        };
        /****************************************
         *             select tool              *
         ****************************************/
        nodeObject.select = {};
        nodeObject.select.isParentOf                = function(node){
            while (node != undefined && node != null && node.nodeName.toUpperCase() != 'BODY'){
                if (node == nodeObject){
                    return true;
                }
                node = node.parentNode;
            }
            return false;
        };
        nodeObject.select.isChildOf                 = function(node){
            var pt = nodeObject;
            while (pt != undefined && pt != null && pt.nodeName.toUpperCase() != 'BODY'){
                if (node == pt){
                    return true;
                }
                pt = pt.parentNode;
            }
            return false;
        };
        nodeObject.select.getAllTextNode            = function(){
            return this.parent().f(nodeObject,function(node){
                return node.nodeType == '#text';
            });
        };
        nodeObject.select.getAllParentNode          = function(){
            var pt = nodeObject;var result = [];
            while (pt != undefined && pt != null && pt.tagName.toUpperCase() != 'BODY'){
                result = result.concat([pt]);
                pt = pt.parentNode;
            }
            return result;
        };
        nodeObject.select.getAllLeafNode            = function(){
            return this.parent().f(nodeObject,function(node){
                return !node.hasChildNodes();
            });
        };
        nodeObject.select.getFirstParentDivTag      = function(bool){
            if(bool && nodeObject.nodeName == 'DIV'){
                return nodeObject;
            } else {
                var pt = nodeObject;
                while (pt != undefined && pt != null && pt.nodeName.toUpperCase() != 'BODY' && pt.nodeName != 'DIV'){
                    pt = pt.parentNode;
                }
                return pt;
            }
        };
        /****************************************
         *                css tool              *
         ****************************************/
        nodeObject.css = {};
        nodeObject.css.setCss           = function(cssName,cssValue){
            var cssString   = nodeObject.ga('style');var newArray = [];
            if(cssString){
                var cssArray    = cssString.split(';');
                var i =-1;
                while(++i<cssArray.length){
                    if(cssArray[i].indexOf(':')>=0){
                        newArray[(cssArray[i].split(':')[0].toLowerCase()).replace(/\s+/g,"")] = cssArray[i].split(':')[1];
                    }
                }
            }
            newArray[(cssName.toLowerCase()).replace(/\s+/g,"")] = cssValue;cssString = '';
            for(var cssKey in newArray) {
                cssString += cssKey+ ':' + newArray[cssKey] + ';';
            }
            nodeObject.sa('style',cssString);
            return nodeObject;
        };
        nodeObject.css.getCss           = function(cssName){
            var cssString   = nodeObject.ga('style');var newArray = [];
            if(cssString) {
                var cssArray = cssString.split(';');
                var i = 0;
                while (i < cssArray.length) {
                    if (cssArray[i].indexOf(':') >= 0) {
                        newArray[(cssArray[i].split(':')[0].toLowerCase()).replace(/\s+/g, "")] = cssArray[i];
                    }
                    i++;
                }
                return newArray[cssName.toLowerCase().replace(/\s+/g,"")] || '';
            } else {
                return '';
            }
        };
        nodeObject.css.getArray         = function(){
            var cssString   = nodeObject.ga('style');var newArray = [];
            if(cssString) {
                var cssArray = cssString.split(';');
                var i = -1;
                while (++i < cssArray.length) {
                    if (cssArray[i].indexOf(':') >= 0) {
                        newArray[(cssArray[i].split(':')[0].toLowerCase()).replace(/\s+/g, "")] = cssArray[i];
                    }
                }
                return newArray;
            } else {
                return [];
            }
        };
        nodeObject.css.setMore         = function(object){
            for (var keyGen in object){
                //noinspection JSUnresolvedFunction
                if(object.hasOwnProperty(keyGen) && !!keyGen){
                    nodeObject.css.setCss( keyGen,object[keyGen]);
                }
            }
            return nodeObject;
        };
        /****************************************
         *                inner tool            *
         ****************************************/
        nodeObject.inner = {};
        nodeObject.inner.putIn = function(inner){
            nodeObject.innerHTML = inner;
            return nodeObject;
        };
        nodeObject.inner.putEnd = function(inner){
            nodeObject.innerHTML = nodeObject.innerHTML+inner;
            return nodeObject;
        };
        nodeObject.inner.putBegin = function(inner){
            nodeObject.innerHTML = inner+nodeObject.innerHTML;
            return nodeObject;
        };
        /****************************************
         *                position tool         *
         ****************************************/
        nodeObject.postion = {};
        nodeObject.postion.getPosition = function(){
            return nodeObject.postion.getPositionFrom(document.body);
        };
        nodeObject.postion.getPositionFrom = function(parentNode){
            var el = nodeObject;
            if(el.parentNode === null || el.style.display == 'none') {return false;}

            var ua = navigator.userAgent.toLowerCase();
            var isOpera = (ua.indexOf('opera') != -1);
            var isSafari = ( ua.indexOf('safari') != -1);

            var parent = null;var pos = [];
            if(el.getBoundingClientRect && parentNode == document.body){
                return {x:el.getBoundingClientRect().left + Math.max(document.documentElement.scrollLeft, document.body.scrollLeft), y:el.getBoundingClientRect().top + Math.max(document.documentElement.scrollTop, document.body.scrollTop)};
            } else{
                pos = [el.offsetLeft, el.offsetTop];
                parent = el.offsetParent;
                if (parent != el) {
                    while (parent) {
                        pos[0] += parent.offsetLeft;
                        pos[1] += parent.offsetTop;
                        parent = parent.offsetParent;
                    }
                }
                if ( isOpera || (isSafari && el.style.position == 'absolute' )) {
                    pos[0] -= document.body.offsetLeft;
                    pos[1] -= document.body.offsetTop;
                }
            }
            parent = (el.parentNode) ? el.parentNode : null;
            while (parent && parent != parentNode && parent != document.body && parent.tagName != 'HTML') {
                pos[0] -= parent.scrollLeft;
                pos[1] -= parent.scrollTop;
                parent = (parent.parentNode) ?parent.parentNode : null;
            }
            return {x:pos[0], y:pos[1]};
        };
        nodeObject.postion.getClientLeft = function(){
            return nodeObject.postion.getPosition.x;
        };
        nodeObject.postion.getClientTop = function(){
            return nodeObject.postion.getPosition.y;
        };
        /****************************************
         *                event tool            *
         ****************************************/
        nodeObject.event = {};
        nodeObject.event.add = function(eventName,aimFunction){
            if (document.addEventListener && !document.attachEvent) {
                nodeObject.addEventListener(eventName.toLowerCase(), aimFunction);
                nodeObject.addEventListener('DOM'+eventName, aimFunction);
            }
            else if (document.attachEvent && !document.addEventListener) {
                nodeObject.attachEvent('on' + eventName.toLowerCase(), aimFunction);
            } else {
                nodeObject = nodeObject || window;
                nodeObject['on'+eventName.toLowerCase()] = aimFunction;
            }
            return nodeObject;
        };
        nodeObject.event.addOnMouseWheelEvent = function(aimFunction){
            nodeObject.event.add('MouseScroll',aimFunction);
            return nodeObject;
        };
        /****************************************
         *                scroll tool           *
         ****************************************/
        nodeObject.scroll = {};
        nodeObject.scroll.slideTo = function(moveConfig,isAbs){
            if(document.MiuScrollLock){
                return false;
            } else {
                document.MiuScrollLock = true;
                var M = document.miuMath || new MiuMath();
            }

            moveConfig.left = (moveConfig.hasOwnProperty('left')) ? moveConfig.left : isAbs ? nodeObject.scrollLeft : 0;
            moveConfig.top = (moveConfig.hasOwnProperty('top')) ? moveConfig.top : isAbs ? nodeObject.scrollTop : 0;

            var aimLeft,aimTop,timeSpace,time,forwardTime,times,speedUnitCount,heightSpeedLevel,speedUnitX,speedUnitY,nowBit;
            timeSpace =  50;
            forwardTime = time = moveConfig.time;
            times = (forwardTime-forwardTime%timeSpace)/timeSpace + 1;
            heightSpeedLevel =times%2 ? (times+1)/2 : (times/2+1);
            speedUnitCount = times%2 ? heightSpeedLevel + (heightSpeedLevel*(heightSpeedLevel-1)) : (heightSpeedLevel+1)*heightSpeedLevel;

            aimLeft =isAbs? moveConfig.left:nodeObject.scrollLeft + moveConfig.left;    aimTop = isAbs? moveConfig.top:  nodeObject.scrollTop + moveConfig.top;
            speedUnitX = M.divide(aimLeft-nodeObject.scrollLeft,speedUnitCount);         speedUnitY = M.divide(aimTop-nodeObject.scrollTop,speedUnitCount);
            nodeObject
                .sa('aimLeft',aimLeft).sa('aimTop',  aimTop).sa('heightSpeedLevel',heightSpeedLevel)
                .sa('speedUnitX',  speedUnitX).sa('speedUnitY',  speedUnitY).sa('nowBit',nowBit = 1).sa('times',times)
                .sa('oldLeft',nodeObject.scrollLeft).sa('oldTop',nodeObject.scrollTop);
            setTimeout(function(){
                document.MiuScrollLock = false;
            },time + 500);
            while (0 < (time + timeSpace)) {
                setTimeout(function(){
                    var ele,nowTop,nowLeft,aimTop,aimLeft,speedUnitY,speedUnitX,nowBit,heightSpeedLevel,speedX,speedY,times,oldLeft,oldTop;
                    ele = nodeObject;
                    nowTop = ele.scrollTop;                    nowLeft = ele.scrollLeft;
                    nowBit = ele.ga('nowBit');                 heightSpeedLevel = ele.ga('heightSpeedLevel');
                    aimTop = ele.ga('aimTop');                 aimLeft = ele.ga('aimLeft');
                    speedUnitX = ele.ga('speedUnitX');        speedUnitY = ele.ga('speedUnitY');
                    times      = ele.ga('times');
                    oldLeft = ele.ga('oldLeft');     oldTop = ele.ga('oldTop');
                    if(times == nowBit){
                        ele.scrollLeft = aimLeft; ele.scrollTop = aimTop;
                        ele.ra('oldLeft').ra('oldTop').ra('nowBit').ra('times').ra('heightSpeedLevel').ra('aimTop').ra('aimLeft').ra('speedUnitX').ra('speedUnitY');
                    } else {
                        if(!document.MiuScrollLock){
                            return false;
                        }
                        speedX = (nowBit <= heightSpeedLevel ? nowBit :  ((2*heightSpeedLevel) -nowBit)) *speedUnitX ;
                        speedY = (nowBit <= heightSpeedLevel ? nowBit :  ((2*heightSpeedLevel) -nowBit)) *speedUnitY ;
                        console.log(speedX+' '+speedY);
                        ele.scrollLeft  = (aimLeft-(nowLeft + speedX))*(aimLeft - oldLeft) >0 ?nowLeft + speedX :((ele.sa('nowBit',times))? nowLeft: nowLeft);
                        ele.scrollTop   = (aimTop-(nowTop + speedY))*(aimTop - oldTop) >0   ?nowTop + speedY :((ele.sa('nowBit',times))? nowTop: nowTop);

                        ele.sa('nowBit',Number(nowBit)+1);
                    }
                },forwardTime- time);
                time = time == 0 ? -timeSpace : (time - timeSpace) > 0 ? (time - timeSpace) : 0;
            }
            return nodeObject;
        };
        nodeObject.scroll.dep = function(timeOut){
            return nodeObject.scroll.slideTo({top:nodeObject.scrollHeight-nodeObject.offsetHeight,time:timeOut|| 500},true);
        };
        nodeObject.scroll.top = function(timeOut){
            return nodeObject.scroll.slideTo({top:0,time:timeOut|| 500},true);
        };
        nodeObject.scroll.left = function(timeOut){
            return nodeObject.scroll.slideTo({left:0,time:timeOut|| 500},true);
        };
        nodeObject.scroll.right = function(timeOut){
            return nodeObject.scroll.slideTo({left:nodeObject.scrollWidth-nodeObject.offsetWidth,time:timeOut|| 500},true);
        };
        /****************************************
         *                append tool           *
         ****************************************/
        nodeObject.appEnd = {};
        nodeObject.appEnd.append = function(node){
            nodeObject.append(node);
            return nodeObject;
        };
        return nodeObject;
    };
    /**
     *
     * @param tagName
     * @returns {*}
     */
    this.c = function (tagName) {
        var nodeObject = document.createElement(tagName);
        return this.t(nodeObject);
    };

    return this;
}
/**
 * MiuTagWrite - Bylar
 * @returns {MiuTagWrite}
 * @constructor
 */
function MiuTagWrite(type,uri){
    this.tag = Do.c(type).m.dep(document.body);
    switch (type){
        case 'style':
            this.addSelection = function(selection,cssObject){
                for (var keyGen in cssObject){
                    var cssCode = '';
                    if(cssObject.hasOwnProperty(keyGen) && !!keyGen){
                        cssCode += keyGen + ':' + cssObject[keyGen] + ';';
                    }
                }
                this.tag.inner.putIn(cssCode);
            };
            break;
        case 'link':
            this.tag.sa('rel','stylesheet').sa('href',uri);
            break;
        case 'script':
            this.tag.sa('src',uri);
            break;
    }
}
/**
 * MiuData - Bylar
 * @returns {MiuData}
 * @constructor
 */
function MiuData(){
    document.Da = this;
    this.returnKeysArray = function(array){
        var keys = [];
        for (var kay in array){
            keys[keys.length] = kay;
        }
    };
    this.returnLengthOfString = function(str,isSameForChinese){
        var realLength = 0, len = str.length, charCode = -1;
        for (var i = 0; i < len; i++) {
            charCode = str.charCodeAt(i);
            if ((charCode >= 0 && charCode <= 128) || isSameForChinese) realLength += 1;
            else realLength += 2;
        }
        return realLength;
    };
    this.checkLengthByLimit = function(str,limit,isSameForChinese){
        var length = this.returnLengthOfString(str,isSameForChinese);
        return (length>=limit[0] && length < limit[1]);
    };
    this.md5 =  function (string) {

        function RotateLeft(lValue, iShiftBits) {
            return (lValue << iShiftBits) | (lValue >>> (32 - iShiftBits));
        }

        function AddUnsigned(lX, lY) {
            var lX4, lY4, lX8, lY8, lResult;
            lX8 = (lX & 0x80000000);
            lY8 = (lY & 0x80000000);
            lX4 = (lX & 0x40000000);
            lY4 = (lY & 0x40000000);
            lResult = (lX & 0x3FFFFFFF) + (lY & 0x3FFFFFFF);
            if (lX4 & lY4) {
                return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
            }
            if (lX4 | lY4) {
                if (lResult & 0x40000000) {
                    return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
                } else {
                    return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
                }
            } else {
                return (lResult ^ lX8 ^ lY8);
            }
        }

        function F(x, y, z) {
            return (x & y) | ((~x) & z);
        }

        function G(x, y, z) {
            return (x & z) | (y & (~z));
        }

        function H(x, y, z) {
            return (x ^ y ^ z);
        }

        function I(x, y, z) {
            return (y ^ (x | (~z)));
        }

        function FF(a, b, c, d, x, s, ac) {
            a = AddUnsigned(a, AddUnsigned(AddUnsigned(F(b, c, d), x), ac));
            return AddUnsigned(RotateLeft(a, s), b);
        };

        function GG(a, b, c, d, x, s, ac) {
            a = AddUnsigned(a, AddUnsigned(AddUnsigned(G(b, c, d), x), ac));
            return AddUnsigned(RotateLeft(a, s), b);
        };

        function HH(a, b, c, d, x, s, ac) {
            a = AddUnsigned(a, AddUnsigned(AddUnsigned(H(b, c, d), x), ac));
            return AddUnsigned(RotateLeft(a, s), b);
        };

        function II(a, b, c, d, x, s, ac) {
            a = AddUnsigned(a, AddUnsigned(AddUnsigned(I(b, c, d), x), ac));
            return AddUnsigned(RotateLeft(a, s), b);
        };

        function ConvertToWordArray(string) {
            var lWordCount;
            var lMessageLength = string.length;
            var lNumberOfWords_temp1 = lMessageLength + 8;
            var lNumberOfWords_temp2 = (lNumberOfWords_temp1 - (lNumberOfWords_temp1 % 64)) / 64;
            var lNumberOfWords = (lNumberOfWords_temp2 + 1) * 16;
            var lWordArray = Array(lNumberOfWords - 1);
            var lBytePosition = 0;
            var lByteCount = 0;
            while (lByteCount < lMessageLength) {
                lWordCount = (lByteCount - (lByteCount % 4)) / 4;
                lBytePosition = (lByteCount % 4) * 8;
                lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount) << lBytePosition));
                lByteCount++;
            }
            lWordCount = (lByteCount - (lByteCount % 4)) / 4;
            lBytePosition = (lByteCount % 4) * 8;
            lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80 << lBytePosition);
            lWordArray[lNumberOfWords - 2] = lMessageLength << 3;
            lWordArray[lNumberOfWords - 1] = lMessageLength >>> 29;
            return lWordArray;
        };

        function WordToHex(lValue) {
            var WordToHexValue = "", WordToHexValue_temp = "", lByte, lCount;
            for (lCount = 0; lCount <= 3; lCount++) {
                lByte = (lValue >>> (lCount * 8)) & 255;
                WordToHexValue_temp = "0" + lByte.toString(16);
                WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length - 2, 2);
            }
            return WordToHexValue;
        };

        function Utf8Encode(string) {
            string = string.replace(/\r\n/g, "\n");
            var utftext = "";

            for (var n = 0; n < string.length; n++) {

                var c = string.charCodeAt(n);

                if (c < 128) {
                    utftext += String.fromCharCode(c);
                }
                else if ((c > 127) && (c < 2048)) {
                    utftext += String.fromCharCode((c >> 6) | 192);
                    utftext += String.fromCharCode((c & 63) | 128);
                }
                else {
                    utftext += String.fromCharCode((c >> 12) | 224);
                    utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                    utftext += String.fromCharCode((c & 63) | 128);
                }

            }

            return utftext;
        };

        var x = Array();
        var k, AA, BB, CC, DD, a, b, c, d;
        var S11 = 7, S12 = 12, S13 = 17, S14 = 22;
        var S21 = 5, S22 = 9, S23 = 14, S24 = 20;
        var S31 = 4, S32 = 11, S33 = 16, S34 = 23;
        var S41 = 6, S42 = 10, S43 = 15, S44 = 21;

        string = Utf8Encode(string);

        x = ConvertToWordArray(string);

        a = 0x67452301;
        b = 0xEFCDAB89;
        c = 0x98BADCFE;
        d = 0x10325476;

        for (k = 0; k < x.length; k += 16) {
            AA = a;
            BB = b;
            CC = c;
            DD = d;
            a = FF(a, b, c, d, x[k + 0], S11, 0xD76AA478);
            d = FF(d, a, b, c, x[k + 1], S12, 0xE8C7B756);
            c = FF(c, d, a, b, x[k + 2], S13, 0x242070DB);
            b = FF(b, c, d, a, x[k + 3], S14, 0xC1BDCEEE);
            a = FF(a, b, c, d, x[k + 4], S11, 0xF57C0FAF);
            d = FF(d, a, b, c, x[k + 5], S12, 0x4787C62A);
            c = FF(c, d, a, b, x[k + 6], S13, 0xA8304613);
            b = FF(b, c, d, a, x[k + 7], S14, 0xFD469501);
            a = FF(a, b, c, d, x[k + 8], S11, 0x698098D8);
            d = FF(d, a, b, c, x[k + 9], S12, 0x8B44F7AF);
            c = FF(c, d, a, b, x[k + 10], S13, 0xFFFF5BB1);
            b = FF(b, c, d, a, x[k + 11], S14, 0x895CD7BE);
            a = FF(a, b, c, d, x[k + 12], S11, 0x6B901122);
            d = FF(d, a, b, c, x[k + 13], S12, 0xFD987193);
            c = FF(c, d, a, b, x[k + 14], S13, 0xA679438E);
            b = FF(b, c, d, a, x[k + 15], S14, 0x49B40821);
            a = GG(a, b, c, d, x[k + 1], S21, 0xF61E2562);
            d = GG(d, a, b, c, x[k + 6], S22, 0xC040B340);
            c = GG(c, d, a, b, x[k + 11], S23, 0x265E5A51);
            b = GG(b, c, d, a, x[k + 0], S24, 0xE9B6C7AA);
            a = GG(a, b, c, d, x[k + 5], S21, 0xD62F105D);
            d = GG(d, a, b, c, x[k + 10], S22, 0x2441453);
            c = GG(c, d, a, b, x[k + 15], S23, 0xD8A1E681);
            b = GG(b, c, d, a, x[k + 4], S24, 0xE7D3FBC8);
            a = GG(a, b, c, d, x[k + 9], S21, 0x21E1CDE6);
            d = GG(d, a, b, c, x[k + 14], S22, 0xC33707D6);
            c = GG(c, d, a, b, x[k + 3], S23, 0xF4D50D87);
            b = GG(b, c, d, a, x[k + 8], S24, 0x455A14ED);
            a = GG(a, b, c, d, x[k + 13], S21, 0xA9E3E905);
            d = GG(d, a, b, c, x[k + 2], S22, 0xFCEFA3F8);
            c = GG(c, d, a, b, x[k + 7], S23, 0x676F02D9);
            b = GG(b, c, d, a, x[k + 12], S24, 0x8D2A4C8A);
            a = HH(a, b, c, d, x[k + 5], S31, 0xFFFA3942);
            d = HH(d, a, b, c, x[k + 8], S32, 0x8771F681);
            c = HH(c, d, a, b, x[k + 11], S33, 0x6D9D6122);
            b = HH(b, c, d, a, x[k + 14], S34, 0xFDE5380C);
            a = HH(a, b, c, d, x[k + 1], S31, 0xA4BEEA44);
            d = HH(d, a, b, c, x[k + 4], S32, 0x4BDECFA9);
            c = HH(c, d, a, b, x[k + 7], S33, 0xF6BB4B60);
            b = HH(b, c, d, a, x[k + 10], S34, 0xBEBFBC70);
            a = HH(a, b, c, d, x[k + 13], S31, 0x289B7EC6);
            d = HH(d, a, b, c, x[k + 0], S32, 0xEAA127FA);
            c = HH(c, d, a, b, x[k + 3], S33, 0xD4EF3085);
            b = HH(b, c, d, a, x[k + 6], S34, 0x4881D05);
            a = HH(a, b, c, d, x[k + 9], S31, 0xD9D4D039);
            d = HH(d, a, b, c, x[k + 12], S32, 0xE6DB99E5);
            c = HH(c, d, a, b, x[k + 15], S33, 0x1FA27CF8);
            b = HH(b, c, d, a, x[k + 2], S34, 0xC4AC5665);
            a = II(a, b, c, d, x[k + 0], S41, 0xF4292244);
            d = II(d, a, b, c, x[k + 7], S42, 0x432AFF97);
            c = II(c, d, a, b, x[k + 14], S43, 0xAB9423A7);
            b = II(b, c, d, a, x[k + 5], S44, 0xFC93A039);
            a = II(a, b, c, d, x[k + 12], S41, 0x655B59C3);
            d = II(d, a, b, c, x[k + 3], S42, 0x8F0CCC92);
            c = II(c, d, a, b, x[k + 10], S43, 0xFFEFF47D);
            b = II(b, c, d, a, x[k + 1], S44, 0x85845DD1);
            a = II(a, b, c, d, x[k + 8], S41, 0x6FA87E4F);
            d = II(d, a, b, c, x[k + 15], S42, 0xFE2CE6E0);
            c = II(c, d, a, b, x[k + 6], S43, 0xA3014314);
            b = II(b, c, d, a, x[k + 13], S44, 0x4E0811A1);
            a = II(a, b, c, d, x[k + 4], S41, 0xF7537E82);
            d = II(d, a, b, c, x[k + 11], S42, 0xBD3AF235);
            c = II(c, d, a, b, x[k + 2], S43, 0x2AD7D2BB);
            b = II(b, c, d, a, x[k + 9], S44, 0xEB86D391);
            a = AddUnsigned(a, AA);
            b = AddUnsigned(b, BB);
            c = AddUnsigned(c, CC);
            d = AddUnsigned(d, DD);
        }

        var temp = WordToHex(a) + WordToHex(b) + WordToHex(c) + WordToHex(d);

        return temp.toLowerCase();
    };
    this.jsonEncode = function(string){
        return JSON.parse(string)
    };
    this.jsonDecode = function(object){
        return JSON.stringify(object)
    };
    this.getStringLanguage = function (content) {
        var rex, language;
        language = 'auto';
        rex = /^\w+$/;
        if (rex.exec(content)) {
            language = 'en';
        }
        rex = /^[\u4e00-\u9fa5]+$/;
        if (rex.exec(content)) {
            language = 'zh';
        }
        rex = /^[\u3040-\u309F\u30A0-\u30FF]+$/;
        if (rex.exec(content)) {
            language = 'jp';
        }
        return language;
    };
}
/**
 * MiuMath - Bylar
 * @returns {MiuMath}
 * @constructor
 */
function MiuMath(){
    document.miuMath = this;
    this.plus = function (arg1,arg2){
        var r1,r2,m;
        try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0}
        try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0}
        m=Math.pow(10,Math.max(r1,r2));
        return (arg1*m+arg2*m)/m
    };
    this.multiply  = function (arg1,arg2) {
        var m=0,s1=arg1.toString(),s2=arg2.toString();
        try{m+=s1.split(".")[1].length}catch(e){}
        try{m+=s2.split(".")[1].length}catch(e){}
        return Number(s1.replace(".",""))*Number(s2.replace(".",""))/Math.pow(10,m)
    };
    this.divide = function(arg1,arg2){
        var t1=0,t2=0,r1,r2;
        try{t1=arg1.toString().split(".")[1].length}catch(e){}
        try{t2=arg2.toString().split(".")[1].length}catch(e){}
        r1=Number(arg1.toString().replace(".",""));
        r2=Number(arg2.toString().replace(".",""));
        return (r1/r2)*Math.pow(10,t2-t1);
    };
    this.minus =  function(arg1,arg2){
        var r1,r2,m,n;
        try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0}
        try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0}
        m=Math.pow(10,Math.max(r1,r2));
        n=(r1>=r2)?r1:r2;
        return ((arg1*m-arg2*m)/m).toFixed(n);
    };
    this.factorialBy = function(step,from,to){
        to = to || 1;
        if(from = to){
            return from;
        } else if(step == 0){
            return false;
        }
        var result = 1;
        if(!((from-to)%step)){
            result *= to;
        }
        while((from-to)!=0){
            result = (result*from);
            from = (from-to)>0 ? ((from-step)>=to ? (from-step) : to): ((from+step)<=to ? (from+step) : to);
        }
        return result;
    };
    this.factorial = function(from,to){
        return this.factorialBy(1,from,to);
    };

}
/**
 * MiuAjax - Bylar
 * @returns {MiuAjax}
 * @constructor
 */
function MiuAjax(){
    document.Ajax = this;
    var Da = document.Da || new MiuData();
    this.ajaxTool = {
        /**
         * register Ajax Object
         * @returns {XMLHttpRequest}
         */
        init: function () {
            var xmlHttp = new XMLHttpRequest();
            if (!window.XMLHttpRequest)
                xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
            return xmlHttp;
        },
        /**
         * full the post/get data
         * @param opt
         */
        call: function (opt) {
            var xmlHttp = this.init();
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState === 4) {
                    xmlHttp.status === 200 ?
                        opt.success(xmlHttp.responseText, xmlHttp.responseXML) : opt.error(xmlHttp.responseText, xmlHttp.status);
                }
            };
            opt.data = this.parseData(opt.data);
            if (opt.method.toLowerCase() === 'get') {
                opt.url = opt.url + "?" + opt.data;
                opt.data = null;
            }
            xmlHttp.open(opt.method, opt.url, opt.async);
            if (opt.method.toLowerCase() === 'post')
                xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xmlHttp.send(opt.data);
        },
        /**
         * urlEncode the date
         * @param data
         * @returns {string}
         */
        parseData: function (data) {
            if (typeof data == 'object') {
                var str = '';
                for (var t in data) {
                    if(data.hasOwnProperty(t)){
                        str += "&" + t + "=" + encodeURIComponent(data[t]);
                    }
                }
                return str.length == 0 ? str : str.substring(1);
            } else {
                return data;
            }
        }
    };
    this.osAjax = function(opt){
        return this.ajaxTool.call(opt);
    };
    /**
     *
     * @param url
     * @param data
     * @param type
     * @param callBack
     * @param extData
     */
    this.send = function(url,data,type,callBack,extData){
        return this.osAjax({
            url: url,
            method:type,
            data:data,
            success:function(data,xmlData){
                callBack(data,extData,xmlData);
            }
        });
    };
    /**
     *
     * @param url
     */
    this.onlyTouch = function(url){
        return this.send(url,{},'get',function(){},{});
    };
    /**
     *
     * @param url
     * @param data
     * @param callBack
     * @param extData
     */
    this.getReturnJson = function(url,data,callBack,extData){
        return this.send(url,data,'get',function(data,extData,xmlData){
            callBack(Da.jsonDecode(data),extData,xmlData);
        },extData);
    };
    /**
     *
     * @param url
     * @param data
     * @param callBack
     * @param extData
     */
    this.postReturnJson = function(url,data,callBack,extData){
        return this.send(url,data,'post',function(data,extData,xmlData){
            callBack(Da.jsonDecode(data),extData,xmlData);
        },extData);
    };

}
/**
 * MiuTextNode - Bylar
 * @returns {MiuTextNode}
 * @constructor
 */
function MiuTextNode(text){
    this.node = document.createTextNode(content);
    this.verLib = [];
    this.verLib['firstValue'] = content;
    this.nowVer = 'firstValue';
    this.cutVer = function(verName){
        this.node.data = this.verLib[verName];
        this.nowVer = verName;
    };
    this.getNowVerName = function(){
        return this.nowVer;
    };
    this.addVer = function(verName,verContent){
        this.verLib[verName] = verContent;
    };
    return this;
}