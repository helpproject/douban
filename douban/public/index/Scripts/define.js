!function(win){function each(obj,iterator,context){if(obj)if(Array.prototype.forEach&&obj.forEach)obj.forEach(iterator,context);else for(var i=0,l=obj.length;i<l;i++)i in obj&&iterator.call(context,obj[i],i,obj)}function isString(obj){return"[object String]"==Object.prototype.toString.call(obj)}function isObject(obj){return obj===Object(obj)}function getDep(name){var mod=define._global_exports[name];return mod&&mod.exports}function load(deps,fn){var callee=define,exports={},mod=callee._global_exports[name]||{},args=(callee._ns=mod.ns||callee._current_ns||callee._ns||"window",[]);return each(deps,function(name){args.push(getDep(name))}),exports=fn.apply(this,args)||{}}function define(name,deps,fn){if(!isString(name))throw new Error("Waring: definejs can't handle anonymous AMD module");fn||(fn=deps,deps=[]),"jquery"===name&&delete define.amd;var exports=load(deps,fn),mod=define._global_exports[name];if(!mod)throw new Error('Waring: there is no definition of "'+name+'" in define.config ?');mod.exports=exports,mod.alias&&each(mod.alias,function(alias){var names=alias.split("."),context=win,name=names[0];names[1]&&(context=context[name]=context[name]||{},name=names[1]),context[name]=exports})}function require(reqs,fn){var reqsIsString=isString(reqs);if(!fn&&reqsIsString)return getDep(reqs);reqsIsString&&(reqs=[reqs]);var args=arguments;setTimeout(function(){load.apply(this,args)},0)}define._global_exports={},define.ns=function(mid,namespace){if(namespace){var mods=this._global_exports;mods[mid]||(mods[mid]={alias:[]}),mods[mid].ns=namespace}else this._ns=mid},define.config=function(mid,vars){if(isObject(mid))for(var id in mid)this.config(id,mid[id]);else{var mods=this._global_exports;mods[mid]||(mods[mid]={ns:this._ns,alias:[]}),isString(vars)&&(vars=[vars]),[].push.apply(mods[mid].alias,vars)}},define.amd={jQuery:!0},win.define=define,win.require=require}(window);
