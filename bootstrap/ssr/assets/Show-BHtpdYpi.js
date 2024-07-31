import { unref, useSSRContext } from "vue";
import { ssrRenderComponent } from "vue/server-renderer";
import { Head } from "@inertiajs/vue3";
import _sfc_main$1 from "./CreateCategoryForm-CrOL0sUM.js";
import _sfc_main$2 from "./ListCategories-o5ijcwu9.js";
import "./InputLabel-Cnda-O0w.js";
import "./InputError-CFENxfoo.js";
import "./PrimaryButton-CtpSN9QQ.js";
import "vue3-toastify";
const _sfc_main = {
  __name: "Show",
  __ssrInlineRender: true,
  props: {
    "categories": {
      required: true,
      type: Object
    }
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<!--[-->`);
      _push(ssrRenderComponent(unref(Head), { title: "Категорії" }, null, _parent));
      _push(`<div class="px-4 sm:px-6 lg:px-8"><div class=""><div class="sm:flex-auto"><h1 class="text-2xl font-bold leading-6 text-gray-900">Категорії</h1></div><div class="flex flex-col mt-8 md:flex-row"><div class="w-full md:mr-16 md:w-2/5">`);
      _push(ssrRenderComponent(_sfc_main$1, null, null, _parent));
      _push(`</div><div class="w-full md:ml-16 md:w-3/5">`);
      _push(ssrRenderComponent(_sfc_main$2, { categories: __props.categories }, null, _parent));
      _push(`</div></div></div></div><!--]-->`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Admin/Category/Show.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
