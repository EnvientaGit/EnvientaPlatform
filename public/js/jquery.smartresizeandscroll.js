(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('jquery')) :
	typeof define === 'function' && define.amd ? define(['exports', 'jquery'], factory) :
	(factory((global.$ = global.$ || {}, global.$.fn = global.$.fn || {}),global.$));
}(this, (function (exports,jquery) { 'use strict';

jquery = jquery && jquery.hasOwnProperty('default') ? jquery['default'] : jquery;

// 参考了（reference）：
// debouncing function from John Hann
// http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
function debounce (func, threshold) {
  var timeout;
  return function debounced () {
    var obj = this, args = arguments;
    function delayed () {
      // 让调用smartresize的对象执行
      func.apply(obj, args);
      /*
      timeout = null;：这个语句只是单纯将timeout指向null，
      而timeout指向的定时器还存在，
      要想清除定时器（让setTimeout调用的函数不执行）要用clearTimeout(timeout)。
      eg：
      var timeout = setTimeout(function(){
        alert('timeout = null');// 执行
      },1000);
      timeout = null;
      var timeout = setTimeout(function(){
        alert('clearTimeout(timeout)');// 不执行
      },1000);
      clearTimeout(timeout);
      var timeout = setTimeout(function(){
        clearTimeout(timeout);
        alert('clearTimeout(timeout)');// 执行（已经开始执行匿名函数了）
      },1000);
      */ 
      timeout = null; 
    }
    // 如果有timeout正在倒计时，则清除当前timeout
    timeout && clearTimeout(timeout);
    timeout = setTimeout(delayed, threshold || 100); 
  };
}

function smartresize(fn, threshold){
  return fn ? 
    this.bind('resize', this.sras_resize = debounce(fn, threshold)) : 
    this.trigger('smartresize');
}

function smartscroll(fn, threshold){
  return fn ? 
    this.bind('scroll', this.sras_scroll = debounce(fn, threshold)) : 
    this.trigger('smartscroll'); 
}

function clearSmartresize(){
  return this.unbind('resize', this.sras_resize);
}

function clearSmartscroll(){
  return this.unbind('scroll', this.sras_scroll);
}

exports.smartresize = smartresize;
exports.smartscroll = smartscroll;
exports.clearSmartresize = clearSmartresize;
exports.clearSmartscroll = clearSmartscroll;

Object.defineProperty(exports, '__esModule', { value: true });

})));
